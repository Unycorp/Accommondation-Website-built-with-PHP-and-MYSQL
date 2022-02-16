<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from wahabali.com/work/castle/index.html by HTTrack Website Copier/3.x [XR&CO'2017], Sun, 15 Mar 2020 10:00:54 GMT -->
<head>
<?php include 'csslibraries.php'  ?>
</head>
<body>


<!--Loader-->
<div class="loader">
  <div class="span">
    <div class="location_indicator"></div>
  </div>
</div>
 <!--Loader-->               
                
<?php include "header.php" ?>

<div class="container">
	<div class="row">
		<div class="col-sm-6">
		<div class="row">
		<div id="partner-slider" class="owl-carousel">
        <div class="item" style="width: 100%; height: 50vh; margin-top: 50px">
          <img src="castle/images/latest1.jpg" alt="Featured Partner" style="width: 100%; height: 100%;">
        </div>
        <div class="item">
          <img src="castle/images/latest1.jpg" alt="Featured Partner">
        </div>
        <div class="item">
          <img src="castle/images/latest1.jpg" alt="Featured Partner">
        </div>

      </div>
  	</div>
  	<br><br>
    <div class="row">
      <div id="partner-slider2" class="owl-carousel">
        <div class="item">
          <img src="castle/images/logo1.png" alt="Featured Partner">
        </div>
        <div class="item">
          <img src="castle/images/logo2.png" alt="Featured Partner">
        </div>
        <div class="item">
          <img src="castle/images/logo3.png" alt="Featured Partner">
        </div>
        <div class="item">
          <img src="castle/images/logo4.png" alt="Featured Partner">
        </div>
        <div class="item">
          <img src="castle/images/logo5.png" alt="Featured Partner">
        </div>
        <div class="item">
          <img src="castle/images/logo1.png" alt="Featured Partner">
        </div>
        <div class="item">
          <img src="castle/images/logo2.png" alt="Featured Partner">
        </div>
        <div class="item">
          <img src="castle/images/logo3.png" alt="Featured Partner">
        </div>
        <div class="item">
          <img src="castle/images/logo4.png" alt="Featured Partner">
        </div>
        <div class="item">
          <img src="castle/images/logo5.png" alt="Featured Partner">
        </div>
      </div>
 </div>
</div>
		<div class="col-sm-3"></div>
		<div class="col-sm-3"></div>
	</div>
</div>


<?php include 'jslibraries.php' ?>
<script>
  // Partners(logos)
  $("#partner-slider").owlCarousel({
    autoPlay: false,
    loop: true,
    stopOnHover: true,
    navigation: true,
    navigationText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
    items: 1,
    itemsDesktop: [1199, 3],
    itemsDesktopSmall: [979, 3]
  });

  // Partners(logos)
  $("#partner-slider2").owlCarousel({
    autoPlay: false,
    loop: true,
    stopOnHover: true,
    navigation: true,
    navigationText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
    items: 3,
    itemsDesktop: [1199, 3],
    itemsDesktopSmall: [979, 3]
  });

</script>

</body>
</html>