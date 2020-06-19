<?php
namespace App\Controller;
 
use App\Controller\AppController;
 
class PersonsController extends AppController
 {
  public function index()
  {
      $this->set('persons', $this->Persons->find('all'));
  }

  public function add()
    {
        if ($this->request->is('post')) {
            $person = $this->Persons->newEntity();
            $person = $this->Persons->patchEntity($person, $this->request->data);
            if ($this->Persons->save($person)) {
                return $this->redirect(['action' => 'index']);
            }
        }
    }

    public function edit($id = null)
    {
        $person = $this->Persons->get($id);
        if ($this->request->is(['post', 'put'])) {
            $person = $this->Persons->patchEntity($person, $this->request->data);
            if ($this->Persons->save($person)) {
                return $this->redirect(['action' => 'index']);
            }
        } else {
            $this->set('person', $person);
        }
    }

    public function delete($id = null)
    {
        $person = $this->Persons->get($id);
        if ($this->request->is(['post', 'put'])) {
            if ($this->Persons->delete($person)) {
                return $this->redirect(['action' => 'index']);
            }
        } else {
            $this->set('person', $person);
        }
    }

    public function find() {
        $persons = [];
        if ($this->request->is('post')) {
            $find = $this->request->data['find'];
            $query = $this->Persons->find();
            $exp = $query->newExpr();
            $fnc = function($exp, $f) {
                return $exp
                    ->isNotNull('name')
                    ->isNotNull('mail')
                    ->gt('age',0)
                    ->in('name', explode(',',$f));
            };
            $persons = $query->where($fnc($exp, $find));
        }
        $this->set('persons', $persons);
        $this->set('msg', null);
    }
}
