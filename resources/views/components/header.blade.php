<!DOCTYPE html>
<head lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield("title")</title>
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet"/>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

<style>
/* Navbar styles */
.navbar {
    position: relative;
    background-color: #333; 
    padding: 2px 0;
}

.navbar-nav {
    display: flex; 
    flex-wrap: nowrap; 
    margin : 0px; 
    padding: 0;
    list-style: none; 
}

.navbar-nav .nav-item {
    margin: 0; 
}

.navbar-nav .nav-link {
    display: flex; 
    align-items: center; 
    font-size: 12px; 
    padding: 10px 15px; 
    color: white; 
    text-decoration: none; 
    transition: background-color 0.3s ease, color 0.3s ease; 
}

.navbar-nav .nav-link:hover {
    background-color: #5a9bd5; 
    color: #fff; 
    border-radius: 5px; 
}


.icon-container {
    position: relative;
    display: inline-flex; 
    align-items: center; 
    margin-right: 5px;
}

.icon-container i.fa-envelope {
    font-size: 15px; 
    color: white; 
    margin-right: 8px;
}

.icon-container i.danger-sign {
    position: absolute;
    top: -5px; 
    right: -5px; 
    font-size: 10px; 
    color: red; 
    background-color: white; 
    border-radius: 50%; 
    padding: 2px; 
    margin-right: 3px;
}


.navbar-brand {
    position: absolute;
    left: 0;
    top: 15px; 
    transform: translateY(0); 
    background-color: whitesmoke;
    padding: 10px;
    border-radius: 5px;
    z-index: 1; 
}

.navbar-brand img {
    width: 150px;
    height: auto;
}

/* Input Section */
input[type="text"], select {
    border: 1px solid black;
}
/* Footer styles */
.footer {
    background-color: #4682B4;
    padding: 5px 10px; 
    color: white;
    display: flex;
    justify-content: space-between;
    align-items: center;
    font-size: 10px;
}
.footer-links a {
    color: white;
    text-decoration: underline;
}
.footer-links a:hover {
    text-decoration: underline;
}
.footer-buttons a.btn:hover {
    background-color: #2a5bb5;
}
</style>
</head>
<header>
<a href="{{ route('dashboard') }}" class="navbar-brand">
            <img src="{{ asset('images/logo.png') }}" alt="Logo" class="logo">
        </a>
</header>
<main>
<nav class="navbar navbar-expand-lg" style="background-color: #4682B4; border-top-left-radius: 15px; border-bottom-left-radius: 15px; margin-top: 20px; margin-left: 180px; margin-right: 0;">
    <div class="container d-flex justify-content-between align-items-center" style="max-width: none; width: 100%; margin-left: auto; border-radius: 10px;">
        <!-- Navbar content goes here -->
        
        <div class = "d-flex align-items-center"></div>
        <button type="button" class="navbar-toggler" data-bs-toggle="collapse"
        data-bs-target="#navbarText">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class=navbar-nav me-auto mb-2 mb-lg-0>
                <li class="nav-item">
                    <a href={{ route('Home') }} class="nav-link text-white fw-bold  ">Home</a>
                </li>
                <li class="nav-item">
                    <a href={{ route('EHR') }} class="nav-link text-white fw-bold">EHR</a>
                </li>
                <li class="nav-item">
                    <a href={{ route('Patient') }} class="nav-link text-white fw-bold">Paitent</a>
                </li>
                <li class="nav-item">
                    <a href={{ route('Schedule') }} class="nav-link text-white  fw-bold">Schedule</a>
                </li>
                <li class="nav-item">
                <a href={{ route('Billing') }} class="nav-link text-white  fw-bold">Billing</a>
                </li>
                <li class="nav-item">
                <a href={{ route('Realtime') }} class="nav-link text-white  fw-bold">Realtime</a>
                </li>
                <li class="nav-item"><a href={{ route('Report') }} class="nav-link text-white  fw-bold">Report</a>
                </li>
                <li class="nav-item">
                <a href={{ route('TaskandMessages') }} class="nav-link text-white fw-bold">
                <div class="icon-container">
        <i class="fas fa-envelope"></i> 
        <i class="fas fa-exclamation-circle danger-sign"></i> 
    </div>TaskandMessages</a>
                </li>
                <a href={{ route('Admin') }} class="nav-link text-white  fw-bold">Admin</a>
                </li>
            </ul>
        </div>
</div>

    </div>
    
    </nav>


    

            <!--your navigation code here-->
        </nav>
        
</main>


    
    