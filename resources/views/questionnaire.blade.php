<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="{{ asset('assets/img/icon2.png') }}">
  <title>SABHA | Find Your Shape</title>
  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>
<body>
  <div class="prolog">
    <div class="prolog-outer">
      <div class="prolog-1">
        <h1 class="hide-outer hide-title">
          <span class="hide-1">PROLOG</span>
        </h1>
        <h3 class="hide-outer">
          <span class="hide-1">Bentuk tubuh biasanya ditentukan sebagai langkah pertama</span>
        </h3 >
        <h3 class="hide-outer">
          <span class="hide-1"> dalam belajar memilih pakaian yang cocok dengan pemakainya.</span>
        </h3 >
        <h3 class="hide-outer">
          <span class="hide-1">Hampir semua wanita memiliki bagian tubuh </span>
        </h3 >
        <h3 class="hide-outer">
          <span class="hide-1"> bermasalah yang ingin mereka tutupi </span>
        </h3 >
        <h3 class="hide-outer">
          <span class="hide-1">beserta fitur positif yang ingin ditonjolkan </span>
        </h3 >
      </div>

      <div class="prolog-2">
        <h3 class="hide-outer">
          <span class="hide-2">Dalam panduan ini, kita akan membahas cara yang benar </span>
        </h3 >
        <h3 class="hide-outer">
          <span class="hide-2">untuk memeriksa, mengukur, dan menentukan bentuk tubuh.</span>
        </h3 >
        <h3 class="hide-outer">
          <span class="hide-2">Dengan demikian, anda akan lebih memahami bagian - bagian mana </span>
        </h3 >
        <h3 class="hide-outer">
          <span class="hide-2">yang perlu ditutupi, ditonjolkan, dan nantinya mempelajari cara berpakaian </span>
        </h3 >
        <h3 class="hide-outer">
          <span class="hide-2">yang membuat panampilan lebih cantik. Kemudian belanja!</span>
        </h3 >
      </div> 

      <div class="prolog-3">
        <h1 class="hide-outer hide-title outer-3">
          <span class="hide-3">CARA MENGETAHUI UKURAN TUBUH</span>
        </h1>
        <h3 class="hide-outer outer-3">
          <span class="hide-3">Perhatikan bagian tubuh mana yang membesar jika berat badan naik</span>
        </h3 >
        <h3 class="hide-outer outer-3">
          <span class="hide-3">Tiap bentuk tubuh rentan terhadap penambahan berat badan di area tertentu, misalnya paha dan perut.</span>
        </h3 >
        <h3 class="hide-outer outer-3">
          <span class="hide-3">Ini memberi gambaran seperti apa bentuk tubuh anda.</span>
        </h3 >
        <h3 class="hide-outer outer-3">
          <span class="hide-3">Berdirilah di depan cermin dengan pakaian seminim mungkin.</span>
        </h3 >
        <h3 class="hide-outer outer-3">
          <span class="hide-3">Pakaian dapat menutupi bentuk tubuh sehingga anda akan lebih sulit melihat lekuknya.</span>
        </h3 >
      </div>
    </div>
    <div class="image-prolog">
      <img class="image-teteh-1" src="{{ asset('assets/img/prolog/2216781-removebg-preview.png') }}" alt="">
      <img class="image-teteh-2" src="{{ asset('assets/img/prolog/02dca460eeb65ea9b2297f401a025c6642bf1b35_s2_n2.png') }}" alt="">
      <img class="image-teteh-3" src="{{ asset('assets/img/prolog/blonde-posing-lady-sport-suit-woman-home.jpg') }}" alt="">
    </div>
    <div class="next-button">
      <img src="{{ asset('assets/img/angle-arrow-down.png') }}" alt="">
    </div>
  </div>
  <div class="container">
    <div class="form-outer">
      <nav> 
        <span class="nav-outer">
          <span class="nav-title">S</span>
        </span>
        <span class="nav-outer">
          <span class="nav-title">A</span>
        </span> 
        <span class="nav-outer">
          <span class="nav-title">B</span>
        </span> 
        <span class="nav-outer">
          <span class="nav-title">H</span>
        </span> 
        <span class="nav-outer">
          <span class="nav-title">A</span>
        </span>  
      </nav>
      <form id="questionnaire" class="form" method="POST" action="{{ route('questionnaire.result') }}" name="form" files=true>
        {{ csrf_field() }} {{ method_field('POST') }}
        <div id="form" class="form-inner">
          <div class="question">
            <h3>
              <input type="text" class="fill" name="name" id="name" placeholder="Nama Lengkap">
              <div id="nama-err">Jangan dikosongkan</div>
            </h3>
            <h3>
              <input type="text" class="fill" name="email" id="email" placeholder="Email">
              <div id="email-err">Jangan dikosongkan</div>
            </h3>
          </div>
          <div class="page">
            <div class="next" id="next">Next</div>
          </div> 
        </div>
        <div id="form0" class="form-inner">
          <div class="question">
            <h3>{{ $question->question }}</h3>
          </div>
          <div>
            <input id="answer[0]" type="hidden" name="answer[0]" value="">
            <button href="{{route('questionnaire.form',[$question->yes, 0])}}" id="0" class="answer answer-yes" answer="yes">iya</button>
            <button href="{{route('questionnaire.form',[$question->no, 0])}}" id="0" class="answer answer-no" answer="no">tidak</button>
          </div>
          <div class="page page0">
            <button id="back" class="back">Back</button>
          </div>
        </div>
      </form>
    </div>
    <div class="modal-bg">
      <div class="modal">
        <div class="modal-inner" style="text-align: center;">
        </div>
      </div>
    </div>
  </div>
    <div class="follower"></div>
    <div class="cursor"></div>

  <!-- jQuery -->
  <script src="{{ asset('assets/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('assets/gsap/gsap.min.js') }}"></script>
  <script src="{{ asset('assets/gsap/CSSRulePlugin.min.js') }}"></script>
  <script src="{{ asset('assets/js/script.js') }}"></script>
  <script>
    $('input#name').keypress(function(){
      $('#nama-err').css({ display: "none"});
    })

    $('input#email').keypress(function(){
      $('#email-err').css({ display: "none"});
    })

    $('body').on('click', '.next', function(){
      event.preventDefault();
      var me = $(this),
          id = me.attr('id');
      if(id == 'next'){
        if(document.forms['form'].name.value == ""){
          $('#nama-err').css({ display: "block"});
        }
        if(document.forms['form'].email.value == ""){
          $('#email-err').css({ display: "block"});
        }
        if(document.forms['form'].name.value != "" && document.forms['form'].email.value != ""){
          $('#form').css({ right: "450px", opacity: "0", "z-index": "0" });
          $('#form0').css({ left: "0", opacity: "1", "z-index": "9" });
        }
      }
      else if(id == 'submit'){
        var form = $('.form'),
            url = form.attr('action');
        $.ajax({
          url : url,
          type : "POST",
          data: new FormData($("#questionnaire")[0]),
          dataType: 'JSON',
          contentType: false,
          processData: false,
          success: function(data){
            $('.modal-inner').append('<h1>'+data.bentuk+'</h1>');
            href='https://api.whatsapp.com/send?phone=6281317943867&text='+data.chat;
            $('.modal-inner').append('<a href="'+href+'"><button id="home_page">Konsultasi!</button></a>');
          },
          error: function(xhr){
          }
        });
        tl.to('.modal-bg', {visibility : 'visible'})
        tl.to('.form-outer', {'-webkit-filter':'blur(2px)', filter: 'blur(2px)'}, "-=1")
        tl.from('.modal', {height : "0%"})
        tl.from('.modal', {width : "50%"})
        tl.from('.modal-inner',{scale: 1.5}, "-=1")
      }
      else{
        var id = parseInt(me.attr('id')),
            id0 = id-1;
        $('#form'+id0).css({ right: "450px", opacity: "0", "z-index": "0" });
        $('#form'+id).css({ left: "0", opacity: "1", "z-index": "9" });
      }
    })

    $('body').on('click', '.back', function(){
      event.preventDefault();
      var me = $(this),
          id = me.attr('id');
      if(id == 'back'){
        $('#form0').css({ right: "450px", opacity: "0", "z-index": "0" });
        $('#form').css({ left: "0", opacity: "1", "z-index": "9" });
      }
      var me = $(this),
          id = parseInt(me.attr('id')),
          id0 = id-1;
      $('#form'+id).css({ right: "450px", opacity: "0", "z-index": "0" });
      $('#form'+id0).css({ left: "0", opacity: "1", "z-index": "9" });
    })

    $('body').on('click', '.answer', function(){
      event.preventDefault();
      var me = $(this),
          answer = me.attr('answer'),
          url = me.attr('href'),
          id = parseInt(me.attr('id')),
          div = me.parents('#form'+id),
          id2 = id+1,
          value = $('#form'+id2),
          page = $('.page'+id);
      if(answer=='yes'){
        document.getElementById('answer['+id+']').setAttribute('value','1');
        $('#'+id+'.answer-yes').addClass('colored');
        $('#'+id+'.answer-no').removeClass('colored')
      }
      else if(answer=='no'){
        document.getElementById('answer['+id+']').setAttribute('value','0');
        $('#'+id+'.answer-no').addClass('colored');
        $('#'+id+'.answer-yes').removeClass('colored')
      }
      $.ajax({
        url: url,
        type: 'GET',
        dataType: 'json',
        success: function(pertanyaan){
          if(value.length){
            value.nextAll().remove().end().remove();
            page.find('.next').remove();
            div.after(pertanyaan.form);
            page.append(pertanyaan.tombol);
          }
          else{
            div.after(pertanyaan.form);
            page.find('.next').remove();
            page.append(pertanyaan.tombol);
          }
        }
      })
    })
  </script>
</body>
</html>
