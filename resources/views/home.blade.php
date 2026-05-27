@extends('layouts.app')

@section('content')
  <main>
    <div class="mx-auto max-w-screen-xl px-4 py-8 sm:px-6 sm:py-12 lg:px-8">
      <section class="text-center">
        <h1 class="text-xl font-bold text-gray-900 sm:text-3xl dark:text-white">
          Todo lo que buscas, en un solo lugar
        </h1>

        <p class="mx-auto mt-4 max-w-md text-gray-500 dark:text-gray-400">
          "Descubre regalos únicos para cada ocasión. Arreglos de rosas eternas, ropa de bebé, juguetes y peluches de la
          mejor calidad".
        </p>

        <div class="mt-6">
            <a href="{{ route('integrantes') }}" class="inline-block rounded-md bg-indigo-600 px-6 py-3 text-sm font-medium text-white transition hover:bg-indigo-700 focus:outline-none focus:ring focus:ring-indigo-400 dark:bg-indigo-500 dark:hover:bg-indigo-600">
                Ver Integrantes del Grupo
            </a>
        </div>
      </section>

      <ul class="mt-8 grid gap-4 grid-cols-2 lg:grid-cols-4">
        <li>
          <a href="{{ route('infoArreglos') }}" class="group block overflow-hidden rounded-t-2xl">
            <img src="{{ asset('imagenes/i__arreglos/ROSAS ETERNAS PRINCIPAL.jpg') }}" alt="Rosas Eternas"
              class="h-[350px] w-full object-cover transition duration-500 group-hover:scale-105 sm:h-[450px]" />
            <div class="relative bg-white dark:bg-gray-900 pt-3 transition-colors duration-300">
              <h3
                class="text-xs font-semibold text-gray-800 dark:text-gray-200 group-hover:underline group-hover:underline-offset-4"
               >
                Arreglos de Rosas Eternas
              </h3>
            </div>
          </a>
        </li>

        <li>
          <a href="{{ route('infoJuguetes') }}" class="group block overflow-hidden rounded-t-2xl">
            <img src="{{ asset('imagenes/i__juguetes/JUGUETES PRINCIPAL.jpg') }}" alt="Juguetes"
              class="h-[350px] w-full object-cover transition duration-500 group-hover:scale-105 sm:h-[450px]" />
            <div class="relative bg-white dark:bg-gray-900 pt-3 transition-colors duration-300">
              <h3
                class="text-xs font-semibold text-gray-700 dark:text-gray-300 group-hover:underline group-hover:underline-offset-4"
               >
                Juguetes
              </h3>
            </div>
          </a>
        </li>

        <li>
          <a href="{{ route('infoPeluches') }}" class="group block overflow-hidden rounded-t-2xl">
            <img src="{{ asset('imagenes/i__peluches/PELUCHES PRINCIPAL.jpeg') }}" alt="Peluches"
              class="h-[350px] w-full object-cover transition duration-500 group-hover:scale-105 sm:h-[450px]" />
            <div class="relative bg-white dark:bg-gray-900 pt-3 transition-colors duration-300">
              <h3
                class="text-xs font-semibold text-gray-700 dark:text-gray-300 group-hover:underline group-hover:underline-offset-4"
               >
                Peluches
              </h3>
            </div>
          </a>
        </li>

        <li>
          <a href="{{ route('infoRopaBebe') }}" class="group block overflow-hidden rounded-t-2xl">
            <img src="{{ asset('imagenes/i__ropaBebes/ROPA BEBE PRINCIPAL.jpg') }}" alt="Ropa de Bebé"
              class="h-[350px] w-full object-cover transition duration-500 group-hover:scale-105 sm:h-[450px]" />
            <div class="relative bg-white dark:bg-gray-900 pt-3 transition-colors duration-300">
              <h3
                class="text-xs font-semibold text-gray-700 dark:text-gray-300 group-hover:underline group-hover:underline-offset-4"
               >
                Ropa de Bebé
              </h3>
            </div>
          </a>
        </li>
      </ul>

      <h2 class="text-center text-gray-900 dark:text-white font-bold my-4 text-lg">
        ¿Cómo encontrarnos?
      </h2>

      <div class="relative w-full pb-[56.25%] p-2 mt-2">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3950.966954158598!2d-78.31213472645994!3d-8.002344892023586!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91adbfb0e8303f75%3A0xa23a35eed63b0d31!2sNovedades%20%22MisJhon%22!5e0!3m2!1ses-419!2spe!4v1751485592893!5m2!1ses-419!2spe"
          class="absolute top-0 left-0 w-full h-full border-0 rounded-md dark:filter dark:invert(1) dark:hue-rotate(180deg) transition-all duration-300"
          allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" title="Ubicación de Novedades MisJhon en Google Maps">
        </iframe>
      </div>
    </div>
  </main>
@endsection