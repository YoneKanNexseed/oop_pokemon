<?php

// ピカチュウの読み込み
require_once('Pikachu.php');

// サトシの読み込み
require_once('Satoshi.php');

$pikachu = new Pikachu(100, 50, 'ピカチュウ');
$pikachu->cry();

echo 'ピカチュウのHPは';
echo $pikachu->hp;

echo '<br>';

$pikachu->attack();
// $pikachu->noAttack();


// サトシを作成
$satoshi = new Satoshi();

var_dump($satoshi->box);