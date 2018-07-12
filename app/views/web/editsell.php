<!DOCTYPE html>
<head>
    <title>Edit Sell</title>
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
                            Edit Product sell's Information
                        </header>
                        <div class="panel-body">
                            <div class="position-center">
                                <form role="form">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Customer Name</label>
                                        <input type="text" class="form-control"  placeholder="Customer Name">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Product Name</label>
                                        <input type="text" class="form-control"  placeholder="Product Name">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Quantity</label>
                                        <input type="number" class="form-control"  placeholder="Quantity product">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Price</label>
                                        <input type="number" class="form-control"  placeholder="Price">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Total Price</label>
                                        <input type="number" class="form-control"  placeholder="Total Price">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Instant Pay</label>
                                        <input type="number" class="form-control"  placeholder="Instant Pay">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Pay Due</label>
                                        <input type="number" class="form-control"  placeholder="Pay Due">
                                    </div>
                                    <div class="button_center_class">
                                        <button type="submit" class="btn btn-info ">Add Sell's Information</button>
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
