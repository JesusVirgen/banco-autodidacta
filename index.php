<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preload" href="css/normalize.css" as="style">
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Rambla:wght@700&family=Sen&display=swap" rel="stylesheet">
  <link rel="preload" href="css/styles.css" as="style">
  <link rel="stylesheet" href="css/styles.css">
  <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
  <title>Banquito</title>
</head>
<body>
  <header class="header">
    <div class="header__barra contenedor">
      <div class="barra__item">
        <h1 class="item__titulo">Banquito</h1>
        <img class="item__img" src="images/banco.svg" alt="Logo">
      </div>
      <div class="barra__enlaces">
        <div class="barra__item">
          <img class="item__img" src="images/accesar.svg" alt="Logo">
          <h3><a class="item__titulo" href="#">Accesar</a></h3>
        </div>
        <div class="barra__item">
          <img class="item__img" src="images/registrar.svg" alt="Logo">
          <h3><a class="item__titulo" href="#">Registrarse</a></h3>
        </div>
      </div>
    </div>
  </header>
  <main>
    <div class="bienvenida contenedor">
      <h3 class="linea">Usuarios en linea  <span><?PHP include("uactivos.php"); echo $USUARIOS_ACTIVOS?></span></h3>
      <h1 class="Mensaje">Bienvenidos</h1>
      <h3 class="visitas">Contador de visitas  <span><?PHP include("contador.php");?></span></span></h3>
    </div>
    <nav class="navegacion contenedor" id="navegacion">
      <div class="navegacion__enlace" >
        <h3><a class="enlace__titulo" href="#mision-vision">Misión/Visión</a></h3>
        <div class="enlace__img">
          <img  src="images/mision-vision.svg" alt="Logo">
        </div>
      </div>
      <div class="navegacion__enlace" >
        <h3><a class="enlace__titulo" href="#quienes-somos">Quienes somos</a></h3>
        <div class="enlace__img">
          <img  src="images/quienes-somos.svg" alt="Logo">
        </div>
      </div>
      <div class="navegacion__enlace" >
        <h3><a class="enlace__titulo" href="#servicios">Servicios </a></h3>
        <div class="enlace__img">
          <img  src="images/servicios.svg" alt="Logo">
        </div>
      </div>
      <div class="navegacion__enlace">
        <h3><a class="enlace__titulo" href="#noticias">Noticias</a></h3>
        <div class="enlace__img">
          <img  src="images/noticias.svg" alt="Logo">
        </div>
      </div>
      <div class="navegacion__enlace">
        <h3><a class="enlace__titulo" href="#avisos">Avisos</a></h3>
        <div class="enlace__img">
          <img  src="images/avisos.svg" alt="Logo">
        </div>
      </div>
    </nav>
    <h2 class="mision-vision__titulo contenedor">Nuestros Valores</h3>
    <section id="mision-vision" class="mision-vision contenedor" >
      <div class="articulo">
        <div>
          <h3 class="articulo__titulo">Misión</h3>
          <p class="articulo__texto">
            Nuestra misión es crear una pagina web bancaría que cumpla con los lineamientos especificados para lograr ser reconocidos<br>
            como una gran institución para todos los usuarios y para ello se implementaran herramientas faciles de manejar y diseñando<br>
            servicios enfocados a las necesidades de los usuarios, además de generar actalizaciones cada periodo de tiempo y basandonos<br>
            en las necesidades de los usuarios que ingresen a esta intitución. 
          </p>
        </div>
        <img class="articulo__img" src="images/mision.jpeg" alt="mision img">
      </div>
      <div class="articulo">
        <div>
          <h3 class="articulo__titulo">Visión</h3>
          <p class="articulo__texto">
            Ser mas que una pagina, una institución que sea reconocida en el área por su gran flexibilidad, versatilidad, rentabilidad<br>
            y gran manejo finenciero, además de lograr que los clientes siempre esten contentos y satisfechos con lo que la institución<br>
            les ofrece. 
          </p>
        </div>
        <img class="articulo__img" src="images/vision.jpg" alt="vision img">
      </div>
    </section>
    <section id="quienes-somos" class="quienes-somos contenedor" >
      <div class="banner">
        <img class="banner__img" src="images/equipo.jpg">
        <div>
          <h1 class="banner__titulo">Quienes Somos?</h1>
          <p class="banner__texto">Somos una institución 100% mexicana y que esta constituida por un grupo de estudiantes dispuestos y comprometidos con esta institución<br>
            para poder ser un banco que refleje el futuro gracias a la tecnología.</p>
        </div>
      </div>
      <div class="equipo">
        <h2 class="equipo__titulo">Equipo de trabajo</h2>
        <div class="integrantes">
          <div class="integrante">
            <h3 class="integrante__nombre">Derek Ayala</h3>
            <img class="integrante__foto" src="images/yo.jpg" alt="foto integrante">
          </div>
          <div class="integrante">
            <h3 class="integrante__nombre">Paul Morfin</h3>
            <img class="integrante__foto" src="images/paul.jpg" alt="foto integrante">
          </div>
          <div class="integrante">
            <h3 class="integrante__nombre">Claudia Godinez</h3>
            <img class="integrante__foto" src="images/claudia.jpg" alt="foto integrante">
          </div>
          <div class="integrante">
            <h3 class="integrante__nombre">Jesús Virgen</h3>
            <img class="integrante__foto" src="images/jesus.jpg" alt="foto integrante">
          </div>
        </div>
      </div>
    </section>
    <section id="servicios" class="servicios contenedor" >
      <h2 class="servicios__titulo">Servicios</h2>
      <div class="servicios__contenedor">
        <div class="servicio">
          <h3 class="servicio__titulo">Apertura de cuenta</h3>
          <img class="servicio__img" src="images/cuenta.svg" alt="Logo">
        </div>
        <div class="servicio">
          <h3 class="servicio__titulo">Estados de cuenta</h3>
          <img class="servicio__img" src="images/estado.svg" alt="Logo">
        </div>
        <div class="servicio">
          <h3 class="servicio__titulo">Retiros y depositos</h3>
          <img class="servicio__img" src="images/cartera.svg" alt="Logo">
        </div>
        <div class="servicio">
          <h3 class="servicio__titulo">Tranferencias bancarias</h3>
          <img class="servicio__img" src="images/dinero.svg" alt="Logo">
        </div>
      </div>
    </section>
    <section id="noticias" class="noticias contenedor" >
      <h2 class="noticias__titulo">Noticias</h2>
      <div class="noticias__contenedor">
        <div class="noticia">
          <div>
            <h3><a class="noticia__titulo" href="https://www.eleconomista.es/mercados-cotizaciones/noticias/11495900/11/21/Toda-podria-cambiar-para-los-bancos-centrales-la-inflacion-y-el-petroleo-con-la-nueva-cepa-de-covid.html" target="_blank">La nueva cepa de covid puede provocar un giro de 180 grados para bancos centrales, inflación y petróleo</a></h3>
            <p class="noticia__texto">
              La amenaza de la nueva variante sudafricana del coronavirus, que la OMS ha bautizado como Omicron, y su potencial resistencia parcial a las vacunas -que aún se está estudiando- supone un giro de 180 grados para el mercado. Se ha pasado de la preocupación reinante sobre las presiones inflacionistas y los tipos de interés a un escenario de nuevos confinamientos. Las consecuencias para las principales variables del mercado serían un petróleo más barato, alivio para la inflación, nuevo retraso en las subidas de tipos, pero con el agravante de una recuperación económica truncada de cuajo.
            </p>
          </div>
          <img class="noticia__img" src="images/noticia1.jpg" alt="imagen noticia">
        </div>
        <div class="noticia">
          <img class="noticia__img" src="images/noticia2.jpg" alt="imagen noticia">
          <div>
            <h3><a class="noticia__titulo" href="https://www.sport.es/es/noticias/tecnologia/bancos-japoneses-buscan-crear-propia-12913688" target="_blank">Los bancos japoneses buscan crear su propia criptomoneda</a></h3>
            <p class="noticia__texto">
              Japón está a punto de dar un paso significativo hacia el desarrollo de una moneda digital. Un consorcio formado por aproximadamente 70 empresas japonesas dijo esta semana que planean lanzar una criptomoneda basada en el yen en 2022.
              <br><br>
              Lo notable del proyecto, llamado provisionalmente "DCJPY", es que tres de los bancos más grandes del país lo respaldarán. En una conferencia de prensa el miércoles, Mitsubishi UFJ, Mizuho y Sumitomo Mitsui aseguraron que se han estado reuniendo desde el año pasado para construir una infraestructura monetaria compartida para pagos digitales.
            </p>
          </div>
        </div>
        <div class="noticia">
          <div>
            <h3><a class="noticia__titulo" href="https://www.elsoldemexico.com.mx/finanzas/dolar-rebasa-los-22-pesos-en-bancos-7519554.html" target="_blank">Cierra dólar arriba de los 22 pesos en bancos de la CDMX</a></h3>
            <p class="noticia__texto">
              En ventanillas de Citibanamex el tipo de cambio cerró en 21.96 pesos por dólar, un incremento de 1.10 por ciento respecto al martes; mientras en sucursales de BBVA la cotización finalizó en 21.80, un alza de 0.92 por ciento. Esto, en medio de una subida generalizada del billete verde frente a la mayoría de las monedas del mundo.
              <br><br>
              La incertidumbre por el nombramiento de quién habrá de sustituir a Alejandro Díaz de León al frente del Banxico a partir del 1 de enero de 2022 provocó también bajas en los principales indicadores de la Bolsa Mexicana de Valores (-0.52%) y de la Bolsa Institucional de Valores (-0.47%).
            </p>
          </div>
          <img class="noticia__img" src="images/noticia3.jpg" alt="imagen noticia">
        </div>
        <div class="noticia">
          <img class="noticia__img" src="images/noticia4.webp" alt="imagen noticia">
          <div>
            <h3><a class="noticia__titulo" href="https://eleconomista.com.ar/economia/los-bancos-deberan-vender-sus-dolares-propios-n48295" target="_blank">Los bancos deberán vender sus dólares propios</a></h3>
            <p class="noticia__texto">
              El Banco Central (BCRA) está atravesando un momento de reservas líquidas muy bajas. Si bien hay distintos cálculos (desde los que dicen que tiene reservas negativas hasta los que señala que rondan US$ 5.000 millones), hay coincidencia en que la situación es límite. Por eso, en las últimas horas, anunció la restricción de compra de pasajes, estadías, servicios y paseos turísticos al exterior en cuotas. 
              <br><br>
              Ahora, se suma una nueva disposición: por medio de la circular A 7407 se anunció que los bancos deberán ajustar su stock de dólares propios para que la Posición Global Neta (PGN) de moneda extranjera no supere el 0% de la responsabilidad patrimonial computable (RPC) del mes anterior desde el 1° de diciembre.
            </p>
          </div>
        </div>
      </div>
    </section>
    <section id="avisos" class="avisos contenedor" >
      <h2 class="avisos__titulo">Avisos</h2>
      <div class="avisos__contenedor">
        <div class="aviso">
          <h3 class="aviso__titulo">Navegacion sencilla</h3>
          <p class="aviso__texto">El menu superior con ayuda de JavaScript te va a recorrer por medio de la pagina ya se subiendo o bajando</p>
        </div>
        <div class="aviso">
          <h3 class="aviso__titulo">Se mueve contigo</h3>
          <p class="aviso__texto">Este mismo cuando deja de estar visible en la pagina se va a sobre poner en la parte superior de la pagina</p>
        </div>
        <div class="aviso">
          <h3 class="aviso__titulo">Por si quieres mas</h3>
          <p class="aviso__texto">El titulo de cada noticia funciona como link hacia la noticia para poder conocer mas de esta</p>
        </div>
        <div class="aviso">
          <h3 class="aviso__titulo">Gran interatividad</h3>
          <p class="aviso__texto">Puedes ver Cuantas personas estan conectadas y que numero de visitante eres</p>
        </div>
      </div>
    </section>
  </main>
  <footer class="footer">
    <div class="footer__barra contenedor">
      <div class="barra__item">
        <h1 class="item__titulo">Banquito</h1>
        <img class="item__img" src="images/banco.svg">
      </div>
      <div class="barra__enlaces">
        <a class="barra__item" href="mailto: dayala0@ucol.mx?subject=Aclaraciones &body=Aqui puede explicarnos su problema y si es necesario anexar archivos">
          <img class="item__img" src="images/aclaraciones.svg" alt="Logo">
          <h3 class="item__titulo">Aclaraciones</h3>
        </a>
        <a class="barra__item" href="mailto: dayala0@ucol.mx?subject=Banquito">
          <img class="item__img" src="images/contacto-footer.svg" alt="Logo">
          <h3 class="item__titulo">Contacto</h3>
        </a>
      </div>
    </div>
  </footer>
  <script>
    document.addEventListener('DOMContentLoaded', function(){
      iniciarApp();
    });

    function iniciarApp() {
      scrollNav();
      navegacionFija();
    }

    function navegacionFija() {
      const barra = document.querySelector('.navegacion');
      const mision_vision = document.querySelector('.mision-vision');
      const body = document.querySelector('body');
      window.addEventListener('scroll', function() {
          if( mision_vision.getBoundingClientRect().bottom < 0  ) {
            barra.classList.add('fijo');
            body.classList.add('body-scroll');
          } else {
            barra.classList.remove('fijo');
            body.classList.remove('body-scroll');
          }
      });
    }

    function scrollNav() {
      const enlaces = document.querySelectorAll('.navegacion a');
      enlaces.forEach( enlace => {
        console.log(enlace)
        enlace.addEventListener('click', function(e) {
          e.preventDefault();
          const seccionScroll = e.target.attributes.href.value;
          console.log(seccionScroll)
          const seccion = document.querySelector(seccionScroll);
          seccion.scrollIntoView({ behavior: "smooth"});
        });
      });
    }
  </script>
</body>
</html>
