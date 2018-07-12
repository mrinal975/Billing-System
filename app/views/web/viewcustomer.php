<!DOCTYPE html>
<head>
    <title>View Customer</title>
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
        <?php $page="viewcustomer";
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
                    View Sell's Information
                </div>
                <h4 class="text-center baba">
                    <?php
                      if (!empty($_GET['msg'])) {
                       $msg=unserialize(urldecode($_GET['msg']));
                       foreach ($msg as $key => $value) {
                         echo "<span style='color:blue; font-weight:bold margin-top:8px;'>".$value."</span>";
                          }
                      }
                      ?>
                </h4>
                <div>
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Customer Name</th>
                            <th>Phone Number</th>
                            <th>Email</th>
                            <th>Address</th>
                            <th>Gender</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach($data['allcustomer'] as $key => $value) {?>
                        <tr data-expanded="true">
                            <td><?php echo $value['customer_name'];?></td>
                            <td><?php echo $value['customer_mobile'];?></td>
                            <td><?php echo $value['customer_email'];?></td>
                            <td><?php echo $value['customer_address'];?></td>
                            <td><?php echo $value['customer_gender'];?></td>
                            <td title="Edit"><a href="<?php echo BASE_URL ; ?>Customer/editcustomer/<?php echo $value['id'];?>"><i class="fa fa-edit" style="font-size:24px"></i></a></td>
                        </tr>
                        <?php }?>
                        </tbody>
                    </table>
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
