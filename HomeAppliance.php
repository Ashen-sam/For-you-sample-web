<?php
  include("header.php");
?>

    <section class="cover-image" id="coverhomeapp">

    </section>

    <section id="cart" class="cart">
      <!--section-2-->
      <h1>Products & New Arrivals</h1>
      <div class ='cart-1'>
        <?php 
          $sql = "SELECT * FROM item";
          $result = mysqli_query($conn,$sql);
          $queryResults = mysqli_num_rows($result);
          
          
                    
            if($queryResults > 0) {
                while ($row = mysqli_fetch_assoc($result)) {

                    echo "<div class ='cards'><a href='itemview.php?name=".$row["name"]."&date=".$row["date"]."'>
                        <img src='uploads/".$row["image_url"]."'/>
                        <h2>".$row["name"]."</h2>
                        <h2>LKR ".$row["price"]."/-</h2>
                        <button>BUY NOW</button><i class='bx bx-cart-alt'></i>
                      </a></div>";

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

