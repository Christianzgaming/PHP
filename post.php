<?php
// Handling the form submission
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
    // Get the text content
    $post_content = htmlspecialchars($_POST['post_content']);
    
    // Handling image upload
    if (isset($_FILES['post_image']) && $_FILES['post_image']['error'] == 0) {
        $target_dir = "uploads/";
        $target_file = $target_dir . basename($_FILES["post_image"]["name"]);
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
        
        // Check if the file is a valid image
        if (getimagesize($_FILES["post_image"]["tmp_name"]) !== false) {
            // Move the uploaded file to the target directory
            if (move_uploaded_file($_FILES["post_image"]["tmp_name"], $target_file)) {
                echo "The file " . basename($_FILES["post_image"]["name"]) . " has been uploaded.";
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        } else {
            echo "File is not an image.";
        }
    }

    // Store the post in a file or database (for now, just echoing it)
    echo "<h3>Your Post</h3><p><strong>Anonymous User</strong> - " . date("F j, Y, g:i a") . "</p><p>" . $post_content . "</p>";
    if (isset($target_file)) {
        echo "<img src='" . $target_file . "' alt='Posted Image' style='max-width: 100%;'>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Post Something</title>
  <link rel="stylesheet" href="post.css">
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans|Raleway|Poppins" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
</head>
<body>

  <!-- Header -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">
      <a class="navbar-brand" href="index.php"><img src="assets/img/student-grade.png" alt="Logo" style="width:30px;height:30px;"></a>
      <h1 class="logo mr-auto"><a href="index.php">STUDENT PORTAL</a></h1>
      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="ooindex.php">Home</a></li>
          <li><a href="#">Announcements</a></li>
          <li><a href="post.php">Freedom Wall</a></li>
          <li><a href="#">Programs</a></li>
          <li class="drop-down"><a href="">Login <i class='bx bxs-down-arrow'></i></a>
            <ul>
              <li><a href="login.php">Administrator</a></li>
              <li><a href="studentLogin.php">Student</a></li>
            </ul>
          </li>
        </ul>
      </nav>
    </div>
  </header>

  <main>
    <br><br><br><br><br><br>
    <h2>FREEDOM WALL</h2>

    <!-- Post Form -->
    <form method="post" action="" enctype="multipart/form-data">
        <textarea name="post_content" rows="4" cols="50" placeholder="Write your post here"></textarea><br><br>
        <input type="file" name="post_image"><br><br>
        <input type="submit" name="submit" value="Post">
    </form>

    <!-- Example posts (replace with dynamic fetching from DB or file) -->
    <div class='post'>
        <p><strong>Anonymous888</strong> - May 24, 2024, 12:29 am</p>
        <p>yas</p>
        <img src='uploads/yasuo.jpg' alt='Posted Image' style='max-width: 100%;'>
    </div>
    <div class='post'>
        <p><strong>Anonymous185</strong> - September 9, 2023, 5:08 pm</p>
        <p>Hello!</p>
        <img src='uploads/367496140_774657644666294_6765791541580549790_n.jpg' alt='Posted Image' style='max-width: 100%;'>
    </div>
  </main>

</body>
</html>
