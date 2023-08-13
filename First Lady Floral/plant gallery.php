<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient Gallery</title>
    <link rel="stylesheet" href="plantgallery.css">
</head>
<style>
     body {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
        }
/* this is a background color to the top navigation*/
        .topnav {
            overflow: hidden;
            background-color: #95A7A7;
        }
/*This styles the links inside the navigation bar */
        .topnav a {
            float: right;
            color: #f2f2f2;
            text-align: center;
            padding: 30px 15px;
            text-decoration: none;
            font-size: 17px;

        }
/*This changes the color of the links on hover */
        .topnav a:hover {
            background-color: #f4C6B8;
            color: black;
        }
/*this adds a color to the active/ current link */
        .topnav a.active {
            background-color: #e68164;
             color: white;
}
</style>
</head>

<!--this is my navigation bar-->
<body>
 <div class="topnav">
    <a class="active" href="">Contact</a>
    <a href = "JSON.php">About</a>
    <a href = "plant gallery.php">Plant Gallery</a>
    <a href = "home1.php">Home</a>
    <img src="logo.png" width="150" height="150">
         <a style="color:white; background:#333; margin-right: 20px; font-size: 24px;">First Lady Floral</a> 
</div>
</body>
<body>
    <div class="container">
        <div class="heading">
            <h3>WOW LOOK AT ALL THESE PLANTS</h3>
        </div>
        <div class="box">
            <!--Images-->

            <div class="dream"> <!--Left Column-->
                <img src="p1.jpg">
                <img src="p2.jpg">
                <img src="p3.jpg">
                <img src="p4.jpg">
            </div>

            <div class="dream"> <!--Center Column-->
                <img src="p5.jpg">
                <img src="p6.jpg">
                <img src="p7.jpg">
                <img src="p8.jpg">
            </div>

            <div class="dream"> <!--Right Column-->
                <img src="p10.jpg">
                <img src="p11.jpg">
                <img src="p12.jpg">
                <img src="p13.jpg">
            </div>
        </div>
        </div>
    </div>
      
   <!--Footer-->
   <footer>
     <p> Email: FirstLadyFLoral123@gmail.com </p>
      <p>1253 E. Rose Rd Suite 303, Mesa, AZ 8274936</p>
      <p> Phone: 183-850-3848</p>
      <p> Fax: 480-8923-237923</p>
     
      </footer>

        <!--Footer Style-->
      <style>
        footer {
          text-align: center;
          padding: 3px;
          background-color:#e68164;
          color: white;
        }
        </style>
</body>
</html>