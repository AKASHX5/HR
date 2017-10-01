<?php

echo"
<html>
<head>
	
	<script type='text/javascript' src='jquery-1.12.2.min.js'></script>
			<script type='text/javascript'>
			
			$(document).ready(function(){
			$('li').hover(function(){
			$(this)find('ul>li').stop().fadeToggle(400);
			
			});
			});
			</script>
		<style>
			<title>home</title>
			ul {
    list-style-type: none;
    margin: 0;
    padding-left: 33%;
    overflow: hidden;
    background-color: #333;
}

li {
    float: left;
}
li a:hover {
    background-color: #111;
}
li a, .dropbtn {
    display: inline-block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}



li.dropdown {
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #777;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
}

.dropdown-content a {
    color: #fff;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {background-color: #111}

.dropdown:hover .dropdown-content {
    display: block;
}
body {
        background-image : background.png; 
		background-repeat: no-repeat;
		background-position:center;
        height : 1050px;	
    }
	
#h1{	 
	
	font-family : Comic Sans MS;	
	color: white;
    text-shadow: 1px 1px 2px black, 0 0 25px blue, 0 0 5px darkblue;
	
	}
#h1:hover{
	text-decoration : underline ;
	
}	
	
#daf3 {
	margin-top : 80px;
	width : 500px; 
	height : 300px;
	border : 2px solid navy;
	border-radius: 25px;
}
#haf2{
	
	padding-left : 10px ;
}
#ip1{
margin-bottom : 10px ;
}
#ip2{
font-size:15px ;

}

ul {
    list-style-type: none;
    margin: 0;
    padding-left: 28%;
    overflow: hidden;
    background-color: #333;
}

ul li {
    float: left;
	width : 150px;
	
	text-align: center;
	background : #333;
}

ul li a {
    display: block;
    color: #fff;
    text-align: center;
    padding: 14px 16px;
    text-decoration: underline ;
}


li a:hover {
    background-color: #111;
}
table {
	font-weight : bold;
	empty-cells: hide; 
	cellspacing : 10;
}
tr{
	
	rowspan : 2 ;
}
td{
	padding : 15px;
	
}

#pds{
	margin-top : 20px;
	padding-right : 20px;
	float : right;
	font-size : 25px;
	
}
input[type=text] {
    padding:5px; 
    border:2px solid #ccc; 
    -webkit-border-radius: 5px;
    border-radius: 5px;
}

input[type=text]:focus {
    border-color:#333;
}
input[type=email] {
    padding:5px; 
    border:2px solid #ccc; 
    -webkit-border-radius: 5px;
    border-radius: 5px;
}

input[type=email]:focus {
    border-color:#333;
}

input[type=submit] {
    padding:5px 15px; 
    background:#888; 
    border:0 none;
    cursor:pointer;
    -webkit-border-radius: 5px;
    border-radius: 5px; 
}
h2{	 
	
	font-family : Comic Sans MS;	
	color: white;
    text-shadow: 1px 1px 2px black, 0 0 25px blue, 0 0 5px darkblue;
	
	}
h2:hover{
	
	text-decoration : underline ;
}	
#lap{
	
	text-align:center;
}
#lap1{
	
	border:2px solid black; 
	width:350px;
	height:150px;
}
.ftp {
height : 40px; 
background-color: #777;
padding-left : 15px;
}
.ph2{
text-align :center ;
}
.error {
	color: #FF0000;
	}

		</style>	
	</head>
	<body>
		<h1 id='h1'> HR Management System </h1>
		<div>
			<ul>
				<li><a href='home.php'>Home</a></li>
				<li><a href='pd.php'>Personal Details</a></li>
				
				<li class='dropdown'> <a href='lap.php' class='dropbtn'>Leave application </a>
    <div class='dropdown-content'>
      <a href='lap.php'>Apply Leave</a>
      <a href='#'>leave approval</a>
      
    </div>
  </li>
				
				<li><a href='#logout'>Logout</a></li>
			</ul>
			
		</div>


<center><h2>Employee Leave Application</h2></center>
<form>
<fieldset>
<legend><b>Employee Leave</b></legend>
<table>
		<tr >
			<td >Employee Code:</td>
			<td><input type = 'text' name = 'code' required/></td>
			<td >Employee Name:</td>
			<td><input type = 'text' name = 'ename' required/> </td>
			
		</tr>
		<tr >
			<td >Department:</td>
			<td><input type = 'text' name = 'dept' required/> </td>
			<td >Designation:</td>
			<td><input type='text' name='designation' required/></td>
			
		</tr>
		<tr >
			<td >Email_id:</td>
			<td><input type = 'email' name = 'email' required/></td>
			<td >Leave Type:</td>
			<td><select name='Leave type' required>
				<option></option>
				<option value='Sick'/> Sick
				<option value='Holiday'/> Holiday 
				<option value='Home'/> Home 
			</select></td>
			
		</tr>
		<tr >
			<td >Month:</td>
			<td><select name='Month' required>
				<option></option>
				<option value='January'/> January
				<option value='February'/> February
				<option value='March'/> March
				<option value='April'/> April
				<option value='May'/> May
				<option value='June'/> June
				<option value='July'/> July
				<option value='August'/> August
				<option value='September'/> September
				<option value='October'/> October
				<option value='November'/> November
				<option value='December'/> December
			</select>
			</td>
		</tr>
		<tr>

			<td >From Date:</td>
			<td><input type='month' name='month' required/></td>
			<td >No of Days:</td>
			<td><input type='number' name='ndays' min='1' max='10' required/></td>
			<td >End Date:</td>
			<td><input type='month' name='month' required/></td>
		</tr>
		
</table>
<caption><h2 id='lap'>Leave Period</h2></caption>
<center>
	<div id='lap1'>
		<center>

			<input type='radio' name='time' value='Full Day' />&nbsp&nbsp&nbsp&nbsp<b>  Full Day </b></br><br>
			<input type='radio' name='time' value='Half Day'/><b>Half Period </b></br><br>
			<input type='radio' name='time' value='1st Half'/>&nbsp&nbsp&nbsp&nbsp<b>  1st Half </b></br><br>
			<input type='radio' name='time' value='2nd Half'/>&nbsp&nbsp&nbsp<b>  2nd Half </b></br><br>
		</center>
	</div>
</center><br><br>
	

	<strong>Reason : </strong><br><br>
	<textarea rows='5' cols='60' name='description' placeholder='Describe your reason here....' required></textarea><br><br>
	<strong>Address & Phone No During Leave Period : </strong><br><br>
	<textarea rows='5' cols='60' name='description' placeholder='Type your address and phone no here....' required></textarea>


</fieldset>
<div id='pds'>
	<input type='submit' name='submit' value='Apply'/>
</div>
	
</form><br><br>
<div >
	<footer class='ftp'>
<hr>

  <p class='ph2'>copyright © 2016 by Hr Management | Contact information: <a href='mailto:hrmanagement@hotmail.com'>
  hrmanagement@hotmail.com</a> </p>
</footer>
</div>
</body>
</html>

"
?>