<div>
    <h1>Student list</h1>

    <table border='1'>
        <tr>
            <th>Name</th>
            <th>email</th>
            <th>phone</th>
            <th>created</th>
            <th>Operation</th>

        </tr>
        @foreach($students as $student)
        <tr>
            <td>{{ $student->name }}</td>
            <td>{{ $student->email }}</td>
            <td>{{ $student->phone }}</td>
            <td>{{ $student->created_at }}</td>
            <td>
                <a href="{{ url('delete/'.$student->id) }}">Delete</a>
            </td>
        </tr>
        @endforeach
    </table>
</div>