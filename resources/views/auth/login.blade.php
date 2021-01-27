<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('assets/css/auth.css') }}">
</head>
<body>
    <div class="container">
        <div class="outer">
            <nav></nav>
            <main>
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <input class="@error('email')invalid @enderror" type="text" id="email" name="email" value="{{ old('email') }}" placeholder="Email">
                    @error('email')
                        <span id="email-err" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    <input class="@error('password')invalid @enderror" type="password" id="password" name="password" placeholder="Password">
                    @error('password')
                        <span id="pass-err" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    <div class="check">
                        <input type="checkbox" id="remember" name="remember" {{ old('remember') ? 'checked' : '' }}>
                        <span>Remember Me</span>
                    </div>
                    <div class="btn-box">
                        <button>LOGIN</button>
                    </div>
                </form>
            </main>
        </div>
    </div>

    <!-- jQuery -->
    <script src="{{ asset('assets/jquery/jquery.min.js') }}"></script>
    <script>
        $('#email').keypress(function(){
            if($('#email').hasClass("invalid")){
                $('#email').removeClass("invalid");
            }
            $('#email-err').css({ display: "none"});
        })

        $('#password').keypress(function(){
            if($('#password').hasClass("invalid")){
                $('#password').removeClass("invalid");
            }
            $('#pass-err').css({ display: "none"});
        })
    </script>
</body>
</html>
