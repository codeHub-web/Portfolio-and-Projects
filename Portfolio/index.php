 <!DOCTYPE html>
<html lang="en">
<head>
  <title>About Me</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Fonts & Icons -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

  <!-- CSS -->
  <link rel="stylesheet" href="Style.css">
</head>
<body>

  <div class="wrapper">
    <!-- Header -->
    <div class="header">
      <div class="header-text">
        <h1><a href="index.php">Portfolio.</a></h1>
      </div>
      <div class="menu-items">
        <a href="Projects.html"><i class="fas fa-folder-open"></i> Projects</a>
        <a href="index.php" class="active"><i class="fas fa-user"></i> About Me</a>
        <a href="ContactMe.html"><i class="fas fa-envelope"></i> Contact Me</a>
      </div>
    </div>

    <!-- Main Content -->
    <div class="main-content">
      <div class="body-text">
        <h3 id="typing-text"></h3> 
        <h2 class="name" id="name-typing-text"></h2> 
        <h3>Welcome to my Portfolio</h3>
      </div>
      <div class="pic">
        <img src="IMG_3609.jpg" alt="My Picture">
      </div>
    </div>
    <h2 style="text-align: center; color:rgba(23, 0, 65, 0.767);">Tech Stack</h2>
    <div class="stack-div">
      <div class="icon js"><i class="fab fa-js"></i></div>
      <div class="icon php"><i class="fab fa-php"></i></div>
      <div class="icon github"><i class="fab fa-github"></i></div>
      <div class="icon html"><i class="fab fa-html5"></i></div>
      <div class="icon mysql"><i class="fas fa-database"></i></div>
    </div>
  </div>

  <!-- Footer -->
  <div class="footer">
    <div class="footer-items">
      <h3><a href="https://www.linkedin.com/in/maqhawe-mashiyi-743719241/" target="_blank"><i class="fab fa-linkedin"></i> LinkedIn</a></h3>
      <h3><a href="mailto:maqhawemashiyi@gmail.com"><i class="fas fa-envelope"></i> Email</a></h3>
    </div>
  </div>

  <!-- Typing Animation Script -->
  <script>
    const textGreet = "Hi there! My name is";
    const textName = "Maqhawe Mashiyi."; 
    const typingElement1 = document.getElementById("typing-text");
    const typingElement2 = document.getElementById("name-typing-text");
    
    let index1 = 0;
    let index2 = 0;

    const type1 = () => {
      if (index1 < textGreet.length) {
        typingElement1.innerHTML += textGreet.charAt(index1);
        index1++;
        setTimeout(type1, 100); //How fast it will execute the sentence
      } else {
        setTimeout(type2, 500); //Pause between type1 and type 2 functions
      }
    }

    const type2 = () => {
      if (index2 < textName.length) {
        typingElement2.innerHTML += textName.charAt(index2);
        index2++;
        setTimeout(type2, 70); 
      }
    }

    window.onload = type1;
  </script>

</body>
</html>