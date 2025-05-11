<x-app-layout>
    <div class="container py-5">
        <h1 class="fw-bold mb-5 text-dark">Complaints Dashboard</h1>

        <!-- Widgets for Complaint Counts -->
        <div class="row mb-5">
            <!-- Total Complaints -->
            <div class="col-md-3 mb-3">
                <div class="card shadow-sm text-center">
                    <div class="card-body">
                        <h5 class="card-title fw-semibold">All</h5>
                        <p class="display-4 fw-bold text-primary">{{ $totalComplains }}</p>
                    </div>
                </div>
            </div>
            <!-- Pending Complaints -->
            <div class="col-md-3 mb-3">
                <div class="card shadow-sm text-center">
                    <div class="card-body">
                        <h5 class="card-title fw-semibold">Pending</h5>
                        <p class="display-4 fw-bold text-warning">{{ $totalPending }}</p>
                    </div>
                </div>
            </div>
            <!-- In-Progress Complaints -->
            <div class="col-md-3 mb-3">
                <div class="card shadow-sm text-center">
                    <div class="card-body">
                        <h5 class="card-title fw-semibold">In Progress</h5>
                        <p class="display-4 fw-bold text-info">{{ $totalInProgress }}</p>
                    </div>
                </div>
            </div>
            <!-- Resolved Complaints -->
            <div class="col-md-3 mb-3">
                <div class="card shadow-sm text-center">
                    <div class="card-body">
                        <h5 class="card-title fw-semibold">Resolved</h5>
                        <p class="display-4 fw-bold text-success">{{ $totalResolved }}</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Grid for complaint tables -->
        <div class="card shadow-sm">
            <div class="card-body">
                <h2 class="card-title h5 fw-semibold mb-4">Latest Complaints</h2>
                <div class="table-container">
                    <table class="table table-striped table-sm">
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
                            @foreach ($complains as $index => $complain)
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
                                        <a class="btn btn-success btn-sm"
                                            href="{{ route('admin.complains.edit', $complain) }}">Edit</a>
                                        <a class="btn btn-info btn-sm"
                                            href="{{ route('admin.complains.show', $complain) }}">Show</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- Button to Show All Complaints -->
        <div class="text-center mt-5">
            <a href="{{ route('admin.complains.index') }}" class="btn btn-primary px-5 py-2">Show All Complaints</a>
        </div>
    </div>
</x-app-layout>