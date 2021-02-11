<div class="card">

    <div class="card-header">
        <input wire:model="search" type="text" class="form-control" placeholder="Ingrese el nombre de un post">
    </div>


    @if ($posts->count())


    <card-body>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th colspan="2"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)

                <tr>
                    <td>{{$post->id}}</td>
                    <td>{{$post->name}}</td>
                    <td width="30px"><a class="btn btn-success btn-sm" href="{{route('admin.posts.edit',$post)}}">Editar</a></td>
                    <td width="30px">
                    <form action="{{route('admin.posts.destroy',$post)}}" method="POST" >
                    @csrf
                    @method('delete')

                    <button class="btn btn-danger btn-sm" type="submit">Elminar</button>

                    </form>
                    </td>
                </tr>

                @endforeach
            </tbody>

        </table>

    </card-body>

    <div class="card-footer">
        {{$posts->links()}}
    </div>
@else

<div class="card-body">

    <strong> No hay Nigun registro...</strong>
</div>
    @endif
</div>
