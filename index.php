<?php

require_once 'init.php';

$query= $dbc->query("SELECT * FROM books ORDER BY book_id");

$books = [];

while($row= $query->fetch_object()){
  $books[] = $row;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>The Best Books</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/star-rating.min.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->
<body>
    <header class="navbar navbar-inverse navbar-fixed-top wet-asphalt" role="banner">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Zen Books: Recommended Reading List</a>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about-us.php">About Us</a></li>
                </ul>
            </div>
        </div>
    </header><!--/header-->

    <section id="title" class="emerald">        
        <div class="container">
            <div class="row">
                <div class="col-sm-11">                    
                    <p>This website is a list of some of the best books to read in various categories based on many hours of
                         reading and research. This is a reading list for people who want to make their spare time more productive by reading recommended books.
                    </p>
                </div>
            </div>
        </div>
    </section><!--/#title--> 

    <section id="portfolio" class="container">
        <ul class="portfolio-filter">
            <li><a class="btn btn-default active" href="#" data-filter="*">All</a></li>
            <li><a class="btn btn-default" href="#" data-filter=".scifi">Sci-Fi</a></li>
            <li><a class="btn btn-default" href="#" data-filter=".romance">Romance</a></li>
            <li><a class="btn btn-default" href="#" data-filter=".horror">Horror</a></li>
            <li><a class="btn btn-default" href="#" data-filter=".action">Action/Adventure</a></li>
            <li><a class="btn btn-default" href="#" data-filter=".selfhelp">Self Help</a></li>
            <li><a class="btn btn-default" href="#" data-filter=".history">History</a></li>
            <li><a class="btn btn-default" href="#" data-filter=".health">Health</a></li>
            <li><a class="btn btn-default" href="#" data-filter=".guide">Guide</a></li>
        </ul><!--/#portfolio-filter-->
        
        <ul class="portfolio-items col-8">
          <?php foreach($books as $book): ?>
          <li class="portfolio-item <?php echo trim($book->book_genre);?>">
            <div class="item-inner">
              <p><a href="book.php?id=<?php echo trim($book->book_id); ?>"><img src="images/portfolio/<?php echo trim($book->book_thumb);?>"></p>
              <h5><a href="book.php?id=<?php echo trim($book->book_id); ?>"><?php echo trim($book->book_name); ?></a></h5> 
              <div class="rating"><h6>Rating:</h6></div>
            </div>
          </li>  
          <?php endforeach; ?>
        </ul>      
      
    </section><!--/#portfolio-->

    <footer id="footer" class="midnight-blue">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    &copy; 2017 Zen Books. All Rights Reserved.
                </div>
                <div class="col-sm-6">
                    <ul class="pull-right">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="about-us.php">About Us</a></li>
                        <li><a id="gototop" class="gototop" href="#"><i class="icon-chevron-up"></i></a></li><!--#gototop-->
                    </ul>
                </div>
            </div>
        </div>
    </footer><!--/#footer-->

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/main.js"></script>
  <script src="js/star-rating.min.js"></script>
</body>
</html>
