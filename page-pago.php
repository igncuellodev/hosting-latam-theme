<?php get_header(); ?>


<section class="method-wrapper">
    <h1 class="title-pago">Métodos de Pago | Hosting Latam</h1>
    <div class="payment-methods">
        <article class="method-card">
            <span class="method-icon"><img src="<?php echo esc_url(get_theme_file_uri('assets/images/svg/orden-de-compra.svg')) ?>" alt="icono de orden compra"></span>

           <h3 class="method-card-title">Orden de compra</h3>
           <p class="method-card-text">Solicita tu compra y realiza el pago en un plazo de hasta 30 días.</p>

        </article>

        <article class="method-card">
            <span class="method-icon"><img src="<?php echo esc_url(get_theme_file_uri('assets/images/svg/cheque.svg')) ?>" alt="icono de pago con cheque"></span>

           <h3 class="method-card-title">Cheque</h3> 
           <p class="method-card-text">Realiza el pago mediante cheque, con un plazo de 30 a 60 días.</p>

        </article>

        <article class="method-card">
            <span class="method-icon"><img src="<?php echo esc_url(get_theme_file_uri('assets/images/svg/transferencia.svg')); ?>" height="38px" width="38px" alt="icono de pago con transferencia"></span>

           <h3 class="method-card-title">Transferencia</h3> 
           <p class="method-card-text">Realiza el pago mediante transferencia a nuestra cuenta bancaria.</p>
        </article>

        <article class="method-card">
            <span class="method-icon"><img src="<?php echo esc_url(get_theme_file_uri('assets/images/svg/tarjeta.svg')); ?>" alt="icono de pago con tarjeta"></span>

           <h3 class="method-card-title">Tarjetas</h3>
           <p class="method-card-text">Realiza tu pago de utilizando una tarjeta de crédito o débito.</p>

        </article>

      
    </div>


    <div class="transfer-data">
        <div class="left-data">
            <h2 class="left-data-title">Datos Bancarios</h2>
            <ul class="data-list">
                <li class="dato">Razón social: Compañía de Servicios informáticos SPA</li>
                <li class="dato">Rut: 77.690.981-5</li>
                <li class="dato">Giro: Consultoría y Servicios informáticos</li>
                <li class="dato">Tipo de cuenta: Corrriente</li>
                <li class="dato">Número de cuenta: 0-000-8944882-4</li>
                <li class="dato">Banco: Santander</li>
                <li class="dato">E-mail: finanzas@hostinglatam.cl</li>

            </ul>
        </div>
        <div class="right-data">
            <img class="webpay-logo" src="<?php echo esc_url(get_theme_file_uri('assets/images/svg/webpay-logo.svg')); ?>" width="300px" alt="Logotipo Webpay">
            <img class="santander-logo" src="<?php echo esc_url(get_theme_file_uri('assets/images/svg/santander-logo.svg')); ?>" width="300px" alt="Logotipo Banco Santander">
        </div>
  </div>
</section>





<?php get_footer(); ?>



