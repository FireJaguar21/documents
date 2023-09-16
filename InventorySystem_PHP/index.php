<style>
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
}
.login-page{
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 400px;
    background: transparent;
    border-radius: 10px;
}
.login-page h4{
    text-align: center;
    padding: 20px 0 20px 0;
    border-bottom: 2px solid black;
    font-size: 30px;
}
form{
    padding: 0 40px;
    box-sizing: border-box;
}
.form-group{
    position: relative;
    margin: 30px 0;
    -webkit-text-fill-color: black;
}
.form-control{
    width: 100%;
    padding: 0 5px;
    height:  40px;
    font-size: 16px;
    border: none;
    background: none;
    outline: none;
    border-bottom: 2px solid black;
}
button[type="submit"]{
    width: 100%;
    height: 50px;
    border: 1px solid;
    background: #2691d9;
    border-radius: 25px;
    font-size: 18px;
    color: #e9f4fb;
    font-weight: 700;
    cursor: pointer;
    outline: none;
}
button[type="submit"]:hover{
    border-color: #2691d9;
    transition: .5s;
}
#video-background {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            z-index: -1; /* Place the video behind other content */
        }
</style>
<?php
  ob_start();
  require_once('includes/load.php');
  if($session->isUserLoggedIn(true)) { redirect('home.php', false);}
?>
    <video id="video-background" muted>
        <source src="eu.mp4" type="video/mp4">
        Your browser does not support the video tag.
    </video>
        <script>
        const video = document.getElementById("video-background");

        // Play the video with reduced speed
        video.playbackRate = 0.5; // Change this value to adjust speed (0.5 is half speed)
        video.play();

        // Pause the video when it ends
        video.addEventListener("ended", function() {
            video.pause();
        });
    </script>
<div class="login-page">
    <div class="text-center"> 
       <h4>EUDAIMON CAFE System</h4>
     </div>
     <?php echo display_msg($msg); ?>
      <form method="post" action="auth.php" class="clearfix">
        <div class="form-group">
              <input type="name" class="form-control" name="username" placeholder="Username">
        </div>
        <div class="form-group">
            <input type="password" name= "password" class="form-control" placeholder="Password">
        </div>
        <div class="form-group">
                <button type="submit" class="btn btn-danger" style="border-radius:0%">Login</button>  
        </div>
    </form>
</div>
<?php include_once('layouts/footer.php'); ?>