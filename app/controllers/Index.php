<?php

class Index extends DController
{
	function __construct()
	{
		parent::__construct();
	}

	public function home(){
		
		// $tablePost="post";
		// $tableCat="category";
		// $data=array();
		// $catModel=$this->load->model("CatModel");
		// $data['catlist']=$catModel->catList($tableCat);
		// $this->load->view("header",$data);
		// $postModel=$this->load->model("PostModel");
		// $data['mainpage']=$postModel->getAllPost($tablePost);
		// $this->load->view("content",$data);
		// $data['latestpost']=$postModel->latestPost($tablePost);
		// $this->load->view("sidebar",$data);
		$this->load->view("web/index");
		//$this->load->view("lp");
		//$this->load->view("lp");
		//echo "string";
	}
	public function hmm(){
		$this->load->view("web/404");
	}

	public function addcustomer(){
		$this->load->view("web/AddCustomer");	
	}

	public function postDetails($id){
		$tablePost="post";
		$tableCat="category";
		$catModel=$this->load->model("CatModel");
		$data['catlist']=$catModel->catList($tableCat);
		$this->load->view("header",$data);
		$postModel=$this->load->model("PostModel");
		$data['mainpage']=$postModel->postById($tablePost,$tableCat,$id);
		$this->load->view("details",$data);
		$data['latestpost']=$postModel->latestPost($tablePost);
		$this->load->view("sidebar",$data);
		$this->load->view("footer");
	}
	public function postByCat($id){
		
		$tablePost="post";
		$tableCat="category";
		$catModel=$this->load->model("CatModel");
		$data['catlist']=$catModel->catList($tableCat);
		$this->load->view("header",$data);
		$postModel=$this->load->model("PostModel");
		$data['postByCat']=$postModel->postByCat($tablePost,$tableCat,$id);
		$this->load->view("postByCat",$data);
		$data['latestpost']=$postModel->latestPost($tablePost);
		$this->load->view("sidebar",$data);
		$this->load->view("footer");
	}

	public function search(){
		$tablePost="post";
		$tableCat="category";
		$keyword=$_POST['keyword'];
		$cat=$_POST['cat'];
		$catModel=$this->load->model("CatModel");
		$data['catlist']=$catModel->catList($tableCat);
		$this->load->view("header",$data);
		$postModel=$this->load->model("PostModel");
		$data['sresult']=$postModel->getpostBySearch($tablePost,$keyword,$cat);
		$this->load->view("sresult",$data);
		$data['latestpost']=$postModel->latestPost($tablePost);
		$this->load->view("sidebar",$data);
		$this->load->view("footer");	
	}

}
?>