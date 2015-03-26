<?php
/* Template Name: Blog Masonry */
$sb = get_post_meta($post->ID, 'my_select_1', true);
?> 
<?php if(is_page_template('page_blog_masonry.php')): ?>
<?php get_header(); ?>
<script type="text/javascript">
window.onload = function(event) {
    jQuery('#bloglist_masonry').masonry({
      itemSelector: '.box',
      // set columnWidth a fraction of the container width
    });
  };	

window.onresize = function(event) {
    jQuery('#bloglist_masonry').masonry({
      itemSelector: '.box',
      // set columnWidth a fraction of the container width
    });
  };

</script>

 		<div id="content-wrapper" class="no-bg">
        <div class="container">
            <ul id="bloglist_masonry">
            <?php 
            $paged = get_query_var('paged') ? get_query_var('paged') : 1;
            $wp_query = new WP_Query(array(	'post_type' => 'post','paged' => $paged));
			
		    if (have_posts()) : while (have_posts()) : the_post(); ?>
                                <li class="one-third column box">
                                	<div class="inner">
                                	<div class="pic_hover">
                                	<a class="image" href="<?php the_permalink(); ?>">                                    
                                    <span class="overlay"></span>
                                	<?php the_post_thumbnail('full'); ?>
                                    </a>
                                    </div>
                                    <div class="text">
                                    
                      <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                      <div class="post-date"><?php the_time('l, F jS, Y') ?></div>
                      
                      <div class="blog-content">
                      
                      <?php $file = get_post_meta($post->ID, 'main_pic', true); ?>
                      <?php if($file!=''){ ?>
                      <img class="blogpic" src="<?php echo $file ?>" />
                      <?php } ?>
                      <?php $vid = get_post_meta($post->ID, 'extra_url', true); ?>
                      <?php if($vid!=''){ ?>
                      <iframe src="<?php echo $vid ?>" frameborder="0" width="580" height="435" allowfullscreen></iframe>
                      <?php } ?>
                      <?php echo content(45);?>
                      <div class="blog-info"><span class="readmore-span"><a href="<?php the_permalink(); ?>" ><?php echo __('Read More','Lezzatos'); ?></a></span>
                    <div class="clear"></div>
                </div>
                      </div>
                        <?php	edit_post_link(esc_html__('Edit this entry.', 'Lezzatos'), '<p class="editLink">', '</p>'); ?><br />
                        </div>
                        </div>
                    </li>
            <?php 		endwhile;endif; 	?>
            		<li class="sixteen columns box">
			<?php if (function_exists("pagination")) {
            pagination(); } ?>
             <?php wp_reset_query(); ?> 
            		</li>
            </ul>

    	<div class="clear"></div>
		</div>
        </div>
       
        <!-- ********** close content *********** -->
<?php get_footer(); ?>
<?php endif; ?>