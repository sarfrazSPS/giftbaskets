<?php
    // print '<pre>';
    // print_r($_POST['details']);
$option ="";
if(isset($_POST['checkbox_option']))
{
	$option =$_POST['checkbox_option'];
}
$notes = $_POST['notes'];

$data =$_POST['details'];
$html="";
$html .="<div style='font-family: Arial, sans-serif; color: #444444;'>";
$html .="<center><h1 style='font-size: 24px; margin-bottom: 20px;'>Pennsylvania Dutch Baskets</h1> </center>";
$html .="<h1 style='font-size: 24px; margin-bottom: 20px;'>Invoice</h1>";
$html .="<table style='border-collapse: collapse; width: 100%;'>";
$html .="<tr style='border-bottom: 1px solid #dddddd;'>";
$html .="<th style='text-align: left; padding: 8px;'>ID:</th>";
$html .="<td style='text-align: left; padding: 8px;'>".$data['id']."</td></tr>";
$html .="<tr style='border-bottom: 1px solid #dddddd;'>";
$html .="<th style='text-align: left; padding: 8px;'>Intent:</th>";
$html .="<td style='text-align: left; padding: 8px;'>".$data['intent']."</td></tr>";
$html .="<tr style='border-bottom: 1px solid #dddddd;'>";
$html .="<th style='text-align: left; padding: 8px;'>Status:</th>";
$html .="<td style='text-align: left; padding: 8px;'>".$data['status']."</td></tr>";
$html .="<tr style='border-bottom: 1px solid #dddddd;'>";
$html .="<th style='text-align: left; padding: 8px;'>Payer:</th>";
$html .="<td style='text-align: left; padding: 8px;'>".$data['payer']['name']['given_name']." ".$data['payer']['name']['surname']." (".$data['payer']['email_address'].")</td></tr>";
$html .="<tr style='border-bottom: 1px solid #dddddd;'>";
$html .="<th style='text-align: left; padding: 8px;'>Amount:</th>";
$html .="<td style='text-align: left; padding: 8px;'>".$data['purchase_units'][0]['amount']['currency_code']." ".$data['purchase_units'][0]['amount']['value']."</td></tr>";
$html .="<tr style='border-bottom: 1px solid #dddddd;'>";
$html .="<th style='text-align: left; padding: 8px;'>Description:</th>";
$html .="<td style='text-align: left; padding: 8px;'>".$data['purchase_units'][0]['description']." ".$option."</td></tr>";

if($notes !="")
{
$html .="<tr style='border-bottom: 1px solid #dddddd;'>";
$html .="<th style='text-align: left; padding: 8px;'>Notes:</th>";
$html .="<td style='text-align: left; padding: 8px;'>".$notes."</td></tr>";

}


$html .="<tr style='border-bottom: 1px solid #dddddd;'>";
$html .="<th style='text-align: left; padding: 8px;'>Items:</th>";
$html .="<td style='text-align: left; padding: 8px;'>";
$html .="<ul style='list-style: none; margin: 0; padding: 0;'>";
foreach($data['purchase_units'][0]['items'] as $item):
$html .="<li style='margin-bottom: 10px;'>";
$html .="<strong>".$item['name']."</strong><br>";
$html .="Quantity: ".$item['quantity']."<br>";
$html .="Price: ".$item['unit_amount']['currency_code']." ".$item['unit_amount']['value']."<br>";

if(isset($_POST['description']))
{
  $description =$_POST['description'];
  $html .="Description:".$description."</li>";
}
else
{
  $html .="Description:".$item['description']."</li>";
}

endforeach;
$html .="</ul></td></tr>";
		$html .="<tr>
			<th style='text-align: left; padding: 8px;'>Shipping:</th>
			<td style='text-align: left; padding: 8px;'>".$data['purchase_units'][0]['shipping']['name']['full_name']."(".$data['purchase_units'][0]['shipping']['address']['address_line_1'].",".$data['purchase_units'][0]['shipping']['address']['admin_area_2'].", ".$data['purchase_units'][0]['shipping']['address']['admin_area_1'].", ".$data['purchase_units'][0]['shipping']['address']['country_code'].")</td>
		</tr>";
		$html .="<tr>
			<th style='text-align: left; padding: 8px;'>Payment ID:</th>
			<td style='text-align: left; padding: 8px;'>".$data['purchase_units'][0]['payments']['captures'][0]['id']."</td>
		</tr>
		<tr>
			<th style='text-align: left; padding: 8px;'>Payment Status:</th>
			<td style='text-align: left; padding: 8px;'>".$data['purchase_units'][0]['payments']['captures'][0]['status']."</td>
		</tr>
		<tr>
			<th style='text-align: left; padding: 8px;'>Payment Amount:</th>
			<td style='text-align: left; padding: 8px;'>".$data['purchase_units'][0]['payments']['captures'][0]['amount']['currency_code']." ".$data['purchase_units'][0]['payments']['captures'][0]['amount']['value']."</td>
		</tr>
		<tr>
			<th style='text-align: left; padding: 8px;'>Payment Time:</th>
			<td style='text-align: left; padding: 8px;'>".$data['purchase_units'][0]['payments']['captures'][0]['create_time']."</td>
		</tr>
	</table>";

        // $data = // Your array data goes here
        
        // echo '<table>';
        // echo '<tr><th>ID</th><td>' . $data['id'] . '</td></tr>';
        // echo '<tr><th>Intent</th><td>' . $data['intent'] . '</td></tr>';
        // echo '<tr><th>Status</th><td>' . $data['status'] . '</td></tr>';
        
        // $purchase_units = $data['purchase_units'][0];
        // echo '<tr><th>Reference ID</th><td>' . $purchase_units['reference_id'] . '</td></tr>';
        
        // $amount = $purchase_units['amount'];
        // echo '<tr><th>Currency</th><td>' . $amount['currency_code'] . '</td></tr>';
        // echo '<tr><th>Amount</th><td>' . $amount['value'] . '</td></tr>';
        
        // $items = $purchase_units['items'][0];
        // echo '<tr><th>Item Name</th><td>' . $items['name'] . '</td></tr>';
        // echo '<tr><th>Item Amount</th><td>' . $items['unit_amount']['value'] . '</td></tr>';
        // echo '<tr><th>Item Quantity</th><td>' . $items['quantity'] . '</td></tr>';
        
        // $shipping = $purchase_units['shipping'];
        // echo '<tr><th>Shipping Name</th><td>' . $shipping['name']['full_name'] . '</td></tr>';
        // echo '<tr><th>Shipping Address</th><td>' . $shipping['address']['address_line_1'] . ', ' . $shipping['address']['admin_area_2'] . ', ' . $shipping['address']['postal_code'] . ', ' . $shipping['address']['country_code'] . '</td></tr>';
        
        // $payments = $purchase_units['payments']['captures'][0];
        // echo '<tr><th>Payment ID</th><td>' . $payments['id'] . '</td></tr>';
        // echo '<tr><th>Payment Status</th><td>' . $payments['status'] . '</td></tr>';
        // echo '</table>';


		echo $html;
        $body =$html;
		$date1=date("F d,Y h:i:s a");
		
		$nameField='Order Email';
		
	
		$emailField='info@padutchbaskets.com';
		
			
		
		
				
       
                      
       //$from=$firstNameField;
       $sub="PA Dutch Baskets - ".$titleField;

       $name=$firstNameField."< ".$emailField." >";
	   $to="joe@jmmarketingconsultants.com, michelle@jmmarketingconsultants.com";// Your email address will goes here  
       
		if (mail($to,$sub,$body,"From:".$name."\nContent-Type: text/html; charset=iso-8859-1"))
		{
  		print "<meta http-equiv=\"refresh\" content=\"0;URL=index.html\">";
		}
		else{
  		//print "<meta http-equiv=\"refresh\" content=\"0;URL=error.html\">";
		}
		

    ?>
