<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>MIT IEEE/ACM</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Sticky-Footer CSS -->
    <link href="css/sticky-footer.css" rel="stylesheet">

    <!-- Blog CSS -->
    <link href="css/blog.css" rel="stylesheet">

  </head>

  <body>
	<div id="wrap"> <!-- Sticky Footer Wrap Start -->
	
    <!-- Static navbar -->
    <div class="navbar navbar-static-top">
      <div class="container">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".nav-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="http://web.mit.edu/"><img src="images/mit-logo.png" alt="mit-logo" width="64" height="32" /></a>
        <div class="nav-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="index.html">Home</a></li>
            <li><a href="exec.html">About Us</a></li>
            <li class="active"><a href="blog.php">Blog</a></li>
            <li><a href="events.html">Programs & Events</a></li>
            <li><a href="partners.html">Partners</a></li>
          </ul>
          <ul class="nav navbar-nav pull-right">
            <li><a href="blog/"><button type="button" class="btn btn-small btn-danger">Login</button></a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>

            
    <div class="container">

      <?php
        
        /* ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
        Cute news Init
        ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ */
        
        //Custom Template
        $template = "Prototype"; 
        $number = "10"; // Number of articles per page
                 
        if($_POST['do'] == "search" or $_GET['dosearch'] == "yes") {
            $subaction = "search";
            $dosearch = "yes";
            include("blog/search.php");
          }
        elseif($_GET['do'] == "archives") {
            include("blog/show_archives.php");
          }
        elseif($_GET['do'] == "stats") {
            echo "You can download the stats addon and include it here to show how many news, comments … you have";
            /* include("$path/stats.php"); */ 
          }
        else{ include("blog/show_news.php"); }

?>


<!-- TEMPLATE
      <div class="post">
        <h1><a>Header</a></h1>
		
    		<span class="post-details">30 Jul 2013 | By: Admin</span>
		
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla nunc enim, sodales vitae justo et, sagittis scelerisque orci. Phasellus eros diam, rhoncus at sodales a, posuere viverra mauris. Etiam et dignissim justo. Nullam in tincidunt dolor, eget pretium velit. Nam non purus lorem. Cras convallis nulla nibh, in iaculis sem tempor a. Quisque luctus arcu vitae consequat blandit. In sit amet tellus pretium, sodales nibh quis, suscipit mi. Maecenas at nisi lacus.</p>
      </div>

      <hr />
-->
  
    </div> <!-- Container End -->

  </div>	<!-- Sticky Footer Wrap End -->
    
  <div id="footer">
    <div class="container">
      <p class="text-muted credit">
        &copy; 2013 MIT IEEE/ACM Club, all rights reserved.
      </p>
    </div>
  </div>

  <!-- Bootstrap core JavaScript
  ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.js"></script>

</body>
</html>