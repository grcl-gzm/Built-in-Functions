<!-- 
Name: Graciela Gozum
Date: 15/01/26
Section: WD-201
-->

<?php
$school = "HOLY ANGEL UNIVERSITY";
$fname = "Graciela Gozum";
$sentence = "How much wood would a woodchuck chuck if a woodchuck could chuck wood?";
$exampleText = "She sells seashells by the sea shore";

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Built-in String Functions</title>
    <link rel="stylesheet" href="functions.css">
</head>
<body>

<?php include 'includes/header.php'; ?>

<div class="container">
    <h2>BUILT-IN STRING FUNCTIONS</h2>

    <h3>Changing the Case of Characters</h3>
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th>#</th>
                <th>Instruction</th>
                <th>Function</th>
                <th>Output</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th>1</th>
                <td>Lowercase</td>
                <td>strtolower()</td><td><?= strtolower($school) ?></td>
            </tr>
            <tr>
                <th>2</th>
                <td>Uppercase</td>
                <td>strtoupper()</td><td><?= strtoupper($school) ?></td>
            </tr>
            <tr>
                <th>3</th>
                <td>Capitalize Words</td>
                <td>ucwords()</td><td><?= ucwords(strtolower($school)) ?></td>
            </tr>
        </tbody>
    </table>

    <h3>Counting Characters and Words</h3>
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th>#</th>
                <th>Instruction</th>
                <th>Function</th>
                <th>Input</th>
                <th>Output</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th>1</th>
                <td>Number of Characters</td>
                <td>strlen()</td><td>Graciela Gozum</td><td><?= strlen($fname) ?></td>
            </tr>
            <tr>
                <th>2</th>
                <td>Number of Words</td>
                <td>str_word_count()</td><td>Graciela Gozum</td><td><?= str_word_count($fname) ?></td>
            </tr>
        </tbody>
    </table>

    <h3>Removing and Replacing Characters</h3>
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th>#</th>
                <th>Instruction</th>
                <th>Function</th>
                <th>Input</th>
                <th>Output</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th>1</th>
                <td>Remove whitespace from left</td>
                <td>ltrim()</td>
                <td>hHello Baymax!!</td><td><?= ltrim("hHello Baymax!!",'h') ?></td>
            </tr>
            <tr>
                <th>2</th>
                <td>Remove whitespace from right</td>
                <td>rtrim()</td>
                <td>I am Groot!?</td><td><?= rtrim("I am Groot!?",'?') ?></td>
            </tr>
            <tr>
                <th>3</th>
                <td>Remove whitespace from both sides</td>
                <td>trim()</td>
                <td>[[Hooray]]</td><td><?= trim("[[Hooray]]","[]") ?></td>
            </tr>
            <tr>
                <th>4</th>
                <td>Replace word</td>
                <td>str_replace()</td>
                <td><?= $sentence?></td><td><?= str_replace("wood", "stick", $sentence) ?></td>
            </tr>
            <tr>
                <th>5</th>
                <td>Case-insensitive replace</td>
                <td>str_ireplace()</td>
                <td><?= $exampleText?><td><?= str_ireplace("seashells", "PEARLS", $exampleText) ?></td>
            </tr>
            <tr>
                <th>6</th>
                <td>Repeat string</td>
                <td>str_repeat()</td>
                <td>Meow</td><td><?= str_repeat("Meow ", 3) ?></td>
            </tr>
        </tbody>
    </table>

    <h3>Other Advanced String Functions</h3>
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th>#</th>
                <th>Function</th>
                <th>Output</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th>1</th>
                <td>substr()</td>
                <td><?= substr($exampleText, 0, 10) ?></td>
            </tr>
            <tr>
                <th>2</th>
                <td>strpos()</td>
                <td><?= strpos($exampleText, "shells") ?></td>
            </tr>
            <tr>
                <th>3</th>
                <td>str_pad()</td>
                <td><?= str_pad("HELLO", 11, "<3") ?></td>
            </tr>
            <tr>
                <th>4</th>
                <td>str_shuffle()</td>
                <td><?= str_shuffle("DERPY") ?></td>
            </tr>
            <tr>
                <th>5</th>
                <td>str_repeat() with substring</td>
                <td><?= str_repeat(substr($exampleText, 0,5), 4) ?></td>
            </tr>
            <tr>
                <th>6</th>
                <td>strrev()</td>
                <td><?= strrev("EVIL") ?></td>
            </tr>
            <tr>
                <th>7</th>
                <td>ucwords()</td>
                <td><?= ucwords("chiikawa world tour!!!") ?></td>
            </tr>
            <tr>
                <th>8</th>
                <td>chunk_split()</td>
                <td><?= chunk_split("MARUSHIN", 2, "-") ?></td>
            </tr>
            <tr>
                <th>9</th>
                <td>strtoupper()</td>
                <td><?= strtoupper("yipeee!!") ?></td>
            </tr>
        </tbody>
    </table>

</div>

<?php include 'includes/footer.php'; ?>

</body>
</html>