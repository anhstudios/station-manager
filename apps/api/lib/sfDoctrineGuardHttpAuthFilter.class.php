<?php

/**
 * HTTP Authentication Filter for Symfony 1.4 and sfDoctrineGuardPlugin 5.0.0
 *
 * This class is intended to provide HTTP Authentication to RESTful API's
 * that are built on-top of an application already using 
 * sfDoctrineGuardPlugin.
 *
 * The design is based on a filter design by James McGlinn:
 *  http://james.mcglinn.org/2006/10/symfony-http-authentication-filter/
 *
 * @author Eric Barr <eric.barr@anhstudios.com>
 */
class sfDoctrineGuardHttpAuthFilter extends sfFilter {
  /**
  * Execute filter
  *
  * Checks to see if the http auth provided credentials matches a 
  * user in the database and if not prompts for login information.
  *
  * @param sfFilterChain $filterChain
  */
  public function execute(sfFilterChain $filterChain) {
    // Only execute the filter once
    if ($this->isFirstCall()) {            
      if (!isset($_SERVER['PHP_AUTH_USER'])) {
        $this->sendHeadersAndExit();
      }
      
      $form = new sfGuardFormSignin(null, array(), false);
      
      $form->bind(array(
         'username' => $_SERVER['PHP_AUTH_USER'],
         'password' => $_SERVER['PHP_AUTH_PW']));
      
      $form->disableCSRFProtection();
      
      if (!$form->isValid()) {
        $this->sendHeadersAndExit();
      }
        
      // Sign in the current user using the values returned from the form.
      $user = $this->getContext()->getUser();
      $values = $form->getValues();
      
      $user->signIn($values['user']);
    }
    
    // execute next filter
    $filterChain->execute();
  }
   
  /**
  * Sends HTTP Auth headers and exits.
  */
  private function sendHeadersAndExit() {
    header('WWW-Authenticate: Basic realm="'.sfConfig::get('app_auth_realm', 'Password Required').'"');
    header('HTTP/1.0 401 Unauthorized');
    exit;
  }
}