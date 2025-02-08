<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

</head>
<style>

.vision1{

color:white;
text-align: center;
font-weight: 300;
font-size: 30px;
}

.footer {
    background-color:black;
    color: red;
    display: flex;
    justify-content: space-between;
    padding: 20px;
 
    bottom: 0;
    width: 100%;
}

.footer-left {
    position: absolute;
    left: 20px;
}

.footer-right {
    position: absolute;
    right: 20px;
}

.footer-left ul, .footer-right ul {
    list-style: none;
    padding: 0;
    margin: 0;
}

.footer-left ul li, .footer-right ul li {
    margin-bottom: 8px;
}

.footer-left ul li a, .footer-right ul li a {
    color: red;
    text-decoration: none;
    transition: color 0.3s;
}

.footer-left ul li a:hover, .footer-right ul li a:hover {
    color: #f4a261;
}


</style>
<body>
  <div class="container">
    <div class="topnav" id="myTopnav">
      <a href="#home" class="active">Home</a>
      <a href="blog.php">Blog</a>
      <a href="contact.php">Contact</a>
      <div class="dropdown">
        <button class="dropbtn">Items 
          <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-content">
          <a href="book.php">book</a>
          
        </div>
      </div> 
     
      <!-- Signup Icon -->
      <a href="Login.php" class="signup-icon">
        <i class="fa fa-user"></i> Login
    </a>
      <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
    </div>
    
       
    <div class="slideshow-container">

      <div class="mySlides fade">
        <img src="images1.jpg" class="img" style="width:100%">
      </div>
    
      <div class="mySlides fade">
        <img src="images2.jpg" class="img" style="width:100%">
        
      </div>
    
      <div class="mySlides fade">
        <img src="images03.jpg" class="img"  style="width:100%">
      
      </div>
    
      <a class="prev" onclick="plusSlides(-1)">❮</a>
      <a class="next" onclick="plusSlides(1)">❯</a>
    
    </div>
    <br>
    
    <div style="text-align:center">
      <span class="dot" onclick="currentSlide(1)"></span> 
      <span class="dot" onclick="currentSlide(2)"></span> 
      <span class="dot" onclick="currentSlide(3)"></span> 
      
    </div>
    <p id="about"></p>
    <p class="text1">
      This blog helps broaden knowledge of modern technology by providing insights into its latest advancements and applications. Readers can explore emerging trends, innovative tools, and cutting-edge developments that shape the future. It serves as a resource for understanding the impact of technology in various industries and enhances awareness of digital transformation.</p>
    <p class="text1">
      Modern technology refers to the advanced tools, systems, and methods developed through scientific and engineering innovations to improve efficiency, communication, and convenience in various aspects of life. It encompasses a wide range of fields, including information technology, artificial intelligence, robotics, biotechnology, renewable energy, and telecommunications.

In today’s world, modern technology plays a crucial role in transforming industries, enhancing productivity, and solving complex problems. For instance, advancements in artificial intelligence and machine learning have revolutionized data analysis, enabling businesses to make data-driven decisions. Similarly, renewable energy technologies, like solar panels and wind turbines, contribute to sustainable development by reducing reliance on fossil fuels.

The widespread use of smartphones, the internet, and social media platforms illustrates the profound impact of modern technology on communication and connectivity. People can interact instantly across the globe, access information in seconds, and share ideas on an unprecedented scale. In healthcare, modern technology has introduced groundbreaking innovations, such as telemedicine, wearable devices, and robotic-assisted surgeries, improving patient outcomes.

While modern technology brings immense benefits, it also presents challenges like privacy concerns, ethical dilemmas, and reliance on automation. Understanding and responsibly leveraging modern technology is essential for fostering progress while addressing potential risks. It continues to shape the future, influencing every aspect of human life.
    </p>
   
    
    <header>
      <h1>Our Roadmap</h1>
     
    </header>
    <main>
      <section class="timeline">
        <div class="timeline-item">
          <div class="timeline-circle">1</div>
          <div class="timeline-content">
            <h3>Create a User Account</h3>
            
          </div>
        </div>
        <div class="timeline-item">
          <div class="timeline-circle">2</div>
          <div class="timeline-content">
            <h3>Login to Dashboard</h3>
            
          </div>
        </div>
        <div class="timeline-item">
          <div class="timeline-circle">3</div>
          <div class="timeline-content">
            <h3>Go to book psge</h3>
            
          </div>
        </div>
        <div class="timeline-item">
          <div class="timeline-circle">4</div>
          <div class="timeline-content">
            <h3>Select your book</h3>
           
          </div>
        </div>
        <div class="timeline-item">
          <div class="timeline-circle">5</div>
          <div class="timeline-content">
            <h3>Enter payment Details correctly</h3>
            
          </div>
        </div>

        <div class="timeline-item">
          <div class="timeline-circle">6</div>
          <div class="timeline-content">
            <h3>Enter your payment and get your receipt </h3>
           
          </div>
        </div>
      </section>
      
    </main>

    <h1 class="vision">vision</h1>
      <p class="vision1">Our vision is to deliver exceptional services, ensuring customer satisfaction with innovation, quality, reliability, and excellence in every solution we provide</p>
   
    
      <h1 class="vision">Mission</h1>
        <p class="vision1">Our mission is to cultivate knowledgeable, insightful readers worldwide, empowering minds with valuable content, inspiration, and a passion for learning.</p>
   
    
    
        <footer class="footer">
        <div class="footer-left">
            <ul>
                <li><a href="#">Privacy Policy</a></li>
                <li><a href="#">Terms & Conditions</a></li>
                <li><a href="#">About Us</a></li>
            </ul>
        </div>

        <div class="footer-right">
            <ul>
                <li><a href="contact.php">Contact Us</a></li>
                <li><a href="#">FAQ</a></li>
                <li><a href="#">Help</a></li>
            </ul>
            
        </div>
        
    </footer>

     
    <script>
      let slideIndex = 0;
      showSlides();
    
      function showSlides() {
        let i;
        let slides = document.getElementsByClassName("mySlides");
        let dots = document.getElementsByClassName("dot");
        for (i = 0; i < slides.length; i++) {
          slides[i].style.display = "none";
        }
        slideIndex++;
        if (slideIndex > slides.length) {slideIndex = 1}
        for (i = 0; i < dots.length; i++) {
          dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex-1].style.display = "block";
        dots[slideIndex-1].className += " active";
        setTimeout(showSlides, 5000); // Change image every 5 seconds
      }
      var i=0;
      var txt = '....Who We Are....';
      var speed = 100;

      function typeWriter() {
        if (i < txt.length) {
      document.getElementById("about").innerHTML += txt.charAt(i);
      i++;
      setTimeout(typeWriter, speed);
    }
  }
  typeWriter()

// Automatically start typing when the page loads
    window.onload = function() {
      typeWriter();
  };

  

 


    /*header navigation*/i
    function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}

/*image controller*/
const image = document.getElementById("scroll-image");

        window.addEventListener("scroll", () => {
            // Get the trigger container's position
            const triggerContainer = document.querySelector(".trigger-container");
            const rect = triggerContainer.getBoundingClientRect();

            // If the container is partially in the viewport
            if (rect.top < window.innerHeight && rect.top > 0) {
                image.style.left = "50%";
                image.style.transform = "translateX(-50%)";
            } else {
                image.style.left = "-200px"; // Reset to the original position
                image.style.transform = "translateX(0)";
            }
        });


    </script>
    
</body>
</html>