<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 2018/03/26
 * Time: 13:50
 */
namespace MyApp\Exception;

class InvalidEmail extends  \Exception{
    protected $message = 'Invalid Email!';

}