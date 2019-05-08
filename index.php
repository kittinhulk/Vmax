<!DOCTYPE html>
<html lang="en">
<!-- head กำหนดค่าค่างๆ -->
<?php include 'parts/head.php';?>

<body>

  <!-- Navigation แทบบาข้างบน--> 
<?php include 'parts/navigation.php';?>

  <!-- Page Content -->
  <div class="container">

    <!-- Jumbotron Header -->
    <header class="jumbotron my-4">
      <script type="text/javascript">
        document.write("<h1 class="display-3">A Warm Welcome!</h1>");
      </script>
      <h1 class="display-3">A Warm Welcome!</h1>
      <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa, ipsam, eligendi, in quo sunt possimus non incidunt odit vero aliquid similique quaerat nam nobis illo aspernatur vitae fugiat numquam repellat.</p>
      <a href="#" class="btn btn-primary btn-lg">Call to action!</a>
    </header>

    <!-- Page Features -->
    <?php include 'parts/pageFeatures.php';?>
    <!-- /.row -->

  </div>
  <!-- /.container -->

  <!-- Footer แทบข้างล่าง -->
  <?php include 'parts/footer.php';?>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
