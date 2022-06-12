<form action="{{ route('course.store')}}" method="POST">
    @csrf

    Name
    <input type="text" name="name">
    <br>
    <button type="submit">Submit</button>

</form>