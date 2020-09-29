<?php
	header("Pragma: no-cache");
	header("Cache-Control: no-cache");
	header("Expires: 0");

?>
<!--
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
-->
<html>
<head>
<title>Merchant Check Out Page</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap/css/txn.css">
    
    <meta name="GENERATOR" content="Evrsoft First Page">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    
</head>
<body>
	
        <!--
        
		<table border="1">
			<tbody>
				<tr>
					<th>S.No</th>
					<th>Label</th>
					<th>Value</th>
				</tr>
				<tr>
					<td>1</td>
					<td><label>ORDER_ID::*</label></td>
					<td><input id="ORDER_ID" tabindex="1" maxlength="20" size="20"
						name="ORDER_ID" autocomplete="off"
						value="">
					</td>
				</tr>
				<tr>
					<td>2</td>
					<td><label>CUSTID ::*</label></td>
					<td><input id="CUST_ID" tabindex="2" maxlength="12" size="12" name="CUST_ID" autocomplete="off" value="CUST001"></td>
				</tr>
				<tr>
					<td>3</td>
					<td><label>INDUSTRY_TYPE_ID ::*</label></td>
					<td><input id="INDUSTRY_TYPE_ID" tabindex="4" maxlength="12" size="12" name="INDUSTRY_TYPE_ID" autocomplete="off" value="Retail"></td>
				</tr>
				<tr>
					<td>4</td>
					<td><label>Channel ::*</label></td>
					<td><input id="CHANNEL_ID" tabindex="4" maxlength="12"
						size="12" name="CHANNEL_ID" autocomplete="off" value="WEB">
					</td>
				</tr>
				<tr>
					<td>5</td>
					<td><label>txnAmount*</label></td>
					<td><input title="TXN_AMOUNT" tabindex="10"
						type="text" name="TXN_AMOUNT"
						value="1">
					</td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td><input value="CheckOut" type="submit"	onclick=""></td>
				</tr>
			</tbody>
		</table>
		* - Mandatory Fields
		-->

        
           
           <div id="cont" class="form-group bg-dark text-light">
                <h2 align="center">Donation details</h2>
               <form method="post" action="pgRedirect.php">
            <input id="ORDER_ID" tabindex="1" maxlength="20" size="20"
                   name="ORDER_ID" autocomplete="off"
                   value="<?php echo  "ORDS" . rand(10000,99999999)?>" hidden>
            <input id="CUST_ID" tabindex="2" maxlength="12" size="12" name="CUST_ID" autocomplete="off" value="CUST001" hidden>
            <input id="INDUSTRY_TYPE_ID" tabindex="4" maxlength="12" size="12" name="INDUSTRY_TYPE_ID" autocomplete="off" value="Retail" hidden>
            <input id="CHANNEL_ID" tabindex="4" maxlength="12"
                   size="12" name="CHANNEL_ID" autocomplete="off" value="WEB" hidden>
            <input type="text" class="form-control bg-dark text-light" placeholder="Enter your name" id="z"  required>
            <input type="email" class="form-control bg-dark text-light" placeholder="Enter your email" id="z" " required>
            <input title="TXN_AMOUNT" tabindex="10"
                   type="text" name="TXN_AMOUNT" placeholder="Enter amount" id="z" class="form-control bg-dark text-light" required><br><br>
            <input value="CheckOut" type="submit" class="btn btn-danger" onclick="" required>
	</form>
    </div>
</body>
</html>