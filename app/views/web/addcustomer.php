<!DOCTYPE html>
<head>
    <title>Add Customer</title>
<?php include "app/views/web/header/StyleJs.php" ?>
</head>
<body>
<!--header start-->
<?php
include "app/views/web/header/header.php"
?>
<!--header end-->
<!--sidebar start-->
<aside>
    <div id="sidebar" class="nav-collapse">
        <!-- sidebar menu start-->
        <?php $page="addcustomer";
        include "app/views/web/LeftSideBar/leftside.php"
        ?>
        <!-- sidebar menu end-->
    </div>
</aside>

<!--sidebar end-->

<!--main content start-->
<section id="main-content">
    <section class="wrapper">
        <div class="form-w3layouts">
            <div class="row">
                <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Add Customer
                        </header>
                        <h4 class="text-center baba">
                   <?php

                    //Customer add confirmation message

                  if (!empty($_GET['msg'])) {
                   $msg=unserialize(urldecode($_GET['msg']));
                   foreach ($msg as $key => $value) {
                     echo "<span style='color:blue; font-weight:bold; '>".$value."</span>";
                      }
                  }
                  ?>

        <?php
            if (isset($data['CustomerErrors'])) {
              echo "<div style='color:red;border:1px solid red; padding:6px 10px; margin:5px;'>";

                foreach ($data['CustomerErrors'] as $key=>$value) {
                 switch ($key) {
                   case 'customer_name':
                     foreach ($value as $val) {
                        echo " Customer name ".$val." <br/>";
                     }
                     break;
                     case 'customer_mobile':
                     foreach ($value as $val) {
                        echo "Customer mobile ".$val." <br/>";
                     }
                     break;
                     case 'customer_email':
                     foreach ($value as $val) {
                        echo "Customer email ".$val." <br/>";
                     }
                     break;
                     case 'customer_address':
                     foreach ($value as $val) {
                        echo "Customer address ".$val." <br/>";
                     }
                     break;
                     case 'customer_gender':
                     foreach ($value as $val) {
                        echo "Customer gender ".$val." <br/>";
                     }
                     break;
                 }
                }
                    
            echo "</div>";
            }
        ?>
                        </h4>
                        
                        <div class="panel-body">
                            <div class="position-center">
                                <form role="form" action="<?php echo BASE_URL ; ?>Customer/insertCustomerInfo" method="post">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Customer Name</label>
                                        <input type="text" class="form-control"  placeholder="Customer Name" name="customer_name">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Mobile Number</label>
                                        <input type="text" class="form-control"  placeholder="Product Name" name="customer_mobile">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Email</label>
                                        <input type="email" class="form-control"  placeholder="Quantity product" name="customer_email">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Address</label>
                                        <input type="text" class="form-control"  placeholder="Price" name="customer_address">
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Gender</label>
                                        <label class="radio-inline">
                                            <input type="radio" name="customer_gender" value="Male">Male
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="customer_gender" value="Female">Female
                                        </label>
                                    </div>
                                    <div class="button_center_class">
                                        <button type="submit" class="btn btn-info ">Create New Customer</button>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </section>

                </div>
            </div>
        </div>


        <?php
        include "app/views/web/footer/footer.php";
        ?>
        <!--main content end-->
    </section>
    <?php include "app/views/web/footer/Jsfile.php";?>
</body>
</html>
