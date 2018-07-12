<!DOCTYPE html>
<head>
    <title>Add Sell</title>
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
        <?php $page="addsell";
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
                     Sell Product
                </div>
                <div>
               <div class="col-md-3 p_cus_nm">
                <h5 class="customer_name">Customer name</h5>
              <div class="input-group">
                <span class="input-group-addon"><a href="<?php echo BASE_URL ; ?>Customer/addcustomer"><i class="glyphicon glyphicon-user" title="Add New Customer"></i></a></span>
                  <select class="form-control" id="sel1">
                    <option disabled>Customer Name</option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                  </select>
              </div>

               </div>
           
                  
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
                               <th><button type="button" name="add" class="btn btn-success btn-sm add"><span class="glyphicon glyphicon-plus"></span></button></th>
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
                                          <input id="msg" type="number" class="form-control" name="msg" min="0">
                                        </div>
                                        <br>
                                        <div class="input-group">
                                          <span class="input-group-addon">Payment Due</span>
                                          <input id="msg" type="number" class="form-control" name="msg"  min="0">
                                        </div>
                                     </div>
                                 </div>
                             </div>
                             <div align="center" class="class_mp">
                              <input type="submit" name="submit" class="btn btn-info" value="Sell Product" />
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
  html += '<td><select name="item_unit[]" class="form-control item_unit"><option value="select_unit">Category Name</option></select></td>';
  html += '<td><select name="item_unit[]" class="form-control item_unit"><option value="select_unit">Product Name</option></select></td>';
  html += '<td class="control_class"><input type="number" min="1" name="item_quantity[]" class="form-control item_quantity class_quantity"/></td>';
  html += '<td class="control_class text-center">120 ৳</td>';
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
  $('.item_name').each(function(){
   var count = 1;
   if($(this).val() == '')
   {
    error += "<p>Enter Item Name at "+count+" Row</p>";
    return false;
   }
   count = count + 1;
  });
  
  $('.item_quantity').each(function(){
   var count = 1;
   if($(this).val() == '')
   {
    error += "<p>Enter Item Quantity at "+count+" Row</p>";
    return false;
   }
   count = count + 1;
  });
  
  $('.item_unit').each(function(){
   var count = 1;
   if($(this).val() == '')
   {
    error += "<p>Select Unit at "+count+" Row</p>";
    return false;
   }
   count = count + 1;
  });
  var form_data = $(this).serialize();
  if(error == '')
  {
   $.ajax({
    url:"insert.php",
    method:"POST",
    data:form_data,
    success:function(data)
    {
      console.log(data);
     // if(data == 'ok')
     // {
     //  $('#item_table').find("tr:gt(0)").remove();
     //  $('#error').html('<div class="alert alert-success">Item Details Saved</div>');
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
