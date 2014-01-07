$(document).ready(function() {
	console.log('js loaded');
	
	$('#current-menu').html($('#top-menu li.active > a').text());
	
	$('#tool-container').on('click', 'a.list-group-item', function() {
		$.ajax({
				type: "get",
				url: "../suggest/detail",
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
	});
	
	
	$('a.suggest-btn').click(function(e) {
		e.preventDefault();
		$('#suggest-tool').modal();
	});
	
	$('.btn-submit-suggest').click(function(e) {
		$(this).addClass('disabled');
		$('#bg-loader').show();
		$.ajax({
			type: "post",
			url: "../suggest/request",
			data: { name: "John", location: "Boston" },
			beforeSend: function() {
				//Load the image
			}
			
		})	
		.done(function(result) {
			$('#bg-loader').hide();
			$('.flip-container').addClass('flip');
		});
	});
	
	$('.btn-reset-modal').click(function(e) {
		$('.btn-submit-suggest').removeClass('disabled');
		$('#suggest-form')[0].reset();
		$('.flip-container').removeClass('flip');
	});
	
	
	//Display + filter
	$('#tool-container').filteredMasonry({
		itemSelector: '.category-block',
		filtersGroupSelector: '.menu-item',
	});
});