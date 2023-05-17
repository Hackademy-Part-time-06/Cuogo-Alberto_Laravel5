<x-main>
    <x-slot name="title">Corsi</x-slot>


    <section>
        <div class="container w-75 mb-5">
            <div class="row g-3">
                <div class="col-12 col-md-6">
                    <a href="{{ route('detail', ['name' => 'weightlifting']) }}">
                        <div class="card text-bg-dark border-0">
                            <img src="img\corsi\weightlifting.jpg" class="card-img" alt="">
                            <div class="card-img position-absolute p-3 text-end bottom-0">
                                <p id="card-category" class="card-text mb-0 text-uppercase fw-semibold">Strenght</p>
                                <h3 class="card-title text-uppercase fw-bold fs-2">Weightlifting</h3>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-md-6">
                    <a href="{{ route('detail', ['name' => 'running']) }}">
                        <div class="card text-bg-dark border-0">
                            <img src="img\corsi\running.jpg" class="card-img" alt="">
                            <div class="card-img position-absolute p-3 text-end bottom-0">
                                <p id="card-category" class="card-text mb-0 text-uppercase fw-semibold">Cardio</p>
                                <h3 class="card-title text-uppercase fw-bold fs-2">Running</h3>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-12">
                    <a href="{{ route('detail', ['name' => 'box']) }}">
                        <div class="card text-bg-dark border-0">
                            <img src="img\corsi\box.jpg" class="card-img" alt="">
                            <div class="card-img position-absolute p-3 pe-5 text-end bottom-0">
                                <p id="card-category" class="card-text mb-0 text-uppercase fw-semibold fs-5">Training
                                </p>
                                <h3 class="card-title text-uppercase fw-bold fs-1">Box</h3>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
</x-main>