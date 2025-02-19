<?php
			$miesiac = date("M");
			$dzien = date("l");
			switch ($dzien) {
				case 'Monday':
				$dzien = "poniedziałek";
				break;
				case 'Tuesday':
				$dzien = "wtorek";
				break;
				case 'Wednesday':
				$dzien = "środa";
				break;
				case 'Thursday':
				$dzien = "czwartek";
				break;
				case 'Friday':
				$dzien = "piątek";
				break;
				case 'Saturday':
				$dzien = "sobota";
				break;
				case 'Sunday':
				$dzien = "niedziela";
				break;
			}
			switch ($miesiac) {
				case 'Jan':
				$miesiac = "Styczeń";
				break;
				case 'Feb':
				$miesiac = "Luty";
				break;
				case 'Mar':
				$miesiac = "Marzec";
				break;
				case 'Apr':
				$miesiac = "Kwiecień";
				break;
				case 'May':
				$miesiac = "Maj";
				break;
				case 'Jun':
				$miesiac = "Czerwiec";
				break;
				case 'Jul':
				$miesiac = "Lipiec";
				break;
				case 'Aug':
				$miesiac = "Sierpień";
				break;
				case 'Sep':
				$miesiac = "Wrzesień";
				break;
				case 'Oct':
				$miesiac = "Październik";
				break;
				case 'Nov':
				$miesiac = "Listopad";
				break;
				case 'Dec':
				$miesiac = "Grudzień";
				break;
			}
  date_default_timezone_set('Europe/Warsaw');
  echo $runningTime = "<br><br><p>Dzisiaj jest " . $dzien . date(" , d ") . $miesiac . date(" Y") . ", godzina " .date('h:i:s'). "</p>";
?>