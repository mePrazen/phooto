<h1>Product add form</h1>

@if($errors->any())
    @foreach ($errors->all() as $error)
    <div>{{$error}}</div>
    @endforeach
@endif

@if(session()->has('successMessage'))
    <div class="">{{session()->get('successMessage')}}</div>
@endif




<form  action="/photo/store" method="post" enctype="multipart/form-data">
@csrf
    <label for="">product id</label>
    <input type="text" name="photo_id" id="">

    <label for="">product file</label>
    <input type="file" name="photo" id="">
    
    <input type="submit" value="submit">
    </form>


