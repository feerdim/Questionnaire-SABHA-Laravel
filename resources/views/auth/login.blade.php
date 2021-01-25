<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('assets/css/auth.css') }}">
</head>
<body>
    <div class="container">
        <div class="outer">
            <nav></nav>
            <form method="POST" action="{{ route('login') }}">
                <main>
                    @csrf
                    <input type="email" id="email" name="email" value="{{ old('email') }}" placeholder="Email" required autocomplete="email" autofocus>
                    <input type="password" id="password" name="password" placeholder="Password" required autocomplete="current-password">
                    <div class="check">
                        {{-- <input type="checkbox"> --}}
                        <input type="checkbox" id="remember" name="remember" {{ old('remember') ? 'checked' : '' }}>
                        <span>Remember Me</span>
                    </div>
                    <div class="btn-box">
                        <button>LOGIN</button>
                    </div>
                </main>
            </form>
            <footer>
                {{-- <p><a href="{{ route('password.request') }}">Forgot Your Password?</a></p> --}}
                {{-- <p>Don't have an account? <a href="">Register</a> here.</p> --}}
            </footer>  
        </div>
    </div>

</body>
</html>
