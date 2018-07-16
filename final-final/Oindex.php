<?php
	require_once('db.php');
	if(!empty($_POST)){
		$name = $_POST['name'];
		$email = $_POST['email'];
		$sub = $_POST['subject'];
//		$gender= $_POST['gender'];
		$mess =htmlentities($_POST['mess'],ENT_QUOTES);
		$insert="INSERT INTO u_con (id, name, email, subject, messege,) VALUES ('','$name','$email','$sub','$mess', )";
		if(mysqli_query($CON,$insert)){
			echo "";
		}else{
			echo"not Success";
		}
	}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title> bootstrap-4 template </title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="index.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
</head>

<body>

    <header id="full_nav">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <p>Bliss </p>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main_menu" aria-controls="main_menu" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="main_menu">
                    <ul class="navbar-nav ml-auto text-uppercase navbar_ul">
                        <li class="nav-item active">
                            <a class="nav-link ki" href="#full_banner">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#full_about">about_bliss</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#serv_full">steps</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#full_work">bliss_types</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#full_contact">order</a>
                        </li>

                    </ul>

                </div>
            </div>

        </nav>
    </header>
    <!-- end of menu -->
    <section id="full_banner">
        <div class="full_slick_slider">
            <div class="full_slide">
                <div class="container">
                    <div class="row">
                        <div class="col">
<!--
                            <div class="banner_content text-white text-center mt-5">
                                <h1>Bliss</h1>
                                <h2>Water Purification <span class="type"></span></h2>
                                
                            </div>
-->
                        </div>
                    </div>
                </div>
            </div>

<!--
            <div class="full_slide">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="banner_content text-white text-center mt-5">
                                <h1>Bliss</h1>
                                <h2>Water  Purification</h2>
                                <p>Orem ipsum dolor sit amet, consectetur </p>
                                <div><img src="images/c.png" alt=""></div>
                                <a href="#">Know more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="full_slide">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="banner_content text-white text-center mt-5">
                                <h1>Bliss</h1>
                                <h2>Water Purification</h2>
                                <p>Orem ipsum dolor sit amet, consectetur </p>
                                <div><img src="images/c.png" alt=""></div>
                                <a href="#">Know more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
-->

        </div>

    </section>
    <section id="full_about" class="sec_p">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <div class="sec_title">
                        <h2 class="text-uppercase">Why Coca Leaves?</h2>
                        <img src="images/shape.png" alt="">
                        <p class="px-0 px-md-5 mt-4 ">
                           The coca plant is native to the Andes region of South America and began being used in many natural forms of treatment. Many of its cultivators would chew the leaf of the plant for stimulation and endurance. Today, the coca leaf is most commonly found in countries like Peru and Bolivia, and used in the form of teas to alleviate common symptoms such as altitude sickness, gastrointestinal issues, joint pain and fatigue, only to name a few. We are proud to introduce Bliss Coca Water, made with a hint of pure coca leaves containing essential antioxidants, vitamins, and properties to help boost your energy!
                        </p>
                    </div>
                </div>
            </div>
            <div class="row mt-5 abt_slick">
                <div class="col-sm-3 text-center col_brdr">
                    <div class="abt_cont">
                        <div class="abtcont_img">
                            <a href="#">
                                <img src="images/light.png" alt="">
                            </a>
                        </div>

                        <div class="abt_detls">
                            <h4 class="mt-3">Title goes here</h4>
                            <p>
                                onsectetur adipisicing elit, sedo eiusmod tempor incidi et dolorerserss eerhfre mag.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 text-center col_brdr">
                    <div class="abt_cont">
                        <div class="abtcont_img">
                            <a href="#">
                                <img src="images/light.png" alt="">
                            </a>
                        </div>
                        <div class="abt_detls">
                            <h4 class="mt-3">Title goes here</h4>
                            <p>
                                onsectetur adipisicing elit, sedo eiusmod tempor incidi et dolorerserss eerhfre mag.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 text-center col_brdr">
                    <div class="abt_cont">
                        <div class="abtcont_img">
                            <a href="#">
                                <img src="images/light.png" alt="">
                            </a>
                        </div>
                        <div class="abt_detls">
                            <h4 class="mt-3">Title goes here</h4>
                            <p>
                                onsectetur adipisicing elit, sedo eiusmod tempor incidi et dolorerserss eerhfre mag.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 text-center col_brdr">
                    <div class="abt_cont">
                        <div class="abtcont_img">
                            <a href="#">
                                <img src="images/light.png" alt="">
                            </a>
                        </div>
                        <div class="abt_detls">
                            <h4 class="mt-3">Title goes here</h4>
                            <p>
                                onsectetur adipisicing elit, sedo eiusmod tempor incidi et dolorerserss eerhfre mag.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 text-center col_brdr">
                    <div class="abt_cont">
                        <div class="abtcont_img">
                            <a href="#">
                                <img src="images/light.png" alt="">
                            </a>
                        </div>
                        <div class="abt_detls">
                            <h4 class="mt-3">Title goes here</h4>
                            <p>
                                onsectetur adipisicing elit, sedo eiusmod tempor incidi et dolorerserss eerhfre mag.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end of section -->
    <section id="serv_full" class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 mr-auto">
                    <div class="row">
                        <div class="col">
                            <div class="sec_title">
                                <h2 class="text-uppercase">Why CBD?        </h2>
                                <img src="images/shape.png" alt="">
                                <p class="mt-4 ptag">
                                    CBD (cannabidol) has been proven to have extreme potential therapeutic benefits that have been downplayed for many years, such as  anti-seizure properties, pain relieving properties, anti-cancer properties, and diabetic neuropathy prevention properties (the leading cause of blindness in the US). Many cancer research groups are actively testing the effects of adding CBD into cancer chemotherapy regiments. 
									Biss CBD Water is infused with 100% pure nonpsychoactive CBD oil which carries many health factors benefiting cardiovascular health, arthritis, immune functions, depression, and chronic pain, only to name a few. Many over the counter medications containing acetaminophen and ibuprofen are known to be linked with acute or chronic liver problems and acid reflux. Imagine reaching into your medicine cabinet the next time you have a muscle pain after a long workout or a horrible migraine after a never ending day at work, instead of reaching for the more common pain killers, drink Bliss CBD Water for hydrating natural pain relief! 

                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col-sm-6">
                            <div class="abt_cont">
                                <div class="abtcont_img">
                                    <a href="#">
                                        <img src="images/light.png" alt="">
                                    </a>
                                </div>

                                <div class="abt_detls">
                                    <h4 class="mt-3">Title goes here</h4>
                                    <p>
                                        onsectetur adipisicing elit, sedo eiusmod tempor incidi et dolorerserss eerhfre mag.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="abt_cont">
                                <div class="abtcont_img">
                                    <a href="#">
                                        <img src="images/light.png" alt="">
                                    </a>
                                </div>
                                <div class="abt_detls">
                                    <h4 class="mt-3">Title goes here</h4>
                                    <p>
                                        onsectetur adipisicing elit, sedo eiusmod tempor incidi et dolorerserss eerhfre mag.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="abt_cont">
                                <div class="abtcont_img">
                                    <a href="#">
                                        <img src="images/light.png" alt="">
                                    </a>
                                </div>
                                <div class="abt_detls">
                                    <h4 class="mt-3">Title goes here</h4>
                                    <p>
                                        onsectetur adipisicing elit, sedo eiusmod tempor incidi et dolorerserss eerhfre mag.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="abt_cont">
                                <div class="abtcont_img">
                                    <a href="#">
                                        <img src="images/light.png" alt="">
                                    </a>
                                </div>
                                <div class="abt_detls">
                                    <h4 class="mt-3">Title goes here</h4>
                                    <p>
                                        onsectetur adipisicing elit, sedo eiusmod tempor incidi et dolorerserss eerhfre mag.
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
                <div class="col-sm-6">
                	<div class="srv-img">
                		<img src="images/essentia-2-682x1024.jpg" alt="">
                	</div>
                </div>
            </div>
        </div>
    </section>
    <!-- end of services -->
    <section id="full_work" class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <div class="sec_title">
                        <h2 class="text-uppercase">Bliss types</h2>
                        <img src="images/shape.png" alt="">
                        <p class="px-0 px-md-5 mt-4 ">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, <span>
                                quis nostrud exercitation ullamco
                            </span>laboris nisi ut aliquip ex ea commodo consequat duis aute irure dolor.
                        </p>
                    </div>
                </div>
            </div>

        </div>
        <div class="row ima mx-0">
            <div class="col-3 px-0">
                <img src="images/th.jpg" class="w-100" alt="">
            </div>
            <div class="col-3 px-0">
                <img src="images/th.jpg" class="w-100" alt="">
            </div>
            <div class="col-3 px-0">
                <img src="images/th.jpg" class="w-100" alt="">
            </div>
            <div class="col-3 px-0">
                <img src="images/th.jpg" class="w-100" alt="">
            </div>
            <div class="col-3 px-0">
                <img src="images/th.jpg" class="w-100" alt="">
            </div>
            <div class="col-3 px-0">
                <img src="images/th.jpg" class="w-100" alt="">
            </div>
            <div class="col-3 px-0">
                <img src="images/th.jpg" class="w-100" alt="">
            </div>
            <div class="col-3 px-0">
                <img src="images/th.jpg" class="w-100" alt="">
            </div>
        </div>
    </section>
<!--    countdown-->
   <section class="features-dwn">
     <div class="container ">
           <div class="row">
           
           	<div class="col-sm-3">
				<div class="dwnm-img">
					<img src="images/services7.png" alt="">
				</div>
				<div class="dwn-txt">
					<h2>10</h2>
					<p>YEARS IN MARKETING</p>
				</div>
					
				</div>
         
           	<div class="col-sm-3">
           		<div class="dwnm-img">
					<img src="images/services8.png" alt="">
				</div>
				<div class="dwn-txt">
					<h2>18</h2>
					<p>YEARS IN MARKETING</p>
				</div>
					
				</div>
           	
           	<div class="col-sm-3">
           		<div class="dwnm-img">
					<img src="images/services9.png" alt="">
				</div>
				<div class="dwn-txt">
					<h2>900+</h2>
					<p>YEARS IN MARKETING</p>
				</div>
					
			
           	</div>
           	<div class="col-sm-3">
           		<div class="dwnm-img">
					<img src="images/services10.png" alt="">
				</div>
				<div class="dwn-txt">
					<h2>22</h2>
					<p>YEARS IN MARKETING</p>
				</div>
					
				
           	
          
			</div>
	  </div>
	  </div>
	</section>

    <!-- end of full_work -->
    <section class="cont_title py-5">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <div class="sec_title">
                        <h2 class="text-uppercase">Order Now </h2>
                        <img src="images/shape.png" alt="">
                        <p class="px-0 px-md-5 mt-4 ">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, <span>
                                quis nostrud exercitation ullamco
                            </span>laboris nisi ut aliquip ex ea commodo consequat duis aute irure dolor.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!--    count down-->
     

<!--    count down-->
    <section id="full_contact" class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 m-auto">
                    <form action="order.php" method="post" class="main_form">
                        <div class="form-group">
                            
                            <input type="email" class="form-control col-sm-8 m-auto" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                            
                        </div>
                        <div class="form-group">
                            
                            <input type="password" class="form-control col-sm-8 m-auto" id="exampleInputPassword1" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="product code"></textarea>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">ORDER</button>
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>

    </section><!-- end of contact -->
    <footer id="full_copyright">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <p>
                        © BLISS
                    </p>
                </div>
            </div>
        </div>
    </footer>



    <script src="js/jquery-1.12.4.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/slick.min.js"></script>
<!--    <script src="js/typed.js"></script>-->
    <script src="js/main.js"></script>
    <script>
//        var typed = new Typed(".type", {
//            strings: ["library", "module"],
//            loop: true,
//            typeSpeed: 100,
//        });
    </script>
</body>

</html>