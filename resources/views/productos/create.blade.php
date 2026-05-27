@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-gray-50 dark:bg-gray-900 py-12">
    <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="mb-8 flex items-center gap-4">
            <a href="{{ route('productos.index') }}" class="p-2 rounded-full bg-white dark:bg-gray-800 text-gray-500 hover:text-pink-600 shadow-sm hover:shadow-md transition-all">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
            </a>
            <div>
                <h1 class="text-3xl font-extrabold text-gray-900 dark:text-white">Añadir Nuevo Producto</h1>
                <p class="text-sm text-gray-500 dark:text-gray-400 mt-1">Completa los detalles del producto.</p>
            </div>
        </div>

        @if ($errors->any())
            <div class="mb-8 p-4 rounded-2xl bg-red-50 dark:bg-red-900/30 border border-red-200 dark:border-red-800 animate-fade-in-down">
                <div class="flex items-center gap-3 mb-2">
                    <svg class="w-5 h-5 text-red-600 dark:text-red-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    <h3 class="text-sm font-bold text-red-800 dark:text-red-300">Uy, revisa estos detalles:</h3>
                </div>
                <ul class="list-disc list-inside text-sm text-red-700 dark:text-red-400 ml-8">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('productos.store') }}" method="POST" enctype="multipart/form-data" class="bg-white/80 dark:bg-gray-800/80 backdrop-blur-xl shadow-2xl rounded-3xl p-8 border border-white/20 dark:border-gray-700/50">
            @csrf
            
            <div class="space-y-8">
                <!-- Título -->
                <div>
                    <label for="titulo" class="block text-sm font-bold text-gray-700 dark:text-gray-300 mb-2">Título del Producto</label>
                    <input type="text" name="titulo" id="titulo" value="{{ old('titulo') }}" required
                           class="block w-full rounded-2xl border-gray-300 dark:border-gray-600 dark:bg-gray-900/50 dark:text-white focus:border-pink-500 focus:ring-pink-500 transition-colors shadow-sm sm:text-base px-4 py-3"
                           placeholder="Ej: Arreglo de rosas eternas mágico">
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <!-- Precio -->
                    <div>
                        <label for="precio" class="block text-sm font-bold text-gray-700 dark:text-gray-300 mb-2">Precio (S/)</label>
                        <div class="relative rounded-2xl shadow-sm">
                            <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                <span class="text-gray-500 sm:text-base">S/</span>
                            </div>
                            <input type="number" name="precio" id="precio" value="{{ old('precio') }}" step="0.01" min="0" required
                                   class="block w-full pl-10 rounded-2xl border-gray-300 dark:border-gray-600 dark:bg-gray-900/50 dark:text-white focus:border-pink-500 focus:ring-pink-500 transition-colors sm:text-base px-4 py-3"
                                   placeholder="0.00">
                        </div>
                    </div>

                    <!-- Categoría -->
                    <div>
                        <label for="categoria" class="block text-sm font-bold text-gray-700 dark:text-gray-300 mb-2">Categoría</label>
                        <select name="categoria" id="categoria" required
                                class="block w-full rounded-2xl border-gray-300 dark:border-gray-600 dark:bg-gray-900/50 dark:text-white focus:border-pink-500 focus:ring-pink-500 transition-colors shadow-sm sm:text-base px-4 py-3">
                            <option value="" disabled selected>Selecciona su categoría...</option>
                            <option value="arreglos" {{ old('categoria') == 'arreglos' ? 'selected' : '' }}>Arreglos</option>
                            <option value="peluches" {{ old('categoria') == 'peluches' ? 'selected' : '' }}>Peluches</option>
                            <option value="juguetes" {{ old('categoria') == 'juguetes' ? 'selected' : '' }}>Juguetes</option>
                            <option value="ropa_bebe" {{ old('categoria') == 'ropa_bebe' ? 'selected' : '' }}>Ropa de Bebé</option>
                        </select>
                    </div>
                </div>

                <!-- Imagen -->
                <div>
                    <label class="block text-sm font-bold text-gray-700 dark:text-gray-300 mb-2">Foto Principal</label>
                    <div class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 dark:border-gray-600 border-dashed rounded-3xl hover:border-pink-500 dark:hover:border-pink-500 transition-colors group relative overflow-hidden bg-gray-50/50 dark:bg-gray-900/30" id="drop-zone">
                        
                        <div class="space-y-2 text-center relative z-10" id="upload-content">
                            <div class="mx-auto h-16 w-16 text-gray-400 group-hover:text-pink-500 transition-colors">
                                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                            </div>
                            <div class="flex text-sm text-gray-600 dark:text-gray-400 justify-center">
                                <label for="imagen" class="relative cursor-pointer bg-transparent rounded-md font-bold text-pink-600 hover:text-pink-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-pink-500">
                                    <span>Sube un archivo</span>
                                    <input id="imagen" name="imagen" type="file" class="sr-only" accept="image/*" required>
                                </label>
                                <p class="pl-1">o arrastra y suelta</p>
                            </div>
                            <p class="text-xs text-gray-500">PNG, JPG, GIF hasta 2MB</p>
                        </div>

                        <!-- Preview Image overlay -->
                        <div id="preview-container" class="absolute inset-0 hidden bg-white dark:bg-gray-800 z-20 items-center justify-center">
                            <img id="preview" class="h-full w-full object-contain p-2" alt="Vista previa">
                            <button type="button" id="remove-image" class="absolute top-4 right-4 p-2 bg-red-500 text-white rounded-full hover:bg-red-600 shadow-lg transition-transform hover:scale-110">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                            </button>
                        </div>
                    </div>
                </div>

                <div class="pt-6 border-t border-gray-100 dark:border-gray-700/50 flex items-center justify-end gap-4">
                    <a href="{{ route('productos.index') }}" class="px-6 py-3 rounded-full text-sm font-bold text-gray-600 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 transition-colors">
                        Cancelar
                    </a>
                    <button type="submit" class="px-8 py-3 rounded-full text-sm font-bold text-white bg-pink-600 hover:bg-pink-700 shadow-lg shadow-pink-500/30 hover:shadow-pink-500/50 transition-all transform hover:-translate-y-0.5">
                        Guardar
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>

<script>
    const imageInput = document.getElementById('imagen');
    const previewContainer = document.getElementById('preview-container');
    const previewImage = document.getElementById('preview');
    const removeBtn = document.getElementById('remove-image');

    imageInput.addEventListener('change', function(e) {
        const file = e.target.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function(e) {
                previewImage.src = e.target.result;
                previewContainer.classList.remove('hidden');
                previewContainer.classList.add('flex');
            }
            reader.readAsDataURL(file);
        }
    });

    removeBtn.addEventListener('click', function() {
        imageInput.value = '';
        previewContainer.classList.add('hidden');
        previewContainer.classList.remove('flex');
    });
</script>
@endsection