$(document).ready (function () {

	$("#login").click (function () {
		var email = $("#email").val();
		var password = $("#password").val();

		if (email != "") {
			$("#login_form").attr("action", "/pages/searchusers");
		} else {
			$("#login_form").attr("action", "/user/unapprove");
		}

		$("#login_form").submit();
	});

});