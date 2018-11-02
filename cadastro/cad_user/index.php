<?php include("../layout/top.php"); ?>
<?php include("../layout/mid.php"); ?>

        <!-- /. NAV SIDE  -->

                     <h2>Cadastro de usuário </h2>   
                    </div>
                </div>              
                 <!-- /. ROW  -->
                  <hr />
<div class="row text-left pad-top">
              <form method="POST" action="process.php">
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
<label>Usuário:</label><input type="text" class="form-control" name="login" id="login"><br>
<label>Nome:</label><input type="text" class="form-control" name="nome" id="nome"><br>
<label>Senha:</label><input type="password" class="form-control" name="senha" id="senha"><br>
<input type="submit" class="btn btn-default" value="Cadastrar" id="cadastrar" name="cadastrar">

</form>
<br>
<br>
</div>


<?php include("../layout/down.php"); ?>