$(document).ready(function() {
	$("#form_1").submit(function() {
		$.ajax({
			type: "POST",
			url: "wp-content/themes/snos/modules/mail.php",
			data: $(this).serialize()
		}).done(function() {
			$(this).find("input").val("");
			 window.location.href = "#close"
			 window.location.href = "#success"
			$("#form_1").trigger("reset");
		});
		return false;
	});
    $("#form_2").submit(function() {
		$.ajax({
			type: "POST",
			url: "wp-content/themes/snos/modules/mail_2.php",
			data: $(this).serialize()
		}).done(function() {
			$(this).find("input").val("");
			 window.location.href = "#close"
			 window.location.href = "#success"
			$("#form_2").trigger("reset");
		});
		return false;
	});
    $("#form_3").submit(function() {
		$.ajax({
			type: "POST",
			url: "wp-content/themes/snos/modules/mail_3.php",
			data: $(this).serialize()
		}).done(function() {
			$(this).find("input").val("");
			 window.location.href = "#close"
			 window.location.href = "#success"
			$("#form_3").trigger("reset");
		});
		return false;
	});
    $("#form_4").submit(function() {
		$.ajax({
			type: "POST",
			url: "wp-content/themes/snos/modules/mail_4.php",
			data: $(this).serialize()
		}).done(function() {
			$(this).find("input").val("");
			 window.location.href = "#close"
			 window.location.href = "#success"
			$("#form_4").trigger("reset");
		});
		return false;
	});
    $("#form_5").submit(function() {
		$.ajax({
			type: "POST",
			url: "wp-content/themes/snos/modules/mail_5.php",
			data: $(this).serialize()
		}).done(function() {
			$(this).find("input").val("");
			 window.location.href = "#close"
			 window.location.href = "#success"
			$("#form_5").trigger("reset");
			document.getElementById('unlock').disabled=true;
		});
		return false;
	});
    $("#form_6").submit(function() {
		$.ajax({
			type: "POST",
			url: "wp-content/themes/snos/modules/mail_6.php",
			data: $(this).serialize()
		}).done(function() {
			$(this).find("input").val("");
			 window.location.href = "#close"
			 window.location.href = "#success"
			$("#form_1").trigger("reset");
		});
		return false;
	});
});