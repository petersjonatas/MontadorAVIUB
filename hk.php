<?php include("./layout/top.php"); ?>
<?php include("./layout/mid.php"); ?>
<h2>Dashboard</h2>   
                    </div>
                </div>              
                 <!-- /. ROW  -->
                  <hr />
                <div class="row">
                    <div class="col-lg-12 ">
                        <div class="alert alert-danger">
                             <strong>Olá <?php $login_cookie = $_COOKIE['login']; echo"$login_cookie"; ?>! </strong> Tenha um ótimo dia de trabalho!
                        </div>
                       
                    </div>
                    </div>
                  <!-- /. ROW  --> 
                            <div class="row text-center pad-top">
                  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                      <div class="div-square">
                           <a href="blank.html" >
 <i class="fa fa-book fa-5x"></i>
                      <h4>Cursos</h4>
                      </a>
                      </div>
                     
                     
                  </div> 
                 
                  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                      <div class="div-square">
                           <a href="blank.html" >
 <i class="fa fa-file-text fa-5x"></i>
                      <h4>Matérias</h4>
                      </a>
                      </div>
                     </div>
					 
					 
					 <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                      <div class="div-square">
                           <a href="blank.html" >
 <i class="fa fa-cubes  fa-5x"></i>
                      <h4>Grades</h4>
                      </a>
                      </div>
                     
                     
                  </div>
				  
				  
				  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                      <div class="div-square">
                           <a href="/usuarios.php" >
 <i class="fa fa-users  fa-5x"></i>
                      <h4>Usuários</h4>
                      </a>
                      </div>
                     
                     
                  </div>
				  
				  
                     
                  
                  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                      <div class="div-square">
                           <a href="/produtos.php" >
 <i class="fa fa-th fa-5x"></i>
                      <h4>Questões</h4>
                      </a>
                      </div>
                     
                     
                  </div>
                  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                      <div class="div-square">
                           <a href="/usuarios.php" >
 <i class="fa fa-check-square-o fa-5x"></i>
                      <h4>Gabaritos</h4>
                      </a>
                      </div>
                     
                     
                  </div>
                  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                      <div class="div-square">
                           <a href="blank.html" >
 <i class="fa fa-files-o fa-5x"></i>
                      <h4>Provas geradas</h4>
                      </a>
                      </div>
                     
                     
                  </div>
                  

				  
				  
                  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                      <div class="div-square">
                           <a href="blank.html" >
 <i class="fa fa-terminal fa-5x"></i>
                      <h4>Logs</h4>
                      </a>
                      </div>
                     
                     
                  </div>
                  
				  
				  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                      <div class="div-square">
                           <a href="blank.html" >
 <i class="fa fa-cog   fa-5x"></i>
                      <h4>Configurações</h4>
                      </a>
                      </div>
                     
                     
                  </div> 
				  
				  
				  
               
    <?php include("./layout/down.php"); ?>