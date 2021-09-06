<listView-app-layout>

        @if ($data[0]==null)
            Es konnte kein Anime gefunden werden.
        @endif
            <div class="grid  md:grid-cols-1 sm:grid-cols-1 gap-4 mt-12">
                @foreach ($data as $anime)

                    <div class="container mx-auto md:mx-auto rounded-lg bg-gray-800 shadow md:shadow-2xl">

                        @if ($anime->Poster)
                            <div class="container max-w-full">
                            <img class="w-50 h-40" align="left" src="{{$anime->Poster}}" />
                    </div>
                        @else
                            <img class="w-full" src="{{URL::asset('/assets/img/swo.png')}}" alt="ddd"/>
                        @endif
                        {{str_replace("%20", " ", $anime->Name)}}




                    </div>

                @endforeach
            </div>








</listView-app-layout>
