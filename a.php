<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
	<style type="text/css">
body{
	margin:0;
  background: #343d46;
}

.topnav {
  overflow: hidden;
  background-color: #eaeaea;
  margin:0;
}

.topnav a {
  float: left;
  color: #000000;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #d1caca;
  color: black;
}

.topnav a.active {
  background-color: #4CAF50;
  color: white;
}

.box{
  margin: 100px auto;
  width: 300px;
  height: 50px;
}
.container input#search{
  width: 0px;
  height: 50px;
  background: #FFFFFF;
  border: none;
  font-size: 10pt;
  float: left;
  color: #63717f;
  padding-left: 45px;
  border-radius: 5px;
  transition:0.4s;
}
.container button.icon{
  position: absolute;
  top: 23.7%;
  margin-left: 0px;
  margin-top: 0px;
  z-index: 1;
  color: #000000;

  border: none;
  border-top-right-radius: 5px;
  border-bottom-right-radius: 5px;
  background: #FFFFFF;
  height: 52px;
  width: 46px;
  opacity: 1;
  font-size: 10pt;
  transition: 0.4s;
}
.container input#search:focus, .container input#search:active{
  width: 300px;
}
.container:hover input#search{
width: 300px;
}
.container:hover .icon{
  color: #93a2ad;
}
    </style>
<title> BASIC </title>
</head>
<body>
<div class="topnav">
  <a class="active" href="vaibhav\analyzer.html">Symptom Analyzer</a>
  <a href="1.php">List of Policies</a>
  <a href="policy.html">Financial Security</a>
  <a href="prakhar\calculate.html">Health Calculator</a>
  <a href="#about">About</a>
  <a href="#contact">Contact Us</a>
  <a href="#feedback">Feedback</a>
</div>
<div class="box">
	<div class="container">
		<input type="text" id="search" placeholder="Type Symptoms...">
		<button class="icon"><i class="fa fa-search"></i></button>
	</div>
</div>
</body>
</html>