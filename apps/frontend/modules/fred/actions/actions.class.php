<?php

/**
 * job actions.
 *
 * @package    jobeet
 * @subpackage job
 * @author     Your name here
 * @version    SVN: : actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class jobActions extends sfActions
{
  public function executeIndex(sfWebRequest )
  {
    ->categories =Doctrine_Core::getTable('fred')->getWithJobs();  
  }

  public function executeShow(sfWebRequest )
  {
    ->job= Doctrine_Core::getTable('fred')->find(array(->getParameter('id')));
    ->forward404Unless(->job);
  }
  
  public function executeNew(sfWebRequest )
{
  ->form = new JobeetJobForm();
}
 
public function executeCreate(sfWebRequest )
{
  ->form = new JobeetJobForm();
  ->processForm(, ->form);
  ->setTemplate('new');
}
 



public function executeEdit(sfWebRequest )
{
  ->form = new JobeetJobForm(->getRoute()->getObject());
}
 
public function executeUpdate(sfWebRequest )
{
  ->form = new JobeetJobForm(->getRoute()->getObject());
  ->processForm(, ->form);
  ->setTemplate('edit');
}
 
public function executeDelete(sfWebRequest )
{
  ->checkCSRFProtection();
 
   = ->getRoute()->getObject();
  ->delete();
 
  ->redirect('job/index');
}
 
protected function processForm(sfWebRequest , sfForm )
{
  ->bind(
    ->getParameter(->getName()),
    ->getFiles(->getName())
  );
 
  if (->isValid())
  {
     = ->save();
 
    ->redirect('job_show', );
  }
}
  
 
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
}
