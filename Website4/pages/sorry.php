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
    <title>Document</title>
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
    
    <div class="apology">
        <div class="card">
            <div class="card-inner">
                <div class="card-front">
                    <h2 class="title">An apology to Bryanna</h2>
                </div>
                <div class="card-back">
                    <p class="message" style="color:red;">
                        bryanna im sorry i didnt treat you the way you deserved, i have to be the stupidest person on the planet for not realizing what i was doing wrong and for so long. 
                        I got too comfortable having you around me and stopped treating you like the princess you are. given another chance, I'll make sure your life is filled with happiness 
                        and you're reminded every day of your beauty. you deserve nothing less and so much more. <br><3 
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="special">
        <div class="card">
            <div class="card-inner">
                <div class="card-front">
                    <h2 class="title">What makes her special to me (No order)</h2>
                </div>
                <div class="card-back">
                    <p class="message">
                        1. She's my favorite person to be a fatass with.<br>
                        2. The meanest kind soul you'll ever meet. She can be mean, but trust me, a heart and soul like hers is special and rare.<br>
                        3. Her beauty. I can look at her for hours. shes like something out of a painting. When I see her face after a long time, it makes my day.<br>
                        4. She's a prize. She's something to be cherished, like a trophy or a signed autograph from your favorite artist that you just want to hold on to for the rest of your life. 
                        Every moment with her is a blessing. Just don't realize too late.<br>
                        5. She motivates me. I want to give this girl the world, and she deserves it. Every day I want to be a better man than I was yesterday. For her.<br>
                        6. In a dark world, she continues to shine. She brightens up the darkest days. When everyone else turns to sin and degeneracy, she strives to be a woman God would be proud of.<br>
                        7. Her smile, her laugh, and her love. Her love is the best feeling in the world, and she has so much of it to give. I wish I had that love again.
                    </p>
                </div>
            </div>
        </div>
    </div>
    
    <div class="image-gallery">
    <div class="image-container">
        <img src="../images/IMG_6885.jpg" alt="Image 1" class="gallery-image">
        <img src="../images/IMG_6885.jpg" alt="Image 2" class="gallery-image">
        <img src="../images/IMG_6885.jpg" alt="Image 3" class="gallery-image">
        <img src="../images/IMG_6885.jpg" alt="Image 4" class="gallery-image">
        <img src="../images/IMG_6885.jpg" alt="Image 5" class="gallery-image">
        <img src="../images/IMG_6885.jpg" alt="Image 6" class="gallery-image">
        <!-- Add more images as needed -->
    </div>
</div>
    <div class="ily">
        <h1 style="color:black">I LOVE YOU 4LIFE BRYANNA. <br> im sorry.</h1>
    </div>
<style>

    .ily{
        text-align: center;
        margin-bottom: 5rem;
    }
        /* Apology Section */
    .apology {
        max-width: 800px;
        margin: auto;
        margin-top: 5rem;
        background-color: #fff;
        padding: 20px;
        border-radius: 15px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        text-align: center;
        transition: transform 0.5s ease; /* Smooth transition for rotation */
    }

    .apology.rotate {
        transform: rotate(180deg); /* Rotate by 180 degrees when toggled */
    }

    /* Apology Title */
    .apology .title {
        font-size: 2.5rem;
        color: #FF66B2;
        margin-bottom: 20px;
        font-weight: bold;
        letter-spacing: 1px;
        text-transform: uppercase;
    }

    /* Apology Message */
    .apology .message {
        font-size: 1.125rem;
        color: #555;
        margin-top: 20px;
        line-height: 1.8;
    }

    .apology .message::before {
        content: "💖";
        font-size: 1.5rem;
        display: block;
        margin-bottom: 20px;
        color: #FF66B2;
    }

    .apology .message::after {
        content: "💖";
        font-size: 1.5rem;
        display: block;
        margin-top: 20px;
        color: #FF66B2;
    }

    /* Special Section */
    .special {
        max-width: 800px;
        margin: auto;
        margin-top: 5rem;
        background-color: #fff;
        padding: 20px;
        border-radius: 15px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        text-align: center;
        margin-bottom: 5rem;
        transition: transform 0.5s ease; /* Smooth transition for rotation */
    }

    .special.rotate {
        transform: rotate(180deg); /* Rotate by 180 degrees when toggled */
    }

    /* Special Title */
    .special .title {
        font-size: 2.5rem;
        color: #66B2FF;
        margin-bottom: 20px;
        font-weight: bold;
        letter-spacing: 1px;
        text-transform: uppercase;
    }

    /* Special Message */
    .special .message {
        font-size: 1.125rem;
        color: #555;
        margin-top: 20px;
        line-height: 1.8;
    }

    .special .message::before {
        content: "🌟";
        font-size: 1.5rem;
        display: block;
        margin-bottom: 20px;
        color: #66B2FF;
    }

    .special .message::after {
        content: "🌟";
        font-size: 1.5rem;
        display: block;
        margin-top: 20px;
        color: #66B2FF;
    }

    /* Responsive Styles */
    @media (max-width: 768px) {
        .apology, .special {
            padding: 30px;
        }

        .apology .title, .special .title {
            font-size: 2rem;
        }

        .apology .message, .special .message {
            font-size: 1rem;
        }
    }
    /* Container for the image gallery */
.image-gallery {
    width: 40%;
    overflow: hidden; /* Hides the overflowed content (images outside the container) */
    margin-top: 2rem;
    justify-content: center;
    margin-bottom: 10rem;
    text-align: center;
    margin-left: 45rem;
}

/* Scrollable container for images */
.image-container {
    display: flex;
    gap: 15px; /* Space between images */
    padding: 10px;
    overflow-x: scroll; /* Enable horizontal scrolling */
    scroll-snap-type: x mandatory; /* Snap scrolling to each image */
}

/* Styling for each image */
.gallery-image {
    width: 200px; /* Fixed width for each image */
    height: auto;
    border-radius: 10px; /* Optional: rounded corners */
    object-fit: cover; /* Makes the image cover the space without distortion */
    scroll-snap-align: start; /* Ensures images snap to the left */
    transition: transform 0.3s ease; /* Smooth zoom effect */
}

/* Optional: Zoom effect when hovered */
.gallery-image:hover {
    transform: scale(1.1);
}

/* Styling for horizontal scrolling behavior on mobile */
.image-container::-webkit-scrollbar {
    height: 8px; /* Scrollbar height */
}

.image-container::-webkit-scrollbar-thumb {
    background-color: rgba(0, 0, 0, 0.5);
    border-radius: 5px;
}

.image-container::-webkit-scrollbar-track {
    background-color: rgba(0, 0, 0, 0.1);
}
@media (max-width: 768px) {
    .image-gallery {
        width: 90%; /* Use 90% width on smaller screens */
        margin-left: auto;
        margin-right: auto;
        padding: 0 15px; /* Add some padding on sides */
    }

    .image-container {
        gap: 5px; /* Reduce the gap between images */
    }

    .gallery-image {
        max-width: 100%; /* Allow images to take full width on mobile */
        width: 100%; /* Adjust width to be fully responsive */
    }
}

</style>

<?php
include "../includes/footer.php";
?>