<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 2018/04/17
 * Time: 14:27
 */

namespace App\Controller;

use App\Form\ContactForm;
use Cake\Mailer\Email;

class ContactsController extends AppController
{

    public function form()
    {
        $contact = new ContactForm();

        if($this->request->is(['post'])&& null!==$this->request->getData('confirm')) {
            if ($contact->execute($this->request->getData())) {
                // 正常時に何か処理をする
                $session = $this->request->getSession();
                $session->write('data', $contact);
                $this->render('result');
                $this->request->getSession()->write('contactData',$this->request->getData());
            } else {
                $this->Flash->error('エラーがあります');
            }
        }elseif(null!==($this->request->getData('send'))){
            $this->sendMail($this->request->getSession()->read('contactData'));
            $this->render('finish');
        }elseif(null!==($this->request->getData('back'))){
            $this->data = $this->Session->read('data');
            $this->render();
        }
        $this->set('contact',$contact);
    }
     function sendMail($contactData){
        $email = new Email('default');
        $email->setFrom([$contactData['email'] => 'My PHP Site'])
            ->setTo('makoto.sato.climber@gmail.com')
            ->setSubject('問い合わせ-'.$contactData['matter'])
            ->send($contactData['body']);
     }
}