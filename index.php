<?php
$cn=new mysqli("localhost","root","1290pokputhea1!2@","post");
 
$lang=1;
if(isset($_GET['lang'])){
  $lang=$_GET['lang'];
}
$home=array("1"=>"Home","2"=>"ទំព័រដើម");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pok Puthea website</title>
    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
 
    <link rel="stylesheet" href="style1.css">
</head>
<body>
<nav class="navbar navbar-expand-lg color">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Our Service</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php"><?php
          echo $home[$lang];
          ?></a>
        </li>
</li>
 
<?php
$ss="SELECT * from  data where data.lang=$lang";
$rd=$cn->query($ss);
while($rowd=$rd->fetch_array()){
?>
  <li class="nav-item">
  <a class="nav-link" href="index.php?cat=<?php echo $rowd[0]; ?>"><?php echo $rowd[1];?></a>
</li>
<?php
}
?>
      </ul>
       
      <a href="index.php?lang=2"><button class="btn btn-outline-success" type="text">ភាសាខ្មែរ</button></a>
      <a href="index.php?lang=1"><button class="btn btn-outline-success" type="text">English langueage</button></a>
      
    </div>
  </div>
</nav>
<div class="container">
    <div class="row">
        <div class="col-lg-12 col-xl-12 col-md-12 col-sm-12 col-12 header">
            <h1>Test Good</h1>
            <p>Video provides a powerful way to help you prove your point. When you click Online Video, you can paste in the embed code for the video you want to add. You can also type a keyword to search online for the video that best fits your document.

            </p>
        </div>
    </div>
    <div class="row">
      <?php
      if(isset($_GET['cat'])){
        $imp=$_GET['cat'];

        include("C:\wamp64\www\PHP\Fullstack\client\item2.php");
      }else{
         include("C:\wamp64\www\PHP\Fullstack\client\home.php");
      }
      
     
      ?>

         
    </div>
</div>
</body>
</html>