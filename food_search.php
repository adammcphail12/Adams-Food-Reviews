<?php 
include "topbit.php";



// if find button pushed
if (isset($_POST['find_food']))
{



    $food = $_POST['food'];

    $showall_sql="SELECT * FROM `foodreview` WHERE `Food` LIKE '%$food%' ORDER BY `Food` DESC";
    $showall_query=mysqli_query($dbconnect, $showall_sql);
    $showall_rs=mysqli_fetch_assoc($showall_query);
    $count=mysqli_num_rows($showall_query);

    ?>
    
        
    <div class="box main">
        <h2>Food Search</h2>
            
        <?php

        // check if there are any results

        if($count<1)

        {
            
        ?>

        <div class="error">
            Sorry, We have no results for your search, please try again using the search bar.


        </div>

        <?php
        } // end count if
    // if there are not any results, output error

        else{
            do{
            ?>
            <div class="box">
            
            <p>Food: <span class="sub_heading"><?php echo 
            $showall_rs['Food']; ?> </span>
            </p>

            <p>Meal Time: <span class="sub_heading"><?php echo 
            $showall_rs['Time']; ?></span>
            </p>

            <p>Location: <span class="sub_heading"><?php echo 
            $showall_rs['Location']; ?></span>
            </p>


            <p>Rating: <span class="sub_heading">
            <?php 
            
            for ($x=0; $x < $showall_rs['Rating']; $x++ )
            {
                echo "&#9733;";
            }
            ?>
            </span></p>

            <p><span class="sub_heading"><?php echo $showall_rs['Review'];
            ?>
            
        </span></p>



        </div>  <!--- / review div -->

        <br /><br />


        <?php
            } // end of do

            while($showall_rs=mysqli_fetch_assoc($showall_query));
        } // end else

        // If their are any results display them here

    }   // ends iset if
    ?>


</div>  <!-- / end of results -->
        
            
</div>    <!-- / main -->
        
<?php
    include "bottombit.php";
?>

    
