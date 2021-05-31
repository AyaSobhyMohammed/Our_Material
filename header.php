<?php
if(!isset($_SESSION)) 
{ 
    session_start(); 
} 
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Our Material</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="Students Material Of Computer Science Department | Faculty Of Science Cairo University" name="description">

  <!-- Favicons -->
  <link href="img/b.jpg" rel="icon">
  <link href="img/b.jpg" rel="b">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">

  <!-- =======================================================
    Theme Name: OurMaterial
    Theme URL: https://bootstrapmade.com/bizpage-bootstrap-business-template/
    Author: Aya
    
  ======================================================= -->
</head>

<body>

  <!--==========================
    Header
  ============================-->

  <header id="header">
    <div class="search">
    <form action="search.php" method="GET">
    <div class="input-group">
    <input type="text" class="form-control" name="q" placeholder="Search" <?php if(isset($_GET["q"])){ ?> value="<?php echo $_GET["q"] ?>" <?php } ?> >
    <div class="input-group-append">
      <button class="btn btn-secondary" style="background: #C73FAE;" type="submit">
        <i class="fa fa-search"></i>
      </button>
    </div>
  </div>
    </form>
    </div>
    <?php if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){?>
   <span style=" padding-left: 68%; color: white; font-size: 16px; font-family: 'Montserrat';"> <?php echo  "Welcome " . $_SESSION["username"];  ?> </span>


<?php if($_SESSION["type"] == 0){ ?>
   <a href="mycourses.php" style="color: white; background-color: #C73FAE; padding: 10px 20px; margin-left: 12px; border-top-right-radius: 16px;
    border-bottom-left-radius: 15px; ">My Courses </a>
<?php } ?>

    <a href="logout.php" style="color: white; background-color: #C73FAE; padding: 10px 20px; margin-left: 12px; border-top-right-radius: 16px;
    border-bottom-left-radius: 15px; " > log out </a>
    <?php } ?>
    <div class="container-fluid">

      <div id="logo" class="pull-left">

        <h1><a href="#intro" class="scrollto">Our Material</a></h1>



          
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="#intro"><img src="img/logo.png" alt="" title="" /></a>-->
      </div>


              

      <nav id="nav-menu-container">

        <ul class="nav-menu">
                     

          <li class="menu-active"><a href="home.php#intro">Home</a></li>
          <li><a href="#testimonials">Tips</a></li>
            <li class="menu-has-children"><a href="">Level</a>
            <ul>
              <li><a href="#services" target="_blank">Level 1</a></li>     
              <li><a href="#level2">Level 2</a></li> 
             <li><a href="#level3">Level 3</a></li> 
             <li><a href="#level4">Level 4</a></li> 

            </ul>

          
          <li class="menu-has-children"><a href="">Websites for free books</a>
            <ul>
              <li><a href="https://www.freetechbooks.com/" target="_blank">FreeTechBooks</a></li>     
              <li><a href="https://freecomputerbooks.com/" target="_blank">Free Computer Books</a></li>  
              <li><a href="https://ebook-dl.xyz/" target="_blank">ebook library</a></li>
              <li><a href="https://www.free-ebooks.net/" target="_blank">Free eBooks</a></li>
              <li><a href="https://open.umn.edu/opentextbooks/" target="_blank">Open Textbook Library</a></li>
              <li><a href="https://www.pdfdrive.com/" target="_blank">pdf drive</a></li>
              <li><a href="https://scholarworks.gvsu.edu/books/" target="_blank">ScholarWorks</a></li> 
              <li><a href="https://www.noor-book.com/en/" target="_blank">Noor Book</a></li>  
            </ul>
          </li>
            
            
            <li class="menu-has-children"><a href="">Educational Channels</a>
            <ul>
              <li><a href="https://www.youtube.com/c/kkudl/playlists" target="_blank">Channal 1</a></li>     
              <li><a href="https://www.youtube.com/c/iugaza1/playlists" target="_blank">Channal 2</a></li>  
            </ul>
          </li>
            
           
            <li class="menu-has-children"><a href="">Educational Websites</a>
            <ul>
              <li><a href="https://ocw.mit.edu/courses/#electrical-engineering-and-computer-science" target="_blank"> MIT OpenCourseWare</a></li>     
              <li><a href="https://www.w3schools.com/">w3schools</a></li> 
              <li><a href="https://www.codecademy.com/catalog/subject/computer-science">Codecademy</a></li>   
            </ul>
          </li> 
          
            
            

        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->
  <div class="spacer">
    &nbsp;
</div>