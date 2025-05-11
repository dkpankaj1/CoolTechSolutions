<x-app-layout>
    <div class="container py-5">
        <h1 class="fw-bold mb-5 text-dark">Complaint Details</h1>

        <!-- Complaint Details Table -->
        <div class="card shadow-sm">
            <div class="card-body">
                <h1 class="card-title fw-semibold mb-4">Complaint #{{ $complain->id }}</h1>
                <div class="table-responsive">
                    <table class="table table-bordered table-sm">
                        <tbody>
                            <tr>
                                <th scope="row" class="w-25">ID</th>
                                <td>{{ $complain->id }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Name</th>
                                <td>{{ $complain->name }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Mobile</th>
                                <td>{{ $complain->number }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Email</th>
                                <td>{{ $complain->email }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Service</th>
                                <td>{{ $complain->service }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Address</th>
                                <td>{{ $complain->address }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Description</th>
                                <td>{{ $complain->description }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Status</th>
                                <td>
                                    <span class="badge {{ $complain->status === 'pending' ? 'text-bg-warning' : ($complain->status === 'in-progress' ? 'text-bg-info' : 'text-bg-success') }}">
                                        {{ ucfirst($complain->status) }}
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">Created At</th>
                                <td>{{ $complain->created_at->format('d M Y, H:i') }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Updated At</th>
                                <td>{{ $complain->updated_at->format('d M Y, H:i') }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- Action Buttons -->
        <div class="text-center mt-5">
            <a href="{{ route('admin.complains.edit', $complain) }}" class="btn btn-success px-4 py-2 me-2">Edit</a>
            <button onclick="window.print()" class="btn btn-primary px-4 py-2">Print</button>
        </div>
    </div>
</x-app-layout>