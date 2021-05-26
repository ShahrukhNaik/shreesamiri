
<?php
	// Message Vars
	$msg = '';
	$msgClass = '';

	// Check For Submit
	if(filter_has_var(INPUT_POST, 'submit')){
        // Get Form Data
        $requirments = htmlspecialchars($_POST['requirments']);
		$name = htmlspecialchars($_POST['name']);
        $email = htmlspecialchars($_POST['email']);
        $companyname = htmlspecialchars($_POST['companyname']);
        $website = htmlspecialchars($_POST['website']);
        $address = htmlspecialchars($_POST['address']);
        $phone = htmlspecialchars($_POST['phone']);

		// Check Required Fields
		if(!empty($name) && !empty($email) && !empty($companyname) && !empty($address) && !empty($phone) && !empty($requirments)){
			// Passed
			// Check Email
			if(filter_var($email, FILTER_VALIDATE_EMAIL) === false){
				// Failed
				$msg = 'Please use a valid email';
				$msgClass = 'alert-danger';
			} else {
				// Passed
				$toEmail = 'info@shreesamiri.com';
				$subject = 'Contact Request From '.$name;
				$body = '<h2>Contact Request</h2>
					<h4>Name:</h4><p>'.$name.'</p>
					<h4>Email:</h4><p>'.$email.'</p>
                    <h4>Company Name:</h4><p>'.$companyname.'</p>
                    <h4>Website:</h4><p>'.$website.'</p>
                    <h4>Address:</h4><p>'.$address.'</p>
                    <h4>Phone/mobile:</h4><p>'.$phone.'</p>
                    <h4>Requirments:</h4><p>'.$requirments.'</p>

				';

				// Email Headers
				$headers = "MIME-Version: 1.0" ."\r\n";
				$headers .="Content-Type:text/html;charset=UTF-8" . "\r\n";

				// Additional Headers
				$headers .= "From: " .$name. "<".$email.">". "\r\n";

				if(mail($toEmail, $subject, $body, $headers)){
					// Email Sent
					$msg = 'Your email has been sent';
					$msgClass = 'alert-success';					
				} else {
					// Failed
					$msg = 'Your email was not sent';
					$msgClass = 'alert-danger';					
				}
			}
		} else {
			// Failed
			$msg = 'Please fill in all fields';
			$msgClass = 'alert-danger';
		}
	}
?>

<?php $page='contact'; include 'inc/header.php'?> 
<!--- Here we have to add google  ma -->
<div class="container-fluid">
    <div class="col-12">
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3062.0007542537146!2d72.8721!3d19.430263!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xc4a8d369b9a6d27a!2sShree%20Samiri%20Enterprises!5e1!3m2!1sen!2sin!4v1584014190589!5m2!1sen!2sin" width="100%" height="800" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>
</div>
         
    <div class="container">	
	<h2>Enter your contact details</h2>
    <hr class="my-4">  	 
    	<?php if($msg != ''): ?>
    		<div class="alert <?php echo $msgClass; ?>"><?php echo $msg; ?></div>
		<?php endif; ?>
      <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
	      <div class="form-group">
		      <label>Name</label>
		      <input type="text" name="name" id="name" class="form-control" value="<?php echo isset($_POST['name']) ? $name : ''; ?>">
	      </div>
	      <div class="form-group">
	      	<label>Email</label>
	      	<input type="text" name="email" id="email" class="form-control" value="<?php echo isset($_POST['email']) ? $email : ''; ?>">
	      </div>
          <div class="form-group">
	      	<label>Company Name</label>
	      	<input type="text" name="companyname" id="companyname" class="form-control" value="<?php echo isset($_POST['companyname']) ? $companyname : ''; ?>">
	      </div>
          <div class="form-group">
	      	<label>Website</label>
	      	<input type="text" name="website" id="website" class="form-control" value="<?php echo isset($_POST['website']) ? $website : ''; ?>">
	      </div>
	      <div class="form-group">
	      	<label>Address</label>
	      	<textarea name="address" id="address" class="form-control" rows="5" cols=""><?php echo isset($_POST['address']) ? $address : ''; ?></textarea>
	      </div>
          <div class="form-group">
	      	<label>phone/moblie</label>
	      	<input type="text" name="phone" id="phone" class="form-control" value="<?php echo isset($_POST['phone']) ? $phone : ''; ?>">
	      </div>                    
            <div class="form-group">	      	
            <label>Describe your buying requirments  in details</label>  
	      	<textarea name="requirments" id="requirements" class="form-control" rows="10"><?php echo isset($_POST['requirments ']) ? $message : ''; ?></textarea>
	        </div>
	      <br>
	      <button type="submit" name="submit" class="btn btn-primary" >Submit</button>
		  <button type="button" name="reset" class="btn btn-primary" onclick="clean();">Reset</button>
	  </form>	  
	  <hr class="my-4">
	</div> 	
	<script>
	function clean(){  	
		document.getElementById('name').value=null;		
		document.getElementById('email').value=null;		
		document.getElementById('companyname').value=null;		
		document.getElementById('website').value=null;		
		document.getElementById('address').value=null;		
		document.getElementById('phone').value=null;
		document.getElementById('requirements').value=null;						
   	}
</script>
<?php include 'inc/footer.php'?>