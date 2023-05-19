<x-main>
    <x-slot name="title">IRON FIT - Contatti</x-slot>

    <h2 class="text-center fs-1 m-4">- CONTATTI -</h2>

    <div class="container w-40 mt-3 mb-5">

        <form action="{{route('send')}}" method="POST">
            @method('POST')
            @csrf

            <!-- Nome -->
            <div class="mb-3">
                <input id="name" name="name" class="form-control" type="text" placeholder="Nome" value="{{old('name')}}"/>
            </div>

            <!-- Telefono -->
            <div class="mb-3">
                <input id="phone" name="phone" class="form-control" type="text" placeholder="Telefono" value="{{old('phone')}}"/>
            </div>
            <!-- Email -->
            <div class="mb-3">
                <input id="email" name="email" class="form-control" type="email" placeholder="Email" value="{{old('email')}}"/>
            </div>
            <!-- Corso -->
            <div class="mb-3">
                <select id="corso" name="corso" class="form-select">
                    <option @if (!old('corso')) selected @endif value="">Scegli il corso...</option>
                    <option @if (old('corso') == "weightlifting") selected @endif value="weightlifting">Weightlifting</option>
                    <option @if (old('corso') == "running") selected @endif value="running">Running</option>
                    <option @if (old('corso') == "box") selected @endif value="box">Box</option>
                </select>
            </div>
            <!-- Messaggio -->
            <div class="mb-3">
                <textarea id="message" name="message" class="form-control" type="text" placeholder="Messaggio" style="height: 10rem;">{{old('message')}}</textarea>
            </div>

            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            <!-- INVIA -->
            <div class="d-grid">
                <button class="btn btn-form btn-lg fw-bold" type="submit">INVIA</button>
            </div>

        </form>

    </div>

</x-main>
