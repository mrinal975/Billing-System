<?php

class Category extends DController{
	public function __construct(){
		parent::__construct();
	}
	
	public function addcategory(){
		$this->load->view("web/addcategory");
	}

	public function insertcategory(){

		$input=$this->load->validate("DForm");
		$input->post('category_name')
				->isempty()
				->length(0,350);
		if ($input->issubmit()) {
		$table="category";
		$category_name=$_POST['category_name'];
		$data=array(
			'category_name'=>$category_name,
			);
		$CatModel=$this->load->model('CatModel');
		$result=$CatModel->insertCat($table,$data);
		$mdata=array();
		if ($result==1) {
			$mdata['msg']="Category added successfully ......";
			
		}else{
			$mdata['msg']="Category not added";
		}
		$url=BASE_URL."Category/addcategory?msg=".urlencode(serialize($mdata));
		header("Location:$url");
		}
		else{
		$data["CatErrors"]=$input->error;
	 	$this->load->view('web/addcategory',$data);
	}

	}
	

	public function viewcategory(){
		$data=array();
		$model=$this->load->model("CatModel");
		$table="category";
		$data['catlist']=$model->catList($table);
		$this->load->view("web/viewcategory",$data);
	}

	public function editcategory($id=null){
	 	$model=$this->load->model('CatModel');
		$table="category";
		$data=array();
		$data['editcat']=$model->catById($table,$id);
	 	$this->load->view('web/updatecategory',$data);
	}
	public function updatecategory($id=null){

		$category_name=$_POST['category_name'];
		$table="category";
		$cond="id=".$id;
		$data=array(
			'category_name'=>$category_name,
			);
		$CatModel=$this->load->model('CatModel');
		$result=$CatModel->productUpdate($table,$data,$cond);

		$data=array();
		if ($result==1) {
			$data['msg']="Category updated successfully ......";
			
		}else{
			$data['msg']="Category not updated";
		}
		
		$url=BASE_URL."/Category/viewcategory?msg=".urlencode(serialize($data));
		header("Location:$url");
	}


}
?>