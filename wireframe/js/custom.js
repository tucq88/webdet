$(document).ready(function() {
	console.log('js loaded');
	
	$('#current-menu').html($('#top-menu li.active > a').text());
	
	$('a.list-group-item').click(function(e) {
		e.preventDefault();
		
		$.ajax({
			type: "POST",
				url: "request.php",
				data: { name: "John", location: "Boston" }
			})
			.done(function(result) {
				var result = JSON.parse(result);
				$('#tool-detail h4.modal-title').html(result.title);
				$('#tool-detail .modal-body').html(result.content);
				$('#tool-detail').modal();
		});
	});
	
	$('a.menu-item').click(function(e) {
		e.preventDefault();
		
		//Set text to menu
		$('#current-menu').html($(this).text());
		
		//Set menu active
		$('a.menu-item').parent().removeClass('active');
		$(this).parent().addClass('active');
		
		//Collapse menu
		//$('#top-menu').collapse('hide');
		
		//Filter block
		/**
		 * Cheating - Need find another way to 
		 * setup layout similar to Pinterest
		 */
		var filter = $(this).attr('data-filter');
		/*if (filter == 'all') {
			$('.category-block').fadeIn();
		} else {
			$('.category-block').not('.' + filter).fadeOut();
			$('.' + filter).fadeIn();
		}*/
	});
	
	
	$('a.suggest-btn').click(function(e) {
		e.preventDefault();
		$('#suggest-tool').modal();
	});
	
	
	//Display + filter
	//@todo: Not complete yet
	$('#tool-container').filteredMasonry({
		itemSelector: '.category-block',
		filtersGroupSelector:'.menu-item',
	});
	
	$('#tool-container').masonry({
		itemSelector: '.category-block',
	});
});