<div id="row2">
		<h2 class="spcr-b">Events List</h2>

  <?php foreach ($eventslist as $event) {?>	
		<div>
			<a href="#" target="_blank">
      <h3><?php echo $event['name']?></h3>
      </a>
			<!--<p> Url:<a href="<?php echo $event['event_url']?>"> <?php echo $event['event_url']?> </a></p>-->
      <p>Date: <?php echo date('d/m/y',strtotime($event['event_date'])) ?> </p>
	
		</div>
		<?php }?>
		<hr class="clr">
	</div> <!-- end of div id row2 recently Propsed session-->
