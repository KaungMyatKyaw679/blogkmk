@props(['comment'])
<x-card-wrapper>
    <div class="d-flex">
        <div>
            <img src="{{$comment->author->avator}}" alt="" width="50" height="50" class="rounded-circle">
        </div>
        <div class="ms-3">
            <h6>{{$comment->author->name}}</h6>
            <p class="text-secondary">{{$comment->created_at->format('g:ia \o\n l jS F Y')}}</p>
        </div>
    </div>
    <p class="mt-1">{{$comment->body}}</p>
</x-card-wrapper>