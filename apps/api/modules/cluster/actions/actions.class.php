<?php

/**
 * cluster actions.
 *
 * @package    station_manager
 * @subpackage cluster
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class clusterActions extends sfActions
{
  public function executeList(sfWebRequest $request)
  {
    $this->clusters = $this->getRoute()->getObjects();
    $this->forward404Unless($this->clusters);
  }
  
  public function executeShow(sfWebRequest $request)
  {
    $this->cluster = $this->getRoute()->getObject();
    $this->forward404Unless($this->cluster);
  }
}
