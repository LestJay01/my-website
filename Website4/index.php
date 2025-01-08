<?php
include 'includes/header.php';
?>

<?php
ini_set('session.gc_maxlifetime', 1800);
session_start();

if($_SERVER["REQUEST_METHOD"] == "POST"){

    $date = $_POST["date"];

    $correct_date = "2021-04-07";

    if($date == $correct_date){

        header("Location: pages/sorry.php");

        $_SESSION["is_authorized"] = true;

        exit;
    } else{
        $error = "Wrong date. you probably shouldn't be here.";
    }

    
}
?>

<div class="form">
    <form action="" method="POST" class="styled-form">
        <label for="date">Enter a date (YYYY-MM--DD)</label>
        <input type="date" id="date" name="date" required>
        <button type="submit">Submit</button>
    </form>
</div>


<?php
if(isset($error)){
    echo "<p style='color:red;'>$error</p>";

}
?>
<?php
include 'includes/footer.php';
?>

<style>
@media (max-width: 768px) {
    .form {
        width: 90%; /* Use 90% width on smaller screens */
        padding: 15px; /* Reduce padding on smaller screens */
    }

    .styled-form input[type="date"],
    .styled-form button {
        font-size: 1rem; /* Ensure text size is legible on mobile */
    }

    .styled-form label {
        font-size: 1rem; /* Adjust label font size */
    }
}

</style>