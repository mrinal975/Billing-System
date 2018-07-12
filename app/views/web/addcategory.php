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
                            Add Category
                        </header>
                        <div class="panel-body">
                            <h4 class="text-center">

                                <?php
                                //category add confirmation message
                                  if (!empty($_GET['msg'])) {
                                   $msg=unserialize(urldecode($_GET['msg']));
                                   foreach ($msg as $key => $value) {
                                     echo "<span style='color:blue; font-weight:bold'>".$value."</span>";
                                      }
                                  }
                                  ?>

                        <?php
                          //valiadtion Error message
                            if (isset($data['CatErrors'])) {
                          echo "<div style='color:red;border:1px solid red; padding:6px 10px; margin:5px;'>";

                            foreach ($data['CatErrors'] as $key=>$value) {
                             switch ($key) {
                               case 'category_name':
                                 foreach ($value as $val) {
                                    echo "Title ".$val." <br/>";
                                 }
                                 break;
                             }
                            }
                                
                        echo "</div>";
                        }
                        ?>
                            </h4>
                            <div class="position-center">
                                <form role="form" action="<?php echo BASE_URL ; ?>Category/insertcategory" method="post">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Category Name</label>
                                        <input type="text" class="form-control"  placeholder="Enter email" name="category_name">
                                    </div>
                                    <div class="button_center_class">
                                        <button type="submit" class="btn btn-info ">New Category</button>
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
