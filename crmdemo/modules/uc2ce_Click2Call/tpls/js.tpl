<script type='text/javascript'>
{literal}
UC2C = function() {
	return {
		
		select_all: function()
		{
			// check all checkboxes
			YAHOO.util.Dom.getElementsBy(
				function(el) {
					return el.type == "checkbox";
				},
				"input",
				null,
				function(el) {
					el.checked = 'checked';
				}
			);
		},
		
		deselect_all: function()
		{
			// uncheck all checkboxes
			YAHOO.util.Dom.getElementsBy(
				function(el) {
					return el.type == "checkbox";
				},
				"input",
				null,
				function(el) {
					el.checked = false;
				}
			);
		},
		
		validate: function()
		{
			// make sure at least one module field is selected
			var checked_count = 0;
			
			YAHOO.util.Dom.getElementsBy(
				function(el) {
					return el.type == "checkbox";
				},
				"input",
				null,
				function(el) {
					if(el.checked == true) {
						++checked_count;
					}
				}
			);
			
			if(checked_count > 0) {
				return true;
			}
			else {
				alert('You must select at least 1 field to update.');
				return false;
			}
		},
	}
}();

{/literal}
</script>