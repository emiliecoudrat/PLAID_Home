<?php
  get_header();
?> 			

<div class="row">
  <section>
    <!-- <div class="section">  -->
    <div class="col-md-8">

      <?php if (have_posts()) : ?>
       		<?php while (have_posts()) : the_post(); ?>
       			<div class="sujets">

       			<div class="titreart">
            <a href="<?php echo get_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
            </div>

       			<div class="artimg">
       		   <?php //the_post_thumbnail('medium', array("class" => "img-responsive pull-right backgroundimg mask img-thumbnail")); ?>
       				<figure class="img pull-right">
    						<?php the_post_thumbnail('medium'); ?>
    						<div class="mask"></div>
    					</figure>
            </div>

       				<div class="article">
       					<?php the_content(); ?>
       				</div>

              <div class="date">
                <?php the_date(); ?>
              </div>

              <p class="post-info">
                  Posté dans <?php the_category(', '); ?>
              </p>

              <div>
              <?php comments_template('/comments.php', true); ?>
       				</div>

              <div class="star">
              	<span><i class="fa fa-star yellow"></i></span>
            	</div>

              <?php wp_link_pages(); ?>

       				</div>

       	  <?php endwhile; ?>
      <?php endif; ?>
  
    </div>
  </section>

    <div class="col-md-4 colonnedroite">

    <!-- MON ASIDE -->
    
      <aside>

        <ul class="rowaside">
            <?php dynamic_sidebar( 'Main Sidebar' ); ?>
        </ul>
      
      </aside>
    </div> <!-- col-md-4-->

</div> <!-- row -->
</div> <!--wrapper-->

<?php get_footer(); ?>



