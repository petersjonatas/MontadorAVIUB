<link href="../assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="../assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="../assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
<table class="table table-hover">
    <thead>
      <tr>
        <th>Nome</th>
        <th>Qtd. Estoq.</th>
        <th>Qtd. Vend.</th>
		<th>Preço/Custo</th>
		<th>Preço/Venda</th>
      </tr>
    </thead>
    <tbody>

<?php 

require("../core/core_cons.php");
$sql = mysqli_query($cx, "SELECT * FROM produtos ORDER BY item ASC") or die( mysqli_error($cx) 
);

while($aux = mysqli_fetch_assoc($sql)) {

echo'<meta charset="utf-8" />         
<tr>
        <td>'.$aux["item"].'</td>
        <td>'.$aux["qtd_estoque"].'</td>
        <td>'.$aux["qtd_vendida"].'</td>
		<td>'.$aux["preco_custo"].'</td>
		<td>'.$aux["preco_venda"].'</td>
		
      </tr>
	  
	  
';


}
echo'</tbody>
  </table></div><br><input onclick="window.print();" class="btn btn-primary" type="button" value="Imprimir"> <br><br> ';
?>