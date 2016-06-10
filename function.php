<?php


	function timer_start() {

	    global $timestart;
	    
	    $timestart = microtime( true );
	   
	    return true;
	}


	/**
	* Retrieve or display the time from the page start to when function is called.
	*
	* @since 2016.02.17
	*
	* @global float     $timestart  Seconds from when timer_start() is called.
	* @global float     $timeend    Seconds from when function is called.
	*
	* @param int|bool   $display    Whether to echo or return the results. Accepts 0|false for return,
	*                               1|true for echo. Default 0|false.
	* @param int        $precision  The number of digits from the right of the decimal to display.
	*                               Default 3.
	* @return string    The "second.microsecond" finished time calculation. The number is formatted
	*                   for human consumption, both localized and rounded.
	*/

	function timer_stop( $display = 0, $precision = 3 ) {
	    
	    global $timestart, $timeend;

	    $timeend = microtime( true );
	    $timetotal = $timeend - $timestart;
	    $r = number_format( $timetotal, $precision );

	    if ( $display ) { echo nl2br("\n süre: $r"); }

	    return $r;
	}

	function JsonCreated($Json,$file){

		$JsonData = array('wordlist'		=> $Json );  
		$JsonData = json_encode($JsonData); 

		file_put_contents($file, $JsonData);
	}

?>
