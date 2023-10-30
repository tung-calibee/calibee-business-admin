@extends('layouts.app')

@section('content')
<div class="container-fluid d-flex justify-content-center align-items-center" style="background: #f5f5f5; min-height: 100vh;">
    <div class="col-md-6 d-flex flex-column justify-content-center align-items-start" style="overflow: hidden; background: #f5f5f5;">
        <div class="p-4 d-flex flex-column justify-content-center align-items-center" style="width: 100%; height: 100%; background-color: #f5f5f5;">
            <div class="d-flex justify-content-center align-items-stretch" style="height: 618px; width: 636px;background: white; padding: 5% 16%; box-shadow: 0px 1px 3px rgba(53, 63, 79, 0.10); border-radius: 16px; flex-direction: column; gap: 24px;">
                <div class="d-flex flex-column align-items-start justify-content-center" style="height: 110px; padding: 12px 0; gap: 8px;">
                <div class="form-title">Welcome!</div>
                    <div style="color: #242A2E;" class="text-14">Login to access the Calibee for Enterprise Portal</div>
                </div>
                <form method="GET" action="{{ route('booking.index') }}" method="" >
                    <div class="d-flex flex-column align-items-start" style="height: 98px; gap: 4px;">
                        <div style="color: #363A45;" class="text-16">Email</div>
                        <input id="emailInput" type="email" class="form-control email-input" placeholder="Enter your registered work email">
                    </div>
                    <div class="d-flex flex-column align-items-start" style="height: 98px; gap: 4px;">
                        <div style="color: #363A45;" class="text-16">Password</div>
                        <input id="passwordInput" type="password" class="password-input form-control" placeholder="Enter your password">
                    </div>
                    <div class="d-flex justify-content-between align-items-center" style="height: 24px; margin: 8px 0;">
                        <div class="d-flex align-items-center" style="gap: 12px; justify-content: flex-start;">
                            <input type="checkbox" style="width: 20px; height: 20px; color: #6B7075; " class="text-14">Remember me
                        </div>
                        <div class="d-flex align-items-center justify-content-end" style="height: 20px; flex: 1 1 0; gap: 8px;">
                            <div style="color: #6B7075;" class="text-14">Forgot your password?</div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between align-items-center">
                            <button class="btn btn-success" disabled id="loginButton" style="opacity: 0.4; flex: 1 1 0; height: 58px; border: none; padding: 18px 16px; border-radius: 8px;">
                                Log In
                            </button>
                    </div>
                </form>
                <div class="d-flex flex-column align-items-start" style="height: 46px; gap: 8px;">
                    <div class="d-flex">
                        <span class="text-dark text-form" style="padding-right: 5px;">Don’t have an account?</span>
                        <span class="text-success text-form">Sign up</span>
                      </div>
                </div>
            </div>
        </div>
     
    </div>
    <div class="col-md-6 d-flex flex-column justify-content-center align-items-start login-left" style="background-image: url('{{ asset('images/vesinh.jpg') }}'); flex: 1 1 0; align-self: stretch; overflow: hidden; flex-direction: column; justify-content: center; align-items: flex-start; gap: 25px; display: inline-flex">
        <div class="left-padding">
            <img src="{{URL::asset('/images/calibee_logo.png')}}" alt="Calibee Logo" style="width: 219.15px; height: 64px">
            <div style="align-self: stretch; color: white; font-size: 32px; padding: 32px 0; font-weight: 700; line-height: 38.40px; word-wrap: break-word">The one-stop hub for managing all your service needs. Forget about fragmented invoices, attendance sheets, and contracts.</div>
            <div class="d-inline-flex align-items-start justify-content-start gap-3" style="gap: 5px;">
                <div class="icon">
                    <img src="{{URL::asset('/images/2 User-bold.svg')}}">
                </div>
                <div class="d-inline-flex flex-column align-items-start justify-content-start gap-3" style="flex: 1 1 0;">
                    <div class="text-form" style="align-self: stretch; color: white;">Here, you can track your workforce attendance, review invoices, and manage your account, all in real-time. Simplifying your operational workflow has never been easier.</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('login')
<script>
    const emailInput = document.getElementById("emailInput");
    const passwordInput = document.getElementById("passwordInput");
    const loginButton = document.getElementById("loginButton");

    emailInput.addEventListener("input", updateButtonState);
    passwordInput.addEventListener("input", updateButtonState);

    function updateButtonState() {
        if (emailInput.value && passwordInput.value) {
            loginButton.removeAttribute("disabled");
            loginButton.style.opacity = 1;
        } else {
            loginButton.setAttribute("disabled", true);
            loginButton.style.opacity = 0.4;
        }
    }
</script>
@endpush