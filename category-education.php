<?php get_header();?>
<section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="education">
  <div class="w-100">
    <h2 class="mb-5">Education</h2>
    <?php 
$args=array(
  "post_type"=>['educations'],
);
$query= new wp_Query($args);
if($query->have_posts()){ while($query->have_posts()){ $query->the_post();?>
    <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-5">
      <div class="resume-content">
        <h3 class="mb-0"><?php echo get_field("university");?></h3>
        <div><?php echo get_field("collage")."  -  ".get_field("track");?></div>
        <p><?php echo "GPA:- ".get_field("gpa");?></p>
      </div>
      <div class="resume-date text-md-right">
        <span class="text-primary"><?php echo get_field("from")."  -  ".get_field("to");?></span>
      </div>
    </div>
    <hr class="m-0">
    <?php }}?>
  </div>
</section>
<?php get_footer();?>