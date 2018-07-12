<?php

class Sell extends DController
{

    public function __construct()
    {
        parent::__construct();
    }
    public function addsell(){
        $this->load->view('web\addsell');
    }
    public function viewsell(){
        $this->load->view('web\viewsell');
    }
    public function editsell(){
        $this->load->view('web\editsell');
    }
}
?>