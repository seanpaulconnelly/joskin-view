<?php $siteurl = 'http://localhost:8888/joskin-view'; 
/* The following URLs should work:
/
/tourney
/tourney/schedule
/tourney/schedule/game-page
/tourney/standings
/tourney/stats
/tourney/stats/stats-team
/tourney/stats/stats-team/stats-player
*/
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>joskin-view</title>
    <meta name="description" content="View example of joskin">
    <meta name="author" content="Sean Connelly">
    <link href="<?php echo $siteurl; ?>/assets/style.css" rel="stylesheet">
    

    <link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700|Titillium+Web:400,600,700' rel='stylesheet' type='text/css'>
    <style type="text/css">
    h1 {
      font-family: 'PT Sans', sans-serif;
    }
    h2 {
      font-family: 'Titillium Web', sans-serif;
    }
    </style>


    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="../assets/js/html5shiv.js"></script>
    <![endif]-->
  </head>
  <body>
    <header>
      <div class='topnav'>
        <div class='container'>
          <div class='row'>
            <div class='span12'>
              <div class='logo-container'>
                <h1><a href="/">RSportz</a></h1>
              </div>
              <h4 class='tagline pull-left'>AAU Inline Hockey</h4>
              <div class="btn-group" data-toggle="buttons-radio">
                <button type="button" class="btn btn-1">Tron</button>
                <button type="button" class="btn btn-2">JOs</button>
                <button type="button" class="btn btn-3">FIRS</button>
                <button type="button" class="btn btn-4">AAU/USARS</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>
    <div class="container">
      <div class="row banner">
        <div class="span10">
          <img src="<?php echo $siteurl; ?>/assets/images/banner-ad.jpg" alt="728x90 Ad"/>
        </div>
        <div class="span2 skin">
          <img src="<?php echo $siteurl; ?>/assets/images/ad-option.jpg" alt="728x90 Ad"/>
        </div>
      </div>