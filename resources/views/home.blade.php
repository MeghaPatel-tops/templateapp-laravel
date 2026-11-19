@extends('dashbord')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
            <div>
                <h3 class="fw-bold">Dashboard</h3>
                <p class="text-secondary mb-0">Welcome back, Admin!</p>
            </div>

            <button class="btn btn-primary">
                <i class="bi bi-plus-lg"></i> Add New
            </button>
        </div>

        <!-- Statistics Cards -->
        <div class="row g-4">

            <div class="col-lg-3 col-md-6">
                <div class="card dashboard-card shadow-sm p-3">
                    <div class="d-flex justify-content-between">
                        <div>
                            <p class="text-secondary mb-1">Total Users</p>
                            <h3 class="fw-bold">1,250</h3>
                        </div>
                        <div class="dashboard-icon bg-primary-subtle text-primary">
                            <i class="bi bi-people"></i>
                        </div>
                    </div>
                    <small class="text-success">+12% this month</small>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="card dashboard-card shadow-sm p-3">
                    <div class="d-flex justify-content-between">
                        <div>
                            <p class="text-secondary mb-1">Products</p>
                            <h3 class="fw-bold">450</h3>
                        </div>
                        <div class="dashboard-icon bg-success-subtle text-success">
                            <i class="bi bi-box-seam"></i>
                        </div>
                    </div>
                    <small class="text-success">+8% this month</small>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="card dashboard-card shadow-sm p-3">
                    <div class="d-flex justify-content-between">
                        <div>
                            <p class="text-secondary mb-1">Total Orders</p>
                            <h3 class="fw-bold">850</h3>
                        </div>
                        <div class="dashboard-icon bg-warning-subtle text-warning">
                            <i class="bi bi-cart"></i>
                        </div>
                    </div>
                    <small class="text-success">+15% this month</small>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="card dashboard-card shadow-sm p-3">
                    <div class="d-flex justify-content-between">
                        <div>
                            <p class="text-secondary mb-1">Revenue</p>
                            <h3 class="fw-bold">₹85,000</h3>
                        </div>
                        <div class="dashboard-icon bg-danger-subtle text-danger">
                            <i class="bi bi-currency-rupee"></i>
                        </div>
                    </div>
                    <small class="text-success">+20% this month</small>
                </div>
            </div>

        </div>

        <!-- Recent Orders -->
        <div class="card border-0 shadow-sm mt-4">

            <div class="card-header bg-white py-3">
                <h5 class="mb-0 fw-bold">Recent Orders</h5>
            </div>

            <div class="card-body table-responsive">

                <table class="table table-hover align-middle">
                    <thead class="table-light">
                        <tr>
                            <th>#</th>
                            <th>Customer</th>
                            <th>Product</th>
                            <th>Amount</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Rahul</td>
                            <td>Laptop</td>
                            <td>₹55,000</td>
                            <td><span class="badge bg-success">Completed</span></td>
                            <td><button class="btn btn-sm btn-primary">View</button></td>
                        </tr>

                        <tr>
                            <td>2</td>
                            <td>Priya</td>
                            <td>Mobile</td>
                            <td>₹20,000</td>
                            <td><span class="badge bg-warning text-dark">Pending</span></td>
                            <td><button class="btn btn-sm btn-primary">View</button></td>
                        </tr>

                        <tr>
                            <td>3</td>
                            <td>Amit</td>
                            <td>Headphones</td>
                            <td>₹2,500</td>
                            <td><span class="badge bg-danger">Cancelled</span></td>
                            <td><button class="btn btn-sm btn-primary">View</button></td>
                        </tr>
                    </tbody>

                </table>

            </div>
        </div>
@endsection