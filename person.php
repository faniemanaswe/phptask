<?php

    class Person {
        private $name;
        private $age;
        private $deathAge;

        public function __construct(){
            $this->name = "Unknown";
            $this->age = 0;
            $this->death = 7;               
        }

        public function getName(){
            return $this->name;
        }

        public function setName($value) {
            $this->name = $value;
        }

        public function getAge(){
            return $this->age;
        }

        public function setAge($value) {
            $this->age = $value;
        }

        public function birthday(){
    
            if ($this->checkStatus() == "dead") {
                echo "You suppose to be Dead";
            }else{
                $this->age++; 
            }
        }

        public function checkStatus() {
            $status = 'alive';
            if($this->age > $this->death){
                $status = 'dead';
            }
            return $status;
        } 
        
        public function showPerson() {
            echo "You are, ". $this->name ." of the Age ". $this->age." and ".$this->checkStatus()."<br />";
        }                    
    }

$Tlad = new Person();
$Tlad->setName("Matladi");


echo '1 year later<br/>';
$Tlad->birthday();
$Tlad->birthday();
$Tlad->birthday();
$Tlad->birthday();
$Tlad->birthday();
$Tlad->birthday();
$Tlad->birthday();
$Tlad->birthday();
$Tlad->showPerson();



$Fan = new Person();
$Fan->setName("Fannie");
$Fan->setAge(80);
$Fan->birthday();
$Fan->showPerson();



echo "Objects of Person Created";