<div>
    <h1>Users page</h1>
    <table border=1>
        <tr>
            <td>
                ID
            </td>
            <td>
                NAME
            </td>
            <td>
                EMAIL
            </td>
            <td>
                NUMBER
            </td>
        </tr>
        @foreach($users as $user1)
        <tr>
            <td>
                {{$user1->id}}
            </td>
            <td>
                {{$user1->name}}
            </td>
            <td>
                {{$user1->email}}
            </td>
            <td>
                {{$user1->mobile}}
            </td>
        </tr>
        @endforeach
    </table>
</div>
