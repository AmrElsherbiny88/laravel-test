<table>
    <th>
        body
    </th>

    <th>
        title
    </th>

    <th>
        button
    </th>
   
    <tr>
        @foreach ($post as $item)
        <td>
           {{$item->body}}
        </td>
        
        <td>
            {{$item->title}}
        </td>
        
        <td>
            <form action="{{route('delete', $item->id) }}" method="POST">
                @csrf
          <button type="submit">
            delete
          </button>
        </form>
        </td>
        @endforeach
    </tr>




</table>