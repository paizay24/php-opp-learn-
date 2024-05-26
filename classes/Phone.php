<?php 

class Phone{
      public $brand;
      public $model;

      public function usingInternet(){
            return "$this->brand can use internet";
      }
}