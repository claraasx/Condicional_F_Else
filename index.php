<?php

    echo PHP_EOL;
    echo "______________________________________________________________________________________________________" .  PHP_EOL;
    echo PHP_EOL;
    echo "01 - Peça ao usuário para inserir dois números e, usando if e else, determine e imprima o maior deles." .  PHP_EOL;
    echo "______________________________________________________________________________________________________" .  PHP_EOL;
    echo PHP_EOL;
    echo PHP_EOL;

// Solicitando dois números ao usuário
$num1 = readline("Digite o primeiro número: ");
$num2 = readline("Digite o segundo número: ");

// Determinando o maior número usando if-else
if ($num1 > $num2) {
    echo "O maior número é: " . $num1 . "\n";
} elseif ($num2 > $num1) {
    echo "O maior número é: " . $num2 . "\n";
} else {
    echo "Os números são iguais.\n";
}


?>





















exercicio 2 

<?php
// Solicitando um número ao usuário
$num = readline("Digite um número: ");

// Verificando se o número é positivo, negativo ou zero
if ($num > 0) {
    echo "O número é positivo.\n";
} elseif ($num < 0) {
    echo "O número é negativo.\n";
} else {
    echo "O número é zero.\n";
}
?>




exercicio 3 



<?php
// Solicitando uma letra ao usuário
$letra = readline("Digite uma letra (F ou M): ");

// Identificando o gênero
if ($letra == 'F') {
    echo "Feminino\n";
} elseif ($letra == 'M') {
    echo "Masculino\n";
} else {
    echo "Sexo inválido\n";
}
?>







exercicio 4

<?php
// Solicitando uma letra ao usuário
$letra = readline("Digite uma letra: ");

// Verificando se é vogal ou consoante
if (preg_match('/^[aeiouAEIOU]$/', $letra)) {
    echo "É uma vogal.\n";
} else {
    echo "É uma consoante.\n";
}
?>



exercicio 5

<?php
// Solicitando duas notas ao usuário
$nota1 = readline("Digite a primeira nota: ");
$nota2 = readline("Digite a segunda nota: ");

// Calculando a média
$media = ($nota1 + $nota2) / 2;

// Verificando a situação do aluno
if ($media == 10) {
    echo "Aprovado com Distinção\n";
} elseif ($media >= 7) {
    echo "Aprovado\n";
} else {
    echo "Reprovado\n";
}
?>



exercicio 6

<?php
// Solicitando três números ao usuário
$num1 = readline("Digite o primeiro número: ");
$num2 = readline("Digite o segundo número: ");
$num3 = readline("Digite o terceiro número: ");

// Determinando o maior número usando funções internas do PHP
$maior = max($num1, $num2, $num3);

// Exibindo o resultado
echo "O maior número é: " . $maior . "\n";
?>


exercicio 7

<?php
// Solicitando três números ao usuário
$num1 = readline("Digite o primeiro número: ");
$num2 = readline("Digite o segundo número: ");
$num3 = readline("Digite o terceiro número: ");

// Determinando o maior e o menor número
$maior = max($num1, $num2, $num3);
$menor = min($num1, $num2, $num3);

// Exibindo o resultado
echo "O maior número é: " . $maior . "\n";
echo "O menor número é: " . $menor . "\n";
?>


exercicio 8

<?php
// Solicitando os preços dos produtos ao usuário
$preco1 = readline("Digite o preço do primeiro produto: ");
$preco2 = readline("Digite o preço do segundo produto: ");
$preco3 = readline("Digite o preço do terceiro produto: ");

// Determinando o produto mais barato
$mais_barato = min($preco1, $preco2, $preco3);

// Exibindo o resultado
echo "Você deve comprar o produto que custa: " . $mais_barato . "\n";
?>


exercicio 9

<?php
// Solicitando três números ao usuário
$num1 = readline("Digite o primeiro número: ");
$num2 = readline("Digite o segundo número: ");
$num3 = readline("Digite o terceiro número: ");

// Criando um array com os números
$numeros = array($num1, $num2, $num3);

// Ordenando o array em ordem decrescente
rsort($numeros);

// Exibindo os números em ordem decrescente
echo "Números em ordem decrescente: ";
foreach ($numeros as $numero) {
    echo $numero . " ";
}
echo "\n";
?>


exercicio 10

<?php
// Solicitando o turno ao usuário
$turno = readline("Em que turno você estuda? (M-matutino, V-vespertino, N-noturno): ");

// Verificando o turno e exibindo a saudação correspondente
switch (strtoupper($turno)) {
    case 'M':
        echo "Bom dia!\n";
        break;
    case 'V':
        echo "Boa tarde!\n";
        break;
    case 'N':
        echo "Boa noite!\n";
        break;
    default:
        echo "Valor inválido.\n";
}
?>


exercicio 11

<?php
// Solicitando o salário atual ao usuário
$salario = readline("Digite o salário atual do colaborador: ");

// Determinando o percentual de aumento com base no salário atual
if ($salario <= 280) {
    $percentual = 20;
} elseif ($salario > 280 && $salario <= 700) {
    $percentual = 15;
} elseif ($salario > 700 && $salario <= 1500) {
    $percentual = 10;
} else {
    $percentual = 5;
}

// Calculando o valor do aumento e o novo salário
$aumento = ($salario * $percentual) / 100;
$novo_salario = $salario + $aumento;

// Exibindo os resultados
echo "Salário antes do reajuste: R$ " . number_format($salario, 2, ',', '.') . "\n";
echo "Percentual de aumento aplicado: " . $percentual . "%\n";
echo "Valor do aumento: R$ " . number_format($aumento, 2, ',', '.') . "\n";
echo "Novo salário após o reajuste: R$ " . number_format($novo_salario, 2, ',', '.') . "\n";
?>


exercicio 12

<?php
// Solicitando o peso e a altura ao usuário
$peso = readline("Digite o peso em kg: ");
$altura = readline("Digite a altura em metros: ");

// Calculando o IMC
$imc = $peso / ($altura * $altura);

// Classificando o IMC
if ($imc < 18.5) {
    $classificacao = "abaixo do peso";
} elseif ($imc >= 18.5 && $imc < 25) {
    $classificacao = "com peso normal";
} elseif ($imc >= 25 && $imc < 30) {
    $classificacao = "com sobrepeso";
} else {
    $classificacao = "obeso";
}

// Exibindo o resultado
echo "Seu IMC é: " . number_format($imc, 2) . "\n";
echo "Você está " . $classificacao . "\n";
?>


exercicio 13

<?php
// Solicitando um número ao usuário
$num = readline("Digite um número inteiro: ");

// Verificando se o número é primo
$primo = true;
if ($num <= 1) {
    $primo = false;
} else {
    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i == 0) {
            $primo = false;
            break;
        }
    }
}

// Exibindo o resultado
if ($primo) {
    echo $num . " é um número primo.\n";
} else {
    echo $num . " não é um número primo.\n";
}
?>


exercicio 14

<?php
// Solicitando a temperatura em Celsius ao usuário
$temperaturaC = readline("Digite a temperatura em graus Celsius: ");

// Convertendo para Fahrenheit
$temperaturaF = ($temperaturaC * 9/5) + 32;

// Exibindo o resultado
echo "Temperatura em Fahrenheit: " . $temperaturaF . " °F\n";
?>


exercicio 15

<?php
// Solicitando um número positivo ao usuário
$num = readline("Digite um número positivo para a contagem regressiva: ");

// Validando se o número é positivo
if ($num < 0) {
    echo "Número inválido. Por favor, digite um número positivo.\n";
} else {
    // Contagem regressiva
    echo "Contagem regressiva:\n";
    for ($i = $num; $i >= 0; $i--) {
        echo $i . "\n";
    }
}
?>



