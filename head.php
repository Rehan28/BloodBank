<html>
  <head>
    <style>
      .header {
        overflow: hidden;
        background-color: #333;
        top : 0;
        width: 100%;
        padding: 10px 5px;
        color: #299675d8;
      }

      .header a{
        float: left;
        color: white;
        text-align: center;
        padding: 12px;
        text-decoration:  none;
        font-size: 18px;
        line-height: 25px;
        border-radius: 4px;
        font-weight:bold;
      }
      .header a.logo{
        fort-size : 25px;
        font-weight: bold;
        color:#FF0404  ;
      }
      .header a:hover {
        background-color: #ddd;
        color: black;
      }
      .header-right {
        float: right;
        }
    @media screen and (max-width: 500px) {
    .header a {
        float: none;
        display: block;
        text-align: left;
    }
    .header-right {
        float: none;
    }
    }
    a.act{
    background: linear-gradient(to right, #d4322a 0%, #863416 100%);
    color: rgb(255, 255, 255);
    border-radius:30px;
    }
    a.logo2{
    background-color: #333;
    }
    </style>
  </head>
  <body>
    <div class="header">
    <a href="home.php" class="logo"<?php if($active=='home') echo "class='logo2'"; ?>>Red Cell </a>
    <div class="header-right"> 
    <a href="need_blood.php" <?php if($active=='need') echo "class='act'"; ?>>Need Blood</a>
    <a href="donate_blood.php"  <?php if($active=='donate') echo "class='act'"; ?>>Become A Donor</a>
   
    </div>
  </div>

  </div>
  </body>
</html>
