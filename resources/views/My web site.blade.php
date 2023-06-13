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
        * {
            text-decoration: none;
        }
        body {
           background-color: #f3f3f3; 
        }
        
        header {
            background-color: #fff;
            width: 100%;
            height: 100px;
        }
        header .header-brand {
            font-family: catamaran;
            font-size: 60px;
            font-weight: 900;
            color: #111;
            text-transfrom: uppercase;
            dispaly: block;
            margin: 0 auto;
            text-align: center;
            padding: 20px 0;
        }
        
        header nav ul {
          display: block;
          margin: 0 auto;
          width: fit-content;
        }
        header nav ul li {
          display: inline-block;
          float: left;
          list-style: none;
          padding: 0 16px;
        }
        header nav ul li a {
          font-family: catamaran;
          font-size: 16px;
          color: #111;
          texr-transfrom: uppercase;
        }
        
        header .header-cases {
            display: none;
        }
        
        @media only screen and (min-width: 1000px) {
          header .header-brand {
            margin: 31px 0;
            text-align: left;
            line-height: 38px;
            padding: 0 20px 0 40px;
            border-right: 3px solid #111;
            float: left;
         }
         header nav ul {
           margin: 20px 0px 0px 20px;
           float: left;
        }
       
        header nav ul li a {
          line-height: 60px;
        }
        
        header .header-cases {
          display: block;
          font-family: catamaran;
          font-size: 16px;
          color: #111;
          texr-transfrom: uppercase;
          line-height: 38px;
          border: 1px solid #111;
          float: right;
          margin-right: 40px;
          margin-top: 31px;
          padding: 0 20px;
        }
       }
        
        /*index*/
        
        .index-banner {
            width: 100%;
            height: calc(100vh - 100px);
            background-image: url("/img/abstract-technology-particle-background_52683-25766.jpg");
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
            dispaly: table
        }
        
        .vertical-center {
           display: table-cell;
           vertical-align: middle;
        }
        
        .index-banner h2 {
          font-family: catamaran;
          font-size: 60px;
          font-weight: 900;
          line-height: 70px;
          color: #fff;
          text-align: center;
          text-shadow: 2px 2px 8px #111;
        }
        
           .index-banner h1 {
          font-family: Cormorant Garamond;
          font-size: 28px;
          font-weight: 100;
          font-style: italic;
          line-height: 40px;
          color: #fff;
          text-align: center;
          text-shadow: 2px 2px 8px #111;
        }
        
        .index-links div {
            margin: 16px 16px 0;
            width: calc(100% - 32px);
            height: 100px;
            background-color: #f2f2f2;
        }
        
         .index-links div h3 {
          font-family: catamaran;
          font-size: 28px;
          font-weight: 600;
          line-height: 100px;
          color: #111;
          text-align: center;
          text-transfrom: uppercase;
          }
          
           @media only screen and (min-width: 1000px) {
               .wrapper {
                  width: 1000px;
                  margin: 0 auto;
               }
               
            .index-banner {
             height: 450px;    
           }
        
        .index-banner h1 {
          display: block;
          width: 560px;
          margin: 0 auto;
          }
          
          .index-links {
             overflow: hidden;
            }
          
          .index-links div {
            margin: 20px 10px 0;
            height: 230px;
            background-color: #f2f2f2;
            float: left;   
            }
        
          .index-boxlink-square {
             width: calc(25% - 20px) !important; 
          }
          
          .index-boxlink-rectangle {
             width: calc(50% - 20px) !important; 
          }
          
          .index-links div h3 {
            line-height: 230px;
          }
         
       }
          
          /*FOOTER*/
          
          footer {
              width: calc(100% - 80px);
              padding: 40px 40px;
              margin-top: 20px;
              background-color: #111;
              overflow: hidden;
          }
          
          footer ul {
            width: fit-content;
            float: left;
            padding-left: 20px;
          }
          footer ul li {
            display: block;
            list-style: none;
            }
          footer ul li a {
            font-family: catamaran;
            font-size: 24px;
            color: #fff;
            line-height: 40px;
          }
          
          .footer-links-Cases {
             diaplay: none;  
          }
          
          .footer-sm {
             width: 30%;
             float: right;
          }
          
          .footer-sm img {
             width: 30%;
             margin-bottom: 10px;
          }
          
          @media only screen and (min-width: 1000px) {
             .footer-links-Cases {
                diaplay: block;  
          } 
          
          footer ul {
            padding-right: 30px;
          }
         
          footer ul li p {
            font-family: catamaran;
            font-size: 24px;
            color: #fff;
            line-height: 40px;
            text-transfrom: uppercase; 
          }
       }
       
       /*s-m*/
       
       body{
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
    </style>
    <body>
        <header>
            <a href="/" class="header-brand"><font face="Colonna MT"" >ABP</font>
            <font face="Brush Script MT">Design</font></a>
            <nav>
                <ul>
                    <li><a href="Portfolio.php">Portfolio</a></li>
                    <li><a href="/about me">About me</a></li>
                    <li><a href="/gallery">Gallery</a></li>
                    <li><a href="/service">Our service</a></li>
                    <li><a href="/contact">Contact</a></li>
                </ul>
                
            </nav>
        </header>
        <main>
            <section class="index-banner">
                <div class="vertical-center">
                <h2>I AM A FREELANCE WEB <br>DEVELOPER</h2>
                <h1>With specialty in back-end development, functionality, ux design, and search Engine Optimization.</h1>
                </div>
                <section>
        </main>
        <div class="wrapper">
        <section class="index-links">
            <a href="Cases.html">
            <div class="index-boxlink-square">
                <h3>Cases<h3>
            </div>
            </a>
            <a href="#">
            <div class="index-boxlink-rectangle">
                <h3>Portfolio<h3>
            </div>
            </a>
            <a href="#">
            <div class="index-boxlink-square">
                <h3>ABP<h3>
            </div>
            </a>
            <a href="#">
            <div class="index-boxlink-rectangle">
                <h3>Channel<h3>
             </div>
                <a href="#">
            <div class="About me">
                <h3>About<h3>
            </div>
                </a>
                <a href="#">
            <div class="index-boxlink-square">
                <h3>Contact<h3>
            </div> 
                </a>
        </section>
        </div>
        </main>
        <div class="wrapper">
        <footer>
            <ul class="footer-links-main">
                <li><a href="#">Home</a></li>
                <li><a href="#">Cases</a></li>
                <li><a href="#">Portfolio</a></li>
                <li><a href="#">About me</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
            <ul class="footer-links-Cases">
                <li><p>Latest cases</p></li>
                <li><a href="#">MAILING SHAOLIN - WEB DEVELOPMENT</a></li>
                <li><a href="#">EXCELLENTO - WEB DEVELOPMENT</a></li>
                <li><a href="#">ABP - YOUTUBE CHANNEL</a></li>
                <li><a href="#">WELTEC - VIDEO PRODUCTION</a></li>
            </ul>
            <div class="s-m">
                
                    <a class="fa fa-facebook" href="#">
                    </a>
                
                    <a class="fa fa-twitter" href="#"></a>
                    
                
                    <a class="fa fa-youtube" href="#"></a>
                    
            </div>
        </footer>
        </div> 
    </body>
</html>
