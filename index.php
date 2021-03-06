<!DOCTYPE html>
<html lang="en">
  <link rel="stylesheet" href="" />

  <head>
    <!-- jQuery library -->
    <?php include("cdn.php") ?>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css_folder/index.css" />
    <title>Document</title>
  </head>
  <body>
    <?php include("navbar.php") ?>
    <!-- ....................................Landing......................................... -->
  
    <div class="landing">
      <!-- <img src="img/landing.jpg" alt="" /> -->
      <div class="intro">
        <div class="intro_title">
          <h1>Introducing</h1>
          <h1>Deliciousness.</h1>
        </div>
        <div class="secondary_intro">
          <p>
            We're masters in the dark arts of molecular mixology and demons in
            the kitchen...
          </p>
        </div>
      </div>
    </div>
   
    <!-- .....................................About Us.............................................  -->
    <div class="about_us">
      <div class="aboutUs_heading">
        <h1>The Best Steak In Town</h1>
        <h2>founded in 1999.</h2>
        <p>
          Cras non dui id ex mattis vehicula. Nullam posuere ligula non libero
          mollis, non ornare sapien rutrum. Quisque vitae risus venenatis,
          dignissim felis id, vulputate nisl.
        </p>
        <button>View More</button>
      </div>
      <img id="img1" src="img/steak1.png" alt="" />
      <img id="img2" src="img/steak2.png" alt="" />
      <img id="img3" src="img/steak3.png" alt="" />
      
    </div>

    <!-- .........................................Categories............................................ -->

    <div class="categories">
      <div class="cat_intro">
        <h1>A Variety of Meat to Choose</h1>
        <p>
          Cras non dui id ex mattis vehicula. Nullam posuere ligula non libero
          mollis, non ornare sapien rutrum.
        </p>
      </div>
      <div class="cat cat1">
        <img src="img/cat1.png" alt="Chicken Dish" />
        <h1>CHICKEN</h1>
        <p>01.</p>
      </div>
      <div class="cat cat2">
        <img src="img/beef_steak.png" alt="Steak" />
        <h1>BEEF</h1>
        <p>02.</p>
      </div>
      <div class="cat cat3">
        <img src="img/sausage.png" alt="Sausage Plate" />
        <h1>SAUSAGE</h1>
        <p>03.</p>
      </div>
      <div class="cat cat4">
        <img src="img/barbecue.png" alt="Barbecue Plate" />
        <h1>BARBECUE</h1>
        <p>04.</p>
      </div>
      <div class="cat cat5">
        <img src="img/seafood.png" alt="Seafood Plate"/>
        <h1>SEAFOOD</h1>
        <p>05.</p>
      </div>
    </div>

    <!-- ................................................best_of_the_best........................ -->
    <div class="best_of_the_best">
      <div class="best_heading_container">
        <h1 class="best_heading">Best of the best</h1>
      </div>

      <div class="chef_recommend">
        <div class="chef_recommend_img">
          <img src="img/chef_recommend.png" alt="" />
        </div>
        <div class="chef_recommend_content">
          <p class="chef_recommend_content_header">Chef recommend</p>
          <h2>Lorem Inpusm</h2>
          <p class="chef_recommend_content_body">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam mi
            felis, auctor vitae vestibulum vel, consequat eu dolor. Nam
            pellentesque euismod laoreet.
          </p>
          <button>Read More</button>
        </div>
      </div>

      <div class="chef_recommend">
        <div class="chef_recommend_content">
          <p class="chef_recommend_content_header">Most Popular</p>
          <h2>Beef Wellington</h2>
          <p class="chef_recommend_content_body">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam mi
            felis, auctor vitae vestibulum vel, consequat eu dolor. Nam
            pellentesque euismod laoreet.
          </p>
          <button>Read More</button>
        </div>
        <div class="chef_recommend_img">
          <img src="img/most_popular.png" alt="" width="839" height="629" />
        </div>
      </div>
    </div>

    <!-- ...................................................Chef........................................... -->

    <div class="our_chef_main">
      <div class="our_chef_photo"><img src="img/about_chef.png" alt="" /></div>
      <div class="our_chef_content">
        <h1>Our Chefs</h1>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe
          quisquam molestias eos enim molestiae, amet, earum consequatur ipsa at
          aliquid iste nulla hic rem. Quibusdam voluptate blanditiis similique
          odio alias at ratione, sint voluptates
        </p>
        <button>Read More</button>
        <img src="img/chef1.jpg" alt="" />
      </div>
    </div>

    <!-- ............................................................gallery.......................................... -->
    <!-- ............................................................gallery.......................................... -->
    <div class="gallery_main">
      <div class="gallery_row1">
        <div class="gallery_headerImg_container">
          <img src="img/gallery1.png" alt="" />
        </div>
       
        <h1>Gallery</h1>
      </div>


      <div class="gallery_row2">
        <div class="gallery_col1">
          <div class="col1_img1_container">
            <img id="col1_img1" src="img/gallery2.jpg" alt="" />
          </div>
          <div class="col1_img2_container">
            <img id="col1_img2" src="img/gallery2.jpg" alt="" />
          </div>
        </div>


        <div class="gallery_col2">
          <div class="col2_img1_container">
            <img id="col2_img1" src="img/gallery42.jpg" alt="" />
          </div>
          <div id="col2_div1">
            <div class="col2_img2_container">
              <img id="col2_img2" src="img/gallery5.jpg" alt="" />
            </div>
            <div id="col2_div2">
              <div class="col2_img3_container">
                <img id="col2_img3" src="img/gallery6.jpg" alt="" />
              </div>
              <div class="col2_img4_container">
                <img id="col2_img4" src="img/gallery7.jpg" alt="" />
              </div>
              
            </div>
          </div>
        </div>
 
      </div>
    </div>

    <!-- .............................................................blog................................................ -->
    <div class="blog_main">
      <div class="blog_heading">
        <h2>Our blog</h2>
        <h1>Recent Event</h1>
      </div>
      <?php include("blog_carousel.php") ?>
    </div>

    <!-- ................................................................filler_content.............................. -->

  <div class="filler_container">
<div class="filler_main">
      <div class="filler1">
        <p>
          Lorem ipsum dolor sit amet consectetur, adipisicing elit. Cum quas
          accusantium quis ullam adipisci sapiente aperiam perferendis fuga
          minus rem
        </p>
        <div class="item_content_info">
          <p>by Chef John Doe</p>
          <p>December 20,2020</p>
        </div>
      </div>
      <div class="filler2">
        <p>
          Lorem ipsum dolor sit amet consectetur, adipisicing elit. Cum quas
          accusantium quis ullam adipisci sapiente aperiam perferendis fuga
          minus rem Lorem ipsum dolor sit amet consectetur Cum quas accusant consectetur Cum quas accusantium
        </p>
        <p>
          Lorem ipsum dolor sit amet consectetur, adipisicing elit. Cum quas
          accusantium quis ullam adipisci sapiente
        </p>
      </div>
</div>
</div>





    <!-- ..............................................video.................................... -->

    <video style="margin:100px 0px;" width="100%" height="auto" loop autoplay muted>
      <source src="img/Roast.mp4" type="video/mp4" />
    </video>

    <!-- ........................................filler................................ -->
    <div class="filler_container">
<div class="filler_main">
    <div class="filler2">
        <p>
          Lorem ipsum dolor sit amet consectetur, adipisicing elit. Cum quas
          accusantium quis ullam adipisci sapiente aperiam perferendis fuga
          minus rem Lorem ipsum dolor sit amet consectetur Cum quas accusant consectetur Cum quas accusantium
        </p>
        <p>
          Lorem ipsum dolor sit amet consectetur, adipisicing elit. Cum quas
          accusantium quis ullam adipisci sapiente
        </p>
      </div>
      <div class="filler1">
        <p>
          Lorem ipsum dolor sit amet consectetur, adipisicing elit. Cum quas
          accusantium quis ullam adipisci sapiente aperiam perferendis fuga
          minus rem
        </p>
        <div class="item_content_info">
          <p>by Chef John Doe</p>
          <p>December 20,2020</p>
        </div>
      </div>
      
</div>
</div>

    <?php include("footer.php") ?>
  </body>
</html>