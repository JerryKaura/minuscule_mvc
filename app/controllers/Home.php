<?php

class Home extends Controller {
    public function __construct($controller, $action){
        parent::__construct($controller, $action);
    }

    public function indexAction(){
        $db = DB::getInstance();
        $sql = "SELECT * FROM contacts";
        $contactsQ = $db->query($sql);
        dnd($db);
        $this->view->render('home/index');
    }
}