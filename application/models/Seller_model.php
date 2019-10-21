<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Seller_model extends CI_Model
{
    public static $TABLE = 'seller';
    public static $UID = 'uid';
    public static $NAME = 'name';
    public static $LOGO_URI = 'logo_uri';
    public static $DESCRIPTION = 'description';
    public static $PHONE_NUMBER = 'phonenumber';
    public static $CREATED_AT = 'created_at';
    public static $UPDATED_AT = 'updated_at';

    public function get($uid)
    {
        $result = $this->db->get_where(self::$TABLE, array(self::$UID => $uid));
        return $result->row_array();
    }

    public function add($input)
    {
        $this->db->insert(self::$TABLE, $input);
    }

    public function update($input, $uid)
    {
        $this->db->where(self::$UID, $uid);
        $this->db->update(self::$TABLE, $input);
    }

    /**
     * Method ini digunakan untuk cek apakah data
     * harus di tambahkan atau di update.
     *
     * @param $table
     * @param $uid
     * @return mixed
     */
    public function data_exist($uid)
    {
        $result = $this->db->get_where(self::$TABLE, array(self::$UID => $uid));
        $result = $result->result();

        return count($result) == 0 ? true: false;
    }
}