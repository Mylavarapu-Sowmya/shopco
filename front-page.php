
<!-- Announcement -->
<div class="announcement">
  <?php the_field('announcement_text'); ?>
</div>
<?php get_header(); ?>


<!-- Hero -->
<section class="hero">

  <div class="hero-content">

    <!-- TEXT -->
    <div class="hero-text">
      <h1><?php the_field('hero_heading'); ?></h1>

      <p><?php the_field('hero_subheading'); ?></p>

      <a href="<?php the_field('hero_button_link'); ?>">
        <button><?php the_field('hero_button_text'); ?></button>
      </a>

      <!-- STATS -->
      <div class="hero-stats">
        <div>
          <h3><?php the_field('hero_stat_1_number'); ?></h3>
          <span><?php the_field('hero_stat_1_text'); ?></span>
        </div>
        <div>
          <h3><?php the_field('hero_stat_2_number'); ?></h3>
          <span><?php the_field('hero_stat_2_text'); ?></span>
        </div>
        <div>
          <h3><?php the_field('hero_stat_3_number'); ?></h3>
          <span><?php the_field('hero_stat_3_text'); ?></span>
        </div>
      </div>
    </div>

    <!-- IMAGE -->
    <div class="hero-image">

      <?php $hero_img = get_field('hero_image'); ?>
      <?php if($hero_img): ?>
        <img src="<?php echo $hero_img; ?>" alt="">
      <?php endif; ?>

      <?php $star = get_field('hero_star_image'); ?>
      <?php if($star): ?>
        <img src="<?php echo $star; ?>" class="star star1">
        <img src="<?php echo $star; ?>" class="star star2">
      <?php endif; ?>

    </div>

  </div>

</section>

<!-- Brand Logos -->
<!-- <section class="brands"> -->
  <!-- <img src="<?php the_field('brand_logo_1'); ?>"> -->
  <!-- <img src="<?php the_field('brand_logo_2'); ?>"> -->
  <!-- <img src="<?php the_field('brand_logo_3'); ?>"> -->
  <!-- <img src="<?php the_field('brand_logo_4'); ?>"> -->
<!-- </section> -->
<section class="brands">
  <span><?php the_field('brand_logo_1'); ?></span>
  <span><?php the_field('brand_logo_2'); ?></span>
  <span><?php the_field('brand_logo_3'); ?></span>
  <span><?php the_field('brand_logo_4'); ?></span>
  <span><?php the_field('brand_logo_5'); ?></span>
</section>

<!-- New Arrivals -->
<section class="products">
  <h3>NEW ARRIVALS</h3>

  <div class="product-grid">

    <div class="card">
      <img src="<?php the_field('product_1_image'); ?>">
      <h4><?php the_field('product_1_name'); ?></h4>
      <div class="stars"><?php the_field('customer_3_rating'); ?></div>
      <div class="price"><?php the_field('product_1_price'); ?></div>
    </div>

    <div class="card">
      <img src="<?php the_field('product_2_image'); ?>">
      <h4><?php the_field('product_2_name'); ?></h4>
      <div class="stars"><?php the_field('customer_3_rating'); ?></div>
      <div class="price"><?php the_field('product_2_price'); ?></div>
    </div>

    <div class="card">
      <img src="<?php the_field('product_3_image'); ?>">
      <h4><?php the_field('product_3_name'); ?></h4>
      <div class="stars"><?php the_field('customer_3_rating'); ?></div>
      <div class="price"><?php the_field('product_3_price'); ?></div>
    </div>

    <div class="card">
      <img src="<?php the_field('product_4_image'); ?>">
      <h4><?php the_field('product_4_name'); ?></h4>
      <div class="stars"><?php the_field('customer_3_rating'); ?></div>
      <div class="price"><?php the_field('product_4_price'); ?></div>
    </div>

  </div>

  <div class="view-all">
    <button>View All</button>
  </div>
</section>

<!-- Top Selling -->
<section class="products">
  <h3>TOP SELLING</h3>

  <div class="product-grid">

    <div class="card">
      <img src="<?php the_field('top_product_1_image'); ?>">
      <h4><?php the_field('top_product_1_name'); ?></h4>
      <div class="price"><?php the_field('top_product_1_price'); ?></div>
    </div>

    <div class="card">
      <img src="<?php the_field('top_product_2_image'); ?>">
      <h4><?php the_field('top_product_2_name'); ?></h4>
      <div class="price"><?php the_field('top_product_2_price'); ?></div>
    </div>

    <div class="card">
      <img src="<?php the_field('top_product_3_image'); ?>">
      <h4><?php the_field('top_product_3_name'); ?></h4>
      <div class="price"><?php the_field('top_product_3_price'); ?></div>
    </div>
  <div class="card">
      <img src="<?php the_field('top_product_4_image'); ?>">
      <h4><?php the_field('top_product_4_name'); ?></h4>
      <div class="price"><?php the_field('top_product_4_price'); ?></div>
    </div>
  </div>

 

   

  </div>

  <div class="view-all">
    <button>View All</button>
  </div>
</section>

<section class="browse">
  <h3>BROWSE BY DRESS STYLE</h3>

  <div class="browse-container">

    <div class="box casual">
      <?php if(get_field('browse_casual')): ?>
        <img src="<?php the_field('browse_casual'); ?>" alt="">
      <?php endif; ?>
    </div>

    <div class="box formal">
      <?php if(get_field('browse_formal')): ?>
        <img src="<?php the_field('browse_formal'); ?>" alt="">
      <?php endif; ?>
    </div>

    <div class="box party">
      <?php if(get_field('browse_party')): ?>
        <img src="<?php the_field('browse_party'); ?>" alt="">
      <?php endif; ?>
    </div>

    <div class="box gym">
      <?php if(get_field('browse_gym')): ?>
        <img src="<?php the_field('browse_gym'); ?>" alt="">
      <?php endif; ?>
    </div>

  </div>
</section>

<!-- Customers -->
<section class="customers">
  <h2>OUR HAPPY CUSTOMERS</h2>

  <div class="customer-cards">

    <!-- Customer 1 -->
    <div class="customer-card">
      <div class="stars"><?php the_field('customer_1_rating'); ?></div>

      <div class="user">
        <h4><?php the_field('customer_1_name'); ?></h4>
        <span class="tick">✔</span>
      </div>

      <p><?php the_field('customer_1_review'); ?></p>
    </div>

    <!-- Customer 2 -->
    <div class="customer-card">
      <div class="stars"><?php the_field('customer_2_rating'); ?></div>

      <div class="user">
        <h4><?php the_field('customer_2_name'); ?></h4>
        <span class="tick">✔</span>
      </div>

      <p><?php the_field('customer_2_review'); ?></p>
    </div>

    <!-- Customer 3 -->
    <div class="customer-card">
      <div class="stars"><?php the_field('customer_3_rating'); ?></div>

      <div class="user">
        <h4><?php the_field('customer_3_name'); ?></h4>
        <span class="tick">✔</span>
      </div>

      <p><?php the_field('customer_3_review'); ?></p>
    </div>

  </div>
</section>
<!-- Newsletter -->
<section class="newsletter">
  <div class="newsletter-box">

    <!-- HEADING -->
    <h3><?php the_field('newsletter_heading'); ?></h3>

    <!-- FORM -->
    <div class="newsletter-form">
      <input 
        type="email" 
        placeholder="<?php the_field('newsletter_heading_email'); ?>"
      >

      <button>
        <?php the_field('newsletter_button_text'); ?>
      </button>
    </div>

  </div>
</section>

<?php get_footer(); ?>