@extends('layout')
@section('body')

  <div class="grid xl:grid-cols-3 w-full">
    <div class="w-full flex xl:items-end p-6 xl:p-0 items-center justify-center">
      <img src="{{asset('images/alsome.jpg')}}" alt="Me again" class="rounded">
    </div>
    <div class="flex flex-col items-start justify-start px-12 xl:col-span-2">
      <h2 class="pb-6">@lang('Hello World')</h2>
      <p>
          @lang("My name is Leonardo. I'm a programmer from São Paulo, Brazil, currently living in Portugal and completing my graduation.")<br><br>
          @lang("I have a job at an influential programming company in Portugal, and I'm planning to continue my studies.")<br><br>
          @lang("I am familiar with several programming languages, and I can easily learn new ones. I enjoy learning new design patterns and implementing them in my projects.")<br><br>
          @lang("In the future, I hope to enhance my programming knowledge through work experience, and I am also planning to move to another country to improve my English skills.")<br><br>
      </p>
    </div>
  </div>

  <div class="py-6">
    <div class="grid grid-cols-1 gap-6 px-12">

      <div class="grid xl:grid-cols-2 gap-4">
        <div>
          <h2 class="pb-6">@lang('Gym')</h2>
          <p>
            @lang('Going to the gym has become a very important part of my life, a place of socializing for people who strive for a better and healthier lifestyle through effort.') <br><br>
            @lang('There is no easy way to achieve gains, there are no better or worse ones, there are only those who are more hardworking and consistent.') <br><br>
            @lang('This lifestyle demands more effort, is more painful, and requires more energy, but seeing how my body improves in terms of strength and aesthetics is priceless.')
          </p>
        </div>
        <div class="grid grid-cols-3 gap-4 justify-items-start">
          <img src="{{asset('images/gym.jpg')}}" alt="Arnold pose picture" class="rounded">
          <img src="{{asset('images/zyzz.jpg')}}" alt="Zyzz pose picture" class="rounded">
          <div class="flex items-end justify-end">
            <img src="{{asset('images/lean.jpg')}}" alt="LeanBeefPatty pose picture" class="rounded">
          </div>
        </div>
      </div>

      <div class="grid xl:grid-cols-2 gap-4">
        <img src="{{asset('images/music.jpg')}}" alt="Pulse show" class="rounded-xl">
        <div class="h-min order-first">
          <h2 class="pb-6">@lang('Music')</h2>
          <p>
            @lang('Music has been an important part of my life since forever.') <br><br>
            @lang('I grew up listening to classic Brazilian and foreign music. Wherever I go, I carry headphones with me and several downloaded songs.') <br><br>
            @lang('My favorite music genres are pop, rock, and jazz, and almost anything that originates from them. I have an open mind to new bands and new styles.') <br><br>
            @lang('The Weeknd, Lana Del Rey, Pink Floyd, The Alan Parsons Project, Tyler, The Creator, and Arctic Monkeys are always among the most played songs of the day.')
          </p>
        </div>
      </div>

      <div class="grid xl:grid-cols-2 gap-4">
        <div class="h-min">
          <h2 class="pb-6">@lang('Travel')</h2>
          <p class="pr-6">
            @lang('But if I had to choose one, my favorite hobby is definitely traveling.') <br><br>
            @lang('I enjoy everything about traveling, from planning the flights and packing my suitcase to the feeling of leaving the house locked up. I love the excitement of arriving at the airport, the journey on the plane, and immersing myself in a new culture in a new country with new sights and cuisine.') <br><br>
            @lang("So far, I haven't traveled to many places, but I have several photographs of where I've been, and I'm definitely going to see the whole world when I start having my own money.")
          </p>
        </div>
        <img src="{{asset('images/travel.jpg')}}" alt="Pulse show" class="rounded">
      </div>

    </div>
  </div>

  <div class="grid xl:grid-cols-3 gap-4 justify-items-center py-6 [&>a]:flex xl:[&>a]:justify-center [&>a]:justify-start [&>a]:pl-12 xl:[&>a]:pl-0 [&>a]:space-x-4 [&>a]:items-center [&>a]:w-full [&>a>h4]:flex [&>a>h4]:items-end">
    <a href="https://github.com/AbreuDProgrammer" target="_blank">
      <h4>@lang('Github')</h4>
      <svg xmlns="http://www.w3.org/2000/svg" height="50" width="50" viewBox="0 0 24 24" style="fill: rgba(255, 255, 255, 1);transform: ;msFilter:;"><path fill-rule="evenodd" clip-rule="evenodd" d="M12.026 2c-5.509 0-9.974 4.465-9.974 9.974 0 4.406 2.857 8.145 6.821 9.465.499.09.679-.217.679-.481 0-.237-.008-.865-.011-1.696-2.775.602-3.361-1.338-3.361-1.338-.452-1.152-1.107-1.459-1.107-1.459-.905-.619.069-.605.069-.605 1.002.07 1.527 1.028 1.527 1.028.89 1.524 2.336 1.084 2.902.829.091-.645.351-1.085.635-1.334-2.214-.251-4.542-1.107-4.542-4.93 0-1.087.389-1.979 1.024-2.675-.101-.253-.446-1.268.099-2.64 0 0 .837-.269 2.742 1.021a9.582 9.582 0 0 1 2.496-.336 9.554 9.554 0 0 1 2.496.336c1.906-1.291 2.742-1.021 2.742-1.021.545 1.372.203 2.387.099 2.64.64.696 1.024 1.587 1.024 2.675 0 3.833-2.33 4.675-4.552 4.922.355.308.675.916.675 1.846 0 1.334-.012 2.41-.012 2.737 0 .267.178.577.687.479C19.146 20.115 22 16.379 22 11.974 22 6.465 17.535 2 12.026 2z"></path></svg>
    </a>
    <a href="https://www.linkedin.com/in/leonardo-abreu-714355246/" target="_blank">
      <h4>@lang('Linkedin')</h4>
      <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 24 24" style="fill: rgba(255, 255, 255, 1);transform: ;msFilter:;"><path d="M20 3H4a1 1 0 0 0-1 1v16a1 1 0 0 0 1 1h16a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1zM8.339 18.337H5.667v-8.59h2.672v8.59zM7.003 8.574a1.548 1.548 0 1 1 0-3.096 1.548 1.548 0 0 1 0 3.096zm11.335 9.763h-2.669V14.16c0-.996-.018-2.277-1.388-2.277-1.39 0-1.601 1.086-1.601 2.207v4.248h-2.667v-8.59h2.56v1.174h.037c.355-.675 1.227-1.387 2.524-1.387 2.704 0 3.203 1.778 3.203 4.092v4.71z"></path></svg>
    </a>
    <a href="{{asset('files/cv.pdf')}}" target="_blank">
      <h4>@lang('Curriculum')</h4>
      <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 24 24" style="fill: rgba(255, 255, 255, 1);transform: ;msFilter:;"><path d="M8.267 14.68c-.184 0-.308.018-.372.036v1.178c.076.018.171.023.302.023.479 0 .774-.242.774-.651 0-.366-.254-.586-.704-.586zm3.487.012c-.2 0-.33.018-.407.036v2.61c.077.018.201.018.313.018.817.006 1.349-.444 1.349-1.396.006-.83-.479-1.268-1.255-1.268z"></path><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8l-6-6zM9.498 16.19c-.309.29-.765.42-1.296.42a2.23 2.23 0 0 1-.308-.018v1.426H7v-3.936A7.558 7.558 0 0 1 8.219 14c.557 0 .953.106 1.22.319.254.202.426.533.426.923-.001.392-.131.723-.367.948zm3.807 1.355c-.42.349-1.059.515-1.84.515-.468 0-.799-.03-1.024-.06v-3.917A7.947 7.947 0 0 1 11.66 14c.757 0 1.249.136 1.633.426.415.308.675.799.675 1.504 0 .763-.279 1.29-.663 1.615zM17 14.77h-1.532v.911H16.9v.734h-1.432v1.604h-.906V14.03H17v.74zM14 9h-1V4l5 5h-4z"></path></svg>
    </a>
    <a href="https://www.instagram.com/o.leo.a/" target="_blank">
      <h4>@lang('Instagram')</h4>
      <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 24 24" style="fill: rgba(255, 255, 255, 1);transform: ;msFilter:;"><path d="M11.999 7.377a4.623 4.623 0 1 0 0 9.248 4.623 4.623 0 0 0 0-9.248zm0 7.627a3.004 3.004 0 1 1 0-6.008 3.004 3.004 0 0 1 0 6.008z"></path><circle cx="16.806" cy="7.207" r="1.078"></circle><path d="M20.533 6.111A4.605 4.605 0 0 0 17.9 3.479a6.606 6.606 0 0 0-2.186-.42c-.963-.042-1.268-.054-3.71-.054s-2.755 0-3.71.054a6.554 6.554 0 0 0-2.184.42 4.6 4.6 0 0 0-2.633 2.632 6.585 6.585 0 0 0-.419 2.186c-.043.962-.056 1.267-.056 3.71 0 2.442 0 2.753.056 3.71.015.748.156 1.486.419 2.187a4.61 4.61 0 0 0 2.634 2.632 6.584 6.584 0 0 0 2.185.45c.963.042 1.268.055 3.71.055s2.755 0 3.71-.055a6.615 6.615 0 0 0 2.186-.419 4.613 4.613 0 0 0 2.633-2.633c.263-.7.404-1.438.419-2.186.043-.962.056-1.267.056-3.71s0-2.753-.056-3.71a6.581 6.581 0 0 0-.421-2.217zm-1.218 9.532a5.043 5.043 0 0 1-.311 1.688 2.987 2.987 0 0 1-1.712 1.711 4.985 4.985 0 0 1-1.67.311c-.95.044-1.218.055-3.654.055-2.438 0-2.687 0-3.655-.055a4.96 4.96 0 0 1-1.669-.311 2.985 2.985 0 0 1-1.719-1.711 5.08 5.08 0 0 1-.311-1.669c-.043-.95-.053-1.218-.053-3.654 0-2.437 0-2.686.053-3.655a5.038 5.038 0 0 1 .311-1.687c.305-.789.93-1.41 1.719-1.712a5.01 5.01 0 0 1 1.669-.311c.951-.043 1.218-.055 3.655-.055s2.687 0 3.654.055a4.96 4.96 0 0 1 1.67.311 2.991 2.991 0 0 1 1.712 1.712 5.08 5.08 0 0 1 .311 1.669c.043.951.054 1.218.054 3.655 0 2.436 0 2.698-.043 3.654h-.011z"></path></svg>
    </a>
    <a href="https://www.chess.com/member/oleo2412" target="_blank">
      <h4>@lang('Chess')</h4>
      <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 24 24" style="fill: rgba(255, 255, 255, 1);transform: ;msFilter:;"><path d="M21 2H3a1 1 0 0 0-1 1v18a1 1 0 0 0 1 1h18a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1zm-1 6h-4v4h4v4h-4v4h-4v-4H8v4H4v-4h4v-4H4V8h4V4h4v4h4V4h4v4z"></path><path d="M8 8h4v4H8zm4 4h4v4h-4z"></path></svg>
    </a>
  </div>
@endsection
