<?php
include('header.php');

if(!isset($_SESSION["loggedin"])){

  echo("<script>location.href = 'index.php';</script>");
  exit;
}
require_once "config.php";

if($_SESSION["type"]==1){
    // Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){

$name=$_POST["name"];
$level=$_POST["level"];
$content=$_POST["content"];

if(!empty($_FILES["image"]["name"])) { 
    $fileName = basename($_FILES["image"]["name"]);
  
    $target_dir = "img/";
    $target_file = $target_dir . $fileName;

    $fileType = pathinfo($fileName, PATHINFO_EXTENSION); 
    $allowTypes = array('jpg','png','jpeg','.gif'); 

    if(in_array($fileType, $allowTypes)){ 
        if(move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)){

        $query = "insert into courses(name,level_id,content,image) values('".$name."','".$level."','".$content."','".$fileName."')";
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
            $_SESSION["error_msg"] = "Error. Image not uploaded";
        }
    }else{
        $_SESSION["error"] = true;
        $_SESSION["error_msg"] = "Error. Please uplaod a valid image";
    }
}else{
    $_SESSION["error"] = true;
    $_SESSION["error_msg"] = "Error. Please uplaod image";
}
}
?>

    <h2 style=" margin-left: 115px;">Add new Course: </h2>

<div class="admin_panel">
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" enctype="multipart/form-data">
    <div class="container">
<?php
if(isset($_SESSION["success"])){
    echo "<div class='success'>".$_SESSION["success_msg"]."</div>";
    unset($_SESSION['success']);

}
if(isset($_SESSION["error"])){
    echo "<div class='error'>".$_SESSION["error_msg"]."</div>";
    unset($_SESSION['error']);

}
?>

        <div class="row">
            <div class="col-md-2">
                <label for="">Course Name</label>
            </div>
            <div class="col-md-6">
                <input type="text" class="form-control" name="name" Required id="">
            </div>
        </div>

        <div class="row">
            <div class="col-md-2">
                <label for="">Level</label>
            </div>
            <div class="col-md-6">
<select class="form-control" name="level" id="" required>
    <option value="">Choose Level</option>
    <option value="1">Level 1</option>
    <option value="2">Level 2</option>
    <option value="3">Level 3</option>
    <option value="4">Level 4</option>

</select>
        </div>
        </div>

        <div class="row">
            <div class="col-md-2">
                <label for="">Course Content</label>
            </div>

            <div class="col-md-6">
                <textarea type="text" class="form-control" name="content"  id="" rows="4"></textarea>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2">
                <label for="">Course Image</label>
            </div>
            <div class="col-md-6">
                <input type="file" name="image" id="">
            </div>
        </div>


        <div class="row">
            <div class="col-md-2">
            </div>
            <div class="col-md-6">
            <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
</form>
</div>



<?php
$courses = "SELECT DISTINCT course_id FROM enroll";
    $res_courses = mysqli_query($link,$courses);
    $count = mysqli_num_rows($res_courses);
  if($count>0){
?>
<h2 style=" margin-left: 115px;">Enrolled Courses: </h2>
<section class="section-bg" >
      <div class="container">
        <div class="row portfolio-container">
<?php
    while($course = $res_courses->fetch_array()){
        $course_id=$course['course_id'];

        $single_course = "SELECT * FROM courses where id= $course_id LIMIT 1";
        $course = mysqli_query($link,$single_course);   
        $course =  mysqli_fetch_array( $course);


        $count_student = "SELECT count(student_id) as count FROM enroll where course_id= $course_id GROUP BY course_id";
        $count = mysqli_query($link,$count_student);   
        $count =  mysqli_fetch_array( $count);
?>
          <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp">
            <div class="portfolio-wrap" style="    padding: 15px;">
              <figure>
                <img src="img/<?php echo $course['image'] ?>" class="img-fluid" alt="">
              </figure>
              <div class="portfolio-info">
              <a class="item-link" href="single.php?id=<?php echo $course['id'] ?>"><?php echo $course['name'] ?></a>     <br>
              
            <span>Enrolled by: <?php echo $count['count'] ?></span>
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










<?php } ?>