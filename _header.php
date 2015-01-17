<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <link rel="icon"
      type="image/ico"
      href="/favicon.ico" />

    <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="/css/sticky-footer-navbar.css" />
    <link rel="stylesheet" href="/css/content.css" />
    <link rel="stylesheet" href="/css/carousel.css" />
    <link rel="stylesheet" href="/css/parallax.css" />
    <link rel="stylesheet" href="/css/blogs.css" />

    <script src="/jquery/jquery.min.js" type="text/javascript"></script>
    <script src="/jquery/jquery.stellar.min.js" type="text/javascript"></script>
    <script src="/handlebars/handlebars.js" type="text/javascript"></script>

<title>
<?php
echo "Doug Ilijev | ";
echo $page;
?>
</title>

<script type="text/javascript">
//<![CDATA[
  $(document).ready(function() {
    $(".nav.navbar-nav > li#<?php echo $page; ?>").addClass("active");
  });
//]]>
</script>

  </head>
  <body>
    <div id="wrap">

    <!-- Fixed navbar -->
    <div class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="/"><strong>Doug Ilijev</strong></a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li id="Home"><a href="/">Home</a></li>
            <li id="Resume"><a href="/resume.pdf" target="_blank">Resume</a></li>
            <li id="Blogs"><a href="/blogs.php">Blogs</a></li>
            <!--
            <li id="Resume"><a href="/resume.php">Resume</a></li>
            <li id="Projects"><a href="/projects.php">Projects</a></li>
            <li id="Contact"><a href="/contact.php">Contact</a></li>
            -->
          </ul>
        </div><!-- /.nav-collapse -->
      </div>
    </div>

    <div class="content">
    <!-- page-specific content here -->
