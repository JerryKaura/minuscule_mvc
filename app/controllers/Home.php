<?php

class Home extends Controller {
    public function __construct($controller, $action){
        parent::__construct($controller, $action);
    }

    public function indexAction(){
        $db = DB::getInstance();
        $fields = [
            'fname' => 'Kaura',
            'lname' => 'Jeka',
            'email' => 'kaura@gmail.com'
        ];
        $contactsQ = $db->insert('contacts', $fields);
        $this->view->render('home/index');
    }
}