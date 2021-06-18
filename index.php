<?php include 'dbconnection/index_connection.php'; ?>
<!DOCTYPE HTML>
<html>
<head>
<title>GPRISM</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Cruise Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<!-- fonts -->
<link href="//fonts.googleapis.com/css?family=Cinzel:400,700,900" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900" rel="stylesheet">
<!-- /fonts -->
<!-- css -->
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/gallery.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/jQuery.lightninBox.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/aos.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- /css -->
<!-- js -->
<script src="js/modernizr.min.js"></script>
<!-- /js -->
</head>
<body>
<!-- topbar -->
<div class="topbar-w3ls">
	<div class="container" style="margin-top: 2%">
		<a href="index.php" class="logo" style="padding: 0">
			<!-- <h1> -->
				<!-- <i aria-hidden="true"> -->
					<img style="width: 15%">
				<!-- </i> -->
				<h1 style="font-size: 24px;margin-top: 4%">Geographical Information System for Local Body (GISLB)</h1>
				<!-- <i class="fa fa-ship" aria-hidden="true"></i>	 -->
			<!-- </h1> -->
		</a>		
		<div class="top-agileits">
			<div class="top-w3l1">
				<!-- <span class="glyphicon glyphicon-phone-alt"></span> 	
				<p class="agile1">+1 515 151515</p>
				<p class="agile2">+1 010 101010</p> -->
				<!-- <img src="img/logonew.png" style="width: 100%"> -->
			</div>		
			<div class="top-w3l2">
				<span class="glyphicon glyphicon-map-marker"></span>
				<p class="agileits1">Updated on :</p> 
				<p class="agileits2">30-September-2020</p>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>	
</div>
<!-- /topbar -->
<!-- navigation -->
<div class="navbar-wrapper">
    <div class="container">
		<nav class="navbar navbar-inverse navbar-static-top">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>
				<div id="navbar" class="navbar-collapse collapse">
					<ul class="nav navbar-nav cl-effect-7">
						<li class="active"><a href="index.php" class="page-scroll">Home</a></li>
						<li><a href="#about" class="page-scroll">About</a></li>
						<li><a href="#service" class="page-scroll">Services</a></li>
						<li><a href="#gallery" class="page-scroll">Gallery</a></li>
						<!-- <li><a href="#team" class="page-scroll">Team</a></li> -->
						<li><a href="#contact" class="page-scroll">Contact</a></li>
					</ul>
				</div>
			</div>
        </nav>
	</div>
</div>
<!-- /navigation -->
<!-- banner -->
<style type="text/css">
	select
	{
    color: #000;
    width: 31%;
    height: 40px;
    border-radius: 8px;
    text-align: center;
    font-family: bold;
    font-size: 17px;
    background-color: #e6f0ef87;
	}
</style>
<section class="banner-w3ls">
		<div id="block" data-vide-bg="video/cruise" data-vide-options="position: 0% 50%">
			<div class="overlay">
				<h2> </h2>
				<h3>Step Into The Next</h3>
				<p>
					<select style="color: #000" id="dist">
						<option>--Select District--</option>
<?php
 $query=pg_query("SELECT *  FROM  district order by id");
	while($row=pg_fetch_array($query))
		{
			 $dist_name = $row['dist_name_mal'];
			 $id = $row['id'];
			 ?>
			 	<option value="<?php echo $id?>"><?php echo $dist_name?></option>
			 <?php
		}
?>

					</select>
					<select style="color: #000" id="type">
						<option>--Select Type--</option>
<?php
$query=pg_query("SELECT *  FROM  placetype order by id");
	while($row=pg_fetch_array($query))
		{
			 $type = $row['type'];
			 $id = $row['id'];
			 ?>
			 	<option value="<?php echo $id?>"><?php echo $type?></option>
			 <?php
		}
?>						
						
					</select>
					<select style="color: #000" id="panchayat">
						<option value="0">--Select--</option>
						<!-- <option>Kanakkary</option>
						<option>Puthupally</option> -->
						
					</select>
					<!-- <select style="color: #000" id="municipality">
						<option>--Select--</option>
						<option>Thodupuzha</option>
					</select> -->
					<!-- <a href="main.php"> -->
						<input type="button" name="" value="GO" id="btngo" style="color: #000;border-radius: 8px;font-family: bold;background-color: #e6f0ef87">
					<!-- </a> -->
				</p>		
			</div>
		</div>	
</section>
<!-- /banner -->
<!-- about -->
<section class="about-wthree" id="about">
	<div class="container">
		<div class="col-lg-6 col-md-6 col-sm-12" data-aos="flip-right">
			<h3 class="text-center" style="font-family: sans-serif;">About GIS</h3>
			<p class="text-center" style="color: #000;font-weight: 500;text-align: justify;font-size: 12px;">ഇത് ഒരു ഭൗമ (GIS) അടിസ്ഥാന വെബ് ഇന്‍ഫര്‍മേഷന്‍ സോഫ്റ്റ് വെയറാണ്.പഞ്ചായത്ത് പരിധിയിലെ ഓരോ കഡസ്ട്രല്‍ പ്ലോട്ടിലും കാണുന്ന വസ്തുക്കളെ (Objects)ജിയോ റഫറന്‍സ് (Lat Long Value) ചെയ്തു കൊണ്ടാണ് ഈ മാപ്പിംഗ് നടത്തിയിരിക്കുന്നത്. പഞ്ചായത്തിലെ കെട്ടിട നമ്പറുകളെ  ആസ്പദമാക്കി ഓരോ വ്യക്തിയുടെയും വിണ്‍വരങ്ങളും രേഖപ്പെടുത്തിയ സമഗ്ര ഭൗമാടിസ്ഥാന ബെബ് ആപ്ലിക്കേഷനാണ് ഇത്. വിവരങ്ങള്‍ സൂക്ഷിക്കാനും വിശകലനം ചെയ്യാനും, ആവശ്യപ്പെടുന്ന പ്രകാരം ലഭ്യമാണ്‍കാനും ഉതകുന്ന തരത്തിലാണ് ഈ സോഫ്റ്റ് വെയര്‍ രൂപകല്പന ചെയ്തിരിക്കുന്നത്. GIS അധിഷ്ഠിത വിവരസങ്കേതം ഉപയോഗിച്ച് മികച്ച ആസൂത്രണം, മാനേജ്മെന്‍റ്, നിര്‍വ്വഹണം, ഏകോപനം, മോണിറ്ററിംഗ് തുടങ്ങിവ പഞ്ചായത്തുകള്‍ക്ക് കൃത്യമായി നടപ്പിലാക്കാന്‍ ഈ സോഫ്റ്റവെയറിലൂടെ  കഴിയും.

            </p>
		</div>
		<div class="col-lg-6 col-md-6 col-sm-12" data-aos="flip-left">
			<ul class="grid cs-style-1">
				<li>
					<figure>
						<img src="img/GIPlogin.png" alt="img01" class="img-responsive">
						<!-- <figcaption>
							<a href="img/GIPlogin.png" class="lightninBox" data-lb-group="1">View More</a>
						</figcaption> -->
					</figure>
				</li>
			</ul>
		</div>
		<div class="clearfix"></div>
	</div>
</section>
<!-- /about -->
<!-- divider -->
<section class="divider-wthree">
	<div class="container">
		<h3 class="text-center" data-aos="zoom-in">Grameena Patana Kendram</h3>
		<p class="text-center" data-aos="zoom-in">Community University by the people, for the people, of the people.</p>
	</div>
</section>
<!-- /divider -->
<!-- services -->
<section class="service-agileinfo" id="service">
	<div class="container">
		<h3 class="text-center" data-aos="zoom-in">GPK Services</h3>
		<div class="col-lg-3 col-md-3 col-sm-6" data-aos="flip-down">
			<img src="img/service/geo.jpg" alt="" class="img-responsive" >
			<h4 class="text-center" style="font-weight: 500;">Geo Informatic Panchayat Project</h4>
			<p class="text-center" style="color: #000;text-align: justify;font-family: sans-serif;">This is a GIS based web information software.This project has been carried out for more than 30 local bodies including Block Panchayats, Municipalities and Grama Panchayats in various districts of Kerala.</p>
		</div>
		<div class="col-lg-3 col-md-3 col-sm-6" data-aos="flip-down">
			<img src="img/service/road.jpg" alt="" class="img-responsive">
			<h4 class="text-center">Road Connectivity Map</h4>
			<p class="text-center" style="color: #000;text-align: justify;font-family: sans-serif;">Road connectivity mapping is the process of referencing all the roads including national highways, major district roads, village roads, footlanes etc. into the cadastral map.This project could be completed in more than 10 panchayats.</p>
		</div>
		<div class="col-lg-3 col-md-3 col-sm-6" data-aos="flip-down">
			<img src="img/service/sand.jpg" alt="" class="img-responsive">
			<h4 class="text-center">River Bank Mapping & Sand Auditing</h4>
			<p class="text-center" style="color: #000;text-align: justify;font-family: sans-serif;">This project envisages in understanding the present status of the river, condition of both banks, biomass of the area, sand sediment in the basin, conveyance capacity of the river etc. and preparing reports and maps of the same. </p>
		</div>
		<div class="col-lg-3 col-md-3 col-sm-6" data-aos="flip-down">
			<img src="img/service/water.jpg" alt="" class="img-responsive">
			<h4 class="text-center">Watershed Based Master Plan Preparation</h4>
			<p class="text-center" style="color: #000;text-align: justify;font-family: sans-serif;">As an accredited agency of the government of Kerala, GPK is providing technical, institutional and faculty support to Local Self Government Institutions (LSGI) in Kerala in a time bound participatory preparation of Watershed based Development Master Plan.</p>
		</div>
		<div class="clearfix"></div>
	</div>
</section>
<!-- /services -->
<!-- gallery -->
<section class="gallery-info" id="gallery">
	<div class="container">
		<h3 class="text-center" data-aos="zoom-in">GPK Gallery</h3>
		<ul class="clearfix demo">
			<li data-aos="flip-down"><img src="img/ourgallery/image.jpg" alt="" class="img-responsive"/></li>
			<li data-aos="flip-down"><img src="img/ourgallery/image1.jpg" alt="" class="img-responsive"/></li>
			<li data-aos="flip-down"><img src="img/ourgallery/image2.jpg" alt="" class="img-responsive"/></li>
			<li data-aos="flip-down"><img src="img/ourgallery/image3.jpg" alt="" class="img-responsive"/></li>
			
		</ul>
    </div>
</section>
<!-- /gallery -->
<!-- team -->
<!-- <section class="team-w3" id="team">
	<div class="container">
		<h3 class="text-center">Meet Our Team</h3>
		<div class="col-lg-3 col-md-3 col-sm-6 team-w3l1" data-aos="flip-right">
			<img src="images/team-img1.jpg" alt="" class="img-responsive">
			<h4>Johnny Blaze</h4>
			<ul class="social-icons1">
				<li><a href="#"><i class="fa fa-facebook"></i></a></li>
				<li><a href="#"><i class="fa fa-twitter"></i></a></li>
				<li><a href="#"><i class="fa fa-youtube"></i></a></li>
				<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
			</ul>
		</div>
		<div class="col-lg-3 col-md-3 col-sm-6 team-w3l1" data-aos="flip-left">
			<img src="images/team-img2.jpg" alt="" class="img-responsive">
			<h4>Elizabeth</h4>
			<ul class="social-icons1">
				<li><a href="#"><i class="fa fa-facebook"></i></a></li>
				<li><a href="#"><i class="fa fa-twitter"></i></a></li>
				<li><a href="#"><i class="fa fa-youtube"></i></a></li>
				<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
			</ul>
		</div>
		<div class="col-lg-3 col-md-3 col-sm-6 team-w3l2" data-aos="flip-right">
			<img src="images/team-img3.jpg" alt="img06" class="img-responsive">
			<h4>Max Payne</h4>
			<ul class="social-icons1">
				<li><a href="#"><i class="fa fa-facebook"></i></a></li>
				<li><a href="#"><i class="fa fa-twitter"></i></a></li>
				<li><a href="#"><i class="fa fa-youtube"></i></a></li>
				<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
			</ul>
		</div>
		<div class="col-lg-3 col-md-3 col-sm-6 team-w3l2" data-aos="flip-left">
			<img src="images/team-img4.jpg" alt="img06" class="img-responsive">
			<h4>Diana</h4>
			<ul class="social-icons1">
				<li><a href="#"><i class="fa fa-facebook"></i></a></li>
				<li><a href="#"><i class="fa fa-twitter"></i></a></li>
				<li><a href="#"><i class="fa fa-youtube"></i></a></li>
				<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
			</ul>
		</div>
		<div class="clearfix"></div>	
	</div>
</section> -->
<!-- /team -->
<!-- map -->
<!-- <section class="map-w3" data-aos="zoom-in">
	<iframe class="googlemaps" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d380510.6741687111!2d-88.01234121699822!3d41.83390417061058!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1455598377120" style="border:0" allowfullscreen></iframe>
</section> -->
<!-- /map -->
<!-- contact -->
<section class="contact-w3-agileits" id="contact">
	<div class="container">
		<h3 class="text-center" data-aos="zoom-in">Get In Touch</h3>
		<div class="col-lg-4 col-md-4 contact-w3l1" data-aos="flip-right">
			<h4>Subscribe to our newsletter</h4>
			<div class="subscribe">
				<form action="#" method="post">
					<div class="form-group1">
						<input class="form-control" id="email1" name="email1" placeholder="Enter Your Email Address" type="email" required>
					</div>
					<div class="form-group2">
						<button class="btn btn-outline btn-lg" type="submit">Subscribe</button>
					</div>
					<div class="clearfix"></div>
				</form>
			</div>	
		</div>
		<div class="col-lg-8 col-md-8 contact-w3l2" data-aos="flip-left">
			<form action="#" method="post">
				<div class="form-group col-md-4 col-sm-4">
					<input type="text" class="form-control" id="name" name="name" placeholder="Your Name" required/>
				</div>
				<div class="form-group col-md-4 col-sm-4">
					<input type="email" class="form-control" id="email2" name="email2" placeholder="Your Email" required/>
				</div>
				<div class="form-group col-md-4 col-sm-4">
					<input type="tel" class="form-control" id="phone" name="phone" placeholder="Your Phone" required/>
				</div>
				<div class="clearfix"></div>
				<div class="form-group col-md-12">
					<textarea class="form-control" rows="6" name="message" placeholder="Your Message" required></textarea>
				</div>
				<div class="form-group col-md-12">
					<button type="submit" class="btn-outline2"><i class="fa fa-check-circle-o" aria-hidden="true"></i> Submit</button>
				</div>
				<div class="clearfix"></div>
			</form>	
		</div>
		<div class="clearfix"></div>
	</div>
</section>
<!-- /contact -->
<!-- footer -->
<section class="footer-w3-agileits">
	<div class="container">
		<div class="col-lg-8 col-md-8">
			<ul class="w3-agile">
				<li><a href="index.php" class="page-scroll">Home</a></li>
				<li><a href="#about" class="page-scroll">About</a></li>
				<li><a href="#service" class="page-scroll">Services</a></li>
				<li><a href="#gallery" class="page-scroll">Gallery</a></li>
				<li><a href="#team" class="page-scroll">Team</a></li>
				<li><a href="#contact" class="page-scroll">Contact</a></li>
			</ul>
		</div>
		<div class="col-lg-4 col-md-4">
			<ul class="social-icons2">
				<li><a href="#"><i class="fa fa-facebook"></i></a></li>
				<li><a href="#"><i class="fa fa-twitter"></i></a></li>
				<li><a href="#"><i class="fa fa-youtube"></i></a></li>
				<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
			</ul>	
		</div>
		<div class="clearfix"></div>
		<p class="text-center">&copy; 2020 GPK. All Rights Reserved | Design by <a href="#"> # </a></p>
	</div>
</section>
<!-- /footer -->
<!-- back to top -->
<a href="#0" class="cd-top">Top</a>
<!-- /back to top -->
<!-- js files -->
<!-- js files -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/smoothscroll.js"></script>
<script src="js/jquery.easing.min.js"></script>
<script src="js/grayscale.js"></script>
<script src='js/aos.js'></script>
<script src="js/index.js"></script>
<!-- js for back to top -->
<script src="js/top.js"></script>
<!-- /js for back to top -->
<!-- js for about lightbox -->
<script src="js/jQuery.lightninBox.js"></script>
<script type="text/javascript">
	$(".lightninBox").lightninBox();
</script>
<!-- /js for about lightbox -->
<!-- js for gallery -->
<script src="js/jquery.picEyes.js"></script>
<script>
$(function(){
	//picturesEyes($('li'));
	$('ul.demo li').picEyes();
});
</script>
<!-- /js for gallery -->
<!-- js for banner -->
<script src="js/jquery.vide.js"></script>
<!-- /js for banner -->
<!-- /js files -->
<script type="text/javascript">
	$(document).ready(function()
	{
		$("#type").change(function()
		{
			var dist = $("#dist").val();
			var type = $("#type").val();
			$("#panchayat").html("<option>---Select---</option>");
		    $.getJSON( "get_pachayat.php?dist="+dist+"&type="+type, function( data ) {
        		var len=data.length;
		        for(var i=0;i<len;i++)
		        {
		                var place=data[i].places;
		                var id=data[i].id;
		                $('#panchayat').append("<option value="+id+">"+place+"</option>");
		        }
		    });	
		});
		$("#dist").change(function()
		{
			var dist = $("#dist").val();
			var type = $("#type").val();
			$("#panchayat").html("<option>---Select---</option>");
		    $.getJSON( "get_pachayat.php?dist="+dist+"&type="+type, function( data ) {
        		var len=data.length;
		        for(var i=0;i<len;i++)
		        {
		                var place=data[i].places;
		                var id=data[i].id;
		                $('#panchayat').append("<option value="+id+">"+place+"</option>");
		        }
		    });	

		});


		$("#btngo").click(function()
		{
			var panchayatid  = $("#panchayat").val();
			// var type  = $("#type").val();
			// var place = $("#panchayat").val();
			// alert(placetype);
			if(panchayatid==27)
			{
				$(location).attr('href', 'cherunniyoor/main.php');
			}
			if(panchayatid==24)
			{
				$(location).attr('href', 'kanakkary/main.php');
			}
			if(panchayatid==28)
			{
				$(location).attr('href', 'nedumangadu/main.php');
			}
			if(panchayatid==23)
			{
				$(location).attr('href', 'puthupally/main.php');
			}
			if(panchayatid==26)
			{
				$(location).attr('href', 'porur/index.php');
			}
			if(panchayatid==17)
			{
				$(location).attr('href', 'chennampallipuram/main.php');
			}
			if(panchayatid==22)
			{
				$(location).attr('href', 'haripad/main.php');
			}
			// $(location).attr('href', 'main.php?dist='+dist+'&type='+type+'&place='+place);
			// $(location).attr('href', 'main.php');
		})
	});
</script>
</body>
</html>