<!DOCTYPE html>
<html>
<head>
<title>blog</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="blog.css"/>
</head>
<body class="w3-light-grey">

<!-- w3-content defines a container for fixed size centered content, 
     and is wrapped around the whole page content, except for the footer in this example -->
<div class="w3-content" style="max-width:1400px">

<!-- Header -->
<header class="w3-container w3-center w3-padding-32"> 
  <h1><b>MY BLOG</b></h1>
  <p>Welcome to the blog of <span class="w3-tag">Readers</span></p>
</header>

<!-- Back button at the top -->
<div class="w3-container w3-margin-bottom w3-center">
  <button class="w3-button w3-black w3-padding-large" onclick="window.history.back();">Back</button>
</div>

<!-- Grid -->
<div class="w3-row">

<!-- Blog entries -->
<div class="w3-col l8 s12">
  <!-- Blog entry -->
  <div class="w3-card-4 w3-margin w3-white">
    <img src="b3.jpg" alt="Nature" style="width:100%">
    <div class="w3-container">
      <h3><b>Reading expands knowledge and imagination.</b></h3>
      <h5><span class="w3-opacity">April 7, 2024</span></h5>
    </div>

    <div class="w3-container">
      <p>Reading opens doors to endless possibilities, fueling both knowledge and imagination. Each page is a gateway to new worlds, ideas, and perspectives. It sharpens the mind, sparks creativity, and broadens horizons. Through reading, we escape reality, discover the unknown, and nurture dreams, empowering ourselves to create and innovate endlessly</p>
      <div class="w3-row">
        <div class="w3-col m8 s12">
          <p><button class="w3-button w3-padding-large w3-white w3-border"><b>READ MORE »</b></button></p>
        </div>
        <div class="w3-col m4 w3-hide-small">
          <p><span class="w3-padding-large w3-right"><b>Comments   </b> <span class="w3-tag">5</span></span></p>
        </div>
      </div>
    </div>
  </div>
  <hr>

  <!-- Blog entry -->
  <div class="w3-card-4 w3-margin w3-white">
  <img src="r1.webp" alt="Norway" style="width:100%">
    <div class="w3-container">
      <h3><b>Importance of Readers</b></h3>
      <h5> <span class="w3-opacity">January 2, 2025</span></h5>
    </div>

    <div class="w3-container">
      <p>Readers hold the key to endless knowledge and imagination. By diving into books, they expand their understanding of the world, sharpen critical thinking, and develop empathy by exploring diverse perspectives. Reading enhances creativity, fuels curiosity, and inspires innovation. It strengthens communication skills, broadens vocabulary, and nurtures a lifelong love for learning. Readers often possess a unique ability to envision solutions, understand complexities, and connect with others emotionally. They become better problem-solvers and storytellers, contributing positively to society. In a fast-paced digital era, the habit of reading provides a sanctuary of growth, reflection, and discovery, empowering individuals to thrive in all aspects of life.</p>
      <div class="w3-row">
        <div class="w3-col m8 s12">
          <p><button class="w3-button w3-padding-large w3-white w3-border"><b>READ MORE »</b></button></p>
        </div>
        <div class="w3-col m4 w3-hide-small">
          <p><span class="w3-padding-large w3-right"><b>Comments   </b> <span class="w3-badge">2</span></span></p>
        </div>
      </div>
    </div>
  </div>
<!-- END BLOG ENTRIES -->
</div>

<!-- Introduction menu -->
<div class="w3-col l4">
  <!-- About Card -->
  <div class="w3-card w3-margin w3-margin-top">
  <img src="b4.webp" style="width:100%">
    <div class="w3-container w3-white">
      <h4><b>Articles</b></h4>
      <p>
      These articles highlight the top 10 popular books of 2025, featuring captivating stories across diverse genres and themes.</p>
    </div>
  </div><hr>
  
  <!-- Posts -->
  <div class="w3-card w3-margin">
    <div class="w3-container w3-padding">
      <h4>Popular Books</h4>
    </div>
    <ul class="w3-ul w3-hoverable w3-white">
      <li class="w3-padding-16">
        <img src="dream.jpg" alt="Image" class="w3-left w3-margin-right" style="width:50px">
        <span class="w3-large">Dream Count</span><br>
        <span>by Chimamanda Ngozi Adichie</span>
      </li>
      <li class="w3-padding-16">
        <img src="atomp.jpg" alt="Image" class="w3-left w3-margin-right" style="width:50px">
        <span class="w3-large">Atmospher</span><br>
        <span>by Taylor Jenkins Reid</span>
      </li> 
      <li class="w3-padding-16">
        <img src="onyx.jpg" alt="Image" class="w3-left w3-margin-right" style="width:50px">
        <span class="w3-large">Onyx Storm</span><br>
        <span>Rebecca Yarros</span>
      </li>   
      <li class="w3-padding-16 w3-hide-medium w3-hide-small">
        <img src="love.png" alt="Image" class="w3-left w3-margin-right" style="width:50px">
        <span class="w3-large">We All Live Here</span><br>
        <span>by Jojo Moyes</span>
      </li>  
    </ul>
  </div>
  <hr> 
 
 
  
<!-- END Introduction Menu -->
</div>

<!-- END GRID -->
</div><br>

<!-- END w3-content -->
</div>

<!-- Footer -->
<footer class="w3-container w3-dark-grey w3-padding-32 w3-margin-top">
<a href="index.php">
  <button class="w3-button w3-black w3-padding-large w3-margin-bottom">Back</button>
</a>
  
  <button class="w3-button w3-black w3-padding-large w3-margin-bottom">Next »</button>
 
</footer>

</body>
</html>