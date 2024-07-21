<head>
    <title>ORDER</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }
        
        header {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 10px;
        }
        
        h1 {
            margin: 0;
        }
        
        .container {
            max-width: 800px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        
        .form-group {
            margin-bottom: 20px;
        }
        
        label {
            display: block;
            font-weight: bold;
        }
        
        input[type="text"],
        input[type="email"],
        input[type="date"],
        select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        
        button {
            background-color: #333;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <header>
        <h1>Order</h1>
    </header>
    <?php
session_start();

include("db.php");

if($_SERVER[ 'REQUEST_METHOD'] == "POST")
{
    $name = $_POST['name'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $OrderDate = $_POST['OrderDate'];
    $contact = $_POST['contact'];
    $SelectedOptionorders = $_POST['orders'];

    $query = "INSERT INTO `abc`(`Name`, `Address`, `Email`, `Order_Date`, `Contact`, `Order`) 
    VALUES ('$name',' $address','$email',' $OrderDate','$contact',' $SelectedOptionorders')";

    mysqli_query($con, $query);

    echo "<script type='text/javascript'> alert('Successfully order'); location.href='index.html'; </script>";

}

?>
        <div class="container">
        <h2>Order your choice</h2>
        <form action="" method="POST">
            <div class="form-group">
               <label>Name</label>
			   <input type="text" name="name" placeholder="Name" required="true">	
            </div>
            <div class="form-group">
               <label>Address</label>
			   <input type="text" name="address" placeholder="Address" required="true">
            </div>
            <div class="form-group">
                 <label>Email</label>
            <input type="text" name="email" placeholder="Email" required="true">
        </div>
        <div class="form-group">
		        <label>Order Date</label>
            <input type="date" name="OrderDate" placeholder="OrderDate" required="true">
           </div>
           <div class="form-group">
               <label>Contact</label>
			   <input type="text" name="contact" placeholder="Contact" required="true">
            </div>
            
            <div> 
                <label>Orders</label>
                 <select class="form-group" name="orders" value="item"  required="true">
                    <option value="Boquest">Boquest</option>
                    <option value="Flowers">Flowers</option>
                    <option value="Flower Vas">Flower Vas</option>
                    
			
                </select>
            </div>
            <input type="submit" value="Order Now">
        </form>
    </div>
</body>
</html>
