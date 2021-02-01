<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="icon" href="{{ asset('assets/img/icon2.png') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/auth.css') }}">
  <style>
* {
    cursor: none;
}
.cursor, .follower {
    position: fixed;
    top: 0;
    left: 0;
    border-radius: 50%;
    pointer-events: none;
}
.cursor {
    width: 10px;
    height: 10px;
    border: 1px solid black;
    background: white;
    z-index: 11;
}
.follower {
    width: 30px;
    height: 30px;
    background: black;
    border: 2px solid white;
    opacity: .8;
    z-index: 10;
}
  </style>

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
                        <button>Login</button>
                    </div>
                </form>
            </main>
        </div>
    </div>
    <div class="follower"></div>
    <div class="cursor"></div>

    <!-- jQuery -->
    <script src="{{ asset('assets/jquery/jquery.min.js') }}"></script>
    <!-- GSAP -->
    <script src="{{ asset('assets/gsap/gsap.min.js') }}"></script>
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
const cur = document.querySelector('.cursor')
const follow = document.querySelector('.follower')


gsap.set('.cursor',{xPercent: -50, yPercent: -50});
gsap.set('.follower',{xPercent: -50, yPercent: -50});

window.addEventListener('mousemove', e => {
    gsap.to('.cursor', 0.2, {x:e.clientX, y:e.clientY})
    gsap.to('.follower', 0.9, {x:e.clientX, y:e.clientY})
})

if(window.innerWidth <= 670) {
    cur.style.display = "none"
    follow.style.display = "none"
}
    </script>
</body>
</html>