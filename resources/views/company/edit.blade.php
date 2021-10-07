<form method="POST" action="{{route("company.update",[$company])}}">

    <input type="text" name="company_name" value="{{$company->name}}" />
    <input type="text" name="company_type" value="{{$company->type}}" />
    <input type="text" name="company_description" value="{{$company->description}}" />

    @csrf

    <button type="submit">Edit</button>

</form>
