



<form method="post" action="">
    <label for="inputString">Enter a string:</label>
    <input type="text" id="inputString" name="inputString" required>
    <input type="submit" value="Submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve input from the form
    $asciiWord = $_POST["inputString"];

    // Display ASCII values of each character
    for ($i = 0; $i < strlen($asciiWord); $i++) {
        $result = ord($asciiWord[$i]) . " ";
        echo $result;
    }
}

?>