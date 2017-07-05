<?php
function echoHeaderHTML($title){
  return "
  <html>
    <head>
      <link rel='stylesheet' type='text/css' href='stylesheet.css'>
      <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Raleway:300,400,600'>
      <title>
        $title
      </title>
    </head>
    <body>
      <div class='NavBar'>
        <ul>
          <a href='index.php'>
            <img src='HTML/icon.png'>
          </a>
          <li><a href='Inspo.html'>inspiration</a></li>
          <li><a href='Series.html'>anthologies</a></li>
          <li><a href='Stories.html'>stories</a></li>
        </ul>
      </div>";
}

function echoFooterHTML(){
  return "

      <div class='EndBuffer'>
      </div>
      <div class='Updates'>
        <p>NEWSLETTER SIGNUP</p>
        <form action='blank'>
          <input type='email' name='email' placeholder='email address'><br>
        </form>
        <a href='blank'>
          <div class='SubmitButton'>
            submit
          </div>
        </a>
      </div>
      <div class='footer'>
        <ul>
          <li>Katelyn Taira 2017</li>
        </ul>
        <ul>
          <li><a href='home.html'>home</a></li>
          <li><a href='Stories.html'>stories</a></li>
          <li><a href='Series.html'>anthologies</a></li>
          <li><a href='Inspo.html'>inspiration</a></li>
          <li><a href='contact.html'>contact</a></li>
        </ul>
      </div>
    </body>
  </html>";
}
/*
put padding and posttitle and shit here
also include footer cfvgbhjn
and then add function to all existing pages
next step--make template for all post pages
then can later ask tyler about a database for them instead of 2x2 array*/
