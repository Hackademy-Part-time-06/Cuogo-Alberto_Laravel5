<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>IRON FIT - Thank You Page</title>

    <link rel="icon" type="image/x-icon" href="\img\logo\IronFit_w_Favicon.ico">


    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <div class="d-flex justify-content-center align-items-center">
        <img src="\img\gym_thankyoupage.jpg" alt="" class="w-100 h-65" style="object-fit: cover;object-position: 100% 60%;">
        <h1 class="position-absolute text-shadow" style="font-size: 15rem;"><b><span style="color: #F29100;">IRON</span> FIT</b></h1>
    </div>
    <div class="text-center" style="height: 35vh; padding: 2.5rem 0;">
        <h2 style="font-size: 5rem;">Grazie!!!</h2>
        <p class="mb-5" style="font-size: 1.5rem;">Ti invieremo tutte le informazioni del corso alla tua email</p>
        <a href="{{route('homepage')}}"><button id="btn-thank" class="btn btn-form btn-lg fw-bold fs-2"><i class="bi bi-house-heart-fill me-2 fs-2"></i>HOMEPAGE</button></a>
    </div>

</body>
</html>