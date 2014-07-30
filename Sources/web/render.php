<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Dependency Injection</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="web/css/bootstrap.min.css">
        <style>
            body {
                padding-top: 50px;
                padding-bottom: 20px;
            }
        </style>
        <link rel="stylesheet" href="web/css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="web/css/main.css">

        <script src="web/js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="">Dependency Injection</a>
        </div>
      </div>
    </div>

    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
          <h1>User</h1>
          <table class="table table-bordered table-hover table-striped">
              <thead>
                  <tr>
                      <th>Nom</th>
                      <th>Prenom</th>
                      <th>Age</th>
                  </tr>
              </thead>
              <tbody>
                  <tr>
                      <td><?= $render['nom'] ?></td>
                      <td><?= $render['prenom'] ?></td>
                      <td><?= $render['age'] ?></td>
                  </tr>
              </tbody>
          </table>
      </div>

      <hr>

      <footer>
        <p>&copy; Karlitos 2014</p>
      </footer>
    </div> <!-- /container -->
        <script src="web/js/vendor/jquery-1.11.0.js"></script>

        <script src="web/js/vendor/bootstrap.min.js"></script>

        <script src="web/js/main.js"></script>
    </body>
</html>
