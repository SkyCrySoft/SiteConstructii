<?php
	if(isset($_POST['submit'])){
		$name=$_POST['name'];
		$email=$_POST['email'];
		$phone=$_POST['phone'];
		$msg=$_POST['msg'];

		$to='info@g4by.ga'; // Receiver Email ID, Replace with your email ID
		$subject='Form Submission';
		if( isset($_POST['work']))
		{
			$message="Name :".$name."\n"."Phone :".$phone."\n"."Work: ".$_POST['work']."\n"."Wrote the following :"."\n\n".$msg;
		}
		else
		{
			$message="Name :".$name."\n"."Phone :".$phone."\n"."Wrote the following :"."\n\n".$msg;
		}
		$headers="From: ".$email;

		if(mail($to, $subject, $message, $headers)){
			echo "<h1>Sent Successfully! Thank you"." ".$name.", We will contact you shortly!</h1>";
		}
		else{
			echo "Something went wrong!";
		}
	}
?>