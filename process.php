<html>
<head>
    <title>Question </title>
    <style>
        body {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            height: 100vh;
            text-align: center;
            background-color: #86a7db
        }
    </style>
</head>
<body>


<?php
    $ans = $_POST["ans"];
    if ($ans == 'lossless') {
        echo "Correct! You've chosen the right answer.";
    } else {
        echo "Oops! That's not right. The correct answer is lossless. 
        <br> Let's revise the web page again, 
        <br>and distinguish understand different image compression algorithams.";
    }
    echo '<br>';
    echo '<a href="https://cs1102ca12023.github.io/cs1102.github.io/">Back to Home page</a>';
?>
</body>
</html>
