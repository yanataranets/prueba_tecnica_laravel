@foreach($comments as $comment)
   <strong>{{$comment->parent_id}}</strong>
    <div class="display-comment">
        id: {{ $comment->id }}
        text: <p>{{ $comment->comment }}</p>
        post id: <p>{{ $comment->parent_id }}</p>
    </div>
   <a href="{{ url('delete/comment', $comment->id) }}">Delete</a>
@endforeach


