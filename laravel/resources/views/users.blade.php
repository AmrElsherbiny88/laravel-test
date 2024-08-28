


<form action="{{route('Add')}}" method="POST">

    @csrf
   <input type="text" name="title">
   
   <input type="text" name="body">

   <button type="submit">Add</button>
</form>