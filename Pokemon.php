<?php
// 全ポケモンが持つプロパティや
// メソッドを持った設計図

class Pokemon
{

  public $hp;

  public $pp;

  public $name;

  // コンストラクタ
  public function __construct($hp, $pp, $name)
  {
    $this->hp = $hp;
    $this->pp = $pp;
    $this->name = $name;
  }

  // 泣くメソッド
  public function cry()
  {
    echo 'ウェー〜〜〜〜ん';
    echo '<br>';
  }

  // 攻撃するメソッド
  public function attack()
  {
    $this->noAttack();
  }

  private function noAttack()
  {
    echo '技を覚えていません';
    echo '<br>';
  }
}


