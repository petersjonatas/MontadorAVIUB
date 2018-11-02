<?php 
require("/core/core_cad.php"); 
$login = $_POST['login'];
  $entrar = $_POST['entrar'];
  $senha = md5($_POST['senha']);
  
    if (isset($entrar)) {
            
      $verifica = mysql_query("SELECT * FROM users WHERE usuario = '$login' AND senha = '$senha'") or die("erro ao selecionar");

        if (mysql_num_rows($verifica)<=0){
          echo"<script language='javascript' type='text/javascript'>alert('Login e/ou senha incorretos');window.location.href='index.php';</script>";
          die();
        }else{
          setcookie("login",$login);
          header("Location:me.php");
        }
    }
?>