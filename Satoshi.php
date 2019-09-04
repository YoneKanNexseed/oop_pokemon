<?php

// サトシのクラス

class Satoshi
{

  // サトシの持つポケモンが入る配列
  public $box = [];

  // ポケモンをゲットするメソッド
  // 持っているポケモンの一覧を確認するメソッド
  // あるポケモンに攻撃してもらうメソッド

  public function getPokemon($newPokemon)
  {
    // サトシが持つboxに新しくポケモンを追加する
    $this->box[] = $newPokemon;
  }

  public function showPokemons()
  {
    echo '--ポケモン一覧--<br>';

    foreach ($this->box as $pokemon) {
      echo $pokemon->name;
      echo '：';
      $pokemon->cry();
      echo '<br>';
    }

    echo '--------------------<br>';
  }

  // 箱に入っているポケモンの番号をもらって、攻撃を実行
  public function orderAttack($num)
  {
    $pokemon = $this->box[$num];

    // var_dump($pokemon);

    $pokemon->attack();
  }

  // メソッド名：superAttack
  // 処理：持っているポケモン全部に攻撃を命令

  public function superAttack()
  {
    echo '------全体攻撃-----<br>';

    foreach ($this->box as $pokemon) {
      $pokemon->attack();
    }

    echo '--------------------<br>';
  }
}