<!DOCTYPE html>
<html lang="pt_br">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Nexus Feed</title>
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="shortcut icon" href="img/favicon.ico" />
</head>
<body>
  <nav class="navbar navbar-default navbar-inverse">
    <div class="container-fluid"> 
      <div class="navbar-header">
        <a href="http://localhost/Nexus/www/nexus/com/br/" title="Nexus"><img src="img/ico-nexus.png" alt="Nexus Logo" class="img-responsive"></a></div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <div class="container-fluid"> 

              <form class="navbar-form navbar-right" role="search">
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Buscar">
                </div>
                <button type="submit" class="btn btn-default">Enviar</button>
              </form>
              <ul class="nav navbar-nav navbar-right">
                <li> </li>
                <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">Usuário <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="#" >Interagir</a> </li>
                    <li><a href="#" onClick="window.open('profile.php','Histórico','resizable,height=260,width=370'); return false;">Perfil</a> </li>
                    <li><a href="#" onClick="window.open('config.php','Histórico','resizable,height=260,width=370'); return false;">Configurações</a> </li>
                    <li role="separator" class="divider"></li>
                    <li><a href="http://localhost/Nexus/www/nexus/com/br/">Sair</a> </li>
                  </ul>
                </li>
              </ul>
          </div>
        </div>
      </nav>

      <header>
        <div class="jumbotron">
          <div class="container">
            <div class="row">
              <div class="col-xs-12">
                <h1 class="text-center">Titulo - Usuário - Data/Hora</h1>
                <p class="text-center">Conteúdo de até 250 caracteres</p>
                <p>&nbsp;</p>
                <p class="text-center"><a class="btn btn-primary btn-lg" href="#" role="button" onClick="window.open('feed.php','Histórico','resizable,height=260,width=370'); return false;">Histórico</a> </p>
              </div>
            </div>
          </div>
        </div>
      </header>
      <section>
        <div class="container">
          <div class="row">
            <div class="col-lg-4 col-sm-12 text-center"><a href="https://www.pupilausjt.com/a-pupila" title="Pupila" target="blank"><img class="img-circle" alt="140x140" style="width: 140px; height: 140px;" src="img/pupila.png" data-holder-rendered="true">
              <p>A Agência Pupila é um laboratório experimental de criação publicitária, que atende clientes externos e internos. Seu foco é a execução de campanhas e ações comunicacionais. </p>
            </a>
          </div>
          <div class="col-lg-4 col-sm-12 text-center"><a href="https://www.facebook.com/RadioWebSaoJudas" title="Radio WEB" target="blank"><img class="img-circle" alt="140x140" style="width: 140px; height: 140px;" src="img/radioweb.png" data-holder-rendered="true">
            <p>Criada em 2008, a Radioweb São Judas é uma emissora virtual experimental. Tem uma programação que mescla programas ao vivo, rádio-revistas, reportagens, programação musical etc. </p>
          </a> 
        </div>
        <div class="col-lg-4 col-sm-12 text-center"><a href="https://www.youtube.com/user/tvSaoJudas" title="TV São Judas" target="blank"><img class="img-circle" alt="140x140" style="width: 140px; height: 140px;" src="img/tvsaojudas.png" data-holder-rendered="true">
          <p>Criada em 1997, é um canal de comunicação audiovisual e interação. O público alvo é formado por alunos e ex-alunos da São Judas, de todas as áreas de formação, pelas famílias e rede de relações desse universo. </p>
        </a>
      </div>
      <div class="col-lg-4 col-sm-12 text-center"><a href="http://conecta.usjt.br/" title="Conect@"><img class="img-circle" alt="140x140" style="width: 140px; height: 140px;" src="img/conecta.png" data-holder-rendered="true">
        <p>A Agência Conecta é uma agência de notíciasl que pretende integrar a comunidade ao redor da Universidade São Judas, por meio de notícias relevantes. Reunir histórias sobre alunos, professores, funcionários, visitantes, pessoas que se relacionam com faculdades, cursos de extensão e pós-graduação, iniciativas envolvendo outras instituições ou abertas à comunidade. </p>
      </a>
    </div>
    <div class="col-lg-4 col-sm-12 text-center"><a href="http://transmid.usjt.br/" title="Transmid"><img class="img-circle" alt="140x140" style="width: 140px; height: 140px;" src="img/transmid.png" data-holder-rendered="true">
      <p>Criado em 2016, este laboratório põe em prática a integração de diversas mídias na produção de conteúdo. Na prática, atua com gravação e edição de vídeos, fotos, conteúdo para redes sociais, blogs, releases, matérias, cobertura de eventos, entrevistas... identidade: coloquial, inquieta, criativa.</p>
    </a>
  </div>
  <div class="col-lg-4 col-sm-12 text-center"><a href="https://www.facebook.com/expressaoUSJT/" title="Jornal Expressão"><img class="img-circle" alt="140x140" style="width: 140px; height: 140px;" src="img/expressao.png" data-holder-rendered="true">
    <p>O jornal Expressão é um produto laboratorial dos alunos de jornalismo. Ele existe há 24 anos. Atualmente são publicadas 15 edições anuis. O acervo do jornal está no endereço do issuu, acima. </p>
  </a>
</div>
</div>
<div class="row"> </div>
</div>
</section>
<hr>
<footer class="text-center">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <p>Copyright © 2017. Todos os direitos reservados.</p>
      </div>
    </div>
  </div>
</footer>
<script src="js/jquery-1.11.3.min.js"></script> 
<script src="js/bootstrap.js"></script>
</body>
</html>
