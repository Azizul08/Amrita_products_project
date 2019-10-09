<?php $__env->startSection('content'); ?>

<style>
.circle {
  height: 30px;
  width: 18px;
  background-color: #A28036;
  border-radius: 50%;
}

.btn-circle.btn-xl {
    width: 70px;
    height: 70px;
    padding: 10px 16px;
    border-radius: 35px;
    font-size: 24px;
    line-height: 1.33;
}

.btn-circle {
    width: 30px;
    height: 30px;
    padding: 6px 0px;
    border-radius: 15px;
    text-align: center;
    font-size: 12px;
    line-height: 1.42857;
}
</style>
<div class="page-container">
          <div data-bottom-top="background-position: 50% 50px;" data-center="background-position: 50% 0px;" data-top-bottom="background-position: 50% -50px;" class="page-title page-menu">
            <div class="container">
              <div class="title-wrapper">
                <div data-top="transform: translateY(0px);opacity:1;" data--20-top="transform: translateY(-5px);" data--50-top="transform: translateY(-15px);opacity:0.8;" data--120-top="transform: translateY(-30px);opacity:0;" data-anchor-target=".page-title" class="title">Menu Classic</div>
                <div data-top="opacity:1;" data--120-top="opacity:0;" data-anchor-target=".page-title" class="divider"><span class="line-before"></span><span class="dot"></span><span class="line-after"></span></div>
                <div data-top="transform: translateY(0px);opacity:1;" data--20-top="transform: translateY(5px);" data--50-top="transform: translateY(15px);opacity:0.8;" data--120-top="transform: translateY(30px);opacity:0;" data-anchor-target=".page-title" class="subtitle">The various dishes are waiting for your coming to enjoy its</div>
              </div>
            </div>
          </div>
          <div class="page-content-wrapper">

            <?php $__empty_1 = true; $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat_data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <section id="category_section<?php echo e($cat_data->id); ?>" class="menu-grid-02 padding-top-100 padding-bottom-100">
              <div class="container">
                <div class="swin-sc swin-sc-title">
                    <!--<p class="top-title"><span>Our Featured Menu</span></p>-->
                    <h3 class="title"><?php echo e($cat_data->name); ?></h3>
                    <small><?php echo !empty($cat_data->description) ? $cat_data->description : ''; ?></small>
                  </div>
                  <?php
                  $sub = App\Product::orderBy('product_code','ASC');

                  $products = DB::table(DB::raw("({$sub->toSql()}) as sub"))
                  ->where('category_id',$cat_data->id)
                  ->groupBy('product_code')
                  ->get();  ?>
                <div class="swin-sc swin-sc-product products-02 carousel-02">
                 <div class="products nav-slider">
                    <div class="row slick-padding">
                      <?php $__empty_2 = true; $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $f_product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_2 = false; ?>
                      <?php if ($f_product->menu_style=='g') { ?>
                      <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="blog-item item swin-transition">
                          <div class="block-img"><img id="myImg<?php echo e($f_product->id); ?>"  style="width: 351px;max-height: 231px;" src="<?php echo e(asset('images/backend_images/products/large/'.$f_product->image)); ?>" alt="<?php echo e($f_product->product_name); ?>" class="img img-responsive">
                            <?php if (!empty($f_product->product_code)) {
                              ?>
                            <div class="block-circle price-wrapper"><span class="price woocommerce-Price-amount amount"><span class="price-symbol"></span><?php echo e($f_product->product_code); ?></span></div>
                            <?php } ?>
                            <div class="group-btn"><a href="javascript:void(0)" onclick="viewInModal(<?php echo e($f_product->id); ?>)" class="swin-btn btn-link"><span class="glyphicon glyphicon-eye-open"></span></a><a href="javascript:void(0)" class="swin-btn btn-add-to-card"><i class="fa fa-shopping-basket"></i></a></div>
                          </div>
                          <div class="block-content">
                            <h5 class="title"><a href="javascript:void(0)"><?php echo e($f_product->product_name); ?></a></h5>
                            <div class="product-info">
                              <span class="text" style="font-size:18px;"><?php echo $f_product->description !='' ? $f_product->description : ''; ?></span>
                              <!-- <ul class="list-inline">
                                <li class="author">

                                <li class="rating"><a href="javascript:void(0)"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i></a></li>
                              </ul> -->
                            </div>
                            <?php
                            if ($f_product->product_code == 6){
                            $feature_sub = App\Product::where('product_code',6)->where('menu_style','l')
                            ->get();
                            //echo count($feature_sub);
                            if(!empty($feature_sub)){?>
                            <button type="button" id="btn-down" class="btn btn-default btn-circle" style="float:right; margin-top:-26px;padding:4px;color:#A58637"><i class="fa fa-arrow-down" ></i></button>
                            <button type="button" id="btn-up" class="btn btn-default btn-circle" style="float:right; margin-top:-26px;padding:4px;display:none;color:#A58637"><i class="fa fa-arrow-up" ></i></button>
                            <div id="feature_div_ext" style="padding-top:15px;display:none;">
                                <?php $__empty_3 = true; $__currentLoopData = $feature_sub; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $f_sub): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_3 = false; ?>
                            <div class="row">
                                <div class="col-md-6">
                                    <span style="font-family: 'rancho';color:#29272e;font-size:18px;"><?php echo e($f_sub->product_name); ?></span>
                                </div>
                                <div class="col-md-3">......</div>
                                <div class="col-md-3" style="color:#A58637"><?php echo e($f_sub->price); ?></div>
                            </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_3): ?>
                            <p></p>
                            <?php endif; ?>
                            </div>
                            <?php }} ?>
                          </div>
                        </div>
                      </div>
                    <?php } ?>
                       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_2): ?>
                      <p></p>
                      <?php endif; ?>
                    </div>
                </div>
                </div>
                <?php $dub = App\Product::orderBy('product_code','ASC');

                  $listproducts = DB::table(DB::raw("({$dub->toSql()}) as dub"))
                  ->where('category_id',$cat_data->id)
                  ->groupBy('product_code')
                  ->get(); ?>
                  <div class="swin-sc swin-sc-product products-01 style-02 woocommerce">
                      <div class="row">
                      <?php $flag=0?> <!--This variable is created for prevent nested loop :) -->
                      <?php $__empty_2 = true; $__currentLoopData = $listproducts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_2 = false; ?>
                      <?php if ($product->menu_style=='l') { ?>
                         <?php
                         $product_attributes=App\ProductsAttribute::where('product_id',$product->id)->get();
                         $product_attributes_sizes=App\ProductsAttribute::where('product_id',$product->id)->get();
                         //echo count($product_attributes_sizes);
                         $product_attributes_name=App\ProductsAttribute::where('product_id',$product->id)->first();
                         //print_r($product_attributes_name);


                         if (!$product_attributes->isEmpty()) {

                          ?>
                           <table class="table table-responsive" style="border: 0px;">
                               <?php if($flag == 0): ?> <!-- if flag == 0  then it will print the following block-->
                                    <thead>
                                        <tr>
                                            <td style="width: 60% display:none;"></td>
                                            <?php $__empty_3 = true; $__currentLoopData = $product_attributes_sizes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $attri): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_3 = false; ?>

                                                <td scope="col" style="color: #A48536;font-size: 16px;"><b><?php echo e($attri->size); ?></b></td>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_3): ?>
                                                <p></p>
                                            <?php endif; ?>
                                        </tr>
                                    </thead>
                                   <?php $flag=1 ?><!--Now Flag is updated to 1. so, it will never print again :)-->
                               <?php endif; ?>
                              <tbody>
                                <tr>
                                  <th class="item-left" style="width: 60%;font-family: 'Rancho', cursive;font-size: 20px;color:#29272e;margin:0;"><?php $product_name_view=App\Product::where('id',$product_attributes_name->product_id)->first();echo $product_name_view->product_name; ?></th>
                                  <?php $__empty_3 = true; $__currentLoopData = $product_attributes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bnttri): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_3 = false; ?>
                                  <td style="color: #A48536;"><?php echo e($bnttri->price); ?></td>
                                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_3): ?>
                                  <p></p>
                                  <?php endif; ?>
                                </tr>
                              </tbody>
                            </table>
                         <?php }else{?>
                          <div class="tab-content">
                            <div class="col-md-6 col-sm-12">
                              <div class="products">
                                <div class="item product-01">
                                  <div class="item-left">
                                    <h5 class="title">
                                      <?php if (!empty($product->product_code)) {
                                        echo "<b style='color:#A58637'>".$product->product_code.".</b>  ";
                                      } ?><?php echo e($product->product_name); ?></h5>
                                    <div class="des"><?php echo !empty($product->description) ? $product->description : ''; ?> </div>
                                  </div>


                                    <?php if (!empty($product->discount)) {
                                      $discountPrice= $product->price * ($product->discount /100);
                                      $presentPrice=$product->price-$discountPrice;
                                      ?>
                                      <div class="item-right">
                                    <span class="price woocommerce-Price-amount amount"><span class="price-symbol"></span><?php echo e($presentPrice); ?></span>
                                    <strike style="color: red"><span class=""><span class="price-symbol"></span><?php echo e($product->price); ?></span></strike>
                                  <?php }else{ ?>
                                    <div class="item-right"><span class="price woocommerce-Price-amount amount"><span class="price-symbol"></span><?php echo e($product->price); ?></span>
                                  <?php } ?>
                                  </div>
                                </div>

                              </div>
                            </div>
                          </div>
                         <?php } ?>


                      <?php } ?>
                       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_2): ?>
                      <p></p>
                      <?php endif; ?>
                      </div>
                        </div>
              </div>
            </section>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <p>Ops !!! No menu item found</p>
            <?php endif; ?>
          </div>
</div>

        <!--ModalViewImage-->
                 <!-- The Modal -->
<div id="myModal" class="modal">
  <div id="close_tag"><span style="cursor: pointer;font-size:23px;float: right;color: white; padding-right: 24px"><b>X</b></span></div>

  <img class="modal-content" id="img01">
  <div id="caption"></div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
<script>
$("#btn-down").click(function(){
        $("#feature_div_ext").fadeIn(700);
        $("#btn-down").hide();
        $("#btn-up").show();
        
    });
    
    $("#btn-up").click(function(){
        $("#feature_div_ext").fadeOut(700);
        $("#btn-up").hide();
        $("#btn-down").show();
    });
  function loadAboutUs(){
                $('html, body').animate({
                                scrollTop: $("#about_us_view").offset().top
                            }, 2000);
            }

  function viewInModal(image_id){
    //alert(image_id);
    // Get the modal
      var modal = document.getElementById('myModal');
//alert(modal);
      // Get the image and insert it inside the modal - use its "alt" text as a caption
      var img = document.getElementById('myImg'+image_id);
      //alert(img);
      var modalImg = document.getElementById("img01");
      var captionText = document.getElementById("caption");
          modal.style.display = "block";
          modalImg.src = img.src;
          captionText.innerHTML = img.alt;


      // Get the <span> element that closes the modal
      var span = document.getElementById("close_tag");

      // When the user clicks on <span> (x), close the modal
      span.onclick = function() {
          modal.style.display = "none";
      }
  }

  function onScrollDiv(id){
    $('html, body').animate({
        scrollTop: $("#category_section"+id).offset().top
    }, 2000);
  }



</script>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.frontLayouts.front_design', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>