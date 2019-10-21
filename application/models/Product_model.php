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

    public function insert($input = array())
    {
        $this->db->insert(self::$TABLE, $input);
    }
}