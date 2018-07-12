<?php

class Product extends DController
{

    public function __construct()
    {
        parent::__construct();
    }

    public function addproduct(){
        $data=array();
        $model=$this->load->model("CatModel");
        $table="category";
        $data['catlist']=$model->catList($table);
        $this->load->view('web\addproduct',$data);
    }

//
    public function insertproduct(){

        $input=$this->load->validate("DForm");
        $input->post('category_id')
                ->isempty();
        $input->post('product_name')
                ->isempty()
                ->length(0,350);
        $input->post('product_details')
                ->isempty()
                ->length(0,350);
        if ($input->issubmit()) {
            $table="product";
            $category_id=$_POST['category_id'];
            $product_name=$_POST['product_name'];
            $product_details=$_POST['product_details'];
            $data=array(
                'category_id'=>$category_id,
                'product_name'=>$product_name,
                'product_details'=>$product_details,
                );
            $ProductModel=$this->load->model('ProductModel');
            $result=$ProductModel->insertCat($table,$data);
            $mdata=array();
        if ($result==1) {
            $mdata['msg']="Product added successfully ......";
            
        }else{
            $mdata['msg']="Product not added";
        }
        $url=BASE_URL."Product/addproduct?msg=".urlencode(serialize($mdata));
        header("Location:$url");
        }
        else{
        $data["productErrors"]=$input->error;
        $url=BASE_URL."Product/addproduct?errormsg=".urlencode(serialize($data));
        header("Location:$url");
        $this->load->view('web/addproduct',$data);
     }

    }

    public function viewproduct(){
        $tableCat="category";
        $tablepost="product";
        $data=array();
        $ProductModel=$this->load->model("ProductModel");
        $data['proall']=$ProductModel->getAllProduct($tablepost);
        $CatModel=$this->load->model("CatModel");
        $data['allcat']=$CatModel->catList($tableCat);

        $this->load->view('web\viewproduct',$data);
    }

    public function editproduct($id=null){

        $CatModel=$this->load->model("CatModel");
        $data=array();
        $table="category";
        $data['catlist']=$CatModel->catList($table);
        $productmodel=$this->load->model('ProductModel');
        $table="product";
        $data['editproduct']=$productmodel->productById($table,$id);
        $this->load->view('web\updateproduct',$data);
    }
    public function updateproduct($id=null){

        $category_id=$_POST['category_id'];
        $product_name=$_POST['product_name'];
        $product_details=$_POST['product_details'];
        $table="product";
        $cond="id=".$id;
        $data=array(
            'category_id'=>$category_id,
            'product_name'=>$product_name,
            'product_details'=>$product_details,
            );
        $ProductModel=$this->load->model('ProductModel');
        $result=$ProductModel->productUpdate($table,$data,$cond);

        $data=array();
        if ($result==1) {
            $data['msg']="Product updated successfully ......";
            
        }else{
            $data['msg']="Product not updated";
        }
        
        $url=BASE_URL."/Product/viewproduct?msg=".urlencode(serialize($data));
        header("Location:$url");
    }
}
?>