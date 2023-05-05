<?php  
#comentário sobre esse arquivo

echo "Hello World! <br>";
echo "Olá Mundo!<br>";
echo 1;

 $variavel_string = "teste de string";
echo "<br>";
echo $variavel_string;

$variavel_string = "nice try";
echo $variavel_string."<br>";

$variavelsring   = "true";
echo $variavel_string."<br>";


$variavel_string      = "Aqui é um texto";
$variavelBoleana      = true;
$variavel_int         = 5;
$variavelDouble       = 1.2;

echo $variavel_string;


#funções de matématica - o que será q o PHP nos reserva

$numero1 = 1;
$numero2 = 2;


echo $numero1 + $numero2;

#mesmo se colocar o $numero 1 = '1', ele ainda vai somar tranquilamente. Mas é melhor usar normal, sem a '

echo $numero1 * $numero2;

/*
+ adição
- subtração
* multiplicação
/ divisão
^ exponenciação

*/

echo "Adição : <br>";
echo $numero1 + $numero2;

echo "<br> Subtração : <br>";
echo $numero1 - $numero2;

#só vou fazer essas duas operações por enquanto

$calculo_adicao = $numero1 + $numero2;
$calculo_multiplicacao = $numero1 * $numero2;
echo "<br>";
echo $calculo_adicao. " ".$calculo_multiplicacao;

//quanto é 10% de 100

$total = 100;
$percentual = 10;
$calculo_porcentagem = $total / 100 * $percentual;
echo "<br>";
echo $percentual. "% de ". $total." é igual a ". $calculo_porcentagem;
echo "<br>";
echo "Forma Padronziada pelo PHP  ( Preguiçosa ) : {$total} / 100 * {$percentual}";

# echo $total / 100 * $percentual - conta normal


/* CONDICIONAIS
    SE         = IF 
    
    SE (condicao) {
    o que eu irei fazer se a condicao for verdadeira
}

    SENÃO SE   = ELSE IF (ELSEIF)
    SE NÃO     = ELSE

    == (igualdade)
    === (igualdade de conteudo e tipo)
    != (diferença) ou <>
    ! (negação)
    > maior
    < menor
    >= maior ou igual
    <= menor ou igual
    && ou and
    || ou or
*/

$var1 = 5;
$var2 = 2;

//forma 1 - acho

if ($var1 <$var2) {
    echo 'O número '.$var1.'é menor que o número '.$var2;
}
else if ($var1 == $var2) {
    echo 'O número '.$var1.' é maior que o número '.$var2;

}
else{
    echo 'O número'.$var1.' Não é menor que o número'.$var2;
} 


if ($var1 >$var2) {
    echo 'O número '.$var1.' é maior que o número '.$var2;
}

/*
pode colocar quantos else if a gente quiser e if's também
Cada else if é uma negação do de cima
Else sempre vai no final. Pode usar usar o else sempre que tiver um if ou um elseif
Podemos usar o if quantas vezes nós quisermos
Podemos usar o elseif quantas vezes nós quisermos, desde que tenha uma estrutura condicional de if antes

Se uma cadeia for verdade, ele vai parar tudo. Até porque ele já achou a verdade, ele nem irá ler o restante.
*/

//forma 2

/*
true  && true   = true
true  && false  = false
false && true   = false
false && false  = false

true  || true   = true
true  || false  = true
false || true   = true
false || false  = false

*/

// === - Exatamente igual

$numero1 = 9; // Isso é um inteiro
$numero2 = '9'; // Isso é uma string

/* echo $numero1 === $numero2;
Daria para fazer dessa forma, ele mostraria o resutlado para nós na tela. Porém, irei utlizar o if e o else;
*/

if($numero1 == $numero2){
    echo "Eles são iguais!";
}else{
    echo "Eles não são iguais!";
}

//lacos de repeticao

/*$numero = 1;
echo $numero. '<br>';
$numero = + 1;
echo $numero. '<br>';
$numero = + 1;
echo $numero. '<br>';
$numero = + 1;
echo $numero. '<br>';                           Forma mais difícil, porém funciona...
$numero = + 1;
echo $numero. '<br>';
$numero = + 1;
echo $numero. '<br>';
$numero = + 1;
echo $numero. '<br>';
$numero = + 1;
echo $numero. '<br>';
$numero = + 1;
echo $numero. '<br>';
$numero = + 1;*/

/*$numero = 1;
while($numero < 10){
    echo 'A condicão ainda é verdadeira <br>';                        Se fizer isso, sua máquina vai travar. Pelo fato de $numero ser igual a 1, e um ser menor do que 10, ele vai ficar rodando 'A condição é verdadeira' incansavelmente. 
}
*/

$numero = 1;
while ($numero <= 10){
    echo $numero. '<br>';

    //$numero++;   (Uma forma de codar e ter o mesmo resultado)
    //$numero+= 1; (Uma forma de codar e ter o mesmo resultado)
    $numero = $numero + 1;
}

/* Se você colocar while ($numero < 10), ele só vai contar até o número 9
Quando ele chegar no 8 + 1, ele vai dar nove normalmente. No entanto, quando chegar no 9 + 1 + 10
Ele vai ver que o número 10 não é menor que 10, por isso ele para no 9

 Dá para solucionar isso de duas formas, ou colocando 11 no lugar de 10, exemplo:
    while ($numero < 11)
    Ou colocando o sinal <=
    while ($numero <= 10)
    Ele vai entender que 10 não é menor que 10, porém é igual, então ele funciona XD
*/

for($numero = 1; $numero <11; $numero++){
    echo $numero. '<br>';
}

/*
estrutura do for
for($numero = 1; $numero <11; $numero++){
    echo $numero. '<br>';
}
numero recebe 1, condição do número ser menos do que 10, numero ++
*/

for($numero = 10; $numero >= 0; $numero--){
    echo $numero.'<br>';
}

//Vetores
//[ 0 | 1 | 2 | 3 | 5 | 6 | 7 | 8 | 9 | 10 | 11 ] - Caixa de sapato com 12 (contando com o quadrado 0) quadrados, cada um vai um ovo.

#$caixadeovo = array();         Acho que a mesma coisa disso aqui = $caixadeovo = [];  Só que um pouco mais longa

/*
$caixadeovo = [];
$caixadeovo [0]['tipo ovo'] = 'Granja';
$caixadeovo [0]['cor']      = 'Branco';
$caixadeovo [0]['qtd']      = 1;
$caixadeovo [0]['tamanho']  = 'Ovos de Codorna';                               Uma forma complexa explicando o que é cada ovo e suas características
$caixadeovo [1]['tipo ovo'] = 'Caipira';
$caixadeovo [1]['cor']      = 'Vermelho';
$caixadeovo [1]['qtd']      = 2;
$caixadeovo [1]['tamanho']  = 'Ovos gigantes';

echo '<pre>';
print_r($caixadeovo);
echo '</pre>';

#alguma coisa que junta HTML com o PHP, ainda não aprendi e não sei como funciona...
*/



$arrnumerico [0]    = 0;
$arrnumerico [1]    = 0;
$arrnumerico [2]    = 0;
$arrnumerico [3]    = 0;
$arrnumerico [4]    = 0;
$arrnumerico [5]    = 0;
$arrnumerico [6]    = 0;
$arrnumerico [7]    = 0;
$arrnumerico [8]    = 0;
$arrnumerico [9]    = 0;
$arrnumerico [10]   = 0;

echo '<pre>';
print_r($arrnumerico);
echo '</pre>';

$caixadeovo [0]     = 'Ovo 1';
$caixadeovo [1]     = 'Ovo 2';
$caixadeovo [2]     = 'Ovo 3';
$caixadeovo [3]     = 'Ovo 4';
$caixadeovo [4]     = 'Ovo 5';
$caixadeovo [5]     = 'Ovo 6';
$caixadeovo [6]     = 'Ovo 7';
$caixadeovo [7]     = 'Ovo 8';
$caixadeovo [8]     = 'Ovo 9';
$caixadeovo [9]     = 'Ovo 10';
$caixadeovo [10]    = 'Ovo 11';
$caixadeovo [11]    = 'Ovo 12';

#as duas formas acima são a mesma coisa (acho), só que a de baixo só atribui um signficado a cada varíavel.

$numero = 0;
$valor  = 1;
while($numero < 10){
    $arrnumerico[$numero] = $valor;
    $numero++;
    $valor++;
}

echo '<pre>';
print_r($arrnumerico);
echo '</pre>';



/*

Se quiser fazer com for, também dá

$arrnumerico = array();
$valor       = 1;
for($i=0;$i < 10;$i++){
    $arrnumerico[$i] =$valor;
    $valor++;
}
*/





# o ? é igual a if e : é igual a else
#Ainda não vi sobre o count detalhado, mas pelo o que vi, parece que é uma função que conta quantas variáveis tem dentro de um array
#Array por convenção, tem que se iniciar por 0
?>
