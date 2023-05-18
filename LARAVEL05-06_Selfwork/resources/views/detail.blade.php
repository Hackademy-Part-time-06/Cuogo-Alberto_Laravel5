<x-main>
    <x-slot name="title">IRON FIT - Corso di {{ $corso['name'] }}</x-slot>

    <div class="container mb-5">
        <div class="row">
            <div class="col-12 col-md-6">
                <img src="{{ $corso['img'] }}" alt="" class="d-block w-100 rounded object-fit-cover">
            </div>
            <div class="col-12 col-md-6">
                <div class="row align-items-center">
                    <div class="col-7">
                        <p id="card-category" class="mb-0 text-uppercase fw-semibold fs-5 text-shadow">
                            {{ $corso['category'] }}</p>
                        <h2 class="text-uppercase fw-bold fs-1 text-shadow">{{ $corso['name'] }}</h2>
                    </div>
                    <div class="col-5">
                        <button class="btn btn-dark btn-price fw-bold shadow px-3 fs-4 w-100">{{ $corso['price'] }}€ /
                            month</button>
                    </div>
                </div>
                <button class="btn btn-dark btn-trainer fw-bold shadow px-3 fs-4 w-100 mt-2 mb-5 py-2"><i
                        class="bi bi-person-vcard-fill fs-4 me-3"></i>{{ $corso['trainer'] }}</button>

                <div style="border-radius: 1rem !important; overflow:hidden;">
                    <table class="table table-borderless table-striped">
                        <thead>
                            <tr class="table-dark text-center text-uppercase">
                                <th scope="col">Giorno</th>
                                <th scope="col">Orario</th>
                            </tr>
                        </thead>
                        <tbody>
                                @foreach ($corso['time'] as $giorno => $item)
                                <tr class="table-light text-center">
                                    <td>{{ $giorno }}</td>
                                    <td>{{ $item }}</td>
                                </tr>        
                                @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-main>
{{-- <h1>Ciao {{$corso['name']}}</h1> --}}
