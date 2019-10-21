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
        return $this->db
            -> get_where(self::$TABLE, array('uid' => $uid))
            -> result_array();
    }

    /**
     * Method ini digunaakan untuk mengambil data product berdasarkan id.
     *
     * @param string $pid
     * @return array
     */
    public function get_pid($pid)
    {
        return $this->db
            -> get_where(self::$TABLE, array(self::$PID => $pid))
            -> row_array();
    }

    /**
     * Method ini digunakan untuk melakakukan update data.
     *
     * @param array $input
     * @param string $pid
     */
    public function update($input = array(), $pid)
    {
        $this->db->where(self::$PID, $pid);
        $this->db->update(self::$TABLE, $input);
    }

    /**
     * Method ini digunakan untuk melakukan insert data.
     *
     * @param array $input
     */
    public function insert($input = array())
    {
        $this->db->insert(self::$TABLE, $input);
    }
}