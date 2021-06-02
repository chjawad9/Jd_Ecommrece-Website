// scrol or navbar 
$(document).ready(function () {
    $(window).scroll(function () {

        $(window).scroll(function () {
            $('nav').toggleClass('scrolled', $(this).scrollTop() > 50);
        });
        if (this.scrollY > 500) {
            $('.scroll-up-btn').addClass("show");
        } else {
            $('.scroll-up-btn').removeClass("show");
        }
    })
    // slide-up script
    $('.scroll-up-btn').click(function () {
        $('html').animate({ scrollTop: 0 });
        // removing smooth scroll on slide-up button click
        $('html').css("scrollBehavior", "auto");
    });

    // toggale menu bar
    $('.scroll-up-btn').click(function () {
        $('html').animate({ scrollTop: 0 });
        // removing smooth scroll on slide-up button click
        $('html').css("scrollBehavior", "auto");
    });
    // toggale menu bar
    $('.menu-btn').click(function () {
        $('.navbarrr .menu').toggleClass("active");
        $('.menu-btn i').toggleClass("active");
    })

});
// typing styl

const texts = ["Nicke", "Polo","Nishat","Tommy"]
     let count = 0;
     let index = 0;
     let currenttext = "";
     let letter = "";
     (function type(){
        
        if(count === texts.length)
        {
            count = 0;
        }
        currenttext = texts[count];
        letter = currenttext.slice(0,++index);
        document.querySelector(".typing").textContent = letter;
        if(letter.length === currenttext.length)
        {
            count++;
            index = 0;
        }
        setTimeout(type,600);
     })();

// zoom file
$(document).ready(function () {
    $('.zoom').magnify();
});


// preloader
window.addEventListener("load", () => {
    const loader = document.getElementById("pre-loader");
    setTimeout(() => {
      loader.classList.add("hide");
    }, 2000);
  });

   // PopUp
const popup = document.querySelector(".popup");
const closePopup = document.querySelector(".popup-close");

closePopup.addEventListener("click", () => {
  popup.classList.remove("show");
});
window.addEventListener("load", () => {
    setTimeout(() => {
      popup.classList.add("show");
    }, 9000);
  });

  /*-----For Search Bar-----------------------------*/
  $(document).on('click', '.search', function () {
    $('.search-bar').addClass('search-bar-active')
});

$(document).on('click', '.search-cancel', function () {
    $('.search-bar').removeClass('search-bar-active')
});

// txt animation
AOS.init({
   
    // debounceDelay: 50,
    // throttleDelay: 99,


    offset: 300,
    duration: 1000,
    // easing: 'ease',
    // once: false,
    // mirror: false,
    // anchorPlacement: 'top-bottom'
});

// Searching Start using js
 function myFunction()
    {
        document.getElementById("myDropdown").classList.toggle("show");
    }
    function filtreFunction()
    {
        var input, filter , ul, li, a, i;
        input = document.getElementById("myInput");
        filter = input.value.toUpperCase();
        div = document.getElementById("myDropdown");
        a = div.getElementsByTagName("a");
        for(i=0; i<a.length; i++)
        {
            txtValue = a[i].textContent || a[i].innerText;
            if(txtValue.toUpperCase().indexOf(filter) > -1)
            {
                a[i].style.display = "";
            }
            else
            {
                a[i].style.display = "none";
            }
        }
    }
 
