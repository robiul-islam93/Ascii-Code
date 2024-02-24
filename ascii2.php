


<form method="post" action="">
    <label for="asciiValues">Enter ASCII values (space-separated):</label>
    <input type="text" id="asciiValues" name="asciiValues" required>
    <input type="submit" value="Submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve input from the form
    $asciiWords = $_POST["asciiValues"];
    $asciiArray = explode(' ', trim($asciiWords));

    // Convert ASCII values to characters
    foreach ($asciiArray as $asciiChar) {
        $asciiCode = intval($asciiChar);
        $result = chr($asciiCode);
        echo $result;
    }
}
?>