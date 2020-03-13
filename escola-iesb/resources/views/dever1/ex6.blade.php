<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Dever 1</title>
</head>
<body style="background-color:#636b6f;">
<div class="container">
<h1>Exercício 6</h1>
<br>

<form action="/ex6" method="post">
    @csrf

    Comissão sobre total de vendas (%): 5 <br>

    <br>Salário fixo (R$):
    <input type="text" name="salario"/><br>

    Número de carros vendidos:
    <input type="text" name="carros"/><br>

    Valor total das vendas (R$):
    <input type="text" name="total"/><br>

    Comissão por vendas (%):
    <input type="text" name="comissao"/><br>


    <br>
    <input type="submit" value="ENVIAR">
</form>
</div>
</body>
</html>
