<?php
error_reporting(0);
include('header.php');

if(!isset($_SESSION["loggedin"])){

  echo("<script>location.href = 'index.php';</script>");
  exit;
}
require_once "config.php";

if(isset($_GET['id'])) {
   $id=$_GET["id"];
  $sql = "Delete FROM courses WHERE id=$id";
  $result = mysqli_query($link,$sql);
}
?>

    <style>
      .spacer{
        height:0px !important;
      }
    </style>
  <!--==========================
    Intro Section
  ============================-->
  <section id="intro">
    <div class="intro-container">
      <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">

        <ol class="carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <div class="carousel-item active">
            <div class="carousel-background"><img src="img/intro-carousel/1.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>Welcome To In Our Material</h2>
                <p>Students Material Of Computer Science Department &nbsp; Faculty Of Science Cairo University</p>
                <a href="#services" class="btn-get-started scrollto">Get Started</a>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="carousel-background"><img src="img/intro-carousel/2.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>Download Your Material</h2>
                <p>In this website you can download your material of your subjects</p>
                <a href="#services" class="btn-get-started scrollto">Get Started</a>
              </div>
            </div>
          </div>

            <div class="carousel-item">
            <div class="carousel-background"><img src="img/intro-carousel/4.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>Tips for studying</h2>
                <p>In this website you can find tips to help you study well</p>
                <a href="#testimonials" class="btn-get-started scrollto">Get Started</a>
              </div>
            </div>
          </div> 
            
            
          <div class="carousel-item">
            <div class="carousel-background"><img src="img/intro-carousel/3.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>Visit Educational Channels</h2>
                <p> In this website you can visit educational channels to understand your difficult subjects</p>
                <a href="#intro" class="btn-get-started scrollto">Get Started</a>
              </div>
            </div>
          </div>

         

          <div class="carousel-item">
            <div class="carousel-background"><img src="img/intro-carousel/5.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>Eductional Websites </h2>
                <p>In this website you can visit an Eductional Websites that helps you to understand your subjects online</p>
                <a href="#intro" class="btn-get-started scrollto">Get Started</a>
              </div>
            </div>
          </div>

        </div>

        <a class="carousel-control-prev" href="#introCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon ion-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>

        <a class="carousel-control-next" href="#introCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon ion-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>

      </div>
    </div>
  </section><!-- #intro -->

  <main id="main">

     <!--==========================
      Clients Section
    ============================-->
    <section id="testimonials" class="section-bg wow fadeInUp"   >
      <div class="container">

        <header class="section-header">
          <h3>Study&nbsp; Tips</h3>
        </header>

        <div class="owl-carousel testimonials-carousel">

          <div class="testimonial-item">
            
            <h3> Use a Scent</h3>

            <p>
              <img src="img/quote-sign-left.png" class="quote-sign-left" alt="">
              Put a little bit of perfume, cologne, essential oil, body spray, body mist, or scented lotion on while you’re studying, and then put on the same scent when you’re going to take the quiz or exam. The scent will trigger the memory that you stored in your brain when you were studying. Try a scent that you don’t have a lot of association with already. Calming scents like lavender may help you relax, as well as recall information.
              <img src="img/quote-sign-right.png" class="quote-sign-right" alt="">
            </p>
          </div>

          <div class="testimonial-item">
          
            <h3> Flavored Gum</h3>
            
            <p>
              <img src="img/quote-sign-left.png" class="quote-sign-left" alt="">
             Chewing a flavored gum is another great trigger for your brain. The flavor and texture of the gum may help you retrieve information from your brain. For best results, try a flavor that you’re unfamiliar with.
              <img src="img/quote-sign-right.png" class="quote-sign-right" alt="">
            </p>
          </div>

          <div class="testimonial-item">
            
            <h3> Make Studying Fun</h3>
         
            <p>
              <img src="img/quote-sign-left.png" class="quote-sign-left" alt="">
             If you need a little motivation to read books or lengthy passages, try the candy trail method. Place a bite-sized piece of candy, such as M&Ms, Reese’s Pieces, Skittles, Junior Mints, or gummy bears, beside every paragraph on the page. Once you finish reading each paragraph, reward yourself by eating that piece of candy. Positive reinforcement is a great way to motivate you and help you learn. If you don’t have a sweet tooth or prefer to stay away from sugar, choose something else bite-sized that you enjoy, like pretzels, dried fruit, nuts, or crackers.
              <img src="img/quote-sign-right.png" class="quote-sign-right" alt="">
            </p>
          </div>

          <div class="testimonial-item">
            
            <h3> Keep Your Notes Clean </h3>
           
            <p>
              <img src="img/quote-sign-left.png" class="quote-sign-left" alt="">
              It's hard to focus if your notes are messy and covered in scribbled out words. Rewrite your notes to keep them neat or type them out to make sure you can actually understand what you're reading. 

              <img src="img/quote-sign-right.png" class="quote-sign-right" alt="">
            </p>
          </div>

          <div class="testimonial-item">
           
            <h3> Color Code Your Notes</h3>
           
            <p>
              <img src="img/quote-sign-left.png" class="quote-sign-left" alt="">
              Try taking notes and doing homework assignments with colored pens, markers, and highlighters. The colorful notes could improve your visual memory and allow you to access information from your brain during an exam more efficiently. Plus, having organized, color-coded notes makes reading through them so much easier!
              <img src="img/quote-sign-right.png" class="quote-sign-right" alt="">
            </p>
          </div>
            
            <div class="testimonial-item">
           
            <h3> Teach A Friend</h3>
           
            <p>
              <img src="img/quote-sign-left.png" class="quote-sign-left" alt="">
              What happens if you have difficulty finding a way to explain your answers or put your thoughts into words? This can be difficult, even if you're familiar with the material. Lecture to a friend, as this allows you to train and prepare your mind to explain complex topics. It's especially useful if your final consists of a speech or presentation. 
              <img src="img/quote-sign-right.png" class="quote-sign-right" alt="">
            </p>
          </div>
            
            <div class="testimonial-item">
           
            <h3>Listen to Recorded Lectures</h3>
           
            <p>
              <img src="img/quote-sign-left.png" class="quote-sign-left" alt="">
             Listening to recorded lectures is helpful, especially if you're reviewing the notes you took along with it. This is a great way to refresh some topics you may have studied months ago and forgotten about. 
              <img src="img/quote-sign-right.png" class="quote-sign-right" alt="">
            </p>
          </div>
            
            <div class="testimonial-item">
           
            <h3> Study Old Exams</h3>
           
            <p>
              <img src="img/quote-sign-left.png" class="quote-sign-left" alt="">
             Save your old tests if possible - they're great for studying! You can either retake old tests to review the material or just focus on the questions you previously got wrong. 
              <img src="img/quote-sign-right.png" class="quote-sign-right" alt="">
            </p>
          </div>
            
            <div class="testimonial-item">
           
            <h3> Keep Things Familiar</h3>
           
            <p>
              <img src="img/quote-sign-left.png" class="quote-sign-left" alt="">
              If you know where your finals will be held and you're able to study there, do it. Taking a test in a familiar environment will make it easier and less stressful to take your exam and will help you recall the information you've studied. If you aren't completely sure where the test will be or can't access it for studying, find an environment that will be similar to the test day.
              <img src="img/quote-sign-right.png" class="quote-sign-right" alt="">
            </p>
          </div>

        </div>

      </div>
    </section><!-- #testimonials -->


    

    <!--==========================
      Services Section
    ============================-->
    <section id="services" style="background-image: url(img/s.png)">
      <div class="container">

        <header class="section-header wow fadeInUp">
          <h3>Level 1</h3>
          <p> If you want to review a subject from the first level, you can go to Level 1 </p>
         <a class="cta-btn" href="https://gt6uxar3hyfgvnvrapxl6g-on.drv.tw/css/level1.html" target="_blank">Level 1</a>
        </header>



      </div>
    </section><!-- #services -->

    <?php
$levels = "SELECT * FROM levels";
$result = mysqli_query($link,$levels);
while($level = $result->fetch_array()){
$level_id=$level['id'];
  $courses = "SELECT * FROM courses where level_id=$level_id";
  $res_courses = mysqli_query($link,$courses);
  $count = mysqli_num_rows($res_courses);
if($count>0){
  ?>

<section id="level<?php echo $level_id;?>"  class="section-bg" >
      <div class="container">
      <header class="section-header">
          <h3 class="section-title"><?php echo $level['name'] ?></h3>
        </header>
        <div class="row portfolio-container">

<?php
while($course = $res_courses->fetch_array()){
?>
          <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp">
            <div class="portfolio-wrap">
              <figure>
                <img src="img/<?php echo $course['image'] ?>" class="img-fluid" alt="">
               
              </figure>

              <div class="portfolio-info">
              <a class="item-link" href="single.php?id=<?php echo $course['id'] ?>"><?php echo $course['name'] ?></a>
                 
                <?php if($_SESSION["type"]==1){ ?> <a href="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>?id=<?php echo $course['id'] ?>" class="deleteitem" onclick="return confirm('Are you sure?')"> <i class="fa fa-close"></i> Delete </a> <?php } ?>
               
            </div>
          </div>

      </div>  

<?php
}
}

?>
        </div>
      </div>
</section>

<?php
}
?>

      
   

   
  </main>

  
  

<?php
include('footer.php')
?>
