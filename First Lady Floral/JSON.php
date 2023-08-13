<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient Gallery</title>
    <link rel="stylesheet" href="json.css">
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
<body>
<!--this is my navigation bar-->
 <div class="topnav">
    <a class="active" href="">Contact</a>
    <a href = "JSON.php">About</a>
    <a href = "plant gallery.php">Plant Gallery</a>
    <a href = "home1.php">Home</a>
    <img src="logo.png" width="150" height="150">
         <a style="color:white; background:#333; margin-right: 20px; font-size: 24px;">First Lady Floral</a> 
</div>
</body>
<?php


//json data
$jsonData = '[
    {

            "flowerName" : "Rose",
            "scientificname" : "Rosa",
            "price" : 22.00
        
    } ,
    {

        "flowerName" : "petunia",
        "scientificname" : "petunia x hybrida",
        "price" : 10.00
    
} ,
{

    "flowerName" : "fly trap",
    "scientificname" : "Dionaea muscipula",
    "price" : 14.00

} ,
{

    "flowerName" : "orchid",
    "scientificname" : "orchidaceae",
    "price" : 20.00

} 
]';

//convert the JSON data to a PHP array
$flowerData = json_decode($jsonData, true);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flowers</title>
    <link rel="stylesheet" href="json.css">
</head>
<body>
    <h1> Most Popular Flowers</h1>
    <?php
    //create the table strucutre and the first row with headings
        echo "<table>
        <tr>
        <th>flowerName</th>
        <th>scientificname</th>
        <th>Price</th>
        </tr>";

        //Display the records using a loop
        foreach($flowerData as $flower){
            echo"<tr>";
            echo "<td>" . $flower['flowerName'] . "</td>";
            echo "<td>" . $flower['scientificname'] . "</td>";
            echo "<td>" . $flower['price'] . "</td>";
            echo"</tr>";

        }
echo "</table>";
       ?>


<!--Images-->      

<div class="wrapper">
          <div class="text-box"></div>
  
          <h2>About Our Business</h2>
          <p>Established in 1951, First Lady Floral is family owned & operated. With two locations in Greece and Canandaigua, we serve all of Monroe, Ontario and Wayne counties daily. Through our wire service, Teleflora, we deliver around the world! </p>
        </div>
      </body>
    
      <body>

        <div class="wrapper">
          <div class="text-box"></div>
         
          <h2>Our Team</h2>
          <p>Our professional team members in each location are friendly, highly skilled and will make every effort to exceed your expectations.

              With this website, we fulfill order requests from all over the world hoping to send flowers, plants, and gifts to the greater Rochester area. </p>
        </div>
      </body>

      <body>

        <div class="wrapper">
          <div class="text-box"></div>
         
          <h2>What We Offer</h2>
          <p>If you're looking for something made custom and with care, please feel free to reach out to us to discuss how we can make your vision a reality. </p>
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