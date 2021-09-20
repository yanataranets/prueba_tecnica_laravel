

    <div class="row">
        <div class="col-12">
            <h1 class="text-center">Repository Design Pattern CRUD</h1>

            <hr>
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>id</th>
                    <th>email</th>
                    <th>name</th>
                </tr>
                </thead>
                <tbody>
                @forelse($users as $user)
                    <tr>

                        <td>{{$user->id}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->name}}</td>

                    </tr>
                @empty
                @endforelse
                {{$users->links()}}
                <a href="{{url('sortType')}}">Sort by Title</a>

                </tbody>
            </table>

        </div></div>
