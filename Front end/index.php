
<!DOCTYPE html>
 <html>
 <head>
 	<title>PET ADOPTION CENTRE</title>
   <style type="text/css">
   @import "https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css";
   body{
	margin: 0;
	padding: 0;
	font-family: Century Gothic;
	background: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)), url(Dog-Car-Adoption-Animal-Shelter-copy-e1499272058854.jpg);
	background-size: cover;

	
}
ul{
	float: right;
	list-style-type: none;
}
ul li{
	display: inline-block;
}
ul li a{
	text-decoration: none;
	color: #fff;
	padding: 5px 20px;
	border:1px solid #fff;
	transition: 0.6s ease;

}
ul li a:hover{
	background-color: #fff;
	color: #000;

}
.title{
	position: absolute;
	top: 50%;
	left: 50%;
	transform: translate(-50%,-50%);
}
.title h1{
	color: #fff;
	font-size: 50px;
}
.button{
	position: absolute;
	top: 60%;
	left: 50%;
	transform: translate(-50%,-50%);
}
.btn{
	border: 1px solid #fff;
	padding: 10px 70px;
	color: #fff;
	text-decoration: none;
}
   </style>
   </head>
   <body>
   	<header>
   <div class="main">
   	<ul>
   		<li><a href="index.php">Home</a></li>
   		<li><a href="gallery.php"> Gallery</a></li>
   		<li><a href="login.php"> Admin Login</a></li>
   	</ul>
 
    </div>
    <div class="title">
    	<h1>PET ADOPTION CENTRE</h1>
    	
    </div>
    <div class="button">
    	<a href="adopt.php" class="btn">Adopt</a>
    	<a href="contact.php" class="btn">Contact</a>
    </div>

</header>
 </body>
 </html>
