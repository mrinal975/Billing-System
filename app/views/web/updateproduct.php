<!DOCTYPE html>
<head>
    <title>Add Product</title>
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
        <?php $page="addproduct";
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
                            Edit Product
                        </header>
                        <h4 class="text-center">
                <?php
                //Product add confirmation message
                  if (!empty($_GET['msg'])) {
                   $msg=unserialize(urldecode($_GET['msg']));
                   foreach ($msg as $key => $value) {
                     echo "<span style='color:blue; font-weight:bold'>".$value."</span>";
                      }
                  }
                  ?>

                  <?php
              //valiadtion Error message
                if (isset($data['productErrors'])) {
              echo "<div style='color:red;border:1px solid red; padding:6px 10px; margin:5px;'>";

                foreach ($data['productErrors'] as $key=>$value) {
                 switch ($key) {
                   case 'product_name':
                     foreach ($value as $val) {
                        echo " Product name ".$val." <br/>";
                     }
                     break;
                     case 'product_details':
                     foreach ($value as $val) {
                        echo "Product details ".$val." <br/>";
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
                             <?php
                                    foreach ($data['editproduct'] as $key => $value) {
                                  
                                    ?>
                                <form role="form" action="<?php echo BASE_URL ; ?>Product/updateproduct/<?php echo $value['id'];?>" method="post">
                                     <div class="form-group">
                                      <label for="sel1">Category Name </label>
                                      <select class="form-control" id="sel1" name="category_id">
                                         <?php
                                        foreach ($data['catlist'] as $key => $cat) {
                                        ?>
                                        <option value=" <?php echo $value['category_id'];?>"

                                          <?php if($value['category_id']==$cat['id'])
                                          {
                                            echo 'selected';
                                          }
                                          ?>
                                          >
                                            <?php echo $cat['category_name'];?>
                                        </option>
                                        <?php }?>
                                       </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Product Name</label>
                                        <input type="text" class="form-control"  placeholder="Enter Product Name" name="product_name" value="<?php echo $value['product_name'];?>">
                                    </div>
                                     <div class="form-group">
                                          <label for="comment">Product Detail</label>
                                          <textarea class="form-control" rows="5" id="comment" name="product_details" ><?php echo $value['product_details'];?></textarea>
                                    </div>
                                    <div class="button_center_class">
                                        <button type="submit" class="btn btn-info ">Update Product</button>
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
