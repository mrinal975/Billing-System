<?php

class Customer extends DController
{
    public function __construct()
    {
        parent::__construct();
    }
    public function addcustomer(){
        $this->load->view('web/addcustomer');
    }

        public function insertCustomerInfo(){
        $input=$this->load->validate("DForm");
        $input->post('customer_name')
                ->isempty();
        $input->post('customer_mobile')
                ->isempty()
                ->phn_validate();
        $input->post('customer_email')
                ->isempty()
                ->length(0,350);
        $input->post('customer_address')
                ->isempty()
                ->length(0,350);
        if (isset($_POST['customer_gender'])) {
            $input->post('customer_address')
                ->isempty();
            
        }
        if ($input->issubmit()) {
            $table="customer";
            $customer_name=$_POST['customer_name'];
            $customer_mobile=$_POST['customer_mobile'];
            $customer_email=$_POST['customer_email'];
            $customer_address=$_POST['customer_address'];
            $customer_gender=$_POST['customer_gender'];
            $data=array(
                'customer_name'=>$customer_name,
                'customer_mobile'=>$customer_mobile,
                'customer_email'=>$customer_email,
                'customer_address'=>$customer_address,
                'customer_gender'=>$customer_gender,
                );
            $CustomerModel=$this->load->model('CustomerModel');
            $result=$CustomerModel->insertCustomer($table,$data);
            $mdata=array();
        if ($result==1) {
            $mdata['msg']="Customer Information Added Successfully ......";
            
        }else{
            $mdata['msg']="Customer Information Not Added";
        }
        $url=BASE_URL."Customer/addcustomer?msg=".urlencode(serialize($mdata));
        header("Location:$url");
        }
        else{
        $data["CustomerErrors"]=$input->error;
        $this->load->view('web/addcustomer',$data);
     }

    }

    public function viewcustomer(){
        $data=array();
        $table="customer";
        $CustomerModel=$this->load->model('CustomerModel');
        $data['allcustomer']=$CustomerModel->getAllCustomer($table);
        $this->load->view('web/viewcustomer',$data);
    }

        public function editcustomer($id=null){
        $data=array();
        $customer=$this->load->model("CustomerModel");
        $data=array();
        $table="customer";
        $data['customerById']=$customer->customerById($table,$id);
        $this->load->view('web/updatecustomer',$data);
    }
    public function updateCustomerInfo($id=null){

        $customer_name=$_POST['customer_name'];
        $customer_mobile=$_POST['customer_mobile'];
        $customer_address=$_POST['customer_address'];
        $customer_email=$_POST['customer_email'];
        $customer_gender=$_POST['customer_gender'];
        $table="customer";
        $cond="id=".$id;
        $data=array(
            'customer_name'=>$customer_name,
            'customer_mobile'=>$customer_mobile,
            'customer_address'=>$customer_address,
            'customer_email'=>$customer_email,
            'customer_gender'=>$customer_gender,
            );
        $ProductModel=$this->load->model('CustomerModel');
        $result=$ProductModel->customerUpdate($table,$data,$cond);

        $data=array();
        if ($result==1) {
            $data['msg']="Customer Information updated successfully ......";
            
        }else{
            $data['msg']="Customer Information not updated";
        }
        
        $url=BASE_URL."/Customer/viewcustomer?msg=".urlencode(serialize($data));
        header("Location:$url");
    }


}
?>