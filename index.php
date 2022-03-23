<?php include_once 'email.php'; ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Expande</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css" type="text/css">
    <script defer src="https://kit.fontawesome.com/28559843c8.js" crossorigin="anonymous"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script defer src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script defer src="script.js"></script>
  </head>
  <body>
    <nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark">
      <div class="container">
        <a class="navbar-brand" href="#">Logo</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Inicio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#quienes-somos">¿Quienes somos?</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#quieres-desarrollarte">¿Quieres saber más?</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#nuestros-servicios">Nuestros servicios</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#clientes">Nuestros clientes</a>
            </li>
          </ul>
          <form class="d-flex">
            <a class="btn-regular btn btn-danger" href="#contacto"><i class="fa-solid fa-file-signature"></i> Pide una cotización</a>
          </form>
        </div>
      </div>
    </nav>
    <div class="hero d-flex align-items-center">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <h1 class="display-1 fw-bold">EXPANDE</h1>
            <h1 class="display-2 fw-bold">International Trading Company</h1>
            <h1>Servicios de importación y exportación de productos</h1>
            <a class="btn-regular btn btn-danger" href="#quienes-somos"><i class="fa-solid fa-file-signature"></i> Contáctanos</a>
          </div>
        </div>
      </div>
    </div>
    <section class="section my-5 d-flex align-items-center" id="quienes-somos">
      <div class="container bg-white">
        <div class="row">
          <div class="border rounded col-md-6">
            <div class="p-5">
              <h1 class="fw-bold title text-center">¿QUIENES SOMOS?</h1>
              <blockquote class="blockquote">
                <p>
                  Somos una empresa representante de fabricantes y compradores en Latinoamérica, nuestro propósito es proporcionar oportunidades de mercado para la importación y/o exportación de productos a través de nuestros contactos comerciales a lo largo de nuestra red mundial.
                  Contamos con un equipo de profesionales expertos en logística y comercio exterior, para proveer un servicio excepcional y atender los requerimientos de nuestros clientes.
                </p>
                <button type="button" class="btn btn-outline-info"><i class="fa-solid fa-pen-to-square"></i> Contáctanos</button>
              </blockquote>
            </div>
          </div>
          <div class="border rounded col-md-6 hands">
          </div>
        </div>
      </div>
    </section>
    <section class="section my-5 d-flex align-items-center" id="quieres-desarrollarte">
      <div class="container ">
        <div class="row">
          <div class="bg-white border rounded p-5 col-md-6 position-relative">
            <h2 class="title fw-bold">¿QUIERES DESARROLLARTE COMO EMPRESA EXPORTADORA?</h2>
            <blockquote class="blockquote">
              <p>
                Te potenciamos como exportador.
              </p>
              <button type="button" data-bs-toggle="modal" data-bs-target="#modal1" class="m-4 position-absolute bottom-0 end-0 btn btn-outline-info"><i class="fa-solid fa-eye"></i> Leer mas</button>
            </blockquote>
          </div>
          <div class="bg-white border rounded p-5 col-md-6 position-relative">
            <h2 class="title fw-bold">¿QUIERES ENCONTRAR PROVEEDORES?</h2>
            <blockquote class="blockquote">
              <p>
                Te ayudamos a encontrar mejores alternativas de proveedores para tu empresa.
              </p>
              <button type="button" data-bs-toggle="modal" data-bs-target="#modal2" class="m-4 position-absolute bottom-0 end-0 btn btn-outline-info"><i class="fa-solid fa-eye"></i> Leer mas</button>
            </blockquote>
          </div>
        </div>
      </div>
    </section>
    <section class="section my-5" id="nuestros-servicios">
      <div class="container">
        <div class="row">
          <div class="my-5 col-md-12">
            <h1 class="fw-bold title text-center">NUESTROS SERVICIOS</h1>
          </div>
        </div>
        <div class="row d-flex justify-content-center">
          <div class="col-md-6">
            <blockquote class="blockquote text-center">
              <p>
                Creamos valor a través del diseño de una estructura de trabajo específica para cada cliente, así aseguramos que pueda alcanzar metas y objetivos  deseados
                Trabajamos con productos y servicios certificados para satisfacer los requerimientos de nuestros clientes
                A través de  nuestros servicios, ahorramos costos de viajes para  conocer a clientes y/o proveedores, simplificamos la operación de comercio internacional.
              </p>
            </blockquote>
          </div>
        </div>
        <div class="my-5 row">
          <div class="col-md-4">
            <h1 class="display-1 text-black-50">01.</h1>
            <h2 class="title fw-bold">Integridad</h2>
            <blockquote class="blockquote">
              <p>
                Máxima claridad, transparencia en todo el proceso.
              </p>
            </blockquote>
          </div>
          <div class="col-md-4">
            <h1 class="display-1 text-black-50">02.</h1>
            <h2 class="title fw-bold">Networking</h2>
            <blockquote class="blockquote">
              <p>
                Contamos con contactos comerciales en Asia, Estados Unidos, Centro América y Latinoamérica.
              </p>
            </blockquote>
          </div>
          <div class="col-md-4">
            <h1 class="display-1 text-black-50">03.</h1>
            <h2 class="title fw-bold">Acompañamiento y Capacitación</h2>
            <blockquote class="blockquote">
              <p>
                Guiamos en todo lo necesario para consolidar la operación internacional nuestro mayor interés es buscar éxito para nuestros representados.
              </p>
            </blockquote>
          </div>
        </div>
      </div>
    </section>
    <section class="section my-5 d-flex align-items-center " id="clientes">
      <div class="container justify-content-center">
        <div class="row">
          <div class="col-md-6">

          </div>
          <div class="border rounded col-md-6 bg-white">
            <div class="p-5">
              <h1 class="fw-bold title text-center">¿QUIENES SON NUESTROS CLIENTES?</h1>
              <blockquote class="blockquote text-center">
                <p>
                  Empresas productoras, distribuidoras que deseen mejorar sus operaciones a nivel internacional, diversificar su mercado de proveedores y clientes.
                </p>
              </blockquote>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="section my-5" id="contacto">
      <div class="container">
        <h1 class="fw-bold title text-center">CONTACTO</h1>
        <form id="contactForm" action="" method="post">
          <div class="mb-3">
            <label for="name" class="form-label">Nombre y Apellidos</label>
            <input type="text" class="form-control" id="name" name="name" required>
          </div>
          <div class="mb-3">
            <label for="company" class="form-label">Nombre de la empresa/emprendimiento</label>
            <input type="text" class="form-control" id="company" name="company" required>
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input type="email" class="form-control" id="email" name="email" required>
          </div>
          <div class="mb-3">
            <label for="phone" class="form-label">Número de celular</label>
            <input type="number" class="form-control" id="phone" name="phone" required>
          </div>
          <div class="mb-3">
            <label for="country" class="form-label">País</label>
            <input type="text" class="form-control" id="country" name="country" required>
          </div>
          <div class="mb-3">
            <label for="how-get" class="form-label">¿Cómo llegó a nosotros?</label>
            <input type="text" class="form-control" id="how-get" name="how-get" required>
          </div>
          <div class="mb-3">
            <label for="message" class="form-label">Mensaje</label>
            <textarea class="form-control" id="message" rows="3" name="message" required></textarea>
          </div>
          <button type="submit" class="btn btn-primary" name="send_email">Enviar</button>
        </form>
      </div>
    </section>
    <footer class="py-5 bg-light text-dark">
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            Logo
          </div>
          <div class="col-md-3">
            <p>
              Calle Parroquia 201, interno 1004 <br>
              Actipan <br>
              03230 Benito Juárez, CDMX <br>
              Mexico
            </p>
          </div>
          <div class="col-md-3">
            <a href="mailto:info@expandetrading.com">info@expandetrading.com</a>
          </div>
          <div class="col-md-3">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Inicio</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#quienes-somos">¿Quienes somos?</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#quieres-desarrollarte">¿Quieres saber más?</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#nuestros-servicios">Nuestros servicios</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#clientes">Nuestros clientes</a>
              </li>
            </ul>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">
            Copyright ©2022 Expande.
          </div>
        </div>
      </div>
    </footer>
    <div class="modal fade" id="modal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
          <div class="modal-header text-center">
            <h5 class="modal-title title fw-bold" id="exampleModalLabel">¿QUIERES DESARROLLARTE COMO EMPRESA EXPORTADORA?</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <blockquote class="blockquote p-3">
              <ul>
                <li>
                  Desarrollamos oportunidades mercados y contactos internacionales para tus productos.
                </li>
                <li>
                  Diversificamos la cartera de tus clientes y establecer relacionales comerciales con compradores confiables a nivel internacional.
                </li>
                <li>
                  Buscamos minimizar los costos y riesgos de la operación internacional.
                </li>
                <li>
                  Brindamos apoyo logístico en su operación internacional.
                </li>
              </ul>
            </blockquote>
          </div>
        </div>
      </div>
    </div>
    <div class="modal fade" id="modal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
          <div class="modal-header text-center">
            <h5 class="modal-title title fw-bold" id="exampleModalLabel">¿QUIERES ENCONTRAR PROVEEDORES?</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <blockquote class="blockquote p-3">
              <ul>
                <li>
                  Desarrollamos alternativas de proveedores confiables y con experiencia en comercio internacional para su negocio.
                </li>
                <li>
                  Velamos por brindarle velocidad, claridad y transparencia en las ofertas y alternativas de proveedores.
                </li>
                <li>
                  Nuestro objetivo es ayudarlo a desarrollar contactos comerciales de largo plazo con vendedores confiables a nivel internacional.
                </li>
                <li>
                  Colaboramos en minimizar los riesgos en sus operaciones de comercio internacional.
                </li>
                <li>
                  Brindamos apoyo logístico en la operación internacional para mejorar su desempeño.
                </li>
              </ul>
            </blockquote>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
