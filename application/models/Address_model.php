<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Address_model extends CI_Model
{
    public static $TABLE = 'addresses';
    public static $AID = 'uid';
    public static $PROVINCE = 'province';
    public static $CITY = 'city';
    public static $ZIPCODE = 'zipcode';
    public static $STREET = 'street';
    public static $ADDRESS = 'address';

    public function get($uid)
    {
        $result = $this->db->get_where(self::$TABLE, array(self::$AID => $uid));
        return $result->row_array();
    }

    public function add($input)
    {
        $this->db->insert(self::$TABLE, $input);
    }

    public function update($input, $uid)
    {
        $this->db->where(self::$AID, $uid);
        $this->db->update(self::$TABLE, $input);
    }

    public function data_exist($uid)
    {
        $result = $this->db->get_where(self::$TABLE, array(self::$UID => $uid));
        $result = $result->result();

        return ($result > 0) ? true: false;
    }
}