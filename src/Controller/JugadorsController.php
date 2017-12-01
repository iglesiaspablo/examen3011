<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Jugadors Controller
 *
 * @property \App\Model\Table\JugadorsTable $Jugadors
 *
 * @method \App\Model\Entity\Jugador[] paginate($object = null, array $settings = [])
 */
class JugadorsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Equipos']
        ];
        $jugadors = $this->paginate($this->Jugadors);

        $this->set(compact('jugadors'));
        $this->set('_serialize', ['jugadors']);
    }

     public function index()
    {
        $this->paginate = [
            'contain' => ['Equipos']
        ];
        $jugadors = $this->paginate($this->Jugadors);

        $this->set(compact('jugadors'));
        $this->set('_serialize', ['jugadors']);
    }
    
     public function jugadordeequipo()
             
    {
        $this->paginate = [
            'contain' => ['Equipos']

        ];
        $jugadors = $this->paginate($this->Jugadors);
if ($this->request->is('post')) {
            $jugadors = $this->jugadors->patchEntity($jugadors, $this->request->getData());    
            $jugadors->esta_sancionado = "0";
        $this->set(compact('jugadors'));
        $this->set('_serialize', ['jugadors']);
    }
    /**
     * View method
     *
     * @param string|null $id Jugador id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $jugador = $this->Jugadors->get($id, [
            'contain' => ['Equipos']
        ]);

        $this->set('jugador', $jugador);
        $this->set('_serialize', ['jugador']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $jugador = $this->Jugadors->newEntity();
        if ($this->request->is('post')) {
            $jugador = $this->Jugadors->patchEntity($jugador, $this->request->getData());
            if ($this->Jugadors->save($jugador)) {
                $this->Flash->success(__('The jugador has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The jugador could not be saved. Please, try again.'));
        }
        $equipos = $this->Jugadors->Equipos->find('list', ['limit' => 200]);
        $this->set(compact('jugador', 'equipos'));
        $this->set('_serialize', ['jugador']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Jugador id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $jugador = $this->Jugadors->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $jugador = $this->Jugadors->patchEntity($jugador, $this->request->getData());
            if ($this->Jugadors->save($jugador)) {
                $this->Flash->success(__('The jugador has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The jugador could not be saved. Please, try again.'));
        }
        $equipos = $this->Jugadors->Equipos->find('list', ['limit' => 200]);
        $this->set(compact('jugador', 'equipos'));
        $this->set('_serialize', ['jugador']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Jugador id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $jugador = $this->Jugadors->get($id);
        if ($this->Jugadors->delete($jugador)) {
            $this->Flash->success(__('The jugador has been deleted.'));
        } else {
            $this->Flash->error(__('The jugador could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
