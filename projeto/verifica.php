<?php 

$connect = mysqli_connect('localhost','root','','pederango');
$verify = mysqli_query($connect, "SELECT * FROM usuario");
$row = mysqli_num_rows($verify);
if($row <= 15){
$nome = $_POST['nome'];
$email = $_POST['email'];
$whats = $_POST['whats'];
$senha1 = $_POST['senha1'];
$cep = $_POST['cep'];
$rua = $_POST['rua'];
$bairro = $_POST['bairro'];
$cidade = $_POST['cidade'];
$uf = $_POST['uf'];
$numero = $_POST['numero'];
$com = $_POST['com'];








   

   

		 
        $query = "INSERT INTO usuario (nome,telefone,senha,cep,rua,bairro,cidade,estado,numero,complemento,email) VALUES ('$nome','$whats','$senha1','$cep','$rua','$bairro','$cidade','$uf','$numero','$com','$email')";
        $insert = mysqli_query($connect,$query);  
		 
		
        if($insert){
          echo"<script language='javascript' type='text/javascript'>alert('Faça login para mais detalhes !');window.location.href='login.php'</script>";
        }else{
         echo "nao foi possivel";
        }
		 
    
 
	
	

}
	
?>