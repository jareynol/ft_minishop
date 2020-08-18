<?php
	error_reporting(0);
	session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>ft_minishop</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="../css/style.css">
        <link rel="stylesheet" href="../css/menu.css">
        <link rel="stylesheet" href="../css/header.css">
        <!-- <link rel="stylesheet" href="../css/footer.css"> -->
        
    </head>
    <body>
        <header class="header">
            <nav class="nav">
                <div class="wrapper-1">
                        <input type="checkbox" id="check-menu">
                               
                                <div class="burger-line first"></div>
                                <div class="burger-line second"></div>
                                <div class="burger-line third"></div>
                                <div class="burger-line fourth"></div>
                               
                                <label for="check-menu">Все категории</label>
                                    <nav class="main-menu">
                                        <a class="burger-link" href="new_comics.html">New Comics</a>
                                        <a class="burger-link" href="top_comics.html">Top Comics</a>
                                        <a class="burger-link" href="avengers">Avengers</a>
                                        <a class="burger-link" href="#">Bla-bla</a>
                                    </nav>
                            </div>
              	</div>
                <div class="logo">
                        <a class="btn-link" href="#"><img src="../img/av.png" width="150" height="60"></a>
                </div>

                <?php
		        if ($_SESSION['loggued_on_user'] != "") {
                                echo "<a href='cart.php' class='title-link__white'>Cart</a><a href='logout.php' class='title-link__white'>Cart</a>";
                                
		        }
		        else{
		            echo "<a href='login.html' class='title-link__white'>Login</a>";
                }
	        ?>



                <!--<div class="btn-icons">
                    <div class="cart">
                            <a class="btn-link" href="cart.html"><img src="../img/buy.png"></a>
                    </div>
                    <div class="login">
                            <a class="btn-link" href="auth.html"><img src="../img/user.png"></a>
                    </div> -->
                </div>
            </nav>
        </header>
        <div class="banner">
            <img src="https://project-nerd.com/wp-content/uploads/2013/09/Marvel-Comics-Character-Banner.jpg" width="100%" height=""> 
        </div>
        <div class="container">
        <div class="category">
                <div class="main-title"><a class="title-link" href="new_comics.html"><h1>NEW COMICS</h1></a></div>
        <div class="new-comics">
			<?php
				include ("check_count.php");
				if (check('bt1')) {
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
                        echo "<form method='post' action='changehtml.php'><input class='buy-button' type='submit' name='bt1' value='Add to cart'></form>";
                 }
                 else{

                 }
                ?>
                </div>
            
			</div>
			<?php
				if (check('dd')) {
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
                        <button class="buy-button">Купить</button>
                        </div>
               
				</div>	
				<?php
					if (check('bc')) {
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
                            <button class="buy-button">Купить</button>
                            </div>
                    
                </div>
                
            </div>
            <div class="line"><hr/></div>
            <div class="main-title"><a class="title-link" href="top_comics.html"><h1>BEST SELLERS</h1></a></div>
        <div class="top-comics">			
			<?php
				if (check('fl')) {
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
					<button class="buy-button">Купить</button>
					</div>
			
			</div>
			<?php
				if (check('bt2')) {
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
					<button class="buy-button">Купить</button>
					</div>
			
			</div>
			<?php
				if (check('md')) {
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
						<button class="buy-button">Купить</button>
						</div>
				
			</div>
        </div>
        <div class="line"><hr/></div>
        <div class="main-title"><a class="title-link" href="avengers"><h1>AVENGERS</h1></a></div>
        <div class="exclusive">
			<?php
				if (check('bw')) {
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
					<button class="buy-button">Купить</button>
					</div>
			
			</div>
			<?php
				if (check('ca')) {
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
						<button class="buy-button">Купить</button>
						</div>
				
				</div>
				<?php
					if (check('ag')) {
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
						<button class="buy-button">Купить</button>
					</div>					
				</div>
        </div>
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
                            <a href="https://profile.intra.42.fr/users/ifran">ifran</a>
                        </div>
                </div>

        </footer>
</body>
</html>