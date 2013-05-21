
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
 * Report and (dis)allow accepted data formats based on data type selection
 *
 * @params	string val 
 * @author	Owen Mundy <owenmundy.com>
 */
function data_selector_call(val) 
{	
	if (val != "" && data_type_arr.length > 0){
		// split into allowed_formats_arr
		allowed_formats_arr = data_type_arr[val][2].split(',');
	
		// possible formats
		possible_formats_arr = new Array('plain','csv','xml','json','dot','nb','gdf');
		
		// set all to disabled = true
		for(i=0; i<possible_formats_arr.length; i++)
		{
			document.getElementById("data_format_"+possible_formats_arr[i]).disabled = true;
		}
			
		// set allowed formats to disabled = false
		for(i=0; i<allowed_formats_arr.length; i++)
		{
			document.getElementById("data_format_"+allowed_formats_arr[i]).disabled = false;
			document.getElementById("format_msg").innerHTML = "The format for this data type must be one of the following: "+allowed_formats_arr;
		}
	}
}




/**
 * Validate form
 *
 * @params	string this_form The name of the form to validate
 * @author	Owen Mundy <owenmundy.com>
 */
function validate_form(this_form)
{	
	if (this_form.data_selector.value=="*")
	{
		alert("Please select a data type.");
		this_form.data_selector.focus();
		return false;
	}
	if (this_form.data_format.value=="*")
	{
		alert("Please select a data format.");
		this_form.data_format.focus();
		return false;
	}
	return true;
}
