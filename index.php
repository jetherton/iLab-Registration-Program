<html>
	<head>
		<title> iLab Registration Form</title>
		<link rel="stylesheet"  href="style.css"/>
	</head>
	
	<body>
	
	<div id="page">
		<?php 
		
		$us_en = array("is_your_name"=>"as your name",
			"title"=>"iLab Registration Form");
		$lr_en = array("is_your_name"=>"da yor nin",
			"title"=>"iLab Regitration Fom");
		$languages = array("us_en"=>$us_en, "lr_en"=>$lr_en);
		
		$current_language = "lr_en";
		
		$name = $languages[$current_language]["is_your_name"];
		
		echo "You typed ". $_POST["firstname"] . "  ". $_POST["lastname"] . $name; 
		
		?>
		<div id="head">
		<h1> <?php echo $languages[$current_language]["title"]; ?></h1>
		<h3>Welcome to iLab online registration page</h3>
		<p>
		<h4>Please fill in the below form</h4>
		
										</div>
		
		<div id="main">
				<form method="post" action="index.php">
				
				First name: <input type="text" name="firstname" />
				Last name: <input type="text" name="lastname" />
				
			<br /><br />
				Organization: <input type="text" name="organization" />
				
				<p>
				
				Gender: <input type="radio" name="sex" value="male" /> Male 
					<input type="radio" name="sex" value="female" /> Female
				<p>
				Email Address: <input type="email" name="emailaddress" />
				<p>
				Phone Number: <input type="phone" name="phonenumber" />
				<p>
				Residential Address: <input type="text" name="pin" maxlength="50" size="75" height="100" />
				<p>
				Purpose of attending this training: <input type="text" name="pin" maxlength="50" size="75" height="100" /><br />
				<p>
				How this training could affect your work: <input type="text" name="pin" maxlength="50" size="75" height="100" />
				<p>
				Have you attended an event at iLab before: <input type="radio" name="yes value="yes" /> Yes
					<input type="radio" name="no" value="no" /> No
				<p>
				Select Training: 
				<select name="Select Training">
					<option value="Ushahidi">Ushahidi Training</option>
					<option value="iLab">iLab Event</option>
				</select>
				
				How familiar are you with a computer: 
				<select name="Select Training">
					<option value="Ushahidi">I work with computer very well</option>
					<option value="iLab">I work with computer Well</option>
					<option value="iLab">I am a fair computer user</option>
					<option value="iLab">I have not work with computer before</option>
				</select>
				
				<input type="submit" value="Submit" />
				</form>
				<p>
				
				
				
				
				
				
	
	
										</div>
										
										</div>
			<div id="footer">
			
			
	
				<p>This Form was created and publish by |*iLab_ Liberia| </p>
	
										</div>
	
	</body>
	

</html>
