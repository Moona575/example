
    <x-auth-card>
        <head>
            <style>
                /* General Styles */
/* General Styles */
/* General Styles */
body {
    font-family: Arial, sans-serif;
    margin-top:120px;
    margin-left:40px;
    padding: 0;
    background-color: #f7f7f7; /* Light background color */
}

/* Main Container */
.x-auth-card {
    width: 100%;
    max-width: 3000px;
    padding: 20px;
    margin-top:40px;
    background-color: #ffffff; /* White background for the card */
    border-radius: 8px;
    
    position: relative; /* For positioning inside container */
    left: 50%; /* Center the card horizontally */
    transform: translateX(-50%); /* Center the card horizontally */
    margin-left:10px;
}

/* Form Container Styles */
.form-container {
    /* Red border around the entire form */
    border-radius: 8px; /* Match card border radius */
    padding: 20px; /* Add padding inside the container */
    background-color: #ffffff; /* Ensure background color matches card */
    max-width:300px;
}

/* Container Styles */
.field-container {
    border: 1px solid red; /* Red border */
    border-radius: 4px;
    padding: 2px;
    margin-bottom: 20px;
    position: relative;
    max-width:250px;

}

/* Field Label Styles */
.field-container .x-label {
    position: absolute;
    top: -30px;
    left: 10px;
    background-color: #fff;
    padding: 0 5px;
    font-size: 0.9em;
    color: #333;
}

/* Input Styles */
.field-container .x-input {
    width: calc(100% - 20px); /* Adjust width for padding */
    padding: 10px;
    border: none; /* Remove default border */
    border-radius: 4px;
    box-sizing: border-box;
    font-size: 14px;
    color: #333;
}

.field-container .x-input:focus {
    border-color: #007bff; /* Blue border on focus */
    outline: none;
}

/* Button Styles */
.x-button {
    display: inline-block;
    padding: 10px 20px;
    background-color: #007bff; /* Blue background */
    color: #fff;
    border: none;
    border-radius: 4px;
    font-size: 14px;
    cursor: pointer;
    text-align: center;
    text-decoration: none;
    
}

.x-button:hover {
    background-color: #0056b3; /* Darker blue on hover */
}

/* Link Styles */
a {
    color: #007bff; /* Blue link color */
    text-decoration: none;
}

a:hover {
    text-decoration: underline; /* Underline on hover */
}

/* Validation Error Styles */
.x-auth-validation-errors {
    background-color: #f8d7da; /* Light red background */
    color: #721c24; /* Dark red text */
    border: 1px solid #f5c6cb; /* Red border */
    border-radius: 4px;
    padding: 10px;
    margin-bottom: 20px;
    font-size: 14px;
}



            </style>
        </head>
        <!-- Validation Errors -->
        
    <x-auth-validation-errors class="mb-4" :errors="$errors" />

    <form method="POST" action="{{ route('register') }}">
        @csrf

        <div class="form-container">
            <!-- Name -->
            <div class="field-container">
                <x-label for="name" :value="__('Name')" />
                <x-input id="name" class="x-input" type="text" name="name" :value="old('name')" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="field-container">
                <x-label for="email" :value="__('Email')" />
                <x-input id="email" class="x-input" type="email" name="email" :value="old('email')" required />
            </div>

            <!-- Password -->
            <div class="field-container">
                <x-label for="password" :value="__('Password')" />
                <x-input id="password" class="x-input" type="password" name="password" required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="field-container">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />
                <x-input id="password_confirmation" class="x-input" type="password" name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </div>
    </form>
</x-auth-card>
