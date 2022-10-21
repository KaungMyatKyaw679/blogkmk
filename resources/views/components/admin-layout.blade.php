<x-layout>
    <div class="container">
        <div class="row">
            <div class="col-md-2 mt-4">
                <ul class="list-group mt-5">
                    <li class="list-group-item"><a href="/admin/blogs">Dashboard</a></li>
                    <li class="list-group-item"><a href="/admin/blogs/create">Create Blog</a></li>
                </ul>
            </div>
            <div class="col-md-10 my-4">
                {{$slot}}
            </div>
        </div>
    </div>
</x-layout>