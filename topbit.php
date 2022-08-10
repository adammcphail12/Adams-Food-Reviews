<!DOCTYPE HTML>

<html lang="en">

<!-- database connect -->

<?php

    session_start();
    include("config.php");

    // connect database

    $dbconnect=mysqli_connect(DB_HOST,DB_USERNAME,DB_PASSWORD,DB_NAME);

    if (mysqli_connect_errno())
    {
        echo "Connection Failed:".mysqli_connect_error();
        exit;
    }

?>




<head>
    <meta charset="UTF-8">
    <meta name="description" content="Food Review DataBase">
    <meta name="keywords" content="food, review,home,takeaway,restaurant">
    <meta name="author" content="Adam McPhail">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Adams Food Reviews</title>
    
    <!-- Edit the link below / replace with your chosen google font -->
    <link href="https://fonts.googleapis.com/css?family=Lato%7cUbuntu" rel="stylesheet"> 
    
    <!-- Edit the name of your style sheet - 'foo' is not a valid name!! -->
    <link rel="stylesheet" href="css/bookstyle.css"> 
    
</head>
    
<body>
    
    <div class="wrapper">
    

        
        <div class="box banner">
            
        <!-- logo image linking to home page goes here -->
        <a href="index.php">
            <div class="box logo"  title="Logo - Click here to go to the Home Page">
            <img class="img-circle" src="images/Adams Food Reviews.png" width="150" height="150" alt="generic logo" /> 
            
            </div>    <!-- / logo -->
        </a>
            
            <h1>Adams Food Reviews</h1>
        </div>    <!-- / banner -->

        
            
        
        
        <div class="box side">
            <h3><a class = "side" href = "showall.php">Show All...</a></h3>
            <hr />


            <!-- Start of food Search -->

            <form method="post" action="food_search.php" enctype="multipart/form-data">
                <!-- Search Box -->
                <input class="search" type="text" size="40" value="" name="food" required placeholder="Food Name..."/>

                <!-- Submit Button -->
                <input class="submit" type ="submit" name="find_food" value="Search"/>
            </form>

            <!-- End of food Search -->
            <hr />


            <!-- Start of Meal time Search -->

            <form method="post" action="mealtime_search.php" enctype="multipart/form-data">
                <!-- Search Box -->
                <input class="search" type="text" size="40" value="" name="meal" required placeholder="Meal Time..."/>

                <!-- Submit Button -->
                <input class="submit" type ="submit" name="find_meal" value="Search"/>
            </form>

            <!-- End of Meal Time Search -->
            <hr />



            <!-- Start of Location Search -->

            <form method="post" action="location_search.php" enctype="multipart/form-data">
                <!-- Search Box -->
                <input class="search" type="text" size="40" value="" name="location" required placeholder="Location..."/>

                <!-- Submit Button -->
                <input class="submit" type ="submit" name="find_location" value="Search"/>
            </form>

            <!-- End of Location Search -->
            <hr />



            <!-- Start of Rating Search -->
            <form method='post' action="rating_search.php" enctype = 'multipart/form-data'> 

                <select class = 'half_width' name='amount'>
                    <option value = "exactly" selected>Exactly...</option>
                    <option value = "more">At least...</option>
                    <option value = "less">At most...</option>
                </select>

                <select class="half_width" name = "stars">
                    <option value=1>&#9733;</option>
                    <option value=2>&#9733;&#9733;</option>
                    <option value=3>&#9733;&#9733;&#9733;</option>
                    <option value=4>&#9733;&#9733;&#9733;&#9733;</option>
                    <option value=5>&#9733;&#9733;&#9733;&#9733;&#9733;</option>
                </select>

                <input type="submit" class="submit" name="find_rating"
                value = "Search" />


            </form>


            <!-- End of Rating Search -->
            

            
           
        </div>
        
        