<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 2018/03/26
 * Time: 13:50
 */
namespace MyApp\Exception;

class InvalidPassword extends  \Exception{
    protected $message = 'Invalid Password!';

}