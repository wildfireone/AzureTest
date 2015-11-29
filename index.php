<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Consuming Twitter Webserver</title>
    <script>
        window.onload = function() {
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (xhttp.readyState == 4 && xhttp.status == 200) {
                    document.getElementById("demo").innerHTML = xhttp.responseText;
                }
            };
            xhttp.open("GET", "http://nodetestrgu.azurewebsites.net/", true);
            xhttp.send();
        }

    </script>
</head>
<body>
<div id="twitter" >

</div>
</body>
</html>