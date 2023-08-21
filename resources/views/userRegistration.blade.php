<form action="{{route('user.register')}}" method="POST">
    @csrf
    <input type="text" name="name"/>
    <input type="submit" value="Submit"/>
</form>