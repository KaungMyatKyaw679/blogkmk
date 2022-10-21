@props(['blogs'])
@foreach ($blogs as $blog )
    <div class="carousel-item">
      <img src='{{asset("storage/$blog->thumbnail")}}' class="d-block w-100" alt="...">
    </div>
@endforeach