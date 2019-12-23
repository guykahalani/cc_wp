<?php 

get_header(); 

$banner = get_field('banner');
$creative = get_field('creative');
$products = get_field('products');
$team = get_field('team');
$testimonials = get_field('testimonials');
?>

<main>
  <section id="banner">
    <div class="container">
      <div class="content-holder">
        <h1><?php echo $banner['main_title'];?></h1>
        <a href="<?php #echo $banner['call_to_action_link'];?>" class="call-to-action"><?php echo $banner['call_to_action_text'];?></a>
      </div>
    </div>
  </section>

  <?php if($creative):
    foreach ($creative as $key => $val) {
      ${$key} = $val; 
    }     
  ?>
  <section id="creative">
    <div class="box box-1">
      <p><?php echo $box_1['text']; ?></p>
    </div>
    <div class="box box-2">
      <h3><?php echo $box_2['title']; ?></h3>
      <p><?php echo $box_2['text']; ?></p>
      <a href="#!"><?php echo $box_2['link_text']; ?></a>
    </div>
    <div class="box box-3">
      <h3><?php echo $box_3['title']; ?></h3>
      <p><?php echo $box_3['text']; ?></p>
      <a href="#!"><?php echo $box_3['link_text']; ?></a>
    </div>
    <div class="box box-4"></div>
    <div class="box box-5">
      <h3><?php echo $box_5['title']; ?></h3>
      <p><?php echo $box_5['text']; ?></p>
      <a href="#!"><?php echo $box_5['link_text']; ?></a>
    </div>
  </section>
  <?php endif ?>

  <section id="team">
    <div class="team-swiper-container">
      <div class="swiper-wrapper">
      <?php if ($team): 
        foreach ($team as $key => $val):
      ?>
        <div class="swiper-slide">
          <div>
            <h5><?php echo $team[$key]['full_name']; ?></h5>
            <h6><?php echo $team[$key]['position']; ?></h6>
            <span>
              <a href="#!"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a> 
              <a href="#!"><i class="fa fa-envelope" aria-hidden="true"></i></a>
              <a href="#!"><i class="fa fa-twitter-square" aria-hidden="true"></i></a>
            </span>
          </div>
          <img src="<?php echo $team[$key]['profile_picture'];?>" alt="">
        </div>
        <?php endforeach;
            endif; 
        ?>
      
      </div>
      <!-- Add Pagination -->
      <div class="swiper-pagination"></div>
      <!-- Add Arrows -->
      <!-- <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div> -->
    </div>
  </section>


  <?php if ($products): 
    foreach ($products as $key => $val) {
      ${$key} = $val; 
    } 
  ?>
  <section id="products">
    <div class="container">
      <div class="content-holder">
        <div class="product">
          <div class="front">
            <h5><?php echo $product_1['title'];?></h5>
            <p><?php echo $product_1['text'];?></p>
            <a href="#!"><?php echo $product_1['link_text'];?></a>
          </div>
        </div>
        <div class="product">
          <div class="front">
            <h5><?php echo $product_2['title'];?></h5>
            <p><?php echo $product_2['text'];?></p>
            <a href="#!"><?php echo $product_2['link_text'];?></a>
          </div>
        </div>
        <div class="product">
          <div class="front">
            <h5><?php echo $product_3['title'];?></h5>
            <p><?php echo $product_3['text'];?></p>
            <a href="#!"><?php echo $product_3['link_text'];?></a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php endif ?>

  <section id="testimonials">
      <!-- Swiper -->
      <div class="testimonials-swiper-container">
        <div class="swiper-wrapper">
          <?php if($testimonials):
            foreach ($testimonials as $key => $val):
          ?>
          <div class="swiper-slide">
            <span>
              <i class="fa fa-quote-right" aria-hidden="true"></i>
            </span>
            <blockquote>
              <?php echo $testimonials[$key]; ?>
            </blockquote>
          </div>
          <?php endforeach;
          endif; ?>
        </div>
      </div>
  </section>

</main>

<?php get_footer(); ?>