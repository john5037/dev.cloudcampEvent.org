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
   
    $qry = "INSERT INTO `event` (`id`, `name`, `event_url`, `description`, `event_date`, `address`,
`event_org`, `url_event_org`,`event_format`, `event_expected_attend`, `event_hp_attend`,
`has_event_sponcer_past` ,  `event_hp_sponcer_years` ,`prev_fund_org` , `prev_sponcer_level`,
`prev_hp_participation`,`prev_hp_sponcership`,`prev_other_sponcership` ,`attend_demo`, `hp_sponcer_reason`, 
`hp_suggest_staffing`, `hp_setup_req`,`event_hp_support`, `event_sponcership`, `event_other_details`, `event_sponcership_deadline`, `is_active`, `createdat`, `updatedat`)
VALUES
(1, 'Marketingcamp chicago', 'http://www.event.com', 'HP CLOUD Technology for store Backed data in Cloud', '$date', '200 S. Wacker Drive, 15th Floor', 'cloudo', 'http://cloudo.com',
'Unconference', 'Developers', 'Yourself',1,'2010','test_org','silver','developer','speaker','shwag','100','advertisement',
'recruiters','pc,notes','Speakers', 'Speaking opportunities', 'Other Arrangements', '$date', 1, '$date', '$date');";        
    $GLOBALS['o__objDB']->db_altertable($qry);
  }
}

?>