
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Pizzaria - La Pazzari</title>
<link rel="stylesheet" type="text/css" href="css/estilos1.css">
<script src="js/javinha.js"></script>
</head>
<body onload="slide1_1()">
	<div id="area-cabecalho">
		<div id="area-logo">

			<img src="imagens/la palazzi.png" width="800px" height="auto">
		</div>
		<div id="area-menu">

			<a href="index.php">Faça o pedido do cliente </a>

		</div>
	</div>
	<div id="area-principal">
		<div id="area-postagem">
			<div class="pessoa">
				<h2>Parabéns! Você adicionou um cliente ao nosso banco.</h2>
			</div>
			<div class="postagem">
              

            <?php
    include_once 'DBConnection.class.php';
    
   
 $nome     =  $_POST['nome'];
 $endereco = $_POST['endereco']; 
 $cep      =$_POST['cep'];
 $telefone =  $_POST['telefone'];
 $pedido   =     $_POST['pedido'];
     

    
    if ($_POST){
        insert($nome, $endereco, $cep, $telefone, $pedido);

        
        echo  "Cliente ".$_POST['nome']." inserido com sucesso!";

      
    }else{
        echo  "Erro ao inserir o cliente ".$_POST['nome']."!";
    }
    
    
 
    
    function insert($nome, $endereco, $cep, $telefone, $pedido){
        
        $nomeTabela = "la_pazzari.cliente";
        $nomeCampos = "nome, endereço, cep, telefone, pedido";
        $valores    =
        "'" .$nome. "', ".
        "'" .$endereco. "', ".
        "'" .$cep. "', ".
        "'" .$telefone. "', ".
        "'" .$pedido. "' ";
        $cmdSQL =  "INSERT INTO ".$nomeTabela."(".$nomeCampos.") VALUES (".$valores.")";
        $conn1 = new DBConnection();
        $conn1->query($cmdSQL);
        
        //return $cmdSql;
        
    }
?>

	
		</div>
		<div id="area-lateral">

			<div class="conteudo-lateral">
				
				<div class="postagem-lateral">
					
				</div>
				<div class="postagem-lateral1">
					
				</div>
			</div>
		</div>
		<div id="area-rodape">&copy;Todos os direitos reservados</div>
	</div>

</body>
</html>