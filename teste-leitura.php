<?php
echo "1. Qual o seu nome? ";
$nome = trim(fgets(STDIN));

echo "\n";
echo "2. Qual é a sua idade? ";
$idade = intval (fgets(STDIN));

echo "\n";
echo "3. Qual é o seu anime preferido? ";
$anime = trim (fgets(STDIN));

echo "\n";
echo "4. Qual é a sua nacionalidade? ";
$nacio = trim (fgets(STDIN));

echo "\n";
echo "5. Qual é a sua altura? ";
$altura = doubleval(fgets(STDIN));

echo "\n";
echo "6. Em qual escola você estuda? ";
$escola = trim (fgets(STDIN));

echo "\n";
echo "7. Você fala algum idioma? Se sim, qual? ";
$idioma = trim (fgets(STDIN));

echo "\n";
echo "8. Você acha que esse quiz foi bom? (s ou n): ";
$quiz = trim (fgets(STDIN)) == "s";    

echo "\n-------------------------\n";
echo "::Resultado::\n";
echo "Nome: $nome\n";
echo "Idade: $idade\n";
echo "Anime: $anime\n";
echo "Nacionalidade: $nacio\n";
echo "Altura: $altura\n";
echo "Escola: $escola\n";
echo "Idioma: $idioma\n";
echo "Quiz: " . ($quiz ? "s" : "n") . "\n";
echo "\n ------------------------ \n";
die;
?>
