<?php 

class QueryBuilder{
      public $rawSql = '';
      public $table;

      function __construct($inputTable){
            $this->table = $inputTable;
      }

      function select($columns = "*"){
            $current = is_array($columns) ? implode(",",$columns) : $columns;
            $this->rawSql .= "SELECT " . $current . " FROM " . $this->table;
            return $this; 
      }

      function where($key,$operator,$value){
            $current = strpos($this->rawSql,"WHERE") ? "&&" : "WHERE";
            $this->rawSql .= " $current $key $operator $value";
            return $this;
      }

      function orderBy($key,$direction = "ASC"){
            $current = strpos($this->rawSql, "ORDER BY") ? "," : "ORDER BY";
            $this->rawSql .= " $key $direction";
            return $this;
      }

      function limit($limit,$offset = 0){
            if(!strpos($this->rawSql,"LIMIT")){
                  $this->rawSql .= " LIMIT $offset,$limit";
                  return $this;
            }
           
      }

      function sql(){
            return $this->rawSql;
      }
}