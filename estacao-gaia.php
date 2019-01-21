<?php
// $nome = $_POST['nome'];
// // Inclui o arquivo class.phpmailer.php localizado na pasta phpmailer
// require_once("phpmailer/class.phpmailer.php");
// require("./PHPMailer/class.smtp.php");
// include_once("./PHPMailer/class.phpmailer.php");
// require ("./PHPMailer/PHPMailerAutoload.php");
// // Inicia a classe PHPMailer
// $mail = new PHPMailer();
// // Define os dados do servidor e tipo de conexão
// // =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
// $mail->IsSMTP(); // Define que a mensagem será SMTP
// $mail->Host = "smtp.gmail.com"; // Endereço do servidor SMTP
// $mail->SMTPAuth = true; // Usa autenticação SMTP? (opcional)
// $mail->Username = 'guilherme.medeirosds@gmail.com'; // Usuário do servidor SMTP
// $mail->Password = 'colocar senha'; // Senha do servidor SMTP
// // Define o remetente
// // =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
// $mail->From = "guilherme.medeirosds@gmail.com"; // Seu e-mail
// $mail->FromName = "Guilherme"; // Seu nome
// // Define os destinatário(s)
// // =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
// $mail->AddAddress('gui.medeirosds@gmail.com', 'Gui Medeiros');
// $mail->AddAddress('smtp.gmail.com');
// //$mail->AddCC('ciclano@site.net', 'Ciclano'); // Copia
// //$mail->AddBCC('fulano@dominio.com.br', 'Fulano da Silva'); // Cópia Oculta
// // Define os dados técnicos da Mensagem
// // =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
// $mail->IsHTML(true); // Define que o e-mail será enviado como HTML
// //$mail->CharSet = 'iso-8859-1'; // Charset da mensagem (opcional)
// // Define a mensagem (Texto e Assunto)
// // =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
// $mail->Subject  = "Mensagem Teste"; // Assunto da mensagem
// $mail->Body = "Este é o corpo da mensagem de teste, em <b>HTML</b>!  :)";
// $mail->AltBody = "Este é o corpo da mensagem de teste, em Texto Plano! \r\n :)";
// // Define os anexos (opcional)
// // =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
// //$mail->AddAttachment("c:/temp/documento.pdf", "novo_nome.pdf");  // Insere um anexo
// // Envia o e-mail
// $enviado = $mail->Send();
// // Limpa os destinatários e os anexos
// $mail->ClearAllRecipients();
// $mail->ClearAttachments();
// // Exibe uma mensagem de resultado
// if ($enviado) {
//   echo "E-mail enviado com sucesso!";
// } else {
//   echo "Não foi possível enviar o e-mail.";
//   echo "<b>Informações do erro:</b> " . $mail->ErrorInfo;
// }
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <!-- Optional theme -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/style.css">

  <style>

    header{
      background: #000;
      position: fixed;
      width: 100%;
      z-index: 999;
      height: 100px;
    }

    #navbar ul{
      margin-top: 21px;
    }
    #navbar ul li a:hover{
      background-color: black;
      color: #bdc43b;
      border-bottom: 2px solid #bdc43b;
      /*text-decoration: underline;*/
    }

    header a{
        color: #fff;
    }

    .navbar-header{
      height: 100px;
      padding-top: 12px;
    }
    .slider{
      min-height: 500px;
      width: 100%;
      background-image: url("imagens/slider.jpg");
      background-size: cover;
    }
    .item-content{
      background: yellow;
      border-left: 9px solid #fff;
      padding: 0;
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
    .item.bg-primavera{
      background-image: url('imagens/img-primavera.png');
      min-height: 300px;
      background-size: cover;
    }
    .item.bg-verao{
      background-image: url('imagens/img-verao.png');
      min-height: 300px;
      background-size: cover;
    }
    .item.bg-outono{
      background-image: url('imagens/img-outono.png');
      min-height: 300px;
      background-size: cover;
    }
    .item.bg-inverno{
      background-image: url('imagens/img-inverno.png');
      min-height: 300px;
      background-size: cover;
    }
    h3:before{
      content: '';
      width: 30px;
      height: 30px;
      background-image: url('https://danielstein.com.br/wp-content/uploads/2018/01/aspas-cima-icon-1.png');
      background-size: 100%;
      background-repeat: no-repeat;
      backorund-position: center;
      display: inline-block;
    }
    h3:after{
      content: '';
      width: 30px;
      height: 30px;
      background-image: url('https://danielstein.com.br/wp-content/uploads/2018/01/aspas-cima-icon-1.png');
      background-size: 100%;
      background-repeat: no-repeat;
      backorund-position: center;
      display: inline-block;
    }
    .item-depoimento {
      border: 1px solid #bdc43b;
      padding-top: 25px;
      margin-right: 20px;
      border-radius: 10px;
      height: 250px;
    }
    .item-depoimento p:before{
      content: '';
      width: 30px;
      height: 30px;
      background-image: url('imagens/aspas2.png');
      /*background-size: 100%;*/
      background-repeat: no-repeat;
      backorund-position: center;
      display: inline-block;
    }
    .item-depoimento p{
      text-align: center;
    }

    .item-depoimento p:after{
      content: '';
      width: 30px;
      height: 30px;
      background-image: url('imagens/aspas1.png');
      /*background-size: 100%;*/
      background-repeat: no-repeat;
      backorund-position: center;
      display: inline-block;
    }

    .fistcont {
      padding: 0;
      background-color: #bdc43b;
      margin-top: -106px;
    }

    .fistcont p {
      line-height: 1.5;
      padding-top: 20px;
    }
    ul li a {
      list-style: none;
      color: #bdc43b;
    }
    .bg-espaco{
      width: 100%;
      height: 50px;
      /*background-image: url("imagens/barra-espaco.png");*/
      padding: 0;
      margin-bottom: 17px;
      color:#bdc43b;
    }
    .bg-espaco h4{
      padding-top: 19px;
    }
    .espaco{
      background-image: url("imagens/espabg.jpg");
      width: 100%;

    }

    .espacodivi{
      background-color: #000000d4;
      /*color: #cdd2be;*/
      margin-right: 10px;
      padding: 0 0 50 0;
      height: 300px;
    }
    .textoest{
      font-size: 12px;
    }

    .txtesp{
      color: white;
    }

    h4 {
      margin: 0;
    }

    .tituloarea{
      height: 70px;
      background-color: #bdc43b;
      margin-bottom: 40px;
      color: white;
    }

    .img-icon {
      width: 50px;
      margin-top: 30px;
    }

    .img-apresenta{
      width: 150px;
      margin: 10px 0 0 64px;
      position: absolute;
    }

    @font-face {
      font-family: 'DINPro-Light';
      font-style: normal;
      font-weight: normal;
      src: url('fontes/DINPro-Light_13935.woff');
    }
    .areas{
      position: relative;
    }
    .areas *{
      z-index: 10;
    }
    .bg-section{
      position: absolute;
      top: 0;
      left: 0;
      z-index: 9;
      max-width: 100%;
      height: 601px;
    }
    .navbar-toggle .icon-bar {
        background-color: #c6c600;
    }
    .container-fluid>.navbar-collapse, 
    .container-fluid>.navbar-header, 
    .container>.navbar-collapse, 
    .container>.navbar-header{
      margin-top: 0;
      /*background-color: #030202d1;*/
    }

    .icons {
      width: 20px;
    }

    .a2margin {
      margin-left: 33px;
    }

    @media (max-width: 500px) {
        .a2margin {
          margin-left: 0;
        }
        .espacodivi{
          margin-bottom: 10px;
        }
      }

    @media (max-width: 1014px) {
        .bg_video {
          display: none;
        }

        .bg_video{
          min-height: 500px;
      width: 100%;
      background-image: url("imagens/slider.jpg");
      background-size: cover;
        }
      }

      .bg_video{
        /*position: relative; 
        right: 0; 
        bottom: 0;
        min-width: 100%; 
        min-height: 300px;*/
        width: 100%; 
        height: auto; 
        /*z-index: -1000;
        background-size: cover; */
}

  body {
    padding: 0;
  }

  .zoom {
  overflow: hidden;
}

.zoom img {
  max-width: 100%;
  -moz-transition: all 0.3s;
  -webkit-transition: all 0.3s;
  transition: all 1s;
}

.zoom:hover img {
  -moz-transform: scale(1.25);
  -webkit-transform: scale(1.25);
  transform: scale(1.25);
}

.text-item {
  position: absolute;
  left: 5%;
  right: 5%;
  bottom: 20px;
  z-index: 10;
  padding-top: 20px;
  padding-bottom: 20px;
  color: #ffffff;
  text-align: center;
  font-weight: 700;
  text-shadow: 0 1px 3px rgba(0,0,0,0.6);
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
              <a class="navbar-brand" href="#"><img src="imagens/logo.png" alt="" style="width:100px; margin-top:3px;"></a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav navbar-right">
                <li class="active"><a href="#">Home</a></li>
                <li><a href="espaco.php">Espaço</a></li>
                <li><a href="galeria.php">Galeria</a></li>
                <li><a href="como-chegar.php">Como chegar</a></li>
                <li><a href="contato.php">Contato</a></li>
                <li><a href="https://www.facebook.com/Esta%C3%A7%C3%A3o-Gaia-271768859666069/"><img src="imagens/facebook-letter-logo.svg" alt="" class="icons"></a></li>
                <li><a href="https://www.instagram.com/estacaogaia/"><img src="imagens/instagram-logo.svg" alt="" class="icons"></a></li>
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
<section class="" style="padding:0;">
  
  <div class="container-fluid" style="padding:0;">
  <h2></h2>  
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active .slider">
        <img src="imagens/slider.jpg" alt="Los Angeles" class="img-responsive" style="width:100%; height: 500px; ">
      </div>

      <div class="item .slider">
        <img src="imagens/slider8.jpg" alt="Chicago" class="img-responsive" style="width:100%; height: 500px;">
      </div>
    
      <div class="item .slider">
        <img src="imagens/slider7.jpg" alt="New york" class="img-responsive" style="width:100%; height: 500px;">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

<!--   <video autoplay repeat class="bg_video" height="500px">
    <source src="videos/bg.webm" type="video/webm">
    <source src="videos/bg.mp4" type="video/mp4">
  </video> -->
</section>
<section class="areas" style="padding:30px 0 60px 0;">
  <div class="container">
    <div class="col-sm-2 col-xs-12"></div>
    <div class="col-sm-3 col-xs-12 fistcont">
      <div class=" text-center mt-negative">
        <div style="background-color: black; width: 100%; height:76px;">
          <img src="imagens/logo-branca.png" alt="" class="img-responsive img-apresenta">
        </div>
        <p style="padding: 25px 30px 15px 30px; text-align: left;">Sofisticação, com um toque descontraído. Luxo com um quê de originalidade. 
          O chic e o rústico em plena harmonia, nem um espaço de 6000m² de área verde.
           Esse ambiente perfeito para o seu evento está só a 20 km de São Paulo 
           (na saída 26 – Embu das Artes - da rodovia Raposo Tavares) SP.</p>
      </div>
    </div>
    <!-- <div class="col-sm-3 col-xs-12">
      <div class="">
        <h2 style="margin:0;">News</h2> 
        <p>Estamos bem perto para você realizar aqui o seu casamento, aniversário ou bar-mitzva; seus eventos corporativos, workshops, seminários ou confraternizações.  De dia ou de noite, você escolhe. Entre e conheça o nosso espaço cheio de natureza e de naturalidade em todas as estações.</p>
      </div>
    </div> -->
    <div class="col-sm-5 col-xs-12" style="padding:0;">
      <div class=" text-center" >
       <div id="cont_0a06de9083469fde741ca4a234a9178c"><script type="text/javascript" async src="https://www.tempo.com/wid_loader/0a06de9083469fde741ca4a234a9178c"></script></div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-sm-2 col-xs-12"></div>
  <img src="imagens/bg.png" class="bg-section">
</section>

<section class="areas" style="background-color:#f5f5f5;  margin-top:; padding: 10px 0 45px;">
  <div class="container">

    <h2 align="center" style="">Nossos prêmios</h2>
      <div class="col-sm-2 col-xs-12"></div>

      
      <div class="col-sm-2 col-xs-12"></div>
      <div class="col-sm-6 col-xs-12 zoom">

          <img src="imagens/premios.png" class="img-responsive">

      </div>
      <div class="col-sm-2 col-xs-12"></div>
  </div>
        
</section>

<section class="areas espaco" style="padding:0 0 0 0; padding-bottom: 46px;">
  <div class="container-fluid tituloarea">
        <h2 align="center">Nosso espaço</h2>
  </div>

  <div class="container">
    <div class="row">
      

      <div class="col-sm-2 col-xs-12"></div>

      <div class="col-sm-2 col-xs-12 espacodivi text-center">
        <div class="bg-espaco">
          <h4>Salão principal</h4>
        </div>
        <div class="txtesp"> 
          <p>O amplo salão oferece todo espaço e conforto para eventos até 000 pessoas. Banda ou DJ, fica à sua escolha. Mas o encanto da paisagem e o ambiente chic e descontraído estão sempre lá. </p>
        </div>
      </div>

        <div class="col-sm-2 col-xs-12 espacodivi">
          <div class=" text-center">
            <div class="bg-espaco">
              <h4>Lago e seu deck</h4>
            </div>
            <div class="txtesp">
              <p>O lago é perfeito para momentos ao ar livre. O barulhinho da água, misturado ao som das árvores e dos pássaros cria a atmosfera ideal para quem curte natureza. O deck proporciona uma vista ainda mais bonita das nossas carpas.  </p>
            </div>
          </div>
        </div>
        <div class="col-sm-2 col-xs-12 espacodivi text-center">
        <div class="bg-espaco">
          <h4>Piscina</h4>
        </div> 
        <div class="txtesp">
          <p>A piscina é outro cenário de charme para eventos diurnos em meio à natureza. Você pode combinar com uma decoração sofisticada ou mais despojada. Tudo é possível para atender às suas expectativas. </p>
        </div>
      </div>
        <div class="col-sm-2 col-xs-12 espacodivi ">
          <div class=" text-center">
            <div class="bg-espaco">
              <h4>Gramado</h4>
            </div>
            <div class="txtesp">
               <p>O gramado proporciona um lindo ambiente para cerimônias e celebrações ao ar livre. E oferece a liberdade para você criar a decoração que preferir, em um cenário deslumbrante para o seu evento. </p>
          </div>
          </div>
        </div>
        <div class="col-sm-2 col-xs-12"></div>
        </div>
    </div>
</section>

<section class="area-2 a2margin" style="">
  <div class="container text-center">
    <div class="box-estacoes text-center">
      <div class="col-sm-2"></div>

      <div class="col-sm-2 item bg-primavera" style="background-image: url(imagens/img-primavera.png)"  type="button" class="btn  " data-toggle="modal" data-target="#myModal3">
            </div>
            <!-- Inicio modal -->
            <div class="modal fade" id="myModal3" role="dialog">
              <div class="modal-dialog">
          <!-- Modal content-->
                <img src="imagens/img-primavera.png" alt="" class="img-responsive" style="display: inline;">
              </div>
            </div>

      <!-- <div class="col-sm-2 item bg-primavera"></div> -->

      <div class="col-sm-2 item">
        <img src="imagens/icon-primavera.png" alt="" class="img-icon">
        <div>
          <h2>Primavera</h2> 
          <p class="textoest">Arranjos de flores devem adotar uma sensação natural solta, não estruturada, em tons sutis e neutros com delicada folhagem verde e prateada clara</p>
        </div>
      </div>

      <div class="col-sm-2 item bg-verao " style="background-image: url(imagens/img-verao.png)"  type="button" class="btn  " data-toggle="modal" data-target="#myModal4">
      </div>
      <div class="modal fade" id="myModal4" role="dialog">
              <div class="modal-dialog">
          <!-- Modal content-->
                <img src="imagens/img-verao.png" alt="" class="img-responsive" style="display: inline;">
              </div>
      </div>

      <div class="col-sm-2 item">
        <img src="imagens/icon-verao.png" alt="" class="img-icon">
        <div>
          <h2>Verão</h2> 
          <p class="textoest">As noivas também vão se apaixonar pelas dálias. Esta flor promete fazer sucesso nos arranjos por causa de sua grande variedade de cores e camadas intrincadas. </p>
        </div>
      </div>
      <div class="col-sm-2"></div>
    </div>
  </div>

  <div class="container text-center" style="margin-top:-6px;">
    <div class="box-estacoes text-center">
      <div class="col-sm-2"></div>
      <div class="col-sm-2 item">
        <img src="imagens/icon-outono.png" alt="" class="img-icon">
        <div>
          <h2>Outono</h2> 
          <p class="textoest">Ranunculus será a grande escolha para qualquer noiva que deseje uma flor romântica.</p>
        </div>
      </div>
      <div class="col-sm-2 item bg-outono" style="background-image: url(imagens/ranunculo.jpg)"  type="button" class="btn  " data-toggle="modal" data-target="#myModal5"> 
      </div>

      <div class="modal fade" id="myModal5" role="dialog">
              <div class="modal-dialog">
          <!-- Modal content-->
                <img src="imagens/ranunculo.jpg" alt="" class="img-responsive" style="display: inline;">
              </div>
            </div>

      <div class="col-sm-2 item">
        <img src="imagens/icon-inverno.png" alt="" class="img-icon">
        <div>
          <h2>Inverno</h2> 
          <p class="textoest">Caminhar até o altar levando nas mãos lindos e exuberantes buquês de flores brancas com folhagens é um luxo só! </p>
        </div>
      </div>
      <div class="col-sm-2 item bg-inverno" style="background-image: url(imagens/img-inverno.png)"  type="button" class="btn  " data-toggle="modal" data-target="#myModal6">
      </div>
      <div class="modal fade" id="myModal6" role="dialog">
              <div class="modal-dialog">
          <!-- Modal content-->
                <img src="imagens/img-inverno.png" alt="" class="img-responsive" style="display: inline;">
              </div>
            </div>
      <div class="col-sm-2"></div>
    </div>
  </div>
</section>

<section class="depoimentos" style="background-color: #f6f6f6; padding-top: 20px;">
  <div class="container">
    <div class="row">
    <h2 align="center" style="color: #bdc43b; margin-bottom: 30px;">~ Depoimentos ~</h2>
      <div class="col-sm-2 col-xs-12"></div>

      <div class="col-sm-4 col-xs-12 item-depoimento" style="background-color: white; margin-left: -9px;">
        <div class="">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam facilis doloremque eligendi quibusdam aut sit aperiam autem, nisi est suscipit, magnam minima fugiat ipsum quos. Eius nobis consequatur neque reprehenderit!</p>
        </div>
        <div class="text-center">
          <h6 style="padding-top:30px; color: #bdc43b;">CASAMENTO DE FULANO</h6>
        </div>
      </div>
        <div class="col-sm-4 col-xs-12 item-depoimento" style="background-color: white;">
          <div class=" text-center">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur cupiditate fuga iure totam repellendus quae eum incidunt amet reprehenderit! Rem, quia, eius? Ut quasi ea vitae in cum, qui impedit.</p>
          </div>
          <div class="text-center">
          <h6 style="padding-top:30px; color: #bdc43b;">CASAMENTO DE FULANO</h6>
        </div>
        </div>
        <div class="col-sm-2 col-xs-12"></div>
        </div>

    </div>
</section>

<section class="orcamento" style="padding-top: 19px;">
  <h2 align="center">Orçamento</h2>
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
</section>

  <script
    src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha256-3edrmyuQ0w65f8gfBsqowzjJe2iM6n0nKciPUp8y+7E="
    crossorigin="anonymous"></script>
  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>
