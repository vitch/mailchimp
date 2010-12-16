Kohana 2.3.4 client library for the MailChimp API v1.3. 

Based on http://www.mailchimp.com/api/downloads/

_________________
Example


	$mailChimpInstance = new Mailchimp();
	$merge_vars = array('FNAME'=>'FIRST NAME OF THE USER', 'LNAME'=>'LAST NAME OF THE USER');
	$retval = $mailChimpInstance->listSubscribe(Kohana::config('mailchimp.list_id'), 'EMAIL ADDRESS OF THE USER', $merge_vars, 'html', false);
	if ($mailChimpInstance->errorCode)
	{
		Kohana::log('error', "Unable to load listUpdateMember. \tCode=".$mailChimpInstance->errorCode."\n\tMsg=".$mailChimpInstance->errorMessage."\n");
	}
	else
	{
		WHATEVER
	}