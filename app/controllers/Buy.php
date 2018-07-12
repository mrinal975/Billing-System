<?php

class Buy extends DController
{
    public function __construct()
    {
        parent::__construct();
    }
    public function addbuy(){
        $tableCat="category";
        $tablepost="product";
        $data=array();
        $ProductModel=$this->load->model("ProductModel");
        $data['allproduct']=$ProductModel->getAllProduct($tablepost);
        $CatModel=$this->load->model("CatModel");
        $data['allcat']=$CatModel->catList($tableCat);
        $this->load->view('web\addbuy',$data);
    }
    public function insertBuyProduct(){
        if (isset($_POST['product_category_id'])) {
            for($count = 0; $count < count($_POST["product_category_id"]); $count++)
            {   
                $product=$_POST["product_category_id"][$count];
            }
            //echo $quantity;
        }
           
    }
    public function viewbuy(){
        $this->load->view('web\viewbuy');
    }
    public function editbuy(){
        $this->load->view('web\editbuy');
    }

}
?>