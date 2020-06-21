<html>
    <head><title>Information</title></head>
    <body>
        <?php
            $email = $_POST["email"];
            $url = $_POST["url"];
            $phone = $_POST["phone"];
            
            if (!preg_match('/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/', $email)) {
                print "Invalid email: $email<br>";
            } else {
                print "Valid email: $email<br>";
            }
            
            if (!preg_match("/^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/", $url)) {
                print "Invalid url: $url<br>";
            } else {
                print "Valid url: $url <br>";
            } 
            
            if (!preg_match('/^[0-9\-\(\)\/\+\s]*$/', $phone)) {
                print "Invalid phone number: $phone<br>";
            } else {
                print "Valid phone number: $phone<br>";
            }
        ?>
    </body>
</html>