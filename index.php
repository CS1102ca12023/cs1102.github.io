<html>
<head>
<title>Mini Quiz</title>
<style>
        body {
            display: flex;
            align-items: center;
            justify-content: center;
        }
    </style>
</head>
<body>
<?php
                $title = "index.php";
  echo '<div class="center">';
  echo '    <h1>CS1102 - Course Project</h1>';
  echo '    Lets review your learning process about different image compression algorithams. <br>
  Below is a mini quiz. </p>';
  echo '<form action="process.php" method="post">';
    echo '    <p>Do you think the image format of PNG, GIF, and BMP are lossy or lossless?</p>';
    echo '    <input name="ans" type="text">';
    echo '    <input type="submit">';
    echo '</form>';
  echo '<a href="https://www.cs.cityu.edu.hk/">Back to Home page</a>';
  echo '</div>';
  echo '</body>';
  echo '</html>';
?>
</body>
</html>
