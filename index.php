<html>
<body>
</form>
<form action="values_cadastro.php" method="POST">
	<fieldset>
	<table>
	<tr>
	<td>Informe o codigo:</td>
	<td><input size="15" name="codigo"></td>
	</tr>
	<tr>
	<td>Informe o Nome do evento:</td>
	<td><input size="15" name="nome_evento"></td>
	</tr>
	<tr>
	<td>Informe a Data do evento:</td>
	<td><input size="15" name="data_evento"></td>
	</tr>
    <tr>
	<td>Informe o Horario de Inicio do evento:</td>
	<td><input size="15" name="hr_inicio_evento"></td>
	</tr>
    <tr>
	<td>Informe o Horario de Fim do evento:</td>
	<td><input size="15" name="hr_fim_evento"></td>
	</tr>
    <tr>
	<td>Informe a Descrição do Evento:</td>
	<td><input size="15" name="desc_evento"></td>
	</tr>
    <tr>
	<td>Informe o Local do evento:</td>
	<td><input size="15" name="local_evento"></td>
	</tr>
    <tr>
	<td>Informe o responsável do evento:</td>
	<td><input size="15" name="resp_evento"></td>
	</tr>
    <tr>
	<td colspan=2><input type="submit" value="Cadastrar"></td>
	</tr>
	</table>
	</fieldset>
	</form>

	<form action="encontrar.php" method="POST">
	<fieldset>
	<table>
	<tr>
	<td>Informe o codigo evento para encontrá-lo:</td>
	<td><input size="15" name="codigo"></td>
	</tr>
	<tr>
	<td colspan=2><input type="submit" value="encontrar"></td>
	</tr>
	</table>
	</fieldset>
	</form>
</body>
</html>