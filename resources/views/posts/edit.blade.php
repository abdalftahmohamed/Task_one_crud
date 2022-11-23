
<h1>hello To update your data</h1>
<br>
<br>
<form action="{{route('posts.update',$post->id,$post->path)}}" method="post" enctype="multipart/form-data">
    @method('put')
    @csrf
    <input type="text" name="title" value="{{$post->title}}">
    <br>
    <br>
    <input type="text" name="body"  value="{{$post->body}}">
    <br>
    <br>

    <input class="btn btn-primary" type="file" value="{{$post->path}}" name="photo">

    <br>
    <br>
    <hr>
    <button type="submit">submit</button>

</form>
