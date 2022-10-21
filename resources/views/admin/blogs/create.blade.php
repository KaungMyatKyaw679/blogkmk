<x-admin-layout>
    <h1 class=" text-center my-3">Blog Create Form</h1>
        <x-card-wrapper>
            <form enctype="multipart/form-data" action="/admin/blogs/store" method="POST">
                @csrf
                <x-form.input name='title'/>
                <x-form.input name='slug'/>
                <x-form.textarea name='body' />
                <x-form.input name='intro'/>
                <x-form.input name='thumbnail' type="file" required=""/>
                <x-form-input-wrapper>
                    <x-form.label name="category" />
                    <select name="category_id" id="category" class="form-control">
                        @foreach ($categories as $category)
                           <option {{$category->id == old('category_id') ? 'selected' : ''}} value="{{$category->id}}">{{$category->name}}</option> 
                        @endforeach
                        
                    </select>
                    <x-error name="category_id" />
                </x-form-input-wrapper>
                <button type="submit" class="btn btn-primary my-3">Submit</button>
            </form>
        </x-card-wrapper>
</x-admin-layout> 