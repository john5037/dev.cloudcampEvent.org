<?php

include_once("model/Model.php");

class Controller {
	public $model;
	
	public function __construct($o__ObjDB){
    $this->model = new Model($o__ObjDB);
    
  }
	public function invoke()
	{
      $event_data=$this->model->displayEvent();
      $eventslist = $this->model->eventList();
      if($event_data){
        $address= $event_data[0]['address'];
    	
    	  $locationData=  $this->model->displayEventMap($address);
    	  
      }
      include 'view/homepage.php';
	
	}
	public function addEvent()
  {
    // if data is submitted then save it
    if( isset($_POST) && ( isset($_POST['submit']) && $_POST['submit']=='Submit')){
      // Here we have to save into database
      // change the date format for mysql compatable
      $_POST['event_date'] =  date('Y-m-d h:i:s',strtotime($_POST['event_date']));
      $_POST['event_sponcership_deadline'] =  date('Y-m-d h:i:s',strtotime($_POST['event_sponcership_deadline']));
      
      $this->model->saveEvent($_POST);
       
       // Now redirect to homepage
       header("Location:index.php");
    }
    
    include "view/addEvent.php";
  }
}

?>