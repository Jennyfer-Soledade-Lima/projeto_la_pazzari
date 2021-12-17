<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Pizzaria - La Pazzari</title>
<link rel="stylesheet" type="text/css" href="css/estilos.css">
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
				<h2>Faça o pedido do cliente :</h2>
			</div>
			<div class="postagem">


				<form name="frmpizza" action="inserirCliente.php" method="post">
					<table>

						<tr>
							<td>Nome:</td>
							<td><input type="text" required="required" size=44 name="nome" /> <br /></td>
						</tr>
					</table>
					<br>
					<table>
						<tr>
							<td>Endereço:</td>
							<td><input type="text" required="required" size=40 name="endereco" /> <br /></td>
						</tr>
					</table>
					<br>
				<table>
						<tr>
							<td>CEP:</td>
							<td><input   required="required" type="number" size="60" name="cep" /> <br /></td>
						</tr>
					</table>
					<br>
					<table>
						<tr>
							<td>Telefone:</td>
							<td><input required="required" type="number" size="40" name="telefone" /> <br /></td>
						</tr>
					</table>
					<br>
					<table>

						<tr>
							<td>Pedido:</td>
							<td><textarea type="text" required="required" name="pedido">Escreva o pedido do cliente aqui</textarea>
								<br /></td>
							<br />
							</td>
						</tr>
					</table>
					<br>


					<table>
						<tr>
							<td><button type="submit" name="enviar"
									value="Enviar formulário">Enviar</button></td>
						</tr>
					</table>
				</form>
			</div>
			

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