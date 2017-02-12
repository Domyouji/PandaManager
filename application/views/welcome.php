
<html lang="en">
<head>
  <title>Team Banana</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
    /* Set height of the grid so .sidenav can be 100% (adjust if needed) */
    .row.content {height: 1500px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      background-color: #f1f1f1;
      height: 100%;
    }
    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height: auto;} 
    }
  </style>
</head>
<body>

<div class="container-fluid">
  <div class="row content">
    <div class="col-sm-3 sidenav">
      
      <h4>Team Banana</h4>
      <ul class="nav nav-pills nav-stacked">
        <li class="active"><a href="welcome">Home</a></li>
        <li><a href="parts">Parts</a></li>
        <li><a href="#section3">Assemble</a></li>
        <li><a href="history">History</a></li>
        <li><a href="#section3">About</a></li>
      </ul><br>
      

    </div>

    <div class="col-sm-9">
      <h1>Bot Factory (Team Banana)</h1>
      <hr>
      <h2># of parts on hand</h2>
      <h5><span class="glyphicon glyphicon-time"></span> Post by Jane Dane, Sep 27, 2015.</h5>
      <h5><span class="label label-success">new</span></h5><br>
      <p>{part} items</p>
      <br>
       
      <hr>
      <h2># of assembled bots</h2>
      <h5><span class="glyphicon glyphicon-time"></span> Post by John Doe, Sep 24, 2015.</h5>
      <h5><span class="label label-success">new</span></h5><br>
      <p>{assembledBot} items</p>
      <hr>
    
      <h2>$ spent</h2>
      <h5><span class="glyphicon glyphicon-time"></span> Post by John Doe, Sep 24, 2015.</h5>
      <h5><span class="label label-success">new</span></h5><br>
      <p>${spent} spent</p>
      <hr>
          
      <h2># earned</h2>
      <h5><span class="glyphicon glyphicon-time"></span> Post by John Doe, Sep 24, 2015.</h5>
      <h5><span class="label label-success">new</span></h5><br>
      <p>{earned} items</p>
      <hr>

    </div>
  </div>
</div>

<footer class="container-fluid">
  <p>Footer Text</p>
</footer>

</body>
</html>
