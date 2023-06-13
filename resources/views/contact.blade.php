<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<htphp>
    <head>
        <title>ABP Design</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://use.fontawesome.com/d1341f9b7a.js"></script>
    </head>
    <style>
        *{
  margin: 0;
  padding: 0;
  font-family: "montserrat",sans-serif;
}
.contact-section{
  background: url(/img/bg.png) no-repeat center;
  background-size: cover;
  padding: 40px 0;
}
.contact-section h1{
  text-align: center;
  color: #ddd;
}

.contact-section h2{
  text-align: center;
  color: #ddd;
}
.border{
  width: 100px;
  height: 10px;
  background: #34495e;
  margin: 40px auto;
}

.contact-form{
  max-width: 600px;
  margin: auto;
  padding: 0 10px;
  overflow: hidden;
}

.contact-form-text{
  display: block;
  width: 100%;
  box-sizing: border-box;
  margin: 16px 0;
  border: 0;
  background: #111;
  padding: 20px 40px;
  outline: none;
  color: #ddd;
  transition: 0.5s;
}
.contact-form-text:focus{
  box-shadow: 0 0 10px 4px #34495e;
}
textarea.contact-form-text{
  resize: none;
  height: 120px;
}
.contact-form-btn{
  float: right;
  border: 0;
  background: #34495e;
  color: #fff;
  padding: 12px 50px;
  border-radius: 20px;
  cursor: pointer;
  transition: 0.5s;
}
.contact-form-btn:hover{
  background: #2980b9;
}

.contact-edit {
   text-align: center;
   color: #ddd; 
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

.popup{
  width: 400px;
  background: #fff;
  border-radius: 6px;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%,-50%);
  text-align: center;
  padding: 0 30px 30px;
  color: #333;
  visibility: hidden;
  
}

.open-popup{
  visibility: visible;
  top: 50%;
  transform: translate(-50%,-50%) scale(1);
}
.popup img{
  width: 100px;
  margin-top: -50px;
  border-radius: 50%;
  box-shadow: 0 2px 5px rgba(0,0,0, 0.2);
}

.popup button{
  width: 100%;
  margin-top: 50px;
  padding: 10px 0;
  background: #6fd649;
  color: #fff;
  border: 0;
  outline: none;
  font-size: 18px;
  border-radius: 4px;
  cursor: pointer;
  box-shadow: 0 5px 5px rgba(0,0,0, 0.2);
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
                    <li><a href="Portfolio.">Portfolio</a></li>
                </ul>
        </div>
        <div class="contact-section">
<h1>Contact</h1>
<p class="contact-edit"> Phone Number:- 01xxxxxxx</p>
<p class="contact-edit"> ABP Design@gmail.com</p>
<div class="s-m">
      <a class="fa fa-facebook" href="#"></a>
      <a class="fa fa-twitter" href="#"></a>
      <a class="fa fa-google-plus" href="#"></a>
      <a class="fa fa-youtube" href="#"></a>
      <a class="fa fa-linkedin" href="#"></a>
    </div>
  <h2>Contact Us</h2>
  <div class="border"></div>
  <form class="contact-form" action="{{ url('/team') }}" method="POST">
    @csrf
    <div>
    <input type="text" class="contact-form-text" name="name" value="{{ old('name')}}" placeholder="Your name">
    @error('name')
      <p class="text-danger">{{ $message }}</p>
    @enderror
    </div>
    <div>
    <input type="email" class="contact-form-text" name="email" value="{{ old('email')}}"  placeholder="Your email">
    @error('email')
    <p class="text-danger">{{ $message }}</p>
    @enderror
    </div>
    <div>
    <input type="tel" class="contact-form-text" name="phone_number" value="{{ old('phone_number')}}"  placeholder="Your phone">
    @error('phone_number')
    <p class="text-danger">{{ $message }}</p>
    @enderror
    </div>
    <div>
    <textarea class="contact-form-text" name="message" value="{{ old('message')}}"  placeholder="Your message"></textarea>
    @error('message')
    <p class="text-danger">{{ $message }}</p>
    @enderror
    </div>
    <input type="submit" class="contact-form-btn" onclick="openPopup()" value="Send">
    <div class="popup" id="popup">
     <img src="404-tick.png">
     <h3>Thank You</h3>
     <P>Your Message has been Succesfully Submitted.Thanks!</P>
     <button type="button" onclick="closePopup()">OK</button>
    </div>
  </form>
</div>

<script>
  let popup = document.getElementById("popup");

  function openPopup(){
    popup.classList.add("open-popup");
  }
  function closePopup(){
    popup.classList.remove("open-popup");
  }
</script>
    </body>
</htphp