<!doctype html>
<html class="no-js" lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/favicon.ico">
    <title>Confirmar compra | Tecito</title>
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700,900|Vesper+Libre:900" rel="stylesheet">
    <link rel="stylesheet" href="css/foundation.css">
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="css/estilo.css">
  </head>
  <body>

<!-- HEADER -->

    <div class="row forms">
      <header>
        <div class="transparencia">
          <?php include 'header.html'; ?>
        </div>
      </header>
    </div>

<!-- FORMULARIO -->

    <div class="row">
      <div class="modal">
        <h2>Confirmar compra</h2>
        <div class="modal-content">
          <div class="formulario">
              <ul>
                <li><strong>Artículo:</strong> Té Hojas</li>
                <li><strong>Cantidad:</strong> 1</li>
                <li><strong>Cliente:</strong> Rubén Albornoz</li>
              </ul>
              <form action="confirmado.php" method="post">
              <input type="password" name="password" value="" placeholder="Tu contraseña...">
              <input type="submit" class="button" name="submit" value="Confirmar compra">
            </form>
          </div>
          <div class="puntos">
            <ul>
              <li><img src="img/search.png" alt="">Comprueba tus datos</li>
              <li><img src="img/asterik.png" alt="">Ingresa tu contraseña</li>
              <li><img src="img/go.png" alt="">Sigue con tu compra</li>
            </ul>
          </div>
        </div>
      </div>
    </div>

<!-- FOOTER -->

    <div class="row align-justify">
      <?php include 'footer.html';?>
    </div>

<!-- JAVASCRIPT -->

    <script src="js/vendor/jquery.js"></script>
    <script src="js/vendor/what-input.js"></script>
    <script src="js/vendor/foundation.js"></script>
    <script src="js/app.js"></script>
  </body>
</html>
