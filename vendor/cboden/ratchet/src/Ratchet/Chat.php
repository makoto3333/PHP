<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 2018/04/27
 * Time: 11:01
 */
namespace Ratchet;
use Ratchet\MessageComponentInterface;
use Ratchet\ConnectionInterface;
use Ratchet\ChatDBManager;
use Cake\Datasource\ConnectionManager;

class Chat implements MessageComponentInterface {
    protected $clients;
    protected $ChatDB;
    public function __construct() {
        $this->clients = new \SplObjectStorage;
        $this->ChatDB = new ChatDBManager();
    }

    public function onOpen(ConnectionInterface $conn) {
// Store the new connection to send messages to later
        $this->clients->attach($conn);
        echo "New connection! ({$conn->resourceId})\n";

        $allMsg = $this->ChatDB->getAllMessage();
        foreach($allMsg as $msg){
            foreach ($this->clients as $client) {
                $client->send($msg[3]);
            }
        }
    }

    public function onMessage(ConnectionInterface $from, $msg) {
        //$ChatDBManager::addMessage($msg, $from);


        $this->ChatDB->addMessage($from, $msg );

        $numRecv = count($this->clients) - 1;
        echo sprintf('Connection %d sending message "%s" to %d other connection%s' . "\n"
            , $from->resourceId, $msg, $numRecv, $numRecv == 1 ? '' : 's');

        foreach ($this->clients as $client) {
            if ($from->resourceId !== $client->resourceId) {
// The sender is not the receiver, send to each client connected
                $client->send($msg);
            }
        }
    }

    public function onClose(ConnectionInterface $conn) {
// The connection is closed, remove it, as we can no longer send it messages
        $this->clients->detach($conn);

        echo "Connection {$conn->resourceId} has disconnected\n";
    }

    public function onError(ConnectionInterface $conn, \Exception $e) {
        echo "An error has occurred: {$e->getMessage()}\n";

        $conn->close();
    }

}