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

<div id="landing-block">&nbsp;</div>

<div class="grey-bk intro-text"><p class="has-text-align-center"><span class="playfair">Simplicity Specialist Finishes</span> provide a service in which they supply a number of <span class="playfair">specialised finishes</span> in the <span class="playfair">construction industry.</span> Where an architecture firm will design or desire such specialised finishes, Simplicity will take the design and design the technicalities of it, manufacture and install it.</p></div>

<div class="grey-bk">
<div class="slick-slider-1" dir="rtl">
<div><a href="#"><img src="https://via.placeholder.com/700x375.jpg?text=&nbsp;"></a></div>
<div><a href="#"><img src="https://via.placeholder.com/700x375.jpg?text=&nbsp;"></a></div>
<div><a href="#"><img src="https://via.placeholder.com/700x375.jpg?text=&nbsp;"></a></div>
<div><a href="#"><img src="https://via.placeholder.com/700x375.jpg?text=&nbsp;"></a></div>
</div>
</div>

<div class="grey-bk">
<div class="slick-slider-2">
<div><a href="#"><img src="https://via.placeholder.com/545x375.jpg?text=&nbsp;"></a></div>
<div><a href="#"><img src="https://via.placeholder.com/545x375.jpg?text=&nbsp;"></a></div>
<div><a href="#"><img src="https://via.placeholder.com/545x375.jpg?text=&nbsp;"></a></div>
<div><a href="#"><img src="https://via.placeholder.com/545x375.jpg?text=&nbsp;"></a></div>
</div>
</div>

<div id="quote-block"><img class="quote-img" src="http://localhost/unity-task/wp-content/uploads/quote-block.png"></div>

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

<script type="text/javascript">
    jQuery(document).ready(()=> {
    jQuery('.slick-slider-1').slick({
    slidesToShow: 2.25,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 2000,
    infinite: true,
    rtl: true,
    arrows: false,
responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 2.25,
        slidesToScroll: 3,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
  ]

});
    });
</script>

<script type="text/javascript">
    jQuery(document).ready(()=> {
    jQuery('.slick-slider-2').slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 2000,
    infinite: true,
    arrows: false,
responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
  ]

});
    });
</script>


</main><!-- #site-content -->

<?php get_template_part( 'template-parts/footer-menus-widgets' ); ?>

<?php
get_footer();
