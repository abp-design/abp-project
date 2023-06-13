<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>ABP Design</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://use.fontawesome.com/d1341f9b7a.js"></script>
    </head>
    <style>
      body{
  margin: 0;
  padding: 0;
  background: url("/img/helloworld.jpg") no-repeat;
  background-size: cover;
}
.box{
  width: 450px;
  background: rgba(0, 0, 0, 0.4);
  padding: 40px;
  text-align: center;
  margin: auto;
  margin-top: 5%;
  color: white;
  font-family: 'Century Gothic',sans-serif;
}
.box-img{
  border-radius: 50%;
  width: 200px;
  height: 200px;
}
.box h1{
  font-size: 40px;
  letter-spacing: 4px;
  font-weight: 100;
}
.box h5{
  font-size: 20px;
  letter-spacing: 3px;
  font-weight: 100;
}
.box p{
  text-align: justify;
}
ul{
  margin: 0;
  padding: 0;
}
.box li{
  display: inline-block;
  margin: 6px;
  list-style: none;
}
.box li a{
  color: white;
  text-decoration: none;
  font-size: 60px;
  transition: all ease-in-out 250ms;
}
.box li a:hover{
  color: #b9b9b9;
}

         /*s-m*/
       
    sm-body{
  margin: 0;
  padding: 0;
  background: #f1f1f1;
}
.s-m{
  margin: 10px auto;
  justify-content: space-around;
  display: flex;
  max-width: 700px;
}
.s-m a{
  text-decoration: none;
  font-size: 28px;
  color: #f1f1f1;
  width: 60px;
  height: 60px;
  text-align: center;
  transition: 0.4s all;
  line-height: 58px;
  cursor: pointer;
  background: #696969;
  border-radius: 50%;
}
.s-m a:hover{
  transform: scale(1.2);
}

/*menubar*/

ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
  opacity: .7;
}

li {
  float: left;
}

li a, .dropbtn {
  display: inline-block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover, .dropdown:hover .dropbtn {
  background-color: green;
  opacity: 1000;
}

li.dropdown {
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {background-color: #f1f1f1;}

.dropdown:hover .dropdown-content {
  display: block;
}
    </style>
    <body>
        <div class="menubar">
            <ul>
                    <li><a href="/">Home</a></li>
                    <li><a href="/about me">About me</a></li>
                    <li><a href="/gallery">Gallery</a></li>
                    <li><a href="/service">Our service</a></li>
                    <li><a href="/contact">Contact</a></li>
                    <li><a href="Portfolio">Portfolio</a></li>
                </ul>
        </div>
        <div class="box">
            <img src="/img/IMG_20200222_125448.jpg" alt="" class="box-img">
            <h1>Anik Bhowmick<h1>
                    <h5>Web Developer - Web Designer </h5>
                    <p>A web developer is a programmer who specializes in,or is specifically engaged in,the development of world wide web applications, or applications that are run over htto from a web server to a wev browser. </p>
<div class="s-m">
      <a class="fa fa-facebook" href="#"></a>
      <a class="fa fa-twitter" href="#"></a>
      <a class="fa fa-google-plus" href="#"></a>
      <a class="fa fa-youtube" href="#"></a>
      <a class="fa fa-linkedin" href="#"></a>
    </div>

</div>
    </body>
</html>
