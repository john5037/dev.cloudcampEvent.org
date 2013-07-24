<?php


	/*
	Class Event
	Use :: Event Class Used For  Event Data
	*/
	
class Event extends common{

	public $eventId = 1;
	
	public function addEventData()
	{
	 //var_dump($data);exit;
    $date = date("y-m-d h:m:s");
   
    $qry = "INSERT INTO event (id ,name ,event_url,description ,event_date ,
            address ,event_format ,event_expected_attend ,
            event_hp_attend ,event_hp_support ,event_sponcership ,event_other_details ,
            event_sponcership_deadline ,is_active ,createdat ,updatedat
            )
          VALUES (1, 'Marketingcamp chicago','http://event.com' ,'HP CLOUD Technology for store Backed data in Cloud',
           '$date', '200 S. Wacker Drive, 15th Floor','Unconference', 'Developers', 'Yourself',
            'Speakers', 'Speaking opportunities', 'Other Arrangements', '$date', '1', '$date', '$date')";
    $GLOBALS['o__objDB']->db_altertable($qry);
  }
}

?>