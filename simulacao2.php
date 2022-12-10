<?php
session_start();
include_once 'conexao.php';
//$sql = mysqli_query($conn, "SELECT * FROM usuarios order by id desc limit 1");
//@$email =$_SESSION['email'];

//$sql =mysqli_query($conn, "SELECT * FROM usuarios WHERE email = '$email'");
//while($line = mysqli_fetch_array($sql)){
 // $fotoperf = $line['foto'];
 // $idusuario = $line['id'];
 // $idpaginicial = $line['id'];
 // $pasta ="user".$idusuario;//user4
//  $fotoperf2 = "user/".$pasta."/".$foto;
//$idusuario = $idusuario+1;
 // }

?>





<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>AUTOMATOS - Simulação</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
  
	

<!-- Compiled and minified CSS -->

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" type="text/css" href="estilo.css" />
  
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
 <!--  body {
background-image: url(img/Cover.jpg); 
   background-repeat: no-repeat;
    background-size: cover;
    background-position: center center;
 
    
} 
-->
<!-- Font Awesome -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
  rel="stylesheet"
/>
<!-- Google Fonts -->
<link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
  rel="stylesheet"
/>


<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<!-- Bootstrap scripts 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
-->
















  

<link rel="stylesheet" type="text/css" href="estilo.css" />
  



<!--
background-image: url(img/Cover.jpg); 

a:hover
 -->

<style>

.button {
  background-color: #40c7c9;
  border: none;
  color: white;
  padding: 6px 12px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}

#button {
  background-color: #40c7c9;
  border: none;
  color: white;
  padding: 6px 12px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}


body {
background-color: #161a64
  
    background-size: cover;
    background-position: center center;



} 



body {
    display: flex;
    min-height: 100vh;
    flex-direction: column;
  }

  main {
    flex: 1 0 auto;
  }
      







.nav-extended{

background-color: #161a64;

opacity: 100%;

}

.page-footer{
  background-color:  #161a64;

}

.carousel{
  display:block;width:100%;height:auto;
overflow: hidden;
position: relative center;



}




 








@import url('https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&display=swap');

html, body { font-family: 'Roboto Condensed', sans-serif; font-size: 100%; }











div.w3-content.w3-section{
  
  width: 100%;
  max-height: 350px;

  object-fit: cover;
  object-position: bottom ;

  
}




body {
    display: flex;
    min-height: 100vh;
    flex-direction: column;
  }

  main {
    flex: 1 0 auto;
  }

  hr {width: 100%;height: 8px;margin-left: auto;margin-right: auto;background-color:black;border: 0 none;margin-top: 10px;margin-bottom:10px;}


.hr2{width: 100%;height: 8px;margin-left: auto;margin-right: auto;background-color:blanchedalmond;border: 0 none;margin-top: 0px;margin-bottom:0px;}


.nav-content{

font-family: 'Roboto Condensed', sans-serif; font-size: 100% ;

}









/*

background-color: #480001;
FOTO DO USUARIO


*/





.personal-image {
  text-align: center;
 
}
.personal-image input[type="file"] {
  display: none;
}





.personal-avatar {
  cursor: pointer;
  width: 40px;
  height: 40px;
  box-sizing: border-box;
  border-radius: 100%;
  border: 2px solid transparent;
  box-shadow: 0px 2px 4px 0px rgba(0, 0, 0, 0.2);
  transition: all ease-in-out .3s;
}
.personal-avatar:hover {
  box-shadow: 0px 2px 4px 0px rgba(0, 0, 0, 0.5);
}


.personal-figure {
  position: relative;
  width: 40px;
  height: 40px;

}

.personal-figcaption {
  cursor: pointer;
  position: absolute;
  top: 0px;
  width: inherit;
  height: inherit;
  border-radius: 100%;
  opacity: 0;
  background-color: rgba(0, 0, 0, 0);
  transition: all ease-in-out .3s;
}
.personal-figcaption:hover {
  opacity: 1;
  background-color: rgba(0, 0, 0, .5);
}
.personal-figcaption > img {
	text-align: center;
  margin-top: 32.5px;
  width: 40px;
  height: 40px;
}

.label2{
font-size: 100px;

}

.page-footer{
  overflow: hidden;
}




.visibledevice {display:none;}




.visibledesktop {display:block;

  width:50%;height:auto;


}

@media (max-width : 767px) {
    .visibledevice {display:block;}
    .visibledesktop {display:none;}
}



.articles {
  padding: 60px;
  background-color: #fafafa;
}

.article__grid {
  display: grid;
  grid-template-columns: 1fr;
  gap: 1.875rem;
}
@media (min-width: 40em) {
  .article__grid {
    grid-template-columns: repeat(1, 1fr);
  }
}
@media (min-width: 64em) {
  .article__grid {
    grid-template-columns: repeat(1, 1fr);
  }
}
.article__item {
  border-radius: 0.3125rem;
  overflow: hidden;
  background-color: white;
  box-shadow: 0px 3px 12px rgba(0, 0, 0, 0.15);
  transition: all 150ms ease-in-out;
}
.article__item:hover {
  transform: scale(1.05);
}
.article__image {
  height: 12.5rem;
  background-size: cover;
  background-repeat: no-repeat;
  background-position: center center;
}
.article__text {
  padding: 1.875rem 1.875rem 2.5rem 1.875rem;
  color: #9698a6;
}
@media (min-width: 40em) {
  .article__text {
    padding: 1.875rem 1.5625rem;
  }
}
.article__author {
  font-size: 0.625rem;
  margin-bottom: 0.75rem;
}
.article__title {
  font-size: 1.0625rem;
  line-height: 1.2;
  color: #2d314d;
  margin-bottom: 0.5rem;
}
.article__description {
  font-size: 0.8125rem;
}

.button {
  background-color: #40c7c9;
  border: none;
  color: white;
  padding: 6px 12px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}



</style>


<!--    



-->



  </head>


  <body>
  


<header>




  <nav class="nav-extended">
    <div class="nav-wrapper">

     
    <?php echo @$idpaginicial;?>
 
    
    <a href="index.html" class="brand-logo" alt="AUTOMATOS"> <img src="./img/logo.png" style=" padding-left:15px"></a>
      <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">dehaze</i></a>
     
     

      <ul id="nav-mobile" class="right hide-on-med-and-down">
       
      <?php 

if(@$email==""){ //echo "Olá";

  echo "<li>";
      
  //echo"<li><a href=\"administrativo.php\">Meu Perfil</a></li>";
    echo"<li><a href=\"login.php\">Entrar</a></li>";
    echo"<li><a href=\"cadastrar.php\">Cadastrar</a></li>";
echo "</li>";

}
else{
 echo "<li>";
  echo "<img src=\"user/user$idusuario/$fotoperf\" class=\"personal-avatar\" alt=\"avatar\">";
echo "</li>";

echo"<li>";
echo "Bem vindo, ".$_SESSION['nome']." <br>";
echo"</li>";

echo "<li><a href=\"administrativo.php\">Meu Perfil</a></li>";
      
     echo "<li><a href=\"login.php\">  </a></li>";
       echo "<li><a href=\"sair.php\">Sair</a></li>";
      echo "</ul>";
      
}
?>
    </div>
    <!-- <div class="nav-content">
        
      <ul class="tabs tabs-transparent ">
       <li class="tab"><a class="active" href="index.php"> Sobre nós</a></li>
        <li class="tab"><a href="Bíblia.php"> Bíblia </a></li>
     
        <li class="tab"><a href="Estudos.php"> Estudos da semana(Em breve)</a></li>
        <li class="tab"><a href="IBMBJLive.php"> Live(Em breve)</a></li>
 
      </ul>
    </div>        -->



  </nav>

  <ul class="sidenav" id="mobile-demo">
    <li><a href="administrativo.html">Meu Perfil</a></li>
    <li><a href="login.html">Entrar</a></li>
    <li><a href="cadastrar.html">Cadastrar</a></li>
  </ul>









  
</header>

        <main>


        <?php 
/*
include ('conexao.php');
    include('IBMBJNoticias.php');

    $btnCardinfo = filter_input(INPUT_POST, 'btnCardinfo', FILTER_SANITIZE_STRING);

    if($btnCardinfo){


echo $id_post;
echo $conteudo;

    }

*/

    
$btnExp = filter_input(INPUT_POST, 'btnExp', FILTER_SANITIZE_STRING);
if($btnExp){
	include_once 'conexao.php';
  $id_post = $_POST['id'];
	$titulo = $_POST['modelo'];
    $autor = $_POST['cor'];
    //$conteudo = $_POST['conteudo'];
    //$data = $_POST['data'];
    //$hora = $_POST['hora'];
    $imgexp = $_POST['img'];
    

    $sql2 = mysqli_query($conn, "SELECT * FROM modelos where id = '$id_post' ");
   while($line = mysqli_fetch_array($sql2)){

    $titulo = $line['modelo'];
    $imagem = $line['img'];
    $imagemb = $line['imgb'];
    $imagemint = $line['imgint'];
    
    $conteudo = $line['cor'];
    $autor = $line['marca'];
    //$data = $line['dt'];
    //$hora = $line['hr'];
    $id_post = $line['id'];
    //$resumo = $line['resumo_txt'];
$preco = $line['preço'];
$performance = $line['performance'];
$cambio = $line['cambio'];
$tecnologia = $line['tecnologia'];
$design = $line['design'];

   }

}















?>

<nav>
    <div class="nav-wrapper" style="background-color: #c42633;">
      <div class="col s12">
        <a href="index.html" style="padding:8px;" class="breadcrumb">Início</a>
        <a href="compra.php" class="breadcrumb">Modelos</a>
        <a href="#!" class="breadcrumb">Simulação</a>
      </div>
    </div>
  </nav>



<div class="row" style="padding: 40px;">
      <div class="col s6 ">
        <div class="card"  >
          <div class="card-image" style="background-color:#9698a6" >
              
               <div class="carousel carousel-slider center">
    <div class="carousel-fixed-item center">
      <!--a class="btn waves-effect white grey-text darken-text-2">button</a-->
    </div>
    <div class="carousel-item red white-text" href="#one!">
       <img style="max-width: 500px; height:300px;margin:auto;" src="img/<?php echo "car".$autor."/".$imagem?>" alt="1"> 
       
       
      <p class="white-text">This is your first panel</p>
    </div>
    <div class="carousel-item amber white-text" href="#two!">
     <img style="max-width: 500px; height:300px;margin:auto;" src="img/<?php echo "car".$autor."/".$imagemb?>" alt="1"> 
      <p class="white-text">This is your second panel</p>
    </div>
    <div class="carousel-item green white-text" href="#three!">
  <img style="max-width: 500px; height:300px;margin:auto;" src="img/<?php echo "car".$autor."/".$imagemint?>" alt="1"> 
      <p class="white-text">This is your third panel</p>
    </div>

  </div>
              
              
            <!--   
          <img style="max-width: 500px; height:300px;margin:auto;" src="img/<?php echo "car".$autor."/".$imagem?>" alt="1">
           <a href="" class="halfway-fab btn-floating pink pulse">
              <i class="material-icons">favorite</i> 
            </a> -->
          </div>
          <div class="card-content">
            <span class="card-title"><?php echo $titulo;?> </span>
            <div><div class="article__author">Fabricado por: <?php echo $autor ;?> <br><br> 
            
            <h5>Especificações: </h5>
            
            <?php echo "<br>
            Motor: ".$performance.
            "<br>Câmbio: ".$cambio.
            "<br>Design: ".$design.
            "<br>Tecnologia e periféricos: ".$tecnologia
            
            
            
            
            
            
            ;?></div>
            <br><br><br>
            <div  style="overflow:hidden;word-break:break-word;-webkit-text-overflow:ellipsis;">    <?php echo"Cor: ". $conteudo;?></div>
          </div>
          <div class="card-action" style="-webkit-border-radius: 30px;
-moz-border-radius: 30px;
border-radius: 30px; ;background-color:black;">
         <i class="material-icons prefix" style="color:white;">phone</i>    <a href="">Ligue agora: (81)4002-8922</a>
            <!--a href="">Compartilhar</a-->
          </div>
        </div>
      </div>

</div>


    <div class="col s4 m5">
      <div class="card-panel teal">
        <span class="white-text"> <h2><?php echo $autor." ".$titulo; ?></h2> 
          <div class="row">
    <form class="col s12">
      <div class="row">
   <br>
         <span class="white-text"> Por apenas: <h1> <?php echo "R$: ".$preco; ?> </h1>
        
        
        
        
        
        
      </div>
    </form>
  </div>
        
        </span>
      </div>
    </div>
    
    
     <div class="col s4 m5">
      <div class="card-panel white">
        <span class="black-text"> Cadastre-se e receba as melhores ofertas para este veículo
          <div class="row">
    <form class="col s12" method="POST" action="obrigado.html" enctype="multipart/form-data">
      <div class="row">
        <div class="input-field col s6">
          <i class="material-icons prefix">account_circle</i>
          <input id="nome" type="text" class="validate">
          <label for="nome">Nome </label>
        </div>
        <div class="input-field col s6">
          <i class="material-icons prefix">telephone</i>
          <input id="telefone" type="tel" class="validate">
          <label for="telefone">Telefone</label>
        </div>
        
          <div class="input-field col s6">
          <i class="material-icons prefix">mail</i>
          <input id="email" type="text" class="validate">
          <label for="email">Email</label>
        </div>
        <div class="input-field col s6">
          <i class="material-icons prefix">message</i>
          <input id="msg" type="text" class="validate">
          <label for="msg">Mensagem</label>
        </div>
        
        
        
      </div>
      
      <input class="col s12" id="button" style="color:white; " id="logintxt" type="submit" name="btnEmail" value="Receba Ofertas">
    </form>
  </div>
        
        </span>
      </div>
    </div>
    


</div>


  


















</main>






<?php 
include "footer.php";
?>
            
 













<script>

var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("carousel-fixed-item center");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 5000);    
}

</script>



<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>



<script src="https://code.iconify.design/2/2.0.3/iconify.min.js"></script>



<script>



  // Or with jQuery

  $('.carousel.carousel-slider').carousel({
    fullWidth: true,
    indicators: true,
    

  });
        


  </script>


<script>

</script>



</body>
</html>


