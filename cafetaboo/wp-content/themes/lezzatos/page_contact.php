<?php
/**
* Template Name: Contact
*
*/
global $de_data;
$de_data = get_option( 'Lezatos_options' ); 
$de_email = $de_data['DE_email_contact'];

$nameError = '';
$emailError = '';
$phoneError = '';
$commentError = '';
$de_google_map = $de_data['DE_google_map'];
$sb = get_post_meta($post->ID, 'my_select_1', true);
?>
<?php 
if(isset($_POST['submitted'])) {

	
		if(trim($_POST['contactName']) === '') {
			$nameError = 'You forgot to enter your name.';
			$hasError = true;
		} else {
			$name = trim($_POST['contactName']);
		}
		
		if(trim($_POST['email']) === '')  {
			$emailError = 'You forgot to enter your email address.';
			$hasError = true;
		} else if (!eregi("^[A-Z0-9._%-]+@[A-Z0-9._%-]+\.[A-Z]{2,4}$", trim($_POST['email']))) {
			$emailError = 'You entered an invalid email address.';
			$hasError = true;
		} else {
			$email = trim($_POST['email']);
		}
		
		if(trim($_POST['phone']) === '') {
			$phoneError = 'You forgot to enter your phone.';
			$hasError = true;
		} else {
			$phone = trim($_POST['phone']);
		}
		
			
		if(trim($_POST['comments']) === '') {
			$commentError = 'You forgot to enter your comments.';
			$hasError = true;
		} else {
			if(function_exists('stripslashes')) {
				$comments = stripslashes(trim($_POST['comments']));
			} else {
				$comments = trim($_POST['comments']);
			}
		}
		if(trim($_POST['address']) === '') {
			$addressError = 'You forgot to enter your address.';
			$hasError = true;
		} else {
			if(function_exists('stripslashes')) {
				$address = stripslashes(trim($_POST['address']));
			} else {
				$address = trim($_POST['address']);
			}
		}
			
		if(!isset($hasError)) {
			
			if($de_email):
  			$email_address = $de_email;
			else:
			$email_address = 'info@cafetaboo.net';
    		endif;

			$emailTo = $email_address;
			$subject = 'Contact Message! '.$name;
			$sendCopy = trim($_POST['sendCopy']);
			$body = "Name: $name \n\nEmail: $email \n\nPhone: $phone \n\nComments: $comments \n\nAddress: $address";
			$headers = 'From: My Site <'.$emailTo.'>' . "\r\n" . 'Reply-To: ' . $email;
			
			mail($emailTo, $subject, $body, $headers);

			if($sendCopy == true) {
				$subject = 'You emailed Your Name';
				$headers = 'From: Your Name <post@cafetaboo.net>';
				mail($email, $subject, $body, $headers);
			}

			$emailSent = true;

		}
} ?>


<?php get_header(); ?>
	<div id="content-wrapper">
		<div class="container">
        <div class="twelve columns">
            
              <?php if($de_google_map!=''): ?>
              <div class="map">
               <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12616.717636455225!2d-122.42114857488613!3d37.76239124833797!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808f7e3125ba476f%3A0x42bdbf8e1c6317cf!2s600+York+St!5e0!3m2!1sen!2sin!4v1402031738783" width="600" height="450" frameborder="0" style="border:0"></iframe>         
              </div>
              <?php endif; ?>
              
              <!-- ********** content *********** -->
             		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>  
					<?php the_content(); ?>  
                    <?php	edit_post_link(esc_html__('Edit this entry.', 'Lezzatos'), '<p class="editLink">', '</p>'); ?>
                    <?php endwhile; else: ?>  
                    <h2>Woops...</h2>  
                    <p><?php echo __('Sorry, no posts found.','Lezzatos'); ?></p>  
                    <?php endif; ?>  
        <!-- ********** close content *********** -->
              
              <div class="contact_form_holder">
		             
		<form action="<?php the_permalink(); ?>" id="contactForm" method="post">
              <table class="table-form">
  <tr>
    <td><?php echo __('Name','Lezzatos'); ?></td>
    <td><input type="text" name="contactName" id="contactName" value="<?php if(isset($_POST['contactName'])) echo $_POST['contactName'];?>" class="requiredField" />
      <?php if($nameError != '') { ?>
      <span class="error-2"><?php echo __('Please check again.','Lezzatos'); ?></span>
      <?php } ?></td>
  </tr>
  <tr>
    <td><?php echo __('Email','Lezzatos'); ?></td>
    <td><input type="text" name="email" id="email" value="<?php if(isset($_POST['email']))  echo $_POST['email'];?>" class="requiredField email" />
      <?php if($emailError != '') { ?>
      <span class="error-2"><?php echo __('Please check again.','Lezzatos'); ?></span>
      <?php } ?></td>
  </tr>
  <tr>
    <td><?php echo __('Phone','Lezzatos'); ?></td>
    <td><input type="text" name="phone" id="phone" value="<?php if(isset($_POST['phone']))  echo $_POST['phone'];?>" class="requiredField phone" />
      <?php if($phoneError != '') { ?>
      <span class="error-2"><?php echo __('Please check again.','Lezzatos'); ?></span>
      <?php } ?></td>
  </tr>
  <tr>
    <td><?php echo __('Message','Lezzatos'); ?></td>
    <td><textarea name="comments" id="commentsText" rows="6" cols="30" class="requiredField"><?php if(isset($_POST['comments'])) { if(function_exists('stripslashes')) { echo stripslashes($_POST['comments']); } else { echo $_POST['comments']; } } ?></textarea>
      <?php if($commentError != '') { ?>
      <span class="error-2"><?php echo __('Please check again.','Lezzatos'); ?></span>
      <?php } ?></td>
  </tr>
  <tr>
    <td><?php echo __('Address','Lezzatos'); ?></td>
    <td><textarea name="address" id="addressText" rows="6" cols="30" class="requiredField"><?php if(isset($_POST['address'])) { if(function_exists('stripslashes')) { echo stripslashes($_POST['address']); } else { echo $_POST['address']; } } ?></textarea>
      <?php if($addressError != '') { ?>
      <span class="error-2"><?php echo __('Please check again.','Lezzatos'); ?></span>
      <?php } ?></td>
  </tr>
  <tr>
  	<td>&nbsp;</td>
    <td><!--<input style="width:24px; display:inline-block;" type="checkbox" name="sendCopy" id="sendCopy" value="true"<?php //if(isset($_POST['sendCopy']) && $_POST['sendCopy'] == true) echo ' checked="checked"'; ?> />Send a copy of this email to yourself
				<input type="text" name="checking" id="checking" class="screenReader" value="<?php if(isset($_POST['checking']))  echo $_POST['checking'];?>" /> -->
      <input type="hidden" name="submitted" id="submitted" value="true" />
      <button class="btn" type="submit"><?php echo __('SEND','Lezzatos'); ?></button></td>
  </tr>
  
</table>

  </form> 
        <?php if(isset($emailSent) && $emailSent == true) { ?>

        <div class="thanks">
         <?php echo __('Thank You! Your email was successfully sent.','Lezzatos'); ?>
      </div>
        
        <?php } ;?>
        	</div>
              
             
            </div>
            
            
           <?php if($sb!="None"){
			 echo '<div class="four columns">';	
				dynamic_sidebar( $sb );
			 echo '</div>' ;
			 }?> 
        
        
       
		
      </div>
        
        
        
  <div class="clear"></div>
        
        </div>
        </div>

             
<?php get_footer(); ?>