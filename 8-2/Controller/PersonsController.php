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
        $this->set('msg', null);
        $persons = [];
        if ($this->request->is('post')) {
            $find = $this->request->data['find'];
            $persons = $this->Persons->find()
               ->where([
                   'OR'=>[['name like ' => '%' . $find . '%'],['mail like ' => '%' . $find . '%']],
                ]);
// orWhereが3.5以降は日推奨とのことなので、↑はorWhere未使用バージョン
//                ->where(["name like " => '%' . $find . '%'])
//                    ->orWhere(["mail like " => '%' . $find . '%']);
            }
        $this->set('persons', $persons);
    }
}
