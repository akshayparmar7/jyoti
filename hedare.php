<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jyoti</title>
    <link rel="icon" href="img/jyoti_logo.png">
    <!-- Bootstrap CSS -->
    <link href="bootstrap_library/bootstrap.min.css" rel="stylesheet">
    <link href="bootstrap_library/style.css" rel="stylesheet">
    <link href="bootstrap_library/fontawesome/css/all.min.css" rel="stylesheet">
</head>
<?php include "addproductcard.php"; ?>
<body>
    <div class="header text-white py-1">
        <div class="container-fluid px-4">
            <div class="row align-items-center">                
                <div class="col-md-8 col-12 text-center text-md-start">
                    <span class="me-4">
                        <i class="fa-solid fa-phone me-1"></i> +91 95125 05020
                    </span>
                    <a href="mailto:info@electrogroups.org" class="text-white text-decoration-none"><i class="fa-solid fa-envelope me-1"></i>info@electrogroups.org</a>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom-line"></div>
    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm sticky-top">
        <div class="container">
            <!-- Logo -->
            <a class="navbar-brand" href="#">
                <img src="img/Jyoti_logo.png" height="40" alt="Logo">
            </a>

            <!-- Toggle Button -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"><span class="navbar-toggler-icon"></span></button>

            <!-- Menu -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto text-center">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about-us">About Us</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="productsDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Products</a>

                        <ul class="dropdown-menu custom-dropdown">
                            <li><a class="dropdown-item" href="#fuse">Fuse</a></li>
                            <li><a class="dropdown-item" href="#lv-panel">LV Panel</a></li>
                            <li><a class="dropdown-item" href="#mv-panel">MV Panel</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</body>
</html>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        const navLinks = document.querySelectorAll(".nav-link, .dropdown-item");

        navLinks.forEach(link => {
            link.addEventListener("click", function () {
                // badha active class remove karo
                navLinks.forEach(l => l.classList.remove("active"));

                // clicked link ne active banao
                this.classList.add("active");

                // jo dropdown item click thay to parent "Products" ne pan active rakho
                const dropdown = this.closest(".dropdown");
                if (dropdown) {
                    dropdown.querySelector(".nav-link").classList.add("active");
                }
            });
        });
    });
</script>
