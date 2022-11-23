
{{--@if ($errors->any())--}}
{{--    <div class="alert alert-danger">--}}
{{--        <ul>--}}
{{--            @foreach ($errors->all() as $error)--}}
{{--                <li>{{ $error }}</li>--}}
{{--            @endforeach--}}
{{--        </ul>--}}
{{--    </div>--}}
{{--@endif--}}

<html>
<title>
    The_Table
</title>
<header>
    <h1>hello To Insert in Database</h1>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</header>
<body>
<form action="http://127.0.0.1:8000/posts/" method="get">
    @csrf
    <button type="submit">My_Home</button>
</form>
<form action="{{route('store.photo')}}" method="post" enctype="multipart/form-data">
    @csrf
{{--    value="{{old('title')}}----->دي علشان ان الكلام يفضل موجود القديد ومايتمسحش --}}
    <input type="text" name="title" value="{{old('title')}}" placeholder="enter title" class="@error('title') is-invalid @enderror">
    @error('title')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
     <br>
    <br>
    <input type="text" name="body" value="{{old('body')}}" placeholder="enter the Body" class="@error('body') is-invalid @enderror">
    @error('body')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
        <br>
        <br>
        <br>
    <input class="btn btn-primary" type="file" value="{{'path'}}" name="photo">
         <br>
         <br>
         <hr>
    <button class="btn btn-primary" type="submit">submit</button>

</form>

</body>
</html>
