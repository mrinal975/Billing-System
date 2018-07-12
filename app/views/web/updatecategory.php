<!DOCTYPE html>
<head>
    <title>Add Category</title>
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
        <?php $page="addcategory";
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
                            Update Category
                        </header>
                        <div class="panel-body">
                            <div class="position-center">
                                <?php
                                    foreach ($data['editcat'] as $key => $value) {
                                ?>
                                <form role="form" action="<?php echo BASE_URL ; ?>Category/updatecategory/<?php echo $value['id'];?>" method="post">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Category Name</label>
                                        <input type="text" class="form-control"  placeholder="Enter email" name="category_name" value="<?php echo $value['category_name'];?>">
                                    </div>
                                    <div class="button_center_class">
                                        <button type="submit" class="btn btn-info ">Update Category</button>
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
