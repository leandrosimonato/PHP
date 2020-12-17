<?php
$nome = 'Leandro';
if ($nome == 'Leandro') { // prefiro o primeiro. 
	echo 'verdade';
}

$nome = 'Leandro';
if ($nome == 'Leandro');    // outra forma de escrever códigos.
	echo 'verdade';
endif;

$conatdor = 0;
while ($conatdor < 10) { // prefiro o primeiro. 
    $conatdor++;
    echo 'oi';
    echo '<br />';
}

echo '<br />';
$conatdor = 0;
while ($conatdor < 10); // outra forma de escrever códigos.
    $conatdor++;
    echo 'oi';
    echo '<br />';
endwhile;

$array = array();
foreach ($variable as $key => $value) { // prefiro o primeiro. 
	}

$array = array();
foreach ($variable as $key => $value); // outra forma de escrever códigos.
endforeach;

for($i=0;$i<10;$i++){  // prefiro o primeiro. 
	//Aqui vai o código.
}

for($i=0;$i<10;$i++);  // outra forma de escrever códigos.
	//Aqui vai o código.
endfor;

?>