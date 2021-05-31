<?php

include('header.php');

if(!isset($_SESSION["loggedin"])){

  echo("<script>location.href = 'index.php';</script>");
  exit;
}
require_once "config.php";

if(!isset($_SESSION)) 
{ 
    session_start(); 
} 

if(isset($_POST["course_id"])){
    $user_id=$_SESSION["id"];
    $id=$_POST["course_id"];
    $sql = "SELECT * FROM enroll WHERE student_id = $user_id  AND course_id=$id";
    $result=mysqli_query($link,$sql);
if(mysqli_num_rows($result) == 0){
    $query = "insert into enroll(student_id,course_id) values('".$user_id."','".$id."')";
    $result=mysqli_query($link,$query);
    if($result){
        $_SESSION["success"] = true;
        $_SESSION["success_msg"] = "Course added Successfully";

    }else{
        $_SESSION["error"] = true;
        $_SESSION["error_msg"] = "Something Error"; 
    }
}else{
    $_SESSION["error"] = true;
    $_SESSION["error_msg"] = "Course already been added before"; 
}
    }

    if(isset($_SESSION["error"])){
        echo "<div class='error'>".$_SESSION["error_msg"]."</div>";
        unset($_SESSION['error']);
    
    }

        if(isset($_SESSION["success"])){
        echo "<div class='success'>".$_SESSION["success_msg"]."</div>";
        unset($_SESSION['success']);
    
    }
    $user_id=$_SESSION["id"];

    $courses = "SELECT * FROM enroll where student_id= $user_id";
    $res_courses = mysqli_query($link,$courses);
    $count = mysqli_num_rows($res_courses);
  if($count>0){
?>
                    <h4 style="padding-left: 60px;">My Courses</h4><br>

<section class="section-bg" >
 
      <div class="container">

        <div class="row portfolio-container">

<?php
    while($course = $res_courses->fetch_array()){
        $course_id=$course['course_id'];
        $single_course = "SELECT * FROM courses where id= $course_id LIMIT 1";
        $course = mysqli_query($link,$single_course);   
        $course =  mysqli_fetch_array( $course);
?>
          <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp">
            <div class="portfolio-wrap" style="    padding: 15px;">
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
}

?>
        </div>
      </div>
</section>
