<?php 

namespace App\Models\Transaction;

use App\Models\Model;

class TransactionModel extends Model {
  public static $TID = 'tid';
  public static $UID = 'uid';
  public static $PAY = 'total_pembayaran';
  public static $CREATED_AT = 'created_at';
  public static $UPDATED_AT = 'updated_at';
  public $TABLE = 'transactions';

  private $db;
  private $last_id;
  public function __construct() {
    $this->db = parent::getInstance();
    $this->db->table = $this->TABLE;
  }

  public function create($args = []) {
    return $this->db->insert($args);
  }

  public function getLastId($arg) {
    return $this->db->insert_id($arg);
  }

  public function join($table, $constrain, $where = '') {
    $where_clause = ($where === '') ? '' : ' WHERE '. $where;

    $query = "SELECT *  from ". $this->db->table. " inner join $table on ". $this->db->table. ".uid=$table.$constrain" . $where_clause;

    return  $this->db->execute($query)->fetch_assoc();
  }

  public function show($uid) {
    $clause = self::$UID. "='$uid'";
    $result = $this->db->get('*', $clause);
    $return = [];
    while($data = $result->fetch_assoc()) 
      array_push($return, $data);
    
    return $return;
  }
}