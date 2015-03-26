<?php 
	$de_data = get_option( 'Lezatos_options' ); 
	global $de_data;
	$opt_slider_home = 'Show Title & Description';
	$trans_type = $de_data['DE_transition_type'];
	if($trans_type=="2-Slide Top"){$t=2;}
	elseif($trans_type=="3-Slide Right"){$t=3;} 
	elseif($trans_type=="4-Slide Bottom"){$t=4;} 
	elseif($trans_type=="5-Slide Left"){$t=5;} 
	elseif($trans_type=="6-Carousel Right"){$t=6;} 
	elseif($trans_type=="7-Carousel Left"){$t=7;} 
	elseif($trans_type=="8-None"){$t=0;} 
	else{$t=1;}  
 ?>
		<script type="text/javascript">
			jQuery(function($){
				<?php if(is_home()&&$current_post_type!="project"): ?>
					<?php $wp_query = new WP_Query(array('posts_per_page'=> 999,'post_type' => 'slider','paged' => $paged) );?>
					
					var slides=[];
					<?php while ($wp_query->have_posts()) : $wp_query->the_post();?> 
					
					<?php 
					
					$btn_label = isset($btn_label) ? $btn_label : null;
					$slide_url = isset($slide_url) ? $slide_url : null;
					$btn_url = isset($btn_url) ? $btn_url : null;
					
					$btn_label = get_post_meta($post->ID, 'btn_label', true);
					if(empty($btn_label)){
						$btn_label = "Read More";
					}
					$slide_url = get_post_meta($post->ID, 'url', true);
					if(!empty($slide_url)){
						$btn_url = "<br><a class='btn' href='".$slide_url."'>".$btn_label."</a>";
					}else{
						$btn_url = '';
					}
					?>
					
					<?php if($opt_slider_home=='Show Title Only'){ ?>
					slides.push({image : '<?php echo get_post_meta($post->ID, 'pic_1', true); ?>', title : "<?php the_title(); ?>", thumb : '', url : '<?php echo get_post_meta($post->ID, 'url', true); ?>'})
					<?php } ?>
					
					<?php 
					// detect if slider has url
					
					?>;
					
					<?php if($opt_slider_home==''||$opt_slider_home=='Show Title & Description'){ ?>
					slides.push({image : '<?php echo get_post_meta($post->ID, 'pic_1', true); ?>', title : "<?php if(htmlspecialchars(stripslashes($post->post_content))!=''){echo "<div class='clear'></div><div class='container'><div class='ten columns'>&nbsp;</div><div class='container'><div class='six columns'><div class='slide_text'><h2>".htmlspecialchars(stripslashes($post->post_title))."</h2>".$post->post_content.$btn_url."</div></div></div>"; }?>", thumb : '', url : '<?php echo get_post_meta($post->ID, 'url', true); ?>'})
					<?php } ?>
					
					<?php if($opt_slider_home=='No Text'){ ?>
					slides.push({image : '<?php echo get_post_meta($post->ID, 'pic_1', true); ?>', title : "", thumb : '', url : '<?php echo get_post_meta($post->ID, 'url', true); ?>'})
					<?php } ?>
					
					<?php endwhile;?>
					<?php endif; ?>
					<?php wp_reset_query(); ?> 
					
					
				$.supersized({
					// Functionality
					slide_interval      :  <?php echo $de_data['DE_slide_interval']; ?>, // Length between transitions
					
					transition          :   <?php echo $t; ?>, // 0-None, 1-Fade, 2-Slide Top, 3-Slide Right, 4-Slide Bottom, 5-Slide Left, 6-Carousel Right, 7-Carousel Left
					transition_speed	:	<?php echo $de_data['DE_slider_transition_speed']; ?>, // Speed of transition
					// Components							
					slide_links			:	'blank',	// Individual links for each slide (Options: false, 'num', 'name', 'blank')
					slides              :   slides,
					autoplay			:	<?php echo $de_data['DE_slider_autoslide']; ?>,					
					fit_always			:	<?php echo $de_data['DE_slider_fit_always']; ?> 
					
				});
		    });
		</script>