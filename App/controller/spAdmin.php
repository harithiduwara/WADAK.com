<?php 

class spAdmin extends wadak{
    function __construct()
    {
        parent::__construct();
    }

    function servicepro(){
        $this->view->allrecords = $this->model->getAllrecords();
        $this->view->render('spAdmin/servicepro');
    }
    
    function view_sp(){
        $data = $_GET;

        if($data['id']=='')
        {
            $this->view->pick='';
            $this->view->data=$data;
        }
        else{
            $this->view->pick=$data['id'];
            $this->view->content=$this->model->viewOnerecord($data['id']);

        }
        $this->view->render('spAdmin/view_sp');
    }
}