<!DOCTYPE html>
<html>
<head>
<style>
body {
  font-family: Arial, sans-serif;
  margin: 0;
  padding: 0;
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  background-color: #f4f4f4;
}

.container {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  gap: 20px;
  padding: 20px;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  text-align: center;
  font-family: Arial, sans-serif;
  background-color: #fff;
  border-radius: 10px;
  overflow: hidden;
}

.card img {
  width: 300px;
  height: 200px;
  object-fit: cover;
}

.price {
  color: grey;
  font-size: 22px;
}

.card button {
  border: none;
  outline: 0;
  padding: 12px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
  border-bottom-left-radius: 10px;
  border-bottom-right-radius: 10px;
}

.card button:hover {
  opacity: 0.7;
}

.back-icon {
  position: absolute;
  top: 10px;
  left: 10px;
  font-size: 20px;
  text-decoration: none;
  color: #000;
  font-weight: bold;
}

.back-icon:hover {
  color: #555;
}
</style>
</head>
<body>

<a href="index.php" class="back-icon">&#8592; Back</a>

<h2 style="text-align:center; width: 100%;">Product Cards</h2>

<div class="container">
  <div class="card">
    <img src="book1.jpg" alt="Tailored Jeans">
    <h1>Tom Cat</h1>
    <p class="price">$19.99</p>

      <a href="card.php"><button>Add to Cart</button></a></p>
    </div>

  <div class="card">
    <img src="book2.jpg" alt="Tailored Jeans">
    <h1>The Break Down</h1>
    <p class="price">$19.99</p>
   
    <p><a href="card.php"><button>Add to Cart</button></a></p>

  </div>

  <div class="card">
    <img src="book3.jpg" alt="Tailored Jeans">
    <h1>Charlie Factory</h1>
    <p class="price">$19.99</p>
    
    <p><a href="card.php"><button>Add to Cart</button></a></p>

  </div>

  <div class="card">
    <img src="book4.jpg" alt="Tailored Jeans">
    <h1>Lion King</h1>
    <p class="price">$19.99</p>
   
    <p><a href="card.php"><button>Add to Cart</button></a></p>

  </div>

  <div class="card">
    <img src="book5.jpg" alt="Tailored Jeans">
    <h1>Tom Sawyer</h1>
    <p class="price">$19.99</p>
    
    <p><a href="card.php"><button>Add to Cart</button></a></p>

  </div>

  <div class="card">
    <img src="book6.jpg" alt="Tailored Jeans">
    <h1>The Golden Bugs</h1>
    <p class="price">$19.99</p>
    
    <p><a href="card.php"><button>Add to Cart</button></a></p>

  </div>
  <div class="card">
    <img src="book7.jpg" alt="Tailored Jeans">
    <h1>Drifts</h1>
    <p class="price">$19.99</p>
 
    <p><a href="card.php"><button>Add to Cart</button></a></p>

  </div>
  <div class="card">
    <img src="book8.jpg" alt="Tailored Jeans">
    <h1>Morris</h1>
    <p class="price">$19.99</p>
    
    <p><a href="card.php"><button>Add to Cart</button></a></p>

  </div>
  <div class="card">
    <img src="https://via.placeholder.com/300x200" alt="Tailored Jeans">
    <h1>Tailored Jeans</h1>
    <p class="price">$19.99</p>

    <p><a href="card.php"><button>Add to Cart</button></a></p>

  </div>
  <div class="card">
    <img src="https://via.placeholder.com/300x200" alt="Tailored Jeans">
    <h1>Tailored Jeans</h1>
    <p class="price">$19.99</p>
    
    <p><a href="card.php"><button>Add to Cart</button></a></p>

  </div>
</div>

</body>
</html>
