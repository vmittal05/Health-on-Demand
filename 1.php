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
  <a href="vaibhav\analyzer.html">Symptom Analyzer</a>
  <a class="active" href="#financial">List of Policies</a>
  <a href="policy.html">Financial Security</a>
  <a href="prakhar\calculate.html">Health Calculator</a>
  <a href="#about">About</a>
  <a href="#contact">Contact Us</a>
  <a href="#feedback">Feedback</a>
</div>
<br><br><br>
<?php
$ar=array();
$i=0;
$file = fopen("test.txt", "r") or die("Unable to open file!");
$file_lines = file('test.txt');
foreach ($file_lines as $line) {
    $ar[$i]=$line;
    $i++;
}
fclose($file);
?>
  <ul>
    <li><strong><a href="<?= $ar[0] ?>"><font color="white" size="4">Handbook On Insurance</font></a></strong></li>
  </ul><br>
  <ul>
    <li><strong><a href="<?= $ar[2] ?>"><font color="white" size="4">Government Health Insurance Company</font></a></strong></li>
    <ol>
    <li><a href="<?= $ar[4] ?>"><font color="white" size="4">The New India Assurance Co . ltd</font></a></li>
    <li><a href="<?= $ar[6] ?>"><font color="white" size="4">United India Insurance Company</font></a></li>
    <li><a href="<?= $ar[7] ?>"><font color="white" size="4">National Insurance Co.ltd</font></a></li>
    <li><a href="<?= $ar[9] ?>"><font color="white" size="4">Oriental Insurance</font></a></li> 
    </ol> <br>
    <li><strong><a href="<?= $ar[11] ?>"><font color="white" size="4">Private Health Insurance Companies</font></a></strong></li>
    <ol>
      <li><a href="<?= $ar[13] ?>"><font color="white" size="4">Apollo Munich Health Insurance</font></a></li>
      <li><a href="<?= $ar[14] ?>"><font color="white" size="4">Bajaj Allianz Health Insurance</font></a></li>
      <li><a href="<?= $ar[15] ?>"><font color="white" size="4">Future Generali Health Insurance</font></a></li>
      <li><a href="<?= $ar[17] ?>"><font color="white" size="4">Max Bupa Health Insurance</font></a></li>
      <li><a href="<?= $ar[18] ?>"><font color="white" size="4">Religare Health Insurance</font></a></li>
      <li><a href="<?= $ar[20] ?>"><font color="white" size="4">Royal Sundaram Health Insurance</font></a></li>
      <li><a href="<?= $ar[22] ?>"><font color="white" size="4">Star Health and Allied Insurance</font></a></li>
      <li><a href="<?= $ar[23] ?>"><font color="white" size="4">L & T Insurance</font></a></li>
    </ol><br>
    <li><strong><a href="<?= $ar[24] ?>"><font color="white" size="4">State Health Insurance Programmes</font></a></strong></li>
    <ol>
      <li><a href="<?= $ar[28] ?>"><font color="white" size="4">Rajiv Aarogyasri, Andhra Pradesh</font></a></li>
      <li><a href="<?= $ar[30] ?>"><font color="white" size="4">Mukhyamantari Amrutam (MA), Gujarat</font></a></li>
      <li><a href="<?= $ar[32] ?>"><font color="white" size="4">The Chief Minister's Distress Relief Fund, Kerala</font></a></li>
      <li><a href="<?= $ar[34] ?>"><font color="white" size="4">Chief Minister's Releif Fund, Madhya Pradesh</font></a></li>
      <li><a href="<?= $ar[36] ?>"><font color="white" size="4">Rajasthan's Chief Minister's Relief fund, Rajasthan</font></a></li>
      <li><a href="<?= $ar[38] ?>"><font color="white" size="4">Chief Minister's Comprehensive Health Insurance Scheme, Tamil Nadu</font></a></li>
    </ol><br>
    <li><strong><a href="<?= $ar[26] ?>"><font color="white" size="4">National Health Insurance Schemes </font></a></strong></li>
    <ol>
      <li><a href="<?= $ar[40] ?>"><font color="white" size="4">Rashtiya Swasthiya Bima Yojana (RSBY)</font></a></li>
      <li><a href="<?= $ar[42] ?>"><font color="white" size="4">Employment State Insurance Scheme (ESIS)</font></a></li>
      <li><a href="<?= $ar[44] ?>"><font color="white" size="4">Central Government Health Scheme (CGHS)</font></a></li>
      <li><a href="<?= $ar[46] ?>"><font color="white" size="4">Aam Aadmi Bima Yojana (AABY)</font></a></li>
      <li><a href="<?= $ar[48] ?>"><font color="white" size="4">Janashree Bima Yojana (JBY)</font></a></li>
      <li><a href="<?= $ar[50] ?>"><font color="white" size="4">Universal Health Insurance Scheme (UHIS)</font></a></li>
    </ol>
  </ul>
</body>
</html>