<tr>
    <th scope="row">{{ $task->id }}</th>
    <td>{{ $task->title }}</td>
    <td>{{ $task->deadline }}</td>
    <td>{{ $task->description }}</td>
    <td>
       @if($task->is_complete == false)
       <span class="badge badge-warning">Por comprar</span>
       @else
       <span class="badge badge-success">Conseguido</span>
       @endif
    </td>
    <td>
       @if($task->is_complete == false)
       <a href="{{ route('catalogo.status', $task->id) }}" class="btn btn-outline-success btn-sm" data-toggle data-toggle="tooltip" data-placement="top" title="Conseguir"><ion-icon name="checkmark-outline"></ion-icon></a>
       @endif
       <a href="{{ route('catalogo.edit', $task->id) }}" class="btn btn-outline-info btn-sm" data-toggle="tooltip" data-placement="top" title="Editar"><ion-icon name="create-outline"></ion-icon></a>
                            
       <form method="POST" style="display: inline-block;" action="{{ route('catalogo.destroy', $task->id) }}">
       {{ csrf_field() }}
       {{ method_field('DELETE') }}

        <button type="submit" data-toggle="tooltip" data-placement="top" title="Borrar" class="btn btn-danger btn-sm"><ion-icon name="trash-outline"></ion-icon></button>
        </form>
     </td>
   </tr>