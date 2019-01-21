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
  <link rel="stylesheet" href="css/lightbox.css" type="text/css" media="screen" />
  <script type="text/javascript" src="js/prototype.js"></script>
  <script type="text/javascript" src="js/scriptaculous.js?load=effects"></script>
  <script type="text/javascript" src="js/lightbox.js"></script>
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
    section.galeria{
      padding: 80px 0 0 0;
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

    .contato {

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
      width: 100%;
      margin-top: 20px;
      height: 200px;
    }

    .modalcorpo {
      display: flex;
      justify-content: center;
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
  <div style="clear:both;"></div>
  <section class="Galeria" style="margin-bottom:30px;">
    <div class="container-fluid text-center" style="background-color:#bdc43b; height:100px; background-image: url('imagens/barrabg.png');">
      <h2 style="margin:40 0 0 0; color:white;">Galeria de fotos</h2>
    </div>
  </section>

<section>
  <div class="iframely-embed"><div class="iframely-responsive" style="height: 168px; padding-bottom: 0;"><a href="https://www.instagram.com/estacaogaia/" data-iframely-url="//cdn.iframe.ly/aiLK7eV"></a></div></div><script async src="//cdn.iframe.ly/embed.js" charset="utf-8"></script>
</section>

  <section>
    <div class="container" style="text-align:center;">
      <div class="escolha">
        <ul class="nav navbar-nav navbar-center">
          <li class="active"><a data-toggle="tab" href="#home">Casamento</a></li>
          <li><a data-toggle="tab" href="#menu1">Aniversário</a></li>
          <li><a data-toggle="tab" href="#menu2">Corporativo</a></li>
          <li><a data-toggle="tab" href="#menu3">Social</a></li>
        </ul>
      </div>
    </div>
  </section>
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
    height: 239px;
    background-color: #d77575;
}

@media (max-width: 500px) {

.box {
  margin-bottom: 5px;
}

.box.one{
  height: 127px;
  margin-right: -8px;
 }
}

.modal-header h2 {
  display: inline;
}

.modal-header p {
  display: inline;
  padding-right: 50px;
  float: right;
  color: gray;
}
    
  </style>

    <div class="container">
      <div class="tab-content">

        <div id="home" class="tab-pane fade in active">
          <div id="container" class="cols">
            <!-- Modal -->
          <div class="box one img-fluid" style="background-image: url(imagens/galeria1.png)" type="button" class="btn  " data-toggle="modal" data-target="#myModal">
          </div>
          <!-- Inicio modal -->
            <div class="modal fade" id="myModal" role="dialog">
              <div class="modal-dialog">
          <!-- Modal content-->
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h2 class="modal-title">Fotos</h2>
                    <p>créditos:</p>
                  </div>
                  <div class="modal-body modalcorpo">
                    <p><img src="imagens/galeria1.png" alt="" class="img-responsive"></p>
                  </div>
                </div>
              </div>
            </div>
            <!-- Fim modal -->

            <div class="box one img-fluid" style="background-image: url(imagens/galeria2.png)" type="button" class="btn  " data-toggle="modal" data-target="#myModal2">
            </div>
            <!-- Inicio modal -->
            <div class="modal fade" id="myModal2" role="dialog">
              <div class="modal-dialog">
          <!-- Modal content-->
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h2 class="modal-title">Fotos</h2>
                    <p>créditos:</p>
                  </div>
                  <div class="modal-body modalcorpo">
                    <p><img src="imagens/galeria2.png" alt="" class="img-responsive"></p>
                  </div>
                </div>
              </div>
            </div>
            <!-- Fim modal -->

            <div class="box one img-fluid" style="background-image: url(imagens/galeria3.png)"  type="button" class="btn  " data-toggle="modal" data-target="#myModal3">
            </div>
            <!-- Inicio modal -->
            <div class="modal fade" id="myModal3" role="dialog">
              <div class="modal-dialog">
          <!-- Modal content-->
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h2 class="modal-title">Fotos</h2>
                    <p>créditos:</p>
                  </div>
                  <div class="modal-body modalcorpo">
                    <p><img src="imagens/galeria3.png" alt="" class="img-responsive"></p>
                  </div>
                </div>
              </div>
            </div>
            <!-- Fim modal -->


<!--     <div class="box three" style="background-image: url(imagens/galeria2.png)"></div>
    <div class="box two" style="background-image: url(imagens/galeria1.png)"></div> -->

    <!-- SEGUNDA FILEIRA DE FOTOS -->
    <div class="box one img-fluid" style="background-image: url(imagens/galeria/galeria4.jpg)"  type="button" class="btn  " data-toggle="modal" data-target="#myModal4">
            </div>
            <!-- Inicio modal -->
            <div class="modal fade" id="myModal4" role="dialog">
              <div class="modal-dialog">
          <!-- Modal content-->
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h2 class="modal-title">Fotos</h2>
                    <p>créditos:</p>
                  </div>
                  <div class="modal-body modalcorpo">
                    <p><img src="imagens/galeria/galeria4.jpg" alt="" class="img-responsive"></p>
                  </div>
                </div>
              </div>
            </div>
            <!-- Fim modal -->
    <div class="box one img-fluid" style="background-image: url(imagens/galeria/galeria5.jpg)" type="button" class="btn  " data-toggle="modal" data-target="#myModal5">
          </div>
          <!-- Inicio modal -->
            <div class="modal fade" id="myModal5" role="dialog">
              <div class="modal-dialog">
          <!-- Modal content-->
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h2 class="modal-title">Fotos</h2>
                    <p>créditos:</p>
                  </div>
                  <div class="modal-body modalcorpo">
                    <p><img src="imagens/galeria/galeria5.jpg" alt="" class="img-responsive"></p>
                  </div>
                </div>
              </div>
            </div>
            <!-- Fim modal -->

    <div class="box one img-fluid" style="background-image: url(imagens/galeria/galeria6.jpg)" type="button" class="btn  " data-toggle="modal" data-target="#myModal6">
            </div>
            <!-- Inicio modal -->
            <div class="modal fade" id="myModal6" role="dialog">
              <div class="modal-dialog">
          <!-- Modal content-->
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h2 class="modal-title">Fotos</h2>
                    <p>créditos:</p>
                  </div>
                  <div class="modal-body modalcorpo">
                    <p><img src="imagens/galeria/galeria6.jpg" alt="" class="img-responsive"></p>
                  </div>
                </div>
              </div>
            </div>
            <!-- Fim modal -->


            <!-- TERCEIRA FILEIRA DE FOTOS -->

    <div class="box one img-fluid" style="background-image: url(imagens/galeria/galeria7.jpg)" type="button" class="btn  " data-toggle="modal" data-target="#myModal7">
            </div>
            <!-- Inicio modal -->
            <div class="modal fade" id="myModal7" role="dialog">
              <div class="modal-dialog">
          <!-- Modal content-->
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h2 class="modal-title">Fotos</h2>
                    <p>créditos:</p>
                  </div>
                  <div class="modal-body modalcorpo">
                    <p><img src="imagens/galeria/galeria7.jpg" alt="" class="img-responsive"></p>
                  </div>
                </div>
              </div>
            </div>
            <!-- Fim modal -->
    
    <div class="box one img-fluid" style="background-image: url(imagens/galeria/galeria8.jpg)"  type="button" class="btn  " data-toggle="modal" data-target="#myModal8">
            </div>
            <!-- Inicio modal -->
            <div class="modal fade" id="myModal8" role="dialog">
              <div class="modal-dialog">
          <!-- Modal content-->
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h2 class="modal-title">Fotos</h2>
                    <p>créditos:</p>
                  </div>
                  <div class="modal-body modalcorpo">
                    <p><img src="imagens/galeria/galeria8.jpg" alt="" class="img-responsive"></p>
                  </div>
                </div>
              </div>
            </div>
            <!-- Fim modal -->

    <div class="box one img-fluid" style="background-image: url(imagens/galeria/galeria9.jpg)" type="button" class="btn  " data-toggle="modal" data-target="#myModal9">
          </div>
          <!-- Inicio modal -->
            <div class="modal fade" id="myModal9" role="dialog">
              <div class="modal-dialog">
          <!-- Modal content-->
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h2 class="modal-title">Fotos</h2>
                    <p>créditos:</p>
                  </div>
                  <div class="modal-body modalcorpo">
                    <p><img src="imagens/galeria/galeria9.jpg" alt="" class="img-responsive"></p>
                  </div>
                </div>
              </div>
            </div>
            <!-- Fim modal -->
  </div>
  <section >
        </div>


        <div id="menu1" class="tab-pane fade">
          <div id="container" class="cols">
            <!-- Modal -->
          <div class="box one img-fluid" style="background-image: url(imagens/galeria1.png)" type="button" class="btn  " data-toggle="modal" data-target="#myModal10">
          </div>
          <!-- Inicio modal -->
            <div class="modal fade" id="myModal10" role="dialog">
              <div class="modal-dialog">
          <!-- Modal content-->
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h2 class="modal-title">Fotos</h2>
                    <p>créditos:</p>
                  </div>
                  <div class="modal-body modalcorpo">
                    <p><img src="imagens/galeria1.png" alt="" class="img-responsive"></p>
                  </div>
                </div>
              </div>
            </div>
            <!-- Fim modal -->

            <div class="box one img-fluid" style="background-image: url(imagens/galeria2.png)" type="button" class="btn  " data-toggle="modal" data-target="#myModal2">
            </div>
            <!-- Inicio modal -->
            <div class="modal fade" id="myModal2" role="dialog">
              <div class="modal-dialog">
          <!-- Modal content-->
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h2 class="modal-title">Fotos</h2>
                    <p>créditos:</p>
                  </div>
                  <div class="modal-body modalcorpo">
                    <p><img src="imagens/galeria2.png" alt="" class="img-responsive"></p>
                  </div>
                </div>
              </div>
            </div>
            <!-- Fim modal -->

            <div class="box one img-fluid" style="background-image: url(imagens/galeria3.png)"  type="button" class="btn  " data-toggle="modal" data-target="#myModal3">
            </div>
            <!-- Inicio modal -->
            <div class="modal fade" id="myModal3" role="dialog">
              <div class="modal-dialog">
          <!-- Modal content-->
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h2 class="modal-title">Fotos</h2>
                    <p>créditos:</p>
                  </div>
                  <div class="modal-body modalcorpo">
                    <p><img src="imagens/galeria3.png" alt="" class="img-responsive"></p>
                  </div>
                </div>
              </div>
            </div>
            <!-- Fim modal -->


<!--     <div class="box three" style="background-image: url(imagens/galeria2.png)"></div>
    <div class="box two" style="background-image: url(imagens/galeria1.png)"></div> -->

    <!-- SEGUNDA FILEIRA DE FOTOS -->
    <div class="box one img-fluid" style="background-image: url(imagens/galeria3.png)"  type="button" class="btn  " data-toggle="modal" data-target="#myModal3">
            </div>
            <!-- Inicio modal -->
            <div class="modal fade" id="myModal3" role="dialog">
              <div class="modal-dialog">
          <!-- Modal content-->
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h2 class="modal-title">Fotos</h2>
                    <p>créditos:</p>
                  </div>
                  <div class="modal-body modalcorpo">
                    <p><img src="imagens/galeria3.png" alt="" class="img-responsive"></p>
                  </div>
                </div>
              </div>
            </div>
            <!-- Fim modal -->
    <div class="box one img-fluid" style="background-image: url(imagens/galeria1.png)" type="button" class="btn  " data-toggle="modal" data-target="#myModal">
          </div>
          <!-- Inicio modal -->
            <div class="modal fade" id="myModal" role="dialog">
              <div class="modal-dialog">
          <!-- Modal content-->
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h2 class="modal-title">Fotos</h2>
                  </div>
                  <div class="modal-body modalcorpo">
                    <p><img src="imagens/galeria1.png" alt="" class="img-responsive"></p>
                  </div>
                </div>
              </div>
            </div>
            <!-- Fim modal -->

    <div class="box one img-fluid" style="background-image: url(imagens/galeria2.png)" type="button" class="btn  " data-toggle="modal" data-target="#myModal2">
            </div>
            <!-- Inicio modal -->
            <div class="modal fade" id="myModal2" role="dialog">
              <div class="modal-dialog">
          <!-- Modal content-->
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h2 class="modal-title">Fotos</h2>
                    <p>créditos:</p>
                  </div>
                  <div class="modal-body modalcorpo">
                    <p><img src="imagens/galeria2.png" alt="" class="img-responsive"></p>
                  </div>
                </div>
              </div>
            </div>
            <!-- Fim modal -->


            <!-- TERCEIRA FILEIRA DE FOTOS -->

    <div class="box one img-fluid" style="background-image: url(imagens/galeria2.png)" type="button" class="btn  " data-toggle="modal" data-target="#myModal2">
            </div>
            <!-- Inicio modal -->
            <div class="modal fade" id="myModal2" role="dialog">
              <div class="modal-dialog">
          <!-- Modal content-->
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h2 class="modal-title">Fotos</h2>
                  </div>
                  <div class="modal-body modalcorpo">
                    <p><img src="imagens/galeria2.png" alt="" class="img-responsive"></p>
                  </div>
                </div>
              </div>
            </div>
            <!-- Fim modal -->
    
    <div class="box one img-fluid" style="background-image: url(imagens/galeria3.png)"  type="button" class="btn  " data-toggle="modal" data-target="#myModal3">
            </div>
            <!-- Inicio modal -->
            <div class="modal fade" id="myModal3" role="dialog">
              <div class="modal-dialog">
          <!-- Modal content-->
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h2 class="modal-title">Fotos</h2>
                  </div>
                  <div class="modal-body modalcorpo">
                    <p><img src="imagens/galeria3.png" alt="" class="img-responsive"></p>
                  </div>
                </div>
              </div>
            </div>
            <!-- Fim modal -->
            
    <div class="box one img-fluid" style="background-image: url(imagens/galeria1.png)" type="button" class="btn  " data-toggle="modal" data-target="#myModal">
          </div>
          <!-- Inicio modal -->
            <div class="modal fade" id="myModal" role="dialog">
              <div class="modal-dialog">
          <!-- Modal content-->
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h2 class="modal-title">Fotos</h2>
                  </div>
                  <div class="modal-body modalcorpo">
                    <p><img src="imagens/galeria1.png" alt="" class="img-responsive"></p>
                  </div>
                </div>
              </div>
            </div>
            <!-- Fim modal -->
  </div>
        </div>
        <div id="menu2" class="tab-pane fade">
          <div id="container" class="cols">
            <!-- Modal -->
          <div class="box one img-fluid" style="background-image: url(imagens/galeria1.png)" type="button" class="btn  " data-toggle="modal" data-target="#myModal">
          </div>
          <!-- Inicio modal -->
            <div class="modal fade" id="myModal" role="dialog">
              <div class="modal-dialog">
          <!-- Modal content-->
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h2 class="modal-title">Fotos</h2>
                  </div>
                  <div class="modal-body modalcorpo">
                    <p><img src="imagens/galeria1.png" alt="" class="img-responsive"></p>
                  </div>
                </div>
              </div>
            </div>
            <!-- Fim modal -->

            <div class="box one img-fluid" style="background-image: url(imagens/galeria2.png)" type="button" class="btn  " data-toggle="modal" data-target="#myModal2">
            </div>
            <!-- Inicio modal -->
            <div class="modal fade" id="myModal2" role="dialog">
              <div class="modal-dialog">
          <!-- Modal content-->
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h2 class="modal-title">Fotos</h2>
                  </div>
                  <div class="modal-body modalcorpo">
                    <p><img src="imagens/galeria2.png" alt="" class="img-responsive"></p>
                  </div>
                </div>
              </div>
            </div>
            <!-- Fim modal -->

            <div class="box one img-fluid" style="background-image: url(imagens/galeria3.png)"  type="button" class="btn  " data-toggle="modal" data-target="#myModal3">
            </div>
            <!-- Inicio modal -->
            <div class="modal fade" id="myModal3" role="dialog">
              <div class="modal-dialog">
          <!-- Modal content-->
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h2 class="modal-title">Fotos</h2>
                  </div>
                  <div class="modal-body modalcorpo">
                    <p><img src="imagens/galeria3.png" alt="" class="img-responsive"></p>
                  </div>
                </div>
              </div>
            </div>
            <!-- Fim modal -->


<!--     <div class="box three" style="background-image: url(imagens/galeria2.png)"></div>
    <div class="box two" style="background-image: url(imagens/galeria1.png)"></div> -->

    <!-- SEGUNDA FILEIRA DE FOTOS -->
    <div class="box one img-fluid" style="background-image: url(imagens/galeria3.png)"  type="button" class="btn  " data-toggle="modal" data-target="#myModal3">
            </div>
            <!-- Inicio modal -->
            <div class="modal fade" id="myModal3" role="dialog">
              <div class="modal-dialog">
          <!-- Modal content-->
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h2 class="modal-title">Fotos</h2>
                  </div>
                  <div class="modal-body modalcorpo">
                    <p><img src="imagens/galeria3.png" alt="" class="img-responsive"></p>
                  </div>
                </div>
              </div>
            </div>
            <!-- Fim modal -->
    <div class="box one img-fluid" style="background-image: url(imagens/galeria1.png)" type="button" class="btn  " data-toggle="modal" data-target="#myModal">
          </div>
          <!-- Inicio modal -->
            <div class="modal fade" id="myModal" role="dialog">
              <div class="modal-dialog">
          <!-- Modal content-->
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h2 class="modal-title">Fotos</h2>
                  </div>
                  <div class="modal-body modalcorpo">
                    <p><img src="imagens/galeria1.png" alt="" class="img-responsive"></p>
                  </div>
                </div>
              </div>
            </div>
            <!-- Fim modal -->

    <div class="box one img-fluid" style="background-image: url(imagens/galeria2.png)" type="button" class="btn  " data-toggle="modal" data-target="#myModal2">
            </div>
            <!-- Inicio modal -->
            <div class="modal fade" id="myModal2" role="dialog">
              <div class="modal-dialog">
          <!-- Modal content-->
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h2 class="modal-title">Fotos</h2>
                  </div>
                  <div class="modal-body modalcorpo">
                    <p><img src="imagens/galeria2.png" alt="" class="img-responsive"></p>
                  </div>
                </div>
              </div>
            </div>
            <!-- Fim modal -->


            <!-- TERCEIRA FILEIRA DE FOTOS -->

    <div class="box one img-fluid" style="background-image: url(imagens/galeria2.png)" type="button" class="btn  " data-toggle="modal" data-target="#myModal2">
            </div>
            <!-- Inicio modal -->
            <div class="modal fade" id="myModal2" role="dialog">
              <div class="modal-dialog">
          <!-- Modal content-->
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h2 class="modal-title">Fotos</h2>
                  </div>
                  <div class="modal-body modalcorpo">
                    <p><img src="imagens/galeria2.png" alt="" class="img-responsive"></p>
                  </div>
                </div>
              </div>
            </div>
            <!-- Fim modal -->
    
    <div class="box one img-fluid" style="background-image: url(imagens/galeria3.png)"  type="button" class="btn  " data-toggle="modal" data-target="#myModal3">
            </div>
            <!-- Inicio modal -->
            <div class="modal fade" id="myModal3" role="dialog">
              <div class="modal-dialog">
          <!-- Modal content-->
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h2 class="modal-title">Fotos</h2>
                  </div>
                  <div class="modal-body modalcorpo">
                    <p><img src="imagens/galeria3.png" alt="" class="img-responsive"></p>
                  </div>
                </div>
              </div>
            </div>
            <!-- Fim modal -->
            
    <div class="box one img-fluid" style="background-image: url(imagens/galeria1.png)" type="button" class="btn  " data-toggle="modal" data-target="#myModal">
          </div>
          <!-- Inicio modal -->
            <div class="modal fade" id="myModal" role="dialog">
              <div class="modal-dialog">
          <!-- Modal content-->
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h2 class="modal-title">Fotos</h2>
                  </div>
                  <div class="modal-body modalcorpo">
                    <p><img src="imagens/galeria1.png" alt="" class="img-responsive"></p>
                  </div>
                </div>
              </div>
            </div>
            <!-- Fim modal -->
  </div>
        </div>
        <div id="menu3" class="tab-pane fade">
          <div id="container" class="cols">
            <!-- Modal -->
          <div class="box one img-fluid" style="background-image: url(imagens/galeria1.png)" type="button" class="btn  " data-toggle="modal" data-target="#myModal">
          </div>
          <!-- Inicio modal -->
            <div class="modal fade" id="myModal" role="dialog">
              <div class="modal-dialog">
          <!-- Modal content-->
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h2 class="modal-title">Fotos</h2>
                  </div>
                  <div class="modal-body modalcorpo">
                    <p><img src="imagens/galeria1.png" alt="" class="img-responsive"></p>
                  </div>
                </div>
              </div>
            </div>
            <!-- Fim modal -->

            <div class="box one img-fluid" style="background-image: url(imagens/galeria2.png)" type="button" class="btn  " data-toggle="modal" data-target="#myModal2">
            </div>
            <!-- Inicio modal -->
            <div class="modal fade" id="myModal2" role="dialog">
              <div class="modal-dialog">
          <!-- Modal content-->
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h2 class="modal-title">Fotos</h2>
                  </div>
                  <div class="modal-body modalcorpo">
                    <p><img src="imagens/galeria2.png" alt="" class="img-responsive"></p>
                  </div>
                </div>
              </div>
            </div>
            <!-- Fim modal -->

            <div class="box one img-fluid" style="background-image: url(imagens/galeria3.png)"  type="button" class="btn  " data-toggle="modal" data-target="#myModal3">
            </div>
            <!-- Inicio modal -->
            <div class="modal fade" id="myModal3" role="dialog">
              <div class="modal-dialog">
          <!-- Modal content-->
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h2 class="modal-title">Fotos</h2>
                  </div>
                  <div class="modal-body modalcorpo">
                    <p><img src="imagens/galeria3.png" alt="" class="img-responsive"></p>
                  </div>
                </div>
              </div>
            </div>
            <!-- Fim modal -->


<!--     <div class="box three" style="background-image: url(imagens/galeria2.png)"></div>
    <div class="box two" style="background-image: url(imagens/galeria1.png)"></div> -->

    <!-- SEGUNDA FILEIRA DE FOTOS -->
    <div class="box one img-fluid" style="background-image: url(imagens/galeria3.png)"  type="button" class="btn  " data-toggle="modal" data-target="#myModal3">
            </div>
            <!-- Inicio modal -->
            <div class="modal fade" id="myModal3" role="dialog">
              <div class="modal-dialog">
          <!-- Modal content-->
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h2 class="modal-title">Fotos</h2>
                  </div>
                  <div class="modal-body modalcorpo">
                    <p><img src="imagens/galeria3.png" alt="" class="img-responsive"></p>
                  </div>
                </div>
              </div>
            </div>
            <!-- Fim modal -->
    <div class="box one img-fluid" style="background-image: url(imagens/galeria1.png)" type="button" class="btn  " data-toggle="modal" data-target="#myModal">
          </div>
          <!-- Inicio modal -->
            <div class="modal fade" id="myModal" role="dialog">
              <div class="modal-dialog">
          <!-- Modal content-->
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h2 class="modal-title">Fotos</h2>
                  </div>
                  <div class="modal-body modalcorpo">
                    <p><img src="imagens/galeria1.png" alt="" class="img-responsive"></p>
                  </div>
                </div>
              </div>
            </div>
            <!-- Fim modal -->

    <div class="box one img-fluid" style="background-image: url(imagens/galeria2.png)" type="button" class="btn  " data-toggle="modal" data-target="#myModal2">
            </div>
            <!-- Inicio modal -->
            <div class="modal fade" id="myModal2" role="dialog">
              <div class="modal-dialog">
          <!-- Modal content-->
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h2 class="modal-title">Fotos</h2>
                  </div>
                  <div class="modal-body modalcorpo">
                    <p><img src="imagens/galeria2.png" alt="" class="img-responsive"></p>
                  </div>
                </div>
              </div>
            </div>
            <!-- Fim modal -->


            <!-- TERCEIRA FILEIRA DE FOTOS -->

    <div class="box one img-fluid" style="background-image: url(imagens/galeria2.png)" type="button" class="btn  " data-toggle="modal" data-target="#myModal2">
            </div>
            <!-- Inicio modal -->
            <div class="modal fade" id="myModal2" role="dialog">
              <div class="modal-dialog">
          <!-- Modal content-->
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h2 class="modal-title">Fotos</h2>
                  </div>
                  <div class="modal-body modalcorpo">
                    <p><img src="imagens/galeria2.png" alt="" class="img-responsive"></p>
                  </div>
                </div>
              </div>
            </div>
            <!-- Fim modal -->
    
    <div class="box one img-fluid" style="background-image: url(imagens/galeria3.png)"  type="button" class="btn  " data-toggle="modal" data-target="#myModal3">
            </div>
            <!-- Inicio modal -->
            <div class="modal fade" id="myModal3" role="dialog">
              <div class="modal-dialog">
          <!-- Modal content-->
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h2 class="modal-title">Fotos</h2>
                  </div>
                  <div class="modal-body modalcorpo">
                    <p><img src="imagens/galeria3.png" alt="" class="img-responsive"></p>
                  </div>
                </div>
              </div>
            </div>
            <!-- Fim modal -->
            
    <div class="box one img-fluid" style="background-image: url(imagens/galeria1.png)" type="button" class="btn  " data-toggle="modal" data-target="#myModal">
          </div>
          <!-- Inicio modal -->
            <div class="modal fade" id="myModal" role="dialog">
              <div class="modal-dialog">
          <!-- Modal content-->
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h2 class="modal-title">Fotos</h2>
                  </div>
                  <div class="modal-body modalcorpo">
                    <p><img src="imagens/galeria1.png" alt="" class="img-responsive"></p>
                  </div>
                </div>
              </div>
            </div>
            <!-- Fim modal -->
  </div>
        </div>
      </div>
    </div>
  </section>



    <script
    src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha256-3edrmyuQ0w65f8gfBsqowzjJe2iM6n0nKciPUp8y+7E="
    crossorigin="anonymous"></script>
  <!-- Latest compiled and minified JavaScript -->

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
   integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
    crossorigin="anonymous"></script>
</body>
</html>
