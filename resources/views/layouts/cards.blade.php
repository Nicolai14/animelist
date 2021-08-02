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
          <svg fill="none"  stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-6 h-6"><path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
        </button>
      </span>
                    <input type="search" name="searchName" class="py-2 text-sm text-white-600 bg-gray-900 rounded-md pl-10 focus:outline-none focus:bg-white focus:text-gray-900" placeholder="Suche..." autocomplete="off">
                </div>
            </form>


        <form class="filterGenre" id="filterGenre">

            <div class="relative text-white-600 focus-within:text-gray-400">
      <span class="absolute inset-y-0  flex items-end pl-2 ml-56" >

            <select class="form-select block w-full mt-1 py-2 text-sm bg-gray-900 rounded-md pl-10 focus:outline-none focus:text-white" name="filterGenre" onchange="this.form.submit()">
                <option selected="true" disabled="disabled">Genre</option>
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
            </select>

</span>

            </div>
    </form>

        <form class="filterGenre" id="filterGenre">
            <button
                class="ml-3 bg-gradient-to-r from-purple-800 to-green-500 hover:from-pink-500 hover:to-green-500 text-white font-bold py-2 px-8 rounded focus:ring transform transition hover:scale-105 duration-300 ease-in-out" type="submit"
            >
                Zurucksetzen
            </button>

        </form>



        <div class="grid  md:grid-cols-3 sm:grid-cols-1 gap-4 mt-12">
@if ($data[0]==null)
    Es konnte kein Anime gefunden werden.
    @endif

        @foreach ($data as $anime)


<div class="container mx-auto md:mx-auto rounded-lg bg-gray-800 shadow md:shadow-2xl" style="display: flex; width: 100%; flex-direction: column">
    <div class="relative z-30">
        @if ($anime->Poster)
        <img class="w-full" src="{{$anime->Poster}}" style="float: left;object-fit: cover;height: 500px;">
             @else
            <img class="w-full" src="{{URL::asset('/assets/img/swo.png')}}" alt="ddd">
                 @endif
&nbsp;
        <div class="text-center absolute w-full" >

        </div>
    </div>
    <div class="relative flex justify-between items-center flex-row px-6 z-50 -mt-8">

    </div>
    <div class="pt-9 pb-8 text-center">

        <span class="bg-clip-text md:text-2xl text-white bg-gradient-to-r ">{{str_replace("%20", " ", $anime->Name)}}</span>
    </div>
    <div class="text-center">
      <span class="mb-auto my-4 md:text-1xl font-bold leading-tight text-center bg-clip-text text-transparent bg-gradient-to-r from-green-400 via-pink-500 to-purple-500" style="position: static;">
          {{$anime->Seasons}}
      </span>
    </div>


    <div class="m-4 leading-tight bg-clip-text text-transparent bg-gradient-to-r from-green-400 via-pink-500 to-purple-500 mt-auto" style="font-size: 18px">


        <table width="100%" class="details" >
            <colgroup>
                <col width="120">
                <col>
            </colgroup>
            <tbody><tr>
                <td class="border border-gray-700"><b>Titel</b></td>
                <td class="border border-gray-700">{{str_replace("%20", " ", $anime->Name)}}</td>
            </tr>
            <tr>
                <td class="border border-gray-700"><b>Genre</b></td>
                <td class="border border-gray-700">{{$anime->Genre}}</td>
            </tr>
            <tr>
                <td class="border border-gray-700"><b>Rating</b></td>
                <td class="border border-gray-700">{{$anime->Rating}} / 10</td>
            </tr>
            <style>
                .pointerBubble {
                    text-shadow: none;
                }
            </style>

            <tr>

            </tr>
            </tbody></table>
    </div>
    <div class="beschreibung mt-auto p-2" style="border-width: thin; border-color: #2d3748; min-height: 170px"> Beschreibung: <br>
        {{$anime->Plot}}
</div>

</div>


    @endforeach


    </div>
    </div>{{$data->links()}}

</x-app-layout>
