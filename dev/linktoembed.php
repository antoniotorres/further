<html>
    <head>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js" type="text/javascript"></script>
        <script language="javascript" type="text/javascript">
        $(document).ready(function(){
        $('a').each(function() {
        
        var yturl= /(?:https?:\/\/)?(?:www\.)?(?:youtube\.com|youtu\.be)\/(?:watch\?v=)?([\w\-]{10,12})(?:&feature=related)?(?:[\w\-]{0})?/g;
        var ytplayer= '<iframe width="640" height="360" src="http://www.youtube.com/embed/$1" frameborder="0" allowfullscreen></iframe>';
        
        var url = $(this).attr('href');
        if (url != null)
        {
        var matches = url.match(yturl);
        if (matches)
        {
        var embed = $(this).attr('href').replace(yturl, ytplayer);
        var iframe = $(embed);
        
        iframe.insertAfter(this);
        $(this).remove();
        }
        }
        });
        });
        </script>
    </head>
    <body>
        <div class="a">https://www.youtube.com/watch?v=QOEtRKjaCi0</div>
    </body>
</html>