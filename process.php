<?
 
if( !empty($_POST) ){  
  
    //form validation vars  
    $formok = true;  
    $errors = array();  
  
    //sumbission data  
    $ipaddress = $_SERVER['REMOTE_ADDR'];  
    $date = date('d/m/Y');  
    $time = date('H:i:s');  
  
    //form data  
    $name = $_POST['name'];  
    $email = $_POST['email'];
    $address = $_POST['address'];  
    $telephone = $_POST['telephone'];  
    $enquiry = $_POST['enquiry'];  
    $message = $_POST['message'];  
  
    //form validation....  
	
	//validate name is not empty  
	if(empty($name)){  
		$formok = false;  
		$errors[] = "You have not entered a name";  
	}  
	
	//validate email address is not empty  
	if(empty($email)){  
		$formok = false;  
		$errors[] = "You have not entered an email address";  
	//validate email address is valid  
	}elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){  
		$formok = false;  
		$errors[] = "You have not entered a valid email address";  
	} 
  
  	//validate message is not empty  
	if(empty($message)){  
		$formok = false;  
		$errors[] = "You have not entered a message";  
	}  
	/*
	//validate message is greater than 20 charcters  
	elseif(strlen($message) < 20){  
		$formok = false;  
		$errors[] = "Your message must be greater than 20 characters";  
	}
	*/
	
	//send email if all is ok  
	if($formok){  
		require("class.phpmailer.php");

		$mail = new PHPMailer();
		
		/*
		$mail->IsSMTP();
		$mail->SMTPAuth = true; // enable SMTP authentication
		$mail->SMTPSecure = "ssl"; // sets the prefix to the servier
		$mail->Host = "smtp.gmail.com"; // sets GMAIL as the SMTP server
		$mail->Port = 465; // set the SMTP port 
		
		$mail->Username = "yourname@gmail.com"; // GMAIL username
		$mail->Password = "password"; // GMAIL password
		*/
	
		$mail->IsSMTP();  // telling the class to use SMTP
		$mail->Host     = "184.154.169.226";
		$mail->Port       = 26;
		/*$mail->SMTPDebug  = 2; */
	
		$mail->SMTPAuth   = true;                     
		$mail->Username   = "westcork"; // SMTP account username
		$mail->Password   = "0vj483SlkT"; 
		
		$mail->From     = "{$email}";
		$mail->FromName = "{$name}";
		$mail->AddAddress("info@westcorktiling.com");
		
		$mail->Subject  = "Enquiry from westcorktiling.com";
	   
		$mail->Body = "You have recieved a new message from the enquiries form on your website. \n\nName: {$name}\nAddress: {$address}\nEmail Address: {$email}\nTelephone: {$telephone}\nEnquiry: {$enquiry}\n\nMessage: {$message}";  
		
					  
		if(!$mail->Send()) {
			//echo "Mailer Error: " . $mail->ErrorInfo;
		} else {
			//echo "Message sent!";
		}
	}
	
	//what we need to return back to our form  
	$returndata = array(  
		'posted_form_data' => array(  
			'name' => $name,  
			'email' => $email, 
			'address' => $address,  
			'telephone' => $telephone,  
			'enquiry' => $enquiry,  
			'message' => $message  
		),  
		'form_ok' => $formok,  
		'errors' => $errors  
	); 
	
	//if this is not an ajax request  
	if(empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) !== 'xmlhttprequest'){  
	  
		//set session variables  
		session_start();  
		$_SESSION['cf_returndata'] = $returndata;  
	  
		//redirect back to form  
		header('location: ' . $_SERVER['HTTP_REFERER']);  
	  
	} 
}  
?>