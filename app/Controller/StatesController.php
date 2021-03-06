<?php

App::uses('AppController', 'Controller');

/**
 * States Controller
 *
 * @property State $State
 * @property PaginatorComponent $Paginator
 */
class StatesController extends AppController {

    /**
     * Components
     *
     * @var array
     */
    public $components = array('Paginator', 'RequestHandler');

    /**
     * index method
     *
     * @return void
     */
    public function index() {
        $this->State->recursive = 0;
        $this->set('states', $this->Paginator->paginate());
    }

    /**
     * view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function view($id = null) {
        if (!$this->State->exists($id)) {
            throw new NotFoundException(__('Invalid state'));
        }
        $options = array('conditions' => array('State.' . $this->State->primaryKey => $id));
        $this->set('state', $this->State->find('first', $options));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add() {
        if ($this->request->is('post')) {
            debug("Entre post");
            $this->State->create();
            if ($this->State->save($this->request->data)) {
                $this->Session->setFlash(__('The state has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The state could not be saved. Please, try again.'));
            }
        }
        $countries = $this->State->Country->find('list', array(
            "fields" => array(
                "Country.id",
                "Country.name"
            )
        ));
        $this->set(compact('countries'));
    }

    /**
     * edit method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function edit($id = null) {
        if (!$this->State->exists($id)) {
            throw new NotFoundException(__('Invalid state'));
        }
        if ($this->request->is(array('post', 'put'))) {
            try {
                if ($this->State->save($this->request->data)) {
                    $this->Session->setFlash('Departamento creado con exito', 'good');
                    return $this->redirect(array('action' => 'index'));
                } else {
                    $this->Session->setFlash('Error al registrar el departamento', 'error');
                }
            } catch (Exception $ex) {
                $error2 = $ex->getCode();
                if ($error2 == '23000') {
                    $this->Session->setFlash('Error ya hay un departamento con el mismo nombre en la base de datos', 'error');
                }
            }
        } else {
            $options = array('conditions' => array('State.' . $this->State->primaryKey => $id));
            $this->request->data = $this->State->find('first', $options);
        }
        $countries = $this->State->Country->find('list', array(
            "fields" => array(
                "Country.id",
                "Country.name"
            )
        ));
        $this->set(compact('countries'));
    }

    /**
     * delete method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function delete($id = null) {
        $this->State->id = $id;
        if (!$this->State->exists()) {
            throw new NotFoundException(__('Invalid state'));
        }
        $this->request->allowMethod('post', 'delete');
        if ($this->State->delete()) {
            $this->Session->setFlash(__('The state has been deleted.'));
        } else {
            $this->Session->setFlash(__('The state could not be deleted. Please, try again.'));
        }
        return $this->redirect(array('action' => 'index'));
    }

    public function getStatesByCountry() {
        $this->layout = "webservices";
        $country_id = $this->request->data["country_id"];
        $options = array(
            "conditions" => array(
                "State.country_id" => $country_id
            ),
            "fields" => array(
                "State.id",
                "State.name"
            ),
            "recursive" => 0
        );
        $states = $this->State->find("all", $options);
        $this->set(
                array(
                    "datos" => $states,
                    "_serialize" => array("datos")
                )
        );
    }

}
