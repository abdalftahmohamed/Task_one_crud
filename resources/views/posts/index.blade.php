{{--<h1>hello To show the Table of Database</h1>--}}


{{--/************************************************--}}
<html>
<title>
    The_Table
</title>
<header>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</header>
<body>
<table class="table table-striped">
    <th scope="col" > ID </th>
    <th scope="col"> TiTLE </th>
    <th scope="col"> BODY </th>
    <th  scope="col"> Actions </th>
    <th  scope="col"> The Photo </th>

    @foreach($posts as $post)
        <tr >
            <td scope="col">{{$post->id}}</td>
            <td scope="col">{{$post->title}}</td>
            <td scope="col">{{$post->body}}</td>



            <td scope="col">

{{--            <a class="btn btn-primary" href="{{route('posts.edit',$post->id)}}">EDIT</a>--}}
                <form class="btn btn-primary" action="{{route('posts.edit',$post->id)}}" method="get">
                    <button class="btn btn-primary" type="submit">Edit</button>
                </form>

                   <form style="float: left" class="btn btn-danger" action="{{route('posts.destroy',$post->id)}}" method="post">
                        @method('delete')
                        @csrf
                        <button class="btn btn-danger" type="submit">SOftDelete</button>
                   </form>
                    <form  class="btn btn-danger" action="{{route('posts.forcedelete',$post->id)}}" method="get">
                        @csrf
                        <button class="btn btn-danger" type="submit">ForceDelete</button>
                    </form>

            </td>

            <td scope="col">
                    <img src="{{asset('imgs/'.$post->path)}}" width="130 px" height="130 px">
            </td>

        </tr>
{{--        <td scope="col">{{$post->path}}</td>--}}

    @endforeach
</table>
<br>

<form class="btn btn-primary" action="http://127.0.0.1:8000/posts/index" method="get">
    @csrf
    <button class="btn btn-primary" type="submit">Recycling</button>
</form>
<form  class="btn btn-primary" action="http://127.0.0.1:8000/posts/create" method="get">
    @csrf
    <button  class="btn btn-primary" type="submit">sign_up</button>
</form>
<form  class="btn btn-danger" action="{{route('posts.delete.all.trancate')}}" method="get">
    @csrf
    <button   class="btn btn-danger" type="submit">Delete_All_Finally_Trancete</button>
</form>


</body>
</html>
