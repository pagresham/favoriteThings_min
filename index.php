<?PHP
session_start();

$loginMessage = "";
$username = "";

include "authentication.php";
include "header.php";
include "nav_bar.php";
// phpinfo();
?>

<div class="container">
  


  <div id="myCarousel" class="carousel slide" data-ride="carousel">

  <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="img/pinecreek-w960.jpg" alt="Pine Creek Colorado" id="img1">
      </div>

      <div class="item">
        <img src="img/sunset-w960.jpg" alt="Sunset" id="img2">
      </div>

      <div class="item">
        <img src="img/taylor-river-bike-w960.jpg" alt="River and Motorcycle">
      </div>

      <div class="item">
        <img src="img/whetstone-w960.jpg" alt="Whetstone Mountain">
      </div>

      <div class="item">
        <img src="img/moab-rockhouse-w960.jpg" alt="Moab Rock House">
      </div>

      <div class="item">
        <img src="img/auger-kids-w960.jpg" alt="Lake Kids">
      </div>
    </div>
    
    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

  <div class="row content-top-row">
      <div class="row">
        <div class="center col-md-2 top-img">
          <img src="img/fiddle-banjo-small.png" alt="Banjo Image" width="90">
        </div>
        <div class="trout-header col-md-8">
          <h3 class="center">Hi Friends!</h3>
          <p>Have a look around. Inside are some photos, music, maps, and links  relating to some of my favorite things. It's not all raindrops and roses... but there may be a few. If you're interested in the additional content, or just want to look around, create an account, log in, and enjoy!</p>
        </div>
        <div class="center col-md-2 top-img">
          <img src="img/trout2a.png" alt="Trout Image" width="90">
        </div>
      </div>
  </div>

</div>

<!-- Start body content Section -->

<section class="content">
  <div class="container">  
    
    <!-- Hidden Fiddle Content -->
    <div class="center hid-content">
      <div class="ind-fid-vid hid-content">
        <div class="clearfix"></div>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/rWWP0Nif5Z4" frameborder="0" allowfullscreen></iframe>
      </div>
    </div>
    <!-- Hidden Fishing Content -->
      <div class="center col-md-12 hid-content ind-fish-map">
        <div class="" id="ind-map">
          <div class="clearfix"></div>
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2553.858001577849!2d-106.67917228519782!3d38.01888487971571!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x873e2e61d2980061%3A0xfd7863792b71c336!2sStone+Cellar+Campground!5e1!3m2!1sen!2sus!4v1489434306230" width="600" height="450" style="border:0" allowfullscreen></iframe>
          <p class="center stone-info">Stone Cellar Campground, located in Saguache County, Colorado is a special place. The area's rugged charm is only rivaled by the quality of the trout fishing in the nearby streams.</p>
        </div>   
      </div>

      <!-- Hidden Family Content -->
      <div class="center col-md-12 hid-content">
        <div class="clearfix"></div>
        <div class="ind-fam-info center">
        </div>   
      </div>
    


    <div class="row content-bot-row">
      <div class="col-sm-12 col-md-4 pri center music">
        
        <div class="center ind-fiddle-desc">
          <h4>Fiddle Tunes</h4>
          <p>The ancient tradition of playing fiddle tunes is alive and well in America today. Click below to see some recent tunes!</p>
          <input class="btn btn-success" type="button" value="See More" id="ind-fid-show">
        </div>
      </div>
     
      <div class="col-sm-12 col-md-4 center fishing">
        <div class="center ind-fishing-desc">
          <h4>Fishing</h4>
          <p>Fresh Water or Salt, Fly or Spinner, it's almost always a great time.</p>
          <input class="btn btn-success" type="button" value="See More" id="ind-fish-show">
        </div>  
      </div>
     
      <div class="col-sm-12 col-md-4 center family">
        <div class="center ind-fam-desc">
          <h4>Family Fun</h4>
          <p>Family is one of the few things that sees you all the way through life. Make the most of you time!</p>
          <input class="btn btn-success" type="button" value="See More" id="ind-fam-show">
        </div>  
      </div>
      <!-- <div id="map"></div> -->
      
      <!-- <div class="col-md-4">
        
      </div> -->
    </div>
    
  </div>
</section>

<?PHP
include "footer.php";
?>