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
class sfGuardHttpAuthSecurityFilter extends sfBasicSecurityFilter {
  /**
  * Execute filter
  *
  * Checks to see if the http auth provided credentials matches a 
  * user in the database and if not prompts for login information.
  *
  * @param sfFilterChain $filterChain
  */
  public function execute($filterChain) {
    if (!isset($_SERVER['PHP_AUTH_USER'])) {
      $this->sendHeadersAndExit();
    }
    
    // Attempt to sign in the user via http auth.
    $form = new sfGuardFormSignin(null, array(), false);    
    $form->bind(array('username' => $_SERVER['PHP_AUTH_USER'],
                      'password' => $_SERVER['PHP_AUTH_PW']));
    
    if (!$form->isValid()) {
      $this->sendHeadersAndExit();
    }
    
    // Sign in the current user using the values returned from the form.
    $this->getContext()->getUser()->signIn($form->getValue('user'));
    
    parent::execute($filterChain);
  }

  /**
   * Forwards the current request to the secure action.
   *
   * @throws sfStopException
   */
  protected function forwardToSecureAction()
  {    
    $this->sendHeadersAndExit();
  }

  /**
   * Forwards the current request to the login action.
   *
   * @throws sfStopException
   */
  protected function forwardToLoginAction()
  {
    $this->sendHeadersAndExit();
  }
  
  /**
  * Sends HTTP Auth headers and exits.
  */
  protected function sendHeadersAndExit() {
    // If a user was previously signed in sign them out to prevent
    // being able to access other url's as the old user.
    if ($this->context->getUser()->isAuthenticated()) {
      $this->getContext()->getUser()->signOut();
    }
  
    header('WWW-Authenticate: Basic realm="'.sfConfig::get('app_auth_realm', 'Password Required').'"');
    header('HTTP/1.0 401 Unauthorized');
    exit;
  }
}
