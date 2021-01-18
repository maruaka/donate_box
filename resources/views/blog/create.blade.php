

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ secure_asset('css/app.css') }}">
        <!--<link rel="stylesheet" href="{{ secure_asset('css/app.css') }}">-->

        <!-- Scripts -->
        <script src="{{ secure_asset('js/app.js') }}" defer></script>
         <!--<script src="{{ secure_asset('js/app.js') }}" defer></script>-->
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            

            <main>
               <x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('Create New Blog') }}
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:w-8/12 md:w-1/2 lg:w-5/12">
      <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 bg-white border-b border-gray-200">
          @include('common.errors')
          <form class="mb-6" action="{{ route('blog.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="flex flex-col mb-4">
              <label class="mb-2 uppercase font-bold text-lg text-grey-darkest" for="title">Title</label>
              <input class="border py-2 px-3 text-grey-darkest" type="text" name="title" id="title">
            </div>
            <div class="flex flex-col mb-4">
              <label class="mb-2 uppercase font-bold text-lg text-grey-darkest" for="subtitle">subtitle</label>
              <input class="border py-2 px-3 text-grey-darkest" type="text" name="subtitle" id="subtitle">
            </div>
             <div class="flex flex-col mb-4">
              <label class="mb-2 uppercase font-bold text-lg text-grey-darkest" for="text_one">text_one</label>
              <input class="border py-2 px-3 text-grey-darkest" type="text" name="text_one" id="text_one">
            </div>
             <div class="flex flex-col mb-4">
              <label class="mb-2 uppercase font-bold text-lg text-grey-darkest" for="text_twe">text_twe</label>
              <input class="border py-2 px-3 text-grey-darkest" type="text" name="text_twe" id="text_twe">
            </div>
             <div class="flex flex-col mb-4">
              <label class="mb-2 uppercase font-bold text-lg text-grey-darkest" for="text_three">text_three</label>
              <input class="border py-2 px-3 text-grey-darkest" type="text" name="text_three" id="text_three">
            </div>
           
             <div class="flex flex-col mb-4">
               <label class="mb-2 uppercase font-bold text-lg text-grey-darkest" for="image_one">image</label>
                <input class="border py-2 px-3 text-grey-darkest" type="file" name="image_one" accept="image/png, image/jpeg" id='image_one'/>
            </div>
             <div class="flex flex-col mb-4">
               <label class="mb-2 uppercase font-bold text-lg text-grey-darkest" for="image_twe">image</label>
                <input class="border py-2 px-3 text-grey-darkest" type="file" name="image_twe" accept="image/png, image/jpeg" id='image_twe'/>
            </div>
             <div class="flex flex-col mb-4">
               <label class="mb-2 uppercase font-bold text-lg text-grey-darkest" for="image_three">image</label>
                <input class="border py-2 px-3 text-grey-darkest" type="file" name="image_three" accept="image/png, image/jpeg" id='image_three'/>
            </div>
            <button type="submit" class="w-full py-3 mt-6 font-medium tracking-widest text-white uppercase bg-black shadow-lg focus:outline-none hover:bg-gray-900 hover:shadow-none">
              Create
            </button>
          </form>
        </div>
      </div>
    </div>
  </div>
</x-app-layout>

            </main>
        </div>
    </body>
</html>
