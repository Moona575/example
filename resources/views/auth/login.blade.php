<x-guest-layout>
    <x-auth-card>
    <!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <style>
        /* General Styles */
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
}

/* Header Styles */
.header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 20px;
    background-color: #fff;
    position: fixed;
    width: 100%;
    top: 0;
    left: 0;

    
}

.logo img {
    width: 150px;
    height: auto;
}

.contact-info {
    font-size: 0.9em;
    display: flex;
    align-items: center;
    margin-top:-20px;
    margin-right:50px;
    white-space: nowrap; 
    overflow: hidden; 
    text-overflow: ellipsis;
    gap:10px;

}
.contact-info h4 {
    font-weight: bold; 
    color: #333; 
    font-size: 14px; 
}
.contact-info h3 {
    font-weight: bold; 
    color: blue; 
    font-size: 14px; 
}
.contact-info p {
    margin: 0 10px;
    font-size: 12px;
}
.contact-info i {
    font-size: 12px; /* Makes the icons small */
    margin-right: 5px; /* Adds some space between the icon and text */
    
}



.arrow-icon {
    color: black; /* Optional: You can style the arrow icon color */
}
.phone-icon {
    color: black; /* Optional: You can style the phone icon color */
}

/* Main Content Styles */
main {
    margin-top: 40px; /* Adjust based on header height */
    display: flex;
    justify-content: center;
    align-items: center;
    height: calc(100vh - 80px); /* Adjust based on header height */
    margin-left: -580px;

}

.login-box {
    width: 100%;
    max-width: 340px;
    padding: 20px;
    
    background-color: #fff;
    border-radius: 8px;
}

/* Form Styles */
.form-group {
    position: relative;
    margin-bottom: 20px;
}

.form-group label {
    position: absolute;
    top: -10px;
    left: 10px;
    background-color: #fff;
    padding: 0 5px;
    font-size: 0.9em;
    color: #333;
}

.form-group input,
.form-group select {
    width: 100%;
    padding: 8px;
    border: 1px solid red;
    border-radius: 4px;
    outline: none;
    box-sizing: border-box;
}

.form-group input[type="checkbox"] {
    width: auto;
    margin-top: 20px;
   

    

    
}

.form-group input[type="checkbox"] + label {
    display: inline-block;
    margin-left: 5px;
    
    
    
}


.forgot-link {
    text-decoration: none;
    color: #007bff; /* Example color, adjust as needed */
    margin: 0; /* Ensure no additional margin */
    margin-right: 50px;
    margin-bottom: 20px;
    font-size: 10px;
    margin-left:5px;
    align-items: center;

}

.forgot-link:hover {
    text-decoration: underline; /* Optional: Adds underline on hover */
}
button[type="submit"] {
    width: 100%;
    padding: 8px;
    background-color: #007BFF;
    color: #fff;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

button[type="submit"]:hover {
    background-color: #0056b3;
}
p{
    font-size: 12px;
}
h2{
    text-decoration: underline;
    
    font-size:12px;
    margin-top:-10px;
}
/* Footer Styles */


footer {
    text-align: center;
    margin-top: 50px; /* Space above the footer */
    font-size: 0.8em;
    color: #555;
    border-top: 1px solid grey;
    width: 80%; /* Adjusts the width of the border to 80% of the container */
    margin: 0 auto; /* Centers the footer horizontally */
    position: relative; /* Allows for positioning adjustments */
    top: -50px; /* Adjust this value to move the footer up or down */
}

footer p {
    margin: 5px 0;
    text-align: left;
}
footer h2{
    font-weight: bold;
    font-color:black;
    font-size:12px;
}
footer a {
    color: #007BFF;
    text-decoration: none;
}

footer a:hover {
    text-decoration: underline;
}
.footer-info {
    display: flex;
    align-items: center; /* Vertically aligns the elements in the center */
    justify-content: center; /* Centers content horizontally */
    flex-wrap: wrap; /* Ensures content wraps on smaller screens */
    font-size: 0.9em; /* Adjust font size if needed */
    margin-left:-90px;
}

.footer-info p,
.footer-info h2 {
    margin: 0 10px; /* Adds spacing between the elements */
    white-space: nowrap; /* Prevents text from breaking into multiple lines */
    
}

.footer-info h2 {
    font-weight: bold;
    font-size: 12px;
    color:solid black;
    margin-left: -10px;

}
.bold-text {
    font-weight: bold;
    font-size: 12px;
    color:solid black;
}

.bold-text a {
    font-weight: normal; /* Ensures the link is bold as well */
}

    </style>
</head>
<body>
    <!-- Header with logo and contact info -->
    <header class="header">
        <div class="logo">
            <img src="{{ asset('images/logo.png') }}" alt="Logo">
        </div>
        <div class="contact-info">
    <h4>Support Hours:</h4>
    <p> Monday-Friday, 7:30am to 8:30pm ET</p>

    

    <h3>
        
        <i class="fas fa-arrow-circle-right arrow-icon"></i> <!-- Small circle with arrow icon -->
        Submit Case
    </h3>
    <h3>
        <i class="fas fa-phone phone-icon"></i> <!-- Small phone icon -->
        877-523-2120
    </h3>
</div>

    </header>

    <!-- Main Content -->
    <main>
    

        <div class="login-box">
            <x-auth-card>
                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <!-- Select Product -->
                    <div class="form-group">
                        <label for="product">Select Product</label>
                        <select id="product" name="product" required>
                            <option value="practice_management">Practice Management/EHR</option>
                        </select>
                    </div>

                    <!-- User ID -->
                    <div class="form-group">
                        <label for="user_id">User ID</label>
                        <input id="user_id" type="text" name="user_id" required>
                    </div>

                    <!-- Password -->
                    <div class="form-group mt-4">
                        <label for="password">Password</label>
                        <input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
                        <input type="checkbox" id="show_password" onclick="togglePassword()"> Show Password
                    </div>

                    

                    <!-- Forgot Password and User ID -->
                    <div >
    <a class="forgot-link" href="#">Forgot your password?</a>
    <a class="forgot-link" href="#">Forgot your user ID?</a>
</div>

                    <!-- Log On Button -->
                    <div class="flex items-center justify-end mt-4">
                        <button type="submit" class="ml-3 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                            Log In
                        </button>
                    </div>
                </form>

                <!-- Additional Information -->
                <p class="mt-4 text-sm text-gray-600" >
                    By logging on, Client and each End User agree to the terms and conditions of the following documents, as applicable: <h2>Practices innovation</h2>
                
            </x-auth-card>
        </div>
    </main>

    <footer>
        <p class="bold-text">Please visit <a href="#">chpl.heatthit.gov</a> to generate the most current certification ID for Practices innovation.</p>
        <div class="footer-info">
    <p>2024 Practices innovation. All Rights Reserved.</p>
    <h2>| Accessibility | Certifications & Cost Disclosures | EHRA developer code of conduct | Privacy Policy | Legal notices</h2>
</div>
          <p> Practices innovation supports rigorous industry and regulatory standards so that our clients can successfully participate in various quality reporting and incentive programs.</p>
    </footer>

    <script>
        function togglePassword() {
            var x = document.getElementById("password");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        }
    </script>
</body>
</html>

    
    </x-auth-card>
</x-guest-layout>
