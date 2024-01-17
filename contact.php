<?php require"header.php"; ?>
<head>
    <style>
            header {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 20px;
        }

    </style>
</head>
<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
    body {
        font-family: Arial, sans-serif;
        background-color: #add8e6; /* Light blue color */
        background-image: url('background.jpg'); /* Replace 'your-image.jpg' with the path to your image file */
        background-size: cover;
        background-repeat: no-repeat;
        margin: 0;
        padding: 0;
    }

.container {
    max-width: 400px;
    margin: 100px auto;
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

form {
    display: flex;
    flex-direction: column;
}

label {
    margin-bottom: 8px;
}

input, textarea, button {
    margin-bottom: 16px;
    padding: 8px;
}

button {
    cursor: pointer;
    background-color: #4caf50;
    color: #fff;
    border: none;
    border-radius: 4px;
}
.sidebar{
    position:absolute;
background-color: rgb(255, 255, 255);
font-family:'Fira Sans' , sans-serif;
height:500vh;
transition: transform 0.3s ease-in;
}
.sidebar nav{
    padding:15px;
}

.sidebar nav li{
    
    list-style: none;
    font-size: 15px;
    padding:33px 0;
    
}
.sidebar nav li a{
    text-decoration:none;
    color: black;
}
    </style>
    <title>Contact Page</title>
</head> -->
<body>
    <header>
        <h1 style="color:wheat">Contact Us</h1>
        <!-- <h1>Clothes Recommendation System</h1> -->
        <!-- <div class="sidebar sidebarGo">      
        <nav>
            <ul>
                <li><a href="login.html">Login</a></li>
                <li><a href="index.php">Home</a></li>
                 <li><a href="preferences.html">Preferences</a></li> 
                <li><a href="recommendations.html">Recommendations</a></li>
                <li><a href="contact.html">Contact</a></li>
            </ul>
        </nav>
        </div> -->
    </header>
    <div class="container">

        <form action="contact.php" method="post" onsubmit="return validateForm()" style="padding:20px">
            <label for="name" style="color:wheat">Your Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="email" style="color:wheat">Your Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="message" style="color:wheat">Your Message:</label>
            <textarea id="message" name="message" rows="4" required></textarea>

            <button type="submit">Submit</button>
        </form>
    </div>

    <script src="script.js"></script>
</body>
</html>
