<style>

    .navbar-brand,
    .navbar-nav li a {
        line-height: 80px;
        height: 80px;
        padding-top: 0;
    }
    .navbar-nav li a:hover {
        background-color: whitesmoke !important;
        color: grey !important;
    }

    .nav a{
        color: black !important;
        font-size: 1.8em !important;
    }
    .navbar-brand {
        color:#ff0000 !important;;
        font-size:25px;
        font-family: "Microsoft YaHei UI Light";
        font-weight: bold;
    }

</style>
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand">RMIT Service & Support</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                {{--<li class="active"><a href="#">Home<span class="sr-only">(current)</span></a></li>--}}
                <li><a href="http://localhost/WDA-A1/public/">Home<span class="sr-only">(current)</span></a></li>
                <li><a href="http://localhost/WDA-A1/public/FAQ">FAQ</a></li>
                <li><a href="http://localhost/WDA-A1/public/ticket/create">Request a Service</a></li>
                <li><a href="http://localhost/WDA-A1/public/track">Track Progress</a></li>
                <li><a href="http://localhost/WDA-A1/public/its">View</a></li>
            </ul>

            {{--<ul class="nav navbar-nav navbar-right">--}}
                {{--<form class="navbar-form navbar-left" role="search">--}}
                    {{--<div class="form-group">--}}
                        {{--<input type="text" class="form-control" placeholder="Search">--}}
                    {{--</div>--}}
                    {{--<button type="submit" class="btn btn-default">Submit</button>--}}
                {{--</form>--}}
            {{--</ul>--}}
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>