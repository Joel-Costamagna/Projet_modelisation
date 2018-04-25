<?php
class Observee implements SplSubject
{
  // Ceci est le tableau qui va contenir tous les objets qui nous observent.
  protected $observers = [];
  
  protected $user;
  
  public function attach(SplObserver $observer)
  {
    $this->observers[] = $observer;
  }
  
  public function detach(SplObserver $observer)
  {
    if (is_int($key = array_search($observer, $this->observers, true)))
    {
      unset($this->observers[$key]);
    }
  }
  
  public function notify()
  {
    foreach ($this->observers as $observer)
    {
      $observer->update($this);
    }
  }
  
  public function register($user){
	$this->user = $user;
	$this->notify();
  }
  
  public function getUser()
  {
    return $this->user;
  }
}