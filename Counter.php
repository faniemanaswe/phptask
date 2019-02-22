<?php

class Counter{
    private $count;
    private $maxValue;
   
    public function __contruct(){
        $this->count = 0;
        $this->maxValue = 100;
    }
    public function getCount(){
        return $this->count;
    }
    public function setCount($value){
        $this->count = $value;
    }
    public function getMaxValue(){
        return $this->maxValue;

    }
    public function setMaxValue($value){
        $this->maxValue = $value;
    }
       
   public function increase(){
    if($this->count >= $this->maxValue){
        echo "maximum count reached";
         }else{
         $this->count++;
       } 
     } 
                 
    public function decrease(){
        if($this->count <= 0){
            echo "manimum count reached";
        }else{
           $this->count--;
        }
    }
    public function show() {
        echo "counter ". $this->count ."<br />";
    }
}


 $counter1 = new Counter() ;

// $counter1->setCount(30);
 $counter1->setMaxValue(50);

 $counter1->increase();
 $counter1->increase();
 $counter1->getCount();
 $counter1->show();

 
 $egg1 = new Counter();
 $egg1->setCount(30);
 $egg1->setMaxValue(30);
 $egg1->decrease();
 $egg1->show();
           