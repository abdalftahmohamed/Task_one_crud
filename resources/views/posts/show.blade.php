<html>
<title>
 my web bage
</title>
{{--<style>--}}
{{--    header {'float:left;'}--}}
{{--</style>--}}
<header>
    <h1> hello To show the Table of Database SoftDelete</h1>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</header>
<body>
<form action="http://127.0.0.1:8000/posts/" method="get">
    @csrf
    <button type="submit">My_Home</button>
</form>
  <table >
    <th > ID </th>
    <th > TiTLE </th>
    <th > BODY </th>
    <th > Actions </th>

    @foreach($posts as $post)
       <tr >
           <td>{{$post->id}}</td>
           <td>{{$post->title}}</td>
           <td>{{$post->body}}</td>
           <td>
               <a href="{{route('posts.restore',$post->id)}}">RESTORE</a>

               <form action="{{route('posts.forcedelete',$post->id)}}" method="get">
                   @csrf
                   <button type="submit">ForceDelete</button>
               </form>
           </td>
       </tr>

    @endforeach
</table>
</body>
</html>
