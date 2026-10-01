<?php
/**
 * Terms and Conditions page template.
 *
 * Template Name: Términos y condiciones
 *
 * @package HelloElementorChild
 */

$terms_stylesheet_path = get_stylesheet_directory() . '/assets/css/terminos.css';

wp_enqueue_style(
    'hosting-latam-terminos',
    get_stylesheet_directory_uri() . '/assets/css/terminos.css',
    array(),
    file_exists($terms_stylesheet_path) ? (string) filemtime($terms_stylesheet_path) : null
);

get_header();
?>

<main id="primary" class="terms-page">
    <header class="terms-hero">
        <div class="terms-container terms-hero__inner">
            <h1 class="terms-title">Términos y condiciones generales de prestación de servicios</h1>
        </div>
    </header>

    <div class="terms-container terms-layout">
        <nav class="terms-toc" aria-labelledby="terms-toc-title">
            <details>
                <summary id="terms-toc-title">Contenido</summary>
                <ol>
                    <li><a href="#terminos-1">Identificación del proveedor</a></li>
                    <li><a href="#terminos-2">Objeto y ámbito de aplicación</a></li>
                    <li><a href="#terminos-3">Documentos que forman parte de la contratación</a></li>
                    <li><a href="#terminos-4">Contratación y activación</a></li>
                    <li><a href="#terminos-5">Titularidad del servicio y cambio de titular</a></li>
                    <li><a href="#terminos-6">Precios, facturación e impuestos</a></li>
                    <li><a href="#terminos-7">Renovación de los servicios</a></li>
                    <li><a href="#terminos-8">Mora y falta de pago</a></li>
                    <li><a href="#terminos-9">Suspensión y eliminación por falta de pago</a></li>
                    <li><a href="#terminos-10">Término del servicio y conservación de respaldos</a></li>
                    <li><a href="#terminos-11">Web hosting</a></li>
                    <li><a href="#terminos-12">Asociación del plan de hosting al dominio contratado</a></li>
                    <li><a href="#terminos-13">Registro de dominios</a></li>
                    <li><a href="#terminos-14">Servidores VPS</a></li>
                    <li><a href="#terminos-15">Administración de servidores</a></li>
                    <li><a href="#terminos-16">Respaldos</a></li>
                    <li><a href="#terminos-17">Restauración de información</a></li>
                    <li><a href="#terminos-18">Alta disponibilidad</a></li>
                    <li><a href="#terminos-19">Disponibilidad del servicio y SLA</a></li>
                    <li><a href="#terminos-20">Soporte técnico</a></li>
                    <li><a href="#terminos-21">Análisis de vulnerabilidades</a></li>
                    <li><a href="#terminos-22">Remediación de vulnerabilidades</a></li>
                    <li><a href="#terminos-23">Seguridad y responsabilidad compartida</a></li>
                    <li><a href="#terminos-24">Software y licencias</a></li>
                    <li><a href="#terminos-25">Uso aceptable de los servicios</a></li>
                    <li><a href="#terminos-26">Recursos y uso excesivo</a></li>
                    <li><a href="#terminos-27">Migraciones</a></li>
                    <li><a href="#terminos-28">Contenido e información del cliente</a></li>
                    <li><a href="#terminos-29">Datos personales y privacidad</a></li>
                    <li><a href="#terminos-30">Registros técnicos y logs</a></li>
                    <li><a href="#terminos-31">Confidencialidad</a></li>
                    <li><a href="#terminos-32">Tratamiento de datos personales por cuenta del cliente</a></li>
                    <li><a href="#terminos-33">Derechos de los titulares de datos personales</a></li>
                    <li><a href="#terminos-34">Vulneraciones de seguridad de datos personales</a></li>
                    <li><a href="#terminos-35">Gestión y reporte de incidentes de ciberseguridad</a></li>
                    <li><a href="#terminos-36">Propiedad intelectual</a></li>
                    <li><a href="#terminos-37">Mantenimientos</a></li>
                    <li><a href="#terminos-38">Limitación y delimitación de responsabilidad</a></li>
                    <li><a href="#terminos-39">Terminación del servicio</a></li>
                    <li><a href="#terminos-40">Portabilidad y retiro de información</a></li>
                    <li><a href="#terminos-41">Modificaciones de los términos y condiciones</a></li>
                    <li><a href="#terminos-42">Promociones y beneficios comerciales</a></li>
                    <li><a href="#terminos-43">Caso fortuito y fuerza mayor</a></li>
                    <li><a href="#terminos-44">Legislación aplicable</a></li>
                    <li><a href="#terminos-45">Comunicaciones</a></li>
                    <li><a href="#terminos-46">Derecho a retracto en contrataciones de servicios</a></li>
                    <li><a href="#terminos-47">Aceptación de los términos y condiciones</a></li>
                    <li><a href="#terminos-48">Vigencia</a></li>
                </ol>
            </details>
        </nav>

        <article class="terms-content">
            <section id="terminos-1" class="terms-section" aria-labelledby="terminos-1-title">
                <h2 id="terminos-1-title"><span>1.</span> Identificación del proveedor</h2>
                <p class="terms-text">Los presentes Términos y Condiciones Generales regulan la contratación, prestación, utilización, renovación, suspensión y terminación de los servicios tecnológicos proporcionados por Compañía de Servicios Informáticos SpA, nombre de fantasía HostingLATAM, RUT N.º 77.690.981-5, sociedad constituida conforme a las leyes de la República de Chile, representada legalmente por don Manuel Salas Nalda, Ingeniero en Informática, ambos domiciliados para estos efectos en Avenida Nueva Providencia 1881 oficina 2401 piso 24, en adelante indistintamente “HostingLATAM”, “la Empresa” o “el Proveedor”.</p>
                <p class="terms-text">Para efectos de comunicaciones relacionadas con la contratación y prestación de los servicios, HostingLATAM mantiene disponibles sus canales oficiales de contacto informados en el sitio <a href="https://www.hostinglatam.cl">https://www.hostinglatam.cl</a>, además del correo electrónico <a href="mailto:contacto@hostinglatam.cl">contacto@hostinglatam.cl</a> y teléfono <a href="tel:+56227976964">56 22 797 69 64</a></p>
                <p class="terms-text">Los presentes Términos y Condiciones serán aplicables a toda persona natural o jurídica que contrate servicios proporcionados por HostingLATAM, denominada en adelante “el Cliente”.</p>
            </section>

            <section id="terminos-2" class="terms-section" aria-labelledby="terminos-2-title">
                <h2 id="terminos-2-title"><span>2.</span> Objeto y ámbito de aplicación</h2>
                <p class="terms-text">El presente documento establece las condiciones generales aplicables a la contratación y prestación de los servicios tecnológicos proporcionados por HostingLATAM.</p>
                <p class="terms-text">Dependiendo de la contratación realizada, dichos servicios podrán comprender, entre otros:</p>
                <ol class="terms-alpha-list" type="a">
                    <li>Web Hosting y Hosting Compartido.</li>
                    <li>Servidores Privados Virtuales (VPS).</li>
                    <li>Servidores dedicados.</li>
                    <li>Cloud DataCenter.</li>
                    <li>Alta Disponibilidad y continuidad operacional.</li>
                    <li>Servicios de respaldo y recuperación de información.</li>
                    <li>Administración de servidores.</li>
                    <li>Migración de infraestructura, servidores, sistemas y datos.</li>
                    <li>Análisis de vulnerabilidades.</li>
                    <li>Ethical Hacking y servicios relacionados con ciberseguridad.</li>
                    <li>Licenciamiento de software.</li>
                    <li>Soporte tecnológico.</li>
                    <li>Telefonía IP.</li>
                    <li>Diseño, desarrollo y administración web.</li>
                    <li>Servicios complementarios asociados a infraestructura tecnológica.</li>
                </ol>
                <p class="terms-text">La contratación específica realizada por el Cliente determinará los recursos, características técnicas, prestaciones incluidas, niveles de servicio, precios, periodicidad de facturación y demás condiciones particulares aplicables.</p>
                <p class="terms-text">La inclusión de un servicio en la enumeración precedente no implica que éste forme parte automáticamente de cualquier contratación realizada con HostingLATAM.</p>
            </section>

            <section id="terminos-3" class="terms-section" aria-labelledby="terminos-3-title">
                <h2 id="terminos-3-title"><span>3.</span> Documentos que forman parte de la contratación</h2>
                <p class="terms-text">Las condiciones particulares establecidas en una cotización, propuesta comercial, orden de compra, contrato, anexo, ficha técnica, acuerdo de nivel de servicio o cualquier otro documento expresamente aceptado por las partes complementarán los presentes Términos y Condiciones.</p>
                <p class="terms-text">En caso de existir diferencias entre las condiciones generales establecidas en este documento y las condiciones particulares expresamente acordadas por escrito con un Cliente, prevalecerán estas últimas respecto del servicio específico contratado.</p>
                <p class="terms-text">Las características generales o comerciales informadas en el sitio web de HostingLATAM no deberán interpretarse como incorporadas automáticamente a todos los servicios cuando correspondan a prestaciones adicionales, opcionales o sujetas a contratación independiente.</p>
            </section>

            <section id="terminos-4" class="terms-section" aria-labelledby="terminos-4-title">
                <h2 id="terminos-4-title"><span>4.</span> Contratación y activación</h2>
                <p class="terms-text">La contratación de cualquier servicio podrá realizarse electrónicamente a través del sitio web o plataforma de HostingLATAM, mediante aceptación de una propuesta comercial, orden de compra, contrato, formulario electrónico u otro mecanismo aceptado por las partes.</p>
                <p class="terms-text">HostingLATAM podrá solicitar los antecedentes razonablemente necesarios para verificar la identidad del Cliente, su información tributaria, responsables técnicos, contactos administrativos y demás antecedentes necesarios para proporcionar correctamente el servicio.</p>
                <p class="terms-text">La activación de cada servicio estará sujeta al cumplimiento de las condiciones comerciales acordadas por las pasarelas de pago y, cuando corresponda, a la confirmación del pago inicial por parte de HostingLATAM y/o en horario bancario hábil.</p>
                <p class="terms-text">El Cliente será responsable de verificar la exactitud de los antecedentes proporcionados durante el proceso de contratación antes de confirmar la solicitud.</p>
            </section>

            <section id="terminos-5" class="terms-section" aria-labelledby="terminos-5-title">
                <h2 id="terminos-5-title"><span>5.</span> Titularidad del servicio y cambio de titular</h2>
                <p class="terms-text">Para todos los efectos contractuales, administrativos, técnicos y de seguridad, se considerará titular del servicio a la persona natural o jurídica cuyos antecedentes hayan sido informados y registrados como Cliente al momento de la contratación, independientemente de que la contratación haya sido gestionada materialmente por un trabajador, diseñador, desarrollador, agencia, proveedor tecnológico, consultor u otro tercero.</p>
                <p class="terms-text">La circunstancia de que un dominio, sitio web, marca, sistema, aplicación, contenido o cualquier otro activo asociado al servicio pertenezca o sea utilizado por una persona distinta del Cliente registrado no otorgará, por sí sola, facultades para solicitar credenciales, modificar accesos, requerir respaldos, administrar el servicio, solicitar migraciones, modificar datos de contacto, cancelar el servicio o requerir un cambio de titularidad.</p>
                <p class="terms-text">HostingLATAM no entregará credenciales, accesos, respaldos ni información asociada al servicio a terceros que no se encuentren debidamente autorizados o cuya legitimidad para actuar respecto del servicio no haya podido ser verificada.</p>
                <p class="terms-text">El cambio de titularidad de un servicio no se realizará automáticamente ni por la sola solicitud de un tercero. Toda solicitud deberá ser evaluada previamente por HostingLATAM y deberá encontrarse respaldada por antecedentes suficientes que permitan verificar la identidad del solicitante y su derecho o facultad para requerir el cambio.</p>
                <p class="terms-text">Cuando corresponda, HostingLATAM podrá exigir, entre otros antecedentes:</p>
                <ol class="terms-alpha-list" type="a">
                    <li>Autorización expresa del titular actualmente registrado.</li>
                    <li>Documentación que acredite la identidad del solicitante.</li>
                    <li>Antecedentes que acrediten la representación legal de una persona jurídica.</li>
                    <li>Documentación que permita acreditar la titularidad o derechos sobre el dominio, empresa, marca, sitio web, sistema o activo relacionado con el servicio.</li>
                    <li>Mandatos, poderes, contratos, resoluciones judiciales, certificados, escrituras u otros antecedentes que permitan acreditar suficientemente la legitimidad de la solicitud.</li>
                    <li>Cualquier antecedente adicional que HostingLATAM estime razonablemente necesario para prevenir accesos, modificaciones, transferencias o entregas de información a personas no autorizadas.</li>
                </ol>
                <p class="terms-text">La acreditación de la titularidad sobre un dominio, marca, empresa, sitio web u otro activo relacionado no producirá automáticamente el cambio de titularidad contractual del servicio. Dichos antecedentes serán evaluados por HostingLATAM considerando las circunstancias particulares y las obligaciones legales y contractuales aplicables.</p>
                <p class="terms-text">Mientras el cambio de titularidad no haya sido expresamente aprobado y registrado por HostingLATAM, el titular contractual vigente continuará siendo la persona natural o jurídica registrada en los sistemas de HostingLATAM, manteniéndose respecto de ésta los derechos y obligaciones derivados de la contratación.</p>
                <p class="terms-text">En caso de existir controversias entre el Cliente registrado y terceros respecto de la propiedad de un dominio, sitio web, empresa, marca, información, sistema o cualquier otro activo relacionado con el servicio, HostingLATAM podrá abstenerse de modificar la titularidad, entregar credenciales, transferir información o efectuar cambios sensibles mientras la controversia no sea resuelta mediante acuerdo verificable entre las partes, documentación suficiente o resolución emanada de autoridad competente.</p>
                <p class="terms-text">Lo anterior no impedirá que HostingLATAM adopte las medidas técnicas o de seguridad que resulten necesarias para proteger la infraestructura, los datos personales, la información alojada y la continuidad de los servicios.</p>
            </section>

            <section id="terminos-6" class="terms-section" aria-labelledby="terminos-6-title">
                <h2 id="terminos-6-title"><span>6.</span> Precios, facturación e impuestos</h2>
                <p class="terms-text">Los valores aplicables serán aquellos informados en el sitio web, cotización, propuesta comercial, contrato, orden de compra u otro documento correspondiente al servicio contratado.</p>
                <p class="terms-text">Salvo indicación expresa en contrario, los valores informados no incluyen IVA.</p>
                <p class="terms-text">Los servicios podrán contratarse bajo modalidades mensuales, trimestrales, semestrales, anuales o por períodos especiales determinados contractualmente.</p>
                <p class="terms-text">El Cliente será responsable de mantener actualizada su información tributaria, administrativa y de contacto.</p>
                <p class="terms-text">Los servicios o trabajos adicionales que no formen parte del alcance originalmente contratado podrán ser cotizados y facturados separadamente.</p>
            </section>

            <section id="terminos-7" class="terms-section" aria-labelledby="terminos-7-title">
                <h2 id="terminos-7-title"><span>7.</span> Renovación de los servicios</h2>
                <p class="terms-text">Los servicios de carácter recurrente podrán renovarse de acuerdo con el período y modalidad de contratación seleccionados por el Cliente.</p>
                <p class="terms-text">Cuando corresponda renovación automática, HostingLATAM podrá emitir los documentos de cobro correspondientes al siguiente período de servicio conforme a las condiciones informadas al Cliente.</p>
                <p class="terms-text">Las promociones, descuentos, meses gratuitos, créditos u otros beneficios aplicables al período inicial no se extenderán automáticamente a períodos posteriores, salvo indicación expresa en las bases de la promoción o acuerdo comercial correspondiente.</p>
            </section>

            <section id="terminos-8" class="terms-section" aria-labelledby="terminos-8-title">
                <h2 id="terminos-8-title"><span>8.</span> Mora y falta de pago</h2>
                <p class="terms-text">El Cliente deberá pagar los servicios dentro de las fechas y condiciones establecidas en los documentos comerciales correspondientes.</p>
                <p class="terms-text">Ante el incumplimiento de pago, HostingLATAM podrá comunicar al Cliente la existencia de obligaciones pendientes y solicitar su regularización.</p>
                <p class="terms-text">Si el incumplimiento persiste, HostingLATAM podrá suspender total o parcialmente el servicio afectado conforme a las condiciones contractuales aplicables.</p>
                <p class="terms-text">La suspensión por falta de pago no implica necesariamente la eliminación inmediata de la información almacenada.</p>
                <p class="terms-text">La suspensión de un servicio por falta de pago no extingue las obligaciones económicas previamente devengadas ni aquellas que correspondan conforme al período mínimo de contratación expresamente acordado.</p>
            </section>

            <section id="terminos-9" class="terms-section" aria-labelledby="terminos-9-title">
                <h2 id="terminos-9-title"><span>9.</span> Suspensión y eliminación por falta de pago</h2>
                <p class="terms-text">Cuando un servicio sea suspendido por falta de pago, HostingLATAM podrá conservar la información asociada al mismo por un período máximo de 30 días corridos contados desde la fecha efectiva de suspensión, salvo que un contrato particular establezca un período diferente.</p>
                <p class="terms-text">Cumplido dicho plazo sin que el Cliente regularice las obligaciones pendientes, HostingLATAM podrá proceder a eliminar definitivamente el servicio y la información almacenada en éste.</p>
                <p class="terms-text">Una vez eliminada la información, HostingLATAM no garantiza que ésta pueda ser recuperada.</p>
                <p class="terms-text">Cuando existan respaldos históricos disponibles y técnicamente recuperables, cualquier solicitud posterior de restauración estará sujeta a factibilidad técnica y podrá constituir un servicio adicional sujeto a cobro desde 2 UF + IVA, dependiendo de la envergadura del respaldo.</p>
            </section>

            <section id="terminos-10" class="terms-section" aria-labelledby="terminos-10-title">
                <h2 id="terminos-10-title"><span>10.</span> Término del servicio y conservación de respaldos</h2>
                <p class="terms-text">Cuando un servicio sea terminado, cancelado o no renovado por el Cliente, HostingLATAM podrá conservar los respaldos existentes asociados al servicio por un período máximo de 30 días corridos contados desde la fecha efectiva de término.</p>
                <p class="terms-text">Transcurrido dicho plazo, HostingLATAM podrá proceder a la eliminación definitiva de los respaldos, archivos, bases de datos, cuentas de correo electrónico y demás información asociada al servicio, sin obligación de mantener copias adicionales.</p>
                <p class="terms-text">Será responsabilidad del Cliente descargar, respaldar y retirar toda la información que desee conservar antes de la fecha efectiva de término del servicio.</p>
                <p class="terms-text">Durante el período de conservación señalado, cualquier solicitud de recuperación o restauración estará sujeta a la existencia efectiva, integridad y disponibilidad técnica del respaldo correspondiente.</p>
                <p class="terms-text">La conservación temporal de respaldos durante este período constituye una medida operacional y de contingencia y no deberá interpretarse como un servicio adicional de almacenamiento contratado por el Cliente.</p>
                <p class="terms-text">HostingLATAM no garantiza que la información pueda ser recuperada una vez terminado el servicio.</p>
                <p class="terms-text">Cumplidos los 30 días señalados, la información podrá ser eliminada de forma definitiva y no recuperable.</p>
                <p class="terms-text">Esta disposición es independiente del procedimiento aplicable a servicios suspendidos por falta de pago establecido en el numeral anterior.</p>
                <p class="terms-text">Los plazos de eliminación señalados se entenderán sin perjuicio de aquellos antecedentes cuya conservación resulte necesaria para el cumplimiento de obligaciones legales, regulatorias, tributarias o contractuales, la gestión o investigación de incidentes de seguridad, la preservación de evidencia, el ejercicio o defensa de derechos o el cumplimiento de requerimientos de una autoridad competente.</p>
            </section>

            <section id="terminos-11" class="terms-section" aria-labelledby="terminos-11-title">
                <h2 id="terminos-11-title"><span>11.</span> Web hosting</h2>
                <p class="terms-text">Los servicios de Web Hosting corresponden, salvo indicación diferente, a ambientes de infraestructura compartida.</p>
                <p class="terms-text">El Cliente acepta que determinados recursos físicos y tecnológicos son utilizados conjuntamente por múltiples clientes, manteniéndose los mecanismos técnicos de segregación correspondientes.</p>
                <p class="terms-text">Las características de almacenamiento, procesamiento, memoria, transferencia, correo electrónico, bases de datos, dominios y demás prestaciones serán aquellas correspondientes al plan específicamente contratado.</p>
                <p class="terms-text">El Cliente deberá utilizar los recursos dentro de parámetros compatibles con las características y naturaleza del servicio contratado.</p>
            </section>

            <section id="terminos-12" class="terms-section" aria-labelledby="terminos-12-title">
                <h2 id="terminos-12-title"><span>12.</span> Asociación del plan de hosting al dominio contratado</h2>
                <p class="terms-text">Todo plan de Web Hosting contratado en HostingLATAM quedará asociado al dominio principal indicado por el Cliente al momento de realizar la contratación.</p>
                <p class="terms-text">Una vez contratado y provisionado el servicio, el dominio principal asociado al plan no podrá ser reemplazado por otro dominio, independientemente del tiempo transcurrido desde la contratación.</p>
                <p class="terms-text">Es responsabilidad exclusiva del Cliente verificar, antes de confirmar la contratación, que el nombre de dominio ingresado sea correcto y corresponda efectivamente al dominio que desea utilizar con el servicio.</p>
                <p class="terms-text">En consecuencia, errores de digitación, selección incorrecta del dominio, cambios posteriores de nombre comercial, cambio de proyecto, decisión de utilizar un dominio diferente o cualquier otra circunstancia atribuible al Cliente no generarán la obligación para HostingLATAM de modificar o sustituir el dominio principal asociado al plan contratado.</p>
                <p class="terms-text">Si el Cliente requiere utilizar un dominio principal distinto al originalmente informado, deberá contratar un nuevo plan de Web Hosting para el nuevo dominio.</p>
                <p class="terms-text">La contratación de un nuevo servicio no implica el traslado automático de sitios web, archivos, bases de datos, cuentas de correo electrónico, configuraciones u otra información existente en el servicio anterior.</p>
                <p class="terms-text">Si el Cliente requiere realizar una migración entre servicios, ésta deberá ser solicitada a HostingLATAM y estará sujeta a evaluación técnica y, cuando corresponda, a los costos asociados al trabajo requerido.</p>
                <p class="terms-text">Esta restricción se refiere al dominio principal asociado al plan de Hosting y no afecta la utilización de subdominios, alias, redirecciones o dominios adicionales cuando dichas funcionalidades formen parte expresamente de las características del plan contratado.</p>
            </section>

            <section id="terminos-13" class="terms-section" aria-labelledby="terminos-13-title">
                <h2 id="terminos-13-title"><span>13.</span> Registro de dominios</h2>
                <p class="terms-text">Cuando HostingLATAM gestione el registro de un nombre de dominio por solicitud del Cliente, será responsabilidad del Cliente verificar que el nombre solicitado se encuentre correctamente escrito antes de confirmar la contratación.</p>
                <p class="terms-text">Una vez procesado el registro de un dominio ante la entidad registradora correspondiente, éste no podrá considerarse intercambiable por otro nombre de dominio.</p>
                <p class="terms-text">Si el Cliente proporciona incorrectamente el nombre que desea registrar y el registro ya ha sido procesado, la contratación de un dominio diferente constituirá una nueva solicitud y generara un nuevo cargo.</p>
                <p class="terms-text">La disponibilidad, registro, renovación, transferencia, titularidad y utilización de los nombres de dominio estarán adicionalmente sujetos a las normas y políticas de la entidad registradora correspondiente.</p>
                <p class="terms-text">HostingLATAM no garantiza la disponibilidad de un nombre de dominio hasta que su registro haya sido efectivamente confirmado por la entidad correspondiente.</p>
            </section>

            <section id="terminos-14" class="terms-section" aria-labelledby="terminos-14-title">
                <h2 id="terminos-14-title"><span>14.</span> Servidores VPS</h2>
                <p class="terms-text">Un Servidor Privado Virtual o VPS corresponde a infraestructura virtual que dispone de los recursos definidos en el plan, propuesta o contrato correspondiente.</p>
                <p class="terms-text">Salvo contratación expresa en contrario, la contratación de un VPS no incluye la administración integral del sistema operativo, aplicaciones, bases de datos, sitios web, ERP, configuraciones internas ni software instalado por el Cliente.</p>
                <p class="terms-text">Cuando el Cliente no haya contratado expresamente el servicio de Administración de Servidores, será responsable de la administración interna de su VPS y de los componentes instalados en éste.</p>
                <p class="terms-text">La contratación de infraestructura VPS tampoco implica automáticamente la existencia de Alta Disponibilidad, respaldo administrado, análisis de vulnerabilidades, remediación de vulnerabilidades, administración de aplicaciones o cualquier otra prestación no expresamente incluida en el servicio contratado.</p>
            </section>

            <section id="terminos-15" class="terms-section" aria-labelledby="terminos-15-title">
                <h2 id="terminos-15-title"><span>15.</span> Administración de servidores</h2>
                <p class="terms-text">La Administración de Servidores constituye un servicio independiente y deberá encontrarse expresamente incluida en la contratación.</p>
                <p class="terms-text">Dependiendo del servicio contratado y del alcance establecido en la correspondiente propuesta, contrato o anexo técnico, podrá comprender:</p>
                <ol class="terms-alpha-list" type="a">
                    <li>Administración del sistema operativo.</li>
                    <li>Instalación de actualizaciones y parches.</li>
                    <li>Revisión de servicios esenciales.</li>
                    <li>Administración de Linux cPanel/WHM o Windows cuando corresponda.</li>
                    <li>Administración de cualquier motor de base de datos</li>
                    <li>Administración de herramientas de seguridad expresamente contratadas.</li>
                    <li>Revisión de respaldos cuando éstos formen parte del servicio.</li>
                    <li>Diagnóstico y resolución de incidencias relacionadas con el sistema operativo.</li>
                    <li>Hardening y recomendaciones de seguridad.</li>
                    <li>Administración de componentes específicamente identificados en la propuesta comercial.</li>
                </ol>
                <p class="terms-text">La Administración de Servidores no implica automáticamente la administración del ERP, software, bases de datos, código fuente, desarrollos propios, aplicaciones de terceros o componentes que no se encuentren expresamente incluidos en el alcance contratado.</p>
            </section>

            <section id="terminos-16" class="terms-section" aria-labelledby="terminos-16-title">
                <h2 id="terminos-16-title"><span>16.</span> Respaldos</h2>
                <p class="terms-text">La contratación de infraestructura tecnológica no implica necesariamente la existencia de una política específica de respaldo.</p>
                <p class="terms-text">Las características de los respaldos dependerán del producto y modalidad contratados.</p>
                <p class="terms-text">En servicios de Hosting Compartido, HostingLATAM podrá mantener respaldos automáticos conforme a la política vigente del respectivo plan. (Últimos 7 días se almacenan en NAS externos).</p>
                <p class="terms-text">Para VPS, servidores dedicados, Cloud Datacenter y otros servicios de infraestructura, la periodicidad, retención, almacenamiento, ubicación y modalidad de los respaldos serán aquellas expresamente establecidas en la propuesta, contrato o servicio correspondiente.</p>
                <p class="terms-text">Cuando el Cliente no haya contratado respaldo, será responsable de implementar, mantener y verificar sus propios mecanismos de respaldo, fuera de los considerados por el servicio.</p>
                <p class="terms-text">HostingLATAM recomienda mantener siempre más de una copia de la información crítica y, cuando corresponda, una copia ubicada en infraestructura independiente del ambiente productivo.</p>
            </section>

            <section id="terminos-17" class="terms-section" aria-labelledby="terminos-17-title">
                <h2 id="terminos-17-title"><span>17.</span> Restauración de información</h2>
                <p class="terms-text">La restauración de información estará sujeta a la existencia efectiva de una copia recuperable correspondiente al período solicitado.</p>
                <p class="terms-text">La existencia de un sistema de respaldo reduce el riesgo de pérdida de información, pero no constituye una garantía absoluta de recuperación de cualquier archivo, base de datos, correo electrónico, configuración o versión histórica.</p>
                <p class="terms-text">El Cliente deberá comunicar oportunamente cualquier solicitud de restauración.</p>
                <p class="terms-text">Las restauraciones originadas por eliminación accidental, modificación realizada por el Cliente, compromiso de credenciales, errores de aplicaciones, errores de usuarios u otras causas no atribuibles a HostingLATAM podrán constituir una prestación técnica adicional, dependiendo del servicio contratado y del trabajo necesario para efectuar la recuperación.</p>
                <p class="terms-text">Las pruebas periódicas de restauración de respaldos podrán contratarse como un servicio adicional, sujeto a alcance, periodicidad, factibilidad técnica y condiciones comerciales expresamente acordadas.</p>
            </section>

            <section id="terminos-18" class="terms-section" aria-labelledby="terminos-18-title">
                <h2 id="terminos-18-title"><span>18.</span> Alta disponibilidad</h2>
                <p class="terms-text">Los servicios de Hosting, VPS, servidores dedicados o Cloud contratados individualmente no deberán entenderse automáticamente como servicios de Alta Disponibilidad.</p>
                <p class="terms-text">La Alta Disponibilidad constituye una arquitectura y servicio adicional que deberá contratarse expresamente.</p>
                <p class="terms-text">Dependiendo de la solución contratada, ésta podrá considerar replicación, infraestructura redundante, servidores secundarios, mecanismos de failover y utilización de más de un centro de datos.</p>
                <p class="terms-text">Los objetivos de recuperación, RTO, RPO, SLA y demás características técnicas aplicables serán aquellos definidos expresamente en la propuesta, contrato o anexo técnico correspondiente.</p>
            </section>

            <section id="terminos-19" class="terms-section" aria-labelledby="terminos-19-title">
                <h2 id="terminos-19-title"><span>19.</span> Disponibilidad del servicio y SLA</h2>
                <p class="terms-text">HostingLATAM adoptará las medidas técnicas y operacionales razonables destinadas a mantener la continuidad y disponibilidad de sus servicios de acuerdo con las características contratadas.</p>
                <p class="terms-text">El Acuerdo de Nivel de Servicio o SLA aplicable será el establecido específicamente para cada servicio, propuesta, contrato o anexo técnico.</p>
                <p class="terms-text">Cuando un servicio no contemple un SLA particular, no deberá interpretarse que cuenta con las garantías de disponibilidad correspondientes a soluciones expresamente contratadas bajo modalidades de Alta Disponibilidad.</p>
                <p class="terms-text">Para efectos del cálculo de disponibilidad podrán excluirse, cuando corresponda:</p>
                <ol class="terms-alpha-list" type="a">
                    <li>Mantenimientos programados previamente informados.</li>
                    <li>Intervenciones solicitadas o autorizadas por el Cliente.</li>
                    <li>Fallas producidas por software o configuraciones administradas por el Cliente.</li>
                    <li>Ataques informáticos o eventos externos que excedan las medidas razonables de mitigación correspondientes al servicio contratado.</li>
                    <li>Fallas atribuibles a proveedores externos fuera del control razonable de HostingLATAM.</li>
                    <li>Casos fortuitos o fuerza mayor, como desastres naturales.</li>
                    <li>Incidentes producidos por credenciales comprometidas del Cliente.</li>
                    <li>Interrupciones provocadas por acciones realizadas directamente por el Cliente o terceros autorizados por éste.</li>
                    <li>Fallas de aplicaciones, ERP, bases de datos o software cuya administración no haya sido contratada a HostingLATAM.</li>
                </ol>
            </section>

            <section id="terminos-20" class="terms-section" aria-labelledby="terminos-20-title">
                <h2 id="terminos-20-title"><span>20.</span> Soporte técnico</h2>
                <p class="terms-text">HostingLATAM proporciona soporte técnico relacionado con los servicios contratados.</p>
                <p class="terms-text">El horario normal de atención comercial y administrativa será el informado mediante los canales oficiales de HostingLATAM.</p>
                <p class="terms-text">Fuera del horario normal, fines de semana y días festivos, la atención podrá limitarse a emergencias técnicas mediante los canales habilitados para tales efectos.</p>
                <p class="terms-text">El alcance del soporte dependerá del servicio contratado y no deberá interpretarse como administración ilimitada de sistemas, aplicaciones, servidores, bases de datos o infraestructura del Cliente.</p>
            </section>

            <section id="terminos-21" class="terms-section" aria-labelledby="terminos-21-title">
                <h2 id="terminos-21-title"><span>21.</span> Análisis de vulnerabilidades</h2>
                <p class="terms-text">Los análisis de vulnerabilidades constituyen servicios especializados destinados a identificar potenciales debilidades de seguridad existentes en sistemas, servicios o infraestructura tecnológica.</p>
                <p class="terms-text">Su inclusión dependerá del servicio o propuesta comercial contratada.</p>
                <p class="terms-text">Los resultados corresponden al estado observable de los sistemas durante la fecha y bajo las condiciones en que se efectúa cada análisis.</p>
                <p class="terms-text">Un análisis de vulnerabilidades no constituye garantía de ausencia absoluta de vulnerabilidades, ataques futuros, incidentes de seguridad o nuevas vulnerabilidades que puedan ser descubiertas con posterioridad.</p>
            </section>

            <section id="terminos-22" class="terms-section" aria-labelledby="terminos-22-title">
                <h2 id="terminos-22-title"><span>22.</span> Remediación de vulnerabilidades</h2>
                <p class="terms-text">La identificación de una vulnerabilidad y su remediación constituyen actividades diferentes.</p>
                <p class="terms-text">La remediación será responsabilidad de la parte que tenga asignada contractualmente la administración del componente afectado.</p>
                <p class="terms-text">Cuando HostingLATAM tenga contratado el servicio de administración correspondiente y la remediación se encuentre dentro del alcance acordado, podrá ejecutar o coordinar las medidas de mitigación técnicamente procedentes.</p>
                <p class="terms-text">Cuando el Cliente administre sus propios servidores, aplicaciones, sistemas o componentes, HostingLATAM podrá informar las vulnerabilidades detectadas y recomendar medidas correctivas, correspondiendo al Cliente su evaluación e implementación.</p>
            </section>

            <section id="terminos-23" class="terms-section" aria-labelledby="terminos-23-title">
                <h2 id="terminos-23-title"><span>23.</span> Seguridad y responsabilidad compartida</h2>
                <p class="terms-text">La seguridad de los servicios tecnológicos constituye una responsabilidad compartida entre HostingLATAM y el Cliente, de acuerdo con el alcance de los servicios contratados.</p>
                <p class="terms-text">HostingLATAM será responsable de los componentes de infraestructura que se encuentren bajo su administración conforme al servicio contratado.</p>
                <p class="terms-text">El Cliente será responsable, según corresponda, de:</p>
                <ol class="terms-alpha-list" type="a">
                    <li>Mantener seguras sus credenciales de acceso.</li>
                    <li>Utilizar contraseñas adecuadas.</li>
                    <li>Implementar autenticación multifactor cuando se encuentre disponible y corresponda.</li>
                    <li>Mantener actualizado el software que se encuentre bajo su administración.</li>
                    <li>Controlar los usuarios y terceros con acceso a sus sistemas.</li>
                    <li>Proteger sus aplicaciones, desarrollos y código fuente.</li>
                    <li>Mantener actualizados sus datos de contacto.</li>
                    <li>Informar oportunamente cualquier sospecha de compromiso de seguridad.</li>
                    <li>No compartir credenciales de acceso con personas no autorizadas.</li>
                    <li>Cumplir las recomendaciones de seguridad cuya implementación corresponda contractualmente al Cliente.</li>
                </ol>
                <p class="terms-text">HostingLATAM adoptará, dentro del alcance de los servicios bajo su administración, medidas técnicas y organizativas razonables orientadas a preservar la confidencialidad, integridad, disponibilidad y resiliencia de los sistemas e información, así como capacidades de recuperación frente a incidentes. Ante amenazas o incidentes relevantes, HostingLATAM podrá adoptar medidas inmediatas de contención, incluyendo restricción o bloqueo temporal de accesos, aislamiento de sistemas o servicios comprometidos y preservación de registros y evidencia técnica, cuando ello resulte necesario para proteger la infraestructura, los Clientes o terceros.</p>
            </section>

            <section id="terminos-24" class="terms-section" aria-labelledby="terminos-24-title">
                <h2 id="terminos-24-title"><span>24.</span> Software y licencias</h2>
                <p class="terms-text">Las licencias proporcionadas por HostingLATAM estarán sujetas a las condiciones establecidas por sus respectivos fabricantes y al modelo de licenciamiento contratado. El Cliente será responsable del licenciamiento que utilice en el servicio, salvo aquel expresamente proporcionado por HostingLATAM.</p>
                <p class="terms-text">El Cliente no podrá copiar, sublicenciar, transferir, alterar o utilizar licencias fuera de los términos permitidos por el fabricante o por la modalidad contratada.</p>
                <p class="terms-text">Las variaciones de precios, modelos de licenciamiento, condiciones comerciales o políticas impuestas por fabricantes externos podrán reflejarse en las renovaciones correspondientes, previa información al Cliente cuando resulte aplicable.</p>
            </section>

            <section id="terminos-25" class="terms-section" aria-labelledby="terminos-25-title">
                <h2 id="terminos-25-title"><span>25.</span> Uso aceptable de los servicios</h2>
                <p class="terms-text">El Cliente deberá utilizar los servicios exclusivamente para actividades lícitas.</p>
                <p class="terms-text">Se encuentra prohibido utilizar la infraestructura o servicios proporcionados por HostingLATAM para:</p>
                <ol class="terms-alpha-list" type="a">
                    <li>Distribución de malware o software malicioso.</li>
                    <li>Phishing.</li>
                    <li>Acceso no autorizado a sistemas informáticos.</li>
                    <li>Ataques de denegación de servicio.</li>
                    <li>Envío masivo de correo electrónico no solicitado o spam.</li>
                    <li>Distribución o almacenamiento de contenido ilícito.</li>
                    <li>Minería de criptomonedas sin autorización expresa.</li>
                    <li>Escaneo, explotación o ataque de infraestructura de terceros sin la correspondiente autorización.</li>
                    <li>Actividades que comprometan la estabilidad, seguridad, disponibilidad o reputación de la infraestructura de HostingLATAM o de terceros.</li>
                    <li>Cualquier actividad contraria a la legislación chilena.</li>
                </ol>
                <p class="terms-text">HostingLATAM podrá adoptar medidas preventivas, incluyendo la suspensión temporal de un servicio, cuando existan antecedentes técnicos razonables de que éste está siendo utilizado para actividades ilícitas, abusivas o que representen un riesgo relevante para la infraestructura, otros clientes o terceros.</p>
            </section>

            <section id="terminos-26" class="terms-section" aria-labelledby="terminos-26-title">
                <h2 id="terminos-26-title"><span>26.</span> Recursos y uso excesivo</h2>
                <p class="terms-text">En servicios compartidos, el Cliente deberá utilizar los recursos dentro de parámetros compatibles con las características del plan contratado y con la naturaleza compartida de la infraestructura.</p>
                <p class="terms-text">Cuando un servicio genere un consumo extraordinario o anómalo que pueda afectar la estabilidad, rendimiento o seguridad de otros clientes o de la infraestructura, HostingLATAM podrá solicitar al Cliente la realización de optimizaciones, limitar temporalmente determinados procesos cuando resulte técnicamente necesario o recomendar la migración a un servicio de mayor capacidad.</p>
            </section>

            <section id="terminos-27" class="terms-section" aria-labelledby="terminos-27-title">
                <h2 id="terminos-27-title"><span>27.</span> Migraciones</h2>
                <p class="terms-text">HostingLATAM podrá proporcionar servicios de migración desde infraestructura propia del Cliente o desde otros proveedores.</p>
                <p class="terms-text">Toda migración estará sujeta a evaluación técnica previa.</p>
                <p class="terms-text">El Cliente deberá proporcionar los accesos y antecedentes necesarios para realizar la migración y mantener disponible, cuando resulte técnicamente posible, una copia independiente de su información antes de iniciar el procedimiento.</p>
                <p class="terms-text">La compatibilidad de aplicaciones antiguas, software propietario, bases de datos, sistemas operativos, versiones específicas o configuraciones especiales deberá evaluarse caso a caso.</p>
                <p class="terms-text">La aceptación de una migración por parte de HostingLATAM no constituye garantía de compatibilidad absoluta de aplicaciones o sistemas de terceros con la nueva infraestructura.</p>
            </section>

            <section id="terminos-28" class="terms-section" aria-labelledby="terminos-28-title">
                <h2 id="terminos-28-title"><span>28.</span> Contenido e información del cliente</h2>
                <p class="terms-text">El Cliente mantiene la titularidad y responsabilidad sobre la información, archivos, bases de datos, aplicaciones y contenidos almacenados en sus servicios.</p>
                <p class="terms-text">La contratación de infraestructura con HostingLATAM no implica transferencia de propiedad intelectual sobre dicha información.</p>
                <p class="terms-text">HostingLATAM podrá acceder a la información del Cliente cuando ello resulte técnicamente necesario para prestar el servicio contratado, realizar soporte autorizado, gestionar incidentes, cumplir obligaciones contractuales, proteger la infraestructura o dar cumplimiento a una obligación legal.</p>
            </section>

            <section id="terminos-29" class="terms-section" aria-labelledby="terminos-29-title">
                <h2 id="terminos-29-title"><span>29.</span> Datos personales y privacidad</h2>
                <p class="terms-text">HostingLATAM tratará los datos personales necesarios para gestionar la relación comercial, contractual, administrativa y técnica con sus clientes de conformidad con la legislación chilena vigente.</p>
                <p class="terms-text">Los datos podrán ser tratados, según corresponda, para:</p>
                <ol class="terms-alpha-list" type="a">
                    <li>Gestionar contrataciones.</li>
                    <li>Proporcionar y administrar servicios.</li>
                    <li>Facturar y gestionar pagos.</li>
                    <li>Prestar soporte técnico.</li>
                    <li>Gestionar incidentes.</li>
                    <li>Mantener registros técnicos y de seguridad.</li>
                    <li>Cumplir obligaciones legales.</li>
                    <li>Realizar comunicaciones relacionadas con los servicios.</li>
                </ol>
                <p class="terms-text">HostingLATAM adoptará medidas técnicas y organizativas destinadas a proteger los datos personales bajo su responsabilidad conforme a la naturaleza de los datos, riesgos asociados y normativa aplicable.</p>
                <p class="terms-text">El tratamiento de datos personales se regirá adicionalmente por la Política de Privacidad de HostingLATAM y por la legislación vigente aplicable.</p>
                <p class="terms-text">Para los tratamientos en que HostingLATAM determine los fines y medios del tratamiento, actuará como responsable de datos personales. Las bases de licitud aplicables podrán comprender, según corresponda, la ejecución de una relación contractual o de medidas precontractuales solicitadas por el titular, el cumplimiento de obligaciones legales, el consentimiento del titular y los intereses legítimos permitidos por la legislación aplicable.</p>
                <p class="terms-text">HostingLATAM mantendrá permanentemente disponible, a través de su sitio web o de un medio equivalente, una Política de Privacidad y Tratamiento de Datos Personales que informe, al menos, las categorías o tipos de datos tratados, categorías de titulares, finalidades, bases de licitud, destinatarios o categorías de destinatarios, criterios o períodos de conservación, transferencias internacionales cuando correspondan, canales de contacto y demás información exigida por la normativa vigente.</p>
                <p class="terms-text">Los titulares podrán ejercer los derechos de acceso, rectificación, supresión, oposición, portabilidad y bloqueo temporal en los casos y condiciones establecidos por la legislación aplicable, mediante los canales que HostingLATAM habilite e informe en su Política de Privacidad. Cuando un tratamiento se funde en el consentimiento, el titular podrá revocarlo en los términos previstos por la ley, sin afectar la licitud del tratamiento efectuado con anterioridad a dicha revocación.</p>
                <p class="terms-text">HostingLATAM aplicará medidas de protección de datos desde el diseño y por defecto, procurando que sólo sean tratados los datos personales adecuados, pertinentes y estrictamente necesarios para las finalidades informadas, considerando la naturaleza, alcance, contexto, fines y riesgos del tratamiento.</p>
                <p class="terms-text">Los datos personales serán conservados durante el período necesario para cumplir las finalidades que justifican su tratamiento y posteriormente serán suprimidos o anonimizados, salvo que exista una obligación legal, una base jurídica suficiente o una necesidad legítima de conservación permitida por la normativa aplicable.</p>
                <p class="terms-text">Cuando corresponda realizar tratamientos que puedan producir un alto riesgo para los derechos de los titulares, HostingLATAM efectuará las evaluaciones de impacto y demás medidas exigidas por la legislación aplicable.</p>
            </section>

            <section id="terminos-30" class="terms-section" aria-labelledby="terminos-30-title">
                <h2 id="terminos-30-title"><span>30.</span> Registros técnicos y logs</h2>
                <p class="terms-text">Por razones de seguridad, diagnóstico, continuidad operacional, prevención de fraude, investigación de incidentes y cumplimiento legal, HostingLATAM podrá mantener registros técnicos relacionados con el funcionamiento de sus plataformas e infraestructura.</p>
                <p class="terms-text">Estos registros podrán incluir direcciones IP, fechas y horarios de conexión, eventos de autenticación, registros de sistemas, utilización de recursos y otros antecedentes técnicos necesarios para la operación, administración y seguridad de los servicios.</p>
                <p class="terms-text">Los registros técnicos serán conservados durante períodos compatibles con las finalidades que justifican su tratamiento y con las obligaciones legales, regulatorias, contractuales y de seguridad aplicables. El acceso a dichos registros estará limitado al personal y terceros que requieran conocerlos para el cumplimiento de funciones autorizadas.</p>
                <p class="terms-text">Cuando los registros técnicos contengan datos personales, su tratamiento quedará sujeto a las disposiciones de protección de datos personales aplicables y a la Política de Privacidad de HostingLATAM.</p>
            </section>

            <section id="terminos-31" class="terms-section" aria-labelledby="terminos-31-title">
                <h2 id="terminos-31-title"><span>31.</span> Confidencialidad</h2>
                <p class="terms-text">HostingLATAM mantendrá confidencial la información del Cliente a la que acceda como consecuencia de la prestación de sus servicios, de acuerdo con las obligaciones legales y contractuales aplicables.</p>
                <p class="terms-text">No se considerará incumplimiento de confidencialidad la entrega o utilización de información cuando:</p>
                <ol class="terms-alpha-list" type="a">
                    <li>Exista autorización expresa del Cliente.</li>
                    <li>Sea requerida por una autoridad competente conforme a la legislación vigente.</li>
                    <li>Sea necesaria para proveedores o subcontratistas que participen legítimamente en la prestación del servicio y se encuentren sujetos a las correspondientes obligaciones de confidencialidad y seguridad.</li>
                    <li>Sea necesario utilizarla para proteger razonablemente la infraestructura, investigar incidentes o cumplir obligaciones legales.</li>
                </ol>
                <p class="terms-text">Las obligaciones de confidencialidad se mantendrán mientras la información conserve dicho carácter y, respecto de datos personales, durante todo el período en que éstos sean tratados o se encuentren legítimamente bajo custodia de HostingLATAM, sin perjuicio de las obligaciones legales que subsistan con posterioridad.</p>
            </section>

            <section id="terminos-32" class="terms-section" aria-labelledby="terminos-32-title">
                <h2 id="terminos-32-title"><span>32.</span> Tratamiento de datos personales por cuenta del cliente</h2>
                <p class="terms-text">Cuando, con motivo de la prestación de servicios de Hosting, VPS, servidores dedicados, Cloud Datacenter, respaldo, administración, soporte u otros servicios tecnológicos, HostingLATAM trate datos personales por cuenta y siguiendo instrucciones documentadas del Cliente, el Cliente tendrá la calidad de responsable del tratamiento y HostingLATAM actuará como tercero mandatario o encargado del tratamiento, en los términos de la legislación aplicable.</p>
                <p class="terms-text">En estos casos, HostingLATAM tratará los datos exclusivamente para prestar los servicios contratados y conforme a las instrucciones lícitas del Cliente, quedando prohibido destinarlos a finalidades distintas o comunicarlos o cederlos a terceros, salvo autorización expresa y específica del Cliente o cuando una norma legal obligue a ello.</p>
                <p class="terms-text">Cuando resulte exigible, las partes deberán establecer en el contrato, anexo de tratamiento de datos personales o instrumento equivalente el objeto y duración del encargo, la finalidad del tratamiento, los tipos de datos personales tratados, las categorías de titulares y los derechos y obligaciones de las partes.</p>
                <p class="terms-text">HostingLATAM no delegará total o parcialmente un encargo de tratamiento a otro encargado cuando ello requiera autorización del Cliente sin contar con la autorización específica y por escrito correspondiente. Los proveedores o subencargados autorizados deberán asumir obligaciones de protección y seguridad compatibles con las exigibles a HostingLATAM.</p>
                <p class="terms-text">El Cliente será responsable de que los datos personales alojados o tratados mediante los servicios de HostingLATAM hayan sido obtenidos y sean tratados conforme a una base de licitud válida, de informar a los titulares cuando corresponda y de impartir instrucciones compatibles con la legislación aplicable.</p>
                <p class="terms-text">Finalizada la prestación que origine el encargo, los datos personales serán devueltos o suprimidos según corresponda al servicio, a las instrucciones lícitas del Cliente y a los períodos de conservación aplicables, sin perjuicio de aquellos antecedentes que deban conservarse por obligación legal o para el ejercicio o defensa de derechos.</p>
            </section>

            <section id="terminos-33" class="terms-section" aria-labelledby="terminos-33-title">
                <h2 id="terminos-33-title"><span>33.</span> Derechos de los titulares de datos personales</h2>
                <p class="terms-text">Los titulares de datos personales podrán ejercer ante HostingLATAM, cuando ésta actúe como responsable del tratamiento, los derechos reconocidos por la legislación vigente, incluyendo acceso, rectificación, supresión, oposición, portabilidad y bloqueo temporal, en los casos y bajo las condiciones establecidas por la ley.</p>
                <p class="terms-text">HostingLATAM habilitará mecanismos de uso común y fácil acceso para la presentación de solicitudes y comunicará dichos canales en su Política de Privacidad y Tratamiento de Datos Personales. Las solicitudes serán gestionadas dentro de los plazos y conforme al procedimiento previsto por la normativa aplicable.</p>
                <p class="terms-text">Cuando HostingLATAM actúe exclusivamente como encargado del tratamiento por cuenta de un Cliente y reciba directamente una solicitud relativa a datos cuya responsabilidad corresponda a dicho Cliente, HostingLATAM comunicará la solicitud al responsable y prestará la colaboración razonablemente necesaria dentro del alcance del servicio y de las obligaciones legales aplicables.</p>
            </section>

            <section id="terminos-34" class="terms-section" aria-labelledby="terminos-34-title">
                <h2 id="terminos-34-title"><span>34.</span> Vulneraciones de seguridad de datos personales</h2>
                <p class="terms-text">HostingLATAM mantendrá procedimientos para gestionar vulneraciones de seguridad que afecten datos personales bajo su responsabilidad o custodia, incluyendo medidas de detección, contención, análisis, recuperación, documentación y preservación de antecedentes relevantes.</p>
                <p class="terms-text">Cuando una vulneración de seguridad de datos personales deba ser comunicada a la Agencia de Protección de Datos Personales o a los titulares afectados conforme a la legislación vigente, HostingLATAM efectuará las comunicaciones que legalmente le correspondan dentro de los plazos, condiciones y contenidos establecidos por la normativa aplicable.</p>
                <p class="terms-text">Cuando HostingLATAM actúe como encargado del tratamiento por cuenta del Cliente, comunicará al responsable, sin dilación indebida y conforme a la normativa aplicable, las vulneraciones de seguridad de datos personales de las que tome conocimiento y que afecten datos tratados por cuenta de dicho Cliente, proporcionando los antecedentes razonablemente disponibles que resulten necesarios para la gestión del incidente.</p>
                <p class="terms-text">HostingLATAM mantendrá un registro de las vulneraciones de seguridad de datos personales cuando ello sea exigido por la normativa aplicable.</p>
            </section>

            <section id="terminos-35" class="terms-section" aria-labelledby="terminos-35-title">
                <h2 id="terminos-35-title"><span>35.</span> Gestión y reporte de incidentes de ciberseguridad</h2>
                <p class="terms-text">Ingeniería Informática HostingLATAM SpA ha sido calificada como Operador de Importancia Vital (OIV) por la Agencia Nacional de Ciberseguridad (ANCI), conforme a la Ley N.º 21.663, Marco de Ciberseguridad, y a la Resolución Exenta N.º 187 de la ANCI, publicada en el Diario Oficial el 24 de julio de 2026. HostingLATAM aparece en la categoría de infraestructura digital, servicios digitales y servicios de tecnología de la información gestionados por terceros.</p>
                <p class="terms-text">En su calidad de Operador de Importancia Vital, HostingLATAM mantendrá las medidas técnicas, organizacionales, físicas e informativas que resulten aplicables para prevenir, gestionar, reportar y resolver incidentes de ciberseguridad, así como los sistemas, procedimientos, registros, planes de continuidad operacional y mecanismos de gestión de riesgos exigidos por la Ley N.º 21.663, sus reglamentos, instrucciones generales, protocolos y demás normativa dictada por la ANCI.</p>
                <p class="terms-text">Ante un incidente de ciberseguridad, HostingLATAM podrá adoptar de forma inmediata las medidas de contención que resulten necesarias para reducir su impacto y propagación, incluyendo restringir o bloquear accesos, aislar sistemas, redes, servidores o entornos comprometidos, suspender temporalmente funcionalidades o servicios expuestos, proteger los sistemas de respaldo, modificar o revocar credenciales, preservar registros y evidencia técnica y ejecutar las demás acciones de mitigación exigidas por la normativa aplicable. Estas medidas podrán implicar interrupciones temporales o parciales cuando sean necesarias para proteger la infraestructura, los servicios esenciales, la información de los Clientes o terceros.</p>
                <p class="terms-text">HostingLATAM efectuará los reportes y comunicaciones de incidentes al CSIRT Nacional, a la ANCI y a las demás autoridades competentes dentro de los plazos y condiciones establecidos por la legislación y normativa vigente. El Cliente deberá colaborar oportunamente cuando un incidente relacionado con sus sistemas, aplicaciones, credenciales o información requiera antecedentes, accesos, acciones de contención o coordinación necesarios para la investigación, mitigación, recuperación o cumplimiento de obligaciones regulatorias de HostingLATAM.</p>
            </section>

            <section id="terminos-36" class="terms-section" aria-labelledby="terminos-36-title">
                <h2 id="terminos-36-title"><span>36.</span> Propiedad intelectual</h2>
                <p class="terms-text">Las marcas, logotipos, diseños, documentación, software propio, contenido del sitio web y demás activos intelectuales de HostingLATAM pertenecen a Ingeniería Informática HostingLATAM SpA o son utilizados conforme a las autorizaciones o licencias correspondientes.</p>
                <p class="terms-text">La contratación de servicios no implica transferencia de dichos derechos al Cliente.</p>
            </section>

            <section id="terminos-37" class="terms-section" aria-labelledby="terminos-37-title">
                <h2 id="terminos-37-title"><span>37.</span> Mantenimientos</h2>
                <p class="terms-text">HostingLATAM podrá realizar mantenimientos preventivos, correctivos, de seguridad o evolutivos sobre su infraestructura.</p>
                <p class="terms-text">Cuando resulte razonablemente posible y la naturaleza de la intervención lo permita, los mantenimientos programados que puedan producir indisponibilidad serán informados previamente mediante los canales correspondientes.</p>
                <p class="terms-text">Los mantenimientos de emergencia podrán ejecutarse sin aviso previo cuando sean necesarios para proteger la seguridad, estabilidad, disponibilidad o integridad de la infraestructura.</p>
            </section>

            <section id="terminos-38" class="terms-section" aria-labelledby="terminos-38-title">
                <h2 id="terminos-38-title"><span>38.</span> Limitación y delimitación de responsabilidad</h2>
                <p class="terms-text">HostingLATAM responderá por la prestación de los servicios dentro del alcance expresamente contratado y conforme a la legislación aplicable.</p>
                <p class="terms-text">HostingLATAM no será responsable por fallas, pérdidas, interrupciones o incidentes directamente atribuibles a:</p>
                <ol class="terms-alpha-list" type="a">
                    <li>Aplicaciones administradas por el Cliente.</li>
                    <li>Errores de programación o desarrollo.</li>
                    <li>Credenciales comprometidas por causas atribuibles al Cliente o sus usuarios.</li>
                    <li>Configuraciones efectuadas por el Cliente o terceros no autorizados por HostingLATAM.</li>
                    <li>Software sin soporte, obsoleto o desactualizado mantenido por decisión del Cliente.</li>
                    <li>Incumplimiento de recomendaciones técnicas cuya implementación corresponda al Cliente.</li>
                    <li>Servicios, plataformas o proveedores externos fuera del control razonable de HostingLATAM.</li>
                    <li>Caso fortuito o fuerza mayor.</li>
                    <li>Eliminación, modificación o corrupción de información producida por acciones del Cliente o usuarios autorizados por éste.</li>
                    <li>Fallas de aplicaciones, ERP, bases de datos, software o componentes cuya administración no haya sido expresamente contratada a HostingLATAM.</li>
                    <li>Incompatibilidades de software o aplicaciones de terceros no administradas por HostingLATAM.</li>
                </ol>
                <p class="terms-text">La existencia de un servicio de respaldo, seguridad, monitoreo, análisis de vulnerabilidades o Alta Disponibilidad no deberá interpretarse como una garantía absoluta contra pérdida de información, interrupciones, vulnerabilidades o incidentes de seguridad.</p>
                <p class="terms-text">Ninguna disposición de estos Términos y Condiciones deberá interpretarse como exclusión o limitación de responsabilidades que legalmente no puedan ser excluidas o limitadas.</p>
            </section>

            <section id="terminos-39" class="terms-section" aria-labelledby="terminos-39-title">
                <h2 id="terminos-39-title"><span>39.</span> Terminación del servicio</h2>
                <p class="terms-text">El Cliente podrá solicitar el término de sus servicios conforme al período, permanencia y condiciones comerciales contratadas.</p>
                <p class="terms-text">Cuando exista un contrato con plazo mínimo de permanencia, se aplicarán las condiciones de terminación anticipada establecidas en dicho instrumento.</p>
                <p class="terms-text">La solicitud de término no elimina obligaciones de pago previamente devengadas.</p>
                <p class="terms-text">Antes del término efectivo del servicio, el Cliente será responsable de obtener una copia de toda la información que requiera conservar.</p>
                <p class="terms-text">La conservación temporal de respaldos por parte de HostingLATAM después del término del servicio no reemplaza esta obligación del Cliente.</p>
            </section>

            <section id="terminos-40" class="terms-section" aria-labelledby="terminos-40-title">
                <h2 id="terminos-40-title"><span>40.</span> Portabilidad y retiro de información</h2>
                <p class="terms-text">HostingLATAM no impedirá injustificadamente que el Cliente retire su información al finalizar la relación contractual.</p>
                <p class="terms-text">El Cliente deberá realizar el retiro de la información antes del término efectivo del servicio.</p>
                <p class="terms-text">La asistencia técnica necesaria para realizar migraciones hacia otro proveedor podrá constituir un servicio adicional dependiendo de la complejidad, volumen de información y trabajo técnico requerido.</p>
                <p class="terms-text">La existencia de respaldos durante el período posterior al término señalado en estos Términos tiene fines operacionales y de contingencia y no constituye un servicio de almacenamiento contratado por el Cliente.</p>
            </section>

            <section id="terminos-41" class="terms-section" aria-labelledby="terminos-41-title">
                <h2 id="terminos-41-title"><span>41.</span> Modificaciones de los términos y condiciones</h2>
                <p class="terms-text">HostingLATAM podrá actualizar estos Términos y Condiciones cuando existan cambios legales, regulatorios, tecnológicos, comerciales, operacionales o de seguridad que lo justifiquen.</p>
                <p class="terms-text">Las modificaciones serán publicadas en el sitio web oficial y, cuando afecten sustancialmente servicios vigentes y corresponda legal o contractualmente, podrán ser comunicadas mediante los canales de contacto registrados por el Cliente.</p>
                <p class="terms-text">Las modificaciones no afectarán retroactivamente derechos u obligaciones ya consolidados, salvo cuando sean necesarias para dar cumplimiento a disposiciones legales obligatorias.</p>
            </section>

            <section id="terminos-42" class="terms-section" aria-labelledby="terminos-42-title">
                <h2 id="terminos-42-title"><span>42.</span> Promociones y beneficios comerciales</h2>
                <p class="terms-text">Las campañas promocionales, descuentos, meses gratuitos, créditos, códigos promocionales u otros beneficios podrán encontrarse sujetos a términos y condiciones particulares.</p>
                <p class="terms-text">Las condiciones especiales de cada promoción complementarán estos Términos y Condiciones Generales.</p>
                <p class="terms-text">Finalizado el período promocional, las renovaciones se realizarán conforme a las condiciones comerciales normales aplicables al servicio, salvo que se haya acordado expresamente algo diferente.</p>
            </section>

            <section id="terminos-43" class="terms-section" aria-labelledby="terminos-43-title">
                <h2 id="terminos-43-title"><span>43.</span> Caso fortuito y fuerza mayor</h2>
                <p class="terms-text">Ninguna de las partes será responsable por incumplimientos originados directamente por acontecimientos constitutivos de caso fortuito o fuerza mayor conforme a la legislación aplicable.</p>
                <p class="terms-text">La parte afectada deberá adoptar medidas razonables para reducir las consecuencias del evento y restablecer el cumplimiento de sus obligaciones cuando resulte posible.</p>
            </section>

            <section id="terminos-44" class="terms-section" aria-labelledby="terminos-44-title">
                <h2 id="terminos-44-title"><span>44.</span> Legislación aplicable</h2>
                <p class="terms-text">Los presentes Términos y Condiciones se regirán e interpretarán conforme a las leyes de la República de Chile.</p>
                <p class="terms-text">Serán aplicables, según corresponda a la naturaleza de la relación y del servicio contratado, las disposiciones del Código Civil, Código de Comercio, legislación sobre contratación electrónica, protección de consumidores, protección de datos personales, delitos informáticos, ciberseguridad y demás normativa vigente aplicable. En particular, serán aplicables, cuando corresponda, la Ley N.º 19.628 sobre Protección de la Vida Privada, según las modificaciones introducidas por la Ley N.º 21.719, y la Ley N.º 21.663, Marco de Ciberseguridad, junto con sus reglamentos, normas e instrucciones dictadas por las autoridades competentes.</p>
                <p class="terms-text">Cuando corresponda legalmente la aplicación de normas imperativas de protección al consumidor, éstas prevalecerán sobre cualquier estipulación contractual incompatible.</p>
            </section>

            <section id="terminos-45" class="terms-section" aria-labelledby="terminos-45-title">
                <h2 id="terminos-45-title"><span>45.</span> Comunicaciones</h2>
                <p class="terms-text">Las comunicaciones relacionadas con los servicios podrán realizarse mediante:</p>
                <ol class="terms-alpha-list" type="a">
                    <li>Correo electrónico registrado por el Cliente.</li>
                    <li>Plataforma o portal de clientes.</li>
                    <li>Sistema de tickets.</li>
                    <li>Teléfono cuando corresponda.</li>
                    <li>Comunicaciones escritas.</li>
                    <li>Sitio web oficial para comunicaciones generales.</li>
                </ol>
                <p class="terms-text">El Cliente será responsable de mantener actualizados sus datos de contacto.</p>
                <p class="terms-text">Las comunicaciones enviadas a los datos proporcionados por el Cliente serán consideradas realizadas a los canales de contacto informados por éste, sin perjuicio de las formalidades especiales que puedan ser exigidas por la legislación o contrato aplicable.</p>
            </section>

            <section id="terminos-46" class="terms-section" aria-labelledby="terminos-46-title">
                <h2 id="terminos-46-title"><span>46.</span> Derecho a retracto en contrataciones de servicios</h2>
                <p class="terms-text">Cuando resulte aplicable la Ley N.º 19.496 sobre Protección de los Derechos de los Consumidores, y tratándose de servicios contratados por medios electrónicos o mediante otras formas de comunicación a distancia, HostingLATAM dispone expresamente la exclusión del derecho a retracto respecto de los servicios que ofrece y presta, de conformidad con el artículo 3 bis de dicha ley y la normativa reglamentaria aplicable.</p>
                <p class="terms-text">En consecuencia, el Cliente consumidor será informado de esta exclusión de manera inequívoca, destacada, fácilmente accesible y en un lugar visible, en forma previa a la celebración del contrato y al pago del precio del servicio, de modo que pueda conocer antes de contratar que el servicio correspondiente no contará con derecho a retracto.</p>
                <p class="terms-text">La exclusión deberá informarse en la plataforma, formulario, proceso de contratación, cotización electrónica, orden de contratación, comprobante previo al pago u otro medio utilizado para celebrar el contrato, según corresponda. La inclusión de esta información únicamente en documentos emitidos después de perfeccionada la contratación o efectuado el pago no sustituirá la obligación de información previa exigida por la normativa aplicable.</p>
                <p class="terms-text">La exclusión del derecho a retracto no impedirá ni limitará el ejercicio de otros derechos que la legislación reconozca al consumidor, ni afectará las responsabilidades de HostingLATAM derivadas del incumplimiento de las condiciones expresamente contratadas o de normas imperativas que resulten aplicables.</p>
                <p class="terms-text">Las contrataciones realizadas por personas jurídicas o por clientes que no tengan la calidad de consumidores conforme a la Ley N.º 19.496 se regirán por las condiciones contractuales pactadas, los presentes Términos y Condiciones y las demás normas que resulten aplicables.</p>
            </section>

            <section id="terminos-47" class="terms-section" aria-labelledby="terminos-47-title">
                <h2 id="terminos-47-title"><span>47.</span> Aceptación de los términos y condiciones</h2>
                <p class="terms-text">El Cliente deberá tener acceso a los presentes Términos y Condiciones antes de completar una contratación electrónica y contar con la posibilidad de almacenarlos o imprimirlos.</p>
                <p class="terms-text">La sola visita al sitio web de HostingLATAM no implica la aceptación de estos Términos ni genera por sí misma una obligación contractual para el visitante.</p>
                <p class="terms-text">Cuando corresponda, HostingLATAM solicitará la aceptación expresa de los presentes Términos y Condiciones mediante una casilla de verificación, botón de aceptación u otro mecanismo electrónico que permita manifestar inequívocamente el consentimiento.</p>
                <p class="terms-text">El Cliente será responsable de revisar las características, recursos, dominio asociado, valores, periodicidad, prestaciones incluidas y demás condiciones particulares del servicio seleccionado antes de confirmar su contratación.</p>
            </section>

            <section id="terminos-48" class="terms-section" aria-labelledby="terminos-48-title">
                <h2 id="terminos-48-title"><span>48.</span> Vigencia</h2>
                <p class="terms-text">Los presentes Términos y Condiciones entrarán en vigencia desde su publicación en el sitio web oficial de HostingLATAM.</p>
                <p class="terms-text">Las condiciones particulares de contratos celebrados previamente mantendrán su vigencia conforme a lo acordado entre las partes.</p>
                <p class="terms-text">Compañía de servicios informáticos SpA</p>
                <p class="terms-text">RUT N.º 77.690.981-5</p>
                <p class="terms-text">Representada legalmente por Manuel Salas Nalda, Ingeniero en Informática</p>
                <p class="terms-text"><a href="https://www.hostinglatam.cl">https://www.hostinglatam.cl</a></p>
            </section>

        </article>
    </div>
</main>

<?php get_footer(); ?>
