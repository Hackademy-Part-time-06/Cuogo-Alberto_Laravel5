<nav class="navbar sticky-top navbar-expand-lg navbar-dark">
    <div class="container-fluid">
        <a class="navbar-brand col-4 col-md-3" href="{{ route('homepage') }}">
            <img class="w-75" src="img\IronFit_w.png" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-around text-center" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <x-nav-link :nome="'homepage'" :label="'Home'" />
                </li>
                <li class="nav-item">
                    <x-nav-link :nome="'corsi'" :label="'Corsi'" />
                </li>
                <li class="nav-item">
                    <x-nav-link :nome="'contact'" :label="'Contatti'" />
                </li>
            </ul>
            <div>
                <a href="#"><i class="bi bi-facebook"></i></a>
                <a href="#"><i class="bi bi-twitter"></i></a>
                <a href="#"><i class="bi bi-youtube"></i></a>
                <a href="#"><i class="bi bi-instagram"></i></a>
            </div>
        </div>

    </div>
</nav>


