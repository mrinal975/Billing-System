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
        <?php $page="viewproduct";
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
                    View  Product
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
                            <th class="text-center">Category Name</th>
                            <th class="text-center">Product Name</th>
                            <th class="text-center">Product Details</th>
                            <th class="text-center">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($data['proall'] as $key => $value) {
                            
                            ?>
                        <tr data-expanded="true">
                            <td class="text-center">
                                <?php
                                  foreach ($data['allcat'] as $cat) {
                                    
                                     if ($cat['id'] == $value['category_id']) {
                                       echo $cat['category_name'];
                                     }
                                  }    
                                ?>
                            </td>
                            <td class="text-center"><?php echo $value['product_name']?></td>
                            <td class="text-center"><p>
                            <?php
           
                                $text=$value['product_details'];
                                 $length=strlen($text);
                                if ($length>40) {
                                  $text=substr($text,0,40);
                                }
                                echo $text;
                            ?> 
                            </p></td>
                            <td title="Edit" class="text-center"><a href="<?php echo BASE_URL ; ?>Product/editproduct/<?php echo $value['id'];?>"><i class="fa fa-edit" style="font-size:24px"></i></a></td>
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
