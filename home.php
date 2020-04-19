<?php get_header();
$args=array(
  "post_type"=>['personal_data'],
  "posts_per_page"=>1,
);
$query= new wp_Query($args);
if($query->have_posts()){ $query->the_post();?>

<div class="container-fluid p-0">

  <section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="about">
    <div class="w-100">
      <h1 class="mb-0"><?php echo get_field( "fristname" );?>
        <span class="text-primary"><?php echo get_field( "midname" );?></span>
        <?php echo get_field( "lastname" );?>
      </h1>
      <div class="subheading mb-5"><?php echo "Address:-".get_field( "address" );?><br />
        <?php echo "Email:-<a href='mailto:". get_field( "email" )."'>". get_field( "email" )."</a>";?>
        <div class="social-icons">
          <a href="<?php echo get_field( "linkedin" );?>" title="<?php echo get_field( "linkedin" );?>">
            <i class="fab fa-linkedin-in"></i>
          </a>
          <a href="<?php echo get_field( "github" );?>" title="<?php echo get_field( "github" );?>">
            <i class="fab fa-github"></i>
          </a>

        </div>
      </div>
      <p class="lead mb-5"><?php echo get_field( "content" );?></p>

    </div>
  </section>
  <?php }?>
  <hr class="m-0">

  <section class="resume-section p-3 p-lg-5 d-flex justify-content-center" id="experience">
    <div class="w-100">
      <h2 class="mb-5">Experience</h2>
      <?php 
$args=array(
  "post_type"=>['worke_expereance'],
  "posts_per_page"=>1,
);
$query= new wp_Query($args);
if($query->have_posts()){ while($query->have_posts()){ $query->the_post();?>

      <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-5">
        <div class="resume-content">
          <a href="<?php echo get_the_permalink();?>">
            <h3 class="mb-0"><?php the_title();?></h3>
          </a>
          <div class="subheading mb-3"><?php echo get_field("subtitle");?></div>
          <p><?php the_content();?></p>
        </div>
        <div class="resume-date text-md-right">
          <span class="text-primary"> <?php echo get_field("from")."-".get_field("to");?></span>
        </div>
      </div>
      <?php }} ?>
      <a class='subheading mb-3' href='category/worke-expereance/'> SEE_MORE</a>
    </div>

  </section>

  <hr class="m-0">

  <section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="education">
    <div class="w-100">
      <h2 class="mb-5">Education</h2>
      <?php 
$args=array(
  "post_type"=>['educations'],
  // "posts_per_page"=>1,
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
      <?php }}?>
      <a class='subheading mb-3' href='category/education/'> SEE_MORE</a>
    </div>
  </section>

  <hr class="m-0">

  <section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="skills">
    <div class="w-100">
      <h2 class="mb-5">Skills</h2>
      <div class="subheading mb-3">Programming Languages &amp; Tools</div>
      <ul class="list-inline dev-icons">
        <?php 
$args=array(
  "post_type"=>['skills'],
  "posts_per_page"=>1,
);
$query= new wp_Query($args);
if($query->have_posts()){ while($query->have_posts()){ $query->the_post();?>
        <a href="<?php echo get_the_permalink();?>">
          <li class="list-inline-item">
            <?php the_title();?>
            <?php echo"<i class='".get_field("icon")."'></i>";?>
          </li>
        </a>
        <?php }}?>
      </ul>
     <a class='subheading mb-3' href='category/myskills/'> SEE_MORE</a>
    </div>
  </section>

  <hr class="m-0">

  <section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="interests">
    <div class="w-100">
      <h2 class="mb-5">Interests</h2>
      <?php 
$args=array(
  "post_type"=>['interests'],
);
$query= new wp_Query($args);
if($query->have_posts()){ while($query->have_posts()){ $query->the_post();?>
      <p><?php the_content();?></p>
      <?php }}?>

    </div>
  </section>

  <hr class="m-0">
</div>


<?php get_footer();?>