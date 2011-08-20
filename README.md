Kohana 3.2 client library for the MailChimp API v1.3.1. 

Forked and modified from original KohanaPHP v 2.x extension https://github.com/djaiss/kohana-mailchimp

Based on http://www.mailchimp.com/api/downloads/

#Installation

Edit application/config/mailchimp.php and add your Mailchimp.com API key and list ID.

#Example usage
### Subscribe a user

	$mc_instance = new Mailchimp();
	$first_name = ''; // first name of the user
	$last_name = ''; // last name of the user
	$email = ''; // email address of the user
	$merge_vars = array('FNAME' => $first_name, 'LNAME'=> $last_name);
	$retval = $mc_instance->listSubscribe(Kohana::config('mailchimp.list_id'), $email, $merge_vars, 'html', false);
	if ($mailChimpInstance->errorCode) {
		// there was an error, let's log it
		Kohana::log('error', "Unable to load listUpdateMember. \t
				      Code=".$mc_instnace->errorCode."\n\tMsg=".$mc_instance->errorMessage."\n");
	}
	else {
		// inserting a user successfull, now you can do whatever you want,
		// insert a user into database or anything else.
	}
