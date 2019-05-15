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

  public function multipleJoin($table, $join, $where = '', $group_by = '', $order_by = '', $asc_desc = '') {
    $table = ($table === '') ? '' : $table;
    $group_by = ($group_by === '') ? '' : ' GROUP BY '. $group_by;
    $order_by = ($order_by === '') ? '' : ' ORDER BY '. $order_by;
    $asc_desc = ($asc_desc === '') ? '' : ($asc_desc == 'ASC') ? ' ASC ' : ' DESC ';
    $where_clause = ($where === '') ? '' : ' WHERE '. $where;

    $query = "SELECT $table  from ". $this->db->table. " ". $join. " " . $where_clause. $group_by. $order_by. $asc_desc;

    $return = [];
    $result = $this->db->execute($query);
    
    while($data = $result->fetch_assoc())
      array_push($return, $data);

    return $return;
  }

  public function join($table, $constrain, $where = '', $group_by = '', $order_by = '', $asc_desc = '') {
    $group_by = ($group_by === '') ? '' : ' GROUP BY '. $group_by;
    $order_by = ($order_by === '') ? '' : ' ORDER BY '. $order_by;
    $asc_desc = ($asc_desc === '') ? '' : ($asc_desc == 'ASC') ? ' ASC ' : ' DESC ';
    $where_clause = ($where === '') ? '' : ' WHERE '. $where;

    $query = "SELECT *  from ". $this->db->table. " inner join $table on ". $this->db->table. ".$constrain=$table.$constrain" . $where_clause. $group_by. $order_by. $asc_desc;

    $return = [];
    $result = $this->db->execute($query);
    
    while($data = $result->fetch_assoc())
      array_push($return, $data);

    return $return;
  }
}