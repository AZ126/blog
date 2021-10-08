<table style="width: 100%;" border="1">
    <thead>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Photo</th>
    </thead>
    <tbody>
        @foreach($data as $data)
        <tr>
            <td>{{$data['id']}}</td>
            <td>{{$data['first_name']}}</td>
            <td>{{$data['email']}}</td>
            <td><img src="{{ $data['avatar'] }}" /></td>
        </tr>
        @endforeach
    </tbody>
</table>
