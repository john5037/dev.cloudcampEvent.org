<?php

include_once("model/Event.php");
include_once("model/geocoder.php");
class Model {

  public function __construct($o__ObjDB)
  {
    $this->oObjDB = $o__ObjDB;
    $this->event = new Event();
    //$this->Coding = new Coding();
  }
  
	
	public function saveEvent($data){
	
	  $keys= array();
	  foreach($data as $key=>$fields){	    
	    $keys[] = ($data["$key"] != '') ? $data["$key"] : '-';    	    
	    }
    
    // unset the last element    
    unset($keys[count($data)-1]);
    // now implode with comman
    $value = implode("','",$keys);
    
    

    //var_dump($data);exit;
    $qry = "INSERT INTO event (id, name, address,event_date,
event_org, url_event_org, event_sponcership_deadline,description,event_format, event_hp_attend,
has_event_sponcer_past ,event_hp_sponcer_years ,prev_fund_org , prev_sponcer_level,
prev_hp_participation,prev_hp_sponcership,prev_other_sponcership ,event_expected_attend,attend_demo, hp_sponcer_reason, 
 event_hp_support, event_sponcership, hp_suggest_staffing, hp_setup_req, event_other_details)
            
            VALUES (NULL ,'$value');";
   
    return $this->oObjDB->db_altertable($qry);
    
  }
  
  
  
  public function displayEvent()
  {
			$event_qry = "SELECT * from event  ORDER BY event_date DESC LIMIT 1 ";
		  $event_data = $this->oObjDB->db_accesstable($event_qry);
		  if($event_data)
		    return $event_data;
		  else{
		       // First we have to create Data
           $this->event->addEventData();  
           
        	 $event_qry = "SELECT * from event  ORDER BY event_date DESC LIMIT 1 ";
		       return  $this->oObjDB->db_accesstable($event_qry);
		   }
  }
  public function eventList()
  {
    $eventId = $this->event->eventId;
    
    $Event_qry = "SELECT * from event";
  	$Event_data = $this->oObjDB->db_accesstable($Event_qry);
		return $Event_data;
    
  }
  public function displayEventMap($address)
  {
    $geoCoder = new geocoder($address);
    return $geoCoder->getResult();
    
  }	
}

?>