    <!-- Javascript -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>

    <script>
        $("#searchterm").keyup(function(e){
            var q = $("#searchterm").val();
            $.getJSON("http://en.wikipedia.org/w/api.php?callback=?",
                {
                    srsearch: q,
                    action: "query",
                    list: "search",
                    format: "json"
                },
                function(data) {
                    $("#results").empty();
                    $("#results").append("<p>Results for <b>" + q + "</b></p>");
                    $.each(data.query.search, function(i,item){
                        $("#results").append("<div><a href='http://en.wikipedia.org/wiki/" + encodeURIComponent(item.title) + "'>" + item.title + "</a><br>" + item.snippet + "<br><br></div>");
                    });
                });
        });
    </script>

    </body>
</html>
