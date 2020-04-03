<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Dever 1</title>
</head>
<body style="background-color:#636b6f;">
<div class="container">
<h1>Exercício 14</h1>
<br>

<form action="/ex14" method="post">
    @csrf

    Olá fulano! Informe as notas das provas 1 e 2 respectivamente: <br>

    <br>Prova 1:
    <input type="text" name="p1"/><br>

    Prova 2:
    <input type="text" name="p2"/><br>

    Prova 3:
    <input type="text" name="p3"/><br>

    <br>
    <input type="submit" value="ENVIAR">
</form>
</div>
</body>
</html>
