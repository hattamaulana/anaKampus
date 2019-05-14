<?php 

namespace App\Models\Transaction;

use App\Models\Model;

class DetailTransactionModel extends Model {
  public static $ID = 'id';
  public static $TID = 'tid';
  public static $PID = 'pid';
  public static $COUNT = 'banyak_pembelian';
  public static $PAY = 'total_pembelian';
  public $TABLE = 'detail_transactions';

  private $db;
  public function __construct() {
    $this->db = parent::getInstance();
    $this->db->table = $this->TABLE;
  }

  public function add($args = []) {
    return $this->db->insert($args);
  }

  public function join($table, $constrain, $where = '') {
    $where_clause = ($where === '') ? '' : ' WHERE '. $where;

    $query = "SELECT *  from ". $this->db->table. " inner join $table on ". $this->db->table. ".$constrain=$table.$constrain" . $where_clause;

    $return = [];
    $result = $this->db->execute($query);
    
    while($data = $result->fetch_assoc())
      array_push($return, $data);

    return $return;
  }
}