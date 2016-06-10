<?php

	/**
	 * @author 		:	ug-code
	 * @email 		:	not yet
	 * @description :	PHP Json WordList Generator 
	 * @copyright 	:	2016-06-09 20:17
	 * Tİmer_stop   :   0.7156281471 sec. 
	 */

	ini_set('memory_limit', '-1');
	require_once('function.php');

	# Page rendering time measurement starts here
	$timer = true;	
	timer_start($timer);

# $symboles = array('~','!','@','#','$','%','^','&','*','(',')','-','_','=','+','\\','|','[','{',']','}',"'",'"',';',':','?','>','.','<',',','?');




	/**

	Next time we need a Mix Wordlist
	List =>  upchars,alphamet,alphabetNum,mixalphabetNum and ALLchar

	**/

	//$uchars 	      = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
	//$alphabet 	  = 'abcdefghijklmnopqrstuvwxyz';
	//$alphabetNum 	  = 'abcdefghijklmnopqrstuvwxyz0123456789'; 
	//$mixalphabetNum = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789'; 
	$numbers          = '0123456789';



	$alph = str_split($numbers);
	foreach($alph as $letter1){
	  foreach($alph as $letter2){
	    foreach($alph as $letter3){
	      foreach ($alph as $letter4){
	      	foreach ($alph as $letter5){
	      		foreach ($alph as $letter6){

	      			$JsonSave[] =  $letter1.$letter2.$letter3.$letter4.$letter5.$letter6;  
	      		}      	
	      	}
	      }
	    }
	  }
	}



	/**

	**	Edit the file path 
	**  I'm using Xampp & Localhost

	**/
	$file="E:\www\wptema\@lab\PHP-WordlistGenerator-master\json1-6.json";

	JsonCreated($JsonSave,$file);

	# Page rendering time measurement ends here ...
	timer_stop($timer,10);