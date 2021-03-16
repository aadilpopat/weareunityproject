<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

get_header();
?>

<main id="site-content" role="main">

  <div id="landing-block">
    <div id="landing-text">
      <h1>GRC<br>GLASS REINFORCED<br>GYPSUM</h1>
      <h2>Design, Supply, Manufacture & Install</h2>
      <p>Mainly use for interior work. Versatile in its colour and finish, it is created in a mould to create any shape of any size required. It is light, strong and fire retardant.</p>
      <span id="landing-arrow">&#10230;</span>

    </div>
  </div>

  <div class="grey-bk">

    <div class="section2-text">
      <p class="has-text-align-center"><span class="playfair">Simplicity Specialist Finishes</span> provide a service in which they supply a number of <span class="playfair">specialised finishes</span> in the <span class="playfair">construction industry.</span> Where an architecture firm will design or desire such specialised finishes, Simplicity will take the design and design the technicalities of it, manufacture and install it.</p>
    </div>

    <div class="carousel type-one-carousel" dir="rtl">
      <div>
        <div class="text slider-1-accent-1">
          <h3>GRC</h3>
          <p>Design, Supply, Manufacture & Install</p><span class="slide-arrow">&#10230;</span>
        </div>
      </div>

      <div>
        <div class="text slider-1-accent-2">
          <h3>GRC</h3>
          <p>Design, Supply, Manufacture & Install</p><span class="slide-arrow">&#10230;</span>
        </div>
      </div>
      
      <div>
        <div class="text slider-1-accent-1">
          <h3>GRC</h3>
          <p>Design, Supply, Manufacture & Install</p><span class="slide-arrow">&#10230;</span>
        </div>
      </div>

      <div>
        <div class="text slider-1-accent-2">
          <h3>GRC</h3>
          <p>Design, Supply, Manufacture & Install</p><span class="slide-arrow">&#10230;</span>
        </div>
      </div>
    </div>

    <div class="carousel type-two-carousel">
      <div>
        <div class="text slider-2-accent-1">
          <h3>JESMONITE</h3>
          <p>Design, Supply, Manufacture & Install</p><span class="slide-arrow">&#10230;</span>
        </div>
      </div>

      <div>
        <div class="text slider-2-accent-2">
          <h3>JESMONITE</h3>
          <p>Design, Supply, Manufacture & Install</p><span class="slide-arrow">&#10230;</span>
        </div>
      </div>
      
      <div>
        <div class="text slider-2-accent-1">
          <h3>JESMONITE</h3>
          <p>Design, Supply, Manufacture & Install</p><span class="slide-arrow">&#10230;</span>
        </div>
      </div>

      <div>
        <div class="text slider-2-accent-2">
          <h3>JESMONITE</h3>
          <p>Design, Supply, Manufacture & Install</p><span class="slide-arrow">&#10230;</span>
        </div>
      </div>
    </div>


    

    <div id="quote-block"><img class="quote-img" src="http://localhost/unity-task/wp-content/uploads/quote-block.png"></div>

</div>

    <div id="contact-area">
      <div class="contact-area-first-half">
        <h3 class="contact-form-title">Do you have a project in mind?</h3>
        <?php echo do_shortcode('[contact-form-7 id="218" title="Contact Form"]'); ?>
      </div>
      <div class="contact-area-second-half">
        <div class="split"></div>
        <img id="contact-form-img" src="http://localhost/unity-task/wp-content/uploads/Contact-form.png">
        <div class="split"></div>
      </div>
      <div class="contact-form-logo"><img id="contact-form-logo" src="http://localhost/unity-task/wp-content/uploads/logo-placeholder-png.png"></div>
    </div>
  </div>
 
</main><!-- #site-content -->

<?php get_template_part( 'template-parts/footer-menus-widgets' ); ?>

<?php
get_footer();