<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/styles.css">
	<title>Code Start</title>
</head>
<body>
	<div id="header">
			<h1>Hello</h1>
	</div>
	
		<div id="left-menu">
			<form>
				<input type="text" placeholder="Email-Id">
				<input type="password" placeholder="Password">
			</form>
		</div>
		<div id="right-menu">

		</div>

		<div id="main"></div>
<script type="text/javascript" >
/*var obj = {
	fname: 'yash<br>',
	age: 21,
	work: 'student',
	full_info : function(){
     return this.fname + " " + this.work;
	}
}

		
document.getElementById("main").innerHTML = obj.full_info();

try{
	addalert("hello");
}
catch(err){
	document.getElementById("main").innerHTML = err.message;
}
*/
class Car {
	constructor(brand){
		this.carname = brand;
	} present(){
		return "I have a " + this.carname;
	}
}
mycar = new Car("Ford");

document.getElementById("main").innerHTML = mycar.present();
</script>
</body>
</html>




<?php





?>