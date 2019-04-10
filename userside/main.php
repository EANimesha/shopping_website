<?php
include "header.php";
  ?>

  
    <div class="container" style="height:auto;">
    
       <div style="float: left;border:5px solid black;margin-top: 13px;">
            <img id="slider" src="images/pp4.jpg" width="100%" height="290px" />
        </div>
        <script type="text/javascript">
           var images = ['images/pp4.jpg', 'images/p5.jpg', 'images/p6.jpg'];
          var num = 0;
          function next() {
              var slider = document.getElementById('slider');
            num++;
            if(num >= images.length) {
                    num = 0;
              }
                slider.src = images[num];
            }
            setInterval(next, 3000);
        </script>


      <hr width="100%">
      <marquee><h2 style="font-family:verdana;">MyShopping.lk</h2></marquee>
      <hr width="100%">
    <table width="100%" border="0" align="center">
      <tr style="padding-top: 0px;">
        <td>
          <?php
          include "menu.php";
          ?>
        </td>
        <td style="padding: 0 px;width: 78%;">
          <div id="heading-block" style="width: 98%;">
        <h2>Category</h2>
        <a href="menF.php">
          <div class="box">
            <img src="images\1.jpg" width="250px" height="250px">
            <span>Men Fashion</span>
          </div>
        </a>
        <a href="womenF.php">
          <div class="box">
            <img src="images\2.jpg" width="250px" height="250px">
            <span>Women Fashion</span>
          </div>
        </a>
        <a href="shoes.php">
          <div class="box">
            <img src="images\3.jpg" width="250px" height="250px">
            <span>Shoes</span>
          </div>
        </a>
        <a href="accesories.php">
          <div class="box">
            <img src="images\4.jpg" width="250px" height="250px">
            <span>Accesories</span>
          </div>
        </a>
       </div>
       <div id="heading-block" style="width: 98%;">
         <h2> Special Offers</h2>
            <div class="pbox">
            <img src="images\11.jpg">
            <div class="prod-trans">
              <div class="prod-feature">
                <p>Man Special Suit</p>
                <p style="color: white;"><b>Price rs.2000<b></p>
                <a href="product_desc.php?id=21"><input type="button" name="" value="Add to Cart"></a>
              </div>
              </div>
            </div>
            <div class="pbox">
            <img src="images\3.jpg">
            <div class="prod-trans">
              <div class="prod-feature">
                <p>Special Sport Shoe</p>
                <p style="color: white;"><b>Price rs.2000<b></p>
                <a href="product_desc.php?id=22"><input type="button" name="" value="Add to Cart"></a>
              </div>
              </div>
            </div>
            <div class="pbox">
            <img src="images\13.jpg">
            <div class="prod-trans">
              <div class="prod-feature">
                <p>Man Gent's Coat</p>
                <p style="color: white;"><b>Price rs.2100<b></p>
                <a href="product_desc.php?id=23"><input type="button" name="" value="Add to Cart"></a>
              </div>
              </div>
            </div>
            <div class="pbox">
            <img src="images\32.jpg">
            <div class="prod-trans">
              <div class="prod-feature">
                <p>kids Special Shoe</p>
                <p style="color: white;"><b>Price rs.1500<b></p>
                <a href="product_desc.php?id=26"><input type="button" name="" value="Add to Cart"></a>
              </div>
              </div>
            </div>

    </div>  
        </td>
        <td>
          <div style="width:220px;float:left;height:790px;border-radius: 10px;font-size: 20px;">
            <img src="images/p21.jpg" style="width:220px;"><hr width="100%">
              <img src="images/p2.jpg" style="width:220px;"><p><hr width="100%">
                <img src="images/p22.jpg" style="width:220px;"><p><hr width="100%">

          </div>
        </td>
      </tr>
    </table>
      
<hr width="100%">      
<div>
  <img src="images/p0.jpg" width="100%" style="margin-top: 13px;">
</div>
 


 <?php
 include "footer.php";
 ?>

 </div>
</body>
</html>