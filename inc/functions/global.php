<?php

/* 
 * 	Copyright 2011 Owen Mundy 
 *
 *	This file is part of Give Me My Data.
 *
 *	Give Me My Data is free software: you can redistribute it and/or modify
 *	it under the terms of the GNU General Public License as published by
 *	the Free Software Foundation, either version 3 of the License, or
 *	(at your option) any later version.
 *	
 *	Give Me My Data is distributed in the hope that it will be useful,
 *	but WITHOUT ANY WARRANTY; without even the implied warranty of
 *	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *	GNU General Public License for more details.
 *	
 *	You should have received a copy of the GNU General Public License
 *	along with Give Me My Data.  If not, see <http://www.gnu.org/licenses/>.
 */ 




 
/**
 * Return profile timezone
 *
 * @params	int $uid FB user id
 * @return	float
 * @author	Owen Mundy <owenmundy.com>
 */  
function profile_timezone_function ($uid)
{
	global $facebook;	// access facebook object
	
	// if attempt to get data is successful...
	$fql = "SELECT timezone FROM user WHERE uid=" . $uid;
	$param  =   array(
			'method'    => 'fql.query',
			'query'     => $fql,
			'callback'  => ''
		);
	if ($timezone   =   $facebook->api($param))
	{
		$t = $fb_data[0]['timezone'];
		
	// format it like this for ISO-8601 / W3
	//+00:00
	
		if (substr($t,0,1) == '-' || substr($t,0,1) == '+')
		{
			if (strlen($t) == 2)
			{
				$t = substr($t,0,1) . '0' . substr($t,1,2) . ':00';
			}
			else if (strlen($t) == 3)
			{
				$t = $t . ':00';
			}
		}
	
		return $t;
	}
	else
	{
		return '-4';
	}
}



/**
 * Keep track of total time script takes to run
 *
 * @params	int $start_time UNIX timestamp
 * @return	float
 * @author	Owen Mundy <owenmundy.com>
 */
function time_tracker($start_time)
{
	// determine how much time script is taking
	$m_time = microtime(); 
	$m_time = explode(" ",$m_time); 
	$m_time = $m_time[1] + $m_time[0]; 
	
	if ($start_time == NULL){
		// if undefined, return start time
		return $m_time; 
	} else {
		// $start_time is defined so figure out end time
		$end_time = $m_time; 
		$total_time = ($end_time - $start_time); 
		return $total_time;
	}
}



?>