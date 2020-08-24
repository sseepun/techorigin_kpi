$(function(){ 'use strict';

    window.addEventListener('DOMContentLoaded', function(){

        var lazyloadImgs = document.querySelectorAll('.lazy-img'),
            lazyloadBgs = document.querySelectorAll('.lazy-bg'),
            lazyloadThrottleTimeout;
        
        function lazyload(){
            if(lazyloadThrottleTimeout){
                clearTimeout(lazyloadThrottleTimeout);
            }    
            lazyloadThrottleTimeout = setTimeout(function(){
                var scrollTop = window.pageYOffset;

                lazyloadImgs.forEach(function(img){
                    console.log(
                        img.offsetTop,
                        window.innerHeight + scrollTop
                    )
                    if(img.offsetTop < (window.innerHeight + scrollTop)){
                        img.src = img.dataset.src;
                        img.classList.remove('lazy-img');
                    }
                });
                lazyloadBgs.forEach(function(bg){
                    if(bg.offsetTop < (window.innerHeight + scrollTop)){
                        bg.style.backgroundImage = "url('" + bg.dataset.src + "')";
                        bg.classList.remove('lazy-bg');
                    }
                });

                if(lazyloadImgs.length==0 && lazyloadBgs.length==0){ 
                    document.removeEventListener('scroll', lazyload);
                    window.removeEventListener('resize', lazyload);
                    window.removeEventListener('orientationChange', lazyload);
                }
            }, 20);
        }

        lazyload();
        document.addEventListener('scroll', lazyload);
        window.addEventListener('resize', lazyload);
        window.addEventListener('orientationChange', lazyload);

    });
    
});
