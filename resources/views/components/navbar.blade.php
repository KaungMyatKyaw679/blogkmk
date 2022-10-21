<!-- navbar -->
    <nav class="navbar navbar-dark bg-dark">
      <div class="container">
        <a class="navbar-brand" href="/">Taung Chun Myae</a>
        <div class="d-flex">
          <a href="/#blogs" class="nav-link">Blogs</a>
          @auth
          <img src="{{auth()->user()->avator}}" alt="" width="50" height="50" class="rounded-circle">
          @can('admin')
          <a href="/admin/blogs" class="nav-link">Dashboard</a>
          @endcan
          <a href="/" class="nav-link">Welcome {{auth()->user()->name}}</a>
          <form method="POST" action="/logout">
            @csrf 
            <button type="submit" class="btn btn-link">Logout</button>
          </form>
          @else
          <a href="/register" class="nav-link">Register</a>
          <a href="/login" class="nav-link">Login</a>
          @endauth
          <a href="#subscribe" class="nav-link">Subscribe</a>
        </div>
      </div>
    </nav>