<?php include("../layout/top.php"); ?>
<?php include("../layout/mid.php"); ?>
                     <h2>Usuários cadastrados </h2>   
                    </div>
                </div>              
                 <!-- /. ROW  -->
                  <hr />
              <?php 

require("../core/core_cons.php");
$sql = mysqli_query($cx, "SELECT * FROM users") or die( mysqli_error($cx) 
);

while($aux = mysqli_fetch_assoc($sql)) {

echo'<meta charset="utf-8" />         

<div class="col-lg-3 col-md-2 col-sm-2 col-xs-6">
                     <div class="div-square">
                           
 <i class="fa fa-users fa-5x"></i>
                      <h4>ID: '.$aux["id"].'<br>Nome: '.$aux["nome"].'</h4>
                      
                      </div></div>';


}
echo'';
?>
   <?php include("../layout/down.php"); ?>