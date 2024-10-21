<?php 
// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get the email content from the form submission
    $emailContent = $_POST['emailContent'];

    // Database connection
    $conn = mysqli_connect("localhost", "root", "", "petcare"); 
    require 'vendor/autoload.php';

    // Select all subscribers
    $sql = "SELECT * FROM subscribers"; 
    $res = mysqli_query($conn, $sql);

    if (mysqli_num_rows($res) > 0) { 
        // Fetch all emails and send to each one
        while ($x = mysqli_fetch_assoc($res)) { 
            // Create a new PHPMailer instance for each email
            $mail = new PHPMailer\PHPMailer\PHPMailer(); 
            
            // Server settings 
            $mail->isSMTP(); 
            $mail->Host = "smtp.gmail.com"; 
            $mail->SMTPAuth = true; 
            $mail->Username = "220701186@rajalakshmi.edu.in"; // Use your email
            $mail->Password = "nikzz_rider"; // Use your password
            $mail->SMTPSecure = "tls"; 
            $mail->Port = 587;         

            // Recipients 
            $mail->setFrom("220701186@rajalakshmi.edu.in", "Nikilashree M"); 
            $mail->addAddress($x['email']); // Add the email from the database

            // Set email format to HTML 
            $mail->isHTML(true); 
            $mail->Subject = "Newsletter from Petzee"; 
            $mail->Body = $emailContent; // Use the content from the textbox
            $mail->AltBody = strip_tags($emailContent); // Plain text version
            
            // Send email 
            if ($mail->send()) { 
                echo "Message has been sent to {$x['email']}<br>"; 
            } else { 
                echo "Message could not be sent to {$x['email']}. Mailer Error: {$mail->ErrorInfo}<br>"; 
            }

            // Clear all addresses for the next iteration
            $mail->clearAddresses();
        } 
    } else { 
        echo "No subscribers found."; 
    } 
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Send Newsletter | Petzee</title>

    <!-- External fonts and icons -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f0f4f8;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            color: #333;
            background-image: url("https://r2.fivemanage.com/pub/w241ve37egf5.jpeg");
            background-size: cover;
            background-position: center;
        }

        .newsletter-container {
            background-color: rgba(255, 255, 255, 0.5); /* White background with transparency */
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            padding: 30px;
            max-width: 600px;
            width: 100%;
            text-align: center;
            backdrop-filter: blur(10px); /* Optional: adds a blur effect for more focus on the form */
        }

        h1 {
            color: #2c3e50;
            font-weight: 600;
            margin-bottom: 20px;
            font-size: 26px;
        }

        label {
            display: block;
            font-weight: 500;
            margin-bottom: 10px;
            color: #34495e;
            text-align: left;
            font-size: 18px;
        }

        textarea {
            width: 100%;
            padding: 15px;
            border: 1px solid #ccd1d9;
            border-radius: 8px;
            font-size: 16px;
            outline: none;
            margin-bottom: 20px;
            resize: none;
            box-sizing: border-box;
        }

        textarea:focus {
            border-color: #27ae60;
            box-shadow: 0 0 8px rgba(39, 174, 96, 0.2);
        }

        input[type="submit"] {
            background-color: #27ae60;
            color: white;
            border: none;
            padding: 14px 28px;
            border-radius: 8px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #2ecc71;
        }

        .footer {
            margin-top: 20px;
            color: #95a5a6;
            font-size: 14px;
        }

        .footer a {
            color: #27ae60;
            text-decoration: none;
        }

        .footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

    <div class="newsletter-container">
        <h1>Send Petzee Newsletter</h1>
        <form method="POST" action="">
            <label for="emailContent">Email Content:</label>
            <textarea id="emailContent" name="emailContent" rows="10" placeholder="Enter your email content here..." required></textarea>
            <input type="submit" value="Send Newsletter">
        </form>
        
        <div class="footer">
            <p>&copy; 2024 Petzee. All rights reserved.</p>
            <p><a href="#">Back to Dashboard</a></p>
        </div>
    </div>

</body>
</html>
