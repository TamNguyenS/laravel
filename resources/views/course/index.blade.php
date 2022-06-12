<h1>Hikkywannafly </h1>
<a href="{{ route('course.create') }}">Thêm </a>
<br>
<table border="1" width="100%" cellspacing="">
    <tr>
        <th> id</th>
        <th> Name</th>
        <th>Created at </th>
        <th>Delete </th>
        <th>Update </th>
    </tr>
    @foreach ($data as $course)
        <tr>
            <td>{{ $course->id }}</td>
            <td>{{ $course->name }}</td>
            {{-- <td>{{date("F jS, Y", strtotime($course->created_at))}}</td> --}}
            <td>{{ $course->getYearDay() }}</td>
            <td>
                <form action="{{ route('course.destroy', $course)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>


            </td>
            <td> <a href=" {{ route('course.edit', $course) }}">Edit </a>  </td>
        </tr>
    @endforeach

</table>
