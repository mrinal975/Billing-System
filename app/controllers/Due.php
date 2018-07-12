<?php

class Due extends DController
{

    public function __construct()
    {
        parent::__construct();
    }
    public function shopdue(){
        $this->load->view('web\shopdue');
    }
    public function customerdue(){
        $this->load->view('web\customerdue');
    }
}
?>