@extends('dashboard')

@section('content')
    <main class="signup-form d-flex flex-column align-items-center justify-content-center"
        style="min-height: 100vh; background-color: #f0f2f5;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card shadow-lg border-0 rounded-4"
                        style="max-width: 450px; width: 100%; background: #ffffff; padding: 20px;">
                        <h3 class="card-header text-center text-white py-3 rounded-top"
                            style="background: linear-gradient(90deg, #007bff, #6610f2); font-size: 1.5rem;">Create User
                        </h3>
                        <div class="card-body p-4">
                            <form action="{{ route('user.postUser') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group mb-3">
                                    <label for="name" class="form-label" style="font-weight: 600;">Name</label>
                                    <input type="text" placeholder="Enter your name" id="name"
                                        class="form-control rounded-pill" name="name" required autofocus>
                                    @if ($errors->has('name'))
                                        <span class="text-danger" style="font-size: 0.9rem;">{{ $errors->first('name') }}</span>
                                    @endif
                                </div>
                                
                                <!-- <div class="form-group mb-3">
                                            <label for="name" class="form-label" style="font-weight: 600;">Phone</label>
                                            <input type="text" placeholder="Enter your phone" id="Phone" class="form-control rounded-pill" name="phone" required autofocus>
                                            @if ($errors->has('phone'))
                                                <span class="text-danger" style="font-size: 0.9rem;">{{ $errors->first('phone') }}</span>
                                            @endif
                                        </div> -->
                                <div class="form-group mb-3">
                                    <label for="name" class="form-label" style="font-weight: 600;">Email</label>
                                    <input type="text" placeholder="Enter your email" id="Email"
                                        class="form-control rounded-pill" name="email" required autofocus>
                                    @if ($errors->has('email'))
                                        <span class="text-danger"
                                            style="font-size: 0.9rem;">{{ $errors->first('email') }}</span>
                                    @endif
                                </div>
                                <div class="form-group mb-3">
                                    <label for="password" class="form-label" style="font-weight: 600;">Password</label>
                                    <input type="password" placeholder="Enter your password" id="password"
                                        class="form-control rounded-pill" name="password" required>
                                    @if ($errors->has('password'))
                                        <span class="text-danger"
                                            style="font-size: 0.9rem;">{{ $errors->first('password') }}</span>
                                    @endif
                                </div>
                                <div class="d-grid gap-2">
                                    <button type="submit" class="btn btn-primary rounded-pill"
                                        style="font-size: 1rem; font-weight: 600; background: linear-gradient(90deg, #007bff, #6610f2); border: none;">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection