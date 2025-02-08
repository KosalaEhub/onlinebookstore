<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Wooden Box with Flying Books</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
      background-color: #f0f0f0;
    }

    /* Wooden Box Styles */
    .box {
      width: 300px;
      height: 300px;
      background-color: #8e735b; /* Wooden color */
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      position: relative;
      cursor: pointer;
      transition: all 0.5s ease-in-out;
      overflow: hidden;
      transform-origin: center bottom;
    }

    .box::before {
      content: '';
      position: absolute;
      top: 10px;
      left: 10px;
      right: 10px;
      bottom: 10px;
      background-image: linear-gradient(45deg, #a67c52, #d2b38f);
      border-radius: 8px;
      box-shadow: inset 0 0 20px rgba(0, 0, 0, 0.2);
    }

    /* Book Container */
    .books {
      position: absolute;
      bottom: 20px;
      left: 50%;
      transform: translateX(-50%);
      transition: all 0.3s ease-in-out;
      opacity: 0;
    }

    /* Individual Book Styles */
    .book {
      width: 60px;
      height: 100px;
      background-color: #f39c12; /* Book Color */
      margin-bottom: 10px;
      border-radius: 5px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
      position: relative;
      transition: all 0.3s ease;
    }

    /* Box hover effect */
    .box:hover .books {
      opacity: 1;
      bottom: 50px; /* Books rise when hovered */
    }

    /* Animate books flying in the air */
    .box:hover .book {
      animation: flyUp 0.6s ease forwards;
    }

    /* Flying Animation for books */
    @keyframes flyUp {
      0% {
        transform: translateY(0);
        opacity: 1;
      }
      100% {
        transform: translateY(-100px); /* Book flies up */
        opacity: 0;
      }
    }

    /* Box hover effect - scaling and rotation */
    .box:hover {
      transform: scale(1.1) rotateX(5deg);
    }
  </style>
</head>
<body>

  <div class="box">
    <div class="books">
      <div class="book"></div>
      <div class="book"></div>
      <div class="book"></div>
      <div class="book"></div>
      <div class="book"></div>
    </div>
  </div>

</body>
</html>

