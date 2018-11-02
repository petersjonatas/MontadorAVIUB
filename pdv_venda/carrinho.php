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
                 
				
                 <!-- /. ROW  -->
                  <hr />
              
                 <!-- /. ROW  --> 




<?php session_start(); if(!isset($_SESSION['carrinho'])){ $_SESSION['carrinho'] = array(); } 
//adiciona produto 
if(isset($_GET['acao'])){ 
//ADICIONAR CARRINHO 
if($_GET['acao'] == 'add'){ $id = intval($_GET['id']); if(!isset($_SESSION['carrinho'][$id])){ $_SESSION['carrinho'][$id] = 1.00; }else{ $_SESSION['carrinho'][$id] += 1.00; } } 
//REMOVER CARRINHO 
if($_GET['acao'] == 'del'){ $id = intval($_GET['id']); if(isset($_SESSION['carrinho'][$id])){ unset($_SESSION['carrinho'][$id]); } } 
//ALTERAR QUANTIDADE 
if($_GET['acao'] == 'up'){ if(is_array($_POST['prod'])){ foreach($_POST['prod'] as $id => $qtd){
                      $id  = intval($id);
                      $qtd = intval($qtd);
                      if(!empty($qtd) || $qtd <> 0){
                         $_SESSION['carrinho'][$id] = $qtd;
                      }else{
                         unset($_SESSION['carrinho'][$id]);
                      }
                   }
                }
             }
           
          }
           
           
    ?>
    <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
    <html xmlns="http://www.w3.org/1999/xhtml">
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <title>Carrinho</title>
    </head>
 
    <body>
     
<table>
         
<caption>Carrinho de Compras</caption>
 
 
<thead>
 
<tr>
                 
<th width="244">Produto</th>
 
 
<th width="79">Quantidade</th>


<th width="100">&nbsp&nbspEm estoque</th> 
 
 
<th width="89">&nbsp&nbsp&nbsp&nbsp&nbspPreco</th>
 
 
<th width="100">SubTotal</th>
 
 
<th width="100">Remover itens</th>
 
              </tr>
 
        </thead>
 
 
<form class="form-inline" action="?acao=up" method="post">
 
<tfoot>
                
<tr>
                 
<td colspan="5">
<button type="submit" class="btn btn-warning">Atualizar Carrinho</button>
</td>
 
 
<tr>
                 
<td colspan="5"><a href="index.php">
<button type="button" class="btn btn-primary">Adicionar mais itens</button>
</a></td>
 
        </tfoot>
 
 
<tbody>
                   <?php
                         if(count($_SESSION['carrinho']) == 0){
                            echo '
<tr>
<td colspan="5">Não há produto no carrinho</td>
</tr>
 
';
                         }else{
                            require("conexao.php");
                                                                   $total = 0;
                            foreach($_SESSION['carrinho'] as $id => $qtd){
                                  $sql   = "SELECT *  FROM produtos WHERE ID= '$id'";
                                  $qr    = mysql_query($sql) or die(mysql_error());
                                  $ln    = mysql_fetch_assoc($qr);
                                   
                                  $nome  = $ln['item'];
                                  $preco = $ln['preco_venda'];
                                  $sub   = $ln['preco_venda'] * $qtd;
                                  $stoq = $ln['qtd_estoque']; 
                                  $total += $ln['preco_venda'] * $qtd;
								  $login_cookie = $_COOKIE['login'];
                                
                               echo '
<tr>       
                                      
<td>'.$nome.'</td>
 
 
<td><input type="text" class="form-control" size="2" name="prod['.$id.']" value="'.$qtd.'" /></td>
 

<td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp'.$stoq.'</td>

 
<td>&nbsp&nbsp&nbsp&nbsp&nbspR$ '.$preco.'</td>
 
 
<td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspR$ '.$sub.'</td>
 
 
<td>&nbsp&nbsp&nbsp<a href="?acao=del&id='.$id.'">&nbsp&nbspRemover</a></td>
 
                                  </tr>
 
';
                            }
                               $total = number_format($total, 2, ',', '.');
                               echo '
<tr>
                                         
<td colspan="4">Total</td>
 
 
<td><input type="text" class="form-control" size="5" readonly="true" value="'.$total.'" id="vtotal"></td>
 
                                  </tr>
 
';
                         }
                   ?>
        
         </tbody>
 
            </form>
 
    </table>
 <form action="finaliza.php" method="POST" >
<input class="btn btn-success" type="submit" value="Finalizar venda" ><br>
<?php 

$sql   = "SELECT *  FROM produtos WHERE ID= '$id'";
                                  require("conexao.php");
                                                                   $total = 0;
                            foreach($_SESSION['carrinho'] as $id => $qtd){
                                  $sql   = "SELECT *  FROM produtos WHERE ID= '$id'";
                                  $qr    = mysql_query($sql) or die(mysql_error());
                                  $ln    = mysql_fetch_assoc($qr);
                                  $idi = $ln['ID']; 
                                  $nome  = $ln['item'];
                                  $preco = $ln['preco_venda'];
                                  $sub   = $ln['preco_venda'] * $qtd;
                                  $stoq = $ln['qtd_estoque']; 
                                  $total += $ln['preco_venda'] * $qtd;

echo '<input type="hidden" size="10" readonly="true" value="'.$nome.'" name="item"><br>';
echo '<input type="hidden" size="5" readonly="true" value="'.$qtd.'" name="qtd"><br>';
echo '<input type="hidden" size="5" readonly="true" value="'.$sub.'" name="vtotal2"><br>';

							}
?>
</form>

          
    
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
