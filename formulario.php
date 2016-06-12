<form action="/formulario.php" method="post">
    Nome: <input type="text" name="nome"/>
    Idade: <input type="text" name="idade"/>
    <br>
    <input type="submit" value="Enviar"/>
</form>
<?php

var_dump($_POST);
var_dump($_POST['nome']);

if ( !empty($_POST['nome']) ) {
    echo "<br>Parabens, seu formulario foi recebido!";
} else {
    echo "<br>Voce deve preencher o nome!";
}

if ($_POST['idade'] > 32) {
    echo "<br>voce eh muito legal!";
} else {
    echo "<br>voce eh muito jovem!";
}