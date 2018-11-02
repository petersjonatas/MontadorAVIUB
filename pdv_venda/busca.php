<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PDV - Caixa</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="../assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="../assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="../assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='/font/sans.css' rel='stylesheet' type='text/css' />
</head>
<body>
     
           
          
    <div id="wrapper">
         <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="adjust-nav">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#"><h2 style="color:#fff;">QUALITÉ</h2>

                        <img src="" />
                    </a>
                </div>
              
                 <span class="logout-spn" >
                  <a href="bye.php" style="color:#fff;">LOGOUT</a>  

                </span>
            </div>
        </div>
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                 


                    <li class="active-link">
                        <a href="../index.php" ><i class="fa fa-desktop "></i>Gerencial <span class="badge">Login</span></a>
                    </li>
</ul>
                            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >

            <div id="page-inner">
                <div class="row">
                    <div class="col-lg-12">
                     <h2>PDV - Caixa</h2>   
                    </div>
                </div>   
                 <form method="POST" action="busca.php">
				<div class="col-xs-4">
					<input type="text" class="form-control" name="busca" id="busca"><br>
					</div>
					<input class="btn btn-warning" type="submit" value="Buscar">
					</form><br>
				
                 <!-- /. ROW  -->
                  <hr />
              
                 <!-- /. ROW  --> 


<?php
          require("conexao.php");
          $termo = $_POST['busca']; 
          $sql = "SELECT * FROM produtos WHERE item LIKE '$termo%' ORDER BY item ASC";
          $qr = mysql_query($sql) or die(mysql_error());
		  echo '<div class="row text-center pad-top">';
          while($ln = mysql_fetch_assoc($qr)){
             echo '



         <meta charset="utf-8" />         

<div class="col-lg-4 col-md-3 col-sm-6 col-xs-6">
                     <div class="div-square">
                           <a href="carrinho.php?acao=add&id='.$ln['ID'].'" >
 <i class="fa fa-circle-o-notch fa-5x"></i>
                      <h4>'.$ln['item'].'<br>Preço : R$ '.$ln['preco_venda'].'<br>Descrição : '.$ln['descricao'].'</h4>
                      </a>
                      </div></div>
                     
                     
                  


 
';
          }
		  
		  echo'</div>';
		  
    ?>



          
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        
    <div class="footer">
      
    
             <div class="row">
                <div class="col-lg-12" >
                    &copy;  2014 yourdomain.com | Design by: <a href="http://binarytheme.com" style="color:#fff;"  target="_blank">www.binarytheme.com</a>
                </div>
        </div>
        </div>
          

     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="../assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="../assets/js/bootstrap.min.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="../assets/js/custom.js"></script>
    
   
</body>
</html>
