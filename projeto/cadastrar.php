<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title> Cadastro de Usuário </title>
<link href="..\projeto\Style\church01.css" rel="stylesheet">
<script>
    
    function limpa_formulário_cep() {
            //Limpa valores do formulário de cep.
            document.getElementById('rua').value=("");
            document.getElementById('bairro').value=("");
            document.getElementById('cidade').value=("");
            document.getElementById('uf').value=("");
           
    }

    function meu_callback(conteudo) {
        if (!("erro" in conteudo)) {
            //Atualiza os campos com os valores.
            document.getElementById('rua').value=(conteudo.logradouro);
            document.getElementById('bairro').value=(conteudo.bairro);
            document.getElementById('cidade').value=(conteudo.localidade);
            document.getElementById('uf').value=(conteudo.uf);
         
        } //end if.
        else {
            //CEP não Encontrado.
            limpa_formulário_cep();
            alert("CEP não encontrado.");
        }
    }
        
    function pesquisacep(valor) {

        //Nova variável "cep" somente com dígitos.
        var cep = valor.replace(/\D/g, '');

        //Verifica se campo cep possui valor informado.
        if (cep != "") {

            //Expressão regular para validar o CEP.
            var validacep = /^[0-9]{8}$/;

            //Valida o formato do CEP.
            if(validacep.test(cep)) {

                //Preenche os campos com "..." enquanto consulta webservice.
                document.getElementById('rua').value="...";
                document.getElementById('bairro').value="...";
                document.getElementById('cidade').value="...";
                document.getElementById('uf').value="...";
                

                //Cria um elemento javascript.
                var script = document.createElement('script');

                //Sincroniza com o callback.
                script.src = 'https://viacep.com.br/ws/'+ cep + '/json/?callback=meu_callback';

                //Insere script no documento e carrega o conteúdo.
                document.body.appendChild(script);

            } //end if.
            else {
                //cep é inválido.
                limpa_formulário_cep();
                alert("Formato de CEP inválido.");
            }
        } //end if.
        else {
            //cep sem valor, limpa formulário.
            limpa_formulário_cep();
        }
    };

    </script>
</head>
<body id ="cad">
<div class="container">
 <div class="box">

<h1 id ="primeiro"><br><br> Cadastrar  </h1>


<form method="POST" action="verifica.php" id ="form1">
<input type="text" name="nome" id="nome" placeholder = "Nome do Estabelecimento"><br><br>
<input type="text" name="email" id="email" placeholder = "Email"><br><br>
<input type="number" name="whats" id="whats" placeholder = "Whatssap"><br><br>
<input type="password" name="senha1" id="senha1" placeholder = "Senha"><br><br>
<input type="password" name="senha" id="senha" placeholder = " Confimar Senha"><br><br><br>
<hr>
<p align ="left"> Dados do Estabelecimento:</p><br><br>
    
        
        
        <input name="cep" type="text" id="cep" value="" size="10" maxlength="9"
               onblur="pesquisacep(this.value);" placeholder="CEP"/></label><br />
       
        <input name="rua" type="text" id="rua" size="60"placeholder="Rua" /></label><br />
       
        <input name="bairro" type="text" id="bairro" size="40" placeholder="Bairro" /></label><br />
       
        <input name="cidade" type="text" id="cidade" size="40" placeholder="Cidade"/></label><br />
       
        <input name="uf" type="text" id="uf" size="2" placeholder="Estado"/></label><br />
		
		<input name="numero" type="text" id="numero" size="2" placeholder="Numero"/></label><br />
		
		<input name="com" type="text" id="comp" size="2" placeholder="Complemento"/></label><br /><br>

 
 
 
<input type="submit" value="Cadastrar" id="cadastrar" name="cadastrar"><br><br><br><br><br><br>

</form>
</div>
</div>


<br><br><br>



</body>
</html>