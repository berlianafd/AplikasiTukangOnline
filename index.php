<html>
<head>
  <title>2Kang For Life| Beranda</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta charset="utf-8">
  <meta name="keywords" content="Fast Service a Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
  Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
  <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">
  <link href="css/fontawesome-all.min.css" rel="stylesheet" type="text/css" media="all">
  <link href="css/easy-responsive-tabs.css" rel='stylesheet' type='text/css'/>
  <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="all">
  <link rel="stylesheet" type="text/css" href="css/style_common.css" />
  <link rel="stylesheet" type="text/css" href="css/style1.css" />
  <link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
  <link href="//fonts.googleapis.com/css?family=Roboto:400,500,700,900" rel="stylesheet">
  <link href="//fonts.googleapis.com/css?family=Open+Sans:400,600,700,800" rel="stylesheet">
</head>
<body>
  <header>
   <!-- header -->
   <?php
   include"navbar.php";
   ?>
   <!-- //header -->

   <!-- banner -->
   <!-- banner-slider -->
   <div class="w3l_banner_info">
    <div class="slider">
     <div class="callbacks_container">
      <ul class="rslides" id="slider3">
       <li>
        <div class="slider-img">
         <div class="slider_banner_info">
           <div class="text">
            <h3 class="word wisteria">We Are The Best Home Service For Making Your Home Shine</h3>
          </div>
        </div>
      </div>
    </li>
    <li>
      <div class="slider-img-2">
       <div class="slider_banner_info">
        <div class="text">
          <h3 class="word wisteria">Making your Home Shine and Spotless Is Our Business And Priority</h3>
        </div>

      </div>
    </div>
  </li>
  <li>
    <div class="slider-img-3">
     <div class="slider_banner_info">
      <div class="text">
        <h3 class="word wisteria">Our Home Service Providers will Make You Proud in Society</h3>
      </div>
    </div>
  </div>
</li>
</ul>
</div>
</div>
</div>
<!-- //banner-slider -->
</header>

<section class="pricinglist ">
  <div class="pricinglist ">
    <div class="w3_mg">
      <h2 class="mb-lg-5 mb-md-4 mb-sm-3 mb-2">Mekanikal Elektrikal</h2>
    </div>

    <?php
    include 'inc/koneksi.php';
    $query = mysqli_query($koneksi,"SELECT * FROM kategori_tukang WHERE id_grup='G1'");   
    while ($kategori_tukang = mysqli_fetch_array($query)) {
      ?>
      <div class="container-fluid">
        <div class="priceing-table-main">
          <div class="price-grid">
           <div class="price-block agile">
            <div class="price-gd-top pric-clr1">
              <h4><?php echo $kategori_tukang['nama_kategori'];?></h4>
              <img class="card-img-top" src="./<?php echo $kategori_tukang['gambar'];?>" width="100" heigt="100" alt="Card image cap">
            </div>
            <div class="price-selet pric-sclr1">                 
              <a href="deskripsi.php?id=<?php echo$kategori_tukang['id_kategori'];?>">Baca selengkapnya</a>
            </div>
          </div>
        </div>
        <?php
      }
      ?>    
    </div>
  </div>
</div>
<div class="clearfix"> </div>
</section>

<section class="pricinglist ">
  <div class="pricinglist ">
    <div class="w3_mg">
      <h4 class="mb-lg-5 mb-md-4 mb-sm-3 mb-2">Bangunan</h4>
    </div>

    <?php
    include 'inc/koneksi.php';
    $query = mysqli_query($koneksi,"SELECT * FROM kategori_tukang WHERE id_grup='G2'");   
    while ($kategori_tukang = mysqli_fetch_array($query)) {
      ?>
      <div class="container">
        <div class="priceing-table-main">
          <div class="price-grid">
           <div class="price-block agile">
            <div class="price-gd-top pric-clr2">
              <h4><?php echo $kategori_tukang['nama_kategori'];?></h4>
              <img class="card-img-top" src="./<?php echo $kategori_tukang['gambar'];?>" alt="Card image cap">
            </div>
            <div class="price-selet pric-sclr2">                 
              <a href="deskripsi.php?id=<?php echo$kategori_tukang['id_kategori'];?>">Baca selengkapnya</a>
            </div>
          </div>
        </div>
        <?php
      }
      ?>    
    </div>
  </div>
</div>
<div class="clearfix"> </div>
</section>

<section class="pricinglist ">
  <div class="pricinglist ">
    <div class="w3_mg">
      <h4 class="mb-lg-5 mb-md-4 mb-sm-3 mb-2">Interior</h4>
    </div>

    <?php
    include 'inc/koneksi.php';
    $query = mysqli_query($koneksi,"SELECT * FROM kategori_tukang WHERE id_grup='G3'");   
    while ($kategori_tukang = mysqli_fetch_array($query)) {
      ?>
      <div class="container">
        <div class="priceing-table-main">
          <div class="price-grid">
           <div class="price-block agile">
            <div class="price-gd-top pric-clr3">
              <h4><?php echo $kategori_tukang['nama_kategori'];?></h4>
              <img class="card-img-top" src="./<?php echo $kategori_tukang['gambar'];?>" alt="Card image cap">
            </div>
            <div class="price-selet pric-sclr3">                 
              <a href="deskripsi.php?id=<?php echo$kategori_tukang['id_kategori'];?>">Baca selengkapnya</a>
            </div>
          </div>
        </div>
        <?php
      }
      ?>    
    </div>
  </div>
</div>
<div class="clearfix"> </div>
</section>

<section class="pricinglist ">
  <div class="pricinglist ">
    <div class="w3_mg">
      <h4 class="mb-lg-5 mb-md-4 mb-sm-3 mb-2">Landscape</h4>
    </div>

    <?php
    include 'inc/koneksi.php';
    $query = mysqli_query($koneksi,"SELECT * FROM kategori_tukang WHERE id_grup='G4'");   
    while ($kategori_tukang = mysqli_fetch_array($query)) {
      ?>
      <div class="container">
        <div class="priceing-table-main">
          <div class="price-grid">
           <div class="price-block agile">
            <div class="price-gd-top pric-clr1">
              <h4><?php echo $kategori_tukang['nama_kategori'];?></h4>
              <img class="card-img-top" src="./<?php echo $kategori_tukang['gambar'];?>" alt="Card image cap">
            </div>
            <div class="price-selet pric-sclr1">                 
              <a href="deskripsi.php?id=<?php echo$kategori_tukang['id_kategori'];?>">Baca selengkapnya</a>
            </div>
          </div>
        </div>
        <?php
      }
      ?>    
    </div>
  </div>
</div>
<div class="clearfix"> </div>
</section>

<?php
include "footerend.php";
?>

<script  src="js/jquery.min.v3.js"></script>
<script  src="js/bootstrap.min.js"></script>
<script  src="js/move-top.js"></script>
<script  src="js/easing.js"></script>
<script  src="js/SmoothScroll.min.js"></script>	

<!-- banner Slider -->
<script src="js/responsiveslides.min.js"></script>
<script>
		// You can also use "$(window).load(function() {"
		$(function () {
			// Slideshow 4
			$("#slider3").responsiveSlides({
				auto: true,
				pager: true,
				nav: false,
				speed: 500,
				namespace: "callbacks",
				before: function () {
					$('.events').append("<li>before event fired.</li>");
				},
				after: function () {
					$('.events').append("<li>after event fired.</li>");
				}
			});

		});
	</script>
	<!-- //banner Slider -->


	<script src="js/easy-responsive-tabs.js"></script>
  <script>
    $(document).ready(function () {
      $('#horizontalTab').easyResponsiveTabs({
type: 'default', //Types: default, vertical, accordion           
width: 'auto', //auto or any width like 600px
fit: true,   // 100% fit in a container
closed: 'accordion', // Start closed if in accordion view
activate: function(event) { // Callback function if tab is switched
  var $tab = $(this);
  var $info = $('#tabInfo');
  var $name = $('span', $info);
  $name.text($tab.text());
  $info.show();
}
});
      $('#verticalTab').easyResponsiveTabs({
        type: 'vertical',
        width: 'auto',
        fit: true
      });
    });
  </script>
  <!--//tabs-->
  <!--team-->
  <script type="text/javascript">
   $(window).load(function() {
    $("#flexiselDemo1").flexisel({
     visibleItems:4,
     animationSpeed: 1000,
     autoPlay: true,
     autoPlaySpeed: 3000,    		
     pauseOnHover: true,
     enableResponsiveBreakpoints: true,
     responsiveBreakpoints: { 
      portrait: { 
       changePoint:480,
       visibleItems: 1
     }, 
     landscape: { 
       changePoint:640,
       visibleItems:2
     },
     tablet: { 
       changePoint:768,
       visibleItems: 3
     }
   }
 });

  });
</script>
<script type="text/javascript" src="js/jquery.flexisel.js"></script>

<!--team-->
<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
<script>
  $(document).ready(function() {
    $('.popup-with-zoom-anim').magnificPopup({
     type: 'inline',
     fixedContentPos: false,
     fixedBgPos: true,
     overflowY: 'auto',
     closeBtnInside: true,
     preloader: false,
     midClick: true,
     removalDelay: 300,
     mainClass: 'my-mfp-zoom-in'
   });

  });
</script>
<script type="text/javascript">
  var words = document.getElementsByClassName('word');
  var wordArray = [];
  var currentWord = 0;

  words[currentWord].style.opacity = 1;
  for (var i = 0; i < words.length; i++) {
    splitLetters(words[i]);
  }

  function changeWord() {
    var cw = wordArray[currentWord];
    var nw = currentWord == words.length-1 ? wordArray[0] : wordArray[currentWord+1];
    for (var i = 0; i < cw.length; i++) {
      animateLetterOut(cw, i);
    }

    for (var i = 0; i < nw.length; i++) {
      nw[i].className = 'letter behind';
      nw[0].parentElement.style.opacity = 1;
      animateLetterIn(nw, i);
    }

    currentWord = (currentWord == wordArray.length-1) ? 0 : currentWord+1;
  }

  function animateLetterOut(cw, i) {
    setTimeout(function() {
      cw[i].className = 'letter out';
    }, i*80);
  }

  function animateLetterIn(nw, i) {
    setTimeout(function() {
      nw[i].className = 'letter in';
    }, 340+(i*80));
  }

  function splitLetters(word) {
    var content = word.innerHTML;
    word.innerHTML = '';
    var letters = [];
    for (var i = 0; i < content.length; i++) {
      var letter = document.createElement('span');
      letter.className = 'letter';
      letter.innerHTML = content.charAt(i);
      word.appendChild(letter);
      letters.push(letter);
    }

    wordArray.push(letters);
  }

  changeWord();
  setInterval(changeWord, 4000);

</script> 

<script type="text/javascript">
 var slideIndex = 1;
 showSlides(slideIndex);

 function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1} 
    if (n < 1) {slideIndex = slides.length}
      for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none"; 
      }
      for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
      }
      slides[slideIndex-1].style.display = "block"; 
      dots[slideIndex-1].className += " active";
    }	
  </script>
  <!-- start-smoth-scrolling -->
  <!-- here stars scrolling icon -->
  <script type="text/javascript">
    $(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
       */

       $().UItoTop({ easingType: 'easeOutQuart' });

     });
   </script>
   <!-- //here ends scrolling icon -->
   <!-- scrolling script -->
   <script type="text/javascript">
     jQuery(document).ready(function($) {
      $(".scroll").click(function(event){		
       event.preventDefault();
       $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
     });
    });
  </script> 
  <script type="text/javascript">
   $(function () {
    $('[data-toggle="popover"]').popover()
  })
</script> 
<!-- //scrolling script -->
<!--//start-smoth-scrolling -->
</body>
</html>