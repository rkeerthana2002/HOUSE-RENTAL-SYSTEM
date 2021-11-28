<!DOCTYPE html>
<html>
<title>HOUSE RENT</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-white w3-wide w3-padding w3-card">
    <a href="" class="w3-bar-item w3-button"><b>HOUSE RENT</b> </a>
    <!-- Float links to the right. Hide them on small screens -->
    <div class="w3-right w3-hide-small">
    <a href="home.php" class="w3-bar-item w3-button"><b>Home</b></a>
      <a href="about.php" class="w3-bar-item w3-button"><b>About</b></a>
      <a href="register.php" class="w3-bar-item w3-button"><b>Register</b></a>
<a href="portfolio.php" class="w3-bar-item w3-button"><b>Portfolio</b></a>

<a href="agent.html" class="w3-bar-item w3-button"><b>Agent</b></a>
<a href="nodejs.html" class="w3-bar-item w3-button"><b>Properties</b></a>
<a href="contact.php" class="w3-bar-item w3-button"><b>Contact</b></a>
    </div>
  </div>
</div>
<meta name="viewport" content="width=device-width, initial-scale=1">

<style>
@import url('https://fonts.googleapis.com/css?family=Josefin+Sans');

*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  outline: none;
  text-decoration: none;
  font-family: 'Josefin Sans', sans-serif;
}

body{
 background-image: url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR6cCpmC8crDlB21Nn4Zl2ZUM80e6NF9QIzLg&usqp=CAU');
background-repeat: no-repeat;
background-size: cover;
}
button {
  background-color: black;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
opacity: 0.6;
}

.wrapper{
  max-width: 400px;
  width: 150%;
  height: auto;
  background: #fff;
  padding: 60px 45px;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%,-50%);
  border-radius: 30px;
}

.wrapper .title{
  margin-bottom: 20px;
  text-align: center;
  font-size: 26px;
  font-weight: bold;
  color: brown;
}

.wrapper .social_media{
  display: flex;
  justify-content: center;
  margin-bottom: 20px;
}

.wrapper .social_media .item{
  margin: 0 5px;
  width: 35px;
  height: 35px;
  line-height: 35px;
  text-align: center;
  border: 2px solid #eeeeee;
  border-radius: 50%;
  cursor: pointer;
  color: #eeeeee;
  transition: all 0.5s ease;
}

.wrapper .social_media .item:hover{
  border: 2px solid #3aaf9f;
  color: #3aaf9f;
}

.wrapper .form .input_field{
  position: relative;
  margin-bottom: 10px;
}

.wrapper .form .input_field .input{
  width: 100%;
  padding: 12px;
  padding-left: 30px;
  border: none;
  background: #eeeeee;
}

.wrapper .form .btn{
  width: 100%;
  margin: 20px auto 0;
  background: brown;
  text-align: center;
  padding: 12px;
  border-radius: 25px;
}

.wrapper .form .btn a{
  color: #fff;
}

.wrapper .form .input_field i{
  position: absolute;
  top: 10px;
  left: 10px;
  font-size: 14px;
  color: #1d2120;
}

::-webkit-input-placeholder { /* Chrome/Opera/Safari */
  color: #1d2120;
}
::-moz-placeholder { /* Firefox 19+ */
 color: #1d2120;
}
:-ms-input-placeholder { /* IE 10+ */
  color: #1d2120;
}
</style>
</head>
<body>

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
<form class="modal-content animate" action="responsecontact.php" method="post">
<div class="wrapper">
  <div class="title">
    Contact Us
  </div>
  
  <div class="form">
    <div class="input_field">
      <input type="text" placeholder="Name" name="name" required class="input">
    <i class="fa fa-user"></i>
    </div>
 
    <div class="input_field">
      <input type="id" placeholder="mail" name="mail" required class="input">
 <i class="fa fa-envelope"></i>
    </div>
    
    <div class="input_field">
      <input type="text" placeholder="subject"  name="subject" required class="input">
 <i class="fa fa-envelope"></i>
    </div>
  <b> <center><button type="submit">Submit</button><center><b>
  
</div>


</body>
</html>
