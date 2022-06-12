<form action="{{ route( 'course.update' , $each)}}" method="POST">
    @csrf
    @method('PUT')
    Name
    <input type="text" name="name" value="{{ $each->name }}">
    <br>
    <button type="submit">Submit</button>

</form>