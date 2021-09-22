<div class="row justify-content-center">
        <div class="col-6">
            <h2 class="text-center">Edit Post</h2>
            <hr>
            <form action="{{route('update', $post->id)}}" method="post">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <input type="text" class="form-control" name="title" value="{{$post->title}}">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="text" value="{{$post->text}}">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="image" value="{{$post->image}}">
                </div>

                <div class="form-group">
                    <button class="btn btn-block btn-success">Add New Data</button>
                </div>
                <h5>Display Comments</h5>
                <a href="{{ url('comments', $post->id)}}">Comments</a>

            </form>
            <a class="btn btn-block btn-info">Back</a>
        </div>
    </div>

