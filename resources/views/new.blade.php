<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questionnare</title>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>
<body>
    <div class="container">
        <div class="image">
            <img class="image1" src="{{ asset('assets/img/Emboss Logo.png') }}" alt="sabha">
            <img class="image2" src="{{ asset('assets/img/hannah-morgan-ycVFts5Ma4s-unsplash.jpg') }}" alt="">
        </div>
        <div class="form-outer">
            <nav>SABHA</nav>
            <form action="#">
                <?php $i=0; ?>
                {{-- @foreach($pertanyaans as $pertanyaan) --}}
                <div id="form1" class="form form-inner">
                    <div class="question">
                        <h3>{{ $pertanyaans[0]->pertanyaan }}</h3>
                    </div>
                    <div>
                        {{-- <input type="hidden" name="jawaban[{{$i-1}}]" value="">
                        <input type="button" class="answer answer-yes" name="jawaban[{{$i-1}}]" value="yes">
                        <input type="button" class="answer answer-no" value="no"> --}}
                        <button class="answer answer-yes">yes</button>
                        <button class="answer answer-no">no</button>
                    </div>
                    <div class="page">
                        @if($i!=1)<div class="back" id="back{{$i}}">back</div>@endif
                        @if($i!=$pertanyaans->count())<div class="next" id="next{{$i}}" class="pageButton">NEXT</div>@endif
                    </div>
                </div>
                <?php $i++; ?>
                {{-- @endforeach --}}
            </form>
        </div>
    </div>

<script src="{{ asset('assets/js/script.js') }}"></script>
</body>
</html>