<?php namespace App\Kernel\Request\Interfaces;

/*
| -----------------------------
| Request Interface 
| -----------------------------
*/

interface RequestInterface {
  /**
   * The Request class must to have this function
   *  to get parameters from form user.
   */
  public function getBody();
}