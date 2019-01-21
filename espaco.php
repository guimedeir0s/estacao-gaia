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
      padding: 50px 0 0 0;
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

    .espacos h3 {
      color: #bdc43b;
    }
    .escolha{
      display: inline-block;
      text-align: center;
    }

    .escolha ul li a {
      padding: 5 10 5 10;
      color: #bdc43b;
      border: solid 1px #bdc43b;
      margin-right: 10px;
      border-radius: 50px;
    }

    .escolha ul li a:hover {
      padding: 5 10 5 10;
      color: white;
      border: solid 1px #bdc43b;
      margin-right: 10px;
      border-radius: 50px;
      background-color: #bdc43b;
    }

    .imagem {
      width: 180px;
      margin-top: 20px;
      height: 200px;
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

    .local {
      background-color: #f5f5f5;
      margin-right: 10px;
      height: 250px;
    }

    .local p {
      margin-bottom: 2px;
      font-size: 13px;
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
      <h2 style="color:white;">O espaço</h2>
    </div>
  </section>

  <section class="orcamento">
  
    <div class="container">

        <div class="col-sm-2 col-xs-12"></div>

        <div class="col-sm-8 col-xs-12">
          <h2 align="left" style="padding-bottom:10px; margin-top:0;">Nosso conceito</h2>
          <p>A Estação Gaia é a prova que, mesmo na metrópole mais urbana, é possível vivenciar um modo de vida alternativo, em que os veios da madeira substituem com igual elegância a modernidade dos móveis atuais e as texturas e tons terracota se abrem em um número sem fim de possibilidades. Com uma atuação notadamente marcante no cenário fashion, é na decoração de interiores em que todo o luxo e o glamour do estilo rústico pode ser percebido em sua totalidade. E o que mais caracteriza este estilo são as referências ao campo e à vida colonial, como a textura, as formas mais naturais e o acabamento mais delicado, com um toque de inacabado. A imaginação é o limite para quem pretende decorar ambientes de forma rústica. A cor branca e, até mesmo, a falta de cor ajuda a aumentar o clima desejado. Vigas aparentes, paredes e pinturas irregulares, dão um toque de luxo. Se o luxo é tudo aquilo que não se vê, estão nos pequenos detalhes os nossos grandes diferenciais.</p>
        </div>
    </div>
        
  </section class="espacos">

  <section class="espacos">
    <div class="container">
      <div class="row" style="margin-right: 10px;">
        <div class="col-sm-2"></div>
        <div class="col-sm-2 text-center local">
          <h3 style="margin-bottom: 30px;">Salão Principal</h3>
          <p>Metragem</p>
          <p>6,5 x 17 metros</p>
          <p>3 banheiros</p>
          <p>(masculino, feminino e cadeirante</p>
          <p>cozinha de apoio</p>
          <p>rampa para cadeirante</p>
        </div>
        <div class="col-sm-2 text-center local">
          <h3 style="margin-bottom: 30px;">Lago e seu deck</h3>
          <p> &nbsp</p>
          <p>Metragem</p>
          <p>9 x 5 metros</p>
          <p>(cobertura opcional)</p>
          <p> &nbsp</p>
          <p> &nbsp</p>
        </div>
        <div class="col-sm-2 text-center local">
          <h3 style="margin-bottom: 36px;">Pìscina</h3>
          <p> &nbsp</p>
          <p> &nbsp</p>
          <p>Metragem</p>
          <p>8,6 x 4,2 metros</p>
          <p>&nbsp</p>
          <p> &nbsp</p>
          <p> &nbsp</p>
        </div>
        <div class="col-sm-2 text-center local">
          <h3 style="margin-bottom: 30px;">Gramado 6000m²</h3>
          <p> &nbsp</p>
          <p>Metragem</p>
          <p>15 x 40 metros</p>
          <p>&nbsp</p>
          <p> &nbsp</p>
          <p> &nbsp</p>
        </div>
        <div class="col-sm-2"></div>
      </div>
    </div> 
  </section>

  <section>
    <div class="container" style="text-align:center;">
      <div class="escolha">
        <ul class="nav navbar-nav navbar-center">
          <li class="active"><a data-toggle="tab" href="#home">Espaço</a></li>
          <li><a data-toggle="tab" href="#menu1">Planta baixa</a></li>
          <li><a data-toggle="tab" href="#menu2">Dowload da planta</a></li>
        </ul>
      </div>
    </div>
  </section>
<!-- 
  <section >
    <div class="container">
      <div class="tab-content">

        <div id="home" class="tab-pane fade in active">
          <div class="container">
            <div class="row">
              <div class="col-sm-3 col-xs-12"></div>
              <div class="col-sm-2 col-xs-12"><img src="imagens/galeria1.png" class="imagem" alt=""></div>
              <div class="col-sm-2 col-xs-12"><img src="imagens/galeria2.png" class="imagem" alt=""></div>
              <div class="col-sm-2 col-xs-12"><img src="imagens/galeria3.png" class="imagem" alt=""></div>
              <div class="col-sm-3 col-xs-12"></div>
            </div>
            <div class="row">
              <div class="col-sm-3 col-xs-12"></div>
              <div class="col-sm-2 col-xs-12"><img src="imagens/galeria2.png" class="imagem" alt=""></div>
              <div class="col-sm-2 col-xs-12"><img src="imagens/galeria1.png" class="imagem" alt=""></div>
              <div class="col-sm-2 col-xs-12"><img src="imagens/galeria3.png" class="imagem" alt=""></div>
              <div class="col-sm-3 col-xs-12"></div>
            </div>
            <div class="row">
              <div class="col-sm-3 col-xs-12"></div>
              <div class="col-sm-2 col-xs-12"><img src="imagens/galeria3.png" class="imagem" alt=""></div>
              <div class="col-sm-2 col-xs-12"><img src="imagens/galeria2.png" class="imagem" alt=""></div>
              <div class="col-sm-2 col-xs-12"><img src="imagens/galeria1.png" class="imagem" alt=""></div>
              <div class="col-sm-3 col-xs-12"></div>
            </div>
          </div>
        </div>


        <div id="menu1" class="tab-pane fade">
          <div class="container">
            <div class="row">
              <div class="col-sm-3 col-xs-12"></div>
              <div class="col-sm-2 col-xs-12"><img src="imagens/galeria1.png" class="imagem" alt=""></div>
              <div class="col-sm-2 col-xs-12"><img src="imagens/galeria2.png" class="imagem" alt=""></div>
              <div class="col-sm-2 col-xs-12"><img src="imagens/galeria3.png" class="imagem" alt=""></div>
              <div class="col-sm-3 col-xs-12"></div>
            </div>
            <div class="row">
              <div class="col-sm-3 col-xs-12"></div>
              <div class="col-sm-2 col-xs-12"><img src="imagens/galeria2.png" class="imagem" alt=""></div>
              <div class="col-sm-2 col-xs-12"><img src="imagens/galeria1.png" class="imagem" alt=""></div>
              <div class="col-sm-2 col-xs-12"><img src="imagens/galeria3.png" class="imagem" alt=""></div>
              <div class="col-sm-3 col-xs-12"></div>
            </div>
            <div class="row">
              <div class="col-sm-3 col-xs-12"></div>
              <div class="col-sm-2 col-xs-12"><img src="imagens/galeria3.png" class="imagem" alt=""></div>
              <div class="col-sm-2 col-xs-12"><img src="imagens/galeria2.png" class="imagem" alt=""></div>
              <div class="col-sm-2 col-xs-12"><img src="imagens/galeria1.png" class="imagem" alt=""></div>
              <div class="col-sm-3 col-xs-12"></div>
            </div>
          </div>
        </div>
        <div id="menu2" class="tab-pane fade">
          <div class="container">
            <div class="row">
              <div class="col-sm-3 col-xs-12"></div>
              <div class="col-sm-2 col-xs-12"><img src="imagens/galeria1.png" class="imagem" alt=""></div>
              <div class="col-sm-2 col-xs-12"><img src="imagens/galeria2.png" class="imagem" alt=""></div>
              <div class="col-sm-2 col-xs-12"><img src="imagens/galeria3.png" class="imagem" alt=""></div>
              <div class="col-sm-3 col-xs-12"></div>
            </div>
            <div class="row">
              <div class="col-sm-3 col-xs-12"></div>
              <div class="col-sm-2 col-xs-12"><img src="imagens/galeria2.png" class="imagem" alt=""></div>
              <div class="col-sm-2 col-xs-12"><img src="imagens/galeria1.png" class="imagem" alt=""></div>
              <div class="col-sm-2 col-xs-12"><img src="imagens/galeria3.png" class="imagem" alt=""></div>
              <div class="col-sm-3 col-xs-12"></div>
            </div>
            <div class="row">
              <div class="col-sm-3 col-xs-12"></div>
              <div class="col-sm-2 col-xs-12"><img src="imagens/galeria3.png" class="imagem" alt=""></div>
              <div class="col-sm-2 col-xs-12"><img src="imagens/galeria2.png" class="imagem" alt=""></div>
              <div class="col-sm-2 col-xs-12"><img src="imagens/galeria1.png" class="imagem" alt=""></div>
              <div class="col-sm-3 col-xs-12"></div>
            </div>
          </div>
        </div>
        <div id="menu3" class="tab-pane fade">
          <div class="container">
            <div class="row">
              <div class="col-sm-3 col-xs-12"></div>
              <div class="col-sm-2 col-xs-12"><img src="imagens/galeria1.png" class="imagem" alt=""></div>
              <div class="col-sm-2 col-xs-12"><img src="imagens/galeria2.png" class="imagem" alt=""></div>
              <div class="col-sm-2 col-xs-12"><img src="imagens/galeria3.png" class="imagem" alt=""></div>
              <div class="col-sm-3 col-xs-12"></div>
            </div>
            <div class="row">
              <div class="col-sm-3 col-xs-12"></div>
              <div class="col-sm-2 col-xs-12"><img src="imagens/galeria2.png" class="imagem" alt=""></div>
              <div class="col-sm-2 col-xs-12"><img src="imagens/galeria1.png" class="imagem" alt=""></div>
              <div class="col-sm-2 col-xs-12"><img src="imagens/galeria3.png" class="imagem" alt=""></div>
              <div class="col-sm-3 col-xs-12"></div>
            </div>
            <div class="row">
              <div class="col-sm-3 col-xs-12"></div>
              <div class="col-sm-2 col-xs-12"><img src="imagens/galeria3.png" class="imagem" alt=""></div>
              <div class="col-sm-2 col-xs-12"><img src="imagens/galeria2.png" class="imagem" alt=""></div>
              <div class="col-sm-2 col-xs-12"><img src="imagens/galeria1.png" class="imagem" alt=""></div>
              <div class="col-sm-3 col-xs-12"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section> -->

  <style type="text/css" media="screen">

    #container {
    width: 760px;
    max-width: 100%;
    margin: 1% auto;
    height: 782px;
}
.cols {
    -moz-column-count:3;
    -moz-column-gap: 3%;
    -moz-column-width: 30%;
    -webkit-column-count:3;
    -webkit-column-gap: 3%;
    -webkit-column-width: 30%;
    column-count: 3;
    column-gap: 3%;
    column-width: 30%;
}
.box {
    margin-bottom: 20px;
    background-size: cover;
}
.box.one {
    height: 324px;
    background-color: #d77575;
}
.box.two {
    height: 273px;
    background-color: #dcbc4c;
}
.box.twosegundo {
    height: 273px;
    background-color: #dcbc4c;
}
.box.ajuste {
    height: 288px;
    background-color: #d77575;
}

.box.three {
    background-color: #a3ca3b;
    height: 324px;
}
.box.other {
    height: 145px;
    background-color: #d77575;
}
.box.four {
    background-color: #3daee3;
    height: 500px;
}
.box.five {
    background-color: #bb8ed8;
    height: 180px;
}

.box.six {
    background-color: #baafb1;
    height: 238px;
}

.box.twolast {
    background-color: #baafb1;
    height: 180px;
}
    
  </style>
<section >
    <div class="container">
      <div class="tab-content">
        <div id="home" class="tab-pane fade in active">
          <div class="container">

            <div id="container" class="cols">
              <div class="box one" style="background-image: url(imagens/espaco/1-um.png)"></div>
              <div class="box two" style="background-image: url(imagens/espaco/2-dois.png)"></div>
              <div class="box other" style="background-image: url(imagens/espaco/3-tres.png)"></div>
          <!--     <div class="box three" style="background-image: url(imagens/galeria2.png)"></div>
              <div class="box two" style="background-image: url(imagens/galeria1.png)"></div> -->
              <div class="box five" style="background-image: url(imagens/espaco/4-quatro.png)"></div>
              <div class="box ajuste" style="background-image: url(imagens/espaco/5-cinco.png)"></div>
              <div class="box twosegundo" style="background-image: url(imagens/espaco/6-seis.png)"></div>

              <div class="box six" style="background-image: url(imagens/espaco/7-sete.png)"></div>
              <div class="box three" style="background-image: url(imagens/espaco/8-oito.png)"></div>
              <div class="box twolast" style="background-image: url(imagens/espaco/9-nove.png)"></div>
            </div>
          </div>
        </div>

        <div id="menu1" class="tab-pane fade">
          <div class="container">
            <div class="row">
              <div class="col-sm-3 col-xs-12"></div>
              <div class="col-sm-2 col-xs-12"><img src="imagens/galeria1.png" class="imagem" alt=""></div>
              <div class="col-sm-2 col-xs-12"><img src="imagens/galeria2.png" class="imagem" alt=""></div>
              <div class="col-sm-2 col-xs-12"><img src="imagens/galeria3.png" class="imagem" alt=""></div>
              <div class="col-sm-3 col-xs-12"></div>
            </div>
            <div class="row">
              <div class="col-sm-3 col-xs-12"></div>
              <div class="col-sm-2 col-xs-12"><img src="imagens/galeria2.png" class="imagem" alt=""></div>
              <div class="col-sm-2 col-xs-12"><img src="imagens/galeria1.png" class="imagem" alt=""></div>
              <div class="col-sm-2 col-xs-12"><img src="imagens/galeria3.png" class="imagem" alt=""></div>
              <div class="col-sm-3 col-xs-12"></div>
            </div>
            <div class="row">
              <div class="col-sm-3 col-xs-12"></div>
              <div class="col-sm-2 col-xs-12"><img src="imagens/galeria3.png" class="imagem" alt=""></div>
              <div class="col-sm-2 col-xs-12"><img src="imagens/galeria2.png" class="imagem" alt=""></div>
              <div class="col-sm-2 col-xs-12"><img src="imagens/galeria1.png" class="imagem" alt=""></div>
              <div class="col-sm-3 col-xs-12"></div>
            </div>
          </div>
        </div>

        <div id="menu2" class="tab-pane fade">
          <div class="container">
            <div class="row">
              <div class="col-sm-3 col-xs-12"></div>
              <div class="col-sm-2 col-xs-12"><img src="imagens/galeria1.png" class="imagem" alt=""></div>
              <div class="col-sm-2 col-xs-12"><img src="imagens/galeria2.png" class="imagem" alt=""></div>
              <div class="col-sm-2 col-xs-12"><img src="imagens/galeria3.png" class="imagem" alt=""></div>
              <div class="col-sm-3 col-xs-12"></div>
            </div>
            <div class="row">
              <div class="col-sm-3 col-xs-12"></div>
              <div class="col-sm-2 col-xs-12"><img src="imagens/galeria2.png" class="imagem" alt=""></div>
              <div class="col-sm-2 col-xs-12"><img src="imagens/galeria1.png" class="imagem" alt=""></div>
              <div class="col-sm-2 col-xs-12"><img src="imagens/galeria3.png" class="imagem" alt=""></div>
              <div class="col-sm-3 col-xs-12"></div>
            </div>
            <div class="row">
              <div class="col-sm-3 col-xs-12"></div>
              <div class="col-sm-2 col-xs-12"><img src="imagens/galeria3.png" class="imagem" alt=""></div>
              <div class="col-sm-2 col-xs-12"><img src="imagens/galeria2.png" class="imagem" alt=""></div>
              <div class="col-sm-2 col-xs-12"><img src="imagens/galeria1.png" class="imagem" alt=""></div>
              <div class="col-sm-3 col-xs-12"></div>
            </div>
          </div>
        </div>
    </div>
</section >


  <script
    src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha256-3edrmyuQ0w65f8gfBsqowzjJe2iM6n0nKciPUp8y+7E="
    crossorigin="anonymous"></script>
  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>
