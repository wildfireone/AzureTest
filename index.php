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

                    var tweets = JSON.parse(xhttp.responseText);
                    var tweetstring = "";
                    var tweet;
                    for (tweet in tweets.statuses)
                    {
                        tweetstring = tweetstring + tweet;
                        //tweetstring = tweetstring + "<h3>" + tweet.user.name + "</h3> </br>";
                        //tweetstring = tweetstring + "<p>"  + tweet.text + "</p>"
                    }

                    document.getElementById("twitter").innerHTML = tweetstring;
                }
            };
            xhttp.open("GET", "http://nodetestrgu.azurewebsites.net/", true);
            xhttp.send();
        }

    </script>
</head>
<body>
<header>
    <h1>Header Div</h1>
</header>
<main>
    <h2> Main content </h2>
</main>
<aside id="twitter" >

</aside>

</body>
</html>