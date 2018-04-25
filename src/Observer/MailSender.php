<?php
class MailSender implements SplObserver
{
  
  public function __construct()
  {
	  
  }
  
  public function update(SplSubject $obj)
  {
    mail($obj->getUser()->getMailUser(), 'confirmation enregistrement !', 'Vous etes bien enregistrer : ', 'From: ');
  }
}