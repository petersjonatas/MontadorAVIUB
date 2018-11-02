<link href="../assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="../assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="../assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='/font/sans.css' rel='stylesheet' type='text/css' />
   
<?php
session_start(); if(!isset($_SESSION['carrinho'])){ $_SESSION['carrinho'] = array(); }
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
								  $login_cookie = $_COOKIE['login'];

$itemf = $_POST['item'];
$qtdf = $_POST['qtd'];
setlocale( LC_ALL, 'pt_BR', 'pt_BR.iso-8859-1', 'pt_BR.utf-8', 'portuguese' ); 
       date_default_timezone_set( 'America/Sao_Paulo' );
$idnota = MD5(strftime( '%Y-%m-%d %H:%M:%S', strtotime('now') ));

if($stoq < '10' ){
    echo"<script language='javascript' type='text/javascript'>alert('Item com estoque baixo! Fique atento...');</script>";
    }


if($qtd > $stoq){
    echo"<script language='javascript' type='text/javascript'>alert('Item com estoque zerado, verifique o carrinho!');window.location.href='carrinho.php';</script>";
    die();
    }
	


$connect = mysql_connect('localhost','root','vertrigo');
$db = mysql_select_db('qualite');

$query = "UPDATE produtos SET qtd_vendida = qtd_vendida+'$qtd' WHERE item = '$nome' " ;
$insert = mysql_query($query,$connect);


// abaixa estoque		
$queryd = "UPDATE produtos SET qtd_estoque = qtd_estoque-'$qtd' WHERE item = '$nome' " ;
$insertd = mysql_query($queryd,$connect);


			



require("../core/core_cad.php");
$login_cookie = $_COOKIE['login'];
$queryu2 = "INSERT INTO log_vendas (valor,vendedor,produtos,quantidade,id_nota) VALUES ('$sub','$login_cookie','$nome','$qtd','$idnota')";
		$insertu2 = mysql_query($queryu2,$connect);	
          
		
							}			
							
			


			
							
require("../core/core_cons.php");
setlocale( LC_ALL, 'pt_BR', 'pt_BR.iso-8859-1', 'pt_BR.utf-8', 'portuguese' ); 
       date_default_timezone_set( 'America/Sao_Paulo' );
	   $idnota = MD5(strftime( '%Y-%m-%d %H:%M:%S', strtotime('now') ));
	   $nomevend = $_COOKIE['login'];
$sqlnw = mysqli_query($cx, "SELECT * FROM config") or die( mysqli_error($cx) 
);

while($auxne = mysqli_fetch_assoc($sqlnw)) {
echo'<div class="well well-sm">';
echo'<h4>'.$auxne["nome_empresa"].'&nbsp&nbsp|&nbsp&nbsp'.$auxne["cnpj"].'<br>
'.$auxne["cidade"].'&nbsp-&nbsp'.$auxne["estado"].'&nbsp/&nbsp'.$auxne["cep"].'<br>
'.$auxne["logradouro"].',&nbsp'.$auxne["numero"].'&nbsp|&nbsp'.$auxne["telefone"].'<br>



</h4>';
echo'<h4>|&nbsp&nbsp';
echo strftime( '%Y-%m-%d %H:%M:%S', strtotime('now') );
echo'&nbsp&nbsp|&nbsp&nbsp';
echo'Nota: ';
echo $idnota;
echo'&nbsp&nbsp|&nbsp&nbsp';
echo'Vendedor: ';
echo $nomevend;
echo'</h4></div>';


}



							
							
							

							
echo'
<div class="container">

<meta name="viewport" content="width=device-width, initial-scale=1">
<table class="table table-hover">
    <thead>
      <tr>
	  <th><h4>ID</h4></th>
        <th><h4>Produto</h4></th>
		<th><h4>Quantidade</h4></th>
        <th><h4>Valor unitário</h4></th>
        <th><h4>Total</h4></th>
		
      </tr>
    </thead>
    <tbody>
	  
	  
';							


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

$itemf = $_POST['item'];
$qtdf = $_POST['qtd'];

		
$queryit_select = "SELECT item FROM vendas WHERE item = '$nome'";
$select = mysql_query($queryit_select,$connect);
$array = mysql_fetch_array($select);
$itemarray = $array['item'];

if($itemarray == $nome){

        		
$queryp = "UPDATE vendas SET valor = valor+'$sub' WHERE item = '$nome' ";
        $insertp = mysql_query($queryp,$connect);
        
        

      }else{
        $querypi2 = "INSERT INTO vendas (item) VALUES ('$nome')";
		$insertpi2 = mysql_query($querypi2,$connect);	
$queryp2 = "UPDATE vendas SET valor = valor+'$sub' WHERE item = '$nome' ";
        $insertpi2 = mysql_query($queryp2,$connect);
          
        
      }
		$querypq = "UPDATE vendas SET qtd = qtd+'$qtd' WHERE item = '$nome' ";
        $insertpq = mysql_query($querypq,$connect);
							
echo'<meta charset="utf-8" />         
<tr>
<td>'.$id.'</td>
        <td><h4>'.$nome.'</h4></td>
		<td><h4>'.$qtd.'</h4></td>
        <td><h4>'.$preco.'</h4></td>
        <td><h4>'.$sub.'</h4></td>
		
		
		
      </tr>
	  
	  
';


	  }
echo'</tbody>
  </table>
  <div class="alert alert-success">
  <h4><strong>Valor total: </strong>'.$total.'</h4>
</div>
  
  
  <br>
  <h4>Assinatura do recebedor: _________________________________________________</h4>
  <hr><input onclick="window.print();" class="btn btn-primary" type="button" value="Imprimir">&nbsp&nbsp<a href="/pdv_venda"><input class="btn btn-warning" type="button" value="Voltar"></a></div> ';
  echo"<script language='javascript' type='text/javascript'>alert('Valores registrados com sucesso!!');</script>";

								?>
