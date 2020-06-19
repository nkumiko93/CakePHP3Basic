<?php
namespace App\Controller;

use App\Controller\AppController;

class HeloController extends AppController
{
    public function index()
    {
      $this->set('message', 'Hello! this is sample page. ;-)');
    }
}
