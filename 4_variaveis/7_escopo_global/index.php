<?php
 $teste = "asd";

 echo "$teste global 1 <br>";

 if (5 > 2) {
    $teste = "dsa";

    echo "$teste if <br>";
 }

 echo "$teste global 2 <br>";



function testandoGlobal() {
   global $teste;  // Se não colocar a instrução "global" antes da variável, não funcionará.
    
}


testandoGlobal();
echo $teste;


?>