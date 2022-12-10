<?php
//session_start();
include_once 'conexao.php';

?>



<html>

<head>
    <link rel="stylesheet" type="text/css" href="./css/main2.css">
    <link rel="stylesheet" type="text/css" href="./css/slick.css" />
    
    
    
    <title>AUTOMATOS</title>
    
      <meta name="viewport" content="width=device-width, initial-scale=1">
    
 
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
border-radius:4px;
}
    
    
        body{
            display:flex;
            
        }
        
        
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
        
        .container { width: 100%; height: 100%; display: grid; grid-template-rows: 60px auto 60px; }
        
        
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
    grid-template-columns: repeat(2, 1fr);
  }
}
@media (min-width: 64em) {
  .article__grid {
    grid-template-columns: repeat(4, 1fr);
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
        
        
        @import url('https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&display=swap');

html, body { font-family: 'Roboto Condensed', sans-serif; font-size: 100%; }
        
        
    </style>
    
</head>


<body>

    <header class="menu-principal">
        <main>
            <div class="header-1">

                <div class="busca">
                    <input placeholder="Busque pelo modelo" type="text" />
                </div>

                <div class="logo-principal">
                    <a href="index.html"><img src="./img/logo.png"></a>


                </div>
                <div class="redes-sociais">


                </div>
            </div>
            <div class="header-3">
                <div class="menu">
                    <ul>
                        <li>
                            <a href="index.html" >Home</a>
                        </li>
                        <li>
                            <a href="index-2.html" class="active">Modelos</a>
                        </li>
                        <li>
                            <a href="index-3.html">Contatos</a>
                        </li>
                        <li>

                    </ul>
                </div>





            </div>

        </main>
     
    
    
    <section class="articles">




<!--
<form method="GET" action="Busca.php" enctype="multipart/form-data">

<div class="row">
    <form class="col s6">
      <div class="row">
        <div class="input-field col s6">
          <textarea id="textarea1" name="titulo" class="materialize-textarea" ></textarea>
          <label for="textarea1">Buscar...</label>

          <button class="btn waves-effect waves-light" type="submit" name="btnExp">Buscar
    <i class="material-icons right">search</i>
  </button>

        </div>
      </div>
    </form>
  </div>
  </form>

-->



          <?php 


?>










<div class="article__content container container--pall">
        <h2>Carros disponíveis</h2>

      
        <div class="article__grid">

        <?php 
include "conexao.php";
$qtde_registros = 4;
@$page = $_GET['pag'];
if(!$page){
  $pagina = 1;
}


else{
$pagina = $page;

}

@$inicio = $pagina - 1;
$inicio = $inicio * $qtde_registros;
$sel_parcial = mysqli_query($conn, "select * from modelos order by id desc limit $inicio, $qtde_registros");
$sel_total = mysqli_query($conn, "select * from modelos");

$contar = mysqli_num_rows($sel_total);
$contar_pages = $contar / $qtde_registros;


while($line = mysqli_fetch_array($sel_parcial)){
  $titulo = $line['marca'];
  $imagem = $line['img'];
  $conteudo = $line['modelo'];
  $cor = $line['cor'];
//  $data = $line['dt'];
//  $hora = $line['hr'];
  $id_post = $line['id'];
  //$resumo = $line['resumo_txt'];
  $resumo = $line['modelo'];
?>





      <?php // href="#"  echo"$id_post";?>

          <a class="article__item">
            <div
              class="article__image">
              <img src="img/<?php echo "car".$titulo."/".$imagem?>" alt="Imagem indisponível" style=" width:100% ;height:100%; ">
    
    
          
          
          </div>
          
            <div class="article__text">
         
              <div style="font-size:16px" class="article__author">Cor: <?php echo $cor ;?> <br>
            
            
            </div>
            
              <div class="article__title">
                
               <?php echo $titulo;?>
              </div>
              <div style="font-size:16px" class="article__description">
              <?php echo $resumo;?>
              </div>



              
            <form method="POST" action="simulacao2.php" enctype="multipart/form-data">
            

       
            <input type="hidden" name="id" value=<?php echo $id_post;?>> 
            <input type="hidden" name="modelo" value=<?php echo $titulo;?>> 
            <input type="hidden" name="cor" value=<?php echo $cor;?>> 
         
         
            <input type="hidden" name="img" value=<?php echo $imagem;?>> 

            <label for="titulo2"><?php //echo $titulo;?></label>

   

         
      <input  class="button" style="color:white;" id="logintxt" type="submit" name="btnExp" value="Fazer simulação">
          
          </form>


            </div>
            


          </a>

          
        

<?php

}



?>









</div>



      </div>
      
      
      
    </section>
    
    <!-- detalhes do carro 
    
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>    
    
    <div class="mitsuprincipal">
        <img src="./img/mitsubannerprinci.png">
    </div>

    <div class="textomitsu">
        <h1><strong> Mitsubishi Eclipse 1995</strong>
            <br>
            Conheça o Mitsubishi Eclipse 1995 - Carro do filme dos velozes e furiosos 2
        </h1>
        <p>O Mitsubishi Eclipse foi um icônico carro esportivo da montadora japonesa nos anos 1990. Hoje, seguindo as
            tendências de mercado, o nome "Eclipse" é usado para nomear um SUV médio da marca, que inclusive está à
            venda no Brasil: o Mitsubishi Eclipse Cross.
            <br>
            <br>
            No caso do esportivo guiado por Paul Walker, tínhamos um clássico 2.0 turbo de 213cv e 29,6 kgf/m de torque,
            que faziam o bólido ir de 0 a 100 km/h em 7,1 segundos, com velocidade máxima de 224 km/h, números
            impressionantes para a época. Além disso, a suspensão e freios eram pensados para favorecer a performance e
            a segurança do carro.
        </p>

        <h2>VERSÕES</h2>
    </div>

    <div class="mitsuversoes">
        <img src="./img/mitsu21.jpg">
    </div>
    </div>

    <div class="textomitsucont">
        <h1><strong>O MITSUBISHI ECLIPSE VEM EQUIPADO COM:</strong></h1>
        <h2><strong>DESIGN</strong></h2>
        <h2><strong>CONECTIVIDADE</strong></h2>
        <h2><strong>PERFORMANCE</strong></h2>
        <h2><strong>TECNOLOGIA</strong></h2>
        <br>
        <h3><strong>VISUAL ESPORTIVO</strong></h3>
        <h3><strong>WI-FI NATIVO E ONSTAR</strong></h3>
        <h3><strong>MOTOR TURBO 353cv</strong></h3>
        <h3><strong>TETO SOLAR</strong></h3>
    </div>
    <div class="cruzeexterior">
        <h1><strong>EXTERIOR</strong></h1>
    </div>

    <div class="mitsuexteriorimg">
        <img src="./img/mitsubishi-eclipse-all-asta-l-esemplare-di-fast-furious.jpg">
        <img src="./img/mitsu1.jpg">
        <img src="./img/mitsu2.jpg">
    </div>

    
 
    -->
    
    
    
    
    
    
    
    
    
    
    
    

      

   
        <div style="margin-top:700px;" class="col-8 footer-2">
            <div class="logofinal">
                <a href="index.html"><img src="./img/logo.png"></a>
            </div>
            <div class="ibama">
                <img src="./img/flooter.jpg" />

            </div>


            <div class="revisoes">
                <h4>Faça revisões em seu veículo regularmente. Estes veículos estão em conformidade com o Programa de
                    Controle a
                    Poluição do Ar <br>por Veículos Automotores - PROCONVE. JUNTOS SALVAMOS VIDAS.</h4>
                <p>
                    © 2022 Todos os Direitos Reservados
                </p>


            </div>
            <div class="termos-politica">
                <ul>
                    <li>
                        <a href="index-4.html">Política de Privacidade</a>
                    </li>
                    <li>
                        <a href="index-5.html">Termos de uso</a>
                        </li>
                        </ul>
            </div>

        </div>
        
        
        
        
 
            <script type="text/javascript" src="./js/jquery.js"></script>
            <script type="text/javascript" src="./js/jquery-migrate.js"></script>
            <script type="text/javascript" src="./js/slick.min.js"></script>
            <script type="text/javascript" src="./js/main.js"></script>





    </header>

</body>

</html>