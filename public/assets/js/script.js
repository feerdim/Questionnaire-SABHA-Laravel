const nextButton = document.querySelector('.next-button')
const cur = document.querySelector('.cursor')
const follow = document.querySelector('.follower')

gsap.set('.cursor',{xPercent: -50, yPercent: -50});
gsap.set('.follower',{xPercent: -50, yPercent: -50});

window.addEventListener('mousemove', e => {
    gsap.to('.cursor', 0.2, {x:e.pageX, y:e.pageY})
    gsap.to('.follower', 0.9, {x:e.pageX, y:e.pageY})
})

const tl = gsap.timeline({defaults: {duration : 1, ease: "power2.out"}, paused: false})

        tl.to('.hide-1', {y:"0%", opacity:"1", stagger : 0.3}, "+=1");
        tl.from('.next-button', {opacity : "0"});
        if(window.innerWidth <= 900) {
            tl.to('.image-teteh-1', {y:"0%", opacity:"0.4",ease: "power4.out", onComplete : () => {
                tl.paused(true)
            }}, "-=1");
        } else {
            tl.to('.image-teteh-1', {y:"0%", opacity:"1",ease: "power4.out", onComplete : () => {
            tl.paused(true)
            }}, "-=1");
        }
        
        tl.to('.hide-1', { y:"-100%", opacity:'0'});
        tl.to('.image-teteh-1', {y:"50%", opacity:"0",ease: "power4.out"}, "-=1");
        tl.to('.next-button', {opacity : "0"}, '-=1');


        tl.to('.hide-2', {y:"0%", opacity:'1', stagger : 0.25, onComplete : () => {
            tl.paused(true)
        }});
        tl.to('.prolog', {background :'black', color: 'white'}, "-=2.5")
        if(window.innerWidth <= 900) {
            tl.to('.image-teteh-2', {y:"0%", opacity:"0.4",ease: "power4.out"}, "-=1");
        } else {
            tl.to('.image-teteh-2', {y:"0%", opacity:"1",ease: "power4.out"}, "-=1");
        }
        
        tl.to('.next-button', {opacity : "1"}, '-=1');
        tl.to('.hide-2', {y:"-100%", opacity:'0'});
        tl.to('.image-teteh-2', {y:"30%", opacity:"0",ease: "power4.out"}, "-=1");
        tl.to('.next-button', {opacity : "0"}, '-=1');
        

        tl.to('.image-teteh-3', {opacity: "1"}, "-=1")
        tl.to(CSSRulePlugin.getRule(".image-prolog:after"), {cssRule: { opacity:"1"}}, "-=1")
        tl.to('.prolog', {background: 'transparent', color:'black'}, '-=1')
        tl.to('.next-button', {opacity : ".5"}, "-=1");
        tl.to('.hide-3', {y:"0%", opacity:"1", stagger : 0.3 , onComplete : () => {
            tl.paused(true)
        }});
        
        tl.to('.hide-3', {y:"-100%", opacity:"0", stagger : 0.3 });
        tl.to('.image-teteh-3', {opacity: "0"})
        tl.to('.next-button', {opacity : "0"}, '-=1');

        tl.to('.prolog', {background :'black'}, '-=1')
        tl.to('.prolog', {display : "none", })
        tl.from('.container', {display : "none"});
        tl.from('.container', {opacity :"0"})
        tl.to('.nav-title', {y:"0%", stagger : 0.5});
        tl.from('nav', {y:"-50%", x:"-50%", top:"50vh", left:"50vw"})
        tl.from('form', {opacity : "0"})
        // tl.to('.container',{display : "block"}, '-=1')
        // tl.to('.container', {y:"-100%", duration: 0}, '+=.5')
        // tl.to('.nav-title', {y:"0%", stagger : 0.5}, "+=1")
        // tl.to('nav', {y:"-40%", x:"-40%"}, "+=1")
        // tl.to('.container', {x:"0%"},'-=2')
        // tl.to('.nav-outer', {scale: 0.5}, "-=1")
        // tl.to('form', {opacity:"1"})
        // tl.to('.prolog', {display : "none"})
        

    nextButton.addEventListener('click', function(){
        tl.paused(false)
    })