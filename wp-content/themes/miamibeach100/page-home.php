<?
	include("rfm.php");

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

			$level = "33139mb100";

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
<?php get_header(); ?>

	<div class="vectors-left" data-stellar-ratio="1.1"><img src="<?php echo get_template_directory_uri(); ?>/img/vectors/vectors-left-home.png" alt=""></div>
	<div class="vectors-right" data-stellar-ratio="1.1"><img src="<?php echo get_template_directory_uri(); ?>/img/vectors/vectors-right-home.png" alt=""></div>

	<div id="lightbox-form" style="display: none;">
		<h2>Fill out This Form and be the first to know when Miami Beach 100 event tickets come out!</h2>
		<?php echo do_shortcode( '[contact-form-7 id="2498" title="Data Capture Lightbox"]' ) ?>
	</div>	

	<section class="main-parallax home" data-stellar-background-ratio="0.9">

		<?php get_template_part( 'nav' ); ?>

		<div class="container-lrg">

			<img class="logo-large fadeIn animated" src="<?php echo get_template_directory_uri(); ?>/img/mb100-logo-large.png">

			<div class="tagline">
				<h1 class="name home-title">
					<span class="name-part title">100 </span> <span class="name-part animRight">Hour </span><span class="other"> Celebration</span>
				</h1>
				<h2 class="subtitle home-title">Get Ready <br> March 22 - 26</h2>
				<a href="http://miamibeach100.com/event/miami-beach-100-hour-centennial-celebration/" class="btn">Learn More &nbsp;&nbsp;<i class="fa fa-angle-right fa-lg"></i></a>
				<img class="act animLeft" src="<?php echo get_template_directory_uri(); ?>/img/act.png">
			</div>

		</div>
		
	</section>

	<section class="countDown">
		<div class="container">
			<div class="counter">
				<h3>The Countdown is on!</h3>
				<p>We are counting down to the Miami Beach Centennial Concert on March 26, 2015!</p>
				<!-- <br>Brought to you by</p> -->
				<!-- <img src="<?php //echo get_template_directory_uri(); ?>/img/logo-hublot.png" alt="Hublot"> -->
				<div style="padding:20px;"><div id="rC"></div></div>
			</div>
		</div>
	</section>

	<section class="opt-in">

		<div class="container">
			<div class="dont-forget"></div>
			<div class="opt-in-info animscroll">
				<h3>Stay in the Know</h3>
				<h4>Receive Mobile alerts
					on all Events and Information
					related to the Miami Beach
					Centennial Celebration!</h4>
					<div class="errors"><p><?=$errorMsg?></p></div>
					<div class="result"><p><?=$message?></p></div>
			</div>
			<div class="iphone animscroll-iphone">
				<form class="opt-in-form" action="index.php" method="post" onsubmit="validatePlayer(this);return false;">
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
			<div id="terms" style="display: none;">
				<h4 class="text-center pb15">Mobile Terms and Conditions</h4>
				<p>
					By texting MB100 to short code 33139 from my mobile number or inserting my mobile number on a web page to opt in for text messages I agree to receive periodic text messages with information regarding Miami Beach Centennial events generated by an automated messaging platform to my mobile number. Maximum 8 messages per month. I understand my affirmative reply will constitute written consent and that my consent is not required to make any purchase. Text STOP to 90822 to cancel. Text HELP to 90822 for help. Message and Data Rates May Apply.
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

	<section class="facts">
		<div class="container">
			<h5 class="light animscroll">Random Beach Facts</h5>
			<h5 class="small animscroll">Courtesy Of Professor Seth H. Bramson, Miami Beach City Historian</h5>
			<div class="flexslider animscroll">
				<ul class="slides">
				<li>
					<p>It all began with what would become the discovery of Miami Beach by father and son, Henry and Charles Lum, who sail boated up from Key West to a mangrove sandbar island in 1870. </p>
				</li>
				<li>
					<p>The Lums bought the island from Florida's Internal Improvement Fund for 35¢ an acre.</p>
				</li>
				<li>
					<p>Twelve Years later, in 1882, they sold it to Elnathan Field and Ezra Osborne for 75¢ an acre.</p>
				</li>
				<li>
					<p>After Field and Osborne's coconut plantation plans failed, they sold the land to John S. Collins and his son-in-law, Thomas Pancoast, for $1.25 an acre.</p>
				</li>
				<li>
					<p>Collins and Pancoast, needing financial assistance to complete their planned bridge between the main land and Ocean Beach, were given $50,000 by Carl Fisher, Miami Beach's founder, to complete the bridge.</p>
				</li>
				<li>
					<p>Fisher did not want to be paid back in cash by Collins and Pancoast. Instead, they gave him 222 acres of their land on Ocean Beach.</p>
				</li>
				<li>
					<p>Having trouble selling the land, Mr. Fisher hired Steve Hannagan, a famous New York publicist. </p>
				</li>
				<li>
					<p>It was Hannagan who sold Miami Beach by putting beautiful young girls in bathing suits. He photographed them in various poses on Miami Beach, then sent the pictures to all northern newspapers during winter and called it "cheesecake." </p>
				</li>
				<li>
					<p>It is true! Carl Fisher did buy three elephants to help him build Miami Beach, but historians only know the names of two of them, Rosie and Carl.</p>
				</li>
				</ul>
			</div>
		</div>
	</section>

	<section class="sub-parallax" data-stellar-background-ratio="0.9"></section>

	<section class="twitter">
		<div class="container">
			<i class="fa fa-twitter animscroll"></i>
			<div id="tweet-list" class="flexslider animscroll"></div>
		</div>
	</section>

	<?php if( get_field('media_pdf') ): ?>
	<section class="media-download">
		<div class="container">
			<h2>Download Our Media Press Kit</h2>
			<a href="<?php the_field('media_pdf'); ?>" target="_blank" class="btn">Download PDF</a>
		</div>
	</section>
	<?php endif; ?>

	<section class="mayor">
		<div class="container">
			<h5 class="hued animscroll">Words From Mayor Philip Levine</h5>
			<img class="blurb-img animscroll" src="<?php echo get_template_directory_uri(); ?>/img/mayor-blurb.png">
			<p class="mayor-blurb blurb animscroll">
				<?php the_field('mayor_blurb'); ?>
				<br>
				<br>
				<br>
				Sincerely,
				<br>
				<br>
				<span>Philip Levine</span>
				<br>
				Mayor, City of Miami Beach
			</p>	

			<div class='com-list grid-row'>
				<div class="grid-col-1-3">
					<div class="grid-content">
						<img src="<?php echo get_template_directory_uri(); ?>/img/com-micky.jpg" alt="">
						<span class="name">Micky Steinberg</span>
						<span class="title">Miami Beach, Commissioner</span>
					</div>
				</div>
				<div class="grid-col-1-3">
					<div class="grid-content">
						<img src="<?php echo get_template_directory_uri(); ?>/img/com-michael.jpg" alt="">
						<span class="name">Michael Grieco</span>
						<span class="title">Miami Beach, Commissioner</span>
					</div>
				</div>
				<div class="grid-col-1-3">
					<div class="grid-content">
						<img src="<?php echo get_template_directory_uri(); ?>/img/com-joy.jpg" alt="">
						<span class="name">Joy Malakoff</span>
						<span class="title">Miami Beach, Commissioner</span>
					</div>
				</div>
				<div class="grid-col-1-3">
					<div class="grid-content">
						<img src="<?php echo get_template_directory_uri(); ?>/img/com-jonah.jpg" alt="">
						<span class="name">Jonah Wolfson</span>
						<span class="title">Miami Beach, Commissioner</span>
					</div>
				</div>
				<div class="grid-col-1-3">
					<div class="grid-content">
						<img src="<?php echo get_template_directory_uri(); ?>/img/com-edward.jpg" alt="">
						<span class="name">Edward L. Tobin</span>
						<span class="title">Miami Beach, Commissioner</span>
					</div>
				</div>
				<div class="grid-col-1-3">
					<div class="grid-content">
						<img src="<?php echo get_template_directory_uri(); ?>/img/com-deede.jpg" alt="">
						<span class="name">Deede Weithorn</span>
						<span class="title">Miami Beach, Commissioner</span>
					</div>
				</div>
			</div>

		</div>
	</section>

<?php get_footer(); ?>
