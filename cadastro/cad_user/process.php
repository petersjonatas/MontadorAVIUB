<?php 

require("../core/core_cad.php"); 
$login = $_POST['login'];
$nome = $_POST['nome'];
$senha = MD5($_POST['senha']);
$query_select = "SELECT usuario FROM users WHERE usuario = '$login'";
$select = mysql_query($query_select,$connect);
$array = mysql_fetch_array($select);
$logarray = $array['login'];
$login_cookie = $_COOKIE['login'];

  if($login == "" || $login == null){
    echo"<script language='javascript' type='text/javascript'>alert('O campo login deve ser preenchido');window.location.href='#';</script>";

    }else{
      if($logarray == $login){

        echo"<script language='javascript' type='text/javascript'>alert('Esse login já existe');window.location.href='#';</script>";
        die();

      }else{
        $query = "INSERT INTO users (usuario,senha,nome) VALUES ('$login','$senha','$nome')";
        $insert = mysql_query($query,$connect);
        
        if($insert){
          echo"<script language='javascript' type='text/javascript'>alert('Usuário cadastrado com sucesso!');window.location.href='./index.php'</script>";
        }else{
          echo"<script language='javascript' type='text/javascript'>alert('Não foi possível cadastrar esse usuário');window.location.href='./index.php'</script>";
        }
      }
    }
?>