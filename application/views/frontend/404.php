<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page Not Found - Cloudi5</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Otomanopee+One&family=Varela+Round&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<style>
    /*====================== 404 page =======================*/
    .page_404 {
        padding: 20px 0;
        background: #fff;
        font-family: 'Varela Round', sans-serif;
    }

    .page_404 img {
        width: 100%;
    }

    .four_zero_four_bg {
        background-image: url("../asset/images/404/not-found.svg");
        height: 400px;
        background-position: center;
        background-repeat: no-repeat;
    }
    .contant_box_404 h3 {
        font-size: 25px;
        color: black;
    }
    .contant_box_404 h3 span{
        font-size: 25px;
        color: #ff1100;
    }
    .contant_box_404 h5 {
        font-size: 20px;
        color: #868686;
    }

    .contant_box_404 {
        margin-top: -50px;
        margin-bottom: 10px;
    }
    .btn-cyan{
        color: #fff;
        background-color: #009688;
        border-color: none;
    }
    .btn-cyan:hover{
        color: #fff;
        background-color: #01655b;
        border-color: none;
    }
    .btn-gif img{
        width: 100px;
        height: 100px;
    }
    .home-img{
        height: 20px !important;
        width: 20px !important;
    }
</style>

<body>
    <section class="page_404">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 ">
                    <div class="col-sm-10 col-sm-offset-1 text-center">
                        <div class="four_zero_four_bg">
                            <h1 class="text-center "></h1>
                        </div>
                        <div class="contant_box_404">
                            <h3><span>Whoops!</span> We can't seem to find the page you're looking for.</h3>
                            <h5>This is not the page you were looking.</h5>
                        </div>
                        <div class="btn-gif">
                            <a class="btn btn-cyan" title="Home Page" href="<?php echo base_url(); ?>"><img src="<?php echo base_url(); ?>asset/images/404/home.png" class="home-img" alt="home"> Home Page</a><img src="<?php echo base_url(); ?>asset/images/404/giphy.gif" alt="hand-pointing">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>