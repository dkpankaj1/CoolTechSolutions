<x-app-layout>
    <div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Mobile</th>
        <th scope="col">Email</th>
        <th scope="col">Service</th>
        <th scope="col">Status</th>
        <th scope="col">Address</th>
        <th scope="col">Description</th>
        <th scope="col">Action</th>
        
      </tr>
    </thead>
    <tbody>
      @foreach($complains as $index => $complain)
        <tr>
          <td>{{ $complain->id }}</td>
          <td>{{ $complain->name }}</td>
          <td>{{ $complain->number }}</td>
          <td>{{ $complain->email }}</td>
          <td>{{ $complain->service }}</td>
          <td>{{ $complain->status}}</td>
          <td>{{ $complain->address }}</td>
          <td>{{ $complain->description }}</td>
          <td>
           <a href="{{ route('admin.editcomplain', $complain->id) }}" class="btn btn-success">Edit</a>
          </td>
         
        </tr>
      @endforeach
    </tbody>
  </table>
  </div>

  <!-- Pagination links -->
  <div class="mt-3">
    {{ $complains->links() }}
  </div>
</x-app-layout>
