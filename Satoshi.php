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
}