<table>

    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Surname</th>
        <th>Username</th>
        <th>Company ID</th>
        <th>Image Url</th>
    </tr>

    @foreach ($clients as $client)

    <tr>
        <td>{{$client->id}}</td>
        <td>
            <a href="{{route("client.show",[$client])}}">
                {{$client->name}}
            </a>

        </td>
        <td>{{$client->surname}}</td>
        <td>{{$client->username}}</td>
        <td>{{$client->company_id}}</td>
        <td>{{$client->image_url}}</td>
        <td>
            <a href="{{route("client.edit", [$client])}}"> Edit </a>
            <form method="POST" action="{{route("client.destroy", [$client])}}">
            @csrf
            <button type="submit"> Delete </button>
            </form>
        </td>
    </tr>
    @endforeach


</table>
