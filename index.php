<?php

// ピカチュウの読み込み
require_once('Pikachu.php');

$pikachu = new Pikachu(100, 50);
$pikachu->cry();

echo 'ピカチュウのHPは';
echo $pikachu->hp;

echo '<br>';

$pikachu->attack();
// $pikachu->noAttack();