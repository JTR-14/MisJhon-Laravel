@extends('layouts.app')

@section('content')
  <main>
    <div class="mx-auto max-w-screen-xl px-4 py-8 sm:px-6 sm:py-12 lg:px-8">
      <section class="text-center">
        <h1 class="text-xl font-bold text-gray-900 sm:text-3xl dark:text-white">
          Integrantes del Grupo
        </h1>
        <p class="mx-auto mt-4 max-w-md text-gray-500 dark:text-gray-400">
          Este proyecto fue desarrollado por:
        </p>
      </section>

      <div class="mt-8 flex justify-center">
          <ul class="w-full max-w-md bg-white dark:bg-gray-800 rounded-lg shadow-md p-6 space-y-3 text-center border border-gray-100 dark:border-gray-700">
              <li class="text-gray-700 dark:text-gray-300 font-medium">Cepeda Rosales Ricardo Felipe</li>
              <li class="text-gray-700 dark:text-gray-300 font-medium">Ramos Carranza Weshlyn Shorins</li>
              <li class="text-gray-700 dark:text-gray-300 font-medium">Sandoval Trujillo José Miguel Emiliano</li>
              <li class="text-gray-700 dark:text-gray-300 font-medium">Toledo Rodríguez Dilberth Jhonatan</li>
              <li class="text-gray-700 dark:text-gray-300 font-medium">Valderrama García Yahir Isaac</li>
              <li class="text-gray-700 dark:text-gray-300 font-medium">Vasquez Sanchez Juan Fernando</li>
          </ul>
      </div>
    </div>
  </main>
@endsection
