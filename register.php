<?php
# Written for the MIT IEEE/ACM website by Frank Yaul, Cathy Wu, modified for lastest web by Donald Little
echo "MOOOO";


/* $return = "../index.php?p=join"; */
$rmessage = "";


$ieeeemail = "dmlittle@mit.edu";

$applicant_name = $_POST['required-name'];
$applicant_email = $_POST['required-email'];
$applicant_year = $_post['year'];
$applicant_course = $_POST['course'];
$applicant_interests = "";

  //Adding the applicant interests with a for loop
  for ($i = 1; $i <= 7; $i++) {
      $cur = $_POST["int$i"];
        if (strlen($cur) > 0) {
            $applicant_interests .= "$cur, ";
          }
    }
    
$apply_date = date("F j, Y, g:i a");

//Name & Email must be filled in...
if ($applicant_name != "" && $applicant_email != "") {

    $applicant_email = strtolower($applicant_email);
    if (!strstr($applicant_email, "mit.edu")) {
        $response_message = "Email Address Problem - The email address you specify must be an MIT email address. Please double-check your form."; 
/*     		header( "Location: http://www.google.com" ); */
    		echo $response_message;
      	return;
      }
  
	   $subject = "[MIT IEEE/ACM] New Member Request: $applicant_email";  
  
	   $message =  "This is an automated message generated by the membership application form on the MIT ACM/IEEE club homepage.\n\n$apply_date\nName: $applicant_name\nEmail: $applicant_email\nYear: $applicant_year Course: $applicant_course\nInterests: $applicant_interests\n\n---\n\nieee-members mailing list: https://groups.mit.edu/webmoira/";
  
		  if (mail($ieeeemail, $subject, $message)) {
    			$response_message = "Success! - Your membership request was successful! An IEEE Board member should contact you within a few days via email."; 
    			// header( "Location: $return&message=$rmessage" );
          echo $response_message;
    			return;
  			
  			} else {
          	$response_message = "Message Delivery Failed - Please try again later. At this time, there may be an excess amount of requests."; 
          	//header( "Location: $return&message=$rmessage" );
            echo $response_message;
        		return;
  
  			}
  	
  }
?>