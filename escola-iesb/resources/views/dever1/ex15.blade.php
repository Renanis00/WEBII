<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Dever 1</title>
</head>
<body style="background-color:#636b6f;">
<div class="container">
<h1>Exercício 15</h1>
<br>

<form action="/ex15" method="post">
    @csrf

    Olá fulano! Preencha os campos abaixo: <br>

    <br>Tempo do evento expresso em segundos:
    <input type="text" name="tempo"/><br>


    <br>
    <input type="submit" value="ENVIAR">
</form>
</div>
</body>
</html>
