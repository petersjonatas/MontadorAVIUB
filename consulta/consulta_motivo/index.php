<?php 

require("../core/core_cons.php");
$sql = mysqli_query($cx, "SELECT * FROM motivos") or die( mysqli_error($cx) 
);

while($aux = mysqli_fetch_assoc($sql)) { echo "<br>-----------------------------------------<br>
"; echo "Produto: ".$aux["produto"]."
"; echo "<br>Quantidade ajustada: ".$aux["quantidade"]."
"; echo "<br>Usuário: ".$aux["nome"]."
"; echo "<br>Motivo: ".$aux["motivo"]."
";}

?>