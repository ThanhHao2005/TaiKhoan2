@extends('dashboard')

@section('content')
    <main class="user-table d-flex flex-column align-items-center justify-content-center"
        style="min-height: 100vh; background-color: #f0f2f5;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="card shadow-lg border-0 rounded-4 p-4">
                        <h3 class="text-center mb-4"
                            style="background: linear-gradient(90deg, #007bff, #6610f2); color: white; padding: 10px 0; border-radius: 0.5rem;">
                            User List</h3>
                        <table>
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Orders</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                    <tr>
                                        <td>{{ $user->id }}</td>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>
                                            @if($user->orders->count() > 0)
                                                <ul>
                                                @foreach($user->orders as $order)
                                                    <li>
                                                    Mã_ĐH
                                                        <a href="{{ route('orders.show', $order->id) }}">
                                                            #{{ $order->order_number }}
                                                        </a>
                                                    </li>
                                                @endforeach

                                                </ul>
                                            @else
                                                Không có đơn hàng
                                            @endif
                                        </td>
                                        <td>
                                            <!-- Hành động ở đây -->
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection