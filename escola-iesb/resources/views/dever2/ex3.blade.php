<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Dever 2</title>
</head>
<body style="background-color:#636b6f;">
<div class="container">
<h1>Exercício 3</h1>
<br>

<form action="/ex3" method="post">
    @csrf

    Olá fulano! Informe 3 números aleatórios: <br>

    <br>Número 1:
    <input type="password" name="n1"/><br>

    Número 2:
    <input type="password" name="n2"/><br>

    Número 3:
    <input type="password" name="n3"/><br>

    <br>
    <input type="submit" value="ENVIAR">
</form>
</div>
</body>
</html>
