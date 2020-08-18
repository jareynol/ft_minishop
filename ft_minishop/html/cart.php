<?php
	error_reporting(0);
	session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Cart</title>
        <meta charset="utf-8">
        
        <!-- <link rel="stylesheet" href="../css/cart.css"> -->
        <link rel="stylesheet" href="../css/footer.css">
        <link rel="stylesheet" href="../css/style.css">
       <link rel="stylesheet" href="../css/cart.css">
    </head>
    <body>
        <header class="header">
            <nav class="nav">
                <div class="hidden"></div>
                <div class="logo">
                        <a class="btn-link" href="index.php"><img src="../img/av.png" width="150" height="60"></a>
                </div>
                <div class="btn-icons">
                    
                    <!-- <div class="logout">
                            <a class="btn-link" href="#">Logout</a>
                            <a class="btn-link" href="#">Login</a>
                    </div> -->
                    <div class="top-menu">
                        <?php
                            if ($_SESSION['loggued_on_user'] != "") {
                              echo "<a href='logout.php' class='title-link__white'>Logout</a>";
                            }
                            else{
                              echo "<a href='login.html' class='title-link__white'>Login</a>";
                            }
                        ?>
                        </div>
                </div>
            </nav>
        </header>
       <div class="cart-banner">
           <img src="https://cs11.pikabu.ru/post_img/big/2018/10/08/7/15389963851866848.jpg" width="100%" height="">
           </div>
        <div class="container-1">
          <div class="new-comics">
			<?php
				include ("check_count_us.php");
				if (check2('bt1')) {
					$exist = "display: block";
				} else {
					$exist = "display: none";
				}
				echo "<div id='bt1' class='comics' style='".$exist."'>";
			?>
            <div class="new-img">
                <img src="https://www.midtowncomics.com/images/PRODUCT/FUL/1918186_ful.jpg">
				</div>
                <div class="new-title">
                        <p>Batman Vol 3 #92</p>
                </div>
                    <div class="action-box">
                    <div class="price">$3.99</div>
                     <?php
                  if ($_SESSION['loggued_on_user']) {
                        echo "<form method='post' action='changehtml2.php'><input class='buy-button' type='submit' name='bt1' value='Delete 1 from cart'></form>";
                 }
                ?> 
            </div>
            
                </div>
			
            <div class="new-comics">

            <?php
				include ("check_count_us.php");
				if (check2('dd')) {
					$exist = "display: block";
				} else {
					$exist = "display: none";
				}
				echo "<div id='dd' class='comics' style='".$exist."'>";
			?>

                <div class="new-img">
                    <img src="https://www.midtowncomics.com/images/PRODUCT/FUL/1909604_ful.jpg">
                    </div>
                    <div class="new-title">
                            <p>Deadpool</p>
                    </div>
                    <div class="action-box">
                        <div class="price">$3.99</div>
                        <?php
                  if ($_SESSION['loggued_on_user']) {
                        echo "<form method='post' action='changehtml2.php'><input class='buy-button' type='submit' name='dd' value='Delete 1 from cart'></form>";
                 }
                 ?>
                <div class="new-comics">
                    <?php
				        include ("check_count_us.php");
				        if (check2('bc')) {
				        	$exist = "display: block";
				        } else {
				        	$exist = "display: none";
				        }
				        echo "<div id='bc' class='comics' style='".$exist."'>";
		            ?>

                <div class="new-img">

                    <img src="https://www.midtowncomics.com/images/PRODUCT/FUL/1918382_ful.jpg">
                </div>
                <div class="new-title">
                        <p>Black Cat</p>
                </div>
                <div class="action-box">
                    <div class="price">$3.51</div>
                    <?php
                  if ($_SESSION['loggued_on_user']) {
                        echo "<form method='post' action='changehtml2.php'><input class='buy-button' type='submit' name='bc' value='Delete 1 from cart'></form>";
                 }
                 ?>

                </div>

            <div class="new-comics">

            <?php
				include ("check_count_us.php");
				if (check2('fl')) {
					$exist = "display: block";
				} else {
					$exist = "display: none";
				}
				echo "<div id='fl' class='comics' style='".$exist."'>";
			?>

                <div class="new-img">
				<img src="https://www.midtowncomics.com/images/PRODUCT/FUL/1918222_ful.jpg">
				</div>
				<div class="new-title">
						<p>Flash</p>
				</div>
				<div class="action-box">
					<div class="price">$5.09</div>
					<?php
                  if ($_SESSION['loggued_on_user']) {
                        echo "<form method='post' action='changehtml2.php'><input class='buy-button' type='submit' name='fl' value='Delete 1 from cart'></form>";
                 }
                 ?>

            </div>

            <div class="new-comics">

            <?php
				include ("check_count_us.php");
				if (check2('bt2')) {
					$exist = "display: block";
				} else {
					$exist = "display: none";
				}
				echo "<div id='bt2' class='comics' style='".$exist."'>";
			?>

                    <div class="new-img">
				<img src="https://www.midtowncomics.com/images/PRODUCT/FUL/1918187_ful.jpg">
				</div>
				<div class="new-title">
						<p>Batman Vol 3 #92</p>
				</div>
				<div class="action-box">
					<div class="price">$3.95</div>
					<?php
                  if ($_SESSION['loggued_on_user']) {
                        echo "<form method='post' action='changehtml2.php'><input class='buy-button' type='submit' name='bt2' value='Delete 1 from cart'></form>";
                 }
                 ?>
                    

            </div>

            <div class="new-comics">
            
            <?php
				include ("check_count_us.php");
				if (check2('md')) {
					$exist = "display: block";
				} else {
					$exist = "display: none";
				}
				echo "<div id='md' class='comics' style='".$exist."'>";
			?>
                    <div class="new-img">

					<img src="https://www.midtowncomics.com/images/PRODUCT/FUL/1918468_ful.jpg">
					</div>
					<div class="new-title">
							<p>Marauders #10</p>
					</div>
					<div class="action-box">
						<div class="price">$3.51</div>
						<?php
                  if ($_SESSION['loggued_on_user']) {
                        echo "<form method='post' action='changehtml2.php'><input class='buy-button' type='submit' name='md' value='Delete 1 from cart'></form>";
                 }
                 ?>
            </div>

            <div class="new-comics">


            <?php
				include ("check_count_us.php");
				if (check2('bw')) {
					$exist = "display: block";
				} else {
					$exist = "display: none";
				}
				echo "<div id='bw' class='comics' style='".$exist."'>";
			?>
                        <div class="new-img">
				        <img src="https://www.midtowncomics.com/images/PRODUCT/FUL/1909647_ful.jpg">
				        </div>
				        <div class="new-title">
				        		<p>Black Widow #1</p>
				        </div>
				        <div class="action-box">
				        	<div class="price">$3.82</div>
				        	<?php
                  if ($_SESSION['loggued_on_user']) {
                        echo "<form method='post' action='changehtml2.php'><input class='buy-button' type='submit' name='bw' value='Delete 1 from cart'></form>";
                 }
                 ?>   

            </div>

            <div class="new-comics">

            <?php
				include ("check_count_us.php");
				if (check2('ca')) {
					$exist = "display: block";
				} else {
					$exist = "display: none";
				}
				echo "<div id='ca' class='comics' style='".$exist."'>";
			?>

                    <div class="new-img">
					<img src="https://www.midtowncomics.com/images/PRODUCT/FUL/1909649_ful.jpg">
					</div>
					<div class="new-title">
							<p>Captain America</p>
					</div>
					<div class="action-box">
						<div class="price">$3.82</div>
						<?php
                  if ($_SESSION['loggued_on_user']) {
                        echo "<form method='post' action='changehtml2.php'><input class='buy-button' type='submit' name='ca' value='Delete 1 from cart'></form>";
                 }
                 ?>
            </div>

            <div class="new-comics">

            <?php
				include ("check_count_us.php");
				if (check2('ag')) {
					$exist = "display: block";
				} else {
					$exist = "display: none";
				}
				echo "<div id='ag' class='comics' style='".$exist."'>";
			?>
                        <div class="new-img">
					<img src="https://www.midtowncomics.com/images/PRODUCT/FUL/1909581_ful.jpg">
					</div>
					<div class="new-title">
							<p>Avengers Vol7 #32</p>
					</div>
					<div class="action-box">
						<div class="price">$3.81</div>
						<?php
                  if ($_SESSION['loggued_on_user']) {
                        echo "<form method='post' action='changehtml2.php'><input class='buy-button' type='submit' name='ag' value='Delete 1 from cart'></form>";
                 }
                 ?>
            </div>

			</div>
                
        <footer class="footer">
            <div class="links">
                    <div class="icon-link">
                            <a href="#"><img src="">1</a>
                            <a class="icon-2" href="#"><img src="">2</a>
                            <a class="icon-3" href="#"><img src="">3</a>
                    </div>
                    <div class="footer_author">
                        <a href="https://profile.intra.42.fr/users/jareynol">jareynol</a>
                        <a class="intra-1" href="https://profile.intra.42.fr/users/ifran">ifran</a>
                    </div>
            </div>
            </div>
    </footer>
</body>
</html>