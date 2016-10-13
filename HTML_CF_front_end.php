<?php

if (!defined( 'ABSPATH')) exit;
 
class HTML_CF_front_end {
	
	function __construct()
	{	
		add_shortcode( 'HTML-CF', array($this,'html_CF_SC'));
	}


	function html_CF_SC( $atts ){

		wp_enqueue_script('jquery');
		wp_enqueue_style('html_CF_css',plugin_dir_url( __FILE__ ).'css/form_style.css');

		if (isset($_POST['email']) || isset($_POST['Email'])) {
			ob_start();

			$message 	= null;
			$email 		= null;
			foreach ($_POST as $key => $value) {
				 
				 if(strpos(strtolower($key), 'captcha') !== false){

				 	$captcha = $value;

				 }elseif(strpos(strtolower($key), 'email') !== false){

				 	$email = $value;

				 }else{
					
					if(strpos($value, "\n") !== FALSE) {

						$message .= "<b>".$key."</b>:-<br> ";
						
					}else{

						$message .= "<b>".$key."</b>: ";
					}
				 	$message .= $value."<br><br>";
				 }
			}


			// get the blog administrator's email address
	        $to 		= get_option( 'admin_email' );
		    $headers 	= 'MIME-Version: 1.0' . "\r\n";
		    $headers   .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
		    $headers   .= 'From: '.$email. "\r\n";
		    $headers   .= 'Reply-To: '.$email . "\r\n" . 'X-Mailer: PHP/' . phpversion();
	        $subject	= get_bloginfo( 'name' );
	        $message	= nl2br($message);


	        // If email has been process for sending, display a success message
	        if($captcha == $_SESSION["cf_captcha"]){

		        if ( wp_mail( $to, $subject, $message, $headers ) ) {

		            echo '<div class="ThanksMsg">';
		        	echo "<p>Thanks for writing us!, We'll get back to you soon..</p>";
		        	echo '</div>';
		        	
		        } else {

		        	 echo '<div class="ErrorMsg">';
		        	 echo 'An unexpected error occurred..!!';
		        	 echo '</div>';
		        }
	        }else{
	        	    echo '<div class="ErrorMsg">';
		        	echo "<p>Please enter correct captcha text..</p>";
		        	echo '</div>';
		         }

			return ob_get_clean();
		}
		$codeText = str_replace('\r\n', PHP_EOL ,rawurldecode(get_option('HTML_CF_code')));
		return str_replace('\\', '',$codeText);
		
	}
}