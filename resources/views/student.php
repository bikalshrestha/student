<!doctype html>
<html>
    <head>
        <meta content="text/html; charset=UTF-8" http-equiv="Content-Type">
        <meta content="IE=edge" http-equiv="X-UA-Compatible">
        <meta content="width=device-width, initial-scale=1" name="viewport">
        <link rel="icon" href="{{ URL::asset('images/favicon.png') }}" type="image/png"> 
        <title><?php echo $data['title']; ?></title>
        <meta content="<?php echo $data['meta_description'] ?>" name="description">
        <meta content="Bikal Shrestha" name="author">
        <meta content="<?php echo $data['keywords']; ?> }}" name="keywords">
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        <link href="{{ asset('/css/style.css') }}" rel="stylesheet">
    </head>

    <body>
        <div class="wrapper">
            <div class="container">
                <h1>List of Students in a college</h1>

                <ul class="nav nav-tabs" role="tablist">
                    <li class="active"><a href="#enrolled" role="tab" data-toggle="tab">Enrolled</a></li>
                    <li class=""><a href="#pending" role="tab" data-toggle="tab">Pending</a></li>
                    <li class=""><a href="#dropped" role="tab" data-toggle="tab">Dropped</a></li>
                </ul>

                <div class="tab-content">
                    <div class="tab-pane active" id="enrolled">
                    </div>

                    <div class="tab-pane" id="pending">
                    </div>

                    <div class="tab-pane" id="dropped">
                    </div>
                </div>

            </div>
            <footer>
                <div class="container">
                    <p>All Rights Reserved @ 2018</p>
                </div>
            </footer>
        </div>
    </body>


    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script type="text/javascript">
      $(document).ready(function(){
            function getPaginationPage(url) {
                var chunks = url.split('?');
                var baseUrl = chunks[0];
                var querystr = chunks[1].split('&');
                var pg = 1;
                for (i in querystr) {
                    var qs = querystr[i].split('=');
                    if (qs[0] == 'page') {
                        pg = qs[1];
                        break;
                    }
                }
                return pg;
            }
            var sitename = '/student/public/';
            var baseURL = document.location;
            
            $('#enrolled').on('click', '.pagination a', function(e) {
                e.preventDefault();
                var page = getPaginationPage($(this).attr('href'));
                var url = baseURL.origin + sitename + 'student/status/enrolled';
                $.ajax({
                    url: url,
                    data: { page: page },
                    success: function(data) {
                        $('#enrolled').html(data);
                    }
                });
            });
            
            $('#pending').on('click', '.pagination a', function(e) {
                e.preventDefault();
                var page = getPaginationPage($(this).attr('href'));
                var url = baseURL.origin + sitename + 'student/status/pending';
                $.ajax({
                    url: url,
                    data: { page: page },
                    success: function(data) {
                        $('#pending').html(data);
                    }
                });
            });
            
            $('#dropped').on('click', '.pagination a', function(e) {
                e.preventDefault();
                var pg = getPaginationPage($(this).attr('href'));
                var url = baseURL.origin + sitename + 'student/status/dropped';
                $.ajax({
                    url: url,
                    data: { page: pg },
                    success: function(data) {
                        $('#dropped').html(data);
                    }
                });
            });
            $('#enrolled').load(baseURL.origin + sitename + 'student/status/enrolled?page=1');
            $('#pending').load(baseURL.origin + sitename + 'student/status/pending?page=1');
            $('#dropped').load(baseURL.origin + sitename + 'student/status/dropped?page=1');
         
   
            
        });
    </script>