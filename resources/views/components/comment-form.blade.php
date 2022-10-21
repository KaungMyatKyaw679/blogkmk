@props(['blog'])
<section class="container">
      <x-card-wrapper>
        @auth
        <div class="card p-3 my-3 shadow-sm ">
        <form action="/blogs/{{$blog->slug}}/comments" method="POST">
        @csrf
          <div class="mb-3">
            <textarea required name="body" id="" cols="10" rows="5" class="form-control border border-0" placeholder="say somethings .........."></textarea>
            <x-error name="body"/>
          </div>
          <div class="d-flex justify-content-end">
          <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>
        </div>
        @else
        <p class="text-center">please <a href="/login">login</a> to perticipate in this discussion.</p>
        @endauth
      </x-card-wrapper>
</section>