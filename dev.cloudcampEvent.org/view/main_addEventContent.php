<script type="text/javascript">
function disp_sponcer(value)
{
 if(value == 0)
    document.getElementById('display_prev').style.display = 'none';
 else
    document.getElementById('display_prev').style.display = 'block';
   
}
</script>
<div class="clear"></div>
                    
<h1>Submit Developer Event Sponsorships Here (for HP Public Cloud to consider)</h1>

<div class="registration-requirements">
    <p>Submit developer events here. HP Public Cloud Marketing & Developer Relations will evaluate each event and determine which events to sponsor. Consideration is based on many factors. Our goal is to determine sponsorship at least 3 months before each event. If you have any questions, email dave.nielsen AT hp. com</p>
</div>


<form class="fos_user_registration_register form form-horizontal" method="POST" action="addEvent.php">
    
    <div class="form_row">
      <label class="form-lbl required" for="fos_user_registration_form_username">
        <div class="ss-q-title">
          Name of the Event?<span class="required">*</span>
        </div>
        <div dir="ltr" class="ss-q-help ss-secondary-text">The official name of the event URL of the event </div>
      </label>
      
      <input type="text" class="form-txt" required="required" name="name" id="name">
    </div>
    
    <!--
    <div class="form_row">
      <label class="form-lbl " for="fos_user_registration_form_username">
        <div class="ss-q-title">
          URL of the event <span class="required">*</span>
        </div>
        <div dir="ltr" class="ss-q-help ss-secondary-text">Provide URL to sponsorship page, if there is one</div>
      </label>
      
      <input type="text" class="form-txt"  name="event_url" id="event_url">
    </div> -->
    
    <div class="form_row">
      <label class="form-lbl required" for="fos_user_registration_form_username">
        <div class="ss-q-title">
         Where is it located? <span class="required">*</span>
        </div>
        <div dir="ltr" class="ss-q-help ss-secondary-text">Metro Area, State, Country (or Metro Area, Province, Country)</div>
      </label>
      
      <input type="text" class="form-txt" required="required" name="address" id="address">
    </div>
    
    <div class="form_row">
      <label class="form-lbl required" for="fos_user_registration_form_username">
        <div class="ss-q-title">
         When is the event? <span class="required">*</span>
        </div>
        <div dir="ltr" class="ss-q-help ss-secondary-text">Date & Time? Or at least month/year?</div>
      </label>
      
      <input type="text" class="form-txt" required="required" name="event_date" id="event_date">      
    </div>
    
    <div class="form_row">
      <label class="form-lbl required" for="fos_user_registration_form_username">
        <div class="ss-q-title">
         What is the name of the Event Organization? 
        </div>
      </label>      
      <input type="text" class="form-txt"  name="event_org" id="event_org">
    </div>
    
    <div class="form_row">
      <label class="form-lbl required" for="fos_user_registration_form_username">
        <div class="ss-q-title">
         What is the URL of the Event Organization?
        </div>
      </label>      
      <input type="text" class="form-txt"  name="url_event_org" id="url_event_org">
    </div>

    <div class="form_row">
      <label class="form-lbl required" for="fos_user_registration_form_username">
        <div class="ss-q-title">
        When is sponsorship deadline?   <span class="required">*</span>
        </div>
        <div dir="ltr" class="ss-q-help ss-secondary-text">(If unknown, then just leave blank)</div>
      </label>
        <input type="text" class="form-txt" required="required" name="event_sponcership_deadline" id="event_sponcership_deadline">
    </div>

    
    <div class="form_row">
      <label class="form-lbl required" for="fos_user_registration_form_username">
        <div class="ss-q-title">
         How would you describe the event? <span class="required">*</span>
        </div>
        <div dir="ltr" class="ss-q-help ss-secondary-text">The focus of the event (technologies, platforms, languages, industry, etc.) </div>
      </label>
      <textarea name="description"> </textarea>   
    </div>     
       
    <div class="form_row">
      <label class="form-lbl required" for="fos_user_registration_form_username">
        <div class="ss-q-title">
         What is the format? <span class="required">*</span>
        </div>
        <div dir="ltr" class="ss-q-help ss-secondary-text">Single or Multiple-day Conference, Unconference, Meetup, User Group, Hackathon, Other</div>
      </label>
      
      <input type="text" class="form-txt" required="required" name="event_format" id="event_format">
    </div>
 
  
    <div class="form_row">
      <label class="form-lbl required" for="fos_user_registration_form_username">
        <div class="ss-q-title">
         Who from HP will be attending?  <span class="required">*</span>
        </div>
        <div dir="ltr" class="ss-q-help ss-secondary-text">Yourself, someone from HP Cloud? </div>
      </label>
      <input type="text" class="form-txt" required="required" name="event_hp_attend" id="event_hp_attend">
    </div>  
    
    
    
    <div class="form_row">
      <label class="form-lbl required" for="fos_user_registration_form_username">
        <div class="ss-q-title">
         Has this event been sponsored by HP in the past? 
        </div>
      </label>
      
      <input type="radio" class="form-radio"  name="has_event_sponcer_past"  value="1" onchange="disp_sponcer(1)"> Yes
      <input type="radio" class="form-radio"  name="has_event_sponcer_past"  value="0" onchange="disp_sponcer(0)"> No
    </div>     
    
    <div class ="display_prev" style="display:none" id="display_prev">
    
    <div class="form_row">
      <label class="form-lbl required" for="fos_user_registration_form_username">
        <div class="ss-q-title">Years</div>
      </label>     
      <input type="text" class="form-txt"  name="event_hp_sponcer_years" id="event_hp_sponcer_years"> 
    </div>   
    
    <div class="form_row">
      <label class="form-lbl required" for="fos_user_registration_form_username">
        <div class="ss-q-title">
          Previous Funding organization: 
        </div>     
      </label>
      <input type="text" class="form-txt"  name="prev_fund_org" id="prev_fund_org">
    </div>  
   
    <div class="form_row">
      <label class="form-lbl required" for="fos_user_registration_form_username">
        <div class="ss-q-title">
          Previous Sponsorship Level:
        </div>     
      </label>
      <input type="text" class="form-txt" name="prev_sponcer_level" id="prev_sponcer_level">
    </div>  
   
    <div class="form_row">
      <label class="form-lbl required" for="fos_user_registration_form_username">
        <div class="ss-q-title">
          Previous HP participation: 
        </div>     
      </label>
      <input type="text" class="form-txt" name="prev_hp_participation" id="prev_hp_participation">
    </div>  
    
    <div class="form_row">
      <label class="form-lbl required" for="fos_user_registration_form_username">
        <div class="ss-q-title">
         Previous HP sponsorship? 
        </div>     
      </label>
      <input type="text" class="form-txt" name="prev_hp_sponcership" id="prev_hp_sponcership">
    </div>  
    
    
    <div class="form_row">
      <label class="form-lbl required" for="fos_user_registration_form_username">
        <div class="ss-q-title">
          Other non-HP sponsors 
        </div>     
      </label>
      <input type="text" class="form-txt"  name="prev_other_sponcership" id="prev_other_sponcership">
    </div>  
    
    
    </div>
    <!-- end of hp_past_sponcer -->

    <div class="form_row">
      <label class="form-lbl required" for="fos_user_registration_form_username">
        <div class="ss-q-title">
         How many are expected to attend? <span class="required">*</span>
        </div>
        <div dir="ltr" class="ss-q-help ss-secondary-text">Developers? Others? </div>
      </label>
      <input type="text" class="form-txt" required="required" name="event_expected_attend" id="event_expected_attend">
    </div>     
    
        
    <div class="form_row">
      <label class="form-lbl required" for="fos_user_registration_form_username">
        <div class="ss-q-title">
         Attendance demographics
        </div>
      </label>
      <input type="text" class="form-txt"  name="attend_demo" id="attend_demo">
    </div>
      
    <div class="form_row">
      <label class="form-lbl required" for="fos_user_registration_form_username">
        <div class="ss-q-title">
         Why should HP Sponsor this event?
        </div>
      </label>
      <input type="text" class="form-txt"  name="hp_sponcer_reason" id="hp_sponcer_reason">
    </div>
    
    <div class="form_row">
      <label class="form-lbl required" for="fos_user_registration_form_username">
        <div class="ss-q-title">
         What kind of support would you like from HP Cloud?  <span class="required">*</span>
        </div>
        <div dir="ltr" class="ss-q-help ss-secondary-text">Literature, Shwag, HP Cloud Credit Codes, Speakers</div>
      </label>
      <input type="text" class="form-txt" required="required" name="event_hp_support" id="event_hp_support">
    </div>  
    
    
    <div class="form_row">
      <label class="form-lbl required" for="fos_user_registration_form_username">
        <div class="ss-q-title">
         What are the sponsorship options?  <span class="required">*</span>
        </div>
        <div dir="ltr" class="ss-q-help ss-secondary-text">Speaking opportunities, Sponsor table, Shwag, etc.</div>
      </label>
      <textarea name="event_sponcership"> </textarea>   
    </div>
    
    
    <div class="form_row">
      <label class="form-lbl required" for="fos_user_registration_form_username">
        <div class="ss-q-title">
         What is the suggested staffing?
        </div>
      </label>
      <input type="text" class="form-txt"  name="hp_suggest_staffing" id="hp_suggest_staffing">
    </div>
    
    
    <div class="form_row">
      <label class="form-lbl required" for="fos_user_registration_form_username">
        <div class="ss-q-title">
         What is the setup requirements, if known? 
        </div>
      </label>
      <input type="text" class="form-txt"  name="hp_setup_req" id="hp_setup_req">
    </div>
    
   
    
    <div class="form_row">
      <label class="form-lbl required" for="fos_user_registration_form_username">
        <div class="ss-q-title">
         Other details?  <span class="required">*</span>
        </div>
        <div dir="ltr" class="ss-q-help ss-secondary-text">What other details have we missed?</div>
      </label>
      <textarea name="event_other_details"> </textarea>   
    </div>
    
 
    <p align="center">
            <button style="margin-right:340px" class="button btn btn-primary" type="submit" name="submit" value="Submit">Submit</button>         
    </p>
</form>
<div class="clear"></div>
