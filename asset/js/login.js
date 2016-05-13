$(document).ready (function () {

	$("#login").click (function () {
		var email = $("#email").val();
		var password = $("#password").val();

		if (email == "") {
			$('#nrn').val('4212030037');
			$("#login_form").attr("action", "/pages/setprofile");
		} else {
			$("#login_form").attr("action", "/user/unapprove");
		}

		$("#login_form").submit();
	});

});