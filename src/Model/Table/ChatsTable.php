<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 2018/04/17
 * Time: 14:13
 */

namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

class ChatsTable extends Table
{
    public function initialize(array $config)
    {
        $this->addBehavior('Timestamp');
        $this->belongsTo('Posts');

    }

    public function validationDefault(Validator $validator)
    {
        $validator
            ->notEmpty('body')
            ->requirePresence('body');

        return $validator;
    }

}