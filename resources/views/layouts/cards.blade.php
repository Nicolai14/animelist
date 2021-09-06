<x-app-layout>
    <x-slot name="header">

        <h2 class="font-semibold text-xl text-gray-800 leading-tight">

        </h2>
    </x-slot>


    <div class="content-center  py-12 max-w-7xl mx-auto sm:px-6 lg:px-8">


        <form class="searchName">

            <div class="relative text-white-600 focus-within:text-white-400">
      <span class="absolute inset-y-0 left-0 flex items-center pl-2">
        <button type="submit" class="p-1 focus:outline-none focus:shadow-outline">
          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
               viewBox="0 0 24 24" class="w-6 h-6"><path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
        </button>
      </span>
                <input type="search" name="searchName"
                       class="py-2 text-sm text-white-600 bg-gray-900 rounded-md pl-10 focus:outline-none focus:bg-white focus:text-gray-900"
                       placeholder="Suche..." autocomplete="off">
            </div>
        </form>


        <form class="filterGenre" id="filterGenre">

            <div class="relative text-white-600 focus-within:text-gray-400">
      <span class="absolute inset-y-0  flex items-end pl-2 ml-56">

            <select
                class="form-select block w-full mt-1 py-2 text-sm bg-gray-900 rounded-md pl-10 focus:outline-none focus:text-white"
                name="filterGenre" onchange="this.form.submit()">
                <option selected="true" disabled="disabled">Filter</option>
                <option value="Action">Action</option>
                <option value="Adventure">Adventure</option>
                <option value="Comedy">Comedy</option>
                <option value="Drama">Drama</option>
                <option value="Fantasy">Fantasy</option>
                <option value="Mystery">Mystery</option>
                <option value="Romance">Romance</option>
                <option value="Family">Family</option>
                <option value="Horror">Horror</option>
                <option value="Thriller">Thriller</option>
                <option value="Sci-Fi">Sci-Fi</option>
                 <option value="ID">Upload</option>
            </select>
 <form class="filterGenre" id="filterGenre">
                    <button
                        class="ml-5 bg-gradient-to-r from-purple-800 to-green-500 hover:from-pink-500 hover:to-green-500 text-white font-bold py-2 px-8 rounded focus:ring transform transition hover:scale-105 duration-300 ease-in-out"
                        type="submit"
                    >
                        Zurucksetzen
                    </button>

                </form>
        </span>

            </div>
        </form>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <button onclick="listView()"><i class="fa fa-bars"></i> List</button>
        <button onclick="gridView()"><i class="fa fa-th-large"></i> Grid</button>

        <div class="mx-auto"></div>

        @include('layouts.cardBigView')






    </div>{{$data->links()}}

</x-app-layout>
