<form method="POST" action="{{route("client.store")}}">

    <input type="text" name="client_name" />
    <input type="text" name="client_surname" />
    <input type="text" name="client_username" />
    <input type="text" name="client_company_id" />
    <input type="text" name="client_image_url" />

    @csrf

    <button type="submit">Create</button>

</form>
