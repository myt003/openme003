<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $rangeMatter = $_POST["range_matter"];
    $rangeLooks = $_POST["range_looks"];
    $rangeIQ = $_POST["range_iq"];
    $humorRating = $_POST["humor_rating"];
    $colorDescription = $_POST["color_description"];
    $smallDescribe = $_POST["small_describe"];
    $longDescribe = $_POST["long_describe"];
    $bestScenario = $_POST["best_scenario"];
    $scenarioDate = $_POST["scenario_date"];

    // Perform any additional processing or validation as needed

    // Save the data to a file, database, or perform other actions
    // For example, saving to a text file
    $data = "Range Matter: $rangeMatter\nRange Looks: $rangeLooks\nRange IQ: $rangeIQ\n";
    $data .= "Humor Rating: $humorRating\nColor Description: $colorDescription\n";
    $data .= "Small Describe: $smallDescribe\nLong Describe: $longDescribe\n";
    $data .= "Best Scenario: $bestScenario\nScenario Date: $scenarioDate\n\n";

    // Append data to a file
    file_put_contents('form_data.txt', $data, FILE_APPEND);

    // Redirect to a thank you page or display a success message
    header("Location: thank_you.html");
    exit();
}
?>
