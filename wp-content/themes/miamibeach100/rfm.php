<?php

class rfm {
	
	function sendOptin($msisdn,$code,$fname,$lname,$email,$ref){
		//set POST variables
		$url 		= 'https://www.myredfish.com/do/subscribe/auto';
		$user 		= "miamibeach";
		$pass 		= "tHble2XP5S";
		$extref 	= "";
		$message 	= "";
		
		$fields = array(
			'user'=>urlencode($user),
			'pass'=>urlencode($pass),
			'extref'=>urlencode($extref),
			'msisdn'=>urlencode($msisdn),
			'fname'=>urlencode($fname),
			'lname'=>urlencode($lname),
			'email'=>urlencode($email),
			'signupUrl'=>urlencode($ref),
			'code'=>urlencode($code)
		);

		//url-ify the data for the POST
		foreach($fields as $key=>$value) { $fields_string .= $key.'='.$value.'&'; }
		rtrim($fields_string,'&');
		
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL,$url);
		curl_setopt($ch, CURLOPT_POST,count($fields));
		curl_setopt($ch, CURLOPT_POSTFIELDS, $fields_string);
		curl_setopt($ch, CURLOPT_USERAGENT, 'Opera/9.23 (Windows NT 5.1; U; en)');
		curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
		// Below two option will enable the HTTPS option.
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,  2);
		$result = curl_exec($ch);	  
		//close connection
		curl_close($ch);
		
		return $result;
	}
		
}

?>
