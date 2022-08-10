<?php
    include "topbit.php";



    $showall_sql="SELECT * FROM `foodreview` ORDER BY `foodreview`.`Food` ASC";
    $showall_query=mysqli_query($dbconnect,$showall_sql);
    $showall_rs=mysqli_fetch_assoc($showall_query);
    $count=mysqli_num_rows($showall_query);
?>



<div class="box main">
    <h2>All Items</h2>

    <!-- All Itmes -->
    <div class = "results">



    <?php

    // check if there are results

    if ($count < 1)

    {
    ?>


    <div class ="error">


        Sorry!  There are no results for your Search. Please try again.



    </div>



    <?php


    } // end count if 



    // output error when no results

    else {

        do {
            ?>


            <div class = "box">

                <p>Food: <span class = "subheading"><?php  echo  $showall_rs['Food']?></span></p>

                <p>Location: <span class = "subheading"><?php  echo  $showall_rs['Location']?></span></p>

                <p>Meal Time: <span class = "subheading"><?php  echo  $showall_rs['Time']?></span></p>

                <p>Rating: <span class = "subheading"><?php  echo  $showall_rs['Rating']?></span></p>

                <p>Vegetarian: <span class = "subheading"><?php  echo  $showall_rs['Vege']?></span></p>
            
            
                <p>Review: <span class = "subheading"></span></p>

                <p><?php  echo  $showall_rs['Review']?></p>

            </div> <!-- end box --> 
            <br><br>
            <?php
        } // end do

        while ($showall_rs=mysqli_fetch_assoc($showall_query));

    } // end else


    //display results.

    ?>

        
    </div> <!-- End Results -->
            
   
</div>    <!-- / main -->

<?php

    include "bottombit.php";

?>
        

