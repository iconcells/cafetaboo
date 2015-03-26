<?php

$currency = '$'; //Currency sumbol or code

$db_username = 'taxi_cafet1';
$db_password = '24S!1W1P.j';
$db_name = 'taxi_cafet1';
$db_host = 'localhost';
$mysqli = new mysqli($db_host, $db_username, $db_password,$db_name);

?> 
<?php get_header();
session_start();
 ?>


<script type="text/javascript">
window.onload = function(event) {
    $('#menu-thumbnail-view').masonry({
      itemSelector: '.box',
      // set columnWidth a fraction of the container width
    });
  };	

window.onresize = function(event) {
    $('#menu-thumbnail-view').masonry({
      itemSelector: '.box',
      // set columnWidth a fraction of the container width
    });
  };

</script>
<!-- TemplateBeginEditable name="head" -->
<!-- TemplateEndEditable -->



       	<div id="content-wrapper">
		<div class="container" style="max-width: 1200px;">
        <?php if(is_page(707)) { ?>
        
             		  
<link href="http://350taxi.com/CafeTaboo/wp-content/uploads/2014/css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="http://350taxi.com/CafeTaboo/wp-content/uploads/2014/css/style.css" rel="stylesheet" type="text/css">
<script src="http://350taxi.com/CafeTaboo/wp-content/uploads/2014/js/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="js/jquery-1.9.1.min.js"><\/script>')</script>
<script src="http://350taxi.com/CafeTaboo/wp-content/uploads/2014/js/jquery.easing-1.3.min.js"></script>
<script src="http://350taxi.com/CafeTaboo/wp-content/uploads/2014/js/bootstrap.min.js"></script>

<style type="text/css">
h4{font-weight: normal;
font-family: "Patua One", Georgia, "Times New Roman", Times, serif;}
</style>

 <!-- Pop up Box Start  -->
     <style type="text/css">
/* popup_box DIV-Styles*/
#popup_box { 
    display: none;
	position: fixed;
	_position: absolute;
	height: 300px;
	width: 32%;
	background: #FFFFFF;
	left: 32%;
	top: 150px;
	z-index: 100;
	margin-left: -9px;
	border: 2px solid #FFAA00;
	padding: 15px;
	font-size: 15px;
	-moz-box-shadow: 0 0 5px #FFAA00;
	-webkit-box-shadow: 0 0 5px #FFAA00;
	box-shadow: 0 0 5px #FFAA00;
    
}

#container {
    background: #d2d2d2; /*Sample*/
    width:100%;
    height:100%;
	pointer-events: none;
	
}

a{  
cursor: pointer;  
text-decoration:none;  
} 

/* This is for the positioning of the Close Link */
#popupBoxClose {
    font-size: 15px;
	line-height: 15px;
	right: 5px;
	top: 11px;
	position: absolute;
	color: #000000;
	font-weight: 500;
	text-decoration: none;	
}

#popupBoxClose1 {
    font-size:15px;  
    line-height:15px;  
    right:570px;  
    top:5px;  
    position:absolute;  
    color:#6fa5e2;  
    font-weight:500; 
	text-decoration:none;
}

</style>

<!-- Popup End -->
  <!--    <div id="popup_box">    

 <div style="background-color: #FFAA00;width: 461px;height: 48px;margin-top: -15px;margin-left: -15px;">
 <h2 color="white">ADD ITEM</h2></div>
    	<div style="margin-left:140px;"> 
       
 <form method="post" action="" id="customer_login" accept-charset="UTF-8">
   <div class="menu-info" style="margin-left:-121px;">
                      <div class="price" style="line-height: 16px;font-weight: 600;position: absolute;margin-left: 355px;background-color: red;color: white;">$3</div>
                      <a class="read_more_menu" href="javascript:myFunction()"><h4>Fruit Salad</h4></a>
                      <p style="text-align:justify;">Lorem ipsum dolor sit amet, consectetur. Lorem ipsum dolor.</p>
        </div>
      <h4>Quantity </h4>
	  <input style="margin-top:8px;width:95px;" type="text" name="qty" placeholder="Enter Quantity" value=" ">
    <br><input class="button" type="submit" value="Add Item" class="button" name="add_item" style="border-color: #FFAA00;background-color: #FFAA00;color: #00000;width: 107px;height: 34px;"> </form>      
	</div>
    <a id="popupBoxClose"><span style="background-color: #cd1c1d;color: white;border-radius: 30px 30px;padding: 0px 6px;font-size: 14px;cursor: pointer;">&times;</span></a>
   
	
	
   
 <input type="hidden" id="check_popup" value="">
</div> -->

<!--<script src="http://350taxi.com/CafeTaboo/wp-content/uploads/2014/js/custom.js"></script><p></p>-->
<div class="main-content" style="">

<p><!-- TemplateBeginEditable name="ContentArea" --></p>
<div class="container main-content" style="max-width: 1200px;">
<div class="row-fluid">
<div id="tabs-stacked" class="tab-pane">
<div class="tabbable">
<div class="span4" style="width:17%;">
<ul class="nav nav-tabs nav-stacked">
<li class="active"><a href="http://www.tacoburritoking.com/menu.html#tabs3-tab1" data-toggle="tab">Sides & Sweets</a></li>
<li class=""><a href="http://www.tacoburritoking.com/menu.html#tabs3-tab2" data-toggle="tab">Breakfast</a></li>
<li class=""><a href="http://www.tacoburritoking.com/menu.html#tabs3-tab3" data-toggle="tab">Bevarages</a></li>
<li class=""><a href="http://www.tacoburritoking.com/menu.html#tabs3-tab4" data-toggle="tab">Burgers</a></li>
<li class=""><a href="http://www.tacoburritoking.com/menu.html#tabs3-tab5" data-toggle="tab">Sandwiches</a></li>
<li class=""><a href="http://www.tacoburritoking.com/menu.html#tabs3-tab6" data-toggle="tab">Mexicans</a></li>
<li class=""><a href="http://www.tacoburritoking.com/menu.html#tabs3-tab7" data-toggle="tab">Hot Dogs</a></li>
<li><a href="http://www.tacoburritoking.com/menu.html#tabs3-tab8" data-toggle="tab">Build Your Own Salads</a></li>
<li>
<div class="slide-to-top all-closed"></div>
</li>
</ul>
<p><a class="btn btn-small custom-btn btn-primary" href="http://www.tacoburritoking.com/docs/CarryOut_2013.pdf" target="_blank">Printable Menu</a></p>
</div>
<div class="tab-content span7">
<div id="tabs3-tab1" class="tab-pane active" style="padding-top:15px; padding-bottom:10px;">
<p style="margin: 0 14px 10px;"><img class="alignleft" src="http://350taxi.com/CafeTaboo/wp-content/uploads/2014/05/Food-banner-burrito1-01.jpg" alt="" width="660px"></p>
<h2 class="primary-color" style="background-color: #fff;margin-bottom: 10px;margin-left: 0px;padding-left: 10px;">Sides & Sweets</h2>
<!--  Work Starts ---->

<div class="menu-list">
<?php 

$current_url = base64_encode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
$res=mysql_query("select * from products");
while($row=mysql_fetch_array($res)) {
       
				echo '<div class="bg-color"><form method="post" action="http://350taxi.com/CafeTaboo/wp-content/themes/lezzatos/cart_update.php">
				<div class="menu-item eight columns gallery" style="width:53%;margin-left:-53px;margin-top:10px">
               
           		  <div class="menu-info" >
                      <div class="price" style="line-height: 16px;font-weight: 600;position: absolute;margin-left: 180px;width: 40px;font-weight: 300;color: #FFFFFF;font-size: 1em;background-color: #f7941e;padding: .2em .3em;border: 1px solid #f7941e;">$'.$row['price'].'</div>
					  <button class="btn btn-small custom-btn btn-primary" style="position: absolute;margin-left: 249px;margin-top: 0px;width: 27px;height: 26px;line-height: 16px;background-color: #124CC7;border-color: #124CC7;color: white;">+</button>
					  <input type="text" style="border-radius: 0px;width: 15px;position: absolute;margin-left: 223px;height: 18px;font-weight: 300;color: #303030;background-color: #fff;padding: .2em .3em;border: 1px solid #989898;" name="product_qty" value="1"><a class="read_more_menu" href=""><h4>'.$row['product_name'].'</h4></a>
                      <p style="text-align: justify;font-style: italic;font-size: 12px;color: #000000;font-weight: 300;text-transform: none;letter-spacing: .2pt;margin-left: 5px;display: block;clear: both;font-family: cursive;margin-top: 10px;">'.$row['product_desc'].'</p>                  </div>
            	  <div class="clear"></div>
                </div><input type="hidden" name="product_code" value="'. $row['product_code'].'" />
					<input type="hidden" name="type" value="add" />
					<input type="hidden" name="return_url" value="'.$current_url.'" /></div></form>';
			 }
			?> 
                
		
                <div class="clear"></div>
        </div>



<!--  Work Ends ---->
</div>
<div id="tabs3-tab2" class="tab-pane" style="padding-top:20px; padding-bottom:10px;">
<h2 class="primary-color">Breakfast</h2>
<p>Coming Soon...</p>
</div>
<div id="tabs3-tab3" class="tab-pane" style="padding-top:20px; padding-bottom:10px;">
<h2 class="primary-color">Beverages</h2>
<p>Coming Soon...</p>
</div>
<div id="tabs3-tab5" class="tab-pane">
<h2 class="primary-color">Sandwiches</h2>
<p>Coming Soon...</p>
</div>
<div id="tabs3-tab4" class="tab-pane" style="padding-top:20px; padding-bottom:10px;">
<h2 class="primary-color">Burgers</h2>
<p>Coming Soon...</p>
</div>
<div id="tabs3-tab6" class="tab-pane" style="padding-top:20px; padding-bottom:10px;">
<h2 class="primary-color">Mexican</h2>
<p>Coming Soon...</p>
</div>
<div id="tabs3-tab7" class="tab-pane" style="padding-top:20px; padding-bottom:10px;">
<h2 class="primary-color">Hot Dogs</h2>
<p>Coming Soon...</p>
</div>
<div id="tabs3-tab8" class="tab-pane" style="padding-top:20px; padding-bottom:10px;">
<h2 class="primary-color">Build Your Own Salads</h2>
<p>Coming Soon...</p>
</div>
</div>

<div class="span4" style="background: rgba(255, 255, 255, 0.66); width:21%;min-height:305px;">
<h2 class="primary-color" style="background-color: #fff;margin-bottom: 10px;margin-left: 0px;padding-left: 10px;margin-top: 17px;">Your Cart</h2>

<?php
if(isset($_SESSION["products"]))
{
    $total = 0;
    echo '<ol>';
    foreach ($_SESSION["products"] as $cart_itm)
    {
    	$minus=$cart_itm['qty']-1;
		$plus=$cart_itm["qty"]+1;
		
		if($minus==0)
		  $minus=1;
        echo '<form method="post" action="http://350taxi.com/CafeTaboo/wp-content/themes/lezzatos/cart_update.php"><li class="cart-itm">';
        echo '<span class="remove-itm" style="padding-right: 10px;float: right;">
		<a href="http://350taxi.com/CafeTaboo/wp-content/themes/lezzatos/cart_update.php?removep='.$cart_itm["code"].'&return_url='.$current_url.'">
		<span style="background-color: #cd1c1d;color: white;border-radius: 30px 30px;padding: 0px 6px;font-size: 14px;cursor: pointer;">&times;</span>
		</a></span>';
        echo '<h3 style="font-size: 18px;line-height: 16px;">
		<div style="min-width: 125px;float: left;">'.$cart_itm["name"].'</div>
		<a href="http://350taxi.com/CafeTaboo/wp-content/themes/lezzatos/cart_update.php?cart_minus=1&qty='.$minus.'&p_code='.$cart_itm["code"].'&return_url='.$current_url.'">-</a>
		<span style="font-size: 13px;">'.$cart_itm["qty"].'</span>
		<a href="http://350taxi.com/CafeTaboo/wp-content/themes/lezzatos/cart_update.php?cart_plus=1&qty='.$plus.'&p_code='.$cart_itm["code"].'&return_url='.$current_url.'">+</a>
		
		<span style="padding-left: 15px;font-size: 13px;">'.$currency.$cart_itm["price"].'</span>
		</h3>';
        //echo '<div class="p-code">P code : '.$cart_itm["code"].'</div>';
        //echo '<div class="p-qty">Qty : '.$cart_itm["qty"].'</div>';
        //echo '<div class="p-price">Price :'.$currency.$cart_itm["price"].'</div>';
        echo '</li>';
        $subtotal = ($cart_itm["price"]*$cart_itm["qty"]);
        $total = ($total + $subtotal);
		$ttotal=$total+10;
		echo '<input type="hidden" name="product_name" value="'.$cart_itm["name"].'"><input type="hidden" id="pro_qty" name="product_qty" value="'.$cart_itm["qty"].'"><input type="hidden" name="product_code" value="'.$cart_itm["code"].'"><input type="hidden" name="price" value="'.$cart_itm["price"].'">
		<input type="hidden" name="return_url" value="'.$current_url.'" /><input type="hidden" name="type" value="add" /></form>';
    }
	echo '<div style="clear: both;background-color: #e2e2e2;float: left;width: 111%;margin-left: -25px;margin-top: 50px;">
	<span style="margin-left: 75px;font-size: 12px;"> SUB TOTAL </span> <span style="margin-left: 47px;font-size: 12px;position: absolute;margin-top: 5px;"> '.$currency.$total.'</span><br>
	<span style="margin-left: 101px;font-size: 12px;"> TAX<span style="margin-left: 60px;font-size: 12px;position: absolute;margin-top: 5px;">  $0</span><br>
	<span style="margin-left: 28px;font-size: 12px;"> DELIVERY CHARGES </span> <span style="margin-left: 54px;font-size: 12px;position: absolute;margin-top: 5px;">  $10</span></div>';
    echo '</ol>';
    echo '<span class="check-out-txt"><span style="margin-left: 36px;">ORDER TOTAL</span><strong style="margin-left: 49px;"> '.$currency.$ttotal.'</strong> <a href="view_cart.php" style="margin-left: 30px;background-color: red;color: white;text-decoration: none;">Check-out!</a></span>';
	echo '<span class="empty-cart" style="margin-left: 28px;"><a href="http://350taxi.com/CafeTaboo/wp-content/themes/lezzatos/cart_update.php?emptycart=1&return_url='.$current_url.'" style="margin-left: 28px;background-color: red;color: white;">Empty Cart</a></span>';
}else{
    echo '&nbsp;Your Cart is empty';
}
?>
</form></div>

</div>
<p><!-- /.tab-content --></p>
</div>
</div>
<p><!-- /.tabbable --></p>
</div>
<p><!-- /.tab-pane --></p>
<hr>

</div>
<p><!-- TemplateEndEditable --></p>
  
        <?php } else { ?>
        
        
        
        <ul id="menu-thumbnail-view">
        <?php 
		$de_data = get_option( 'Lezatos_options' );
		$menu_per_page = $de_data['DE_menu_per_page'];
		if(!$menu_per_page){
			$menu_per_page = -1;
		}
		$paged = get_query_var('paged') ? get_query_var('paged') : 1;
		$wp_query = new WP_Query(array( 'posts_per_page'=> $menu_per_page,	'post_type' => 'menu','paged' => $paged));
		while ($wp_query->have_posts()) : $wp_query->the_post();	?>
            
        	  <li class="box">
              	 <a class="read_more_menu" href="<?php the_permalink(); ?>">
              	 <span class="menu-text-expand">
                      <?php echo content(20); ?>
                 </span> 
                 </a>

                <div class="pic_hover">
                	
                      <?php if(get_post_meta($post->ID, 'price', true)): ?>
                      <div class="price"><?php echo get_post_meta($post->ID, 'price', true); ?></div>
                      <?php endif; ?>
                      
                	<a class="image" href="<?php echo get_post_meta($post->ID, 'main_pic', true); ?>" rel="prettyPhoto[gallery]" title="<?php the_title();?>">
				  <span class="rollover"></span><?php echo get_the_post_thumbnail($id, array(150,150) );  ?></a>
                </div>
                <div class="menu-info-b">
                      <h4><?php the_title();?></h4>
                  </div>
                  
            <?php	edit_post_link(esc_html__('Edit this entry.', 'lezzatos'), '<p class="editLink">', '</p>'); ?>
           		  <div class="clear"></div>
              </li>
        <?php 		endwhile;	?>
        </ul>
        
        <?php } ?>
        <?php if (function_exists("pagination")) {
    	echo '<div class="sixteen columns">';
		pagination();
		echo '</div>';
		} ?>
        <?php wp_reset_query(); ?> 
        
    	<div class="clear"></div>
		</div>
        </div>
		
		<script type="text/javascript">
	  $(document).ready( function() {
	   

                
	  });
	    $('#popupBoxClose').click( function() {            
            unloadPopupBox();
        });
	  
	function myFunction()
	{
	  
	  var qty=$("#pro_qty").val();
	 
	  qty++;
	 alert(qty);
	  $("#pro_qty").val(qty);
	}
	function myFunction_desc()
	{
	 
	  var qty=$("#pro_qty").val();
	  
	  qty--;
	  alert(qty);
	  $("#pro_qty").val(qty);
	}
	 function loadPopupBox() {    // To Load the Popupbox
            $('#popup_box').fadeIn("slow");
            $("#container").css({ // this is just for style
                "opacity": "0.3"  
            });         
        }
		
		  function unloadPopupBox() {    // TO Unload the Popupbox
            $('#popup_box').fadeOut("slow");
            $("#container").css({ // this is just for style        
                "opacity": "1","pointer-events": "visible" 
            }); 
        }    
   
  </script>
  
        <!-- ********** close content *********** -->
<?php get_footer(); ?>