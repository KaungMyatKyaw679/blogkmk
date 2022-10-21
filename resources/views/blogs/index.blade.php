<x-layout>
    @if (session('success'))
    <div class="alert alert-success text-center">{{session('success')}}</div>
    @endif
    <x-hero/>
    @foreach ($blogs as $blog)
    <div class="card container" style="width: 80%;">
    <img src='{{asset("storage/$blog->thumbnail")}}'class="card-img-top" alt="...">
    <div class="card-body">
    <h5 class="card-title">{{$blog->title}}</h5>
    <p class="card-text">{!!$blog->body!!}</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>
    </div>
    @endforeach
    <x-blogs-section :blogs="$blogs"/>
</x-layout>