@extends('dashboard')

@section('content')
    <main class="login-form d-flex flex-column align-items-center justify-content-center" style="min-height: 100vh; background-color: #f0f2f5;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card shadow-lg border-0 rounded-4" style="max-width: 450px; width: 100%; background: #ffffff; padding: 20px;">
                        <h3 class="card-header text-center text-white py-3 rounded-top" style="background: linear-gradient(90deg, #007bff, #6610f2); font-size: 1.5rem;">Login</h3>
                        <div class="card-body p-4">
                            <form method="POST" action="{{ route('user.authUser') }}">
                                @csrf
                                <div class="form-group mb-3">
                                    <label for="email" class="form-label" style="font-weight: 600;">Email</label>
                                    <input type="text" placeholder="Enter your email" id="email" class="form-control rounded-pill" name="email" required autofocus>
                                    @if ($errors->has('email'))
                                        <span class="text-danger" style="font-size: 0.9rem;">{{ $errors->first('email') }}</span>
                                    @endif
                                </div>
                                <div class="form-group mb-3">
                                    <label for="password" class="form-label" style="font-weight: 600;">Password</label>
                                    <input type="password" placeholder="Enter your password" id="password" class="form-control rounded-pill" name="password" required>
                                    @if ($errors->has('password'))
                                        <span class="text-danger" style="font-size: 0.9rem;">{{ $errors->first('password') }}</span>
                                    @endif
                                </div>
                                <div class="form-group mb-3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember">
                                        <label class="form-check-label" for="remember" style="font-weight: 600;">Remember Me</label>
                                    </div>
                                </div>
                                <div class="d-grid gap-2">
                                    <button type="submit" class="btn btn-primary rounded-pill" style="font-size: 1rem; font-weight: 600; background: linear-gradient(90deg, #007bff, #6610f2); border: none;">Signin</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection