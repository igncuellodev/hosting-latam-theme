<?php
/**
 * Template Name: Blog
 * Template Post Type: page
 *
 * Blog landing page for the Hello Elementor child theme.
 *
 * @package HelloElementorChild
 */

get_header();

$blog_page_id     = get_queried_object_id();
$blog_url         = get_permalink($blog_page_id);
$blog_title       = "Insights";
$blog_description = get_post_field('post_excerpt', $blog_page_id);
$current_page     = max(1, (int) get_query_var('paged'), (int) get_query_var('page'));
$category_slug    = isset($_GET['blog_category']) ? sanitize_title(wp_unslash($_GET['blog_category'])) : ''; // phpcs:ignore WordPress.Security.NonceVerification.Recommended

if (empty($blog_title)) {
    $blog_title = __('Blog', 'hello-elementor-child');
}

if (empty($blog_description)) {
    $blog_description = __('Ideas, guías y novedades para impulsar tu presencia digital.', 'hello-elementor-child');
}

$query_args = array(
    'post_type'           => 'post',
    'post_status'         => 'publish',
    'posts_per_page'      => 6,
    'paged'               => $current_page,
    'ignore_sticky_posts' => true,
);

if ($category_slug) {
    $query_args['category_name'] = $category_slug;
}

$blog_query = new WP_Query($query_args);
$categories = get_categories(array('hide_empty' => true));
?>

<main id="primary" class="blog-page">
    <section class="blog-hero-section">
        <h1 class="blog-page-title">Blog de Hosting, VPS y Tecnología</h1>


    </section>
    

    <section class="blog-content blog-shell" aria-labelledby="latest-posts-title">
        <div class="blog-toolbar">
            <?php if ($categories) : ?>
                <nav class="blog-filters" aria-label="<?php esc_attr_e('Filtrar artículos por categoría', 'hello-elementor-child'); ?>">
                    <a class="blog-filter__link<?php echo $category_slug ? '' : ' is-active'; ?>" href="<?php echo esc_url($blog_url); ?>">
                        <?php esc_html_e('Ver todos', 'hello-elementor-child'); ?>
                    </a>
                    <?php foreach ($categories as $category) : ?>
                        <a class="blog-filter__link<?php echo $category_slug === $category->slug ? ' is-active' : ''; ?>" href="<?php echo esc_url(add_query_arg('blog_category', $category->slug, $blog_url)); ?>">
                            <?php echo esc_html($category->name); ?>
                        </a>
                    <?php endforeach; ?>
                </nav>
            <?php endif; ?>
        </div>

        <?php if ($blog_query->have_posts()) : ?>
            <div class="blog-grid">
                <?php
                while ($blog_query->have_posts()) :
                    $blog_query->the_post();
                    $categories_list = get_the_category();
                    $primary_category = $categories_list ? $categories_list[0]->name : __('Artículo', 'hello-elementor-child');
                    ?>
                    <article <?php post_class('blog-card'); ?>>
                        <a class="blog-card__media" href="<?php the_permalink(); ?>" aria-hidden="true" tabindex="-1">
                            <?php if (has_post_thumbnail()) : ?>
                                <?php the_post_thumbnail('medium_large', array('loading' => 'lazy')); ?>
                
                            <?php endif; ?>
                        </a>

                        <div class="blog-card__body">
                            <div class="blog-card__meta">
                                <span class="category"><?php echo esc_html($primary_category); ?></span>
                            </div>
                            <h3 class="blog-card__title"><a class="blog-card__title-link" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                            <p><?php echo esc_html(wp_trim_words(get_the_excerpt(), 20, '…')); ?></p>
                            <a class="blog-card__link" href="<?php the_permalink(); ?>">
                                <?php esc_html_e('Leer artículo', 'hello-elementor-child'); ?>
                                <span aria-hidden="true">→</span>
                            </a>
                        </div>
                    </article>
                    <?php
                endwhile;
                ?>
            </div>

            <?php
            $pagination_args = array(
                'total'     => $blog_query->max_num_pages,
                'current'   => $current_page,
                'mid_size'  => 1,
                'prev_text' => '<span aria-hidden="true">←</span> ' . __('Anterior', 'hello-elementor-child'),
                'next_text' => __('Siguiente', 'hello-elementor-child') . ' <span aria-hidden="true">→</span>',
            );

            if ($category_slug) {
                $pagination_args['add_args'] = array('blog_category' => $category_slug);
            }

            $pagination = paginate_links($pagination_args);
            if ($pagination) :
                ?>
                <nav class="blog-pagination" aria-label="<?php esc_attr_e('Paginación de artículos', 'hello-elementor-child'); ?>">
                    <?php echo wp_kses_post($pagination); ?>
                </nav>
            <?php endif; ?>
        <?php else : ?>
            <div class="blog-empty">
                <span aria-hidden="true">✦</span>
                <h2><?php esc_html_e('Muy pronto habrá nuevas historias', 'hello-elementor-child'); ?></h2>
                <p><?php esc_html_e('No encontramos artículos en esta categoría. Explora el resto del blog o vuelve en unos días.', 'hello-elementor-child'); ?></p>
                <a href="<?php echo esc_url($blog_url); ?>"><?php esc_html_e('Ver todos los artículos', 'hello-elementor-child'); ?></a>
            </div>
        <?php endif; ?>
    </section>
</main>

<?php
wp_reset_postdata();
get_footer();
