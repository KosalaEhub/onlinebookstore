<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Confirmation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .preloader {
            display: none;
            text-align: center;
            margin-top: 20px;
        }
        .success-message {
            display: none;
            text-align: center;
            color: green;
            font-size: 20px;
            font-weight: bold;
            margin-top: 20px;
        }
        .again-buy {
            display: none;
            text-align: center;
            margin-top: 20px;
        }
    </style>
</head>
<body class="container mt-5">
    <h2 class="text-center">Payment Form</h2>
    <form id="paymentForm" class="mt-4">
        <div class="mb-3">
            <label for="currency" class="form-label">Choose Currency</label>
            <select id="currency" class="form-select" required>
                <option value="USD">USD</option>
                <option value="LKR">LKR</option>
                <option value="INR">INR</option>
                <option value="EUR">EUR</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="amount" class="form-label">Enter Amount</label>
            <input type="number" id="amount" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary w-100">Submit</button>
    </form>
    
    <div class="preloader">
        <div class="spinner-border text-primary" role="status">
            <span class="visually-hidden">Processing...</span>
        </div>
        <p>Processing Payment...</p>
    </div>
    
    <div class="success-message">Payment Successful!</div>
    
    <div class="again-buy">
        <a href="book.php" class="btn btn-success">Again Buy</a>
    </div>

    <script>
        document.getElementById("paymentForm").addEventListener("submit", function(event) {
            event.preventDefault();
            document.getElementById("paymentForm").style.display = "none";
            document.querySelector(".preloader").style.display = "block";
            setTimeout(function() {
                document.querySelector(".preloader").style.display = "none";
                document.querySelector(".success-message").style.display = "block";
                document.querySelector(".again-buy").style.display = "block";
            }, 4000);
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
