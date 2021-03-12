  <html>
	<head></head>
	<body style="background-color:powderblue;">
	
		<?php
		    $title="";
			$err_title="";
			
			$name="";
			$err_name="";
			
			$gender="";
			$err_gender="";
			
	        $email="";
			$err_email="";
			
			$instituate="";
			$err_instituate="";
			
			$medium="";
			$err_medium="";
			
			$class="";
			$err_class="";
			
			$day="";
			$err_day="";
			
		
			
			$code="";
			$number="";
			$phone[]=$code . $number;
			$err_phone="";
			
			$location[]=array();
			$street="";
			$city="";
			$state="";
			$zcode="";
			$err_location="";
			
			
			
			$sources[]=array();
			$err_sources="";
			
			$salary="";
			$err_salary="";
			
			$Extrainfo="";
			$err_Extrainfo="";
			
			if($_SERVER['REQUEST_METHOD']== "POST"){
				if(empty($_POST["title "])){
					$err_title="*title Required@exmple:need a tutor...";
				}
				else{
					$name=htmlspecialchars($_POST["title"]);
				}
				if(empty($_POST["name"])){
					$err_name="*name Required";
				}
				else if(strlen($_POST["name"])<6){
					$err_name="*name should be at least 6 characters";
				}
				else{
					if(ctype_alnum($_POST["name"])){
					
						$name=htmlspecialchars($_POST["name"]);
				    }
					else{
						
					$err_name="*name only contain characters(space,symbols not allowed)";
					}
				}
				if (!isset($_POST["gender"])){
                    $err_gender="*Gender Not Selected";
                }
				else{
					if (isset($gender) && $gender=="Male"){
						$gender=$_POST["gender"];
					}
					else{
						if (isset($gender) && $gender=="Female"){
							$gender=$_POST["gender"];
						}
				    }
				}
				
			
				if(empty($_POST["email"])){
					$err_email="*Email Required";
				}
				else if(strpos($_POST["email"],"@")!=null){
					$s= strpos($_POST["email"],"@");
					if(strpos($_POST["email"],".",$s+1)!=null){
						$email=$_POST["email"];
					}
					else{
						$err_email="*Email missing (.) after @";
					}
				}
				else{
					$err_email="*Email missing @";
					
				}
				if(empty($_POST["instituate"])){
					$err_instituate="*write your institiation name";  
				}
				else{
					$instituate=$_POST["instituate"];
				}
				
				if(empty($_POST["medium"])){
					$err_medium="this field is mandatory";  
				}
				else{
					$medium=$_POST["medium"];
				}
				
				if(empty($_POST["class"])){                                   
					$err_class="*please select a class";
				}
				
				else{
					$class=$_POST["class"];
				}
				
			}
				
				
				if(empty($_POST["day"])){                                       
					$err_day="*select one from below";
				}
				
				else{
					$day=$_POST["day"];
				}
				
			
				
				if(empty($_POST["code"])&&empty($_POST["number"])){
					$err_phone="*Phone Code/Number Required";
				}
				else if(empty($_POST["code"])){
					$err_phone="Code required";
					
					
				}
				else if(empty($_POST["number"])){
					$err_phone="*Number Required";
				}
				else{
					if(ctype_digit($_POST["code"])&&ctype_digit($_POST["number"])){
						$number=$_POST["number"];
						$code=$_POST["code"];
				    }
					else{
						$err_phone="*Number must be numeric";
					}
				}
				if(empty($_POST["street"])||empty($_POST["city"])){
					$err_location="*please provide your location";
				}
				else{
					$street=$_POST["street"];
					$city=$_POST["city"];
					}
			
				if(!empty($_POST["sources"])){
                    foreach($_POST["sources"] as $checked){
                        //echo $checked . '<br>';
                    }
                }
				else {
                    $err_sources="*Source is not selected";
                }
				if(empty($_POST["extrainfo"])){
					$err_bio="*this  Box is Empty";
				}
				
				else{
					$extrainfo=$_POST["extrainfo"];
				}
				
			
			
		?>
		
		<fieldset style="width:800px;border:solid 2px" >
			<legend> <h1>Hire a tutor </h1></legend>
			<form action="Submitted.php" method="post">
				<table style="margin-left:5px">
				    <tr>
						<td align="right"><span> Title </span></td>
						<td>:<input size="25" type="text" value="<?php echo $title;?>" name="title">
						<span style="color:red"><?php echo $err_title;?></span></td>
						
					</tr>
					 <tr>
						<td align="right"><span> name </span></td>
						<td>:<input size="29" type="text" value="<?php echo $name;?>" name="name">
						<span style="color:red"><?php echo $err_name;?></span></td>
						
					</tr>
					<tr>
						<td align="right"><span>Gender</span></td>
						<td>:<input type="radio" value="<?php echo $gender;?>" name="gender">Male<input type="radio" value="<?php echo $gender;?>" name="gender">Female
						<span style="color:red"><?php echo $err_gender;?></span></td>
					</tr>
					
				
					<tr>
						<td align="right"><span>Email </span></td>
						<td>:<input size="29" type="text" value="<?php echo $email;?>" name="email">
						<span style="color:red"><?php echo $err_email;?></span></td>
						
					</tr>
					 <tr>
						<td align="right"><span> Name of the Instituation</span></td>
						<td>:<input size="29" type="text" value="<?php echo $instituate;?>" name="instituate">
						<span style="color:red"><?php echo $err_instituate;?></span></td>
						
					</tr>
					<tr>
						<td align="right"><span>Select  medium </span></td>
						<td>:<input type="radio" value="<?php echo $medium;?>" name="medium">Bangla <input type="radio" value="<?php echo $medium;?>" name="medium">English
						<input type="radio" value="<?php echo $medium;?>" name="medium">others
						<span style="color:red"><?php echo $err_medium;?></span></td>
					</tr>
					
					<tr><td align="right"><span>Select Class </span></td>
					<td>:
						<select name="Select Class">
							
							<option>  Kg*  </option>
							<option> Nursery</option>
							<option>playpen </option>
							<option>class 1 </option>
							<option>class 2</option>
							<option> class 3 </option>
						     <option>class 4</option>
							<option>class 5</option>
							<option> class 6</option>
							<option>class 7 </option>
							<option>class 8</option>
							<option> class 9 </option>
							<option>class 10</option>
							<option> class 11 </option>
						     <option>class 12 </option>
							<option>Secondary</option>
							<option> Higher Secondary </option>
							<option>Admission test </option>
							<option>others</option>
						
						</select> 
					</td>
				</tr>
					<tr>
						<td align="right"><span>Phone </span></td>
						<td>:<input size="8" type="text" placeholder="code" value="<?php echo $code;?>" name="code"> - <input style="margin-left:2.3px" size="14" type="text" placeholder="Number" value="<?php echo $number;?>" name="number">
						<span style="color:red"><?php echo $err_phone;?></span></td>
						
					</tr>
					<tr>
						<td align="right" style="vertical-align: top" rowspan="3"><span> select  Location  </span></td>
						<td>:<input size="29" type="text" placeholder="Select location" value="<?php echo $street;?>" name="street">
						</td>
				        </tr>
				<tr>		
				  <td> <input style="margin-left:4.9px" size="10" type="text" placeholder="City" value="<?php echo $city;?>" name="city"> <input style="margin-left:2.3px" size="12" type="text" placeholder="Street" value="<?php echo $street;?>" name="street">
			     </td>
			     </tr>
				 <tr>
				 <td>
				 
			       <span style="color:red"><?php echo $err_location;?></span></td>
				</tr>
		        <tr>
				<td align="right">Day per week </td>
			   <td>:
				<select>
				<option>Day</option>
				<?php
					for($i=1;$i<=7;$i++){
					echo "<option>$i</option>";	
						}
						?>
					</select>
					</td>
								<tr>
								
								<td align="right">salary range  </td>
							        <td>:
								<select>
								<option>salary</option>
								
								<?php
								    $salary = array("1000tk/month","2000tk/month","3000tk/month","4000tk/month","5000tk/month","6000tk/month","7000tk/month","8000tk/month","9000tk/month","10,000tk/month");
									foreach($salary as $v){
										echo "<option>$v</option>";
										
									}
								?>
								</select>
							
						</td>
					</tr>
					
					<tr>
						<td rowspan="4" align="right"><span>Where did you hear about tuition station?</span></td>
						<td> <input type="checkbox" value="<?php echo $sources;?>" name="sources[]">A Friend or Colleage </td>
							 
					</tr>
					<tr>
						<td><input type="checkbox" value="<?php echo $sources;?>" name="sources[]">Google </td>
				    </tr>
				    <tr>
						<td><input type="checkbox" value="<?php echo $sources;?>" name="sources[]">Blog Post </td>
				    </tr>
				    <tr>
						<td><input type="checkbox" value="<?php echo $sources;?>" name="sources[]">News Article
						<span style="color:red"><?php echo $err_sources;?></span></td>
				    </tr>
					
					</tr>
					<tr>
						<td align="right"><span>Extra Information :</span></td>
						<td><textarea value="<?php echo $Extrainfo;?>" name="Extrainfo"></textarea>
						<span style="color:red"><?php echo $err_Extrainfo;?></span></td>
					</tr>
					<tr>
						<td align="center" colspan="2"><input type="submit" value="Hire"></td>
					</tr>
					
				</table>
				 
				
			</form>
		</fieldset>	
	</body>
</html>