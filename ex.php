<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="styles.css"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <style>
    /* Add basic styles for counters and container */
    .container {
      width: 100%;
      margin: 0 auto;
      text-align: center;
    }
    .horizontal-container {
      display: flex;
      justify-content: space-around;
      margin: 20px 0;
    }
    .count-block {
      padding: 20px;
      text-align: center;
    }
    .countText {
      font-size: 1rem;
      margin-top: 10px;
    }
    header h1 {
      font-size: 2rem;
      margin: 20px 0;
    }
    .timeline {
      margin: 20px;
    }
    .slideshow-container img {
      display: block;
    }
  </style>
</head>
<body>
  <div class="container">
    <header>
      <h1>Interactive Page</h1>
    </header>
    
    <div class="horizontal-container">
      <!-- Counters -->
      <div class="count-block">
        <div id="counter1">0</div>
        <p class="countText">Number of Articles</p>
      </div>
      <div class="count-block">
        <div id="counter2">0</div>
        <p class="countText">Projects Completed</p>
      </div>
      <div class="count-block">
        <div id="counter3">0</div>
        <p class="countText">Users Active</p>
      </div>
      <div class="count-block">
        <div id="counter4">0</div>
        <p class="countText">Milestones Achieved</p>
      </div>
    </div>
  </div>

  <!-- Placeholder for timeline -->
  <main>
    <section class="timeline">
      <h2>Timeline Section</h2>
      <!-- Timeline content -->
    </section>
  </main>

  <!-- JavaScript -->
  <script>
    document.addEventListener('DOMContentLoaded', () => {
      // Reusable counter function
      function setupCounter(counterId, targetNumber) {
        const counterElement = document.getElementById(counterId);
        let currentNumber = 0;
        let isCounting = false;

        function countUp() {
          if (currentNumber < targetNumber) {
            currentNumber++;
            counterElement.textContent = currentNumber;
            setTimeout(countUp, 50); // Speed of counting
          }
        }

        // Start counting when the counter is in view
        window.addEventListener('scroll', () => {
          if (isElementInViewport(counterElement) && !isCounting) {
            isCounting = true;
            countUp();
          }
        });

        // Helper function to check if an element is in the viewport
        function isElementInViewport(el) {
          const rect = el.getBoundingClientRect();
          return (
            rect.top >= 0 &&
            rect.left >= 0 &&
            rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
            rect.right <= (window.innerWidth || document.documentElement.clientWidth)
          );
        }
      }

      // Initialize counters
      setupCounter('counter1', 20); // Articles
      setupCounter('counter2', 15); // Projects
      setupCounter('counter3', 50); // Users
      setupCounter('counter4', 30); // Milestones
    });
  </script>
</body>
</html>
