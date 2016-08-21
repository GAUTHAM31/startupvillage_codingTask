<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en-US">
<!--<![endif]-->

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>CarHunt|Home</title>
	<meta name="description" content="">
	<meta name="keywords" content="" />
	<meta name="author" content="" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/bootstrap.min.css" />
	<link rel="stylesheet" href="css/animate.min.css">
	<link rel="stylesheet" href="css/flickity.min.css">
    <link rel="stylesheet" href="css/styles.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/normalize.css" />
    <link rel="stylesheet" type="text/css" href="css/compare/component.css"/>
    <link rel="stylesheet" type="text/css" href="css/styled.css"/>
    <link rel="stylesheet" type="text/css" href="css/nouislider.min.css"/>
    <link rel="stylesheet" type="text/css" href="css/vicons-font.css"/>
    <script src="js/nouislider.min.js"></script>
	<script src="js/modernizr.custom.js"></script>
    <script src="js/wNumb.js"></script>


</head>

<body style="background:#414A52">
	<div class="container-fluid">
		<div class="row">
			<div class="header-nav-wrapper">
				<div class="logo">
					<a href="#"><img src="img/logo.png"></a>
				</div>
				<div class="primary-nav-wrapper">
					<div class="secondary-nav-wrapper">
						<ul class="secondary-nav">
							<li class="search"><a href="#search" class="show-search"><i class="fa fa-search"></i></a></li>
						</ul>
					</div>
					<div class="search-wrapper">
						<ul class="search">
							<li>
								<input type="text" id="search-input" placeholder="Start typing then hit enter to search">
							</li>
							<li>
								<a href="#" class="hide-search"><i class="fa fa-close"></i></a>
							</li>
						</ul>
					</div>
				</div>
				
			</div>
		</div>
	</div>
	<header class="hero">
		<div class="carousel js-flickity">
			<div class="carousel-cell" style="background-image: url(img/hero-bg-01.jpg);">
				<div class="hero-bg">
					<div class="container-fluid">
						<div class="row" style="">
							<div class="col-md-12 ">
								<h1 class="wp1 text-center">Introducing The New Cruze</h1>
                                <center><a href="#" class="btn primary wp2">Learn more</a></center>
							</div>
						</div>
						
					</div>
				</div>
			</div>
			<div class="carousel-cell" style="background-image: url(img/hero-bg-02.jpg);">
				<div class="hero-bg">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<h1 class="wp1 left-top">Sports Car Legends</h1>
								<a href="#" class="btn primary wp2">Learn More</a>
							</div>
						</div>
						
					</div>
				</div>
			</div>
			<div class="carousel-cell" style="background-image: url(img/hero-bg-03.jpg);">
				<div class="hero-bg">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<h1 class="wp1">Landrover Series</h1>
								<a href="#" class="btn primary wp2">Learn More</a>
							</div>
						</div>
						
					</div>
				</div>
			</div>
		</div>
		<div class='mouse-container'>
			<a href="#selectcar">
				<div class='mouse'>
					<span class='scroll-down'></span>
				</div>
			</a>
		</div>
	</header>
    
    
 <div class="container-fluid details" id="selectcar">
     <section class="compare-section bg-1">
         
         <div class="pricing compare-inner">
         
         
         <!--Get Review-->
        <div class="pricing__item price1">
                <center><h2>Get Review</h2></center><br/><br/><br/>
                <div role="form" class="forms">
                    <h2 style="font-size:20px;">Select Type</h2><br/>
                        <div class="form-group">
                        <select class="form-control" name="first-choice3" id="first-choice3">
                            <option value="" selected="">Type</option>
                            <option value="hatchback">Hatchback</option>
                            <option value="sedan">Sedan</option>
                            <option value="suv">SUV</option>
                            <option value="muv">MUV</option>
                            <option value="coupe">Coupe</option>
                        </select>  
                      </div><br/>
                    <h2 style="font-size:20px;">Select Brand</h2><br/>
                        <div class="form-group">
                        <select class="form-control" name="second-choice3" id="second-choice3" onchange="get_data3()">
                            <option value="" selected="">Brand</option>
                            <option value="audi">AUDI</option>
                            <option value="bmw">BMW</option>
                            <option value="bentley">Bentley</option>
                            <option value="chevrolet">Chevrolet</option>
                            <option value="fiat">Fiat</option>
                            <option value="ford">Ford</option>
                            <option value="honda">Honda</option>
                            <option value="hyundai">Hyundai</option>
                            <option value="jaguar">Jaguar</option>
                            <option value="mahindra">Mahindra</option>
                            <option value="maruthi">Maruthi</option>
                            <option value="merc">Mercedes</option>
                            <option value="nissan">Nissan</option>
                            <option value="renault">Renault</option>
                            <option value="skoda">Skoda</option>
                            <option value="tata">TATA</option>
                            <option value="toyota">Toyota</option>
                            <option value="volkswagon">Volkswagon</option>
                            <option value="volvo">Volvo</option>
                        </select>  
                      </div><br/>
                        <div class="form-group">
                        <h2 style="font-size:20px;">Select Car</h2><br/>
                        <select class="form-control" id="third-choice3" name="third-choice3">
                            <option value="" selected="">Car Name</option>
                            
                        </select>  
                        </div><br/>
                    <center><button class="button button--shikoba button--round-l"><i class="button__icon icon icon-forward"></i><span>Go</span></button></center><br/>
                </div>
                
            </div>
         <!--Get Review ends-->
        
             <!--Find Cars-->
            <div class="pricing__item price1">
            <center><h2 style="font-size:2em;">Get Your Perfect Car</h2></center><br/>
                <h2 style="font-size:20px;">Select price Limit</h2><br/>
			
			<div id="slider-huge"></div><br/>
                <div class="row">
			<p class="col-xs-1 col-xs-offset-4">Rs</p><span class="col-xs-4 example-val" style="padding-top:5px;" id="huge-value"></span><br/>
                </div>
			<!--slider script-->
                  <script>
                    var bigValueSlider = document.getElementById('slider-huge'),
	                bigValueSpan = document.getElementById('huge-value');

                      noUiSlider.create(bigValueSlider, {
	                       start: 1,
	                       step: 1,
	                       format: wNumb({
                               decimals: 0
	                       }),
	                       range: {
                           min: 0,
		                   max: 14
	                       }
                        });
                </script>			
                <script>
                    // Note how these are 'string' values, not numbers.
                    var range = [
	                   '5,00,000','10,00,000','20,00,000',
	                   '30,00,000','40,00,000','50,00,000',
	                   '75,00,000','1,00,00,000','1,50,00,000',
	                   '2,00,00,000','2,50,00,000',
	                   '3,00,00,000','3,50,00,000',
	                   '4,00,00,000','10,00,00,000'
                    ];

                    bigValueSlider.noUiSlider.on('update', function ( values, handle ) {
	                bigValueSpan.innerHTML = range[values[handle]];
                        });
                </script>   
                
                <!--slider script ends-->
                
                <h2 style="font-size:20px;">Select Type</h2><br/>
                <select class="form-control" name="second-choice" id="brand-choice" onchange="get_data()">
                          <option value="" selected="">Type</option>
                            <option value="hatchback">Hatchback</option>
                            <option value="sedan">Sedan</option>
                            <option value="suv">SUV</option>
                            <option value="muv">MUV</option>
                            <option value="coupe">Coupe</option>  
                        </select><br/><br/>
                <h2 style="font-size:20px;">Select Brand</h2><br/>
                <select class="form-control" name="second-choice" id="brand-choice" onchange="get_data()">
                            <option value="" selected="">Brand</option>
                            <option value="audi">AUDI</option>
                            <option value="bmw">BMW</option>
                            <option value="bentley">Bentley</option>
                            <option value="chevrolet">Chevrolet</option>
                            <option value="fiat">Fiat</option>
                            <option value="ford">Ford</option>
                            <option value="honda">Honda</option>
                            <option value="hyundai">Hyundai</option>
                            <option value="jaguar">Jaguar</option>
                            <option value="mahindra">Mahindra</option>
                            <option value="maruthi">Maruthi</option>
                            <option value="merc">Mercedes</option>
                            <option value="nissan">Nissan</option>
                            <option value="renault">Renault</option>
                            <option value="skoda">Skoda</option>
                            <option value="tata">TATA</option>
                            <option value="toyota">Toyota</option>
                            <option value="volkswagon">Volkswagon</option>
                            <option value="volvo">Volvo</option>
                        </select><br/><br/>
                <div class="row">
                    <div class="col-xs-3 col-sm-3 col-md-3">
                        <label><input type="radio" name="daily" id="daily" value="daily" /><img src="img/rc1.png" class="img1"></label><center><p style="font-size:8px">Daily Travel</p></center>
                    </div>
                    <div class="col-xs-3 col-sm-3 col-md-3">
                        <label><input type="radio" name="weekend" id="weekend" value="weekend" /><img src="img/rc2.png" class="img2"></label>
                    </div>
                    <div class="col-xs-3 col-sm-3 col-md-3">
                        <label><input type="radio" name="high" id="high" value="high" /><img src="img/rc3.png" class="img3"></label>
                    </div>
                    <div class="col-xs-3 col-sm-3 col-md-3">
                        <label><input type="radio" name="utility" id="utility" value="weekend" /><img src="img/rc4.png" class="img4"></label>
                    </div>
                </div>
                <style>
                    label > input{ /* HIDE RADIO */
                    visibility: hidden; /* Makes input not-clickable */
                    position: absolute; /* Remove input from document flow */
                    }
                    label > input + img{ /* IMAGE STYLES */
                        cursor:pointer;
                        border:2px solid transparent;
                    }


                </style>
                <center><button class="button button--shikoba button--round-l"><i class="button__icon icon icon-search"></i><span>Search</span></button></center><br/>
            </div>
         <!--Find Cars ends-->
        
             
         <!--Find Dealer-->
             
        <div class="pricing__item price1 ">
            <center><h2 style="font-size:35px;">Find Your Dealer</h2></center><br/><br/><br/>
             <h2 style="font-size:20px;">Select Brand</h2><br/>
                        <div class="form-group">
                        <select class="form-control" name="second-choice4" id="second-choice4" onchange="get_data4()">
                            <option value="" selected="">Brand</option>
                            <option value="audi">AUDI</option>
                            <option value="bmw">BMW</option>
                            <option value="bentley">Bentley</option>
                            <option value="chevrolet">Chevrolet</option>
                            <option value="fiat">Fiat</option>
                            <option value="ford">Ford</option>
                            <option value="honda">Honda</option>
                            <option value="hyundai">Hyundai</option>
                            <option value="jaguar">Jaguar</option>
                            <option value="mahindra">Mahindra</option>
                            <option value="maruthi">Maruthi</option>
                            <option value="merc">Mercedes</option>
                            <option value="nissan">Nissan</option>
                            <option value="renault">Renault</option>
                            <option value="skoda">Skoda</option>
                            <option value="tata">TATA</option>
                            <option value="toyota">Toyota</option>
                            <option value="volkswagon">Volkswagon</option>
                            <option value="volvo">Volvo</option>
                        </select>  
                      </div><br/>
             <h2 style="font-size:20px;">Select State</h2><br/>
                        <div class="form-group">
                        <select class="form-control" name="second-choice5" id="second-choice5" onchange="get_data5()">
                            <option value="all" selected="">All State</option>
                        </select>  
                      </div><br/>
             <h2 style="font-size:20px;">Select Location</h2><br/>
                        <div class="form-group">
                        <select class="form-control" name="second-choice3" id="second-choice3" onchange="get_data3()">
                            <option value="" selected="">Location</option>
                        </select>  
                      </div><br/>
            <center><button class="button button--shikoba button--round-l"><i class="button__icon icon icon-search"></i><span>Search</span></button></center><br/>
            
        </div>
         <!--Find Dealer ends-->
         </div>
     </section>
</div>
    
    
    
		<hr class="half-rule" style="width: 100px;margin: 40px auto;">
    
    
    <!-- Working Properly -->
    
     <div class="container-fluid">
       <form action="resultpage.php" method="post"> 
        <section class="compare-section bg-1">
            <h2 class="compare-section__title">Compare</h2><br/><br/><br/><br/><br/><br/>
            <div class="pricing compare-inner">
                
               <div class="pricing__item animate wp2">
                <span class="big">+</span><br/>
                    <div role="form" class="forms">
                        <div class="form-group">
                        <select class="form-control" name="first-choice" id="first-choice">
                            <option value="" selected="">Type</option>
                            <option value="hatchback">Hatchback</option>
                            <option value="sedan">Sedan</option>
                            <option value="suv">SUV</option>
                            <option value="muv">MUV</option>
                            <option value="coupe">Coupe</option>
                        </select>  
                      </div>
                      <br/>
                        <div class="form-group">
                        <select class="form-control" name="second-choice" id="second-choice" onchange="get_data()">
                            <option value="" selected="">Brand</option>
                            <option value="audi">AUDI</option>
                            <option value="bmw">BMW</option>
                            <option value="bentley">Bentley</option>
                            <option value="chevrolet">Chevrolet</option>
                            <option value="fiat">Fiat</option>
                            <option value="ford">Ford</option>
                            <option value="honda">Honda</option>
                            <option value="hyundai">Hyundai</option>
                            <option value="jaguar">Jaguar</option>
                            <option value="mahindra">Mahindra</option>
                            <option value="maruthi">Maruthi</option>
                            <option value="merc">Mercedes</option>
                            <option value="nissan">Nissan</option>
                            <option value="renault">Renault</option>
                            <option value="skoda">Skoda</option>
                            <option value="tata">TATA</option>
                            <option value="toyota">Toyota</option>
                            <option value="volkswagon">Volkswagon</option>
                            <option value="volvo">Volvo</option>
                        </select>  
                      </div>
                      <br/>
                        <div class="form-group">
                        <select class="form-control" id="third-choice" name="third-choice">
                            <option value="" selected="">Car Name</option>
                            
                        </select>  
                        </div>
                </div>
                </div>
                <div class="pricing__item wp2">
                <span class="big">+</span><br/>
                    <div role="form" class="forms">
                        <div class="form-group">
                        <select class="form-control" id="first-choice2" name="first-choice2">
                            <option value="" selected="">Type</option>
                            <option value="hatchback">Hatchback</option>
                            <option value="sedan">Sedan</option>
                            <option value="suv">SUV</option>
                            <option value="muv">MUV</option>
                            <option value="coupe">Coupe</option>
                        </select>  
                      </div>
                      <br/>
                        <div class="form-group">
                        <select class="form-control" name="second-choice2" id="second-choice2" onchange="get_data2()" >
                            <option value="" selected="">Brand</option>
                            <option value="audi">AUDI</option>
                            <option value="bmw">BMW</option>
                            <option value="bentley">Bentley</option>
                            <option value="chevrolet">Chevrolet</option>
                            <option value="fiat">Fiat</option>
                            <option value="ford">Ford</option>
                            <option value="honda">Honda</option>
                            <option value="hyundai">Hyundai</option>
                            <option value="jaguar">Jaguar</option>
                            <option value="mahindra">Mahindra</option>
                            <option value="maruthi">Maruthi</option>
                            <option value="merc">Mercedes</option>
                            <option value="nissan">Nissan</option>
                            <option value="renault">Renault</option>
                            <option value="skoda">Skoda</option>
                            <option value="tata">TATA</option>
                            <option value="toyota">Toyota</option>
                            <option value="volkswagon">Volkswagon</option>
                            <option value="volvo">Volvo</option>
                        </select>  
                      </div>
                      <br/>
                        <div class="form-group">
                        <select class="form-control" name="third-choice2" id="third-choice2">
                            <option value="" selected="">Car Name</option>
                           
                        </select>  
                        </div>
                </div>
                </div>
            
                </div>
            <button class="btn-pri button--round-l wp2" type="submit" id="submit" name="submit" disabled="true" style="vertical-align:middle"><span>Compare </span></button>
        </section>
       </form> 
    </div>
    
    <hr class="half-rule" style="width: 100px;margin: 40px auto;">
    
    
	<!-- SECTION: Footer -->
	<footer class=bs-docs-footer>
        <div class=container>
            <ul class=bs-docs-footer-links>
                <li><a href='#'>GitHub</a></li>
                <li><a href='#'>Twitter</a></li>
                <li><a href='#'>Facebook</a></li>
                <li><a href='#' >About</a></li> 
            </ul>
        </div>
    </footer>>
	<!-- END SECTION: Footer -->
	<!-- JS CDNs -->
	<script src="js/jquery.min.js"></script>
	<script src="js/jquery-ui.min.js"></script>
	<script src="js/video.min.js"></script>
	<!-- jQuery local fallback -->
	<script>
	window.jQuery || document.write('<script src="js/min/jquery-1.11.2.min.js"><\/script>')
	</script>
	<!-- JS Locals -->
    <script src="js/min/bootstrap.min.js"></script>
	<script src="js/min/modernizr-2.8.3-respond-1.4.2.min.js"></script>
	<script src="js/min/jquery.waypoints.min.js"></script>
	<script src="js/min/flickity.pkgd.min.js"></script>
	<script src="js/min/scripts-min.js"></script>

<!--Ajax scripts for populating the car models dropdown lists
get_data() populates the first box and get_data2() populates the second box -->	
	<script type="text/javascript">


	function get_data()
	{
		var xhttp = new XMLHttpRequest();
		xhttp.onreadystatechange = function(){
			if(xhttp.readyState == 4 && xhttp.status == 200)
			{
				document.getElementById("third-choice").innerHTML = xhttp.responseText;
			}
		};
		xhttp.open("GET", "getter.php?second-choice="+document.getElementById("second-choice").value+"&first-choice="+document.getElementById("first-choice").value, true);
		xhttp.send();


	}
</script>


<script type="text/javascript">


	function get_data2()
	{
		var xhttp = new XMLHttpRequest();
		xhttp.onreadystatechange = function(){
			if(xhttp.readyState == 4 && xhttp.status == 200)
			{
				document.getElementById("third-choice2").innerHTML = xhttp.responseText;
			}
		};
		xhttp.open("GET", "getter.php?second-choice="+document.getElementById("second-choice2").value+"&first-choice="+document.getElementById("first-choice2").value, true);
		xhttp.send();

		if ((document.getElementById('second-choice2').value!="")&&(document.getElementById('second-choice').value!="")&&(document.getElementById('first-choice').value!="")&&(document.getElementById('first-choice2').value!=""))
			 document.getElementById("submit").disabled=false;
		else
			document.getElementById("submit").disabled=true;
	}
</script>
    <!--Ajax scripts for populating the car models dropdown lists on get review section-->
    <script type="text/javascript">


	function get_data3()
	{
		var xhttp = new XMLHttpRequest();
		xhttp.onreadystatechange = function(){
			if(xhttp.readyState == 4 && xhttp.status == 200)
			{
				document.getElementById("third-choice3").innerHTML = xhttp.responseText;
			}
		};
		xhttp.open("GET", "getter.php?second-choice="+document.getElementById("second-choice3").value+"&first-choice="+document.getElementById("first-choice3").value, true);
		xhttp.send();


	}
</script>
   
   
<script>
    $(".img1").click(function(){
    if( $(this).attr('src') == "img/rc1.png" ) {
        $(".img1").attr('src', "img/cr1.png"); 
    }
    $(".img2").click(function(){
        $(".img1").attr('src',"img/rc1.png");
    })
    $(".img3").click(function(){
        $(".img1").attr('src',"img/rc1.png");
    })
    $(".img4").click(function(){
        $(".img1").attr('src',"img/rc1.png");
    })
})</script>
<script>
    $(".img2").click(function(){
    if( $(this).attr('src') == "img/rc2.png" ) {
        $(".img2").attr('src', "img/cr2.png"); // Make them all red
    }
    $(".img1").click(function(){
        $(".img2").attr('src',"img/rc2.png");
    })
    $(".img3").click(function(){
        $(".img2").attr('src',"img/rc2.png");
    })
    $(".img4").click(function(){
        $(".img2").attr('src',"img/rc2.png");
    })
})</script>
<script>
    $(".img3").click(function(){
    if( $(this).attr('src') == "img/rc3.png" ) {
        $(".img3").attr('src', "img/cr3.png"); // Make them all red
    }
    $(".img1").click(function(){
        $(".img3").attr('src',"img/rc3.png");
    })
    $(".img2").click(function(){
        $(".img3").attr('src',"img/rc3.png");
    })
    $(".img4").click(function(){
        $(".img3").attr('src',"img/rc3.png");
    })
})</script>
<script>
    $(".img4").click(function(){
    if( $(this).attr('src') == "img/rc4.png" ) {
        $(".img4").attr('src', "img/cr4.png"); // Make them all red
    }
    $(".img1").click(function(){
        $(".img4").attr('src',"img/rc4.png");
    })
    $(".img2").click(function(){
        $(".img4").attr('src',"img/rc4.png");
    })
    $(".img3").click(function(){
        $(".img4").attr('src',"img/rc4.png");
    })
})</script>
</body>

</html>