<!DOCTYPE html>
<head>
    <title>View Category</title>
<?php include "app/views/web/header/StyleJs.php" ?></head>
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
        <?php $page="viewcategory";
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
                    View  Category
                </div>
                <h4 class="text-center">
                    <?php
                      if (!empty($_GET['msg'])) {
                       $msg=unserialize(urldecode($_GET['msg']));
                       foreach ($msg as $key => $value) {
                         echo "<span style='color:blue; font-weight:bold'>".$value."</span>";
                          }
                      }
                      ?>
                </h4>
                <div>
                    <table class="table">
                        <thead>
                        <tr><th class="text-center">Serial Number</th>
                            <th class="text-center">Category Name</th>
                            <th class="text-center">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                            $a=1;
                            foreach($data['catlist'] as $value) {
                        ?>
                        <tr data-expanded="true">
                            <td class="text-center">
                                <?php echo $a?> 
                            </td>
                            <td class="text-center">
                                <?php echo $value['category_name'];?> 
                            </td>
                            <td title="Edit" class="text-center"><a href="<?php echo BASE_URL;?>Category/editcategory/<?php echo $value['id'];?>"><i class="fa fa-edit" style="font-size:24px"></i></a>
                            </td>
                        </tr>
                        <?php  ++$a;}?>
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
