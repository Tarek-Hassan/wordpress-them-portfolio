<?php get_header();?>
<section class="resume-section p-3 p-lg-5 d-flex justify-content-center" id="experience">
  <div class="w-100">
    <h2 class="mb-5">Experience</h2>
    <?php 
$args=array(
  "post_type"=>['worke_expereance'],
);
$query= new wp_Query($args);
if($query->have_posts()){ while($query->have_posts()){ $query->the_post();?>

    <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-5">
      <div class="resume-content">
        <h3 class="mb-0"><?php the_title();?></h3>
        <div class="subheading mb-3"><?php echo get_field("subtitle");?></div>
        <p><?php the_content();?></p>
      </div>
      <div class="resume-date text-md-right">
        <span class="text-primary">
          <?php if(!get_field("to")){echo get_field("from")." -  present";}else echo get_field("from")."-".get_field("to");?></span>
      </div>
    </div>
    <hr class="m-0">
    <?php }}?>
  </div>
</section>
<?php get_footer();?>