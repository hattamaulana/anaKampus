<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

function asset_user($path = '')
{
    return base_url()."assets/user/$path";
}

function asset_admin($path = '')
{
    return base_url(). "assets/admin/$path";
}