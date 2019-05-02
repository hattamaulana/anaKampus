<?php

namespace App\Models;

use \mysqli as MySQLI;

class Model {
  public $table;
  private $instance = null;

  protected static $mysqli = null;
  protected function getInstance () {
    if ($this->instance == null)
      $instance = new Model();
    
    if (self::$mysqli == null || self::$mysqli->connect_error)
      die("Connection Failed");
    
      return $instance;
  }

  private function __construct () {
    $HOST = "localhost";
    $USER = "root";
    $PASS = "nganu";
    $NAME = "anakampus";

    self::$mysqli = new MySQLI($HOST, $USER, $PASS, $NAME);
  }

  public function get($row = '', $where) {
    $row    = ($row === '') ? '*' : $row;
    $where  = ($where === '') ? '' : $where;
    $query  = "SELECT $row FROM " .$this->table. " WHERE $where ";

    return self::$mysqli->query($query);
  }

  public function update($paramData = array(), $condition) {
    $updated   = '';
    $query = "UPDATE FROM $this->table SET $updated WHERE $condition";

    return self::$mysqli->query($query);
  }

  public function delete($condition = '') {
    if ($condition != '')
      $query = "DELETE FROM $this->table WHERE $condition";
    else
      $query = "DELETE FROM $this->table";

    return self::$mysqli->query($query);
  }

  public function insert($param = []) {
    $keys = '';
    $vals = '';
    $i    = 0;

    foreach ($param as $key => $value) {
      $keys .= $key;
      $keys .= ($i == count($param)-1) ? '': ',';

      $vals .= "'$value'";
      $vals .= ($i == count($param)-1) ? '': ',';
      $i++;
    }

    $query = "INSERT INTO $this->table ( $keys ) VALUES ( $vals )";

    return self::$mysqli->query($query);
  }

  public function hashPassword($string) {
    return password_hash($string, PASSWORD_BCRYPT);
  }

  public static function escapeString($string) {
    if (self::$mysqli == null)
      new Model();
    
    return self::$mysqli->escape_string($string);
  }
}