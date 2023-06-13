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
    </head>
    <style>  
        *{
  margin: 0;
  padding: 0;
  font-family: "montserrat",sans-serif;
  box-sizing: border-box;
}

.gallery-section{
  width: 100%;
  padding: 60px 0;
  background: #f1f1f1;
}

.inner-width{
  width: 100%;
  max-width: 1200px;
  margin: auto;
  padding: 0 20px;
}

.gallery-section h1{
  text-align: center;
  text-transform: uppercase;
  color: #333;
}

.border{
  width: 180px;
  height: 4px;
  background: #333;
  margin: 60px auto;
}

.gallery-section .gallery{
  display: flex;
  flex-wrap: wrap-reverse;
  justify-content: center;
}

.gallery-section .image{
  flex: 25%;
  overflow: hidden;
  cursor: pointer;
}

.gallery-section .image img{
  width: 70%;
  height: 70%;
  transition: 0.4s;
}

.gallery-section .image:hover img{
  transform: scale(1.4) rotate(15deg);
}

@media screen and (max-width:960px) {
  .gallery-section .image{
    flex: 33.33%;
  }
}

@media screen and (max-width:768px) {
  .gallery-section .image{
    flex: 50%;
  }
}

@media screen and (max-width:480px) {
  .gallery-section .image{
    flex: 100%;
  }
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
        
        <div class="gallery-section">
      <div class="inner-width">
        <h1>My Gallery</h1>
        <div class="border"></div>
        <div class="gallery">

          <a href="/img/1.png" class="image">
            <img src="/img/1.png" alt="">
          </a>

          <a href="/img/2.png" class="image">
            <img src="/img/2.png" alt="">
          </a>

          <a href="/img/3.png" class="image">
            <img src="img/3.png" alt="">
          </a>

          <a href="/img/4.png" class="image">
            <img src="/img/4.png" alt="">
          </a>

          <a href="/img/5.png" class="image">
            <img src="/img/5.png" alt="">
          </a>

          <a href="/img/6.png" class="image">
            <img src="/img/6.png" alt="">
          </a>

          <a href="/img/7.png" class="image">
            <img src="/img/7.png" alt="">
          </a>

          <a href="/img/8.png" class="image">
            <img src="/img/8.png" alt="">
          </a>

        </div>
      </div>
    </div>


  <script>
    $(".gallery").magnificPopup({
      delegate: 'a',
      type: 'image',
      gallery:{
        enabled: true
      }
    });
  </script>
    </body>
</htphp