<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <title>Contact</title>
    <link rel="stylesheet" type="text/css" href="revivatech.css" media="screen" />
    <link rel="icon" type="image/png" href="Logo.png" />
</head>

<body>
    <img src="Logo.png" class="fondoirudi">
    <div class="top">
        <img src="Logo.png" width="50px" class="topimg">
        <p class="name">RevivaTech</p>
        <p class="slogan">Reuse technology, protect the future.</p>
        <img src="Logo.png" class="topimg">
        <ul class="menu">
            <li><a href="news.html">News</a></li>
            <li><a href="aboutus.html">About Us</a></li>
            <li><a href="buy.html">Buy</a></li>
            <li><a href="sell.html">Sell</a></li>
            <li><a href="contact.html" class="orain">Contact</a></li>
        </ul>
        <ul class="language">
            <li><a href="kontaktua.html">EUS</a></li>
            <li><a href="contact.html" class="orain">ENG</a></li>
        </ul>
    </div>
    <div class="post">
        <h1>Contact</h1>
        <br>
        <h3>Contact Information:</h3>
        <div>
            <p><strong>Address:</strong> RevivaTech, Donostia, Gipuzkoa, Basque Country</p>
            <p><strong>Phone:</strong> +34 123 456 789</p>
            <p><strong>Phone (technical support):</strong> +34 987 654 321</p>
            <p><strong>Email (general):</strong> info@revivatech.com</p>
            <p><strong>Email (technical support):</strong> support@revivatech.com</p>
        </div>
        <br>
        <h3>Get in Touch with Us:</h3>
        <div>
            <form action="/submit_contact" method="post">
                <div>
                    <label for="name">Your Name:</label><br>
                    <input type="text" id="name" name="name" required><br><br>
                </div>

                <div>
                    <label for="email">Your Email:</label><br>
                    <input type="email" id="email" name="email" required><br><br>
                </div>

                <div>
                    <label for="subject">Subject:</label><br>
                    <input type="text" id="subject" name="subject" required><br><br>
                </div>

                <div>
                    <label for="message">Your Message:</label><br>
                    <textarea id="message" name="message" rows="4" cols="50" required></textarea><br><br>
                </div>

                <input type="submit" value="Submit Request">
            </form>
        </div>
    </div>
    <?php include 'Footer ENG.php'; ?>
</body>

</html>