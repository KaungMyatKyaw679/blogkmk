<x-layout :title="$blog->title">
    <!-- single blog section -->
    <div class="container ">
      <div class="row">
        <div class="col-md-6 mx-auto text-center">
          <img
          src='{{asset("storage/$blog->thumbnail")}}'
              class="card-img-top"
          />
          <h3 class="my-3">{{$blog->title}}</h3>
          <div>
            <div>Author - <a href="/?username={{$blog->author->username}}">{{$blog->author->name}}</a></div>
            <div class="badge bg-primary ">{{$blog->category->name}}</div>
            <div class="text-secondary">{{$blog->created_at->diffForHumans()}}</div>
            <div class="text-secondary">
              <form action="/blogs/{{$blog->slug}}/subscription" method="POST">
              @csrf
              @auth
              @if (auth()->user()->isSubscribed($blog))
              <button class="btn btn-danger ">unsubscribe</button>
              @else
              <button class="btn btn-warning ">subscribe</button>
              @endif
              @endauth
              
              </form>
            </div>
          </div>
          <div class="lh-md mt-3 " style="text-align:justify;">{!!$blog->body!!}</div>
        </div>
      </div>
    </div>
    <x-comment-form :blog="$blog"/>
    @if ($blog->comments->count())
    <x-comments :comments="$blog->comments()->latest()->paginate(2)"/>
    @endif
    <x-blogsyoumaylike :randomBlogs="$randomBlogs" />
</x-layout>
