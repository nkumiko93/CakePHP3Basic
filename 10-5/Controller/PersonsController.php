<?php
namespace App\Controller;
 
use App\Controller\AppController;
use Cake\Datasource\ConnectionManager;
use Cake\Validation\Validator;
 
class PersonsController extends AppController
 {
    public $paginate = [
        'limit' => 5,
        'order' => [
            'Persons.name' => 'asc'
        ]
    ];

    public $helpers = [
        'Paginator' => ['templates' => 
            'paginator-templates']
    ];

    public function initialize()
    {
        parent::initialize();
        $this->loadComponent('Paginator');
    }

    public function index()
    {
        $this->set('persons', $this->paginate());
    }

    public function add()
    {
        $person = $this->Persons->newEntity();
        $this->set('person', $person);
        if ($this->request->is('post')) {
            $validator = new Validator();
            $validator->add(
                'age','comparison',['rule' =>['comparison','>',20]]
            );
            $errors = $validator->errors($this->request->data);
            if (!empty($errors)){
                $this->Flash->error('comparison error');
            } else {
                $person = $this->Persons->patchEntity($person, $this->request->data);
                if ($this->Persons->save($person)) {
                    return $this->redirect(['action' => 'index']);
                }
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
            $connection = ConnectionManager::get('default');
            $query = 'select * from persons where ' . $find;
            $persons = $connection->query($query)->fetchAll('assoc');
        }
        $this->set('persons', $persons);
    }
}
