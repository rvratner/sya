<?php /* Template Name: Contact Page */ ?>
<?php

    //response generation function

    $response = "";

    //function to generate response
    function my_contact_form_generate_response($type, $message){

    global $response;

    if($type == "success") $response = "<div class='success'>{$message}</div>";
        else $response = "<div class='error'>{$message}</div>";
    }

    //response messages
    $not_human       = "Human verification incorrect.";
    $missing_content = "Please supply all information.";
    $email_invalid   = "Email Address Invalid.";
    $message_unsent  = "Message was not sent. Try Again.";
    $message_sent    = "Thanks! Your message has been sent.";

  //user posted variables

    $name = null;
    $email = null;
    $message = null;
    $youtube = null;
    $human = null;
    $missing_content = null;
    if (isset($_POST['message_name']))
        $name = $_POST['message_name'];
    
    if (isset($_POST['message_email']))
        $name = $_POST['message_email'];
    
    if (isset($_POST['message_text']))
        $name = $_POST['message_text'];
    
    if (isset($_POST['youtube_link']))
        $name = $_POST['youtube_link'];
    
    if (isset($_POST['message_human']))
        $name = $_POST['message_human'];
    

  //php mailer variables
  $to = get_option('admin_email');
  $subject = "Someone sent a message from ".get_bloginfo('name');
  $headers = 'From: '. $email . "\r\n" .
    'Reply-To: ' . $email . "\r\n";

  if(!$human == 0){
    if($human != 2) my_contact_form_generate_response("error", $not_human); //not human!
    else {

      //validate email
      if(!filter_var($email, FILTER_VALIDATE_EMAIL))
        my_contact_form_generate_response("error", $email_invalid);
      else //email is valid
      {
        //validate presence of name and message
        if(empty($name) || empty($message)){
          my_contact_form_generate_response("error", $missing_content);
        }
        else //ready to go!
        {
          $sent = wp_mail($to, $subject, strip_tags($message), $headers);
          if($sent) my_contact_form_generate_response("success", $message_sent); //message sent!
          else my_contact_form_generate_response("error", $message_unsent); //message wasn't sent
        }
      }
    }
  }
  else if ( $_POST['submitted']) my_contact_form_generate_response("error", $missing_content);


?>

<?php get_header(); ?>

  <div id="primary" class="site-content">
    <div id="content" role="main">

      <?php while ( have_posts() ) : the_post(); ?>

          <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

            <header class="entry-header">
              <h1 class="entry-title"><?php the_title(); ?></h1>
            </header>

            <div class="entry-content">
              <?php the_content(); ?>

              <style type="text/css">
                .error{
                  padding: 5px 9px;
                  border: 1px solid red;
                  color: red;
                  border-radius: 3px;
                }

                .success{
                  padding: 5px 9px;
                  border: 1px solid green;
                  color: green;
                  border-radius: 3px;
                }

                form span{
                  color: red;
                }
              </style>

              <div id="respond">
                <?php echo $response; ?>
                <form action="<?php the_permalink(); ?>" method="post">
                  <p><label for="name">Name: </label><br><input type="text" name="message_name" value=""></p>
                  <p><label for="message_email">Email: </label></br><input type="text" name="message_email" value=""></p>
                  <p><label for="message_text">Share your story: <span>*</span> <br><textarea type="text" name="message_text"></textarea></label></p>
                  <p><label for="message_text">Share a video:</label> <br><textarea type="text" name="youtube_link"></textarea></p>
                  <p><label for="message_human">Human Verification: </label><br><input type="text" style="width: 60px;" name="message_human"> + 3 = 5</p>
                  <input type="hidden" name="submitted" value="1">
                  <p><input type="submit"></p>
                </form>
              </div>


            </div><!-- .entry-content -->

          </article><!-- #post -->

      <?php endwhile; // end of the loop. ?>

    </div><!-- #content -->
  </div><!-- #primary -->

<?php get_footer(); ?>