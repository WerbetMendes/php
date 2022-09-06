<?php

$textoHtml = "<p>Testando parágrafo.</p><div>Uma div aqui.</div><p>Outro parágrafo.</p>";

echo $textoHtml;

$textoBanco = strip_tags($textoHtml);

echo $textoBanco;