<x-admin-layout>
    <h1 class=" text-center my-3">Blog Edit Form</h1>
        <x-card-wrapper>
            <form enctype="multipart/form-data" action="/admin/blogs/{{$blog->slug}}/update" method="POST">
                @method('patch')
                @csrf
                <x-form.input name='title' value="{{$blog->title}}"/>
                <x-form.input name='slug' value="{{$blog->slug}}"/>
                <x-form.textarea name='body' value="{{$blog->body}}"/>
                <x-form.input name='intro' value="{{$blog->intro}}"/>
                <x-form.input name='thumbnail' type="file" value="" required=""/>
                <img src="/storage/{{$blog->thumbnail}}" width="200px" height="100px" alt="">
                <x-form-input-wrapper>
                    <x-form.label name="category" />
                    <select name="category_id" id="category" class="form-control">
                        @foreach ($categories as $category)
                           <option {{$category->id == old('category_id',$blog->category->id) ? 'selected' : ''}} value="{{$category->id}}">{{$category->name}}</option> 
                        @endforeach
                        
                    </select>
                    <x-error name="category_id" />
                </x-form-input-wrapper>
                <button type="submit" class="btn btn-primary my-3">Submit</button>
            </form>
        </x-card-wrapper>
</x-admin-layout> 