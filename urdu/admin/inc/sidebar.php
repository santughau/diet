<?php
$contact = "SELECT * FROM contact";
$contact_run = mysqli_query($con,$contact);
$row_contact = mysqli_num_rows($contact_run);

$gallery = "SELECT * FROM gallery";
$gallery_run = mysqli_query($con,$gallery);
$row_gallery = mysqli_num_rows($gallery_run);

$post = "SELECT * FROM post";
$post_run = mysqli_query($con,$post);
$row_post = mysqli_num_rows($post_run);

$subject = "SELECT * FROM subject";
$subject_run = mysqli_query($con,$subject);
$row_subject = mysqli_num_rows($subject_run);

$video = "SELECT * FROM video";
$video_run = mysqli_query($con,$video);
$row_video = mysqli_num_rows($video_run);

$teacher = "SELECT * FROM teacher";
$teacher_run = mysqli_query($con,$teacher);
$row_teacher = mysqli_num_rows($teacher_run);

$training = "SELECT * FROM training";
$training_run = mysqli_query($con,$training);
$row_training = mysqli_num_rows($training_run);

$download = "SELECT * FROM download";
$download_run = mysqli_query($con,$download);
$row_download = mysqli_num_rows($download_run);

$gr = "SELECT * FROM gr";
$gr_run = mysqli_query($con,$gr);
$row_gr = mysqli_num_rows($gr_run);

$notice = "SELECT * FROM notice";
$notice_run = mysqli_query($con,$notice);
$row_notice = mysqli_num_rows($notice_run);

$digital = "SELECT * FROM digital";
$digital_run = mysqli_query($con,$digital);
$row_digital = mysqli_num_rows($digital_run);

$help = "SELECT * FROM help";
$help_run = mysqli_query($con,$help);
$row_help = mysqli_num_rows($help_run);



?>

<div class="list-group">
  <a href="index.php" class="list-group-item list-group-item-action active"> <i class="fa fa-tachometer" aria-hidden="true"></i>
 Dashboard</a>
  <a href="contact.php" class="list-group-item list-group-item-action"> <i class="fa fa-cart-plus" aria-hidden="true"></i> Messages <button type="button" class="btn btn-secondary pull-right btn-sm">
   <span class="badge badge-light text-secondary"><?php echo $row_contact;?></span></button></a>
  <a href="gallery.php" class="list-group-item list-group-item-action"> <i class="fa fa-camera " aria-hidden="true"></i> Gallery <button type="button" class="btn btn-primary pull-right btn-sm">
   <span class="badge badge-light text-secondary"><?php echo $row_gallery;?></span></button></a>
    <a href="post.php" class="list-group-item list-group-item-action"> <i class="fa fa-user" aria-hidden="true"></i> Posts <button type="button" class="btn btn-danger pull-right btn-sm">
   <span class="badge badge-light text-secondary"><?php echo $row_post;?></span></button></a>
    
    <a href="video.php" class="list-group-item list-group-item-action"> <i class="fa fa-youtube" aria-hidden="true"></i> Videos <button type="button" class="btn btn-info pull-right btn-sm">
   <span class="badge badge-light text-secondary"><?php echo $row_video;?></span></button></a>
    
    <a href="teacher.php" class="list-group-item list-group-item-action"> <i class="fa fa-book" aria-hidden="true"></i> Teacher <button type="button" class="btn btn-danger pull-right btn-sm">
   <span class="badge badge-light text-primary"><?php echo $row_teacher;?></span></button></a>
    
    <a href="download.php" class="list-group-item list-group-item-action"> <i class="fa fa-download" aria-hidden="true"></i> Download <button type="button" class="btn btn-primary pull-right btn-sm">
   <span class="badge badge-light text-primary"><?php echo $row_download;?></span></button></a>
    
    <a href="training.php" class="list-group-item list-group-item-action"> <i class="fa fa-cube" aria-hidden="true"></i> Training <button type="button" class="btn btn-secondary pull-right btn-sm">
   <span class="badge badge-light text-primary"><?php echo $row_training;?></span></button></a>
    
    <a href="grview.php" class="list-group-item list-group-item-action"> <i class="fa fa-feed" aria-hidden="true"></i> GR <button type="button" class="btn btn-info pull-right btn-sm">
   <span class="badge badge-light text-primary"><?php echo $row_gr;?></span></button></a>
    
    <a href="viewnotice.php" class="list-group-item list-group-item-action"> <i class="fa fa-star" aria-hidden="true"></i> Notice <button type="button" class="btn btn-dark pull-right btn-sm">
   <span class="badge badge-light text-primary"><?php echo $row_notice;?></span></button></a>
    
    <a href="viewdigital.php" class="list-group-item list-group-item-action"> <i class="fa fa-laptop" aria-hidden="true"></i> Digital School <button type="button" class="btn btn-danger pull-right btn-sm">
   <span class="badge badge-light text-primary"><?php echo $row_digital;?></span></button></a>
    
    <a href="viewhelp.php" class="list-group-item list-group-item-action"> <i class="fa fa-circle" aria-hidden="true"></i> Help Desk <button type="button" class="btn btn-warning pull-right btn-sm">
   <span class="badge badge-light text-primary"><?php echo $row_help;?></span></button></a>
    
   
</div>