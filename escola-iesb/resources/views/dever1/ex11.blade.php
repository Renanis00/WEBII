<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Dever 1</title>
</head>
<body style="background-color:#636b6f;">
<div class="container">
<h1>Exercício 11</h1>
<br>

<form action="/ex11" method="post">
    @csrf

    Olá fulano! Preencha as informações pedidas abaixo: <br>

    <br>Nome do funcionário:
    <input type="text" name="nome"/><br>

    Horas trabalhadas:
    <input type="text" name="horas"/><br>

    Valor por hora (R$):
    <input type="text" name="valor"/><br>

    Número de dependentes:
    <input type="text" name="dependentes"/><br>



    <br>
    <input type="submit" value="ENVIAR">
</form>
</div>
</body>
</html>
