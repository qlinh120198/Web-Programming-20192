<html>
    <head><title>Date Check</title></head>
<body>
    <?php
    $date = $_POST["date"];
    $two = '[[:digit:]]{2}';
    $month = '[0-1][[:digit:]]';
    $day = '[0-3][[:digit:]]';
    $year = "2[[:digit:]]$two";
    if (preg_match('#^($month)/($day)/($year)$#i', $date)) {
        print "Valid date=$date <br>";
    } else {
        print "Invalid date=$date";
    }
    ?> </body></html>