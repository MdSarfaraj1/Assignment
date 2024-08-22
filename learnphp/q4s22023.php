<!-- Design a web page using HTML and PHP that inputs a sentence in a textbox and show the sentence
in another textbox by changing each word reverse upper case by pressing “REVERSE” submit button.
For e.g. String : “We are learning php”
Output : “EW ERA GNINRAEL PHP”
[Inbuilt library functions may be used where needed -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reverse and Uppercase Sentence</title>
</head>
<body>
    <h1>Reverse Each Word and Convert to Uppercase</h1>
    <form  method="post">
        <label for="sentence">Enter a sentence:</label>
        <input type="text" id="sentence" name="sentence" required>
        <input type="submit" name="submit" value="REVERSE">
    </form>
</body>
</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the input sentence from the form
    $sentence = trim($_POST['sentence']);
    // Split the sentence into words
    $words = explode(' ', $sentence);
    $reversedWords = array_map(function($word) {
        return strtoupper(strrev($word));
    }, $words);
    $result = implode(' ', $reversedWords);

    echo '<textarea readonly>' .$result. '</textarea>';

}
?>
