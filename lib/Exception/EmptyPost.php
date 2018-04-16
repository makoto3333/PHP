<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 2018/03/26
 * Time: 13:50
 */
namespace MyApp\Exception;

class EmptyPost extends  \Exception{
    protected $message = 'Please Input Email an Password!';

}