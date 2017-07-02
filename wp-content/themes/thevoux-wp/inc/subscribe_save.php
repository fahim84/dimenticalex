<?php 
	$parse_uri = explode( 'wp-content', $_SERVER['SCRIPT_FILENAME'] );
	require_once( $parse_uri[0] . 'wp-load.php' );
?>

<?php 

// the email
$email = strtolower($_POST['email']);

//if the email is valid
if (is_email($email)) 
{
	
	//get all the current emails
	$stack = get_option('subscribed_emails');
	
	//if there are no emails in the database
	if(!$stack)
	{
		//update the option with the first email as an array
		update_option('subscribed_emails', array($email));	
	}
	else
	{
		//if the email already exists in the array
		if(in_array($email, $stack))
		{
			echo '<div class="notification-box error"><div class="content">'; 
			_e('<strong>Oh snap!</strong> Quel indirizzo email è già stato sottoscritto!', 'thevoux');
			echo "</div></div>";
		}
		else
		{
			
			// If there is more than one email, add the new email to the array
			array_push($stack, $email);
			
			//update the option with the new set of emails
			update_option('subscribed_emails', $stack);
			
			//Open subscribers csv file
			$fp = fopen('subscribers.csv', 'w');
			
			//write in a format that CSV intepreters can understand
			foreach($stack as $line)
			{
				$val = explode(",",$line);
				fputcsv($fp, $val);
			}
			
			//close file
			fclose($fp);
			echo '<div class="notification-box success"><div class="content">'; 
			_e("<strong>Ben fatto!</strong> Il tuo indirizzo è stato aggiunto", 'thevoux');
			echo "</div></div>";
		}
	}
}
else
{
	echo '<div class="notification-box error"><div class="content">';  
	_e("<strong>Oh snap!</strong> Si prega di inserire un indirizzo email valido", 'thevoux');
	echo "</div></div>";
}