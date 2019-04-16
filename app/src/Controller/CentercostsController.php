<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Centercosts Controller
 *
 * @property \App\Model\Table\CentercostsTable $Centercosts
 *
 * @method \App\Model\Entity\Centercost[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CentercostsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users']
        ];
        $centercosts = $this->paginate($this->Centercosts);

        $this->set(compact('centercosts'));
    }

    /**
     * View method
     *
     * @param string|null $id Centercost id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $centercost = $this->Centercosts->get($id, [
            'contain' => ['Users']
        ]);

        $this->set('centercost', $centercost);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $centercost = $this->Centercosts->newEntity();
        if ($this->request->is('post')) {
            $centercost = $this->Centercosts->patchEntity($centercost, $this->request->getData());
            if ($this->Centercosts->save($centercost)) {
                $this->Flash->success(__('The centercost has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The centercost could not be saved. Please, try again.'));
        }
        $users = $this->Centercosts->Users->find('list', ['limit' => 200]);
        $this->set(compact('centercost', 'users'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Centercost id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $centercost = $this->Centercosts->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $centercost = $this->Centercosts->patchEntity($centercost, $this->request->getData());
            if ($this->Centercosts->save($centercost)) {
                $this->Flash->success(__('The centercost has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The centercost could not be saved. Please, try again.'));
        }
        $users = $this->Centercosts->Users->find('list', ['limit' => 200]);
        $this->set(compact('centercost', 'users'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Centercost id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $centercost = $this->Centercosts->get($id);
        if ($this->Centercosts->delete($centercost)) {
            $this->Flash->success(__('The centercost has been deleted.'));
        } else {
            $this->Flash->error(__('The centercost could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
