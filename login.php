<!DOCTYPE html >
<html>
<head>
<title>LOGIN</title>

</head>
<link href="logo1.png" rel="icon"/>
<div class="body_bg">

<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.body_bg{
	position:absolute;
	top:0%;
	left:0%;
	width:100%;
	height :100%;
	//background-color :white;
	background-image:url("form.jpg");
	background-repeat :no-repeat;
	background-size :cover;
}



input[type=text], input[type=password] {
  width: 45%;
  padding: 2px 2px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}



.imgcontainer {
  text-align: center;
  margin: 10px 0 10px 0;
  
}

img.avatar {
  width: 10%;
  border-radius: 10%;
  
}

.container {
  padding: 2px;
  color:white;
}

.block {
  display: block;
  width: 20%;
  border: none;
  background-color: #4CAF50;
  color: white;
  padding: 5px 5px;
  font-size: 10px;
  cursor: pointer;
  text-align: center;
}

.block:hover {
  background-color: #ddd;
  color: black;
}

</style>

 <div align="center">

<h1><font face="Agency FB" size="20" font color="white">LOGIN</h1>
</font>
<div class="container">
    <form method="post" action="authen_login.php" >
		<div class="imgcontainer">
		<img src="avatar1.png" alt="Avatar" class="avatar">
  </div>
  
         <label for="user_id">User Name</label>
                <input type="text" name="user_id" id="user_id">
           </input><br>
                <label for="user_pass">Password</label>
                <input type="password" name="user_pass" id="user_pass"></input>
           
				
             <input type="submit" class="block" value="LOGIN"/>
			 <br>
			  
                
				
          
    </form>
		
		</div>
</body>
</html>