document.addEventListener("DOMContentLoaded", () => {
  const blogPage = document.querySelector(".blog-page");

  if (!blogPage) {
    return;
  }

  const prefersReducedMotion = window.matchMedia(
    "(prefers-reduced-motion: reduce)",
  ).matches;
  let activeRequest = null;

  const observeCards = (container) => {
    const cards = container.querySelectorAll(".blog-card");

    if (
      !cards.length ||
      prefersReducedMotion ||
      !("IntersectionObserver" in window)
    ) {
      return;
    }

    blogPage.classList.add("blog-animations-ready");

    const cardObserver = new IntersectionObserver(
      (entries, observer) => {
        entries.forEach((entry) => {
          if (!entry.isIntersecting) {
            return;
          }

          entry.target.classList.add("is-visible");
          observer.unobserve(entry.target);
        });
      },
      {
        rootMargin: "0px 0px -10% 0px",
        threshold: 0.12,
      },
    );

    cards.forEach((card) => cardObserver.observe(card));
  };

  const updateBlog = async (url, addHistoryEntry = true) => {
    const currentContent = blogPage.querySelector(".blog-content");

    if (!currentContent) {
      return;
    }

    if (activeRequest) {
      activeRequest.abort();
    }

    const requestController = new AbortController();
    activeRequest = requestController;
    currentContent.classList.add("is-loading");
    currentContent.setAttribute("aria-busy", "true");

    try {
      const response = await fetch(url, {
        headers: { "X-Requested-With": "XMLHttpRequest" },
        signal: requestController.signal,
      });

      if (!response.ok) {
        throw new Error(`Blog request failed with status ${response.status}`);
      }

      const responseHtml = await response.text();
      const nextDocument = new DOMParser().parseFromString(
        responseHtml,
        "text/html",
      );
      const nextContent = nextDocument.querySelector(".blog-content");

      if (!nextContent) {
        throw new Error(
          "The blog response did not contain the expected content.",
        );
      }

      currentContent.replaceWith(nextContent);

      if (nextDocument.title) {
        document.title = nextDocument.title;
      }

      if (addHistoryEntry) {
        window.history.pushState({ blogUrl: url }, "", url);
      }

      observeCards(nextContent);
      nextContent.scrollIntoView({
        behavior: prefersReducedMotion ? "auto" : "smooth",
        block: "start",
      });
    } catch (error) {
      if (error.name !== "AbortError") {
        console.error(error);
        currentContent.classList.remove("is-loading");
        currentContent.removeAttribute("aria-busy");
      }
    } finally {
      if (activeRequest === requestController) {
        activeRequest = null;
      }
    }
  };

  blogPage.addEventListener("click", (event) => {
    const link = event.target.closest(".blog-filter__link, .blog-pagination a");

    if (
      !link ||
      event.defaultPrevented ||
      event.button !== 0 ||
      event.metaKey ||
      event.ctrlKey ||
      event.shiftKey ||
      event.altKey
    ) {
      return;
    }

    event.preventDefault();
    updateBlog(link.href);
  });

  window.addEventListener("popstate", () => {
    updateBlog(window.location.href, false);
  });

  observeCards(blogPage);
});
