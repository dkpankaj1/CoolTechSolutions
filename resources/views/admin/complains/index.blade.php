<x-app-layout>

    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Complains List</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Mobile</th>
                            <th scope="col">Service</th>
                            <th scope="col">Status</th>
                            <th scope="col">Created At</th>
                            <th scope="col">Updated At</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($complains as $index => $complain)
                            <tr>
                                <td>{{ $complain->id }}</td>
                                <td>{{ $complain->name }}</td>
                                <td>{{ $complain->number }}</td>
                                <td>{{ $complain->service }}</td>

                                <td>
                                    <span
                                        class="badge {{ $complain->status === 'pending' ? 'text-bg-warning' : ($complain->status === 'in-progress' ? 'text-bg-info' : 'text-bg-success') }}">
                                        {{ ucfirst($complain->status) }}
                                    </span>
                                </td>

                                <td>{{ $complain->created_at->diffForHumans() }}</td>
                                <td>{{ $complain->updated_at->diffForHumans() }}</td>
                                <td>
                                    <div class="d-flex gap-1">

                                        <a class="btn btn-success btn-sm"
                                            href="{{ route('admin.complains.edit', $complain) }}">Edit</a>

                                        <a class="btn btn-info btn-sm"
                                            href="{{ route('admin.complains.show', $complain) }}">Show</a>

                                        <form action="{{ route('admin.complains.destroy', $complain->id) }}"
                                            method="POST" onsubmit="return confirm('Are you sure?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                        </form>
                                    </div>
                                </td>

                            </tr>                            
                        @empty
                            <tr>
                                <td colspan="8" class="text-center">No Complains Found</td>
                            </tr>
                        @endforelse
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="9">
                                <div class="d-flex justify-content-center">
                                    {{ $complains->links() }}
                                </div>
                            </td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>

</x-app-layout>
