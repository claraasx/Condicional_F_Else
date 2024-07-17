<?php

    echo PHP_EOL;
    echo "________________________________________________________________________________" .  PHP_EOL;
    echo PHP_EOL;
    echo " 01 - Insira dois números e, usando if e else, determine e imprima o maior deles." .  PHP_EOL;
    echo "________________________________________________________________________________" .  PHP_EOL;
    echo PHP_EOL;
    echo PHP_EOL;


$num1 = readline("Digite o primeiro número: ");
echo PHP_EOL;

$num2 = readline("Digite o segundo número: ");
echo PHP_EOL;
echo PHP_EOL;


if ($num1 > $num2) {
    echo "O maior entre os dois números é: " . $num1 . PHP_EOL;
} elseif ($num2 > $num1) {
    echo "O maior entre os dois números é: " . $num2 . PHP_EOL;
} else {
    echo "Os números são iguais". PHP_EOL;
}




echo PHP_EOL;
echo PHP_EOL;
echo PHP_EOL;
echo "___________________________________________________________________________________" .  PHP_EOL;
echo PHP_EOL;
echo " 02 - Informe um valor e, com base no sinal, informe se ele é positivo ou negativo." .  PHP_EOL;
echo "___________________________________________________________________________________" .  PHP_EOL;
echo PHP_EOL;
echo PHP_EOL;


$num = readline("Informe um número: ");
echo PHP_EOL;

if ($num > 0) {
    echo "O número inserido é positivo" . PHP_EOL;
} elseif ($num < 0) {
    echo "O número inserido é negativo:" . PHP_EOL;
} else {
    echo "O número inserido é igual a zero" . PHP_EOL;
}






echo PHP_EOL;
echo PHP_EOL;
echo PHP_EOL;
echo "_____________________________________________________________________________________" .  PHP_EOL;
echo PHP_EOL;
echo " 03 - Digite uma letra (por exemplo, “F” ou “M”). Com base na letra, exiba “Feminino”, 
    “ Masculino” ou “Sexo inválido”." .  PHP_EOL;
echo "_____________________________________________________________________________________" .  PHP_EOL;
echo PHP_EOL;
echo PHP_EOL;



$letra = readline("Informe uma letra (F ou M): ");
echo PHP_EOL;


if ($letra == 'F') {
    echo "Essa letra é do gênero feminino" . PHP_EOL;
} elseif ($letra == 'M') {
    echo "Essa letra é do gênero masculino" . PHP_EOL;
} else {
    echo "Essa letra é inválida" . PHP_EOL;
}






echo PHP_EOL;
echo PHP_EOL;
echo PHP_EOL;
echo "____________________________________________________________________" .  PHP_EOL;
echo PHP_EOL;
echo "04 - Informe uma letra e verifique se ela é uma vogal ou consoante." .  PHP_EOL;
echo "____________________________________________________________________" .  PHP_EOL;
echo PHP_EOL;
echo PHP_EOL;

$letra = readline("Digite uma letra: ");
echo PHP_EOL;

// Verificando se é vogal ou 

if (preg_match('/^[aeiouAEIOU]$/', $letra)) {
    echo "O número inserido é uma vogal" . PHP_EOL;
} else {
    echo "O número inserido é uma consoante" . PHP_EOL;
}






echo PHP_EOL;
echo PHP_EOL;
echo PHP_EOL;
echo "_______________________________________________________________________________________________________________" .  PHP_EOL;
echo PHP_EOL;
echo "05 - Informe duas notas parciais de um aluno e, com base na média, exiba “Aprovado” (média maior ou igual a 7), 
    “Aprovado com Distinção” (média igual a 10) ou “Reprovado” (média menor que 7)." .  PHP_EOL;
echo "_______________________________________________________________________________________________________________" .  PHP_EOL;
echo PHP_EOL;
echo PHP_EOL;


$nota1 = readline("Informe a primeira nota do aluno(a): ");
echo PHP_EOL;
$nota2 = readline("Informe a segunda nota do aluno(a): ");
echo PHP_EOL;
echo PHP_EOL;


$media = ($nota1 + $nota2) / 2;


if ($media == 10) {
    echo "O aluno(a) foi Aprovado com Distinção";
} elseif ($media >= 7) {
    echo "O aluno(a) foi Aprovado" . PHP_EOL;
} else {
    echo "O aluno(a) foi Reprovado" . PHP_EOL;
}






echo PHP_EOL;
echo PHP_EOL;
echo PHP_EOL;
echo "_________________________________________________" .  PHP_EOL;
echo PHP_EOL;
echo "06 - Informe três números e mostre o maior deles." .  PHP_EOL;
echo "_________________________________________________" .  PHP_EOL;
echo PHP_EOL;
echo PHP_EOL;


$num1 = readline("Informe o primeiro número: ");
echo PHP_EOL;
$num2 = readline("Informe o segundo número: ");
echo PHP_EOL;
$num3 = readline("Informe o terceiro número: ");
echo PHP_EOL;
echo PHP_EOL;


$maior = max($num1, $num2, $num3);


echo "Dos três números informados, o maior deles é: " . $maior . PHP_EOL;





echo PHP_EOL;
echo PHP_EOL;
echo PHP_EOL;
echo "__________________________________________________________" .  PHP_EOL;
echo PHP_EOL;
echo "07 - Informe três números e exiba o maior e o menor deles." .  PHP_EOL;
echo "__________________________________________________________" .  PHP_EOL;
echo PHP_EOL;
echo PHP_EOL;


$num1 = readline("Informe o primeiro número: ");
echo PHP_EOL;
$num2 = readline("Informe o segundo número: ");
echo PHP_EOL;
$num3 = readline("Informe o terceiro número: ");
echo PHP_EOL;
echo PHP_EOL;


$maior = max($num1, $num2, $num3);
$menor = min($num1, $num2, $num3);

echo "Dos três números informados, o maior deles é: " . $maior . PHP_EOL;
echo PHP_EOL;
echo "E dos três números informados, o menor deles é: " . $menor . PHP_EOL;
echo PHP_EOL;





echo PHP_EOL;
echo PHP_EOL;
echo PHP_EOL;
echo "__________________________________________________________________________________" .  PHP_EOL;
echo PHP_EOL;
echo "08 - Informe o preço de três produtos e informe qual deles o usuário deve comprar 
    (sempre escolhendo o mais barato)." .  PHP_EOL;
echo "__________________________________________________________________________________" .  PHP_EOL;
echo PHP_EOL;
echo PHP_EOL;


$preco1 = readline("Digite o valor do primeiro produto: ");
echo PHP_EOL;
$preco2 = readline("Digite o valor do segundo produto: ");
echo PHP_EOL;
$preco3 = readline("Digite o valor do terceiro produto: ");
echo PHP_EOL;
echo PHP_EOL;


$mais_barato = min($preco1, $preco2, $preco3);

echo "Analisando os produtos disponíveis, o indicado para voce comprar seria o produto com o valor de R$" . $mais_barato . ".". PHP_EOL;







echo PHP_EOL;
echo PHP_EOL;
echo PHP_EOL;
echo "___________________________________________________________" .  PHP_EOL;
echo PHP_EOL;
echo "09 - Informe três números e mostre-os em ordem decrescente." .  PHP_EOL;
echo "___________________________________________________________" .  PHP_EOL;
echo PHP_EOL;
echo PHP_EOL;


$num1 = readline("Informe o primeiro número: ");
echo PHP_EOL;
$num2 = readline("Informe o segundo número: ");
echo PHP_EOL;
$num3 = readline("Informe o terceiro número: ");
echo PHP_EOL;
echo PHP_EOL;

$numeros = array($num1, $num2, $num3);

rsort($numeros);


echo "Os números inseridos em ordem decrescente: ";
foreach ($numeros as $numero) {
    echo $numero . " ";
}






echo PHP_EOL;
echo PHP_EOL;
echo PHP_EOL;
echo "____________________________________________________________________________________" .  PHP_EOL;
echo PHP_EOL;
echo "10 - Pergunte em que turno o usuário estuda (M-matutino, V-vespertino ou N-noturno). 
    Com base na resposta, imprima “Bom dia!”, “Boa Noite” ou “Valor inválido”." .  PHP_EOL;
echo "____________________________________________________________________________________" .  PHP_EOL;
echo PHP_EOL;
echo PHP_EOL;


$turno = readline("Informe o turno que você estuda (M-matutino, V-vespertino, N-noturno): ");
echo PHP_EOL;
echo PHP_EOL;

switch (strtoupper($turno)) {
    case 'M':
        echo "Que você tenha um bom dia!" . PHP_EOL;
        break;
    case 'V':
        echo "Que você tenha uma boa tarde!" . PHP_EOL;
        break;
    case 'N':
        echo "Que você tenha uma boa noite!" . PHP_EOL;
        break;
    default:
        echo "Você inseriu um turno inválido" . PHP_EOL;
}





echo PHP_EOL;
echo PHP_EOL;
echo PHP_EOL;
echo "________________________________________________________________________________________________" .  PHP_EOL;
echo PHP_EOL;
echo "11 - Dado o salário atual de um colaborador, calcule o reajuste com base nas faixas inseridas e 
    exiba o salário antes do reajuste, o percentual de aumento aplicado e o valor do aumento." .  PHP_EOL;
echo "________________________________________________________________________________________________" .  PHP_EOL;
echo PHP_EOL;
echo PHP_EOL;

//Salários até R$ 280,00: aumento de 20%
//Salários entre R$ 280,00 e R$ 700,00: aumento de 15%
//Salários entre R$ 700,00 e R$ 1500,00: aumento de 10%
//Salários acima de R$ 1500,00: aumento de 5%


$salario = readline("Informe o salário atual do colaborador: "). PHP_EOL;
echo PHP_EOL;
echo PHP_EOL;


if ($salario <= 280) {
    $percentual = 20;
} elseif ($salario > 280 && $salario <= 700) {
    $percentual = 15;
} elseif ($salario > 700 && $salario <= 1500) {
    $percentual = 10;
} else {
    $percentual = 5;
}

$aumento = ($salario * $percentual) / 100;
$novo_salario = $salario + $aumento;


echo "O salário do colaborador(a) antes do reajuste é: R$ " . number_format($salario, 2, ',', '.'). PHP_EOL;
echo PHP_EOL;
echo "O percentual de aumento aplicado foi: " . $percentual . "%" . PHP_EOL;
echo PHP_EOL;
echo "Valor do aumento: R$ " . number_format($aumento, 2, ',', '.'). PHP_EOL;
echo PHP_EOL;
echo PHP_EOL;
echo "E o novo salário após o reajuste é: R$ " . number_format($novo_salario, 2, ',', '.'). PHP_EOL;
echo PHP_EOL;






echo PHP_EOL;
echo PHP_EOL;
echo PHP_EOL;
echo "_______________________________________________________________________________________________" .  PHP_EOL;
echo PHP_EOL;
echo "12 - Peça ao usuário para inserir seu peso (em quilogramas) e altura (em metros). 
    Calcule o IMC e informe se a pessoa está abaixo do peso, com peso normal, com sobrepeso ou obesa." .  PHP_EOL;
echo "_______________________________________________________________________________________________" .  PHP_EOL;
echo PHP_EOL;
echo PHP_EOL;


$peso = readline("Informe o peso em kg: "). PHP_EOL;
echo PHP_EOL;
$altura = readline("Informe a altura em metros: "). PHP_EOL;
echo PHP_EOL;
echo PHP_EOL;

// Calculando o IMC
$imc = $peso / ($altura * $altura);

// Classificando o IMC
if ($imc < 18.5) {
    $classificacao = "um pouco abaixo do peso";
} elseif ($imc >= 18.5 && $imc < 25) {
    $classificacao = " com o peso ideal";
} elseif ($imc >= 25 && $imc < 30) {
    $classificacao = " com sobrepeso";
} else {
    $classificacao = "com o imc alterado, chegando ao nível de obesidade";
}


echo "Seu IMC é: " . number_format($imc, 2) . PHP_EOL;
echo PHP_EOL;
echo "Você está " . $classificacao . PHP_EOL;






echo PHP_EOL;
echo PHP_EOL;
echo PHP_EOL;
echo "__________________________________________________________________" .  PHP_EOL;
echo PHP_EOL;
echo "13 - Solicite um número inteiro e determine se ele é primo ou não." .  PHP_EOL;
echo "__________________________________________________________________" .  PHP_EOL;
echo PHP_EOL;
echo PHP_EOL;


$num = readline("Informe um número inteiro: ");
echo PHP_EOL;
echo PHP_EOL;

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

if ($primo) {
    echo $num . " é um número primo.";
} else {
    echo $num . " não é um número primo.";
}




echo PHP_EOL;
echo PHP_EOL;
echo PHP_EOL;
echo "__________________________________________________________________________" .  PHP_EOL;
echo PHP_EOL;
echo "14 - Insira uma temperatura em graus Celsius e converta-a para Fahrenheit." .  PHP_EOL;
echo "__________________________________________________________________________" .  PHP_EOL;
echo PHP_EOL;
echo PHP_EOL;


$temperaturaC = readline("Digite a temperatura em graus Celsius: ");
echo PHP_EOL;
echo PHP_EOL;


$temperaturaF = ($temperaturaC * 9/5) + 32;


echo "A temperatura em Fahrenheit é: " . $temperaturaF . " °F";






echo PHP_EOL;
echo PHP_EOL;
echo PHP_EOL;
echo "________________________________________________________________________" .  PHP_EOL;
echo PHP_EOL;
echo "15 - Informe um número positivo e faça uma contagem regressiva até zero." .  PHP_EOL;
echo "________________________________________________________________________" .  PHP_EOL;
echo PHP_EOL;
echo PHP_EOL;


$num = readline("Digite um número positivo para a contagem regressiva: ");
echo PHP_EOL;


if ($num < 0) {
    echo "Número inválido. Por favor, digite um número positivo." . PHP_EOL;
    echo PHP_EOL;
} else {
    
    echo "Contagem regressiva:" . PHP_EOL;
    echo PHP_EOL;
    for ($i = $num; $i >= 0; $i--) {
        echo $i . PHP_EOL;
        echo PHP_EOL;
    }
}

?>

