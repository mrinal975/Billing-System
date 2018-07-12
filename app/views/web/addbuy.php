<!DOCTYPE html>
<head>
    <title>Add Buy</title>
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
        <?php $page="addbuy";
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
                     Buy Product
                </div>
                <div>
                       <form method="post" id="insert_form">
                        
                            <div class="table-repsonsive">
                             <span id="error"></span>
                             <table class="table table-bordered" id="item_table">
                              <tr>
                               <th class="text-center">Category Name</th>
                               <th class="text-center">Product Name</th>
                               <th class="text-center">Quantity</th>
                               <th class="text-center">Tax</th>
                               <th class="text-center">Discount</th>
                               <th class="text-center">Price</th>
                               <th><button type="button" name="add" class="btn btn-success btn-sm add"><span class="glyphicon glyphicon-plus"></span></button>
                               </th>
                              </tr>
                             </table>
                             <div class="row">
                                 <div class="col-md-4 col-md-offset-8">
                                     <div class="payment_class">
                                        <div class="text-center">
                                            <h3 class="class_mp">Total Price : 1120 ৳</h3>
                                        </div>
                                
                                        <div class="input-group">
                                          <span class="input-group-addon">Instant Pay</span>
                                          <input id="msg" type="number" class="form-control" name="purchase_instantpay" min="0">
                                        </div>
                                        <br>
                                        <div class="input-group">
                                          <span class="input-group-addon">Payment Due</span>
                                          <input id="msg" type="number" class="form-control" name="purchase_paymentdue"  min="0">
                                        </div>
                                     </div>
                                 </div>
                             </div>
                             <div align="center" class="class_mp">
                              <input type="submit" name="submit" class="btn btn-info" value="Buy Product" />
                             </div>
                             
                            </div>
                           </form>
                </div>
            </div>
        </div>


        <?php
        include "app/views/web/footer/footer.php";
        ?>
        <!--main content end-->
    </section>
    <?php include "app/views/web/footer/Jsfile.php";?>
        <script>
$(document).ready(function(){
 
 $(document).on('click', '.add', function(){
  var html = '';
  html += '<tr>';
  html += '<td><select name="product_category_id[]" class="form-control item_unit"><?php foreach($data['allcat'] as $key => $value ){?> <option value="<?php $value['category_name'];?>"><?php echo $value['category_name'];?> </option> <?php } ?></select></td>';

  html += '<td><select name="product_id[]" class="form-control item_unit"><?php foreach($data['allproduct'] as $key => $value ){?><option value="<?php $value['id'];?>"> <?php echo $value['product_name'];?> </option> <?php } ?> </select></td>';

  html += '<td class="control_class"><input type="number" min="1" name="purchase_details_quantity[]" class="form-control item_quantity class_quantity"/></td>';

  html += '<td class="control_class text-center">20 ৳</td>';

  html += '<td class="control_class"><input type="number" min="1" name="item_quantity[]" class="form-control item_quantity class_quantity pull-left"/><span class="pull-right percentage_class">%</span></td>';
  html += '<td class="control_class text-center">1120 ৳</td>';

  html += '<td><button type="button" name="remove" class="btn btn-danger btn-sm remove"><span class="glyphicon glyphicon-minus"></span></button></td></tr>';
  $('#item_table').append(html);
 });
 
  $(document).on('click', '.remove', function(){
  $(this).closest('tr').remove();
 });
 
 $('#insert_form').on('submit', function(event){
  event.preventDefault();
  var error = '';
  $('.product_category_id').each(function(){
   var count = 1;
   if($(this).val() == '')
   {
    error += "<p>Select Item category name at "+count+" Row</p>";
    return false;
   }
   count = count + 1;
  });
  
  $('.product_id').each(function(){
   var count = 1;
   if($(this).val() == '')
   {
    error += "<p>Select product name at "+count+" Row</p>";
    return false;
   }
   count = count + 1;
  });
  
  $('.purchase_details_quantity').each(function(){
   var count = 1;
   if($(this).val() == '')
   {
    error += "<p>Enter Item Quantity at "+count+" Row</p>";
    return false;
   }
   count = count + 1;
  });
  var form_data = $(this).serialize();
  if(error == '')
  {
   $.ajax({
    url:"http://localhost/project/Buy/insertBuyProduct",
    method:"POST",
    data:form_data,
    success:function(data)
    {
      console.log('hiiii');
      console.log(data);
     // if(data == 'ok')
     // {
      // console.log('controllers methos called');
      // $('#item_table').find("tr:gt(0)").remove();
      // $('#error').html('<div class="alert alert-success">Item Details Saved</div>');
     // }
    }
   });
  }
  else
  {
   $('#error').html('<div class="alert alert-danger">'+error+'</div>');
  }
 });
 
});
</script>
</body>
</html>
