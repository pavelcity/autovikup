@if($blogs == NULL)
<section class="text-gray-600 body-font">
  <div class="container px-5 py-5 mx-auto">
    
		<div class="flex flex-col">
      <div class="h-0.5 bg-main-light rounded overflow-hidden"></div>
      <div class="flex flex-wrap sm:flex-row flex-col py-6 mb-2">
        <a href="{{ route('blog.home') }}" class="sm:w-2/5 text-gray-900 hover:text-purple-500 transition font-medium title-font text-2xl sm:text-3xl mb-2 sm:mb-0">
	        {{ $profile->blog_title ?? 'Блог / Новости' }} 
	        </a>
				{!! $profile->blog_subtitle ?? 'нет данных' !!}
        {{-- <p class="sm:w-3/5 leading-relaxed text-base sm:pl-10 pl-0"></p> --}}
      </div>
    </div>
 
 

    <div class="flex flex-wrap -m-4">


			@foreach ($blogs as $blog)
					
      <div class="xl:w-1/4 md:w-1/2 p-4">
        <div class="bg-gray-100 p-6 rounded-lg hover:shadow-xl transition">
         <a href="{{ route('blog.detail', $blog->slug) }}">
					<img class="h-40 rounded w-full object-cover object-center mb-6" src="{{ asset($blog->pic ?? 'uploads/not_image.jpg') }}" alt="content">
          <h2 class="text-lg text-purple-500 font-medium title-font mb-4 sm:h-20 overflow-hidden">{{ $blog->title }}</h2>
          <div class="block text-base h-24 ">{!! Str::limit($blog->short, 100) !!}</div>
				 </a>
				 <a href="{{ route('blog.detail', $blog->slug) }}" class="bg-purple-500 hover:bg-purple-600 transition py-2 px-7 text-white text-xs uppercase rounded-md mt-5 inline-block">Перейти</a>
        </div>
      </div>

			@endforeach




	












    </div>
  </div>
</section>
@endif