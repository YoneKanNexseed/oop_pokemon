<?php

// ピカチュウの読み込み
require_once('Pikachu.php');

// サトシの読み込み
require_once('Satoshi.php');

// フシギダネの読み込み
require_once('Bulbasaur.php');

$pikachu = new Pikachu(100, 50, 'ピカチュウ');
$pikachu->cry();

echo 'ピカチュウのHPは';
echo $pikachu->hp;

echo '<br>';

$pikachu->attack();
// $pikachu->noAttack();


// サトシを作成
$satoshi = new Satoshi();

var_dump($satoshi->box);

//　サトシがピカチュウをゲット
$satoshi->getPokemon($pikachu);

echo '<br>';
var_dump($satoshi->box);

// フシギダネ誕生
$bulbasaur = new Bulbasaur(30, 30, 'フシギダネ');

//　サトシがフシギダネをゲット
$satoshi->getPokemon($bulbasaur);

echo '<br>';
var_dump($satoshi->box);

// ピカチュウ2号作成
$pikachu2 = new Pikachu(120, 150, 'ピカチュウ2号');

// ゲット
$satoshi->getPokemon($pikachu2);

echo '<br>';
var_dump($satoshi->box);
echo '<br><br><br>';

// 持っているポケモンの確認
$satoshi->showPokemons();

// ポケモンに攻撃を指示
$satoshi->orderAttack(0);

// 全員で攻撃
$satoshi->superAttack();








echo '<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>';