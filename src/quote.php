<?php include 'header.php'; ini_set('display_errors',1); ?>



<script type="text/javascript" src="scripts/js-required.js"></script>
<script type="text/javascript">
  var rules = [];
  rules.push("required,First_Name,Please enter your first name.");
  rules.push("required,Last_Name,Please enter your last name.");
  rules.push("required,email,Please enter your email address.");
  rules.push("required,phone,Please enter your contact phone number.");
  rules.push("required,city,Please enter your city.");
  rules.push("required,state,Please enter your state.");
  rules.push("required,interest,Please enter where you are interested in having a mural created for.");
</script>


			<div id="content">
				<div id="gallery">
					<p>Every artist believes their work is priceless. Some muralists calculate their fee by the hour while others do it by the square foot - Hoffman Murals provides free consultation to all of our clients. Upon accepting a commission, the client will receive a detailed sketch with multiple options. After the second consultation, a price will be quoted. This quote is determined by the complexity of the design, the space being considered and the amount of time estimated to complete the mural.</p>
					<p>On average, most of the mural work completed by Hoffman Murals ranges between 2-10 days with a cost of $1,200-$1,400/day. Please understand that you are commissioning an artist to complete a one of a kind original artwork designed to your aesthetic preference and space. One could easily spend a few thousand dollars on a small easel painting! Total price includes initial sketches, all labor, materials and two coats of a polyurethane finish (optional for residential clients).</p>
					<p>Payment procedure is 10% down upon acceptance of initial design and cost, the next 40% due at beginning of mural project and the final 50% due upon acceptance of work completed. Mural site is to be properly prepared and ready upon start date.  Delays due to client or additional preparation work are additional fees.</p>
				</div>
				<div id="intro">
					<p style=" color: #ddc083; font-size: 20px;"><em>Fill Out the Form Below to Get Started:</em></p>
				<?php 
					$action=$_SERVER['REQUEST_METHOD'];
					if ($action=="GET")    /* display the contact form */ 
					    { 
    			?> 
				    <form  action="" method="POST" enctype="multipart/form-data"> 
				    	<p>First Name<span class="required">*</span> <input type="text" name="First_Name" id="First_Name" value="" size="25" /></p>
						<p>Last Name<span class="required">*</span> <input type="text" name="Last_Name" id="Last_Name" value="" size="25" /></p>
						<p>Email<span class="required">*</span> <input type="text" name="Email" id="email" value="" size="25" /></p>
						<p>Contact Phone<span class="required">*</span> <input type="text" name="Contact_Phone" id="phone" value="" size="25" /></p>
						<p>Address Line 1 <input type="text" value="" name="Address_1" id="Address_1" size="25" /></p>
						<p>Address Line 2 <input type="text" name="Address_2" id="Address_2" value="" size="25" /></p>
						<p>City<span class="required">*</span> <input type="text" name="City" id="city" value="" size="25" /></p>
						<p>State<span class="required">*</span> <input type="text" name="State" id="state" value="" size="25" /></p>
						<p>Zip <input type="text" value="" name="Zip" id="zip" size="25" /></p>
						<br />
						<p>I am interested in work with<span class="required">*</span>:
						<br />
						<input type="radio" name="interest" id="interest" value="business" /> Business <input type="radio" name="interest" id="interest" value="resident" /> Residential <input type="radio" name="interest" id="interest" value="education" /> Educational</p>
						Comments <textarea id="comments" name="Comments" rows="10" cols="48"></textarea>
						<br /><br />
						<p><input type="submit" value="Send" style="padding: 8px 20px 8px 20px;" /></p>
				    </form> 
    			<?php 
					    }  
					else                /* send the submitted data */ 
					    { 
						    $first_name=$_REQUEST['First_Name']; 
						    $last_name=$_REQUEST['Last_Name']; 
						    $email=$_REQUEST['Email'];
						    $contact=$_REQUEST['Contact_Phone']; 
						    $address_1=$_REQUEST['Address_1']; 
						    $address_2=$_REQUEST['Address_2']; 
						    $city=$_REQUEST['City']; 
						    $state=$_REQUEST['State']; 
						    $zip=$_REQUEST['Zip']; 
						    $interest = $_REQUEST['interest'];
						    $comments = $_REQUEST['Comments'];

						    $message="First Name: $first_name\n Last Name: $last_name\n Email: $email\n Contact: $contact\n Address 1: $address_1
						    \n Address 2: $address_2\n City: $city\n State: $state\n Zip: $zip\n Interest: $interest\n Comments: $comments\n";
					     
					        $from="From: contact@hoffmanmurals.com"; 
					        $subject="Message sent using your contact form"; 
					        $success = mail("shoffman1966@gmail.com", $subject, $message, $from); 
							if (!$success) {
								$errorMessage = error_get_last()['message'];
							}
							echo $errorMessage;
					        echo "Email sent!"; 
					        
					    }   
					?> 
				</div>


<?php include 'footer.php'; ?>

