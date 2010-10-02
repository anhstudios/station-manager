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
    Hello, <?php if($sf_user->isAuthenticated()): ?><?php echo $sf_user->getUsername() ?><?php else: ?>Guest<?php endif; ?>!
      
    <?php if(!$sf_user->isAuthenticated()): ?>
      <?php echo link_to('Register', 'sf_guard_register') ?> or <?php echo link_to('Sign in', 'sf_guard_signin') ?>      
    <?php else: ?>
      <?php echo link_to('Sign out', 'sf_guard_signout') ?>
    <?php endif; ?>
    
    <?php echo $sf_content ?>
  </body>
</html>
