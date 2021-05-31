<?php
require_once "config.php";
include('header.php');

$q=$_GET["q"];
$sql = "SELECT * FROM courses WHERE name LIKE '%$q%'";
$result = mysqli_query($link,$sql);
$count = mysqli_num_rows($result);
if($count == 0){
    echo "<p style='text-align: center; margin-top: 15%;'>No Courses Found</p>";
}

?>

<section id="level2"  class="section-bg" >
      <div class="container">
        <div class="row portfolio-container">
   
<?php
while($course = $result->fetch_array()){
?>
          <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp">
            <div class="portfolio-wrap">
              <figure>
                <img src="img/<?php echo $course['image'] ?>" class="img-fluid" alt="">
               
              </figure>

              <div class="portfolio-info">
                <a class="item-link" href="single.php?id=<?php echo $course['id'] ?>"><?php echo $course['name'] ?></a>
               
            </div>
          </div>

      </div>  


<?php




}

?>

        </div>
      </div>
</section>














<?php
include('footer.php')
?>
