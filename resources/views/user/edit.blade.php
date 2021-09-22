
<div class="row justify-content-center">
    <div class="col-6">
        <h2 class="text-center">Edit Post</h2>
        <hr>
        <form action="{{route('updateuser', $user->id)}}" method="post">
            @csrf
            @method('PUT')
            <div class="form-group">
                <input type="text" class="form-control" name="title" value="{{$user->name}}">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="text" value="{{$user->email}}">
            </div>

            <div class="form-group">
                <button class="btn btn-block btn-success">Add New Data</button>
            </div>


        </form>
        <a class="btn btn-block btn-info">Back</a>
    </div>
</div>

