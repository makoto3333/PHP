<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 2018/04/28
 * Time: 19:11
 */
namespace Ratchet; // これは必要
use Cake\Datasource\ConnectionManager;

class ChatDBManager {
    protected  $dsn = 'mysql://dbuser:48hfsAo2@localhost/chat_db';
    protected  $db;

    public function addMessage($user, $msg){
        $result=$this->db->insert('comments', ['room_id'=>1, 'user_id'=>1, 'message'=>$msg]);
   }

    public function getAllMessage(){
        $msg=$this->db->execute('SELECT * FROM comments')->fetchAll();
        return $msg;
    }

    public function addUser($user, $password){

    }

    public function __construct(){
        ConnectionManager::setConfig('chat', ['url' =>  $this->dsn]);
        $this->db = ConnectionManager::get('chat');
    }

}