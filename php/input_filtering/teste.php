<?php

class myValidator
{
  public function username($value)
  {
      return false;
    // return username or boolean false
  }
}

$myValidator = new myValidator;
$options = array('options' => array($myValidator, 'username'));
$username = filter_input(INPUT_GET, 'username', FILTER_CALLBACK, $options);
var_dump($username);