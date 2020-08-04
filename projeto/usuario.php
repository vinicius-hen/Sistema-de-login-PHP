
<html>
<head>
<link href="..\projeto\Style\usuario.css" rel="stylesheet">
<title> area privada </title>
</head>
<body>

<?php

$login_cookie = $_COOKIE['nome'];
$host = "localhost";
$usuario = "root";
$senha = "";
$bd = "pederango";
$mysqli = new mysqli ($host, $usuario, $senha, $bd);
$consulta = "SELECT * FROM usuario WHERE nome LIKE '$login_cookie' ";
$con = $mysqli -> query($consulta) or die ($mysqli -> error);




    if(isset($login_cookie)){

      ?><h1> Seja Bem-Vindo, <?php echo $login_cookie; ?></h1><p id ="sub"> Essas infomações podem ser alteradas por voce </p>
	  <table align="center">
     <tr>
	  
	    <td>Nome </td>
		<td> Whatssap </td>
		<td> Cep </td>
		<td> Rua </td>
		<td> Bairro </td>
		<td> Cidade </td>
		<td> Estado </td>
		<td> Numero </td>
		
		
		
	 </tr>

<?php while($dado = $con -> fetch_array()) { ?>

<tr>

   <td><?php echo $dado ["nome"]; ?> </td>
   <td><?php echo $dado ["telefone"]; ?> </td>
   <td><?php echo $dado ["cep"]; ?> </td>
   <td><?php echo $dado ["rua"]; ?> </td>
   <td><?php echo $dado ["bairro"]; ?> </td>
   <td><?php echo $dado ["cidade"]; ?> </td>
   <td><?php echo $dado ["estado"]; ?> </td>
   <td><?php echo $dado ["numero"]; ?> </td>

</tr>
<?php }?>


<?php
      
    }else{
      echo"Bem-Vindo, convidado <br>";
      echo"Essas informações <font color='red'>NÃO PODEM</font> ser acessadas por você";
      echo"<br><a href='login.html'>Faça Login</a> Para ler o conteúdo";
    }
?>





	  
</body>
</html>