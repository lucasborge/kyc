$(document).ready (function () {

	var current_page = "approve-first";
	$(".approve-next-btn").click(function () {
		$(".approve-prev-btn").removeClass("invisible");

		if (current_page == "approve-first") {
			$.ajax({
				url: '/signup/register_private',
				type: 'POST',
				data: {
					'id': $('#id').val(),
					'firstname': $('#first_name').val(),
					'middlename': $('#middle_name').val(),
					'lastname': $('#last_name').val(),
					'email': $('#email').val(),
					'mobile': $('#mobile').val(),
					'home': $('#home').val(),
					'birth': $('#birth').val(),
					'place': $('#place').val(),
					'national': $('#national').val(),
					'nrn': $('#nrn').val(),
					'passno': $('#passno').val(),
					'driverno': $('#driverno').val(),
					'per_addr1': $('#per_addr1').val(),
					'per_addr2': $('#per_addr2').val(),
					'per_addr3': $('#per_addr3').val(),
					'post_code': $('#post_code').val(),
					'country': $('#country').val(),
					'postal_addr': $('#postal_addr').val(),
					'profesion': $('#profesion').val(),
					'employer': $('#employer').val()
				},
				success: function(res) {
					
					$(".approve-first").hide();
					$(".approve-second").show();
					current_page = "approve-second";

				}
			});			
		} else if (current_page == "approve-second") {
			$(".approve-third").show();
			$(".approve-second").hide();
			current_page = "approve-third";
		} else if (current_page == "approve-third") {
			$(".approve-forth").show();
			$(".approve-third").hide();
			current_page = "approve-forth";
			$(".approve-next-btn").addClass("invisible");
		}
	});

	$(".approve-prev-btn").click(function () {
		$(".approve-next-btn").removeClass("invisible");

		if (current_page == "approve-second") {
			$(".approve-first").show();
			$(".approve-second").hide();
			current_page = "approve-first";
			$(".approve-prev-btn").addClass("invisible");
		} else if (current_page == "approve-third") {
			$(".approve-third").hide();
			$(".approve-second").show();
			current_page = "approve-second";
			$(".approve-next-btn").removeClass("visible");
		} else if (current_page == "approve-forth") {
			$(".approve-forth").hide();
			$(".approve-third").show();
			current_page = "approve-third";
		}
	});

	$( "#birth" ).datepicker();

	$("#nrn_image_upload").click(function () {
		$('#nrn_file').click();
	});

	$("#passport_image_upload").click(function () {
		$('#passport_file').click();
	});

	$("#driver_image_upload").click(function () {
		$('#driver_file').click();
	});

	$("#signature_image_upload").click(function () {
		$('#sign_file').click();
	});

	$('#nrn_file').change(function (e){
		var img_files;
		img_files = event.target.files;
		
		if (!img_files) 
			return false;

		$("#nrn_image_upload").fadeOut("slow");

		var nrn = $('#nrn').val();
		var preview = $('.nrn-preview');

		var files = new FormData();
		$.each(img_files, function (key, value) {
			files.append(key, value);
		});
		files.append('nrn', nrn);
		files.append('type', 'nrn');

		$.ajax({
			url: '/signup/upload_image',
			type: 'POST',
			data: files,
			cache: false,
			dataType: 'text',
			processData: false, 
			contentType: false, 
			success: function(res) {
				var data = jQuery.parseJSON(res);
				if (data['url'] == "") {

				}
				preview.empty();
				$("<img/>", {
					"src": data['url'],
					"style": "width:200px;height:90px;"
				}).appendTo(preview);
			}
		});
	});

	$('#passport_file').change(function (e){
		var img_files;
		img_files = event.target.files;
		
		if (!img_files) 
			return false;

		$("#passport_image_upload").fadeOut("slow");

		var nrn = $('#nrn').val();
		var preview = $('.passport-preview');

		var files = new FormData();
		$.each(img_files, function (key, value) {
			files.append(key, value);
		});
		files.append('nrn', nrn);
		files.append('type', 'passport');

		$.ajax({
			url: '/signup/upload_image',
			type: 'POST',
			data: files,
			cache: false,
			dataType: 'text',
			processData: false, 
			contentType: false, 
			success: function(res) {
				var data = jQuery.parseJSON(res);
				if (data['url'] == "") {

				}
				preview.empty();
				$("<img/>", {
					"src": data['url'],
					"style": "width:200px;height:90px;"
				}).appendTo(preview);
			}
		});
	});

	$('#driver_file').change(function (e){
		var img_files;
		img_files = event.target.files;
		
		if (!img_files) 
			return false;

		$("#driver_image_upload").fadeOut("slow");

		var nrn = $('#nrn').val();
		var preview = $('.driver-preview');

		var files = new FormData();
		$.each(img_files, function (key, value) {
			files.append(key, value);
		});
		files.append('nrn', nrn);
		files.append('type', 'driver');

		$.ajax({
			url: '/signup/upload_image',
			type: 'POST',
			data: files,
			cache: false,
			dataType: 'text',
			processData: false, 
			contentType: false, 
			success: function(res) {
				var data = jQuery.parseJSON(res);
				if (data['url'] == "") {

				}
				preview.empty();
				$("<img/>", {
					"src": data['url'],
					"style": "width:200px;height:90px;"
				}).appendTo(preview);
			}
		});
	});

	$('#sign_file').change(function (e){
		var img_files;
		img_files = event.target.files;
		
		if (!img_files) 
			return false;

		$("#signature_image_upload").fadeOut("slow");

		var nrn = $('#nrn').val();
		var preview = $('.signature-preview');

		var files = new FormData();
		$.each(img_files, function (key, value) {
			files.append(key, value);
		});
		files.append('nrn', nrn);
		files.append('type', 'sign');

		$.ajax({
			url: '/signup/upload_image',
			type: 'POST',
			data: files,
			cache: false,
			dataType: 'text',
			processData: false, 
			contentType: false, 
			success: function(res) {
				var data = jQuery.parseJSON(res);
				if (data['url'] == "") {

				}
				preview.empty();
				$("<img/>", {
					"src": data['url'],
					"style": "width:200px;height:90px;"
				}).appendTo(preview);
			}
		});
	});
});