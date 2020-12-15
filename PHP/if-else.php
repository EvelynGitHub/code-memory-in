<?php


// O if-else do PHP é muito similar ao de outras linguagens
/**
if(expressão){
    code
}
 */

$a = 1;
$b = 2;

if ($a > $b) {
    echo "A é maior que B";
}

// Outra forma de fazer esse mesmo if é remover os {} 
// Mas atenção só se pode remover os {} SE for APENAS UMA linha dentro do if
if ($a > $b) echo "A é maior que B";

//============ if-else ============
if ($a > $b) {
    echo "A é maior que B";
} else if ($a == $b) {
    echo "A é igual B";
} else {
    echo "A é menor que B";
}

$condition = true;
?>

// ======== if-else no HTML ===========


<?php if ($condition) : ?>

    html code to run if condition is true

<?php elseif (!$condition) : ?>

    just html code

<?php else : ?>

    html code to run if condition is false

<?php endif ?>

<?php

//========== if ternario =============
//(condition ? action_if_true: action_if_false;)

$text = ($a > $b) ? "A é maior que B" : "A é menor que B";
