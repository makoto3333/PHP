<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 2018/04/18
 * Time: 21:18
 */

namespace App\Form;

use Cake\Form\Form;
use Cake\Form\Schema;
use Cake\Validation\Validator;

class ContactForm extends Form{
    public $sex = array('male'=>'男性','female'=>'女性');
    public $matter = array(
        'matter1'=>'求人',
        'matter2'=>'予約',
        'matter3'=>'その他',
    );

    protected function _buildSchema(Schema $schema)
    {
        return $schema
            ->addField('user_id', 'string')
            ->addField('password', ['type' => 'password']);
    }

    protected function _buildValidator(Validator $validator)
    {
        // バリデーションはここに書きます。
        return $validator
            ->notEmpty('user_id')
            ->add('user_id', 'length', [
                'rule' => ['minLength', 10],
                'message' => '最低でも10文字のはずです'])
            ->notEmpty('password');
    }

    public function _execute(array $data)
    {
        return true;
    }

    public function getMatter(){
        return $this->matter;
    }

}