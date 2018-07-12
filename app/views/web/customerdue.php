<!DOCTYPE html>
<head>
    <title>Customer Due</title>
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
        <?php $page="customerdue";
        include "app/views/web/LeftSideBar/leftside.php"
        ?>
        <!-- sidebar menu end-->
    </div>
</aside>
<!--sidebar end-->

<!--main content start-->
<section id="main-content">
    <section class="wrapper">
        <div class="table-agile-info">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Customer due Information
                </div>
                <div>
                    <table class="table">
                        <thead>
                        <tr>
                            <th >Customer Name</th>
                            <th>Product Name</th>
                            <th>Quantity</th>
                            <th>Price</th>
                            <th>Total Price</th>
                            <th>Instant Pay</th>
                            <th>Payment Due</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr data-expanded="true">
                            <td>Mrinal</td>
                            <td>Biscuit</td>
                            <td>2</td>
                            <td>200</td>
                            <td>100</td>
                            <td>100</td>
                            <td>Edit</td>
                            <td title="Edit"><a href=""><i class="fa fa-edit" style="font-size:24px"></i></a></td>
                        </tr>
                        <tr data-expanded="true">
                            <td>Mrinal</td>
                            <td>Biscuit</td>
                            <td>2</td>
                            <td>200</td>
                            <td>100</td>
                            <td>100</td>
                            <td>Edit</td>
                            <td title="Edit"><a href=""><i class="fa fa-edit" style="font-size:24px"></i></a></td>
                        </tr> <tr data-expanded="true">
                            <td>Mrinal</td>
                            <td>Biscuit</td>
                            <td>2</td>
                            <td>200</td>
                            <td>100</td>
                            <td>100</td>
                            <td>Edit</td>
                            <td title="Edit"><a href=""><i class="fa fa-edit" style="font-size:24px"></i></a></td>
                        </tr> <tr data-expanded="true">
                            <td>Mrinal</td>
                            <td>Biscuit</td>
                            <td>2</td>
                            <td>200</td>
                            <td>100</td>
                            <td>100</td>
                            <td>Edit</td>
                            <td title="Edit"><a href=""><i class="fa fa-edit" style="font-size:24px"></i></a></td>
                        </tr>
                        <tr data-expanded="true">
                            <td>Mrinal</td>
                            <td>Biscuit</td>
                            <td>2</td>
                            <td>200</td>
                            <td>100</td>
                            <td>100</td>
                            <td>Edit</td>
                            <td title="Edit"><a href=""><i class="fa fa-edit" style="font-size:24px"></i></a></td>
                        </tr>
                        <tr data-expanded="true">
                            <td>Mrinal</td>
                            <td>Biscuit</td>
                            <td>2</td>
                            <td>200</td>
                            <td>100</td>
                            <td>100</td>
                            <td>Edit</td>
                            <td title="Edit"><a href=""><i class="fa fa-edit" style="font-size:24px"></i></a></td>
                        </tr>
                        <tr data-expanded="true">
                            <td>Mrinal</td>
                            <td>Biscuit</td>
                            <td>2</td>
                            <td>200</td>
                            <td>100</td>
                            <td>100</td>
                            <td>Edit</td>
                            <td title="Edit"><a href=""><i class="fa fa-edit" style="font-size:24px"></i></a></td>
                        </tr>
                        <tr data-expanded="true">
                            <td>Mrinal</td>
                            <td>Biscuit</td>
                            <td>2</td>
                            <td>200</td>
                            <td>100</td>
                            <td>100</td>
                            <td>Edit</td>
                            <td title="Edit"><a href=""><i class="fa fa-edit" style="font-size:24px"></i></a></td>
                        </tr>
                        <tr data-expanded="true">
                            <td>Mrinal</td>
                            <td>Biscuit</td>
                            <td>2</td>
                            <td>200</td>
                            <td>100</td>
                            <td>100</td>
                            <td>Edit</td>
                            <td title="Edit"><a href=""><i class="fa fa-edit" style="font-size:24px"></i></a></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>


        <?php include "app/views/web/footer/footer.php";?>
        <!--main content end-->
    </section>
    <?php include "app/views/web/footer/Jsfile.php";?>
</body>
</html>
