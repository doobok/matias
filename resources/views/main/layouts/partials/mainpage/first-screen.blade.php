<div class="pt-12 md:pt-32 md:pb-20">
  <div class="container px-3 mx-auto flex flex-wrap flex-col md:flex-row items-center">
    <!--Left Col-->
    <div class="flex flex-col w-full md:w-2/5 justify-center items-start text-center md:text-left">
      <p class="uppercase tracking-loose w-full">{{__('mainpage.uptitle')}}</p>
      <h1 class="my-4 text-5xl font-bold leading-tight">
        {{__('mainpage.h1')}}
      </h1>
      <p class="leading-normal text-xl mb-8">
        {{__('mainpage.subtitle')}}
      </p>
      <p class="mx-auto md:mx-1">
          <phone-btn title="{{__('mainpage.set-request')}}" color="bg-white text-gray-800"></phone-btn>
      </p>
    </div>
    <!--Right Col-->
    <div class="w-full md:w-3/5 py-6 grid justify-items-center">
      <div>

        <img class="w-full z-50" src="/main.svg" alt="{{__('mainpage.h1')}}"/>

      </div>
    </div>
  </div>
</div>
