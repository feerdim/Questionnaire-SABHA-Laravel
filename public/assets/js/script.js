const nextButton = document.querySelector('.next-button')

const tl = gsap.timeline({defaults: {duration : 1, ease: "power2.out"}, paused: false})

tl.to('.hide-1', {y:"0%", opacity:"1", stagger : 0.3}, "+=1");
tl.to('.image-teteh-1', {y:"0%", opacity:"1",ease: "power4.out", onComplete : () => {
    tl.paused(true)
}}, "-=1");
tl.to('.hide-1', { y:"-100%", opacity:'0'});
tl.to('.image-teteh-1', {y:"50%", opacity:"0",ease: "power4.out"}, "-=1");

tl.to('.hide-2', {y:"0%", opacity:'1', stagger : 0.25, onComplete : () => {
    tl.paused(true)
}});
tl.to('.prolog', {background :'black', color: 'white'}, "-=2.5")
tl.to('.image-teteh-2', {y:"-10%", opacity:"1",ease: "power4.out"}, "-=1");
tl.to('.hide-2', {y:"-100%", opacity:'0'});
tl.to('.image-teteh-2', {y:"30%", opacity:"0",ease: "power4.out"}, "-=1");


tl.to('.image-teteh-3', {opacity: "1"}, "-=1")
tl.to(CSSRulePlugin.getRule(".image-prolog:after"), {cssRule: { opacity:"1"}}, "-=1")
tl.to('.prolog', {background: 'transparent', color:'black'}, '-=1')
tl.to('.hide-3', {y:"0%", opacity:"1", stagger : 0.3 , onComplete : () => {
    tl.paused(true)
}});

tl.to('.hide-3', {y:"-100%", opacity:"0", stagger : 0.3 });
tl.to('.image-teteh-3', {opacity: "0"})

tl.to('.prolog', {background :'black'}, '-=1')
tl.to('.container', {y:"-100%"})
tl.to('.nav-title', {y:"0%", stagger : 0.5}, "+=1")
tl.to('nav', {y:"-40%", x:"-40%"}, "+=1")
tl.to('.nav-outer', {scale: 0.5}, "-=1")
tl.to('form', {opacity:"1"})

nextButton.addEventListener('click', function(){
    tl.paused(false)
})

const answer = document.querySelectorAll('.answer')
answer.forEach((e,i) => {
    e.addEventListener('click', () => {
        e.classList.add('colored');
        for(let j=0 ; j < answer.length ; j++) {
            if(j == i){
                continue
            }
            if(answer[j].classList.contains('colored')){
                answer[j].classList.remove('colored')
            }
            }
        }
    )
})

