<!DOCTYPE html>
<html>
<head>
	<title>Sign up</title>
  <link rel="shortcut icon" type="image/png" href="images/favicon.jpg">
  <script type="text/javascript">
    function trigger(d1,d2) {
      var d1 = document.getElementById(d1);
      var d2 = document.getElementById(d2);
      
      d2.innerHTML = "";
      if(d1.value == "Dhaka"){
          var optionArray = ["----------|----------","Dhaka|Dhaka","Faridpur|Faridpur","Gazipur|Gazipur","Gopalganj|Gopalganj","Kishoreganj|Kishoreganj","Madaripur|Madaripur","Manikganj|Manikganj","Munshiganj|Munshiganj","Narayanganj|Narayanganj","Narsingdi|Narsingdi","Rajbari|Rajbari","Shariatpur|Shariatpur","Tangail|Tangail"];
         }
      else  if(d1.value == "Barishal"){
          var optionArray = ["----------|----------","Barisal|Barisal","Barguna|Barguna","Bhola|Bhola","Jhalokati|Jhalokati","Patuakhali|Patuakhali","Pirojpur|Pirojpur"];
         }
      else  if(d1.value == "Khulna"){
          var optionArray = ["----------|----------","Bagerhat|Bagerhat","Chuadanga|Chuadanga","Jashore|Jashore","Jhenaidah|Jhenaidah","Khulna|Khulna","Kushtia|Kushtia","Magura|Magura","Meherpur|-Meherpur-","Narail|Narail","Satkhira|Satkhira"];
         }
      else  if(d1.value == "Mymensingh"){
          var optionArray = ["----------|----------","Jamalpur|Jamalpur","Mymensingh|Mymensingh","Netrokona|Netrokona","Sherpur|Sherpur"];
         }
      else  if(d1.value == "Chittagong"){
          var optionArray = ["----------|----------","Bandarban|Bandarban","Brahmanbaria|Brahmanbaria","Chandpur|Chandpur","Chittagong|Chittagong","Comilla|Comilla","Cox's Bazar|Cox's Bazar","Feni|Feni","Khagrachhari|Khagrachhari","Lakshmipur|Lakshmipur","Maijdee|Maijdee","Rangamati|Rangamati"];
            }
      else  if(d1.value == "Rajshahi"){
          var optionArray = ["----------|----------","Bogura|Bogura","Chapainawabganj|Chapainawabganj","Joypurhat|Joypurhat","Naogaon|Naogaon","Natore|Natore","Pabna|Pabna","Rajshahi|Rajshahi","Sirajganj|Sirajganj"];
            }
      else  if(d1.value == "Rangpur"){
          var optionArray = ["----------|----------","Rangpur|Rangpur","Dinajpur|Dinajpur","Kurigram|Kurigram","Nilphamari|Nilphamari","Gaibandha|Gaibandha","Thakurgaon|Thakurgaon","Panchagarh|Panchagarh","Lalmonirhat|Lalmonirhat"];
            }
      else  if(d1.value == "Sylhet"){
          var optionArray = ["----------|----------","Habiganj|Habiganj","Moulvibazar |Moulvibazar","Sunamganj|Sunamganj","Sylhet|Sylhet"];
            }
     
      for(var option in optionArray){
        var pair = optionArray[option].split("|");
        var newOption = document.createElement("option");
        newOption.value = pair[0];
        newOption.innerHTML = pair[1];
        district.options.add(newOption);
        }
     }
  </script>
</head>
<body>
		<form method="POST" action="signup_patient.php">
				<label for="fname">First Name : </label>
 				<input type="text" id="fname" name="fname" "><br><br>
  				<label for="lname">Last Name :</label>
  				<input type="text" id="lname" name="lname"><br><br>
 				<label for="phone">Phone No:</label>
 				<input type="text" id="phone" name="phone" "><br><br>
 				<label for="email">Email:</label>
 				<input type="text" id="email" name="email" "><br><br>
  				<label for="password">Password :</label>
  				<input type="password" id="password" name="password"><br><br>
  				<label for="nid">National Id: </label>
 				<input type="text" id="nid" name="nid" "><br><br>
  				<label for="divition">Divition :</label>
  				<select name="divition" id="divition" onchange="trigger('divition','district')">
            <option value="----">----------</option>
    				<option value="Dhaka">Dhaka</option>
   					<option value="Khulna">Khulna</option>
    				<option value="Barishal">Barishal</option>
    				<option value="Mymensingh">Mymensingh</option>
            <option value="Rajshahi">Rajshahi</option>
            <option value="Rangpur">Rangpur</option>
            <option value="Sylhet">Sylhet</option>
            <option value="Chittagong">Chittagong</option>
  				</select><br><br>
  			<label for="district">District:</label>
 				<select name="district" id="district">
          <option>----------</option>
        </select><br><br>
  				<label for="address">Address :</label>
  				<input type="text" id="address" name="address"><br><br>
  				<label for="desise">Common Desise :</label>
  				<input type="text" id="desise" name="desise"><br><br>
  				<label for="about">About:</label>
 				<input type="text" id="about" name="about" "><br><br>
  				<input type="submit" value="Sign up">
		</form>
</body>
</html>