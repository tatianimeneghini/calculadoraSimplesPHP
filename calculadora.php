<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/specimen/Kumbh+Sans?selection.family=Kumbh+Sans:wght@300;400;700#standard-styles" rel="stylesheet">
	<style>
		h1 {
            color: #F8A22E;
		} html {
            background-color: #E3EDE4;
            font-family: 'Kumbh Sans', sans-serif;
            text-align: center;
        } .box-operacao {
            font-family: 'Kumbh Sans', sans-serif
        }
	</style>
    <title>Calculadora Simples</title>
</head>
<body>
<h1>Calculadora Simples</h1>
<h5>Desenvolvido por Tatiani Meneghini.<h5>
<form method="post" action="calculo.php">
    <label>Valor 1:</label>
    <input type="text" name="txt1">
    <br /><br />
    <label>Valor 2:</label>
    <input type="text" name="txt2">
    <br /><br />
    <select name="operacao">
        <option>Soma</option>
        <br /><br />
        <option>Subtração</option>
        <br /><br />
        <option>Multiplicação</option>
        <br /><br />
        <option>Divisão</option>
        <br /><br />
    </select>
    <input type="submit" value="CALCULAR">
</form>
</body>
</html>