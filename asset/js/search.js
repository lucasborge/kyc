$(document).ready (function () {

	//var countries = [];
	var total_verify = 21;
	var total_documents = 7;

	var tooltip_position = {my:'center bottom', at:'center top-10', collision:'none'};

	$('[data-toggle="tooltip"]').tooltip();

	$("#search_users").click (function () {

		var nrn = $("#nrn").val();

		if (nrn == "")
			$("#search_form").attr("action", "/pages/searchlist");
		else
			$("#search_form").attr("action", "/pages/searchlist");
		
		$("#search_form").submit();
	});

	$('.view-details').click (function () {
		/*var nrn = $(this).attr("for");
		var url = "/pages/searchlist/" + nrn + "__";
		location.href = url;*/
	});

	$('#profileModal').on('show.bs.modal', function (event) {
		var button = $(event.relatedTarget) // Button that triggered the modal
		var nrn = button.data('whatever') // Extract info from data-* attributes
		// If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
		// Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
		//var modal = $(this);
		$.ajax({url:"/pages/get_client", type:"post", data:{'nrn':nrn}}).done(function(data) {
			var clients = jQuery.parseJSON(data);
			var client = clients[0];
			var id = client['id'];
			var NRN = client['NRN'];
			var first_name = client['STR_FN1'];
			var middle_name = client['STR_FN2'];
			var last_name = client['STR_LN'];
			var gender = (client['STR_SEX'] == 'M') ? 'Male' : ((client['STR_SEX'] == 'F') ? 'Female' : 'Not Available');
			var pa1 = client['STR_PA1'];
			var pa2 = client['STR_PA2'];
			var pa3 = client['STR_PA3'];
			var parih = client['PARISH'];

			var year = "19" + NRN.substring(0, 2);
			var month = NRN.substring(2, 4);
			var day = NRN.substring(4, 6);
			var country_code = NRN.substring(6, 8);

			var DOB = day + "-" + month + "-" + year;
			var POB = get_pob (country_code);
			var nationality = get_nationality (country_code);
			var country = "";

			var verified = 0;
			var id_documents = 0;

			if (first_name != "") {
				$(".first-name").text(first_name);
				$(".first-name").css("color", "#666");
				$(".first-name-label").css("display", "block");
				verified++;
			} else {
				$(".first-name").css("color", "#bbb");
				$(".first-name-label").css("display", "none");
			}
			if (middle_name != "") {
				$(".middle-name").text(middle_name);
				$(".middle-name").css("color", "#666");
				$(".middle-name-label").css("display", "block");
				verified++;
			} else {
				$(".middle-name").css("color", "#bbb");
				$(".middle-name-label").css("display", "none");
			}
			if (last_name != "") {
				$(".last-name").text(last_name);
				$(".last-name").css("color", "#666");
				$(".last-name-label").css("display", "block");
				verified++;
			} else {
				$(".last-name").css("color", "#bbb");
				$(".last-name-label").css("display", "none");
			}
			if (DOB != "") {
				$(".dob").text(DOB);
				$(".dob").css("color", "#666");
				$(".dob-label").css("display", "block");
				verified++;
			} else {
				$(".dob").css("color", "#bbb");
				$(".dob-label").css("display", "none");
			}
			if (POB != "") {
				$(".pob").text(POB);
				$(".pob").css("color", "#666");
				$(".pob-label").css("display", "block");
				verified++;
			} else {
				$(".pob").css("color", "#bbb");
				$(".pob-label").css("display", "none");
			}
			if (nationality != "") {
				$(".nationality").text(nationality);
				$(".nationality").css("color", "#666");
				$(".nationality-label").css("display", "block");
				verified++;
			} else {
				$(".nationality").css("color", "#bbb");
				$(".nationality-label").css("display", "none");
			}
			if (NRN != "") {
				$(".nrn").text(NRN);
				$(".nrn").css("color", "#666");
				$(".nrn-label").css("display", "block");
				verified++;
			} else {
				$(".nrn").css("color", "#bbb");
				$(".nrn-label").css("display", "none");
			}
			if (pa1 != "") {
				$(".paddress1").text(pa1);
				$(".paddress1").css("color", "#666");
				$(".paddress1-label").css("display", "block");
				verified++;
			} else {
				$(".paddress1").css("color", "#bbb");
				$(".paddress1-label").css("display", "none");
			}
			if (pa2) {
				$(".paddress2").text(pa2);
				$(".paddress2").css("color", "#666");
				$(".paddress2-label").css("display", "block");
				verified++;
			} else {
				$(".paddress2").css("color", "#bbb");
				$(".paddress2-label").css("display", "none");
			}
			if (pa3) {
				$(".paddress3").text(pa3);
				$(".paddress3").css("color", "#666");
				$(".paddress3-label").css("display", "block");
				verified++;
			} else {
				$(".paddress3").css("color", "#bbb");
				$(".paddress3-label").css("display", "none");
			}
			if (gender) {
				$(".gender").text(gender);
				$(".gender").css("color", "#666");
				$(".gender-label").css("display", "block");
				verified++;
			} else {
				$(".gender").css("color", "#bbb");
				$(".gender-label").css("display", "none");
			}
			if (country) {
				$(".country").text("Country");
				$(".country").css("color", "#666");
				$(".country-label").css("display", "block");
				verified++;
			} else {
				$(".country").css("color", "#bbb");
				$(".country-label").css("display", "none");
			}

			$(".nrn-img-label").css("display", "block");
			$(".passport-img-label").css("display", "block");
			//$(".driverno-img-label").css("display", "block");
			$(".signature-img-label").css("display", "block");
			$(".signature-img-label").css("top", "20px");
			id_documents++;
			id_documents++;
			id_documents++;

			$(".valid-nrn-img").text("Valid");
			$(".valid-nrn-img").css("color", "#666");

			$(".valid-nrn-img-date").text("26/04/2016");
			$(".valid-nrn-img-date").css("color", "#666");
			$(".valid-nrn-img-date-label").css("display", "block");

			$(".valid-passport-img").text("Valid");
			$(".valid-passport-img").css("color", "#666");

			$(".valid-passport-img-date").text("25/04/2016");
			$(".valid-passport-img-date").css("color", "#666");
			$(".valid-passport-img-date-label").css("display", "block");

			$(".electricity-bill-date").text("23/04/2016");
			$(".electricity-bill-date").css("color", "#666");
			$(".electricity-bill-label").css("display", "block");
			id_documents++;

			$(".telecom1-bill-date").text("21/04/2016");
			$(".telecom1-bill-date").css("color", "#666");
			$(".telecom1-bill-label").css("display", "block");
			$(".telecom1-bill-label").css("top", "60px");
			id_documents++;

			$(".telecom2-bill-date").text("Not Available");
			$(".telecom2-bill-date").css("color", "#666");
			$(".telecom2-bill-label").css("display", "none");
			$(".telecom2-bill-label").css("top", "120px");

			$(".public-nrn").text(NRN);
			$(".public-nrn").css("color", "#666");
			$(".public-nrn-label").css("display", "block");

			$(".land-registry").text("Land Registry");
			$(".land-registry").css("color", "#666");
			$(".land-registry-label").css("display", "block");

			$(".caipo").text("CAIPO");
			$(".caipo").css("color", "#bbb");
			$(".caipo-label").css("display", "none");

			$(".telephone-directory").text("Telephone Directory");
			$(".telephone-directory").css("color", "#666");
			$(".telephone-directory-label").css("display", "block");


			$(".modal-title").text("Client is " + Math.round(100 * verified / total_verify) + "% Verified and ID documents are partially, " + Math.round(100 * id_documents / total_documents) + "% up to date.");
		})
		.fail(function() {
			alert("error");
		});
	})

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

			$(".approve-first").hide();
			$(".approve-second").show();
			current_page = "approve-second";
		} else if (current_page == "approve-second") {
			$(".approve-third").show();
			$(".approve-second").hide();
			current_page = "approve-third";
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
		}
	});

	//datepicker
	$( "#birth" ).datepicker({
		changeMonth: true,
		changeYear: true,
		yearRange: "1900:2030"
	});

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

	//country select
	$("#country").searchable();

	$("#value").html($("#country :selected").text() + " (VALUE: " + $("#country").val() + ")");
	$("#country").change(function(){
		$("#value").html(this.options[this.selectedIndex].text + " (VALUE: " + this.value + ")");
	});

	function get_nationality (code) {
		if (code == '00')
			return 'Barbadian';
		else if (code == '01') 
			return'Barbadian';
		else
			return'Barbadian';
	}

	function get_pob (code) {
		if (code == '00')
			return 'Barbados';
		else if (code == '01')
			return 'Barbados';
		else
			return 'Barbados';
	}

});