@props(['blog'])
<div class="card">
            <img
              src='{{asset("storage/$blog->thumbnail")}}'
              class="card-img-top"
              alt="..."
            />
            <div class="card-body">
              <h3 class="card-title">{{$blog->title}}</h3>
              <p class="fs-6 text-secondary">
                <a href="/?username={{$blog->author->username}}">{{$blog->author->name}}</a>
                <span> - {{$blog->created_at->diffForHumans()}}</span>
              </p>
              <div class="tags my-3">
                <span class="badge bg-primary"><a style="text-decoration: none; color:aliceblue;" href="/?category={{$blog->category->slug}}">{{$blog->category->name}}</a></span>
                <!-- <span class="badge bg-secondary">Css</span>
                <span class="badge bg-success">Php</span>
                <span class="badge bg-danger">Javascript</span>
                <span class="badge bg-warning text-dark">Frontend</span> -->
              </div>
              <p class="card-text">
                {{$blog->intro}}
              </p>
              <a href="/blogs/{{$blog->slug}}" class="btn btn-primary">Read More</a>
            </div>
</div>