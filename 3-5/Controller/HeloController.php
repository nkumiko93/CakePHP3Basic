<?php
namespace App\Controller;

use App\Controller\AppController;

class HeloController extends AppController
{
    public function index()
    {
        $str = $this->request->data('text1');

        if ($str != null){
            $str = $this->request->data['text1'];
            $this->set('message', 'you typed:' . $str);
        } else {
            $this->set('message','please type...');
        }
    }
}
