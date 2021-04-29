<x-app-layout>
<x-slot name="header">

    <h2 class="font-semibold text-xl text-gray-800 leading-tight">

    </h2>
</x-slot>


    <div class="content-center mt-12 py-12 max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="grid  md:grid-cols-3 sm:grid-cols-1 gap-4">

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
    </div><div class="text-center">{{$data->links()}}</div>

</x-app-layout>
