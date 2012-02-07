
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <title>JSON</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

        <style>
            #message{
                color:red;
            }

            .fb_photo{
                display:block;
                padding:0 !important;
            }
            .fb_video{
                padding:0 !important;
            }

            .fb_row{
                padding:10px;
            }
            .fb_row span{
                margin-left: 20px;
            }
            .video_link{
                display:block;
                height:90px;
                width:120px;
                text-align: center;
            }
            .video_link img{
                margin-top: 29px;
            }
            .fb_metadata{
                display:block;
                color: #6F6F6F;
                font-size: small;
            }
        </style>

    </head>
    <body onload="doSearch('kathmandu')">
        <script type="text/javascript" src="base.js"></script>
        <div id="search_header">
            Searching 
            <span id="status"><img alt="Loading... "src="img/loading.gif"></span>
        </div>
        <div id="result">
        </div>
        <span id="older_holder" style="display:none;">
            <a id="older" href="javascript:showOlder()">Older...</a>
            <span id="status1"><img alt="Loading... "src="img/loading.gif"></span>
        </span>
    </body>
</html>