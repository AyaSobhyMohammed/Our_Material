<?php
require_once "config.php";
if(!isset($_SESSION)) 
{ 
    session_start(); 
} 
// Check if the user is already logged in, if yes then redirect him to welcome page
if(!isset($_SESSION["loggedin"])){
    echo("<script>location.href = 'index.php';</script>");
    exit;
  }
include('header.php');

$id=$_GET["id"];


if($id){
$sql = "SELECT * FROM courses WHERE id=$id LIMIT 1";
$result = mysqli_query($link,$sql);
$course = $result->fetch_array();
?>
<div class="container">
<div class="single">
<img src="img/<?php echo $course['image'] ?>" class="singleimg" alt="">
<h2><?php echo $course['name'] ?></h2>
<p>
    <?php echo htmlspecialchars_decode(stripslashes($course['content'])); ?>
</p>
<?php if($_SESSION["type"] == 0) { ?>
<form action="mycourses.php" method="post">
<input type="hidden" name="course_id" value="<?php echo $course['id'] ?>">
<button type="submit" class="btn btn-success" style="float: right; position: relative; bottom: 70px;">Enroll</button>
</form>
<?php } ?>
</div>
</div>










<?php
 }
include('footer.php');
 ?>