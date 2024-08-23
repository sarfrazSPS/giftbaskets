<?php

if (isset($_POST['send']))
{


		$date1=date("F d,Y h:i:s a");
		
		$nameField=$_POST['name'];
		
		$numberField=$_POST['number'];
		$phoneField=$_POST['phone'];
	
		$emailField=$_POST['email'];
		
			
		
		
				
		$messageField=nl2br($_POST['message']);

 
      	$body="
	  	<table width='250' border='1px' bordercolor='#B6B6B6' align='center'  cellspacing='0' cellpadding='0' style='border:1px solid #B6B6B6; border-collapse:collapse; background-color:#ECF7FF; margin-top:16px; margin-bottom:10px;'>
             <tr>
			 <td colspan='2' style='text-align:center; background-color:#619FCE; font-family:Arial, Helvetica, sans-serif; font-size:14px; color:#fff; font-weight:bold; padding:6px;'>Pennsylvania Dutch Baskets Form:&nbsp;&nbsp;&nbsp;[&nbsp;$date1&nbsp;]</td>
			 </tr>
			 <tr>
                 <td width='150' align='left' valign='top' style='font-family:Arial, Helvetica, sans-serif; font-size:12px; color:#6D6D6D; font-weight:bold; background-color:#ECF7FF; padding:6px;'>Name:</td>
                 <td width='250' align='left' valign='top' style='font-family:Arial, Helvetica, sans-serif; font-size:12px; color:#000; font-weight:normal; padding:6px;'>$nameField</td>
             </tr>
			 
			 
			  <td width='150' align='left' valign='top' style='font-family:Arial, Helvetica, sans-serif; font-size:12px; color:#6D6D6D; font-weight:bold; background-color:#ECF7FF; padding:6px;'>Model:</td>
                 <td width='250' align='left' valign='top' style='font-family:Arial, Helvetica, sans-serif; font-size:12px; color:#000; font-weight:normal; padding:6px;'>$numberField</td>
             </tr>
			 
			
			 
			 <tr>
                 <td width='150' align='left' valign='top' style='font-family:Arial, Helvetica, sans-serif; font-size:12px; color:#6D6D6D; font-weight:bold; background-color:#e6e4d4; padding:6px;'>Phone:</td>
                 <td width='250' align='left' valign='top' style='font-family:Arial, Helvetica, sans-serif; font-size:12px; color:#000; font-weight:normal; padding:6px;'>$phoneField</td>
             </tr>			 
			
			 
			 <tr>
                 <td width='150' align='left' valign='top' style='font-family:Arial, Helvetica, sans-serif; font-size:12px; color:#6D6D6D; font-weight:bold; background-color:#ECF7FF; padding:6px;'>Email:</td>
                 <td width='250' align='left' valign='top' style='font-family:Arial, Helvetica, sans-serif; font-size:12px; color:#000; font-weight:normal; padding:6px;'>$emailField</td>
             </tr>
			 
			  
			 
						 		
			 <tr>
                 <td width='150' align='left' valign='top' style='font-family:Arial, Helvetica, sans-serif; font-size:12px; color:#6D6D6D; font-weight:bold; background-color:#ECF7FF; padding:6px;'>Message:</td>
                 <td width='250' align='left' valign='top' style='font-family:Arial, Helvetica, sans-serif; font-size:12px; color:#000; font-weight:normal; padding:6px;'>$messageField</td>
             </tr>
             </table>";
                      
       //$from=$firstNameField;
       $sub="PA Dutch Baskets - ".$titleField;

	   $headers['From'] = $emailField;
	   $headers['MIME-Version'] = 'MIME-Version: 1.0';
	   $headers['Content-type'] = 'text/html; charset=iso-8859-1';

    //    $name=$firstNameField."< ".$emailField." >";
	   $to="info@padutchbaskets.com";// Your email address will goes here  

       
	   if (mail($to,$sub,$body,$headers))
		{
  		print "<meta http-equiv=\"refresh\" content=\"0;URL=index.html\">";
		}
		else{
  		//print "<meta http-equiv=\"refresh\" content=\"0;URL=error.html\">";
		}
		
}
else {
	die();
	}

?>