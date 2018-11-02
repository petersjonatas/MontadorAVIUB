<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Simple Responsive Admin</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="../assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="../assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="../assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
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
                    <a class="navbar-brand" href="/me.php"><h2 style="color:#fff;">QUALITÉ</h2>

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
                        <a href="/me.php" ><i class="fa fa-desktop "></i>Dashboard <span class="badge">Home</span></a>
                    </li>
                   

                    <li>
                        <a href="/tabelas/"><i class="fa fa-table "></i>Tabelas centralizadas  <span class="badge">Geral</span></a>
                    </li>
                    <li>
                        <a href="/consulta/"><i class="fa fa-edit "></i>Relatórios  <span class="badge">Gerencial</span></a>
                    </li>


                    <li>
                        <a href="/modulos/"><i class="fa fa-qrcode "></i>Módulos</a>
                    </li>
                    <li>
                        <a href="/consultas_op/"><i class="fa fa-bar-chart-o"></i>Relatórios  <span class="badge">Operacional</span></a>
                    </li>

                    <li>
                        <a href="/regula_estoq/"><i class="fa fa-edit "></i>Ajuste de estoque </a>
                    </li>
                    <li>
                        <a href="/cad_prod/"><i class="fa fa-table "></i>Cadastro de itens</a>
                    </li>
                     <li>
                        <a href="/cad_forn"><i class="fa fa-edit "></i>Cadastro de fornecedores</a>
                    </li>
                    
                </ul>
                            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Vendedores cadastrados </h2>   
                    </div>
                </div>              
                 <!-- /. ROW  -->
                  <hr />
              <?php 

require("../core/core_cons.php");
$sql = mysqli_query($cx, "SELECT * FROM vendedores") or die( mysqli_error($cx) 
);

while($aux = mysqli_fetch_assoc($sql)) {

echo'<meta charset="utf-8" />         

<div class="col-lg-3 col-md-2 col-sm-2 col-xs-6">
                     <div class="div-square">
                           
 <i class="fa fa-user fa-5x"></i>
                      <h4>ID: '.$aux["ID"].'<br>Nome: '.$aux["login"].'</h4>
                      
                      </div></div>';


}
echo'</div>';
?>
                 <!-- /. ROW  -->           
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
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
