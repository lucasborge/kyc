$(document).ready (function () {

	$("#search_users").click (function () {

		var nrn = $("#nrn").val();

		if (nrn == "")
			$("#search_form").attr("action", "/pages/searchlist");
		else
			$("#search_form").attr("action", "/pages/searchlist");
		
		$("#search_form").submit();
	});

	$('.view-details').click (function () {
		var nrn = $(this).attr("for");
		var url = "/pages/searchlist/" + nrn + "__";
		location.href = url;
	});

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

});