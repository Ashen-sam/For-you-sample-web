<?php
    include("header.php");
?>
<a href="HomeAppliance.php">&#8592;</a><br>
<h1>Search Page</h1>



<section id="cart" class="cart">
    <!--section-2-->
    
    

    <?php
        if(isset($_POST["submit-search"])){
            $search = mysqli_real_escape_string($conn, $_POST["search"]);

            $sql = "SELECT * FROM item WHERE name LIKE '%$search%' OR  description LIKE '%$search%' OR
                    price LIKE '%$search%'";
            
            $result = mysqli_query($conn,$sql);
            
            $queryResult = mysqli_num_rows($result);

            echo "There are {$queryResult} results!<br>";
            echo "<h1>Products</h1>"; 
    ?>

    <div class ='cart-1'>
        <?php
            if($queryResult > 0) {
                while ($row = mysqli_fetch_assoc($result)) {

                    echo "<div class ='cards'><a href='itemview.php?name=".$row["name"]."&date=".$row["date"]."'>
                        <img src='uploads/".$row["image_url"]."'/>
                        <h2>".$row["name"]."</h2>
                        <h2>LKR ".$row["price"]."/-</h2>
                        <button>BUY NOW</button><i class='bx bx-cart-alt'></i>
                    </a></div>";

                }
            }
            else {
                echo "There are no results matching your search!";
            }

        }

        ?>
    </div>
    
</section>

</body>
</html>

<?php
  include("footer.html");
?>