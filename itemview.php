<?php
    include("header.php");
?>


    <div class="">
    <a href="HomeAppliance.php">&#8592;</a>
    <?php
        
        $name= mysqli_real_escape_string($conn, $_GET["name"]);
        $date= mysqli_real_escape_string($conn, $_GET["date"]);

        $sql = "SELECT * FROM item WHERE name='$name' AND date='$date'";
        $result = mysqli_query($conn,$sql);
        $queryResults = mysqli_num_rows($result);

        if($queryResults > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<div class=''>
                    <h1>".$row["name"]."</h1>
                    <div class='display-item'>
                        <img src='uploads/".$row["image_url"]."' height='400px'/>
                    </div>
                    <p>".$row["description"]."</p>
                    <p>Discount: ".$row["discount"]."/-</p>
                    <p>Price: ".$row["price"]."/-</p>
                    
                </div>";

            }
        }
    ?>
    </div>
    
</body>
</html>

<?php
  include("footer.html");
?>