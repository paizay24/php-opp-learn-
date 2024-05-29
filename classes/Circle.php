<?php 

class Circle extends Shape{
      public function area(float $length): float
      {
            return pi() * $length;
      }
}