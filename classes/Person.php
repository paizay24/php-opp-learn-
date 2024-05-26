<?php

class Person{
      public $name;
      public $age;
      public $gender;

      public function __construct($inputName,$inputAge,$inputGender){
            $this->name = $inputName;
            $this->age = $inputAge;
            $this->gender = $inputGender;
      }

      //properties
      public function speak(string $lang = "english"):string{
            return "$this->name can speak $lang language";
      }
}