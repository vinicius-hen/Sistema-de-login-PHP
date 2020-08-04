<?php 
$nome = $_POST['nome'];
$entrar = $_POST['entrar'];
$senha = $_POST['senha'];
$connect = mysqli_connect('localhost','root','');
$db = mysqli_select_db($connect,'pederango');
  if (isset($entrar)) {
           
    $verifica = mysqli_query($connect,"SELECT * FROM usuario WHERE nome =
    '$nome' AND senha = '$senha'") or die("erro ao selecionar");
      if (mysqli_num_rows($verifica) ==0){
        echo"<script language='javascript' type='text/javascript'>
        alert('Login e/ou senha incorretos');window.location
        .href='login.php';</script>";
        die();
      }else{
        setcookie("nome",$nome, time()+(24*60*60*7), '/' );
        header("Location:usuario.php");
      }
  }
?>