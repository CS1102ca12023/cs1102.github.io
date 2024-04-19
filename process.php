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
    echo '<a href="https://www.cs.cityu.edu.hk/">Back to Home page</a>';
?>
</body>
</html>