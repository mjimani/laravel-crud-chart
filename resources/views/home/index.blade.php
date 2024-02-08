<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>

<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">WebSiteName</a>
        </div>

        <ul class="nav navbar-nav">
            <li class="active"><a data-toggle="tab" href="#live">Live</a></li>
            <li><a data-toggle="tab" href="#history">History</a></li>
        </ul>

        <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><span class="glyphicon glyphicon-log-out"></span>Logout</a></li>
        </ul>
    </div>
</nav>

<div class="tab-content">
    <div id="live" class="tab-pane fade in active">
        <div class="container-fluid">
            <h3>Live data</h3>

            @include('line-chart',['tab' => 'page1'])
        </div>
    </div>
    <div id="history" class="tab-pane fade">
        <div class="container-fluid">
            <h3>History data</h3>

            @include('history-chart',['tab' => 'page2'])
        </div>
    </div>
</div>


</body>
</html>
