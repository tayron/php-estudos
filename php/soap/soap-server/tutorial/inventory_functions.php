<?php
function getItemCount($upc){
	//in reality, this data would be coming from a database
	$items = array('12345'=>5,'19283'=>100,'23489'=>'234');
	return $items[$upc];
}