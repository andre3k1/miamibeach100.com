<?
	include("../rfm.php");

	$action = $_REQUEST['action'];

	$fnameError		= '';
	$lnameError		= '';
	$emailError		= '';
	$mobileError	= '';

	$error = false;

	if($action == "process"){

		$fname			= $_REQUEST['fname'];
		$lname			= $_REQUEST['lname'];
		$email 			= $_REQUEST['email'];
		$mobile			= $_REQUEST['mobile'];

		$errorMsg 		= "";

		//FIRST NAME
		if($fname == "" || strlen($fname) < 1){
			$error = true;
			$fnameError = 'error';
			$errorMsg .= "Sorry, you must include your first name.<br />";
		}

		//LAST NAME
		if($lname == "" || strlen($lname) < 1){
			$error = true;
			$lnameError = 'error';
			$errorMsg .= "Sorry, you must include your last name.<br />";
		}

		//MOBILE PHONE
		//leave only numerica characters
	  	$mobile = preg_replace('/[\D]/','',$mobile);

		if($mobile == "" || strlen($mobile) < 1){
			$error = true;
			$mobileError = 'error';
			$errorMsg .= "Sorry, you must include your mobile number.<br />";
		} else {
			if(strlen($mobile) < 10 || strlen($mobile) > 11){
				$error = true;
				$mobileError = 'error';
				$errorMsg .= "Sorry, that is not a valid mobile number.<br />";
			}
		}

		//EMAIL
		if($email == "" && strlen($email) < 1){
			$error = true;
			$emailError = 'error';
			$errorMsg .= "Sorry, you must include your email address.<br />";
		} else {
			//EMAIL VALIDATION
			if(!eregi("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$", $email)) {
				$error = true;
				$emailError = 'error';
				$errorMsg .= "Sorry, the email address you provided must be a valid email address.<br />";
			}
		}

		if(!$error){

			$rfm = new rfm();

			$url = (!empty($_SERVER['HTTPS'])) ? "https://".$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'] : "http://".$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];

			$level = "90822mb100";

			//API CALL
			$result = $rfm->sendOptin($mobile,$level,$fname,$lname,$email,$url);
			//echo $result;

			$results = split("\n",$result);
			//GET FIRST LINE
			if($results[0] != ""){

				//GET THE CSV FROM FIRTS LINE
				$results = split(",",$results[0]);

				//GET API CODE
				$code = $results[0];

				if($code == 1){
					$message = "Welcome to Miami Beach Mobile Messaging. You will receive an SMS message shortly, please reply Y to confirm your subscription. Message &amp; data rates may apply.";
				} else if($code == 7) {
					$message = "Thank you! You are already subscribed to Miami Beach's Centennial Alerts.";

				} else {
					$errorMsg = "Sorry, there was a problem with your request, please try again later.";
				}
			}
		}
	}
?>
<?php
/**
 * Default Events Template
 * This file is the basic wrapper template for all the views if 'Default Events Template'
 * is selected in Events -> Settings -> Template -> Events Template.
 *
 * Override this template in your own theme by creating a file at [your-theme]/tribe-events/default-template.php
 *
 * @package TribeEventsCalendar
 *
 */

if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
}

?>

<?php get_header(); ?>

	<div class="vectors-left" data-stellar-ratio="1.1"><img src="<?php echo get_template_directory_uri(); ?>/img/vectors/vectors-left-pics-social.png" alt=""></div>
	<div class="vectors-right" data-stellar-ratio="1.1"><img src="<?php echo get_template_directory_uri(); ?>/img/vectors/vectors-right-pics-social.png" alt=""></div>

	<section class="main-parallax events">

		<?php get_template_part( 'nav' ); ?>

		<div class="container">
			<div class="page-title title-shadow">
				<h1 class="name"><span class="name-part title">Soooo</span></h1><h2 <span class="name-part subtitle"> much to experience</h2>
			</div>
		</div>
	</section>

	<section class="slant events">

		<div class="container">
			<h5 class="hued animscroll">This is How We Celebrate!</h5>
			<!-- <p class="events-blurb blurb animscroll">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc adipiscing, odio eu euismod blandit, ligula mi faucibus erat, eget suscipit ante lorem id diam. In gravida fringilla felis, vel</p> -->
			<div class="vector-bg-right-small" data-stellar-ratio="1.1"></div>
			
			<div class="events-calendar">
				<div id="tribe-events-pg-template">
					<?php tribe_events_before_html(); ?>
					<?php tribe_get_view(); ?>
					<?php tribe_events_after_html(); ?>
				</div> <!-- #tribe-events-pg-template -->				
			</div>
			
			<div class="vector-bg-left-small-events" data-stellar-ratio="1.1"></div>

			<div class="opt-in-events">

				<div class="iphone-events animscroll-iphone">
					<form class="opt-in-form-events" action="../index.php" method="post" onsubmit="validatePlayer(this);return false;">
						<input type="hidden" name="action" value="process"  />
						<input type="hidden" name="gfi" id="gfi" value=""  />
						<input type="text" class="fname input <?=$fnameError?>" name="fname" tabindex="1" value="<?=$fname?>" placeholder="First Name" />
						<input type="text" class="lname input <?=$lnameError?>" name="lname" tabindex="2" value="<?=$lname?>"  placeholder="Last Name" />
						<input type="text" class="email input <?=$emailError?>" name="email" tabindex="3" value="<?=$email?>" placeholder="Email" />
						<input type="text" class="mobile input <?=$mobileError?>" name="mobile" tabindex="4" value="<?=$mobile?>" placeholder="Mobile (XXX-XXX-XXXX)"/>
						<input type="submit" tabindex="6" name="submit" value="Submit" class="submit disabled">
						<input type="checkbox" tabindex="5" class="terms-conditions"><p class="terms">I agree to the <a href="#terms" class="lightbox" data-lightbox-type="inline">Terms of Service</a></p>
					</form>
				</div>

				<div class="dont-forget"></div>

				<div class="opt-in-info-events animscroll">
					<h3>Stay in the Know</h3>
					<h4>Receive Mobile alerts
						on all Events and Information
						related to the Miami Beach
						Centennial Celebration!</h4>
						<!-- <p class="animscroll">Brought to you by</p> <img src="<?php //echo get_template_directory_uri(); ?>/img/logo-CocaCola.png" alt="" class="animscroll"> -->
						<div class="errors"><p><?=$errorMsg?></p></div>
						<div class="result"><p><?=$message?></p></div>
				</div>
				<div class="vector-right-background-events" data-stellar-ratio="1.1"><img src="<?php echo get_template_directory_uri(); ?>/img/vectors/vector-right-background-events.png" alt=""></div>				

			</div>

			<div id="terms" style="display: none;">
				<h4 class="text-center pb15">Mobile Terms and Conditions</h4>
				<p>
					By texting MB100 to short code 90822 from my mobile number or inserting my mobile number on a web page to opt in for text messages I agree to receive periodic text messages with information regarding Miami Beach Centennial events generated by an automated messaging platform to my mobile number. Maximum 8 messages per month. I understand my affirmative reply will constitute written consent and that my consent is not required to make any purchase. Text STOP to 90822 to cancel. Text HELP to 90822 for help. Message and Data Rates May Apply.
					<br>
					<br>
					<strong>To Opt In</strong>
					<br>
					To start receiving texts from Miami Beach Centennial, use the form below to enter your mobile phone information or text MB100 to 90822 to join Miami Beach Centennial Alerts. Message & Data rates may apply. A message will be sent to your mobile device for verification, reply with 'YES' to confirm. Supported Carriers- Alltel, AT&T Mobility, Boost, Cincinnati Bell, Nextel, Sprint, T-Mobile, U.S. Cellular, Verizon Wireless, Virgin Mobile and others.
					<br>
					<br>
					<strong>To Opt-Out</strong>
					<br>
					To cancel text messaging alerts, text STOP to 90822 from your mobile device and you will be unsubscribed from our SMS text messaging service immediately. Once you have cancelled, you will not receive any additional messages unless you re-register.
					<br>
					<br>
					<strong>Mobile Privacy Policy</strong>
					<br>
					Miami Beach Centennial respects your privacy. We will not share or use your mobile number for any other purpose. We will only use information you provide to transmit your text message or email. Nonetheless, we reserve the right at all times to disclose any information as necessary to satisfy any law, regulation or governmental request, to avoid liability, or to protect our rights or property. When you complete forms online or otherwise provide us information in connection with the Service, you agree to provide accurate, complete and true information. You agree not to use a false or misleading name or a name that you are not authorized to use. If we, in our sole discretion, believe that any such information is untrue, inaccurate or incomplete, we may refuse you access to the Service and pursue any appropriate legal remedies.
				</p>
			</div>

		</div>

	</section>

<?php get_footer(); ?>

<script>jQuery( "nav li a:contains('Events')" ).parent().addClass("current-menu-item");</script>