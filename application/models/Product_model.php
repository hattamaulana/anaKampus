<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product_model extends CI_Model
{
    public static $TABLE = 'product';
    public static $UID = 'uid';
    public static $PID = 'pid';
    public static $PHOTO = 'photo';
    public static $NAME = 'name';
    public static $CATEGORY = 'category';
    public static $PRICE = 'price';
    public static $DESCRIPTION = 'description';
    public static $RATING = 'rating';
    public static $CREATED_AT = 'created_at';
    public static $UPDATED_AT = 'updated_at';

    public function get($uid)
    {
        $res = $this->db->get_where(self::$TABLE, array('uid' => $uid));

        return $res->result_array();
    }

    /**
     * @param array $input
     */
    public function insert($input = array())
    {
        $this->db->insert(self::$TABLE, $input);
    }
}