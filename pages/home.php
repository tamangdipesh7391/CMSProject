<?php
$row = '';
$result = $obj->Select("free_product ORDER BY id  DESC","*");
if ($result) {
$row = $result[0]['id'];
}



?>

  


  <main id="main">

    <section id="services">
      <div class="container">
        <div class="section-header">
          <h2>Free Products</h2>
         <p>These all products are free of cost. Anyone can take this product if they are interested</p>
        </div>

        <div class="row">

          <?php for($i=1;$i<=$row;$i++) { 
              
            $check = $obj->Query("SELECT * FROM free_product WHERE id =".$i);
            if($check) {

              $content = $obj->Select("free_product","*","id",array($i));
              $free_product_post_heading = $content[0]['post_heading'];
              $free_product_thumbnail = $content[0]['post_img'];

              

            
            
            ?>


              <div class="col-md-4">
            <div class="box wow fadeInLeft ">
                <div class="title">
                  <h2><?=$free_product_post_heading?></h2>
                </div>
                <div class="post-img post-area">

                  <img src="<?=base_url()."assets/post-img/".$free_product_thumbnail ?>">
                </div>
                <div class="price">
                    <h3>Free<span><a href=""><button class="btn btn-info">Take</button></a></span></h3>
                </div>
                <div class="offered-price">
                  
                </div>
            </div>
          </div>


           
        <?php   
          }
             } ?>
          

         
          

        </div>

      </div>
    </section>
    <!-- End Services Section -->

   

    <!-- ======= Testimonials Section ======= -->
      <section id="services">
      <div class="container">
        <div class="section-header">
          <h2>Premium Products</h2>
         <p>These all products are Premium. You must pay some amount to buy this stuffs.</p>
        </div>

        <div class="row">

          <?php for($i=1;$i<=$row;$i++) { 
              
            $check = $obj->Query("SELECT post_img FROM premium_product WHERE id =".$i);
            if($check) {

              $content_premium = $obj->Select("premium_product","*","id",array($i));
              $premium_product_post_heading = $content_premium[0]['post_heading'];
              $premium_product_thumbnail = $content_premium[0]['post_img'];
              $price = $content_premium[0]['price'];

              

            
            
            ?>


              <div class="col-md-4">
            <div class="box wow fadeInLeft ">
                <div class="title">
                  <h2><?=$premium_product_post_heading?></h2>
                </div>
                <div class="post-img post-area">

                  <img src="<?=base_url()."assets/post-img-pre/".$premium_product_thumbnail ?>">
                </div>
                <div class="price">
                    <h3>Rs <?=$price?><span><a href=""><button class="btn btn-info">Take</button></a></span></h3>
                </div>
                <div class="offered-price">
                  
                </div>
            </div>
          </div>


           
        <?php   
          }
             } ?>
          

         
          

        </div>

      </div>
    </section>
    <!-- End Testimonials Section -->

    

  </main><!-- End #main -->

  
