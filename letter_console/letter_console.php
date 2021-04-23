<?php

class Letter {

  public function __construct(
    private string $string = 'abcdefghijklmnopqrstuvwxyz',
  )
  {}

  public function generate (int $number): array{
    $randomString = "";
    $stringLen = strlen($this->string);
    $arrString = [];
    for ($i = 0; $i < $number; $i++) {
        $randomString .= $this->string[rand(0, $stringLen - 1)];
    }
    $arrString[] = $randomString;
    return $arrString;
  }

}

class Console {

  public function show (array $arr):void{

    // foreach ($arr as $value) {
    //   echo $value;
    // }

    var_dump($arr);
  }
}

$letter = new Letter();
$console = new Console();

$alphabet = $letter->generate(10);
$console->show($alphabet);
