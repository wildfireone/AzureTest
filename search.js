/**
* @Author: John Isaacs <john>
* @Date:   29-Mar-172017
* @Filename: search.js
* @Last modified by:   john
* @Last modified time: 31-Mar-172017
*/



// After the API loads, call a function to enable the search box.
function handleAPILoaded() {
  console.log("enabling search");
  $('#search-button').attr('disabled', false);
}

// Search for a specified string.
function search() {
  console.log("searching");
  var q = $('#query').val();
  var request = gapi.client.youtube.search.list({
    q: q,
    part: 'snippet'
  });

  request.execute(function(response) {

    var htmlstring = "";
    var videos = response.result.items;
    console.log(response);
    $('#search-container').append("<ul>");
    for(var i=0; i<5; i++){
      var title = videos[i].snippet.title;
      $('#search-container').append("<li>"+title+"</li>");

    }
    $('#search-container').append("</ul>");
  });
}
