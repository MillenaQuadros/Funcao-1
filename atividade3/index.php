<?php
function calcularPesoIdeal($sexo, $altura) {
    if ($sexo == 'M') {
        // Fórmula para homens
        $pesoIdeal = (72.2 * $altura) - 58;
    } else if ($sexo == 'F') {
        // Fórmula para mulheres
        $pesoIdeal = (62.1 * $altura) - 44.7;
    } else {
        return "Sexo inválido. Use 'M' para masculino ou 'F' para feminino.";
    }
    return $pesoIdeal;
}

// Exemplo de uso
$sexo = 'M'; // 'M' para masculino, 'F' para feminino
$altura = 1.75; // altura em metros
$pesoIdeal = calcularPesoIdeal($sexo, $altura);
echo "O peso ideal é: " . $pesoIdeal . " kg";
?>
