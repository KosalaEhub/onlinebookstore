<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Us</title>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
  <style>
    /* General page styles */
    body {
      font-family: Arial, sans-serif;
      background-color: #f4f4f4;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
      flex-direction: column;
    }

    h1 {
      text-align: center;
      margin-bottom: 50px;
    }

    /* Flip-box styles */
    .flip-box {
      background-color: transparent;
      width: 300px;
      height: 400px;
      perspective: 1000px;
    }

    .flip-box-inner {
      position: relative;
      width: 100%;
      height: 100%;
      transition: transform 0.6s;
      transform-style: preserve-3d;
    }

    .flip-box:hover .flip-box-inner {
      transform: rotateY(180deg);
    }

    .flip-box-front, .flip-box-back {
      position: absolute;
      width: 100%;
      height: 100%;
      backface-visibility: hidden;
    }

    /* Front of the flip box (before hover) */
    .flip-box-front {
      background-color: #333;
      color: white;
      display: flex;
      justify-content: center;
      align-items: center;
      font-size: 1.5rem;
      text-align: center;
    }

    /* Back of the flip box (after hover) */
    .flip-box-back {
      background-color: #f1f1f1;
      color: #333;
      transform: rotateY(180deg);
      padding: 20px;
    }

    /* Form styles */
    form input, form textarea {
      width: 100%;
      padding: 10px;
      margin: 10px 0;
      border: 1px solid #ddd;
      border-radius: 5px;
      font-size: 1rem;
    }

    form button {
      background-color: #333;
      color: white;
      padding: 10px 20px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      font-size: 1rem;
    }

    form button:hover {
      background-color: #555;
    }

    /* Back icon style */
    .back-button {
      background-color: transparent;
      border: none;
      font-size: 1.5rem;
      color: #333;
      cursor: pointer;
      margin-top: 20px;
      text-align: left;
    }

    .back-button:hover {
      color: #555;
    }

    /* Pop-up message styles */
    .popup {
      display: none;
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: rgba(0, 0, 0, 0.5);
      justify-content: center;
      align-items: center;
    }
    .popup-content {
      background: white;
      padding: 20px;
      border-radius: 5px;
      text-align: center;
    }
    .popup button {
      background-color: #333;
      color: white;
      padding: 10px 20px;
      border: none;
      cursor: pointer;
      border-radius: 5px;
    }

    /* Responsive styling */
    @media (max-width: 768px) {
      .flip-box {
        width: 90%;
        height: auto;
      }

      .back-button {
        width: 100%;
      }
    }
  </style>
</head>
<body>

  <div>
    <h1>Contact Us</h1>

    <!-- Back icon to go to index.php -->
    <button class="back-button" onclick="window.location.href='index.php'">
      <i class="fas fa-arrow-left"></i> Back to Home
    </button>

    <!-- Flip-box container -->
    <div class="flip-box">
      <div class="flip-box-inner">

        <!-- Front side: Contact us text -->
        <div class="flip-box-front">
          <p>Click to contact us!</p>
        </div>

        <!-- Back side: Contact form -->
        <div class="flip-box-back">
          <form id="contactForm" action="submit_form.php" method="POST">
            <h2>Get in Touch</h2>
            <label for="name">Name</label>
            <input type="text" id="name" name="name" placeholder="Your Name" required>

            <label for="email">Email</label>
            <input type="email" id="email" name="email" placeholder="Your Email" required>

            <label for="message">Message</label>
            <textarea id="message" name="message" rows="4" placeholder="Your Message" required></textarea>

            <button type="submit">Submit</button>
          </form>
        </div>

      </div>
    </div>
  </div>

  <!-- Pop-up message -->
  <div id="popup" class="popup">
    <div class="popup-content">
      <p>Thank you for contacting us! We will get back to you soon.</p>
      <button onclick="closePopup()">Close</button>
    </div>
  </div>

  <script>
    // Show the pop-up after form submission
    document.getElementById('contactForm').addEventListener('submit', function(event) {
      event.preventDefault(); // Prevent form from submitting immediately
      const form = event.target;

      // Send form data to the server
      fetch(form.action, {
        method: form.method,
        body: new FormData(form)
      })
      .then(response => response.json())
      .then(data => {
        // If submission is successful, show the pop-up
        if (data.success) {
          document.getElementById('popup').style.display = 'flex';
        }
      })
      .catch(error => console.error('Error:', error));
    });

    // Close the pop-up
    function closePopup() {
      document.getElementById('popup').style.display = 'none';
    }
  </script>

</body>
</html>

