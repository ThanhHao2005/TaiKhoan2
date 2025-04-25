@extends('dashboard')

@section('content')
    <main class="login-form d-flex flex-column align-items-center justify-content-center"
        style="min-height: 100vh; background-color: #f8f9fa;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card shadow-lg border-0 rounded-4 p-4"
                        style="box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); border-radius: 15px;">
                        <h3 class="card-header text-center text-white py-3 rounded-top"
                            style="background: linear-gradient(90deg, #007bff, #6610f2); font-size: 1.5rem;">User Details
                        </h3>
                        <div class="card-body">
                            <table class="table table-bordered table-hover table-striped align-middle"
                                style="width: 100%; margin-top: 20px; border-collapse: collapse;">
                                <thead class="table-primary"
                                    style="background-color: #007bff; color: white; font-size: 1rem;">
                                    <tr>
                                        <th scope="col" style="padding: 12px; text-align: left;">ID</th>
                                        <th scope="col" style="padding: 12px; text-align: left;">Name</th>
                                        <th scope="col" style="padding: 12px; text-align: left;">Email</th>
                                        <th scope="col" style="padding: 12px; text-align: left;">Image</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr style="background-color: #f9f9f9;">
                                        <td style="padding: 12px; vertical-align: middle;">{{$messi->id}}</td>
                                        <td style="padding: 12px; vertical-align: middle;">{{$messi->name}}</td>
                                        <td style="padding: 12px; vertical-align: middle;">{{$messi->email}}</td>
                                        <td style="padding: 12px; vertical-align: middle;">
                                            <img src="{{ asset($messi->image) }}" alt="User Image"
                                                style="max-width: 100px; height: auto; border-radius: 5px;">
                                        </td>

                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection