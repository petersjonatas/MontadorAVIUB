<?php 

require("../core/core_cons.php");
$sql = mysqli_query($cx, "SELECT * FROM fornecedores") or die( mysqli_error($cx) 
);

while($aux = mysqli_fetch_assoc($sql)) { echo "<br>-----------------------------------------<br>
"; echo "ID: ".$aux["ID"]."
"; echo "<br>Nome: ".$aux["nome"]."
"; echo "<br>Telefone: ".$aux["telefone"]."
"; echo "<br>CNPJ: ".$aux["cnpj"]."
"; }

?>