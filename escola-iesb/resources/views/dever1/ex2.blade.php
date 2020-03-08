<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Dever 2</title>
</head>
<body>
<div class="container">
<h1>Exercício 2</h1>
<br>

<form action="/ex2" method="post">
    @csrf

    Total de eleitores:
    <input type="text" name="total"/><br>
    Votos brancos:
    <input type="text" name="brancos"/><br>
    Votos nulos:
    <input type="text" name="nulos"/><br>
    Votos válidos:
    <input type="text" name="validos"/>

    <br>
    <input type="submit" value="ENVIAR">
</div>
</body>
</form>
</html>
