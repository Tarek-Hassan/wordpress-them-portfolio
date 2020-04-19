<?php get_header();?>
<section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="skills">
  <div class="w-100">
    <h2 class="mb-5">Skills</h2>
    <div class="subheading mb-3">Programming Languages &amp; Tools</div>
    <ul class="list-inline dev-icons">
      <?php 
$args=array(
  "post_type"=>['skills'],
);
$query= new wp_Query($args);
if($query->have_posts()){ while($query->have_posts()){ $query->the_post();?>
      <li class="list-inline-item">
        <?php echo the_title() ."    <i class='".get_field("icon")."'></i>";?>
      </li><br />

      <?php }}?>
    </ul>
  </div>
</section>
<?php get_footer();?>