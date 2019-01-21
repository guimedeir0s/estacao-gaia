<!-- 
<?php
$headers = 'From: Titulo da aplicacao <hendy@digitalhouse.com>'."\r\n" .
        'Reply-To: hendy@digitalhouse.com '. "\r\n" .
        'X-Mailer: MyFunction/' . phpversion().
        'MIME-Version: 1.0' . "\n".
        'Content-type: text/html; charset=UTF-8' . "\r\n";

mail($email,$titulo,$HTML,$headers);
 ?>
<!DOCTYPE html> -->
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <!-- Optional theme -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <style>
      header{
      background: white;
      position: fixed;
      width: 100%;
      z-index: 999;
      height: 100px;
      border-bottom: solid 1px #bdc43b;
    }

    #navbar ul{
      margin-top: 21px;
    }
    header a{
        color: #fff;
    }
    ul li a {
      list-style: none;
      color: #bdc43b;
    }

    #navbar ul li a:hover{
      background-color: white;
      color: #bdc43b;
      border-bottom: 2px solid #bdc43b;
      /*text-decoration: underline;*/
    }
    /*header{
      background: #000;
      position: fixed;
      width: 100%;
      z-index: 999;
    }
    header a{
        color: #fff;
    }*/
    .slider{
      min-height: 500px;
      width: 100%;
      background: #ccc;
    }
    .item-content{
      background: yellow;
      border-left: 9px solid #fff;
    }
    .item-content.mt-negative{
      margin-top: -100px;
    }
    section{
      padding: 50px 0;
    }
    .area-2 .box-estacoes{
      margin: 0 auto;
      overflow: hidden;
      display: inline-block;
      /*background: #f2f2f2;*/
    }
    .item{
      min-height: 300px;
      background: #f2f2f2;
    }
    .item.bg{
      background-image: url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRvQ6tpFqUdONAY1BevZmmk6w5buJO_kan-yrny8DRd8S_WbQ2-');
      min-height: 300px;
      background-size: cover;
    }
    .item-depoimento {
      border: 1px solid black;
      margin-right: 20px;
      border-radius: 10px;
    }

    .contato button {
      border-radius: 20px;
      border: solid 1px #4f8ea2;
      color: white;
      background-color: #93c4d3;
      font-weight: bold;
      height: 35px;
    }
    h2{
      color: bdc43b;
    }

    .navbar-toggle .icon-bar {
        background-color: #c6c600;
    }

    .container-fluid>.navbar-collapse, 
    .container-fluid>.navbar-header, 
    .container>.navbar-collapse, 
    .container>.navbar-header{
      margin-top: 0;
      background-color: #ffffffd1;
    }

    

  </style>
</head>
<body>
  <header>
      <nav class="navbar">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="estacao-gaia.php"><img src="imagens/logo.png" alt=""></a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav navbar-right">
                <li class="active"><a href="estacao-gaia.php">Home</a></li>
                <li><a href="espaco.php">Espaço</a></li>
                <li><a href="galeria.php">Galeria</a></li>
                <li><a href="como-chegar.php">Como chegar</a></li>
                <li><a href="contato.php">Contato</a></li>
<!--                 <li><a href="#">iFA</a></li>
                <li><a href="#">iIS</a></li> -->
                <!-- <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li role="separator" class="divider"></li>
                    <li class="dropdown-header">Nav header</li>
                    <li><a href="#">Separated link</a></li>
                    <li><a href="#">One more separated link</a></li>
                  </ul>
                </li> -->
              </ul>
            </div><!--/.nav-collapse -->
          </div><!--/.container-fluid -->
        </nav>
  </header>
  <section class="contato">
    <div class="container-fluid text-center" style="margin-top:50px; background-color:#bdc43b; height:80px; background-image: url('imagens/barrabg.png');">
      <h2 style="color:white;">Contato</h2>
    </div>
  </section>

  <section class="orcamento" style="padding:0;">
  
  <div class="container">

          <form action="enviar-email.php" method="post" accept-charset="utf-8">
  
  <div class="container">
      <div class="col-sm-2 col-xs-12"></div>

      <div class="col-sm-2 col-xs-12">
        <div class="">
          <select name="tipo">
            <option value="volvo">Tipo de evento</option>
            <option value="Tipo1">Tipo1</option>
            <option value="Tipo2">Tipo2</option>
            <option value="Tipo3">Tipo3</option>
          </select>
        </div>
      </div>
      <div class="col-sm-8 col-xs-12"></div>
  </div>

    <div class="container">
      <div class="col-sm-2 col-xs-12"></div>

      <div class="col-sm-2 col-xs-12">
        <div class="">
          <input placeholder="  Nome*" name="nome">
        </div>
      </div>
      <div class="col-sm-2 col-xs-12">
        <div class="">
          <input placeholder="  sobrenome*" name="sobrenome">
        </div>
      </div>
      <div class="col-sm-4 col-xs-12">
        <div class="">
          <input placeholder="  E-Mail*" name="email">
        </div>
      </div>
      <div class="col-sm-2 col-xs-12"></div>
  </div>

    <div class="container">
      <div class="col-sm-2 col-xs-12"></div>

      <div class="col-sm-2 col-xs-12">
        <div class="">
          <input placeholder="  Telefone*" name="telefone">
        </div>
      </div>
      <div class="col-sm-2 col-xs-12">
        <div class="">
          <input placeholder="  Celular*" name="celular">
        </div>
      </div>
      <div class="col-sm-2 col-xs-12">
        <div class="">
          <input type="date" placeholder="  Data do evento*" name="data">
        </div>
      </div>
      <div class="col-sm-2 col-xs-12">
        <div class="">
          <input placeholder="  Nº de convidados" name="nconvidados">
        </div>
      </div>
      <div class="col-sm-2 col-xs-12"></div>
    </div>

    <div class="container">
        <div class="col-sm-2 col-xs-12"></div>

        <div class="col-sm-8 col-xs-12">
          <div class="">
            <textarea placeholder="  Nos conte como podemos ajudar" name="mensagem"></textarea>
          </div>
        </div>
        <div class="col-sm-2 col-xs-12"></div>

        
    </div>
    <div class="container">
        <div class="col-sm-4 col-xs-12"></div>

        <div class="col-sm-4 col-xs-12">
          <div class="">
            <input type="submit" class="text-center" style="width:300px; background-color:#bdc43b; color:white;" value="Enviar">
          </div>
        </div>
    <div class="col-sm-4 col-xs-12"></div>
    </form>
    </div>

  </section>





  <script
    src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha256-3edrmyuQ0w65f8gfBsqowzjJe2iM6n0nKciPUp8y+7E="
    crossorigin="anonymous"></script>
  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>
