<?php

/**
 * user actions.
 *
 * @package    station_manager
 * @subpackage auth
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class userActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
    $this->forward('default', 'module');
  }
  
  public function executeGenerateAuthToken(sfWebRequest $request)
  {
    $this->auth_token = new AuthToken();
    $this->auth_token->User = $this->getUser()->getGuardUser();
    
    $pathInfo = $request->getPathInfoArray();
    $this->auth_token->remote_address = $pathInfo['REMOTE_ADDR'];
    $this->auth_token->remote_port = $pathInfo['REMOTE_PORT'];
    $this->auth_token->save();
    
    $this->user_id = $this->getUser()->getGuardUser()->getId();
    $this->username = $this->getUser()->getGuardUser()->getUsername();
    
    switch ($request->getRequestFormat())
    {
      case 'yaml':
        $this->setLayout(false);
        $this->getResponse()->setContentType('text/yaml');
        break;
    }
  }
}
