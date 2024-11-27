$(document).ready(function() {
	// Listen to login button
	$('#loginBtn').on('click', function(){
		login();
	});

	// Lister for Register button
	$('#registerBtn').on('click', function() {
		register();
	})
});

// Handle Register Request
function register() {
	// Required Variables Initiation
	var registerUsername = $('#registerUsername').val();
	var registerEmail = $('#registerEmail').val();
	var registerPassword = $('#registerPassword').val();
	var registerRePassword = $('#registerRePassword').val();

	var message = '<strong>Error:</strong> Invalid Email Address!'
	$('#registerMessage').html('<div class="alert alert-danger mt-3">' + message + '</div>').fadeIn();
	setTimeout(function() {
		$('#registerMessage').fadeOut();
	}, 3000);

	$.ajax({
		url: '',
		method: 'POST',
		data: {

		},
		success: function(data) {
			console.log('AJAX Response: ', data);
            var result = JSON.parse(data);
            var message = result.message;
            var messageLog = $('#message');

            if (result.status === 'success') {
                messageLog.html('<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert">&times;</button>' + message + '</div>').fadeIn();
            } else if (result.status === 'warning') {
                messageLog.html('<div class="alert alert-warning"><button type="button" class="close" data-dismiss="alert">&times;</button>' + message + '</div>').fadeIn();
            } else if (result.status === 'error') {
                messageLog.html('<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert">&times;</button>' + message + '</div>').fadeIn();
            }

			setTimeout(function() {
                messageLog.fadeOut();
            }, 3000);
		},
		error: function(jqXHR, textStatus, errorThrown) {
			console.error('AJAX Error: ', textStatus, errorThrown); // Log any errors
		}
	});
}

// Handle Login Request
function login() {
	alert("Hello Babe!");
}