<?php
  $login_cookie = $_COOKIE['login'];
    if(isset($login_cookie)){
      include('hk.php');
    }else{
      echo"Bem-Vindo, convidado <br>";
      echo"Essas informa��es <font color='red'>N�O PODEM</font> ser acessadas por voc�";
      echo"<br><a href='/index.php'>Fa�a Login</a> Para ler o conte�do";
    }
?>