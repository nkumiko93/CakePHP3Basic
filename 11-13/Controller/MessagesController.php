<?php
namespace App\Controller;
 
use App\Controller\AppController;
use Cake\Datasource\ConnectionManager;
use Cake\Validation\Validator;
 
class MessagesController extends AppController
 {
/*
    public $paginate = [
        'limit' => 5,
        'order' => [
            'Messages.name' => 'asc'
        ]
    ];

    public $helpers = [
        'Paginator' => ['templates' => 
            'paginator-templates']
    ];
*/

    public function initialize()
    {
        parent::initialize();
        $this->loadComponent('Paginator');
    }

    public function index()
    {
        $this->paginate = [
            'contain' => ['Members']
        ];
        $this->set('messages', $this->paginate($this->Messages));
        $this->set('_serialize', ['messages']);
    }

    public function view($id = null)
    {
        $message = $this->Messages->get($id, [
            'contain' => ['Members']
        ]);
        $this->set('message', $message);
        $this->set('_serialize', ['message']);
    }

    public function add()
    {
        $message = $this->Messages->newEntity();
        if ($this->request->is('post')) {
            $message = $this->Messages->patchEntity($message, $this->request->data);
            if ($this->Messages->save($message)) {
                $this->Flash->success(__('The message has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The message could not be saved. Please, try again.'));
            }
        }
        $members = $this->Messages->Members->find('list', ['limit' => 200]);
        $this->set(compact('message', 'members'));
        $this->set('_serialize', ['message']);
    }

    public function edit($id = null)
    {
        $message = $this->Messages->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $message = $this->Messages->patchEntity($message, 
                $this->request->data);
            if ($this->Messages->save($message)) {
                $this->Flash->success(__('The message has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The message could not be saved. Please, try again.'));
            }
        }
        $members = $this->Messages->Members->find('list', ['limit' => 200]);
        $this->set(compact('message', 'members'));
        $this->set('_serialize', ['message']);
    }

    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $message = $this->Messages->get($id);
        if ($this->Messages->delete($message)) {
            $this->Flash->success(__('The message has been deleted.'));
        } else {
            $this->Flash->error(__('The message could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
