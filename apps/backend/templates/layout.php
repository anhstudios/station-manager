<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <?php include_http_metas() ?>
    <?php include_metas() ?>
    <?php include_title() ?>
    <link rel="shortcut icon" href="/favicon.ico" />
    <?php include_stylesheets() ?>
    <?php include_javascripts() ?>
  </head>
  <body>
    <div id="main">
      <div id="header">
        <div id="logo" class="site-section">
          <h1><a href="<?php echo url_for('@homepage'); ?>">Station</a></h1>
        </div>
      </div>
      
      <div id="page">
        <div id="content" class="site-section">
          <?php echo $sf_content ?>
        </div>
      </div>
    </div>  
      
    <div id="footer">
      <div id="footer-content">
        <div id="copyright-notice" class="site-section">
          Copyright &copy; 2010 - ANH Studios
        </div>
      </div>
    </div>
  </body>
</html>
