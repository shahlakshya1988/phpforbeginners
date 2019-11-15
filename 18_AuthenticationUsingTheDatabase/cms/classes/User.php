<?php
/**
 *
 */
class User{
  /**
   *
   */
  public $id;
  /**
   *
   */
  public $username;
  /**
   *
   */
  public $password;



  /**
   * [authenticate description]
   * @return [type] [description]
   */
  public static function authenticate($username,$password){
    return $username == 'dave' && $password == '123';
  }
}
