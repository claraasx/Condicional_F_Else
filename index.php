<?php

echo PHP_EOL;
echo "______________________________________________________________________________________________________" .  PHP_EOL;
echo PHP_EOL;
echo "01 - Peça ao usuário para inserir dois números e, usando if e else, determine e imprima o maior deles." .  PHP_EOL;
echo "______________________________________________________________________________________________________" .  PHP_EOL;
echo PHP_EOL;
echo PHP_EOL;

$num1 = readline(" Digite o primeiro número: ") . PHP_EOL;
$num2 = readline(" Digite o segundo número: ") . PHP_EOL;

if ($num1 > $num2) {
    echo "O maior número é: " . $num1 . PHP_EOL;
} elseif ($num2 > $num1) {
    echo "O maior número é: " . $num2 . PHP_EOL;
} else {
    echo "Os números são iguais . PHP_EOL;
}

echo PHP_EOL;
echo "___________________________________________________________________________________" .  PHP_EOL;
echo PHP_EOL;
echo "02 - Solicite um valor e, com base no sinal, informe se ele é positivo ou negativo." .  PHP_EOL;
echo "___________________________________________________________________________________" .  PHP_EOL;
echo PHP_EOL;
echo PHP_EOL;

// Solicitando um número ao usuário
$num = readline("Digite um número: ");

// Verificando se o número é positivo, negativo ou zero
if ($num > 0) {
    echo "O número é positivo. PHP_EOL;
} elseif ($num < 0) {
    echo "O número é negativo . PHP_EOL;
} else {
    echo "O número é zero . PHP_EOL;
}




?>





















exercicio 2 

<?php

?>




exercicio 3 

echo PHP_EOL;
echo "______________________________________________________________________" .  PHP_EOL;
echo PHP_EOL;
echo "03 - Peça ao usuário para digitar uma letra (por exemplo, “F” ou “M”). 
Com base na letra, exiba “Feminino”, “Masculino” ou “Sexo inválido”." .  PHP_EOL;
echo "______________________________________________________________________" .  PHP_EOL;
echo PHP_EOL;
echo PHP_EOL;

<?php
// Solicitando uma letra ao usuário
$letra = readline("Digite uma letra (F ou M): ");

// Identificando o gênero
if ($letra == 'F') {
    echo "Feminino . PHP_EOL;
} elseif ($letra == 'M') {
    echo "Masculino . PHP_EOL;
} else {
    echo "Sexo inválido . PHP_EOL;
}
?>







exercicio 4

echo PHP_EOL;
echo "____________________________________________________________________" .  PHP_EOL;
echo PHP_EOL;
echo "04 - Solicite uma letra e verifique se ela é uma vogal ou consoante." .  PHP_EOL;
echo "____________________________________________________________________" .  PHP_EOL;
echo PHP_EOL;
echo PHP_EOL;





<?php
// Solicitando uma letra ao usuário
$letra = readline("Digite uma letra: ");

// Verificando se é vogal ou consoante
if (preg_match('/^[aeiouAEIOU]$/', $letra)) {
    echo "É uma vogal . PHP_EOL;
} else {
    echo "É uma consoante . PHP_EOL;
}
?>



exercicio 5

echo PHP_EOL;
echo "____________________________________________________________________________________________________________" .  PHP_EOL;
echo PHP_EOL;
echo "05 - Leia duas notas parciais de um aluno e, com base na média, exiba “Aprovado” (média maior ou igual a 7), 
        “Aprovado com Distinção” (média igual a 10) ou “Reprovado” (média menor que 7)." .  PHP_EOL;
echo "____________________________________________________________________________________________________________" .  PHP_EOL;
echo PHP_EOL;
echo PHP_EOL;

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
    echo "Aprovado . PHP_EOL;
} else {
    echo "Reprovado . PHP_EOL;
}
?>



exercicio 6

echo PHP_EOL;
echo "______________________________________________" .  PHP_EOL;
echo PHP_EOL;
echo "06 - Leia três números e mostre o maior deles." .  PHP_EOL;
echo "______________________________________________" .  PHP_EOL;
echo PHP_EOL;
echo PHP_EOL;


<?php
// Solicitando três números ao usuário
$num1 = readline("Digite o primeiro número: ");
$num2 = readline("Digite o segundo número: ");
$num3 = readline("Digite o terceiro número: ");

// Determinando o maior número usando funções internas do PHP
$maior = max($num1, $num2, $num3);

// Exibindo o resultado
echo "O maior número é: " . $maior . PHP_EOL;
?>


exercicio 7

echo PHP_EOL;
echo "_______________________________________________________" .  PHP_EOL;
echo PHP_EOL;
echo "07 - Leia três números e exiba o maior e o menor deles." .  PHP_EOL;
echo "_______________________________________________________" .  PHP_EOL;
echo PHP_EOL;
echo PHP_EOL;




<?php
// Solicitando três números ao usuário
$num1 = readline("Digite o primeiro número: ");
$num2 = readline("Digite o segundo número: ");
$num3 = readline("Digite o terceiro número: ");

// Determinando o maior e o menor número
$maior = max($num1, $num2, $num3);
$menor = min($num1, $num2, $num3);

// Exibindo o resultado
echo "O maior número é: " . $maior . PHP_EOL;
echo "O menor número é: " . $menor . PHP_EOL;
?>


exercicio 8


echo PHP_EOL;
echo "______________________________________________________________________" .  PHP_EOL;
echo PHP_EOL;
echo "08 - Pergunte o preço de três produtos e informe qual deles o usuário
           deve comprar (sempre escolhendo o mais barato)." .  PHP_EOL;
echo "______________________________________________________________________" .  PHP_EOL;
echo PHP_EOL;
echo PHP_EOL;


<?php
// Solicitando os preços dos produtos ao usuário
$preco1 = readline("Digite o preço do primeiro produto: ");
$preco2 = readline("Digite o preço do segundo produto: ");
$preco3 = readline("Digite o preço do terceiro produto: ");

// Determinando o produto mais barato
$mais_barato = min($preco1, $preco2, $preco3);

// Exibindo o resultado
echo "Você deve comprar o produto que custa: " . $mais_barato . PHP_EOL;
?>


exercicio 9

echo PHP_EOL;
echo "________________________________________________________" .  PHP_EOL;
echo PHP_EOL;
echo "09 - Leia três números e mostre-os em ordem decrescente." .  PHP_EOL;
echo "________________________________________________________" .  PHP_EOL;
echo PHP_EOL;
echo PHP_EOL;





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


echo PHP_EOL;
echo "____________________________________________________________________________________" .  PHP_EOL;
echo PHP_EOL;
echo "10 - Pergunte em que turno o usuário estuda (M-matutino, V-vespertino ou N-noturno). 
        Com base na resposta, imprima “Bom dia!”, “Boa Noite” ou “Valor inválido”." .  PHP_EOL;
echo "____________________________________________________________________________________" .  PHP_EOL;
echo PHP_EOL;
echo PHP_EOL;


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


echo PHP_EOL;
echo "______________________________________________" .  PHP_EOL;
echo PHP_EOL;
echo "11 - Dado o salário atual de um colaborador, calcule o reajuste com base nas seguintes faixas:
Salários até R$ 280,00: aumento de 20%
Salários entre R$ 280,00 e R$ 700,00: aumento de 15%
Salários entre R$ 700,00 e R$ 1500,00: aumento de 10%
Salários acima de R$ 1500,00: aumento de 5%
o Exiba o salário antes do reajuste, o percentual de aumento
aplicado e o valor do aumento." .  PHP_EOL;
echo "______________________________________________" .  PHP_EOL;
echo PHP_EOL;
echo PHP_EOL;


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


echo PHP_EOL;
echo "______________________________________________________________________________________________________" .  PHP_EOL;
echo PHP_EOL;
echo "12 - Peça ao usuário para inserir seu peso (em quilogramas) e altura (em metros). 
           Calcule o IMC e informe se a pessoa está abaixo do peso, com peso normal, com sobrepeso ou obesa." .  PHP_EOL;
echo "______________________________________________________________________________________________________" .  PHP_EOL;
echo PHP_EOL;
echo PHP_EOL;



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

echo PHP_EOL;
echo "__________________________________________________________________" .  PHP_EOL;
echo PHP_EOL;
echo "13 - Solicite um número inteiro e determine se ele é primo ou não." .  PHP_EOL;
echo "__________________________________________________________________" .  PHP_EOL;
echo PHP_EOL;
echo PHP_EOL;



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


echo PHP_EOL;
echo "_____________________________________________________________________" .  PHP_EOL;
echo PHP_EOL;
echo "14 - Peça ao usuário para inserir uma temperatura em graus Celsius e
           converta-a para Fahrenheit." .  PHP_EOL;
echo "_____________________________________________________________________" .  PHP_EOL;
echo PHP_EOL;
echo PHP_EOL;



<?php
// Solicitando a temperatura em Celsius ao usuário
$temperaturaC = readline("Digite a temperatura em graus Celsius: ");

// Convertendo para Fahrenheit
$temperaturaF = ($temperaturaC * 9/5) + 32;

// Exibindo o resultado
echo "Temperatura em Fahrenheit: " . $temperaturaF . " °F\n";
?>


exercicio 15

echo PHP_EOL;
echo "_____________________________________________________________________" .  PHP_EOL;
echo PHP_EOL;
echo "06 - Peça um número positivo e faça uma contagem regressiva até zero." .  PHP_EOL;
echo "_____________________________________________________________________" .  PHP_EOL;
echo PHP_EOL;
echo PHP_EOL;


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



