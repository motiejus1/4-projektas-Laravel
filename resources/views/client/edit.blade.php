<form method="POST" action="{{route("client.update",[$client])}}">

    <input type="text" name="client_name" value="{{$client->name}}" />
    <input type="text" name="client_surname" value="{{$client->surname}}" />
    <input type="text" name="client_username" value="{{$client->username}}" />
    <input type="text" name="client_company_id" value="{{$client->company_id}}" />
    <input type="text" name="client_image_url" value="{{$client->image_url}}" />

    @csrf

    <button type="submit">Edit</button>

</form>
