
/**
 * Report and (dis)allow accepted data formats based on data type selection
 *
 * @params	string val 
 * @author	Owen Mundy <owenmundy.com>
 */
function data_selector_call(val) 
{	console.log(data_types);
	if (val != "" && data_types.checkins){
		
		// split into allowed_formats_arr
		allowed_formats_arr = data_types[val].types.split(',');
	
		// possible formats
		possible_formats_arr = new Array('plain','csv','xml','json','dot','nb','gdf','graphml');
		
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
