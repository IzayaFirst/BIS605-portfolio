<?php
		$score_1 = $_POST["score_1"];
		$score_2 = $_POST["score_2"];
		$score_3 = $_POST["score_3"];
		$credit = 3;
		$gpax =  (($score_1 *3 ) + ($score_2 * 3) + ($score_3 * 3) )/ 9;
		print "Congratulation your gpax is ".$gpax;
?>