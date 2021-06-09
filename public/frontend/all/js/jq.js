
        // $(".header__nav-menu-wrap").mouseover(function(){
        //     $(".menu__nav").fadeIn();
        // });

        // $(".menu__nav").mouseleave(function(){
        //     $(".menu__nav").fadeOut();
        // });

        $(".header__nav-menu-wrap").click(function(){
            $(".menu__nav").toggle();
        });

        $(".modal__overlay").click(function(){
            $(".main__modal").hide();
        });

        $(".sale-off__close").click(function(){
            $(".main__modal").hide();
        });

        $(".product__panel-item").click(function(){
            $(location).attr('href','product.html');
        });

        // $(".product__main-img-list img").click(function(){
        //     $("product__main-img-primary img").attr('src','product.html');
        // });

        // $(".header__nav-menu-wrap").click(function(){
        //     $(".menu__nav").hide();
        // });


    
