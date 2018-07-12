        <div class="leftside-navigation">
            <ul class="sidebar-menu" id="nav-accordion">
                <li>
                    <a href="index.html" class="<?php if($page=='dashboard'){echo "active";}?>">
                        <i class="fa fa-dashboard"></i>
                        <span >Dashboard</span>
                    </a>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;" class="<?php if($page=='addcategory' || $page=='viewcategory' ){echo "active";} ?>">
                        <i class="fa fa-clone" aria-hidden="true"></i>
                        <span>Category </span>
                    </a>
                    <ul class="sub">
                        <li class="<?php if($page=='addcategory' ){echo "active";} ?>"><a href="<?php echo BASE_URL ; ?>Category/addcategory" id="category">New Category</a></li>
                        <li class="<?php if($page=='viewcategory' ){echo "active";} ?>"><a href="<?php echo BASE_URL ; ?>Category/viewcategory" id="category">View Category</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;" class="<?php if($page=='addproduct' || $page=='viewproduct' ){echo "active";} ?>">
                        <i class="fa fa-clone" aria-hidden="true"></i>
                        <span>Product </span>
                    </a>
                    <ul class="sub">
                        <li class="<?php if($page=='addproduct' ){echo "active";} ?>"><a href="<?php echo BASE_URL ; ?>Product/addproduct">New Product</a></li>
                        <li class="<?php if($page=='viewproduct' ){echo "active";} ?>"><a href="<?php echo BASE_URL ; ?>Product/viewproduct">View Product</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;" class="<?php if($page=='viewcustomer' || $page=='addcustomer' ){echo "active";} ?>">
                        <i class="fa fa-users" aria-hidden="true"></i>
                        <span>Customer</span>
                    </a>
                    <ul class="sub">
						<li class="<?php if($page=='addcustomer' ){echo "active";} ?>"><a href="<?php echo BASE_URL ; ?>Customer/addcustomer">New Customer</a></li>
						<li class="<?php if($page=='viewcustomer' ){echo "active";} ?>"><a href="<?php echo BASE_URL ; ?>Customer/viewcustomer">View Customer</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;" class="<?php if($page=='shopdue' || $page=='customerdue' ){echo "active";} ?>">
                        <i class="fa fa-adjust" aria-hidden="true"></i>
                        <span>Due </span>
                    </a>
                    <ul class="sub">
                        <li class="<?php if($page=='addbuy' ){echo "active";} ?>"><a href="<?php echo BASE_URL ; ?>Due/customerdue">Customer Due</a></li>
                        <li class="<?php if($page=='addbuy' ){echo "active";} ?>"><a href="<?php echo BASE_URL ; ?>Due/shopdue">Shop Due</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;"  class="<?php if($page=='viewsell' || $page=='addsell' ){echo "active";} ?>">
                        <i class=" fa fa-bar-chart-o"></i>
                        <span>Sell</span>
                    </a>
                    <ul class="sub">
                        <li class="<?php if($page=='addsell' ){echo "active";} ?>"><a href="<?php echo BASE_URL ; ?>Sell/addsell">Sell Product</a></li>
                        <li class="<?php if($page=='viewsell' ){echo "active";} ?>"><a href="<?php echo BASE_URL ; ?>Sell/viewsell">View Sell</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;" class="<?php if($page=='addbuy' || $page=='viewbuy' ){echo "active";} ?>">
                        <i class=" fa fa-bar-chart-o"></i>
                        <span>Buy</span>
                    </a>
                    <ul class="sub">
                        <li class="<?php if($page=='addbuy' ){echo "active";} ?>"> <a href="<?php echo BASE_URL ; ?>Buy/addbuy">Buy product</a></li>
                        <li class="<?php if($page=='viewbuy' ){echo "active";} ?>"><a href="<?php echo BASE_URL ; ?>Buy/viewbuy" >View Buy</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <script type="text/javascript">
            $(document).ready(function(){
                $("#category").click(function(){
                    console.log('hi');
                });
            });
        </script>