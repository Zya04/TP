<?php

class Queue {

  public function __construct(
    private array $arrayQueue = [],
  ){}

  public function push(int | string $args){
    $this->arrayQueue[] = $args;
  }

  public function pop(){
    return $this->arrayQueue[0];
  }

  public function clear(){
    $this->arrayQueue = [];
  }

}

$queue = new Queue;
echo $queue->push("oiouo");
echo $queue->push("test");
echo $queue->push(5);
echo $queue->push(155);
echo $queue->push(15);
var_dump($queue->pop());
$queue->clear();
