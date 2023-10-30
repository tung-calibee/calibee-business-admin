<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calibee for Business</title>
    <link rel="icon" type="image/x-icon" href="{{asset('images/favicon.png') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&family=Roboto&display=swap" rel="stylesheet">
    <link href="{{ asset('css/login.css') }}" rel="stylesheet">
    <style>
        ::placeholder { 
		color: #c6cacd;     
	    }
    </style>
</head>
<body>
    <main >
        @yield('content')
    </main>
    
    <script>
        const emailInput = document.getElementById("emailInput");
        const passwordInput = document.getElementById("passwordInput");
        const loginButton = document.getElementById("loginButton");

        emailInput.addEventListener("input", updateButtonState);
        passwordInput.addEventListener("input", updateButtonState);

        function updateButtonState() {
            if (emailInput.value && passwordInput.value) {
                loginButton.removeAttribute("disabled");
                loginButton.style.opacity = 1;
            } else {
                loginButton.setAttribute("disabled", true);
                loginButton.style.opacity = 0.4;
            }
        }
        loginButton.addEventListener('click', function(event) {
            window.location.href = 'booking-calibeebusiness.html'; 
        });
       
    </script>
</body>
</html>