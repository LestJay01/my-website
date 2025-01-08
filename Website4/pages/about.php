<?php
ini_set('session.gc_maxlifetime', 1800);
session_start();

if(!isset($_SESSION["is_authorized"]) || $_SESSION != true){

    $text = 'You are not authorized to be here. Fuck off.';
    echo $text;
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="..\css\styles.css">
    <title>Why This Website</title>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="../index.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="sorry.php">Main</a></li>
            </ul>
        </nav>
    </header>

    <div class="her-pic">
        <img src="../images/IMG_6885.jpg" alt="bryanna picture">
    </div>

    <div class="text-box">
        <p>This website is my way of expressing my deepest regret and apology to the beautiful girl featured above. I made mistakes—countless ones—that caused her pain, and for that, I carry immense remorse. If I could do everything from the beginning again, I wouldn't let her down once. This site is my way of saying, from the bottom of my heart, that I’m truly sorry.</p>
    </div>

    <style>
        .her-pic{
            text-align: center;

        }
        .her-pic img{
            height:50rem;
            width: 50rem;
            padding: 1rem;

        }

        /* Styles for the Image Container */
    .her-pic {
        display: flex;
        justify-content: center;
        align-items: center;
        margin: 2rem auto;
        padding: 1.5rem;
        max-width: 350px; /* Adjust as needed */
        background: linear-gradient(135deg, #ffe4e9, #ffb6c1);
        border-radius: 20px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        border: 3px solid #ff69b4; /* Cute pink border */
    }

    /* Image Styling */
    .her-pic img {
        max-width: 100%;
        height: auto;
        border-radius: 15px;
        transition: transform 0.3s, box-shadow 0.3s;
    }

    /* Hover Effect for the Image */
    .her-pic img:hover {
        transform: scale(1.05);
        box-shadow: 0 8px 15px rgba(255, 182, 193, 0.5);
    }

    /* Responsive Design for Smaller Screens */
    @media (max-width: 480px) {
        .her-pic {
            padding: 1rem;
            max-width: 90%; /* Adjust to fit smaller screens */
        }
    }

    .text-box {
    background-color: #ffe6f2; /* Soft pink background */
    border: 2px solid #ffb3cc; /* Slightly darker pink border */
    border-radius: 15px; /* Rounded corners */
    padding: 20px; /* Spacing inside the box */
    max-width: 600px; /* Limit the width of the box */
    margin: 20px auto; /* Center the box on the page */
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Subtle shadow for depth */
    font-family: 'Arial', sans-serif; /* Clean and modern font */
    color: #ff3385; /* Vibrant pink text */
    text-align: center; /* Center the text inside */
    font-size: 1.2em; /* Slightly larger font size */
    line-height: 1.5; /* Improve readability */
    margin-bottom: 5rem;
    }


    </style>
<?php
include '../includes/footer.php';
?>



