<x-main>
    <x-slot name="title">IRON FIT</x-slot>

    <div class="container w-75">
        <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-bs-ride="true">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner h-70 rounded">
                <div class="carousel-item active">
                    <img src="img\corsi\weightlifting.jpg" class="d-block w-100" alt="">
                    <div class="carousel-caption top-0 mt-5">
                        <p id="card-category" class="mb-0 text-uppercase fw-bold fs-3 text-shadow">Strenght</p>
                        <h3 class="text-uppercase fw-bold fs-1 text-shadow">Weightlifting</h3>
                        <a id="btn-carousel" type="button"
                            class="btn btn-sm btn-dark btn-gym text-uppercase fw-bold shadow px-3"
                            href="{{ route('detail', ['name' => 'weightlifting']) }}">vai al corso</a>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img\corsi\running.jpg" class="d-block w-100" alt="">
                    <div class="carousel-caption top-0 mt-5">
                        <p id="card-category" class="mb-0 text-uppercase fw-bold fs-3 text-shadow">Cardio</p>
                        <h3 class="text-uppercase fw-bold fs-1 text-shadow">Running</h3>
                        <a id="btn-carousel" type="button"
                            class="btn btn-sm btn-dark btn-gym text-uppercase fw-bold shadow px-3"
                            href="{{ route('detail', ['name' => 'running']) }}">vai al corso</a>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img\corsi\box.jpg" class="d-block w-100" alt="">
                    <div class="carousel-caption top-0 mt-5">
                        <p id="card-category" class="mb-0 text-uppercase fw-bold fs-3 text-shadow">Training</p>
                        <h3 class="text-uppercase fw-bold fs-1 text-shadow">Box</h3>
                        <a id="btn-carousel" type="button"
                            class="btn btn-sm btn-dark btn-gym text-uppercase fw-bold shadow px-3"
                            href="{{ route('detail', ['name' => 'box']) }}">vai al corso</a>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <h2 class="text-center fs-1 mt-5 mb-3">- I nostri Corsi -</h2>

    <x-corsi_grid />

</x-main>
