<form method="POST" action="{{route("company.store")}}">

    <input type="text" name="company_name" />
    <input type="text" name="company_type" />
    <input type="text" name="company_description" />

    @csrf

    <button type="submit">Create</button>

</form>
