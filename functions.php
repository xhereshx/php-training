<?php

function init_party(){
    return [
    'bilbo' => 'Bilbo Baggins',
    'frodo' => 'Frodo Baggins',
    'ring' => 'The One Ring'
      ];
}

function remove_bilbo($party){
	//here some modification of party happens
	unset($party['bilbo']);
	return $party;
}