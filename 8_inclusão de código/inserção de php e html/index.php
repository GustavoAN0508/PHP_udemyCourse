<?php

include_once "backend.php";

?>

<h1> Seja bem-vindo ao nosso site </h1>
<p><?=$nome;?>, veja nossas ofertas</p>

<h2>Confira nossos produtos: </h2>
<ul>
<?php foreach($produtos as $prod): ?>
<li><?= $prod;?></li>
<?php endforeach;?>
</ul>