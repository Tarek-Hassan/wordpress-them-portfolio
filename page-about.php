<?php get_header();?>
<div class="container bg-warning ">
    <h1 class="text-left  text-info my-5">About</h1>
    <div class="row d-flex justify-content-center">
        <?php if(have_posts()){ the_post();?>
        <div class="card bg-secondary" style="width: 18rem;">
            <?php the_post_thumbnail("thumbnail");?>
            <!-- <img src="..." class="card-img-top" alt="..."> -->
            <div class="card-body ">
                <h5 class="card-title bg-info"><?php the_title();?></h5>
                <h5 class="card-title bg-info"><?php the_category();?></h5>
                <p class="card-text bg-secondary"> <?php the_content();?></p>
                <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
            </div>
        </div>
        <?php }?>
    </div>
</div>
<?php get_footer();?>