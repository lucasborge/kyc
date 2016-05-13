$(document).ready (function () {

	//var countries = [];
	var total_verify = 21;
	var total_documents = 7;

	$("#search_users").click (function () {

		var nrn = $("#nrn").val();

		if (nrn == "")
			$("#search_form").attr("action", "/admin/searchlist");
		else
			$("#search_form").attr("action", "/admin/searchlist");
		
		$("#search_form").submit();
	});

	$('#search_button').click (function () {
		location.href = "/admin/searchusers"
	});

// ******************************************************************** //
// Sync Telephone Directory
	$('#sync_telephone_directory').click (function () {
		var nrn = $(this).attr('for');
		$('.sync-telephone-directory').slideDown("slow");
		$(this).prop('disabled', true);
	});

	$('#cancel_tele_sec_db').click (function () {
		$('.sync-telephone-directory').slideUp("slow");
		$('#sync_telephone_directory').prop('disabled', false);
		$(".sync-telephone-data").html("Please click search.");
	});

	$('#establish_sec_db').click (function () {
		var name = $('#name').val();
		var address = $('#address').val();
		var tel_number = $('#tel_number').val();

		$.ajax({url:"/admin/sync_telephone_directory", type:"post", data:{'name':name, 'address':address, 'tel_number':tel_number}}).done(function(data) {
			var datas = jQuery.parseJSON(data);
			var html = "";

			for (var i = 0; i < datas.length; i++) {
				var tele_data = datas[i];
				var id = tele_data['id'];
				var fname = tele_data['NAME'] == null ? "" : tele_data['NAME'];
				var tel_number = tele_data['PHONE_NUMBER'] == null ? "" : tele_data['PHONE_NUMBER'];
				var address = tele_data['ADDRESS'] == null ? "" : tele_data['ADDRESS'];
				var country = tele_data['COUNTRY'] == null ? "" : tele_data['COUNTRY'];
				var updated = tele_data['DATE_UPDATED'] == null ? "" : tele_data['DATE_UPDATED'];
				var entry = tele_data['EXACT_DIRECTORY_ENTRY'] == null ? "" : tele_data['EXACT_DIRECTORY_ENTRY'];

				var sync_data = fname;
				sync_data += "&nbsp;&nbsp; " + address;
				sync_data += "&nbsp;&nbsp; " + tel_number;

				html += "<input type='radio' class='sel-sync-person' id='" + id + "' name='sync_person'/>&nbsp; " + sync_data + "<br>";
			}
			
			html = html == "" ? "There is no data." : html;
			$(".sync-telephone-data").html(html);
			$(".sync-telephone-data").slideDown("slow");

			$('.sel-sync-person').click(function () {
				var id = $(this).attr('id');
				var nrn = $('#sync_telephone_directory').attr('for');
				$('#unsync_telephone_directory').attr('for', nrn);
				
				$.ajax({url:"/admin/set_sync_telephone_directory", type:"post", data:{'id':id, 'nrn':nrn}}).done(function(data) {
					var t = jQuery.parseJSON(data)[0];

					var id = t['id'];
					var fname = t['NAME'] == null ? "" : t['NAME'];
					var tel_number = t['PHONE_NUMBER'] == null ? "" : t['PHONE_NUMBER'];
					var address = t['ADDRESS'] == null ? "" : t['ADDRESS'];
					var country = t['COUNTRY'] == null ? "" : t['COUNTRY'];
					var updated = t['DATE_UPDATED'] == null ? "" : t['DATE_UPDATED'];
					var entry = t['EXACT_DIRECTORY_ENTRY'] == null ? "" : t['EXACT_DIRECTORY_ENTRY'];

					var sync_data = fname;
					sync_data += " " + address;
					sync_data += " " + tel_number;
					
					$('.telephone-directory').text(sync_data);
					$('.sync-telephone-directory').slideUp("slow");
					$('#sync_telephone_directory').fadeOut("slow", function (){
						$('#unsync_telephone_directory').fadeIn("slow");
						$('.telephone-directory-label').fadeIn("slow");
						$(".sync-telephone-data").html("Please click search.");
					});
				})
				.fail(function(error) {
					alert(error);
				});
			});
		})
		.fail(function(e) {
			var str = "";
			for(i in e)
				str += i+":"+e[i];
			alert(str);
		});
	});

	$('#unsync_telephone_directory').click (function () {
		var nrn = $('#unsync_telephone_directory').attr('for');

		$.ajax({url:"/admin/unsync_telephone_directory", type:"post", data:{'nrn':nrn}}).done(function(data) {
			$('#unsync_telephone_directory').fadeOut("slow", function () {
				$('#sync_telephone_directory').fadeIn("slow");
				$('#sync_telephone_directory').prop('disabled', false);
				$('.telephone-directory').text("Telephone Directory");
				$('.telephone-directory-label').fadeOut("slow");
			});
		})
		.fail(function(error) {
			alert(error);
		});
	});
// **************************************************************************** //

	$('.sync-secondary-databases').click (function (event) {
		var nrn = $(this).attr('for');
		location.href = "/admin/sync_secondary?nrn=" + nrn;
	});

	$('#profileModal').on('show.bs.modal', function (event) {
		var button = $(event.relatedTarget) // Button that triggered the modal
		var nrn = button.data('whatever') // Extract info from data-* attributes
		// If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
		// Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
		//var modal = $(this);
		$.ajax({url:"/admin/get_client", type:"post", data:{'nrn':nrn}}).done(function(data) {
			var clients = jQuery.parseJSON(data);
			var tele_status = clients['tele_status'];
			var client = clients['client'][0];
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
			var country = get_country (country_code);

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
			if (tele_status == 0) {
				$(".telephone-directory-label").css("display", "none");
				$("#sync_telephone_directory").show();
				$("#unsync_telephone_directory").hide();
			} else {
				$(".telephone-directory-label").css("display", "block");
				$(".telephone-directory").text(tele_status);
				$("#sync_telephone_directory").hide();
				$("#unsync_telephone_directory").show();
			}
			$("#sync_telephone_directory").attr("for", NRN);
			$('#unsync_telephone_directory').attr("for", NRN);


			$(".modal-title").text("Client is " + Math.round(100 * verified / total_verify) + "% Verified and ID documents are partially, " + Math.round(100 * id_documents / total_documents) + "% up to date.");
		})
		.fail(function(error) {
			var str = error['responseText'];
			alert(str);
		});
	})

	var current_page = "approve-first";
	$(".approve-next-btn").click(function () {
		$(".approve-prev-btn").removeClass("invisible");

		if (current_page == "approve-first") {
			$(".approve-first").hide();
			$(".approve-second").show();
			current_page = "approve-second";
		} else if (current_page == "approve-second") {
			$(".approve-third").show();
			$(".approve-second").hide();
			current_page = "approve-third";
			$(".approve-next-btn").addClass("invisible");
			$('#establish_sec_db').show();
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
			$('#establish_sec_db').hide();
		}
	});

	function get_nationality (code) {
		if (code == '00' || code == '01')
			return 'Barbadian';
		else
			return'';
	}

	function get_pob (code) {
		if (code == '00' || code == '01')
			return 'Barbados';
		else
			return '';
	}

	function get_countrys (code) {
		if (code == '00' || code == '01')
			return 'Barbados';
		else
			return '';
	}

});