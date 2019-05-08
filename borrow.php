<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Heroic Features - Start Bootstrap Template</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/heroic-features.css" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">Start Bootstrap</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>>

  <!-- Page Content -->
  <div class="container">

    <!-- Jumbotron Header -->
    <header class="jumbotron my-4">
      <h1 class="display-3">A Warm Welcome!</h1>
      <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa, ipsam, eligendi, in quo sunt possimus non incidunt odit vero aliquid similique quaerat nam nobis illo aspernatur vitae fugiat numquam repellat.</p>
      <a href="#" class="btn btn-primary btn-lg">Call to action!</a>
    </header>

    <!-- Page Features -->
    <div class="row text-center">

      <?php  
            $file_dir = "../uploads/"; //ที่อยู่ Dir
            if(is_dir($file_dir)){
                $files = scandir($file_dir);
                for($i = 0 ; $i < count($files);$i++){
                    $file = pathinfo($files[$i]);   
                    $extension = $file['extension']; //นามสกุล
                    $filename = $file['filename'];  //ชื่อไฟล์      

                    if($files[$i]!="."||$files[$i]!=".."){
                        if($extension == "mp4"){
                            echo '
                            <div class="col-lg-3 col-md-6 mb-4">
                              <div class="card h-100">

                                <video width="100%" height="100%" autoplay muted>
                                  <source src="'.$file_dir.''.$filename.'" type="video/mp4">
                                Your browser does not support the video tag.
                                </video>

                                <div class="card-body">
                                  <h4 class="card-title">'.$filename.'</h4>
                                  <p class="card-text">'.$file_dir.''.$filename.'</p>
                                </div>
                                <div class="card-footer">
                                  <a href="#" class="btn btn-primary">Find Out More!</a>
                                </div>
                              </div>
                            </div>
                            ';
                          }
                  }    
                }
            }else{
                echo "ไม่มีไฟล์ใน Dir";
            }
      ?>
    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Your Website 2019</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
