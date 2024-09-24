<?php
function converterDolarParaReal($valorEmDolar) {
    $cotacaoDolarReal = 1.81;
    $valorEmReal = $valorEmDolar * $cotacaoDolarReal;
    return round($valorEmReal, 2);
}

// Exemplo de uso
$valorDolar = 10;
$valorReal = converterDolarParaReal($valorDolar);
echo "$valorDolar dólares equivalem a R$ $valorReal reais.";
?>
