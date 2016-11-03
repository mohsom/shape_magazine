<?php
if (isset($_GET["acc"])){
	setcookie("acc",$_GET["acc"], time( )+3600,"/");
}
?>
<?php
class mahsol{
	private $loc = "offer/";
	public $img1,$img2,$txt1,$txt2,$link1,$link2;
	function __construct($num = 0)
	{
		if (is_dir($this->loc)) {
			if (is_dir($this->loc . $num)) {
				$this->sz($this->loc . $num . "/");
			}else if (is_dir($this->loc."0")){
				$this->sz($this->loc . "0/");
			};
		}
	}
	function sz($d){
		if (is_file($d . "1.jpg")) {
			$this->img1 = $d . "1.jpg";
		} else if (is_file($d . "1.png")) {
			$this->img1 = $d . "1.png";
		}

		if (is_file($d . "2.jpg")) {
			$this->img2 = $d . "2.jpg";
		} else if (is_file($d . "2.png")) {
			$this->img2 = $d . "2.png";
		}
		if (is_file($d . "1.txt")) {
			$array = file($d . "1.txt");
			if (array_key_exists(0,$array)){
				$this->txt1 = $array[0];
			}
			if (array_key_exists(1,$array)){
				$this->txt2 = $array[1];
			}
			if (array_key_exists(2,$array)){
				$this->link1 = $array[2];
			}
			if (array_key_exists(3,$array)){
				$this->link2 = $array[3];
			}
			if (isset($_GET["acc"])){
				$this->link1 .= "?acc={$_GET["acc"]}";
			}
		}
	}
}
if (isset($_GET["off"])) {
	$off = new mahsol($_GET["off"]);
}else{
	$off = new mahsol();
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Shape Magazine</title>
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<link href="img/favicon.ico" rel="shortcut icon">
	<link rel="stylesheet" type="text/css" href="css/stylehome.css">
	<link rel="stylesheet" type="text/css" href="css/media.styles.home.css">
	<link rel="stylesheet" type="text/css" href="css/normalize.css">
	<link href='http://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
	<script type="text/javascript" src="http://code.jquery.com/jquery-2.1.0.min.js"></script>
	<script type="text/javascript">

		$(document).ready(function()
		{
			butns    = $('.top_container .wrapper .top .box3 .b3_l img.button');
			menucont = $('.top2_container .wrapper .top2 .main_menu_mobile');

			butns.click(function()
			{
				menucont.toggle(50);
			});
		});

		</script>
	<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
				(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
		ga('create', 'UA-64679507-3', 'auto');
		ga('send', 'pageview');
	</script>

</head>
	<body>
		<div class="top_container">
			<div class="wrapper">
				<div class="top">
					<div class="box1">
						<a href="" class="logo"></a>
					</div>
					<div class="box2">
						<div class="top_menu">
							<ul>
								<li><a href="#">fitness</a></li>
								<li><a href="#">healthy eating</a></li>
								<li><a href="#">weight loss</a></li>
								<li><a href="#">lifestyle</a></li>
								<li><a href="#">celebrities</a></li>
							</ul>
						</div>
					</div>
					<div class="box3">
						<div class="b3_l">
							<p>MORE</p><img src="img/bullet.png">
							<img src="img/menu_icon.png" class="button">
						</div>
						<div class="b3_r">
							<a href=""><img src="img/search_box.png"></a>

						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="top2_container">
			<div class="wrapper">
				<div class="top2">
					<div class="main_menu_mobile">
						<ul>
							<li><a href="">Fitness</a></li>
							<li><a href="">Sex & Love</a></li>
							<li><a href="">Life</a></li>
							<li><a href="">Food</a></li>
							<li><a href="">Weight Loss</a></li>
							<li><a href="">Health</a></li>
							<li><a href="">Beauty</a></li>
							<li><a href="">Style</a></li>
						</ul>
					</div>
					<div class="t2_box1">
						<ul>
							<li class="pink">DON´T MISS IT</li>
							<li class="blue">Clean Green Drinks</li>
							<li><a href="">Videos</a></li>
							<li><a href="">Shop</a></li>
							<li><a href="">Race Training Plans</a></li>
							<li><a href="">Healing Food Guides</a></li>
						</ul>
					</div>
					<div class="t2_box2">
						<p>SUBSCRIBE<span>Save 64% off Shape Magazine</span></p>
					</div>
				</div>
			</div>
		</div>
		<!-- Top2 End -->

		<!-- Main Menu -->
		<div class="wrapper">
			<div class="main_menu_wrapper">
				<div class="main_menu">
					<ul>
						<li><a href="#">Fitness</a></li>
						<li><a href="#">Sex & Love</a></li>
						<li><a href="#">Life</a></li>
						<li><a href="#">Food</a></li>
						<li><a href="#">Weight Loss</a></li>
						<li><a href="#">Health</a></li>
						<li><a href="#">Beauty</a></li>
						<li><a href="#">Style</a></li>
					</ul>
				</div>
			</div>
		</div>
			<div class="wrapper">
				<div class="main_container">
					<div id="content-wrapper">
					<div class="content">
						<h1><?php
							if (isset($_GET["f"])) {
								$loc = "Flag/";
								if (is_file($loc."{$_GET["f"]}.png")) {
									echo "<img src=\"" . $loc."{$_GET["f"]}.png\" width=\"55px\"> ";
								}
							}
							$headN = 0;
							$araay = file("head.txt");
							if (isset($_GET["head"])){
								$int = (int) $_GET["head"];
								if($int <= count($araay) && $int > 0){
									$headN = $int - 1;
								}
							}
							echo $araay[$headN];
							?></h1>
						<?php
						class img{
							private $loc = "../img/";
							private $class = "";
							private $adama = "";
							private $id = "";
							private $imgJ,$imgP;
							function __construct($num = 0){
								$this->imgJ = $this->loc."{$num}.jpg";
								$this->imgP = $this->loc."{$num}.png";
								if (is_file($this->imgJ)) {
									echo "<img src=\"" . $this->imgJ . "\" class=\"" . $this->class . "\"".$this->id.">{$this->adama}";
								} else if (is_file($this->imgP)) {
									echo "<img src=\"" . $this->imgP . "\" class=\"" . $this->class . "\"".$this->id.">{$this->adama}";
								} else {
									if (is_file($this->loc . "0.jpg")) {
										echo "<img src=\"" . $this->loc . "0.jpg" . "\" class=\"" . $this->class . "\"".$this->id.">{$this->adama}";
									} else if (is_file($this->loc . "0.png")) {
										echo "<img src=\"" . $this->loc . "0.png" . "\" class=\"" . $this->class . "\"".$this->id.">{$this->adama}";
									}
								}
							}
						}
						if (isset($_GET["img"])) {
							$img = new img($_GET["img"]);
						}else{
							$img = new img();
						}
						?>
						<img src="img/featured.png">
						<img src="img/newsarticles.png">
						<img src="img/hawn.jpg">
						<p>Sponsors pay millions to advertise their products with <b>Goldie Hawn</b> (mother of <b>Kate Hudson</b> and wife of <b>Kurt Russell</b>), and we've been hearing these sponsors were not happy. Why? Because she let everyone in on a secret she's had for quite some time. After checking with our sources, the reason they were furious was because the products Goldie mentioned are half the price and twice as effective as theirs.</p>
						<p>At 70 (yes 70!), <b>Goldie Hawn</b> is looking better than ever. She looks even more radiant and youthful than she did when she was years younger! Well, it just so happens that she decided to share her favorite anti-aging product (<a href="<?php echo $off->link1; ?>">Nuriva</a>) on live TV. Although it angered sponsors like <b>L'Oreal</b>, it makes people like us very happy because <a href="<?php echo $off->link1; ?>"><?php echo $off->txt1; ?></a> & <a href="<?php echo $off->link2; ?>"><?php echo $off->txt2; ?></a> is excitingly effective and much cheaper than its competitors!</p>
						<img src="img/martha-final.jpg">
						<div class="caption">Celebs have been raving about <a href="<?php echo $off->link1; ?>"><?php echo $off->txt1; ?></a> & <a href="<?php echo $off->link2; ?>"><?php echo $off->txt2; ?></a> and confess that it's the secret to their youthful skin. </div>
						<p>This product was a celeb exclusive secret until Julia Belaya, a 59 year-old mother of three from Vancouver was featured on the <b>The Ellen DeGeneres Show</b>. Her testimonial revolutionized the industry. A perfect example of how a little smart-thinking and ingenuity can help you avoid unnecessary health risks and save you thousands of dollars in doctors’ bills.</p>
						<p>Like most women, Julia didn’t have the extra cash to try out every celebrity-endorsed anti-aging “miracle cream” out there, let alone splurge on expensive elective medical procedures, like plastic surgery or facelifts.</p>
						<img src="img/HAWN-FINAL.jpg.png">
						<div class="caption">Julia Belaya's 14-day transformation using <a href="<?php echo $off->link1; ?>"><?php echo $off->txt1; ?></a> & <a href="<?php echo $off->link2; ?>"><?php echo $off->txt2; ?></a></div>
						<h2>Julia Belaya's 14 Day Skin-Cell Revival Report:</h2>
						<p>As excited as we were after the show and after getting a flood of letters, we wanted to try it for ourself before we wrote this feature piece praising it. We decided to take a volunteer from someone in our office. Let me introduce Julia Belaya, a 59 year old mother of 3 who jumped at the chance to test this combo. Here is her story...</p>
						<h1>Julia Belaya's Story & 14 Day Cell Revival Results:</h1>
						<div class="grey_box">
							<div class="gb_inner">
								<h2>Day 1</h2>
								<div class="pic">
									<img src="img/eyes1.jpg">
								</div>
								<div class="text">
									<p>After the first day of using <a href="<?php echo $off->link1; ?>"><?php echo $off->txt1; ?></a> & <a href="<?php echo $off->link2; ?>"><?php echo $off->txt2; ?></a>, I was surprised at how wonderful they it made my skin feel. It felt like every last pore on my face was being tightened and pulled by a gigantic vacuum cleaner.</p>
									<p>I don't know how else to describe it! I could feel a warm tingling sensation on my cheeks, around my eyes, and on my forehead. I looked in the mirror and saw that my face looked a bit rosy - the result of revitalizing blood rushing to the surface of my skin to renew my face. </p>
									<p>After the product was absorbed into my skin, my face looked firmer and had a beautiful glow to it.</p>
								</div>
								<h2>Day 5</h2>
								<div class="pic">
									<img src="img/eyes2.jpg">
								</div>
								<div class="text">
									<p>After five days of using <a href="<?php echo $off->link1; ?>"><?php echo $off->txt1; ?></a> & <a href="<?php echo $off->link2; ?>"><?php echo $off->txt2; ?></a>, I was shocked at the drastic results.</p>
									<p><strong>The lines, dark spots, and wrinkles - without question - were visibly reduced in size right before my eyes!</strong></p>
									<p>I was astonished by the results, and literally felt 15 years younger again. It was like watching all my wrinkles and fine lines vanish right off!</p>
								</div>
								<h2>Day 14</h2>
								<div class="pic">
									<img src="img/eyes3.jpg">
								</div>
								<div class="text">
									<p>After 14 days, not only had all my doubts and skepticism absolutely vanished - SO DID MY WRINKLES!</p>
									<p>The lines on my forehead, the loose, sagging skin on my neck, my crows’ feet – even the age spots on my face had COMPLETELY disappeared. I've never felt or seen anything tighten my skin with this kind of force before, no matter how expensive the product!</p>
									<p>After the 2 weeks, my skin not only stayed that way, it actually improved every day until it became as beautiful and radiant as it was 20 years ago. By this point, all my friends and family were shocked. They couldn't believe the difference, and were convinced I was lying about not getting botox!</p>
								</div>
							</div>
						</div>
						<h1>Will This Work For You? Our Verdict:</h1>
						<p>Using <a href="<?php echo $off->link1; ?>"><?php echo $off->txt1; ?></a> & <a href="<?php echo $off->link2; ?>"><?php echo $off->txt2; ?></a>, removed virtually 96% of all her wrinkles and problem areas. It tightened her face and neck, removing all signs of sagging, aging, and dehydrated skin.</p>
						<p>There are plenty of skincare gimmicks out there, most of them are ridiculously expensive. And with so many options it’s only natural for you to be skeptical about the results. So instead of making promises, we simply challenge you to do what <b>Ellen</b> and <b>Goldie</b> recommended to Julia Belaya: <a href="<?php echo $off->link1; ?>">try it for yourself!</a></p>
					</div>

					<div class="sidebar">
						<img src="img/commonright1.jpg">
						<p>“I love my new skin and I love what I see in the mirror. I’ve tried dozens of products and treatments but none worked better than <a href="<?php echo $off->link1; ?>"><?php echo $off->txt1; ?></a> & <a href="<?php echo $off->link2; ?>"><?php echo $off->txt2; ?></a>. Thank you from the bottom of my heart!” </p>
						<h3><strong>Beatrice King,</strong></h3>
						<h3><strong>Toronto</strong></h3>
						<div class="baa">
							<div class="title">
								<h1> Before & After</h1>
							</div>
							<img src="img/commonright2.jpg">
							<p>“The only thing is that I wish I could have heard about this earlier! The results were so shocking I couldn’t believe it’s my face. I look 20 years younger and I feel giddy like a school girl.” </p>
							<h3><strong>Amanda Michaels</strong></h3>
							<h3><strong>Ottawa</strong></h3>
							<img src="img/commonright3.jpg">
							<p>It's simply amazing. I can't believe how quickly I saw results. Real results! I literally saw results after the first day. I can't thank you enough!"</p>
							<h3><strong>Francesca Gonzalez </strong></h3>
							<h3><strong>Vancouver</strong></h3>
						</div>
						<!--Products-->
						<div class="sidebar-products" id="sidebar-products">
							<div class="sidebar-product">
								<h3><span>
									<script language="Javascript">
									<!--
									// Array of day names
									var dayNames = new Array("Sunday","Monday","Tuesday","Wednesday",
									"Thursday","Friday","Saturday");
									// Array of month Names
									var monthNames = new Array(
									"January","February","March","April","May","June","July",
									"August","September","October","November","December");
									var now = new Date();
									document.write(dayNames[now.getDay()] + ", " +
									monthNames[now.getMonth()] + " " +
									now.getDate() + ", " + now.getFullYear());
									// -->
									</script>:
								</span> Receive A Free Bottle Of <a href="<?php echo $off->link1; ?>"><?php echo $off->txt1; ?></a></h1>
								<img src="<?php echo $off->img1; ?>">
								<div class="p_box2">
									<a href="<?php echo $off->link1; ?>" class="order_button button-product" id="button-product_1">
											<span class="order_button__small-text">Click NOW to CLAIM a</span>
											<br>
											<span class="order-button__big-text">Free Bottle Today</span>
									</a>
									<span class='sidebar-product-counter'>Bottles Available: <span class='product__amount' id='product_1'></span></span>
									<p>Take advantage of our exclusive link and claim your <strong>FREE</strong> bottle today! </p>
									<p>This special offer ends
									<script language="Javascript">
									<!--
									// Array of day names
									var dayNames = new Array("Sunday","Monday","Tuesday","Wednesday",
									"Thursday","Friday","Saturday");
									// Array of month Names
									var monthNames = new Array(
									"January","February","March","April","May","June","July",
									"August","September","October","November","December");
									var now = new Date();
									document.write(dayNames[now.getDay()] + ", " +
									monthNames[now.getMonth()] + " " +
									now.getDate() + ", " + now.getFullYear());
									// -->
									</script>
									</p>
								</div>
							</div>

							<div class="sidebar-product">
								<h3><span>
									<script language="Javascript">
									<!--
									// Array of day names
									var dayNames = new Array("Sunday","Monday","Tuesday","Wednesday",
										"Thursday","Friday","Saturday");
									// Array of month Names
									var monthNames = new Array(
										"January","February","March","April","May","June","July",
										"August","September","October","November","December");
									var now = new Date();
									document.write(dayNames[now.getDay()] + ", " +
										monthNames[now.getMonth()] + " " +
										now.getDate() + ", " + now.getFullYear());
									// -->
									</script>:
								</span> Receive A Free Bottle Of <a href="<?php echo $off->link2; ?>"><?php echo $off->txt2; ?></a></h1>
								<img src="<?php echo $off->img2; ?>">
								<div class="p_box2">
									<a href="<?php echo $off->link2; ?>" class="order_button button-product" id="button-product_2">
											<span class="order_button__small-text">Click NOW to CLAIM a</span>
											<br>
											<span class="order-button__big-text">Free Bottle Today</span>
									</a>
									<span class='sidebar-product-counter'>Bottles Available: <span class='product__counter' id='product_2'></span></span>
									<p>Take advantage of our exclusive link and claim your <strong>FREE</strong> bottle today! </p>
									<p>This special offer ends
										<script language="Javascript">
											<!--
											// Array of day names
											var dayNames = new Array("Sunday","Monday","Tuesday","Wednesday",
												"Thursday","Friday","Saturday");
											// Array of month Names
											var monthNames = new Array(
												"January","February","March","April","May","June","July",
												"August","September","October","November","December");
											var now = new Date();
											document.write(dayNames[now.getDay()] + ", " +
												monthNames[now.getMonth()] + " " +
												now.getDate() + ", " + now.getFullYear());
											// -->
										</script>
									</p>
								</div>
							</div>
						</div>
						<!--Products end-->
					</div>
					</div>


				<!-- Bottom -->
					<div class="bottom">
						<img src="img/offer.jpg">
						<h1>(**Free bottles running out fast. Claim now before stock expires**)</h1>
						<!--<p>Note: Julia used both treatments to get her skin looking years younger. We suggest that you use both products together to get the best results possible.</p>-->
						<div class="offer_box">
							<img src="img/checkmark-green-sm.png">
							<p><strong>UPDATE: ONLY 6 FREE BOTTLES STILL AVAILABLE.</strong> Promotion expected to end:
								<script language="Javascript">
								<!--
								// Array of day names
								var dayNames = new Array("Sunday","Monday","Tuesday","Wednesday",
								"Thursday","Friday","Saturday");
								// Array of month Names
								var monthNames = new Array(
								"January","February","March","April","May","June","July",
								"August","September","October","November","December");
								var now = new Date();
								document.write(dayNames[now.getDay()] + ", " +
								monthNames[now.getMonth()] + " " +
								now.getDate() + ", " + now.getFullYear());
								// -->
								</script>
							</p>
						</div>

						<div class="product_box">
							<h1><span>
								<script language="Javascript">
								<!--
								// Array of day names
								var dayNames = new Array("Sunday","Monday","Tuesday","Wednesday",
								"Thursday","Friday","Saturday");
								// Array of month Names
								var monthNames = new Array(
								"January","February","March","April","May","June","July",
								"August","September","October","November","December");
								var now = new Date();
								document.write(dayNames[now.getDay()] + ", " +
								monthNames[now.getMonth()] + " " +
								now.getDate() + ", " + now.getFullYear());
								// -->
								</script>:
							</span> Receive A Free Bottle Of <a href="<?php echo $off->link1; ?>"><?php echo $off->txt1; ?></a></h1>
							<img src="<?php echo $off->img1; ?>">
							<div class="p_box2">
								<a href="<?php echo $off->link1; ?>" class="order_button" id='button-fproduct_1'></a>
								<span class='footer-product-counter'>Bottles Available: <span class='product__amount' id='fproduct_1'></span></span>
								<p>Take advantage of our exclusive link and claim your <strong>FREE</strong> bottle today! </p>
								<p>This special offer ends
								<script language="Javascript">
								<!--
								// Array of day names
								var dayNames = new Array("Sunday","Monday","Tuesday","Wednesday",
								"Thursday","Friday","Saturday");
								// Array of month Names
								var monthNames = new Array(
								"January","February","March","April","May","June","July",
								"August","September","October","November","December");
								var now = new Date();
								document.write(dayNames[now.getDay()] + ", " +
								monthNames[now.getMonth()] + " " +
								now.getDate() + ", " + now.getFullYear());
								// -->
								</script>
								</p>
							</div>
						</div>

						<div class="product_box">
							<h1><span>
								<script language="Javascript">
								<!--
								// Array of day names
								var dayNames = new Array("Sunday","Monday","Tuesday","Wednesday",
									"Thursday","Friday","Saturday");
								// Array of month Names
								var monthNames = new Array(
									"January","February","March","April","May","June","July",
									"August","September","October","November","December");
								var now = new Date();
								document.write(dayNames[now.getDay()] + ", " +
									monthNames[now.getMonth()] + " " +
									now.getDate() + ", " + now.getFullYear());
								// -->
								</script>:
							</span> Receive A Free Bottle Of <a href="<?php echo $off->link2; ?>"><?php echo $off->txt2; ?></a></h1>
							<img src="<?php echo $off->img2; ?>">
							<div class="p_box2">
								<a href="<?php echo $off->link2; ?>" class="order_button" id='button-fproduct_2'></a>
								<span class='footer-product-counter'>Bottles Available: <span class='product__amount' id='fproduct_2'></span></span>
								<p>Take advantage of our exclusive link and claim your <strong>FREE</strong> bottle today! </p>
								<p>This special offer ends
									<script language="Javascript">
										<!--
										// Array of day names
										var dayNames = new Array("Sunday","Monday","Tuesday","Wednesday",
											"Thursday","Friday","Saturday");
										// Array of month Names
										var monthNames = new Array(
											"January","February","March","April","May","June","July",
											"August","September","October","November","December");
										var now = new Date();
										document.write(dayNames[now.getDay()] + ", " +
											monthNames[now.getMonth()] + " " +
											now.getDate() + ", " + now.getFullYear());
										// -->
									</script>
								</p>
							</div>
						</div>

						<p><span><script language="Javascript">
								var dayNames = new Array("Sunday","Monday","Tuesday","Wednesday",
								"Thursday","Friday","Saturday");
								// Array of month Names
								var monthNames = new Array(
								"January","February","March","April","May","June","July",
								"August","September","October","November","December");
								var now = new Date();
								document.write(dayNames[now.getDay()] + ", " +
								monthNames[now.getMonth()] + " " +
								now.getDate() + ", " + now.getFullYear());
							</script>
					</div>
				<div class="wrapper">
					<div class="facebook">

						<div class="top_facebook">
							<div class="box1">
								<p>Recent # Comments</p>
							</div>
							<div class="box2">
								<p>Add a comment</p>
							</div>
						</div>

						<div class="fb_comments">
							<div class="prof_pic"><img src="img/prof1.jpg"></div>
							<div class="comments_inner">
								<h1>Tohloria Lewis</h1>
								<p>I have been using this Anti Aging trial for 3 weeks now, and I seriously look 5 years younger! Not quite as good as this mom, but I will take it when it was less than 5 bucks for each! My crow's feet and laugh lines are melting away more and more every day. Thank you so much for reporting on this!</p>
								<ul>
									<li style="margin:0px;">Reply.</li>
									<li>13.</li>
									<li>Like.</li>
									<li class="min">12 minutes ago</li>
								</ul>
							</div>
						</div>

						<div class="fb_comments">
							<div class="prof_pic"><img src="img/prof2.jpg"></div>
							<div class="comments_inner">
								<h1>Tanya Porquez</h1>
								<p>I saw this combo on CNN a while ago and still using the combo. I've been using the products for about 6 wks (<?php echo $off->txt1; ?> & <?php echo $off->txt2; ?> came first, had to wait for EyeVibe Serum for an extra day). Honestly, this is unbelievable, all I have to say is WOW.</p>
								<ul>
									<li style="margin:0px;">Reply.</li>
									<li>6.</li>
									<li>Like.</li>
									<li class="min">13 minutes ago</li>
								</ul>
							</div>
						</div>

						<div class="fb_comments">
							<div class="prof_pic"><img src="img/prof3.jpg"></div>
							<div class="comments_inner">
								<h1>Jennifer Jackson Mercer</h1>
								<p>A friend of mine used and recommended it to me 3 weeks ago. I ordered the products and received them within 3 days (although I didn't get the discounted prices). The results have been incredible and I can't wait to see what weeks 3 and 4 bring.</p>
								<ul>
									<li style="margin:0px;">Reply.</li>
									<li>19.</li>
									<li>Like.</li>
									<li class="min">25 minutes ago</li>
								</ul>
							</div>
						</div>

						<div class="fb_comments">
							<div class="prof_pic"><img src="img/prof5.jpg"></div>
							<div class="comments_inner">
								<h1>Katy Barrott</h1>
								<p>Never even thought about combining the products. I am very much pleased after using this product.</p>
								<ul>
									<li style="margin:0px;">Reply.</li>
									<li>53.</li>
									<li>Like.</li>
									<li class="min">About an hour ago</li>
								</ul>
							</div>
						</div>

						<div class="fb_comments">
							<div class="prof_pic"><img src="img/prof6.jpg"></div>
							<div class="comments_inner">
								<h1>Amanda Gibson</h1>
								<p>I saw this on the news. How lucky is this mom to have found this opportunity!?!?! Thank you for sharing this tip! I just ordered both products.</p>
								<ul>
									<li style="margin:0px;">Reply.</li>
									<li>3.</li>
									<li>Like.</li>
									<li class="min">1 hour ago</li>
								</ul>
							</div>
						</div>

						<div class="fb_comments">
							<div class="prof_pic"><img src="img/prof7.jpg"></div>
							<div class="comments_inner">
								<h1>Julie Keyse</h1>
								<p>Probably I'm a bit older than most of you folks. but this combo worked for me too! LOL! I can't say anything more exciting.Thanks for your inspirations!</p>
								<ul>
									<li style="margin:0px;">Reply.</li>
									<li>2.</li>
									<li>Like.</li>
									<li class="min">2 hours ago</li>
								</ul>
							</div>
						</div>

						<div class="fb_comments">
							<div class="prof_pic"><img src="img/prof8.jpg"></div>
							<div class="comments_inner">
								<h1>Sarah Williams</h1>
								<p>My sister did this a few months ago, I waited to order my trials to see if it really worked and then they stopped giving out the trials! what a dumb move that turned out to be. glad to see the trials are back again, I wont make the same mistake.</p>
								<ul>
									<li style="margin:0px;">Reply.</li>
									<li>3.</li>
									<li>Like.</li>
									<li class="min">2 hours ago</li>
								</ul>
							</div>
						</div>

						<div class="fb_comments">
							<div class="prof_pic"><img src="img/prof9.jpg"></div>
							<div class="comments_inner">
								<h1>Kirsten Bauman Riley</h1>
								<p>I love the I'm going to give these products a chance to work their magic on me. I've tried everything out there and so far nothing has been good enough to help me.</p>
								<ul>
									<li style="margin:0px;">Reply.</li>
									<li>30.</li>
									<li>Like.</li>
									<li class="min">2 hours ago</li>
								</ul>
							</div>
						</div>

						<div class="fb_comments">
							<div class="prof_pic"><img src="img/prof10.jpg"></div>
							<div class="comments_inner">
								<h1>Celia Kilgard</h1>
								<p>worked for me! I worked just like I thought it would. It was easy enough and I just want others to know when something works.</p>
								<ul>
									<li style="margin:0px;">Reply.</li>
									<li>53.</li>
									<li>Like.</li>
									<li class="min">2 hours ago</li>
								</ul>
							</div>
						</div>

						<div class="fb_comments">
							<div class="prof_pic"><img src="img/prof11.jpg"></div>
							<div class="comments_inner">
								<h1>Alanna 'martin' Payne</h1>
								<p>Thanks for the info, just started mine.</p>
								<ul>
									<li style="margin:0px;">Reply.</li>
									<li>16.</li>
									<li>Like.</li>
									<li class="min">2 hours ago</li>
								</ul>
							</div>
						</div>

						<div class="fb_comments">
							<div class="prof_pic"><img src="img/prof12.jpg"></div>
							<div class="comments_inner">
								<h1>Alice Chang</h1>
								<p>Been so busy with the kids lately that never able to find deals like this. Clever idea whoever came up with it!</p>
								<ul>
									<li style="margin:0px;">Reply.</li>
									<li>2.</li>
									<li>Like.</li>
									<li class="min">2 hours ago</li>
								</ul>
							</div>
						</div>

						<div class="fb_comments">
							<div class="prof_pic"><img src="img/prof13.jpg"></div>
							<div class="comments_inner">
								<h1>Mark Fadlevich</h1>
								<p>Always impressed with the deals you guys dig up, got both trials. Can't wait to see what you've got lined up next week.</p>
								<ul>
									<li style="margin:0px;">Reply.</li>
									<li>11.</li>
									<li>Like.</li>
									<li class="min">2 hours ago</li>
								</ul>
							</div>
						</div>

						<div class="fb_comments">
							<div class="prof_pic"><img src="img/prof14.jpg"></div>
							<div class="comments_inner">
								<h1>Ashley O'Brien Berlin</h1>
								<p>My husband and I both need to lose weight because we are going to be seeing family we haven´t seen in 25 years. Already ordered it and we are both going to try this out, thanks. - The Higgins family</p>
								<ul>
									<li style="margin:0px;">Reply.</li>
									<li>33.</li>
									<li>Like.</li>
									<li class="min">2 hours ago</li>
								</ul>
							</div>
						</div>

						<div class="fb_comments">
							<div class="prof_pic"><img src="img/prof15.jpg"></div>
							<div class="comments_inner">
								<h1>Amanda Hickam</h1>
								<p>I just placed my order. I can't wait to get them!! Thanks, Aimee xoxoxo.</p>
								<ul>
									<li style="margin:0px;">Reply.</li>
									<li>23.</li>
									<li>Like.</li>
									<li class="min">3 hours ago</li>
								</ul>
							</div>
						</div>

						<div class="fb_comments">
							<div class="prof_pic"><img src="img/prof16.jpg"></div>
							<div class="comments_inner">
								<h1>Brittany Jackson</h1>
								<p>My mom just e-mailed me this, a friend at work had told her about it. i guess it works really well</p>
								<ul>
									<li style="margin:0px;">Reply.</li>
									<li>6.</li>
									<li>Like.</li>
									<li class="min">3 hours ago</li>
								</ul>
							</div>
						</div>

						<div class="fb_comments">
							<div class="prof_pic"><img src="img/prof17.jpg"></div>
							<div class="comments_inner">
								<h1>Shellie Wilson Hodge</h1>
								<p>Telling all my friends about this, thanx for the info</p>
								<ul>
									<li style="margin:0px;">Reply.</li>
									<li>2.</li>
									<li>Like.</li>
									<li class="min">3 hours ago</li>
								</ul>
							</div>
						</div>

						<div class="fb_comments">
							<div class="prof_pic"><img src="img/prof18.jpg"></div>
							<div class="comments_inner">
								<h1>Jill Phongsa</h1>
								<p>I was a bit skeptical when I first read about this but as I researched more and more I found out that is indeed what Rachael Ray and many scientists say it is. It´s one of the secret anti-aging products that nobody seems to want to share. I wouldn´t be surprised many celebrities know about this. I requested for the and the 1 month supply and I´m so excited! I cannot wait for them get here!</p>
								<ul>
									<li style="margin:0px;">Reply.</li>
									<li>13.</li>
									<li>Like.</li>
									<li class="min">4 hours ago</li>
								</ul>
							</div>
						</div>

						<div class="fb_comments">
							<div class="prof_pic"><img src="img/prof19.jpg"></div>
							<div class="comments_inner">
								<h1>Molly Murley Foster</h1>
								<p>I've gone ahead and placed an order. I can't wait to get started and see what happens.</p>
								<ul>
									<li style="margin:0px;">Reply.</li>
									<li>8.</li>
									<li>Like.</li>
									<li class="min">6 hours ago</li>
								</ul>
							</div>
						</div>

						<div class="fb_comments">
							<div class="prof_pic"><img src="img/prof20.jpg"></div>
							<div class="comments_inner">
								<h1>Jenna Ponchot Bush</h1>
								<p>As a realtor it's important to look and feel my best, unfortunately the housing market isn't doing that great so cash has been a little tight lately. Thanks for the info, looking forward to receiving my trials.</p>
								<ul>
									<li style="margin:0px;">Reply.</li>
									<li>20.</li>
									<li>Like.</li>
									<li class="min">8 hours ago</li>
								</ul>
							</div>
						</div>

						<div class="fb_comments">
							<div class="prof_pic"><img src="img/prof21.jpg"></div>
							<div class="comments_inner">
								<h1>Laura Kelch Miranda</h1>
								<p>I have tried so much of this kind of stuff, in one sense I want to try it but in the back of my mind I am thinking, yeah right!! Someone please reassure me it works.</p>
								<ul>
									<li style="margin:0px;">Reply.</li>
									<li>20.</li>
									<li>Like.</li>
									<li class="min">8 hours ago</li>
								</ul>
							</div>
						</div>

						<div class="fb_comments">
							<div class="prof_pic"><img src="img/prof22.jpg"></div>
							<div class="comments_inner">
								<h1>Sara Bergheger</h1>
								<p>This is an absolutely amazing breakthrough. I can´t thank the guys enough! 24 lbs in a month!</p>
								<ul>
									<li style="margin:0px;">Reply.</li>
									<li>13.</li>
									<li>Like.</li>
									<li class="min">10 hours ago</li>
								</ul>
							</div>
						</div>

						<div class="fb_comments">
							<div class="prof_pic"><img src="img/prof23.jpg"></div>
							<div class="comments_inner">
								<h1>Lauren Kirschenbaum Silver</h1>
								<p>For once I was able to do something nice for myself without feeling guilty about the cost.</p>
								<ul>
									<li style="margin:0px;">Reply.</li>
									<li>3.</li>
									<li>Like.</li>
									<li class="min">10 hours ago</li>
								</ul>
							</div>
						</div>
						<div class="fb_comments">
							<div class="prof_pic"><img src="img/prof24.jpg"></div>
							<div class="comments_inner">
								<h1>Gotmy Mindframe Right</h1>
								<p>Had no idea you could get results like this.</p>
								<ul>
									<li style="margin:0px;">Reply.</li>
									<li>5.</li>
									<li>Like.</li>
									<li class="min">19 hours ago</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				</div>
			</div>
		<div class="footer">
		</div>
		<script src="js/lib/jquery.js"></script>
		<script src="js/lib/jquery-sticky.min.js"></script>
		<script src="js/classes/Counter.js"></script>
		<script src="js/script.js"></script>
	</body>
</html>
