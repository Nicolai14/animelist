
  <div class="container mx-auto max-w-md rounded-lg overflow-hidden  bg-gray-800 shadow md:shadow-2xl">
    <div class="relative z-30" style="clip-path: polygon(0 0, 100% 0, 100% 100%, 0 calc(100% - 3vw));">
      <img class="w-full" src="{{URL::asset('/assets/img/swo.png')}}"
           alt="Profile image" />
      <div class="text-center absolute w-full" style="bottom: 4rem">


      </div>
    </div>
    <div class="relative flex justify-between items-center flex-row px-6 z-50 -mt-10">

    </div>
      <div class="pt-9 pb-8 text-center">

          <span class="bg-clip-text md:text-4xl text-transparent bg-gradient-to-r from-green-400 via-pink-500 to-purple-500">AnimeList</span>
      </div>
      <div class="m-4 text-center">
      <span class="my-4 md:text-1xl text-white opacity-75 font-bold leading-tight text-center ">

<span class="break-all text-center text-2xl"> Aktuell vorhandene Animes:</span>
      </span></div>
      <div class="m-4 text-center">
           <span class="bg-clip-text md:text-8xl text-transparent bg-gradient-to-r from-green-400 via-pink-500 to-purple-500">{{$data}}</span>

      </span>
      </div>
      <div class="mt-8"></div>
  </div>
  </div>

</div>

