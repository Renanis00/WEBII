<h1>Exercício 1</h1>
<br>
<h2>Aluno: {{ $aluno }}</h2>
<h2>A média é {{ $media }}</h2>

@if($media >=7 )
    <h3>Aluno APROVADO!</h3>

@else
    <h3>Aluno REPROVADO!!!</h3>
@endif
