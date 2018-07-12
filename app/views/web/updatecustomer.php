<!DOCTYPE html>
<head>
    <title>Edit Customer</title>
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
        <?php
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
                            Update Customer Information
                        </header>
                        <div class="panel-body">
                            <div class="position-center">
                                <?php foreach($data['customerById'] as $value) {?>
                                <form role="form" method="post" action="<?php echo BASE_URL ; ?>Customer/updateCustomerInfo/<?php echo $value['id'];?>">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Customer Name</label>
                                        <input type="text" class="form-control" name="customer_name"  placeholder="Customer Name" value="<?php echo $value['customer_name'];?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Phone Number</label>
                                        <input type="text" class="form-control" name="customer_mobile"  placeholder="Product Name" value="<?php echo $value['customer_mobile'];?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Email</label>
                                        <input type="email" class="form-control" name="customer_email"  placeholder="Quantity product" value="<?php echo $value['customer_email'];?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Address</label>
                                        <input type="text" class="form-control" name="customer_address"  placeholder="Price" value="<?php echo $value['customer_address'];?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Gender</label>
                                        <label class="radio-inline">
                                            <input type="radio" name="customer_gender"  <?php if($value['customer_gender']=='Male'){echo 'checked';}?> >Male
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="customer_gender" <?php if($value['customer_gender']=='Female'){echo 'checked';}?>>Female
                                        </label>
                                    </div>
                                    <div class="button_center_class">
                                        <button type="submit" class="btn btn-info ">Update Customer Information</button>
                                    </div>
                                </form>
                                <?php } ?>
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
