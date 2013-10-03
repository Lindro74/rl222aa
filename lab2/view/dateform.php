<?php
	class showdate
	{
		public function HTMLdate()
		{
			date_default_timezone_set ("Europe/Stockholm");
			$today = date("j F  Y. ");
			$dag = explode(";", "Måndag;Tisdag;Onsdag;Torsdag;Fredag;Lördag;Söndag" ); 
			$date = date("d");
			$mytime = date("H:m:s");
			$weekday = date("l, ", strtotime($date));
			$mytime = $dag[date("N")] .' den ' . $today . 'Klockan är: [' . $mytime . ']';
		
		return $mytime;
		}
	}
