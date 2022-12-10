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