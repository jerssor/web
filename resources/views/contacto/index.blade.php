<x-app-layout>

    <div class="container">
        <h1> Esta pagina es la de contacto</h1>
        <h1 class="text-5xl font-bold text-black-600 text-center my-8">
            Contáctanos
        </h1>
        <article class="grid grid-cols-3 w-full">
            <div></div>
            <div class="text-center h-full bg-cover bg-center bg-white shadow-lg rounded-lg pb-6">
            <h1>Déjanos un mensaje</h1>
            <br>
            <form action="{{ route('contacto.store') }}" method="POST">
                @csrf

                <label class="text-2xl">
                    Nombre:
                    <br>
                    <input type="text" name="name">
                </label>
                <br>
                @error('name')
                    <p><strong>{{ $message }}</strong></p>
                @enderror
                <label class="text-2xl">
                    Correo:
                    <br>
                    <input type="text" name="email">
                </label>
                <br>
                @error('email')
                    <p><strong>{{ $message }}</strong></p>
                @enderror
                <label class="text-2xl">
                    Mensaje:
                    <br>
                    <textarea name="mensaje" rows="4"></textarea>
                </label>
                <br>
                @error('mensaje')
                    <p><strong>{{ $message }}</strong></p>
                @enderror
                <button type="submit" class="bg-gray-500 py-4 px-4 border-lg text-2xl " >Enviar mensaje</button>
            </form>
            @if (session('info'))
                <script>
                    alert("{{ session('info') }}");
                </script>
            @endif
        </div>
        </article>
    </div>
</x-app-layout>
