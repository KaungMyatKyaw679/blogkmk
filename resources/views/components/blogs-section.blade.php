@props(['blogs'])
<section class="container text-center" id="blogs">
      <h1 class="display-5 fw-bold mb-4">Blogs</h1>
      <x-category-dropdown/>
      <form action="" class="my-3">
        <div class="input-group mb-3">
          @if (request('category'))
          <input
            type="hidden"
            name="category"
            value="{{request('category')}}"
          />
          @endif
          @if (request('username'))
          <input
            type="hidden"
            name="username"
            value="{{request('username')}}"
          />
          @endif
          <input
            type="text"
            name="search"
            value="{{request('search')}}"
            autocomplete="false"
            class="form-control"
            placeholder="Search Blogs..."
          />
          <button
            class="input-group-text bg-primary text-light"
            id="basic-addon2"
            type="submit"
          >
            Search
          </button>
        </div>
      </form>
      <div class="row">
        @if ($blogs->count()>0 && request('search'))
        <p class="bg-success p-1" style="border-radius: 3;">{{ $blogs->count() }} blogs found that deal with "{{ request('search') }}"</p>
        @endif
        @forelse ($blogs as $blog)
          <div class="col-md-4 mb-4">
            <x-blog-card :blog="$blog" />
          </div>
        @empty
        <p class="text-center">No Blogs Found.</p>
        @endforelse
        {{$blogs->links()}}
      </div>
    </section>