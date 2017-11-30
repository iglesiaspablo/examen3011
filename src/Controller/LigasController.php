<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Ligas Controller
 *
 * @property \App\Model\Table\LigasTable $Ligas
 *
 * @method \App\Model\Entity\Liga[] paginate($object = null, array $settings = [])
 */
class LigasController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $ligas = $this->paginate($this->Ligas);

        $this->set(compact('ligas'));
        $this->set('_serialize', ['ligas']);
    }

    /**
     * View method
     *
     * @param string|null $id Liga id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $liga = $this->Ligas->get($id, [
            'contain' => ['Equipos']
        ]);

        $this->set('liga', $liga);
        $this->set('_serialize', ['liga']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $liga = $this->Ligas->newEntity();
        if ($this->request->is('post')) {
            $liga = $this->Ligas->patchEntity($liga, $this->request->getData());
            if ($this->Ligas->save($liga)) {
                $this->Flash->success(__('The liga has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The liga could not be saved. Please, try again.'));
        }
        $this->set(compact('liga'));
        $this->set('_serialize', ['liga']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Liga id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $liga = $this->Ligas->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $liga = $this->Ligas->patchEntity($liga, $this->request->getData());
            if ($this->Ligas->save($liga)) {
                $this->Flash->success(__('The liga has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The liga could not be saved. Please, try again.'));
        }
        $this->set(compact('liga'));
        $this->set('_serialize', ['liga']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Liga id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $liga = $this->Ligas->get($id);
        if ($this->Ligas->delete($liga)) {
            $this->Flash->success(__('The liga has been deleted.'));
        } else {
            $this->Flash->error(__('The liga could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
