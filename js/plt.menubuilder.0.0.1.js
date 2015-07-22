jQuery(document).ready(function(){

		jQuery('ol.sortable').nestedSortable({
			forcePlaceholderSize: true,
			handle: 'div',
			helper:	'clone',
			items: 'li',
			opacity: .6,
			placeholder: 'placeholder',
			revert: 250,
			tabSize: 25,
			tolerance: 'pointer',
			toleranceElement: '> div',
			maxLevels: 3,

			isTree: true,
			expandOnHover: 700,
			startCollapsed: true
		});

		jQuery('.disclose').on('click', function() {
			jQuery(this).closest('li').toggleClass('mjs-nestedSortable-collapsed').toggleClass('mjs-nestedSortable-expanded');
		})

		jQuery('#serialize').click(function(){
			serialized = jQuery('ol.sortable').nestedSortable('serialize');
			jQuery('#serializeOutput').text(serialized+'\n\n');
		})

		jQuery('#toHierarchy').click(function(e){
			hiered = jQuery('ol.sortable').nestedSortable('toHierarchy', {startDepthCount: 0});
			hiered = dump(hiered);
			(typeof(jQuery('#toHierarchyOutput')[0].textContent) != 'undefined') ?
			jQuery('#toHierarchyOutput')[0].textContent = hiered : jQuery('#toHierarchyOutput')[0].innerText = hiered;
		})

		jQuery('#toArray').click(function(e){
			arraied = jQuery('ol.sortable').nestedSortable('toArray', {startDepthCount: 0});
			arraied = dump(arraied);
			(typeof(jQuery('#toArrayOutput')[0].textContent) != 'undefined') ?
			jQuery('#toArrayOutput')[0].textContent = arraied : jQuery('#toArrayOutput')[0].innerText = arraied;
		})

	});

	function dump(arr,level) {
		var dumped_text = "";
		if(!level) level = 0;

		//The padding given at the beginning of the line.
		var level_padding = "";
		for(var j=0;j<level+1;j++) level_padding += "    ";

		if(typeof(arr) == 'object') { //Array/Hashes/Objects
			for(var item in arr) {
				var value = arr[item];

				if(typeof(value) == 'object') { //If it is an array,
					dumped_text += level_padding + "'" + item + "' ...\n";
					dumped_text += dump(value,level+1);
				} else {
					dumped_text += level_padding + "'" + item + "' => \"" + value + "\"\n";
				}
			}
		} else { //Strings/Chars/Numbers etc.
			dumped_text = "===>"+arr+"<===("+typeof(arr)+")";
		}
		return dumped_text;
	}