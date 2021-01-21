<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questionnare</title>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
  </head>
  <body>
    <div class="prolog">
      <div class="prolog-outer">
          <div class="prolog-1">
              <!-- <h3 class="hide-outer">
                  <h1 class="hide-title">PROLOG</h1>
                  <span class="hide-1">Bentuk tubuh biasanya ditentukan sebagai langkah dalam belajar memilih pakaian yang cocok dengan pemakainya. Hampir semua wanita memiliki bagian tubuh bermasalah yang ingin mereka tutupi beserta fitur positif yang ingin ditonjolkan</span>
              </h3 > -->
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
              <h1 class="hide-outer hide-title">
                  <span class="hide-3">CARA MENGETAHUI UKURAN TUBUH</span>
              </h1>
              <h3 class="hide-outer">
                  <span class="hide-3">Perhatikan bagian tubuh mana yang membesar jika berat badan naik</span>
              </h3 >
              <h3 class="hide-outer">
                  <span class="hide-3">Tiap bentuk tubuh rentan terhadap penambahan berat badan di area tertentu, misalnya paha dan perut.</span>
              </h3 >
              <h3 class="hide-outer">
                  <span class="hide-3">Ini memberi gambaran seperti apa bentuk tubuh anda.</span>
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
    <form action="#">
          <div id="form0" class="form-inner">
            <div class="question">
              <h3>{{ $pertanyaan->pertanyaan }}</h3>
            </div>
            <div>
              <input id="jawaban[0]" type="hidden" name="jawaban[0]" value="">
              <button href="{{route('pertanyaan',[$pertanyaan->ya, 0])}}" id="0" class="answer answer-yes" answare="yes">yes</button>
              <button href="{{route('pertanyaan',[$pertanyaan->tidak, 0])}}" id="0" class="answer answer-no" answare="no">no</button>
            </div>
            <div class="page page0">
              {{-- <button id="back" class="back">back</button> --}}
              {{-- <button id="next" class="next">NEXT</button> --}}
            </div>
          </div>
        </form>
      </div>
    </div>

    <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content text-sm" id="modal-body">
  
          </div>
      </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.0/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.0/CSSRulePlugin.min.js"></script>
    <script src="{{ asset('assets/js/script.js') }}"></script>
        <script>
          const answer = document.querySelector('.answer')
          answer.forEach((e,i) => {
            addEventListener('click', () => {
              event.preventDefault();
              var me = $(this),
                  answare = me.attr('answare'),
                  url = me.attr('href'),
                  id = parseInt(me.attr('id')),
                  div = me.parents('#form'+id),
                  id2 = id+1,
                  value = $('#form'+id2),
                  page = $('.page'+id);
              if(answare==='yes'){
                document.getElementById('jawaban['+id+']').setAttribute('value','1');
              }
              else if(answare==='no'){
                document.getElementById('jawaban['+id+']').setAttribute('value','0');
              }
              $.ajax({
                url: url,
                type: 'GET',
                // data : {'id': id},
                dataType: 'json',
                success: function(pertanyaan){
                  console.log(value);
                  if(value.length){
                    value.nextAll().remove().end().remove();
                    page.empty();
                    div.after(pertanyaan.form);
                    page.append(pertanyaan.tombol);
                  }
                  else{
                    div.after(pertanyaan.form);
                    page.empty();
                    page.append(pertanyaan.tombol);
                  }
                }
              })
            )}
          )


      $('body').on('click', '.answare', function(){
        event.preventDefault();
        var me = $(this),
            answare = me.attr('answare'),
            url = me.attr('href'),
            id = parseInt(me.attr('id')),
            div = me.parents('#form'+id),
            id2 = id+1,
            value = $('#form'+id2),
            page = $('.page'+id);
        if(answare==='yes'){
          document.getElementById('jawaban['+id+']').setAttribute('value','1');
        }
        else if(answare==='no'){
          document.getElementById('jawaban['+id+']').setAttribute('value','0');
        }
        $.ajax({
          url: url,
          type: 'GET',
          // data : {'id': id},
          dataType: 'json',
          success: function(pertanyaan){
            console.log(value);
            if(value.length){
              value.nextAll().remove().end().remove();
              page.empty();
              div.after(pertanyaan.form);
              page.append(pertanyaan.tombol);
            }
            else{
              div.after(pertanyaan.form);
              page.empty();
              page.append(pertanyaan.tombol);
            }
          }
        })
      })

    </script>
    </body>
</html>
