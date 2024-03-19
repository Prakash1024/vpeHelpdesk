@extends('admin.mainlayout')

@section('content')

  <div class="px-3 pt-2" style="color: #525e6b; weight:600; ">
    <h3>{{$title}}</h3>
  </div>

  <div class="table-responsive text-nowrap table-striped p-3">
    <table class="table">
      <thead class="table-light">
        <tr>
          <th>Name</th>
          <th>Email</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($users as $user)
        <tr>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>
              <button type="button" onclick="confirmUserDelete({{ $user->id }})" style="border: none; background: none; cursor: pointer;">
                <i class="bi bi-trash3" title="Delete" style="cursor: pointer;"></i>
            </button>
            <form id="delete-form-{{ $user->id }}" method="POST" action="{{ route('users.destroy', $user->id) }}">
                @csrf
                @method('DELETE')
            </form>
            </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>

@endsection


