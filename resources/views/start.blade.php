
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
</head>
<body>
    <div class="bg-home" style="background-color: #BF3131;">
        
        <!--nav-bar-start-->
        <nav class="navbar navbar-expand-lg container-fluid sticky-top pt-2 mb-5" style="background-color: #BF3131; position: fixed;">
            <div class="container">
                <a class="navbar-brand d-flex align-items-center gap-2" style="text-decoration: none;" href="#">
                    <img src="{{ asset('img/logo.png') }}" alt="logo" class="navbar-logo" style="width: 50px;">
                    <p class="navbar-brand text-white fs-3 mb-0 ">MyAtoTechApp</p>
                </a>
                <button class="navbar-toggler border-0 " type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation" >
                    <svg xmlns="http://www.w3.org/2000/svg" width="35px" height="35px" viewBox="0 0 24 24"><path fill="#fff" d="M3 8h18a1 1 0 0 0 0-2H3a1 1 0 0 0 0 2m18 8H3a1 1 0 0 0 0 2h18a1 1 0 0 0 0-2m0-5H3a1 1 0 0 0 0 2h18a1 1 0 0 0 0-2"/></svg>
                </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item me-4" id="nav-bar-text">
                        <a class="nav-link text-white fs-5" id="nav-link-home" href="#home-page">Home</a>
                    </li>
                    <li class="nav-item me-4" id="nav-bar-text">
                        <a class="nav-link text-white fs-5" id="nav-link-ourservice" href="#about-page">About</a>
                    </li>
                    <li class="nav-item me-4" id="nav-bar-text">
                        <a class="nav-link text-white fs-5" id="nav-link-portofolio" href="#milestones-page">Milestones</a>
                    <li class="nav-item dropdown me-4">
                        <a class="nav-link dropdown-toggle text-white fs-5" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Information
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#information-page">Information</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#vision-mission-page">Vision & Mission</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30px" height="30px" viewBox="0 0 24 24"><path fill="#fff" d="M12 4a4 4 0 0 1 4 4a4 4 0 0 1-4 4a4 4 0 0 1-4-4a4 4 0 0 1 4-4m0 10c4.42 0 8 1.79 8 4v2H4v-2c0-2.21 3.58-4 8-4"/></svg>
                        </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Login</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Sign up</a></li>
                    </ul>
                    </li>
                </ul>
            </div>
            </div>
        </nav> 
        <!--nav-bar-end-->
        <!--home-page-start-->
            <div class="home-page container pt-5" id="home-page">
                <div class="row">
                    <div class="col-6 mt-5">
                        <p class="home-title text-center fw-bold text-white m-0 mt-5" style="font-size: 28px;">Welcome To</p>
                        <p class="home-title text-center fw-bold text-white m-0 mb-4" style="font-size: 45px;">PT. ATO Technologies TBK</p>
                        <div class="d-flex justify-content-center ">
                            <a class="btn btn-custom rounded-pill border-3 " href="#" role="button" style=" background-color: #BF3131; color: #fff; border-color: #fff !important;"!important>OUR PROFILE <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" viewBox="0 0 24 24"><g fill="none"><path d="M24 0v24H0V0zM12.593 23.258l-.011.002l-.071.035l-.02.004l-.014-.004l-.071-.035c-.01-.004-.019-.001-.024.005l-.004.01l-.017.428l.005.02l.01.013l.104.074l.015.004l.012-.004l.104-.074l.012-.016l.004-.017l-.017-.427c-.002-.01-.009-.017-.017-.018m.265-.113l-.013.002l-.185.093l-.01.01l-.003.011l.018.43l.005.012l.008.007l.201.093c.012.004.023 0 .029-.008l.004-.014l-.034-.614c-.003-.012-.01-.02-.02-.022m-.715.002a.023.023 0 0 0-.027.006l-.006.014l-.034.614c0 .012.007.02.017.024l.015-.002l.201-.093l.01-.008l.004-.011l.017-.43l-.003-.012l-.01-.01z"/><path fill="currentColor" d="m15.06 5.283l5.657 5.657a1.5 1.5 0 0 1 0 2.12l-5.656 5.658a1.5 1.5 0 0 1-2.122-2.122l3.096-3.096H4.5a1.5 1.5 0 0 1 0-3h11.535L12.94 7.404a1.5 1.5 0 0 1 2.122-2.121Z"/></g></svg></a>
                        </div>
                    </div>
                    <div class="col-6 pt-3 d-flex justify-content-center">
                        <img src="img/user.png" alt="user" class="home-user" style="width: 400px; height: auto;">
                    </div>
                </div>
                </div>
                <svg class="position-absolute bottom-0 mb-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 385"><path fill="#fff" fill-opacity="1" d="M0,160L48,165.3C96,171,192,181,288,186.7C384,192,480,192,576,181.3C672,171,768,149,864,144C960,139,1056,149,1152,149.3C1248,149,1344,139,1392,133.3L1440,128L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
    </div>
        <!--home-page-end-->
        <!-- clients-page -->
    <div class="bg-clients" style="background-color: #fff;">
        <div class="container-fluid">
            <div class="d-flex justify-content-center" style="padding-top: 40px;">
                <p class="clients-title fs-6 " style="opacity: 0.7;">Some of our clients :</p>
            </div>
            <ul class="list-unstyled row justify-content-center">
                <li class="col-2 p-0 " style="text-align: center;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="130px" height="130px" viewBox="0 0 128 128"><path fill="#4885ed" d="M31.85 57.91H17.09v4.38h10.47c-.52 6.14-5.63 8.76-10.45 8.76a11.7 11.7 0 0 1 0-23.4A11.36 11.36 0 0 1 25 50.82l3.07-3.18A15.6 15.6 0 0 0 17 43.26a16.09 16.09 0 1 0 .23 32.18c8.61 0 14.92-5.9 14.92-14.63a13 13 0 0 0-.27-2.9z"/><path fill="#db3236" d="M43.94 54.74a10.34 10.34 0 1 0 10.38 10.38a10.22 10.22 0 0 0-10.38-10.38M44 58.8a6.29 6.29 0 1 1-5.92 6.26A5.95 5.95 0 0 1 44 58.8"/><path fill="#f4c20d" d="M66.56 54.74a10.34 10.34 0 1 0 10.37 10.38a10.22 10.22 0 0 0-10.37-10.38m.06 4.06a6.29 6.29 0 1 1-5.92 6.26a5.95 5.95 0 0 1 5.92-6.26"/><path fill="#4885ed" d="M88.73 54.75c-5.56 0-9.93 4.87-9.93 10.33a10.2 10.2 0 0 0 9.83 10.35a6.83 6.83 0 0 0 5.67-2.51v2c0 3.57-2.17 5.7-5.44 5.7A5.73 5.73 0 0 1 83.58 77l-4 1.66a10 10 0 0 0 9.3 6.09c5.53 0 9.74-3.48 9.74-10.78v-18.6h-4.31v1.75a7.32 7.32 0 0 0-5.58-2.37m.4 4.05c2.73 0 5.52 2.33 5.52 6.3s-2.79 6.27-5.58 6.27a5.88 5.88 0 0 1-5.72-6.23c0-4 2.86-6.34 5.78-6.34"/><path fill="#db3236" d="M117.93 54.72c-5.24 0-9.65 4.17-9.65 10.33a10 10 0 0 0 10.15 10.38a10.49 10.49 0 0 0 8.66-4.54l-3.58-2.38a5.79 5.79 0 0 1-5.07 2.85a5.32 5.32 0 0 1-5.07-3.13l13.87-5.75l-.72-1.69a9.36 9.36 0 0 0-8.6-6.06zm.18 4a4.12 4.12 0 0 1 3.83 2.21l-9.26 3.87a5.74 5.74 0 0 1 5.43-6.08"/><path fill="#3cba54" d="M101.67 74.82h4.56V44.33h-4.56z"/></svg>
                </li>
                <li class="col-2 p-0 "  style="text-align: center;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="130px" height="130px" viewBox="0 0 512 138"><path fill="#db202c" d="M340.657 0v100.203q18.54.861 36.98 2.09v21.245a1822 1822 0 0 0-58.542-2.959V0zM512 .012l-28.077 65.094l28.07 72.438l-.031.013a1789 1789 0 0 0-24.576-3.323l-15.763-40.656l-15.913 36.882a1816 1816 0 0 0-22.662-2.36l27.371-63.43L435.352.013h23.325l14.035 36.184L488.318.012zM245.093 119.526V.011h60.19v21.436h-38.628v27.78h29.227v21.245h-29.227v49.05zM164.58 21.448V.01h66.69v21.437h-22.565v98.66c-7.197.19-14.386.412-21.56.683V21.448zM90.868 126.966V.014h59.89v21.435h-38.331v29.036c8.806-.113 21.327-.24 29.117-.222V71.51c-9.751-.12-20.758.134-29.117.217v32.164a1848 1848 0 0 1 38.331-2.62v21.247a1816 1816 0 0 0-59.89 4.45M48.571 77.854L48.57.01h21.562v128.96q-11.823 1.216-23.603 2.584L21.56 59.824v74.802q-10.8 1.406-21.56 2.936V.012h20.491zm346.854 46.965V.012h21.563V126.6c-7.179-.64-14.364-1.23-21.563-1.78"/></svg>
                </li>
                <li class="col-2 p-0 "  style="text-align: center;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="130px" height="130px" viewBox="0 0 512 161"><path fill="#ff385c" d="M147.508 113.996c-.72-2.022-1.562-3.978-2.363-5.79a541 541 0 0 0-3.772-8.282l-.1-.215a1853 1853 0 0 0-35.53-72.668l-.529-1.024a473 473 0 0 0-3.926-7.505A48.8 48.8 0 0 0 95.51 9.62a26.9 26.9 0 0 0-9.248-7.098a26.95 26.95 0 0 0-22.776.003a26.9 26.9 0 0 0-9.246 7.1a49 49 0 0 0-5.773 8.89a481 481 0 0 0-3.962 7.574l-.49.95A1855 1855 0 0 0 8.484 99.71l-.162.35a547 547 0 0 0-3.709 8.145c-.8 1.811-1.641 3.766-2.362 5.793a35.5 35.5 0 0 0-1.916 17.308a34.2 34.2 0 0 0 6.924 16.173a34.3 34.3 0 0 0 14.055 10.606a34.9 34.9 0 0 0 13.151 2.544q2.126 0 4.238-.247a43.2 43.2 0 0 0 16.172-5.456c6.523-3.665 12.966-9.036 20.004-16.711c7.038 7.675 13.48 13.046 20.004 16.71a43.2 43.2 0 0 0 16.172 5.457a37 37 0 0 0 4.238.247c4.507.01 8.973-.854 13.15-2.544a34.3 34.3 0 0 0 14.056-10.606a34.2 34.2 0 0 0 6.924-16.173a35.54 35.54 0 0 0-1.915-17.31m-72.629 8.367c-8.713-11.044-14.303-21.3-16.265-29.897a26.4 26.4 0 0 1-.56-9.857a16.1 16.1 0 0 1 2.593-6.739a17.95 17.95 0 0 1 6.302-5.15a18 18 0 0 1 15.862.002a17.95 17.95 0 0 1 6.301 5.15a16.1 16.1 0 0 1 2.593 6.74a26.5 26.5 0 0 1-.562 9.86c-1.964 8.597-7.553 18.85-16.264 29.891m64.368 7.489a23.9 23.9 0 0 1-4.841 11.307a23.97 23.97 0 0 1-9.828 7.416a25.05 25.05 0 0 1-12.336 1.614a32.6 32.6 0 0 1-12.317-4.207c-5.807-3.262-11.685-8.27-18.3-15.617c10.53-12.983 17.106-24.95 19.54-35.61a36.6 36.6 0 0 0 .7-13.7a26.3 26.3 0 0 0-4.274-10.985a28.2 28.2 0 0 0-9.989-8.427a28.26 28.26 0 0 0-25.444 0a28.2 28.2 0 0 0-9.99 8.425a26.3 26.3 0 0 0-4.274 10.981a36.6 36.6 0 0 0 .696 13.696c2.433 10.663 9.009 22.634 19.542 35.621c-6.614 7.346-12.492 12.354-18.299 15.617a32.6 32.6 0 0 1-12.317 4.206a25.05 25.05 0 0 1-12.337-1.614a24 24 0 0 1-9.827-7.415a23.9 23.9 0 0 1-4.84-11.308a25.2 25.2 0 0 1 1.426-12.42c.574-1.616 1.247-3.2 2.08-5.084a543 543 0 0 1 3.639-7.991l.162-.352a1844 1844 0 0 1 35.336-72.266l.492-.955c1.26-2.443 2.562-4.97 3.876-7.411a39.7 39.7 0 0 1 4.539-7.087a16.65 16.65 0 0 1 25.631-.002a39.5 39.5 0 0 1 4.54 7.084c1.301 2.42 2.592 4.924 3.841 7.345l.53 1.027a1842 1842 0 0 1 35.335 72.267l.1.216c1.23 2.663 2.503 5.415 3.701 8.126c.834 1.886 1.508 3.472 2.081 5.082a25.2 25.2 0 0 1 1.426 12.42m69.993-8.781q-6.015 0-11.07-2.411c-3.37-1.608-6.257-3.86-8.824-6.753s-4.492-6.27-5.937-9.969c-1.444-3.859-2.086-8.04-2.086-12.541s.803-8.844 2.247-12.703s3.53-7.235 6.097-10.29c2.567-2.894 5.615-5.306 9.145-6.914s7.22-2.412 11.392-2.412c4.01 0 7.54.804 10.75 2.573c3.209 1.608 5.776 4.02 7.861 7.074l.482-7.878h14.76v60.617h-14.76l-.482-8.843c-2.085 3.215-4.813 5.788-8.343 7.717c-3.209 1.77-7.06 2.734-11.231 2.734m3.852-14.47c2.888 0 5.455-.804 7.862-2.251c2.246-1.608 4.01-3.698 5.455-6.27c1.283-2.573 1.925-5.628 1.925-9.005s-.642-6.432-1.925-9.004c-1.284-2.573-3.21-4.663-5.455-6.27c-2.247-1.609-4.974-2.252-7.862-2.252s-5.455.804-7.862 2.251c-2.246 1.608-4.011 3.698-5.455 6.27c-1.284 2.573-1.926 5.628-1.926 9.005s.642 6.432 1.926 9.004c1.283 2.573 3.209 4.663 5.455 6.27c2.407 1.448 4.974 2.252 7.862 2.252m56.156-64.155c0 1.769-.321 3.377-1.124 4.663a9.3 9.3 0 0 1-3.369 3.216c-1.444.804-3.048 1.125-4.652 1.125s-3.21-.321-4.654-1.125a9.3 9.3 0 0 1-3.369-3.216c-.802-1.447-1.123-2.894-1.123-4.663c0-1.768.32-3.376 1.123-4.663c.802-1.447 1.925-2.411 3.37-3.215c1.443-.804 3.048-1.126 4.653-1.126s3.208.322 4.652 1.126a9.3 9.3 0 0 1 3.37 3.215c.641 1.287 1.123 2.734 1.123 4.663m-17.168 76.857V58.685h16.044v60.617zm58.884-44.7v.162c-.802-.322-1.765-.483-2.568-.643c-.962-.161-1.765-.161-2.727-.161c-4.493 0-7.862 1.286-10.108 4.02c-2.407 2.733-3.53 6.592-3.53 11.576v29.746h-16.044V58.685h14.76l.482 9.165c1.604-3.216 3.53-5.628 6.257-7.396c2.567-1.77 5.615-2.573 9.145-2.573c1.124 0 2.247.16 3.21.321c.48.161.801.161 1.123.322zm6.417 44.7v-85.54h16.045v32.64c2.246-2.893 4.813-5.145 8.022-6.913c3.21-1.608 6.74-2.573 10.75-2.573q6.016 0 11.07 2.412c3.37 1.608 6.258 3.859 8.825 6.753c2.568 2.894 4.493 6.271 5.937 9.97c1.444 3.858 2.085 8.038 2.085 12.54c0 4.503-.802 8.844-2.245 12.703c-1.445 3.859-3.53 7.235-6.098 10.29c-2.567 2.895-5.615 5.306-9.145 6.914s-7.22 2.412-11.391 2.412c-4.012 0-7.541-.804-10.75-2.573c-3.21-1.608-5.777-4.02-7.862-7.074l-.482 7.878zm30.966-12.702c2.889 0 5.456-.804 7.862-2.251c2.246-1.608 4.011-3.698 5.455-6.27c1.284-2.573 1.926-5.628 1.926-9.005s-.642-6.432-1.926-9.004c-1.444-2.573-3.209-4.663-5.455-6.27c-2.246-1.609-4.973-2.252-7.862-2.252c-2.888 0-5.455.804-7.861 2.251c-2.247 1.608-4.012 3.698-5.456 6.27c-1.283 2.573-1.925 5.628-1.925 9.005s.642 6.432 1.925 9.004c1.284 2.573 3.21 4.663 5.456 6.27c2.406 1.448 4.973 2.252 7.861 2.252m37.866 12.702V58.685h14.76l.482 7.879c1.765-2.895 4.171-5.146 7.22-6.914c3.048-1.769 6.578-2.573 10.59-2.573c4.492 0 8.342 1.125 11.551 3.216c3.37 2.09 5.937 5.145 7.702 9.004s2.727 8.521 2.727 13.828v36.338h-16.044V85.215c0-4.18-.963-7.557-2.888-9.97c-1.925-2.41-4.493-3.697-7.862-3.697c-2.407 0-4.493.482-6.418 1.608c-1.765 1.125-3.209 2.572-4.332 4.663c-1.123 1.929-1.604 4.34-1.604 6.753v34.73zm63.054 0v-85.54h16.045v32.64c2.246-2.893 4.813-5.145 8.022-6.913c3.21-1.608 6.74-2.573 10.75-2.573q6.018 0 11.071 2.412c3.37 1.608 6.257 3.859 8.824 6.753c2.57 2.894 4.492 6.271 5.938 9.97c1.446 3.858 2.083 8.038 2.083 12.54c0 4.503-.798 8.844-2.244 12.703c-1.445 3.859-3.529 7.235-6.099 10.29c-2.566 2.895-5.614 5.306-9.144 6.914s-7.22 2.412-11.391 2.412c-4.011 0-7.541-.804-10.75-2.573c-3.21-1.608-5.776-4.02-7.862-7.074l-.481 7.878zm31.127-12.702c2.888 0 5.455-.804 7.862-2.251c2.246-1.608 4.01-3.698 5.455-6.27c1.284-2.573 1.926-5.628 1.926-9.005s-.642-6.432-1.926-9.004c-1.283-2.573-3.209-4.663-5.455-6.27c-2.247-1.609-4.974-2.252-7.862-2.252s-5.455.804-7.862 2.251c-2.246 1.608-4.01 3.698-5.455 6.27c-1.444 2.573-1.926 5.628-1.926 9.005s.643 6.432 1.926 9.004c1.284 2.573 3.21 4.663 5.455 6.27c2.407 1.448 4.814 2.252 7.862 2.252"/></svg>
                </li>
                <li class="col-2 p-0 "  style="text-align: center;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="130px" height="130px" viewBox="0 0 24 24"><path fill="#00529c" d="M23.904 10.788V9.522h-4.656c-.972 0-1.41.6-1.482 1.182v.018v-1.2h-1.368v1.266h1.362zm-6.144.456l-1.368-.078v1.458c0 .456-.228.594-1.02.594H14.28c-.654 0-.93-.186-.93-.594v-1.596l-1.386-.102v1.812h-.03c-.078-.528-.276-1.14-1.596-1.23L6 11.22c0 .666.474 1.062 1.218 1.14l3.024.306c.24.018.414.09.414.288c0 .216-.18.24-.456.24H5.946V11.22l-1.386-.09v3.348h5.646c1.26 0 1.662-.654 1.722-1.2h.03c.156.864.912 1.2 2.19 1.2h1.41c1.494 0 2.202-.456 2.202-1.524zm4.398.258l-4.338-.258c0 .666.438 1.11 1.182 1.17l3.09.24c.24.018.384.078.384.276c0 .186-.168.258-.516.258h-4.212v1.29h4.302c1.356 0 1.95-.474 1.95-1.554c0-.972-.534-1.338-1.842-1.422m-10.194-1.98h1.386v1.266h-1.386zM3.798 11.07l-1.506-.15L0 14.478h1.686zm7.914-1.548h-4.23c-.984 0-1.416.612-1.518 1.2v-1.2H3.618c-.33 0-.486.102-.642.33l-.648.936h9.384Z"/></svg>
                </li>
                <li class="col-2 p-0 "  style="text-align: center;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="130px" height="130px" viewBox="0 0 24 24"><path fill="#0041c0" d="M3.157 11.485a1.254 1.254 0 0 0-1.18-1.324H0v3.58h1.084v-1.1h.66q.25 0 .496-.059c.497-.103.87-.52.917-1.025zm-1.081.005a.35.35 0 0 1-.337.301c-.081.007-.15.007-.23.007h-.425v-.777h.632a.36.36 0 0 1 .36.326a.7.7 0 0 1 0 .143m3.678 1.45c0-.278-.01-.51-.01-.786a1.7 1.7 0 0 0-.057-.42a.67.67 0 0 0-.332-.43a1 1 0 0 0-.316-.118a2.6 2.6 0 0 0-1.065-.02q-.15.023-.29.082a.77.77 0 0 0-.455.5a.6.6 0 0 0-.024.261a.1.1 0 0 0 .014.048l.86.02a.4.4 0 0 1 .025-.153a.26.26 0 0 1 .162-.162a.5.5 0 0 1 .342 0a.23.23 0 0 1 .156.157a.15.15 0 0 1-.02.13a.2.2 0 0 1-.1.078l-.074.024q-.17.045-.343.075a7 7 0 0 0-.276.05a3 3 0 0 0-.365.095a.8.8 0 0 0-.295.173a.62.62 0 0 0-.205.393a.8.8 0 0 0 .012.3a.71.71 0 0 0 .51.54c.276.083.573.067.84-.044a.83.83 0 0 0 .344-.248l.057.176q.019.048.051.087h.948a.4.4 0 0 1-.068-.207q-.02-.3-.026-.6m-.956-.088a.4.4 0 0 1-.067.193a.4.4 0 0 1-.182.145a.6.6 0 0 1-.21.054a.5.5 0 0 1-.163-.013a.24.24 0 0 1-.12-.074a.2.2 0 0 1-.057-.106a.17.17 0 0 1 .064-.174a.3.3 0 0 1 .105-.063q.142-.053.288-.093q.177-.052.342-.13a1 1 0 0 1 0 .261M8.06 11.14a1.04 1.04 0 0 0-.755.054a1.7 1.7 0 0 0-.393.262l-.023-.27H5.97v2.56h.982v-1.42a.4.4 0 0 1 .06-.222a.383.383 0 0 1 .482-.16c.081.032.142.1.167.183q.02.065.02.131v1.484h1.01V12.09a1.2 1.2 0 0 0-.06-.394a.82.82 0 0 0-.572-.558zm5.95 1.25a1.1 1.1 0 0 0-.42-.23l-.106-.03a5 5 0 0 0-.58-.123a2 2 0 0 1-.156-.03a.3.3 0 0 1-.068-.024a.117.117 0 0 1-.059-.152v-.008a.22.22 0 0 1 .131-.105a.5.5 0 0 1 .316 0c.107.03.178.133.17.244h.902a.9.9 0 0 0-.055-.31a.55.55 0 0 0-.184-.255a.9.9 0 0 0-.242-.138a1.2 1.2 0 0 0-.262-.073a2.6 2.6 0 0 0-.642-.037a2 2 0 0 0-.366.054a1.1 1.1 0 0 0-.444.211a.7.7 0 0 0-.28.526a.7.7 0 0 0 .052.316a.68.68 0 0 0 .393.393q.135.054.278.082l.554.104q.105.016.205.051c.06.018.103.07.113.131a.19.19 0 0 1-.052.176a.3.3 0 0 1-.17.086a.5.5 0 0 1-.262-.025a.4.4 0 0 1-.105-.06a.26.26 0 0 1-.089-.132a.4.4 0 0 1-.02-.138h-.932v.055a.77.77 0 0 0 .256.555a1 1 0 0 0 .426.24c.33.098.676.12 1.014.065q.241-.035.455-.148a1 1 0 0 0 .176-.118a.78.78 0 0 0 .246-.852a.63.63 0 0 0-.193-.302zm6.198-2.226h.957v.676h-.957zm0 1.024h.957v2.558h-.957zm2.872 1.505a1 1 0 0 1-.018.154a.4.4 0 0 1-.096.2a.3.3 0 0 1-.185.097a.36.36 0 0 1-.316-.1a.53.53 0 0 1-.152-.26a1.17 1.17 0 0 1 .012-.703a.4.4 0 0 1 .178-.232a.36.36 0 0 1 .407.017c.092.068.153.17.17.284h.874a.8.8 0 0 0-.09-.417a1.12 1.12 0 0 0-.724-.564a1.7 1.7 0 0 0-.806-.02c-.48.094-.863.456-.984.93a1.4 1.4 0 0 0-.03.621q.034.226.151.42c.095.171.227.32.385.435c.19.148.416.24.655.262q.27.03.538-.025a1.24 1.24 0 0 0 .685-.38a.93.93 0 0 0 .263-.719zm-3.704-1.553a1.04 1.04 0 0 0-.755.054a1.7 1.7 0 0 0-.393.262l-.03-.27h-.919v2.56h.984v-1.429a.43.43 0 0 1 .06-.22a.39.39 0 0 1 .484-.16c.08.032.14.1.164.182a.5.5 0 0 1 .021.14v1.483h1.016V12.09a1.2 1.2 0 0 0-.06-.394a.82.82 0 0 0-.572-.558zm-7.879 1.8c0-.278-.01-.51-.012-.786q0-.214-.054-.42a.68.68 0 0 0-.333-.43a1 1 0 0 0-.315-.118a2.6 2.6 0 0 0-1.067-.02q-.15.023-.289.082a.77.77 0 0 0-.456.5a.6.6 0 0 0-.025.261a.2.2 0 0 0 .015.048l.86.02a.4.4 0 0 1 .024-.153a.26.26 0 0 1 .163-.162a.5.5 0 0 1 .342 0a.23.23 0 0 1 .156.157a.15.15 0 0 1-.02.13a.2.2 0 0 1-.099.078l-.075.024q-.17.045-.343.075a6 6 0 0 0-.274.05a3 3 0 0 0-.366.095a.8.8 0 0 0-.296.173a.62.62 0 0 0-.21.393a.8.8 0 0 0 .012.3c.056.26.252.468.508.54c.277.083.575.067.842-.044a.8.8 0 0 0 .335-.245q.025.087.057.173a.3.3 0 0 0 .052.087h.948a.4.4 0 0 1-.054-.207a14 14 0 0 1-.026-.6m-.97-.084a.44.44 0 0 1-.07.19a.37.37 0 0 1-.167.144a.7.7 0 0 1-.205.054a.5.5 0 0 1-.175-.015a.25.25 0 0 1-.122-.073a.2.2 0 0 1-.055-.105a.17.17 0 0 1 .057-.17a.3.3 0 0 1 .105-.063a5 5 0 0 1 .288-.093q.177-.053.344-.13q.015.13 0 .261m5.483-1.72a1.9 1.9 0 0 0-.577 0a1.33 1.33 0 0 0-.747.371a1.2 1.2 0 0 0-.383.798c-.02.185-.003.372.048.551c.073.278.24.522.47.693c.147.117.32.197.504.235c.26.055.527.055.787 0a1.2 1.2 0 0 0 .507-.235c.23-.17.396-.415.468-.693a1.4 1.4 0 0 0 .05-.55a1.2 1.2 0 0 0-.383-.799a1.33 1.33 0 0 0-.743-.37zm.06 1.814a.39.39 0 0 1-.513.193a.37.37 0 0 1-.194-.193a1 1 0 0 1-.072-.246a1.4 1.4 0 0 1 .012-.515a.7.7 0 0 1 .1-.247a.374.374 0 0 1 .622 0a.6.6 0 0 1 .105.247q.052.257.01.515a1 1 0 0 1-.07.246"/></svg>
                </li>
            </ul>
            <ul class="list-unstyled row justify-content-center">
                <li class="col-2 p-0" style="text-align: center;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="130px" height="130px" viewBox="0 0 32 32"><path fill="#0071c5" d="M9.427 14.401v5.167H7.781v-6.495h3.396c1.443 0 1.932 1.021 1.932 1.943v4.552h-1.641v-4.542c0-.391-.198-.625-.682-.625zm11.188-.078c-.568 0-1 .286-1.182.682a1.633 1.633 0 0 0-.156.703h2.531c-.031-.703-.354-1.385-1.193-1.385m-1.339 2.505c0 .839.521 1.464 1.458 1.464c.724 0 1.083-.203 1.505-.625l1.016.974c-.646.641-1.333 1.031-2.536 1.031c-1.573 0-3.078-.859-3.078-3.359c0-2.141 1.313-3.349 3.042-3.349c1.755 0 2.766 1.417 2.766 3.271v.589h-4.172zm-3.026 2.729c-1.339 0-1.906-.932-1.906-1.854v-6.401h1.641v1.771h1.234v1.328h-1.234v3.198c0 .38.177.589.568.589h.667v1.37zm-9.932-7.38H4.662v-1.578h1.656zm.005 7.458c-1.24-.12-1.661-.87-1.661-1.74v-4.823h1.656v6.568zm19.74-.14c-1.24-.12-1.656-.87-1.656-1.734v-7.38h1.656v9.12zm5.796-8.047c-1.5-7.328-15.724-7.792-24.885-2.214v.62c9.151-4.708 22.141-4.677 23.323 2.063c.391 2.234-.865 4.557-3.109 5.896v1.75c2.703-.99 5.474-4.198 4.672-8.115zM15.198 24.26c-6.323.583-12.917-.339-13.839-5.276c-.448-2.438.667-5.021 2.13-6.625v-.854C.843 13.828-.594 16.771.234 20.245c1.057 4.458 6.714 6.984 15.344 6.146c3.417-.333 7.891-1.432 10.995-3.141v-2.422c-2.818 1.682-7.49 3.073-11.375 3.432m12.781-13.395c0-.078-.052-.104-.156-.104h-.104v.229h.104c.104 0 .156-.031.156-.109zm.162.567h-.125a.028.028 0 0 1-.026-.016l-.167-.286a.041.041 0 0 0-.026-.01h-.073v.281c0 .016-.016.031-.031.031h-.109c-.016 0-.031-.016-.031-.031v-.714c0-.036.021-.057.052-.063c.068-.005.135-.005.203-.005c.203 0 .328.057.328.25v.01c0 .12-.063.182-.151.214l.172.292c0 .005.005.016.005.021c.005.01-.005.026-.021.026m-.292-.948a.547.547 0 0 0-.547.547c.005.302.25.547.552.547a.545.545 0 0 0 .542-.542a.551.551 0 0 0-.547-.552m0 1.209a.657.657 0 1 1 0-1.317c.359 0 .661.297.661.661s-.302.656-.661.656"/></svg>                </li>
                <li class="col-2 p-0 "  style="text-align: center;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="130px" height="130px" viewBox="0 0 1024 1024"><path fill="#ff6701" d="M602.9 669.8c-37.2 2.6-33.6-17.3-11.5-46.2c50.4-67.2 143.7-158.5 147.9-225.2c5.8-86.6-81.3-113.4-171-113.4c-62.4 1.6-127 18.9-171 34.6c-151.6 53.5-246.6 137.5-306.9 232c-62.4 93.4-43 183.2 91.8 185.8c101.8-4.2 170.5-32.5 239.7-68.2c.5 0-192.5 55.1-263.9 14.7c-7.9-4.2-15.7-10-17.8-26.2c0-33.1 54.6-67.7 86.6-78.7v-56.7c64.5 22.6 140.6 16.3 205.7-32c2.1 5.8 4.2 13.1 3.7 21h11c2.6-22.6-12.6-44.6-37.8-46.2c7.3 5.8 12.6 10.5 15.2 14.7l-1 1l-.5.5c-83.9 58.8-165.3 31.5-173.1 29.9l46.7-45.7l-13.1-33.1c92.9-32.5 169.5-56.2 296.9-78.7l-28.5-23l14.7-8.9c75.5 21 126.4 36.7 123.8 76.6c-1 6.8-3.7 14.7-7.9 23.1C660.1 466.1 594 538 567.2 569c-17.3 20.5-34.6 39.4-46.7 58.3c-13.6 19.4-20.5 37.3-21 53.5c2.6 131.8 391.4-61.9 468-112.9c-111.7 47.8-232.9 93.5-364.6 101.9m85-302.9c2.8 5.2 4.1 11.6 4.1 19.1c-.1-6.8-1.4-13.3-4.1-19.1"/></svg>                </li>
                <li class="col-2 p-0" style="text-align: center;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="130px" height="130px" viewBox="0 0 24 24"><path fill="#0530ad" d="M23.544 15.993q.059 0 .06-.053v-.036q-.001-.052-.06-.052h-.09v.14zm-.09.262h-.121v-.498h.225c.112 0 .169.066.169.157c0 .079-.036.129-.09.15l.111.19h-.133l-.092-.17h-.07zm.434-.222v-.062c0-.2-.157-.357-.363-.357a.355.355 0 0 0-.363.357v.062c0 .2.156.358.363.358a.355.355 0 0 0 .363-.358m-.838-.03c0-.28.212-.492.475-.492c.264 0 .475.213.475.491a.477.477 0 0 1-.475.491a.477.477 0 0 1-.475-.49M16.21 8.13l-.216-.624h-3.56v.624zm.413 1.19l-.216-.623h-3.973v.624zm2.65 7.147h3.107v-.624h-3.108zm0-1.192h3.107v-.623h-3.108zm0-1.19h1.864v-.624h-1.865zm0-1.191h1.864v-.624h-1.865zm0-1.191h1.864v-.624h-3.555l-.175.504l-.175-.504h-3.555v.624h1.865v-.574l.2.574h3.33l.2-.574zm1.864-1.815h-3.142l-.217.624h3.359zm-7.46 3.006h1.865v-.624h-1.865zm0 1.19h1.865v-.623h-1.865zm-1.243 1.191h3.108v-.623h-3.108zm0 1.192h3.108v-.624h-3.108zm6.386-8.961l-.216.624h3.776v-.624zm-.629 1.815h4.19v-.624h-3.974zm-4.514 1.19h3.359l-.216-.623h-3.143zm2.482 2.383h2.496l.218-.624h-2.932zm.417 1.19h1.662l.218-.623h-2.098zm.416 1.191h.83l.218-.623h-1.266zm.414 1.192l.217-.624h-.432zm-12.433-.006l4.578.006c.622 0 1.18-.237 1.602-.624h-6.18zm4.86-3v.624h2.092q-.002-.325-.083-.624zm-3.616.624h1.865v-.624H6.217zm3.617-3.573h2.008q.081-.3.083-.624H9.834zm-3.617 0h1.865v-.624H6.217zM9.55 7.507H4.973v.624h6.18a2.36 2.36 0 0 0-1.602-.624zm2.056 1.191H4.973v.624h6.884a2.4 2.4 0 0 0-.25-.624zm-5.39 2.382v.624h4.87c.207-.176.382-.387.519-.624zm4.87 1.191h-4.87v.624h5.389a2.4 2.4 0 0 0-.519-.624m-6.114 3.006h6.634c.11-.193.196-.402.25-.624H4.973zM0 8.13h4.352v-.624H0zm0 1.191h4.352v-.624H0zm1.243 1.191h1.865v-.624H1.243zm0 1.191h1.865v-.624H1.243zm0 1.19h1.865v-.623H1.243zm0 1.192h1.865v-.624H1.243zM0 15.276h4.352v-.623H0zm0 1.192h4.352v-.624H0Z"/></svg>                </li>
                <li class="col-2 p-0 "  style="text-align: center;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="130px" height="130px" viewBox="0 0 512 98"><path d="M312.805 18.394v63.838h18.015V18.394zm-141.742-.108v63.892h18.178v-49.61l14.174.054c4.653 0 7.899 1.136 10.117 3.517c2.867 3.03 4.003 7.952 4.003 16.879v29.16h17.637V46.904c0-25.21-16.068-28.618-31.757-28.618zm170.793.108v63.838h29.214c15.58 0 20.666-2.597 26.13-8.386c3.896-4.057 6.384-13.038 6.384-22.83c0-8.98-2.11-16.987-5.843-21.964c-6.6-8.927-16.23-10.658-30.62-10.658zm17.853 13.85h7.736c11.253 0 18.503 5.03 18.503 18.123s-7.25 18.177-18.503 18.177h-7.736zm-72.872-13.85l-15.04 50.583l-14.39-50.583H237.93l20.558 63.838h25.967l20.775-63.838zm125.187 63.838h18.015V18.394h-18.015zm50.529-63.838l-25.157 63.784h17.745l4.004-11.307h29.754l3.787 11.252H512l-25.373-63.73zm11.685 11.631l10.929 29.863h-22.181z"/><path fill="#76b900" d="M54.803 28.997v-8.764c.866-.054 1.731-.108 2.597-.108c24.02-.757 39.763 20.666 39.763 20.666S80.176 64.38 61.944 64.38c-2.434 0-4.815-.379-7.087-1.136V36.626c9.36 1.136 11.253 5.247 16.825 14.606L84.18 40.737s-9.143-11.956-24.507-11.956c-1.623-.054-3.246.054-4.869.216m0-28.997v13.092l2.597-.162c33.38-1.136 55.182 27.374 55.182 27.374S87.587 70.708 61.566 70.708c-2.273 0-4.49-.216-6.709-.595v8.115c1.84.217 3.733.379 5.572.379c24.237 0 41.765-12.389 58.753-26.996c2.813 2.272 14.336 7.736 16.717 10.117c-16.122 13.525-53.721 24.399-75.037 24.399a53 53 0 0 1-5.95-.325v11.415h92.077V0zm0 63.243v6.924c-22.397-4.003-28.619-27.32-28.619-27.32s10.766-11.902 28.619-13.85v7.574h-.054c-9.36-1.136-16.717 7.628-16.717 7.628s4.166 14.77 16.771 19.044M15.04 41.873s13.254-19.584 39.817-21.64v-7.14C25.427 15.472 0 40.357 0 40.357s14.39 41.657 54.803 45.444v-7.574C25.156 74.55 15.04 41.873 15.04 41.873"/></svg>                </li>
            </ul>
        </div>
    </div>
            <!-- cliens-page-end -->
            <!-- about-page-start -->
    <div class="about-page" style="background-color: #EEEEEE;">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 230"><path fill="#fff" fill-opacity="1" d="M0,224L48,218.7C96,213,192,203,288,181.3C384,160,480,128,576,133.3C672,139,768,181,864,192C960,203,1056,181,1152,165.3C1248,149,1344,139,1392,133.3L1440,128L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path></svg>
        <div class="container" id="about-page">
            <div class="d-flex justify-content-center gap-2">
                <p class="about-title fs-2 pt-5" style="opacity: 0.7;">What is</p>
                <p class="about-title fs-2 pt-5" style="color: #BF3131;">MyAtoTechApp?</p>
            </div>
            <div class="row pt-5 pb-5">
                <div class="col-6 text-center">
                    <p class="about-text fs-4" style="opacity: 0.7;">
                        Welcome to 
                        <span style="color: #BF3131; opacity: 1;">MyAtoTechApp, </span>
                        the official platform of PT. ATO Technologies TBK, designed to cater to the needs of our clients and employees. Launched as part of our commitment to innovation and customer satisfaction, MyATOtechApp serves as a comprehensive solution for various functionalities.
                    </p>
                </div>
                <div class="col-6 d-flex justify-content-end">
                    <img src="img/office.jpg" alt="office" class="about-img" style="width: 550px; border-radius: 10px; border: 5px solid #BF3131;">
                </div>
            </div>
            <div class="divider-line"></div>
            <div class="about-story pt-4 pb-5">
                <p class="about-text fs-4 pb-5 d-flex justify-content-center" style="color: #BF3131;">Our Story</p>
                <p class="about-text fs-4 text-center" style="opacity: 0.7;">
                    <span style="color: #BF3131; opacity: 1;">MyAtoTechApp, </span>
                    was developed to share the journey of PT. ATO Technologies TBK with our valued clients and partners. From our humble beginnings in Batam, Kepulauan Riau, to becoming a global leader in software and hardware solutions, we want you to be a part of our story. Our app provides insights into our milestones, achievements, and the visionary leadership of our founder, <span style="color: #BF3131; opacity: 1;">Aleser Tarikh Omar.</span>
                </p>
            </div>
            <div class="divider-line"></div>
            <div class="about-services pt-4 pb-5">
                <p class="about-text fs-4 pb-5 d-flex justify-content-center" style="color: #BF3131;">Client Services</p>
                <div class="row">
                    <div class="col-6">
                        <p class="about-text fs-4 d-flex justify-content-center" style="color: #BF3131;">Contact Us :</p>
                        <p class="about-text fs-4 text-center" style="opacity: 0.7;">
                            <span style="color: #BF3131; opacity: 1;">MyAtoTechApp, </span>
                            allows clients to easily reach out to us. Whether you have inquiries, need support, or want to discuss potential collaborations, our contact section is designed to facilitate seamless communication.
                        </p>
                    </div>
                    <div class="col-6">
                        <p class="about-text fs-4 d-flex justify-content-center" style="color: #BF3131;">Make Appointments: :</p>
                        <p class="about-text fs-4 text-center" style="opacity: 0.7;">
                            Schedule appointments with our experts directly through the app. Our user-friendly interface ensures you can find a suitable time slot and book a meeting without any hassle.
                        </p>
                    </div>
                </div>
            </div>
            <div class="divider-line"></div>
            <div class="about-services pt-4 pb-5">
                <p class="about-text fs-4 pb-5 d-flex justify-content-center" style="color: #BF3131;">Employee and Company Access</p>
                <div class="row">
                    <div class="col-6">
                        <p class="about-text fs-4 d-flex justify-content-center" style="color: #BF3131;">Employee Database acces :</p>
                        <p class="about-text fs-4 text-center" style="opacity: 0.7;">
                            <span style="color: #BF3131; opacity: 1;">MyAtoTechApp, </span>
                            provides our employees with secure access to the company database. From project details to internal communications and easy way to update data, our app ensures that employees have all the information they need at their fingertips.
                        </p>
                    </div>
                    <div class="col-6">
                        <p class="about-text fs-4 d-flex justify-content-center" style="color: #BF3131;">Employee Tools :</p>
                        <p class="about-text fs-4 text-center" style="opacity: 0.7;">
                            <span style="color: #BF3131; opacity: 1;">MyAtoTechApp, </span>
                            offers a sleek, minimalist interface tailored to empower departmental teams. Seamlessly navigate through tools designed for daily work achievements, task management, Team feedback, and efficient team coordination.
                        </p>
                    </div>
                </div>
            </div>
            <div class="divider-line"></div>
            <div class="row pt-5 pb-5">
                <div class="col-6 d-flex justify-content-end">
                    <img src="img/typing.jpg" alt="office" class="about-img object-fit-cover" style="width: 550px; border-radius: 10px; border: 5px solid #BF3131;">
                </div>
                <div class="col-6">
                    <p class="about-text fs-4 d-flex justify-content-center" style="color: #BF3131;">Key Features :</p>
                    <ul class="text-center" style="list-style-type: none;">
                        <li>
                            <p class="about-text fs-4" style="opacity: 0.7;">
                                <span style="color: #BF3131; opacity: 1;">-User Friendly Interface- </span>Navigate through the app with ease thanks to its minimalist design and intuitive layout. 
                            </p>
                        </li>
                        <li>
                            <p class="about-text fs-4" style="opacity: 0.7;">
                                <span style="color: #BF3131; opacity: 1;">-Secure Access- </span>Robust security measures ensure that all data, whether client or employee-related, is protected. 
                            </p>
                        </li>
                        <li>
                            <p class="about-text fs-4" style="opacity: 0.7;">
                                <span style="color: #BF3131; opacity: 1;">-Real Time Updates- </span>Stay informed with real-time notifications and updates about appointments, projects, and company news. 
                            </p>
                        </li>
                        <li>
                            <p class="about-text fs-4" style="opacity: 0.7;">
                                <span style="color: #BF3131; opacity: 1;">-Comprehensive Support- </span>Access our customer support services quickly and efficiently through the app. 
                            </p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ffffff" fill-opacity="1" d="M0,160L48,165.3C96,171,192,181,288,176C384,171,480,149,576,138.7C672,128,768,128,864,122.7C960,117,1056,107,1152,117.3C1248,128,1344,160,1392,176L1440,192L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
    </div>
                <div class="about-joinus container text-center">
                    <p class="about-title fs-2 " style="color: #BF3131;">Join Us on Our Journey</p>
                    <div class="row">
                        <div class="col-6">
                            <img src="img/user2.png" alt="user2" class="about-user" style="width: 400px; height: auto;">
                        </div>
                        <div class="col-6 pt-5 text-center">                       
                                <p class="about-text fs-4" style="opacity: 0.7;">
                                <span style="color: #BF3131; opacity: 1;">MyAtoTechApp, </span>
                                is more than just an application, it's a gateway to the world of PT. ATO Technologies TBK. Whether you are a client looking for top-notch tech solutions, or an employee accessing important company information, MyATOtechApp is designed to meet your needs with simplicity and elegance.
                                </p>
                                <div class="d-flex justify-content-center pt-5">
                                    <a class="btn btn-custom-2 rounded-pill border-3 btn-lg" href="#" role="button" style=" background-color: #BF3131; color: #fff; border-color: #fff"!important>JOIN US <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" viewBox="0 0 24 24"><g fill="none"><path d="M24 0v24H0V0zM12.593 23.258l-.011.002l-.071.035l-.02.004l-.014-.004l-.071-.035c-.01-.004-.019-.001-.024.005l-.004.01l-.017.428l.005.02l.01.013l.104.074l.015.004l.012-.004l.104-.074l.012-.016l.004-.017l-.017-.427c-.002-.01-.009-.017-.017-.018m.265-.113l-.013.002l-.185.093l-.01.01l-.003.011l.018.43l.005.012l.008.007l.201.093c.012.004.023 0 .029-.008l.004-.014l-.034-.614c-.003-.012-.01-.02-.02-.022m-.715.002a.023.023 0 0 0-.027.006l-.006.014l-.034.614c0 .012.007.02.017.024l.015-.002l.201-.093l.01-.008l.004-.011l.017-.43l-.003-.012l-.01-.01z"/><path fill="currentColor" d="m15.06 5.283l5.657 5.657a1.5 1.5 0 0 1 0 2.12l-5.656 5.658a1.5 1.5 0 0 1-2.122-2.122l3.096-3.096H4.5a1.5 1.5 0 0 1 0-3h11.535L12.94 7.404a1.5 1.5 0 0 1 2.122-2.121Z"/></g></svg></a>
                                </div>
                        </div>
                    </div>
                </div>
            <!-- about-page-end -->
            <!-- milestones-page -->
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#BF3131" fill-opacity="1" d="M0,96L48,106.7C96,117,192,139,288,128C384,117,480,75,576,80C672,85,768,139,864,133.3C960,128,1056,64,1152,37.3C1248,11,1344,21,1392,26.7L1440,32L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
        <div class="bg-clients" style="background-color: #BF3131">
            <div class="container" id="milestones-page">
                <div class="d-flex justify-content-center gap-2">
                    <p class="about-title text-white fs-2 pt-2 pb-5">PT. ATO Technologies TBK</p>
                    <p class="about-title text-white fs-2 pt-2 pb-5" style="opacity: 0.7;">Milestones</p>
                </div>
                <ul class="list-unstyled row justify-content-center">
                    <li class="col-3 p-0 " style="text-align: center;">
                        <p class="milestones-text fs-4 pt-5 m-0" style="color: #fff;">2017</p>
                        <p class="milestones-text fs-6 pt-1 m-0 mb-4" style="color: #fff; opacity: 0.7;">
                            PT. ATO Technologies TBK was established in 2017 in a small shophouse in Greenland, Batam City, Kepulauan Riau, Indonesia, initially providing software engineering services, hardware repair services, and selling IoT components.</p>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 16 16" style="align-items: center;"><path fill="#fff" d="M4 8a4 4 0 1 1 8 0a4 4 0 0 1-8 0m4-2.5a2.5 2.5 0 1 0 0 5a2.5 2.5 0 0 0 0-5"/></svg>
                    </li>
                    <li class="col-3 p-0 "  style="text-align: center;">
                        <p class="milestones-text fs-4 pt-5 m-0" style="color: #fff;">2019</p>
                        <p class="milestones-text fs-6 pt-1 m-0" style="color: #fff; opacity: 0.7;">PT. ATO Technologies TBK gained significant attention for its exceptional website, desktop, and mobile app development services. The company also began selling IoT components and other hardware devices online, leading to a substantial increase in business and revenue.</p>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 16 16" style="align-items: center;"><path fill="#fff" d="M4 8a4 4 0 1 1 8 0a4 4 0 0 1-8 0m4-2.5a2.5 2.5 0 1 0 0 5a2.5 2.5 0 0 0 0-5"/></svg>                    
                    </li>
                    <li class="col-3 p-0 "  style="text-align: center;">
                        <p class="milestones-text fs-4 pt-5 m-0" style="color: #fff;">2021</p>
                        <p class="milestones-text fs-6 pt-1 m-0" style="color: #fff; opacity: 0.7;">PT. ATO Technologies TBK attracted a major Indonesian client who, impressed with their services, invested in the company. This investment enabled the company to move into a small warehouse provided by the client, where they began producing their hardware tech and IoT components.</p>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 16 16" style="align-items: center;"><path fill="#fff" d="M4 8a4 4 0 1 1 8 0a4 4 0 0 1-8 0m4-2.5a2.5 2.5 0 1 0 0 5a2.5 2.5 0 0 0 0-5"/></svg>                    
                    </li>
                    <li class="col-3 p-0 "  style="text-align: center;">
                        <p class="milestones-text fs-4 pt-5 m-0" style="color: #fff;">2023</p>
                        <p class="milestones-text fs-6 pt-1 m-0" style="color: #fff; opacity: 0.7;">PT. ATO Technologies TBK was recognized as one of the biggest tech companies. The company expanded globally, securing contracts with major foreign companies and establishing a parent warehouse in the United States along with additional facilities in other countries.</p>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 16 16" style="align-items: center;"><path fill="#fff" d="M4 8a4 4 0 1 1 8 0a4 4 0 0 1-8 0m4-2.5a2.5 2.5 0 1 0 0 5a2.5 2.5 0 0 0 0-5"/></svg>                    
                    </li>
                </ul>
                <div class="milestones-line"></div>
                <ul class="list-unstyled row justify-content-center">
                    <li class="col-3 p-0" style="text-align: center;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 16 16" style="align-items: center;"><path fill="#fff" d="M4 8a4 4 0 1 1 8 0a4 4 0 0 1-8 0m4-2.5a2.5 2.5 0 1 0 0 5a2.5 2.5 0 0 0 0-5"/></svg>                    
                        <p class="milestones-text fs-4 m-0" style="color: #fff;">2018</p>
                        <p class="milestones-text fs-6 pt-1 m-0" style="color: #fff; opacity: 0.7;">PT. ATO Technologies TBK expanded its service offerings to include UI/UX design, graphic design, video editing, and photography/videography services.</p>
                    </li>
                    <li class="col-3 p-0 "  style="text-align: center;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 16 16" style="align-items: center;"><path fill="#fff" d="M4 8a4 4 0 1 1 8 0a4 4 0 0 1-8 0m4-2.5a2.5 2.5 0 1 0 0 5a2.5 2.5 0 0 0 0-5"/></svg>                    
                        <p class="milestones-text fs-4 m-0" style="color: #fff;">2020</p>
                        <p class="milestones-text fs-6 pt-1 m-0" style="color: #fff; opacity: 0.7;">The global pandemic posed significant challenges, causing a temporary downturn for PT. ATO Technologies TBK. However, the company adapted by enhancing its online presence and developing the MyATOtech app, allowing clients to make appointments and purchase services online through web and mobile platforms.</p>
                    </li>
                    <li class="col-3 p-0" style="text-align: center;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 16 16" style="align-items: center;"><path fill="#fff" d="M4 8a4 4 0 1 1 8 0a4 4 0 0 1-8 0m4-2.5a2.5 2.5 0 1 0 0 5a2.5 2.5 0 0 0 0-5"/></svg>                    
                        <p class="milestones-text fs-4 m-0" style="color: #fff;">2022</p>
                        <p class="milestones-text fs-6 pt-1 m-0" style="color: #fff; opacity: 0.7;">PT. ATO Technologies TBK built its own warehouse, expanding operations and hiring additional employees to support increased hardware tech and IoT component production. The company also secured more jobs from large Indonesian companies and international clients.</p>
                    </li>
                    <li class="col-3 p-0" style="text-align: center;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 16 16" style="align-items: center;"><path fill="#fff" d="M4 8a4 4 0 1 1 8 0a4 4 0 0 1-8 0m4-2.5a2.5 2.5 0 1 0 0 5a2.5 2.5 0 0 0 0-5"/></svg>                    
                        <p class="milestones-text fs-4 m-0" style="color: #fff;">2024</p>
                        <p class="milestones-text fs-6 pt-1 m-0" style="color: #fff; opacity: 0.7;">PT. ATO Technologies TBK continues to thrive with over 10,000 clients and hundreds of projects annually. The company's name is synonymous with excellence in tech services, solidifying its position as a leading technology firm globally.</p>
                    </li>
                </ul>
            </div>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 310"><path fill="#fff" fill-opacity="1" d="M0,160L48,165.3C96,171,192,181,288,186.7C384,192,480,192,576,181.3C672,171,768,149,864,144C960,139,1056,149,1152,149.3C1248,149,1344,139,1392,133.3L1440,128L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
        </div>
            <!-- milestones-page-end -->
            <!-- companybrief-page-start -->
        <div class="container" id="information-page">
            <div class="d-flex justify-content-center gap-2">
                <p class="info-title fs-2 pt-2 pb-5" style="color: #BF3131;">PT. ATO Technologies TBK</p>
                <p class="info-title text-black fs-2 pt-2 pb-5" style="opacity: 0.7;">Company Information</p>
            </div>
                <div class="row pt-5 pb-5">
                    <div class="col-6">
                        <p class="info-title fs-3 pt-2 pb-1" style="color: #BF3131; opacity: 0.7;">About Us :</p>
                        <p class="info-text text-black fs-4 text-center" style="opacity: 0.7;">
                        <span style="color: #BF3131; opacity: 1;">PT. ATO Technologies TBK</span> is a premier technology company dedicated to delivering innovative solutions and services to clients globally. With a strong emphasis on technological advancement and customer satisfaction, we strive to provide cutting-edge solutions that drive business growth and efficiency.</p>
                    </div>
                    <div class="col-6 d-flex justify-content-end">
                        <img src="img/Building1.png" alt="office" class="about-img" style="width: 550px; border-radius: 10px; border: 5px solid #BF3131;">
                    </div>
                </div>
                <div class="card mt-5 mb-5" style="border: 5px solid #BF3131; border-radius: 15px;">
                    <div class="row g-0">
                        <div class="col-4">
                            <img src="img/ceo.png" alt="office" class="ceo-img img-fluid rounded-start" style="width: 400px; border: 5px solid #BF3131;">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <p class="ceo-title fs-3"><span style="color: #BF3131;">H. Aleser T. Omar S.TI S.Bis</p>
                                <p class="ceo-text text-black fs-5" style="opacity: 0.7;">
                                    <span style="color: #BF3131; opacity: 1;">PT. ATO Technologies TBK</span> was founded by <span style="color: #BF3131; opacity: 1;">Aleser T. Omar</span> in 2017. With an innovation and a passion for technology, Aleser established the company with the goal of providing exceptional tech solutions to businesses worldwide. His leadership and dedication have been instrumental in shaping the company's success and driving its growth over the years.
                                </p>
                                <p class="ceo-text"><small class="text-body-secondary">Founder Of PT. ATO Technologies TBK</small></p>
                            </div>
                        </div>
                    </div>
                </div>
            <p class="info-title fs-3 pt-5 pb-5 text-center fw-bold" style="color: #BF3131;">WHAT WE DO FOR CLIENTS</p>
            <div class="row gap-0 gap-sm-5 justify-content-center">
                <div class="col-6 col-sm-3 mb-2">
                <div class="card text-center w-100 h-100 " style="border: 3px solid #BF3131; border-radius: 15px;" id="card-services" >
                    <div class="card-body">
                        <svg style="width: 50px; height: 50px; margin-bottom: 20px; margin-top: 25px;" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 256 256"><path fill="#BF3131" d="M71.68 97.22L34.74 128l36.94 30.78a12 12 0 1 1-15.36 18.44l-48-40a12 12 0 0 1 0-18.44l48-40a12 12 0 0 1 15.36 18.44m176 21.56l-48-40a12 12 0 1 0-15.36 18.44L221.26 128l-36.94 30.78a12 12 0 1 0 15.36 18.44l48-40a12 12 0 0 0 0-18.44M164.1 28.72a12 12 0 0 0-15.38 7.18l-64 176a12 12 0 0 0 7.18 15.37a11.8 11.8 0 0 0 4.1.73a12 12 0 0 0 11.28-7.9l64-176a12 12 0 0 0-7.18-15.38"/></svg>
                            <h4 class="card-title mb-2 mt-3 fw-bold" style="color: #BF3131; opacity: 0.7;">IT Development</h4>
                        <p class="card-text mt-2 fs-6" style="opacity: 0.7;">Create software and system projects for our client needs</p>
                    </div>
                </div>                  
                </div>
                <div class="col-6 col-sm-3 mb-2">
                <div class="card text-center w-100 h-100 " style="border: 3px solid #BF3131; border-radius: 15px;" id="card-services">
                    <div class="card-body">
                        <svg style="width: 45px; height: 45px; margin-bottom: 20px; margin-top: 25px;" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="#BF3131" d="M3 17.25V21h3.75L17.81 9.93l-3.75-3.75zm19.61 1.11l-4.25 4.25l-5.2-5.2l1.77-1.77l1 1l2.47-2.48l1.42 1.42L18.36 17l1.06 1l1.42-1.4zm-16-7.53L1.39 5.64l4.25-4.25L7.4 3.16L4.93 5.64L6 6.7l2.46-2.48l1.42 1.42l-1.42 1.41l1 1zM20.71 7c.39-.39.39-1 0-1.41l-2.34-2.3c-.37-.39-1.02-.39-1.41 0l-1.84 1.83l3.75 3.75z"/></svg>
                        <h4 class="card-title mb-2 mt-3 fw-bold" style="color: #BF3131; opacity: 0.7;">Design Making</h4>
                        <p class="card-text mt-2 fs-6" style="opacity: 0.7;">Create a designs that are friendly and efficient in the eyes of users</p>
                    </div>
                </div>
            </div>
                <div class="col-6 col-sm-3 mb-2 ">
                    <div class="card text-center w-100 h-100 " style="border: 3px solid #BF3131; border-radius: 15px;" id="card-services" >
                        <div class="card-body">
                            <svg style="width: 50px; height: 50px; margin-bottom: 20px; margin-top: 25px;" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="#BF3131" d="m5.85 12l-.3-1.5q-.3-.125-.562-.262T4.45 9.9L3 10.35l-1-1.7l1.15-1Q3.1 7.325 3.1 7t.05-.65L2 5.35l1-1.7l1.45.45q.275-.2.538-.338T5.55 3.5l.3-1.5h2l.3 1.5q.3.125.563.263t.537.337l1.45-.45l1 1.7l-1.15 1q.05.325.05.65t-.05.65l1.15 1l-1 1.7l-1.45-.45q-.275.2-.537.338t-.563.262l-.3 1.5zm1-3q.825 0 1.413-.587T8.85 7t-.587-1.412T6.85 5t-1.412.588T4.85 7t.588 1.413T6.85 9m7.95 14l-.45-2.1q-.425-.15-.787-.363t-.713-.487l-2 .65l-1.4-2.4l1.6-1.4Q11 16.45 11 16t.05-.9l-1.6-1.4l1.4-2.4l2 .65q.35-.275.713-.488t.787-.362L14.8 9h2.8l.45 2.1q.425.15.788.363t.712.487l2-.65l1.4 2.4l-1.6 1.4q.05.45.05.9t-.05.9l1.6 1.4l-1.4 2.4l-2-.65q-.35.275-.712.487t-.788.363L17.6 23zm1.4-4q1.25 0 2.125-.875T19.2 16t-.875-2.125T16.2 13t-2.125.875T13.2 16t.875 2.125T16.2 19"/></svg>
                            <h4 class="card-title mb-2 mt-3 fw-bold" style="color: #BF3131; opacity: 0.7;">Tech Manufacture</h4>
                            <p class="card-text mt-2 fs-6" style="opacity: 0.7;">We manufacture technologies that are advance for our clients</p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-3 mb-2 ">
                <div class="card text-center me-5 w-100 h-100 " style="border: 3px solid #BF3131; border-radius: 15px;" id="card-services" >
                    <div class="card-body">
                        <svg style="width: 55px; height: 55px; margin-bottom: 20px; margin-top: 25px;" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="#BF3131" d="M15 8v8H5V8zm1-2H4a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-3.5l4 4v-11l-4 4V7a1 1 0 0 0-1-1"/></svg>
                        <h4 class="card-title mb-2 mt-3 fw-bold" style="color: #BF3131; opacity: 0.7;">Advert Making</h4>
                        <p class="card-text mt-2 fs-6" style="opacity: 0.7;">We Create visual branding with amazing result for our clients</p>
                    </div>
                </div>
            </div>         
                <div class="col-6 col-sm-3 mb-2">
                    <div class="card text-center w-100 h-100 " style="border: 3px solid #BF3131; border-radius: 15px;" id="card-services" >
                        <div class="card-body">
                            <svg style="width: 55px; height: 55px; margin-bottom: 20px; margin-top: 25px;" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="#BF3131" d="M2 19v-2h10v2zm0-5v-2h5v2zm0-5V7h5v2zm18.6 10l-3.85-3.85q-.6.425-1.312.638T14 16q-2.075 0-3.537-1.463T9 11t1.463-3.537T14 6t3.538 1.463T19 11q0 .725-.213 1.438t-.637 1.312L22 17.6zM14 14q1.25 0 2.125-.875T17 11t-.875-2.125T14 8t-2.125.875T11 11t.875 2.125T14 14"/></svg>
                            <h4 class="card-title mb-2 mt-3 fw-bold" style="color: #BF3131; opacity: 0.7;">IT Management</h4>
                            <p class="card-text mt-2 fs-6" style="opacity: 0.7;">We manage our clients project, so they just sit back and relax</p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-3 mb-2">
                    <div class="card text-center w-100 h-100 " style="border: 3px solid #BF3131; border-radius: 15px;" id="card-services" >
                        <div class="card-body">
                            <svg style="width: 55px; height: 55px; margin-bottom: 20px; margin-top: 25px;" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="#BF3131" d="M6 8c0-2.21 1.79-4 4-4s4 1.79 4 4s-1.79 4-4 4s-4-1.79-4-4m6 10.2c0-.96.5-1.86 1.2-2.46v-.24c0-.39.07-.76.18-1.12c-1.03-.24-2.17-.38-3.38-.38c-4.42 0-8 1.79-8 4v2h10zm10 .1v3.5c0 .6-.6 1.2-1.3 1.2h-5.5c-.6 0-1.2-.6-1.2-1.3v-3.5c0-.6.6-1.2 1.2-1.2v-1.5c0-1.4 1.4-2.5 2.8-2.5s2.8 1.1 2.8 2.5V17c.6 0 1.2.6 1.2 1.3m-2.5-2.8c0-.8-.7-1.3-1.5-1.3s-1.5.5-1.5 1.3V17h3z"/></svg>
                            <h4 class="card-title mb-2 mt-3 fw-bold" style="color: #BF3131; opacity: 0.7;">Cybersecurity</h4>
                            <p class="card-text mt-2 fs-6" style="opacity: 0.7;">We provides security ensuring protection for out clients data effectively.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- companybrief-page-end-->
        <!-- vision&mision-page-start-->
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#eee" fill-opacity="1" d="M0,96L48,117.3C96,139,192,181,288,176C384,171,480,117,576,106.7C672,96,768,128,864,122.7C960,117,1056,75,1152,69.3C1248,64,1344,96,1392,112L1440,128L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
        <div class="about-page" style="background-color: #EEEEEE;">
            <div class="container" id="information-page">
                <div class="d-flex justify-content-center gap-2">
                    <p class="info-title fs-2 pb-5" style="color: #BF3131;">PT. ATO Technologies TBK</p>
                    <p class="info-title text-black fs-2 pb-5" style="opacity: 0.7;">Vision & Mission</p>
                </div>
                <div class="row justify-content-center">
                    <div class="col-6 text-center">
                        <svg style="width: 55px; height: 55px; margin-bottom: 15px; margin-top: 25px;" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 256 256"><path fill="#BF3131" d="M251 123.13c-.37-.81-9.13-20.26-28.48-39.61C196.63 57.67 164 44 128 44S59.37 57.67 33.51 83.52C14.16 102.87 5.4 122.32 5 123.13a12.08 12.08 0 0 0 0 9.75c.37.82 9.13 20.26 28.49 39.61C59.37 198.34 92 212 128 212s68.63-13.66 94.48-39.51c19.36-19.35 28.12-38.79 28.49-39.61a12.08 12.08 0 0 0 .03-9.75m-46.06 33C183.47 177.27 157.59 188 128 188s-55.47-10.73-76.91-31.88A130.4 130.4 0 0 1 29.52 128a130.5 130.5 0 0 1 21.57-28.11C72.54 78.73 98.41 68 128 68s55.46 10.73 76.91 31.89A130.4 130.4 0 0 1 226.48 128a130.5 130.5 0 0 1-21.57 28.12ZM128 84a44 44 0 1 0 44 44a44.05 44.05 0 0 0-44-44m0 64a20 20 0 1 1 20-20a20 20 0 0 1-20 20"/></svg>
                        <h4 class="card-title mb-3 mt-1 fw-bold" style="color: #BF3131;">OUR VISION</h4>
                        <p class="card-text mt-2 mb-0 fs-5" style="opacity: 0.7;">"To be the premier provider of innovative technology solutions, empowering businesses worldwide to achieve their full potential through cutting-edge software, hardware, and IoT manufacturing."</p>
                    </div>
                    <div class="col-6 text-center">
                        <svg style="width: 55px; height: 55px; margin-bottom: 15px; margin-top: 25px;" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 256 256"><path fill="#BF3131" d="M229.26 90.4a108 108 0 0 1-177.63 114A108 108 0 0 1 195.41 43.63l20.1-20.11a12 12 0 0 1 17 17l-96 96a12 12 0 1 1-17-17l24-24a36 36 0 1 0 19.76 39.65a12 12 0 0 1 23.53 4.74a60 60 0 1 1-25.73-62l17.23-17.17a84 84 0 1 0 28.46 38a12 12 0 1 1 22.5-8.35Z"/></svg>
                        <h4 class="card-title mb-3 mt-1 fw-bold" style="color: #BF3131;">OUR MISION</h4>
                        <p class="card-text mt-2 mb-0 fs-5" style="opacity: 0.7;">"Our mission is to deliver unparalleled value to our clients by leveraging the latest technological advancements. We are committed to providing top-quality software development, hardware manufacturing, and IoT solutions tailored to meet the unique needs of each client. Through continuous innovation, exceptional service, and a customer-centric approach, we aim to drive sustainable growth for our clients and contribute to the advancement of the technology industry."</p>
                    </div>
                </div>
            </div>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#fff" fill-opacity="1" d="M0,128L48,117.3C96,107,192,85,288,96C384,107,480,149,576,165.3C672,181,768,171,864,181.3C960,192,1056,224,1152,202.7C1248,181,1344,107,1392,69.3L1440,32L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
        </div>
        <!-- vision&mision-page-end -->
        <!-- footer-page-start -->
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#bf3131" fill-opacity="1" d="M0,96L80,128C160,160,320,224,480,240C640,256,800,224,960,202.7C1120,181,1280,171,1360,165.3L1440,160L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z"></path></svg>        <div class="bg-footer" style="background-color: #BF3131;">
        <footer class="container"style=" padding-bottom: 64px;"> 
            <div class="row">
                <div class="footer-col-brand col-12 col-sm-6 d-flex flex-column align-items-center justify-content-center">
                    <a class="footer-brand g-0 g-sm-2" style="text-decoration: none;" href="#">
                        <p class="footer-brand-title text-white fs-2 fw-bold mb-0">PT. ATO Technologies TBK</p>
                    </a>
                    <p class="footer-brand-subtitle text-white fs-5" style="--bs-text-opacity: .7; text-decoration: none; display: block;">"Where Technology Meets Excellence"</p>
                </div>
            <div class="col-12 col-sm-6"> 
            <div class="container">
                <div class="row footer-row gx-sm-5 g-0" style="margin-left: 55px;">
                    <div class="col-6 col-sm-4 pages-col">
                        <a class="footer-text text-white fs-5 mb-0" style=" text-decoration: none; display: block; padding-top: 16px;" href="#home-page">Home</a>
                        <a class="footer-text text-white fs-5 mb-0" style=" text-decoration: none; display: block; padding-top: 16px;" href="#about-page">About</a>
                        <a class="footer-text text-white fs-5 mb-0" style=" text-decoration: none; display: block; padding-top: 16px;" href="#milestones-page">Milestones</a>
                        <a class="footer-text text-white fs-5 mb-0" style=" text-decoration: none; display: block; padding-top: 16px;" href="#information-page">Information</a>
                    </div>
                    <div class="col-6 col-sm-4 explore-col">
                        <a class="footer-text text-white fs-5 mb-0" style=" text-decoration: none; display: block; padding-top: 16px;" href="#">Resources</a>
                        <a class="footer-text text-white fs-5 mb-0" style=" text-decoration: none; display: block; padding-top: 16px;" href="#">Blog</a>
                        <a class="footer-text text-white fs-5 mb-0" style=" text-decoration: none; display: block; padding-top: 16px;" href="#">Documents</a>
                    </div>
                    <div class="col-6 col-sm-4 company col">
                        <a class="footer-text text-white fs-5 mb-0" style=" text-decoration: none; display: block; padding-top: 16px;" href="#">About Us</a>
                        <a class="footer-text text-white fs-5 mb-0" style=" text-decoration: none; display: block; padding-top: 16px;" href="#">Partners</a>
                        <a class="footer-text text-white fs-5 mb-0" style=" text-decoration: none; display: block; padding-top: 16px;" href="#">Customers</a>
                        <a class="footer-text text-white fs-5 mb-0" style=" text-decoration: none; display: block; padding-top: 16px;" href="#">Contact Us</a>
                    </div>
                    </div>
                </div>
            </div>
            <div class="divider-line"></div>
            <div class="footer-col-sosmed col-sm-12 col-12 d-flex flex-column align-items-center justify-content-center">
            <div class="sosial-media pt-2 d-flex align-items-center gap-3">
                <a class="sosial-media" id="facebook" style="text-decoration: none;" href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" width="34px" height="34px" viewBox="0 0 20 20"><path fill="#fff" d="M10 .4C4.698.4.4 4.698.4 10s4.298 9.6 9.6 9.6s9.6-4.298 9.6-9.6S15.302.4 10 .4m2.274 6.634h-1.443c-.171 0-.361.225-.361.524V8.6h1.805l-.273 1.486H10.47v4.461H8.767v-4.461H7.222V8.6h1.545v-.874c0-1.254.87-2.273 2.064-2.273h1.443z"/></svg>
                </a>
                <a class="sosial-media" id="twitter" style="text-decoration: none;" href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" width="36px" height="36px" viewBox="0 0 1024 1024"><path fill="#fff" d="M512 64C264.6 64 64 264.6 64 512s200.6 448 448 448s448-200.6 448-448S759.4 64 512 64m215.3 337.7c.3 4.7.3 9.6.3 14.4c0 146.8-111.8 315.9-316.1 315.9c-63 0-121.4-18.3-170.6-49.8c9 1 17.6 1.4 26.8 1.4c52 0 99.8-17.6 137.9-47.4c-48.8-1-89.8-33-103.8-77c17.1 2.5 32.5 2.5 50.1-2a111 111 0 0 1-88.9-109v-1.4c14.7 8.3 32 13.4 50.1 14.1a111.13 111.13 0 0 1-49.5-92.4c0-20.7 5.4-39.6 15.1-56a315.28 315.28 0 0 0 229 116.1C492 353.1 548.4 292 616.2 292c32 0 60.8 13.4 81.1 35c25.1-4.7 49.1-14.1 70.5-26.7c-8.3 25.7-25.7 47.4-48.8 61.1c22.4-2.4 44-8.6 64-17.3c-15.1 22.2-34 41.9-55.7 57.6"/></svg>        </a>
                <a class="sosial-media" id="instagram" style="text-decoration: none;" href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32px" height="32px" fill="#fff" class="bi bi-instagram" viewBox="0 0 16 16">
                    <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334"/>
                    </svg>
                </a>
                <a class="sosial-media" id="linkedin" style="text-decoration: none;" href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" width="36px" height="36px" viewBox="0 0 24 24"><path fill="#fff" d="M20.47 2H3.53a1.45 1.45 0 0 0-1.47 1.43v17.14A1.45 1.45 0 0 0 3.53 22h16.94a1.45 1.45 0 0 0 1.47-1.43V3.43A1.45 1.45 0 0 0 20.47 2M8.09 18.74h-3v-9h3ZM6.59 8.48a1.56 1.56 0 1 1 0-3.12a1.57 1.57 0 1 1 0 3.12m12.32 10.26h-3v-4.83c0-1.21-.43-2-1.52-2A1.65 1.65 0 0 0 12.85 13a2 2 0 0 0-.1.73v5h-3v-9h3V11a3 3 0 0 1 2.71-1.5c2 0 3.45 1.29 3.45 4.06Z"/></svg>
                </a>
            </div>
            <a class="footer-copyright text-white fs-6 mb-0 pt-5" style=" text-decoration: none; display: block;" href="#">Copyright &copy;2024 Created By Aleser Tarikh Omar</a>
            </div>
    </footer>
    </div>
        <!-- footer-page-end -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>