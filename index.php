<html>
    <head>
        <meta charset="UTF-8">
        <title>Accident</title>
        <link href="css/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyACpxX4bv7sfT_X9lvabuLaSsaQ8YcBQ0U"></script>
        <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
    </head>
    <body>
        <div class="container" id="main">
            <div class="panel panel-default">
                <!-- Head banner -->
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <img src="banner/head.jpg" class="img-responsive">
                        </div>
                    </div>
                </div>
                <!-- Main Body -->
                <div class="panel-body">
                    <div class="row ">
                        <!-- Login Layout -->
                        <div class="col-lg-3">
                            <div class="row">
                                <div id="login" class="col-lg-12">
                                    <script type="text/javascript">
                                        $("#login").load("login.php");
                                    </script>
                                </div>
                            </div>
                            <!-- Show accident details -->
                            <div class="row">
                                <div class="col-lg-12 panel-body">
                                    <div class="table-bordered">
                                        forum
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Map -->
                        <div class="col-lg-9" id="map">
                            <script type="text/javascript">
                                $("#map").load("map.php");
                            </script>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
