<?php
class Query {
  public $connection;
  public function __construct($connection)
  {
    $this->connection = $connection;
  }
  
}