<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap Product Page Template</title>

  <!-- Bootstrap -->
  <link rel="stylesheet" href="css/bootstrap.css">

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <nav class="navbar navbar-default navbar-inverse">
      <div class="container-fluid"> 
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
          <a href="http://localhost/Nexus/www/nexus/com/br/" title="Nexus"><img src="img/ico-nexus.png" alt="Nexus Logo" class="img-responsive"></a></div>
          
          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
              <li class="active"><a href="#">Usuário <span class="sr-only">(current)</span></a> </li>

            </ul>
            <ul class="nav navbar-nav navbar-right">
              <li><a href="#">Salvar</a> </li>
              <li><a href="#">Voltar</a> </li>
            </ul>
          </div>
          <!-- /.navbar-collapse --> 
        </div>
        <!-- /.container-fluid --> 
      </nav>
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="jumbotron">
              <h1 class="text-center">Olá, Usuário!</h1>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6" align="center"><input type="button" class="btn btn-danger" value="Desvincular!"></div>
          <div class="col-md-6" align="center"><input type="button" class="btn btn-success" value="Convidar!"></div>
        </div>
      </div>
      <hr>
      <hr>
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-6 col-sm-6">
            <h2>Contato</h2>
            <address>
              <strong>MyCompany, Inc.</strong><br>
              Sunny Autumn Plaza, Grand Coulee,<br>
              CA, 91308-4075, US<br>
              <abbr title="Phone">P:</abbr> (123) 456-7890
            </address>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6">
            <h2>Opiniões</h2>
            <div class="media">
              <div class="media-left"> <a href="#"> <img class="media-object" src="images/35X35.gif" alt="..."> </a> </div>
              <div class="media-body">
                <h4 class="media-heading">Usuário 1</h4>
              Opinião do Usuário 1</div>
            </div>
            <div class="media">
              <div class="media-left"> <a href="#"> <img class="media-object" src="images/35X35.gif" alt="..."> </a> </div>
              <div class="media-body">
                <h4 class="media-heading">Usuário 2</h4>
              Opinião do Usuário 2</div>
            </div>
          </div>
          <div class="col-lg-4 col-sm-12">
            <h2>Sobre Nós!</h2>
            <p>Descrição sobre o sistema</p>
            <p>Descrição sobre a universade e parceiros</p>
          </div>
        </div>
      </div>
      <hr>
      <footer class="text-center">
        <div class="container">
          <div class="row">
            <div class="col-xs-12">
              <p>Copyright © 2017. Todos os direitos reservados</p>
            </div>
          </div>
        </div>
      </footer>
      <!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
      <script src="js/jquery-1.11.3.min.js"></script> 
      <!-- Include all compiled plugins (below), or include individual files as needed --> 
      <script src="js/bootstrap.js"></script>
    </body>
    </html>
