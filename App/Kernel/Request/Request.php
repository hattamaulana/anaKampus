<?php  namespace App\Kernel\Request;

/*
| -----------------------------
| Request Proccessor
| Directory App/Kernel/Request
| -----------------------------
*/

use App\Kernel\Request\Interfaces\RequestInterface;

class Request implements RequestInterface 
{
  public function __construct() 
  {
    $this->bootstrapSelf();
  }

  /**
   * Copy All atribut in object Server
   *  To became atribut for this object
   */
  private function bootstrapSelf() 
  {
    foreach($_SERVER as $key => $value) 
    {
      $this->{$this->toCamelCase($key)} = $value;
    }
  }
  
  private function toCamelCase($string) 
  {
    $result = strtolower($string);
        
    preg_match_all('/_[a-z]/', $result, $matches);
    foreach($matches[0] as $match) {
        $c = str_replace('_', '', strtoupper($match));
        $result = str_replace($match, $c, $result);
    }

    return $result;
  }

  /**
   * Get params Request
   * 
   * @return Assosiative_Array
   */
  public function getBody() {
    if($this->requestMethod === "GET") {
      return;
    }

    if ($this->requestMethod == "POST") {
      $body = array();
      foreach($_POST as $key => $value) {
        $body[$key] = filter_input(INPUT_POST, $key, FILTER_SANITIZE_SPECIAL_CHARS);
      }
      
      return $body;
    }
  }
}
