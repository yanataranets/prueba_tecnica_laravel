

    <div class="row">
        <div class="col-12">
            <h1 class="text-center">Repository Design Pattern CRUD</h1>
            <a href="{{ url ('addnewpost') }}" type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                Add New Post
            </a>
            <hr>
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>title</th>
                    <th>text</th>
                    <th>image</th>
                    <th>views</th>
                    <th>comments</th>
                </tr>
                </thead>
                <tbody>
                @forelse($posts as $post)
                    <tr>

                        <td>{{$post->id}}</td>
                        <td>{{$post->text}}</td>
                        <td>{{$post->image}}</td>
                        <td>{{$post->views}}</td>
                        <td>{{$post->comments}}</td>
                        <td>
                            <a href="{{ url('view', $post->id) }}">View</a>
                            <a href="{{ url('delete', $post->id) }}">Delete</a>
                        </td>
                    </tr>
                @empty
                @endforelse
                {{$posts->links()}}
                <a href="{{url('sortType')}}">Sort by Title</a>
                <input name="post_id" value="{{$post->id}}" type="hidden">
                </tbody>
            </table>

