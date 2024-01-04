//breakpointの設定
let pc = 1080;
let tabend = 1079;
let tab = 768;
let spend = 767;
let sp = 0;

jQuery(function () {
    //PC幅(1080px以降)の処理
    if (window.matchMedia('(min-width: '+pc+'px)').matches) {
        jQuery(window).on("load scroll resize", function () {
            
            /*--header内スライドショーfadein--*/
            jQuery('header').each(function () {
                let elemPos = jQuery(this).offset().top;
                let scroll = jQuery(window).scrollTop();
                let windowHeight = jQuery(window).height();
                if (scroll > elemPos - windowHeight + 500) {
                    setTimeout(function () {
                        jQuery("header").addClass('c2in');
                    }, 500);
                }
            })
            /*--ここまで--*/

            /*--content01をスライドイン--*/
            jQuery('#content01').each(function () {
                let elemPos = jQuery(this).offset().top;
                let scroll = jQuery(window).scrollTop();
                let windowHeight = jQuery(window).height();
                if (scroll > elemPos - windowHeight + 700) {
                    jQuery('#content01').addClass('c3sin');
                }
            })
            /*--ここまで--*/

            /*content2要素を時間差でfadein--*/
            jQuery('.fadein').each(function () {
                let elemPos = jQuery(this).offset().top;
                let scroll = jQuery(window).scrollTop();
                let windowHeight = jQuery(window).height();
                if (scroll > elemPos - windowHeight + 500) {
                    let c2list = jQuery("#content02 .c2fadein").length;
                    for (let i = 0; i <= c2list; i++) {
                        setTimeout(function () {
                            jQuery("#content02 .c2fadein").eq(i).addClass('c2in');
                        }, 500 * i);
                    }
                }
            })
            /*--ここまで--*/


            /*content03内のコンテンツはスライドインで表示--*/
            jQuery('#content03 .content').each(function () {
                let elemPos = jQuery(this).offset().top;
                let scroll = jQuery(window).scrollTop();
                let windowHeight = jQuery(window).height();
                if (scroll > elemPos - windowHeight + 500) {
                    jQuery('.content').addClass('c3sin');
                    setTimeout(function () {
                        jQuery('.content2').addClass('c3sin');
                    }, 1000);
                }
            })
            /*--ここまで--*/

            /*content04内のコンテンツはスライドインで表示--*/
            jQuery('#content04 .slideshow02').each(function () {
                let elemPos = jQuery(this).offset().top;
                let scroll = jQuery(window).scrollTop();
                let windowHeight = jQuery(window).height();
                if (scroll > elemPos - windowHeight + 750) {
                    jQuery('.slideshow02').addClass('c4sin');
                }
            })
            /*--ここまで--*/

            /*contact内のコンテンツはスライドインで表示--*/
            jQuery('#contact-in').each(function () {
                let elemPos = jQuery(this).offset().top;
                let scroll = jQuery(window).scrollTop();
                let windowHeight = jQuery(window).height();
                if (scroll > elemPos - windowHeight + 750) {
                    jQuery('#contact-in').addClass('c4sin');
                }
            })
            /*--ここまで--*/

            /*profileはスライドインで表示--*/
            jQuery('.profile-container').each(function () {
                let elemPos = jQuery(this).offset().top;
                let scroll = jQuery(window).scrollTop();
                let windowHeight = jQuery(window).height();
                if (scroll > elemPos - windowHeight + 500) {
                    jQuery('.profile-container').addClass('c4sin');
                }
            })
            /*--ここまで--*/

            jQuery("#slideshow").slick({
                autoplay: true,
                arrows: true,
                dots: true,
            })
            jQuery(".slideshow02").slick({
                autoplay: true,
                arrows: true,
                dots: true,
                slidesToShow: 4,
            });
        });
    } else if(window.matchMedia('(min-width: '+tab+'px) and (max-width: '+tabend+'px)').matches){
        jQuery(window).on("load scroll resize", function () {
            
            /*--header内スライドショーfadein--*/
            jQuery('header').each(function () {
                let elemPos = jQuery(this).offset().top;
                let scroll = jQuery(window).scrollTop();
                let windowHeight = jQuery(window).height();
                if (scroll > elemPos - windowHeight + 500) {
                    setTimeout(function () {
                        jQuery("header").addClass('c2in');
                    }, 500);
                }
            })
            /*--ここまで--*/

            /*--content01をスライドイン--*/
            jQuery('#content01').each(function () {
                let elemPos = jQuery(this).offset().top;
                let scroll = jQuery(window).scrollTop();
                let windowHeight = jQuery(window).height();
                if (scroll > elemPos - windowHeight + 700) {
                    jQuery('#content01').addClass('c3sin');
                }
            })
            /*--ここまで--*/

            /*content2要素を時間差でfadein--*/
            jQuery('.fadein').each(function () {
                let elemPos = jQuery(this).offset().top;
                let scroll = jQuery(window).scrollTop();
                let windowHeight = jQuery(window).height();
                if (scroll > elemPos - windowHeight + 500) {
                    let c2list = jQuery("#content02 .c2fadein").length;
                    for (let i = 0; i <= c2list; i++) {
                        setTimeout(function () {
                            jQuery("#content02 .c2fadein").eq(i).addClass('c2in');
                        }, 500 * i);
                    }
                }
            })
            /*--ここまで--*/


            /*content03内のコンテンツはスライドインで表示--*/
            jQuery('#content03 .content').each(function () {
                let elemPos = jQuery(this).offset().top;
                let scroll = jQuery(window).scrollTop();
                let windowHeight = jQuery(window).height();
                if (scroll > elemPos - windowHeight + 500) {
                    jQuery('.content').addClass('c3sin');
                    setTimeout(function () {
                        jQuery('.content2').addClass('c3sin');
                    }, 1000);
                }
            })
            /*--ここまで--*/

            /*content04内のコンテンツはスライドインで表示--*/
            jQuery('#content04 .slideshow02').each(function () {
                let elemPos = jQuery(this).offset().top;
                let scroll = jQuery(window).scrollTop();
                let windowHeight = jQuery(window).height();
                if (scroll > elemPos - windowHeight + 750) {
                    jQuery('.slideshow02').addClass('c4sin');
                }
            })
            /*--ここまで--*/

            /*contact内のコンテンツはスライドインで表示--*/
            jQuery('#contact-in').each(function () {
                let elemPos = jQuery(this).offset().top;
                let scroll = jQuery(window).scrollTop();
                let windowHeight = jQuery(window).height();
                if (scroll > elemPos - windowHeight + 750) {
                    jQuery('#contact-in').addClass('c4sin');
                }
            })
            /*--ここまで--*/

            /*profileはスライドインで表示--*/
            jQuery('.profile-container').each(function () {
                let elemPos = jQuery(this).offset().top;
                let scroll = jQuery(window).scrollTop();
                let windowHeight = jQuery(window).height();
                if (scroll > elemPos - windowHeight + 750) {
                    jQuery('.profile-container').addClass('c4sin');
                }
            })
            /*--ここまで--*/

            jQuery("#slideshow").slick({
                autoplay: true,
                arrows: true,
                dots: true,
            })
            jQuery(".slideshow02").slick({
                autoplay: true,
                arrows: true,
                dots: true,
                slidesToShow: 2,
                rows: 2,
            });
        });
    } else if(window.matchMedia('(min-wdth: '+sp+'px) and (max-width: '+spend+'px)')){
        jQuery(window).on("load scroll resize", function () {
            
            /*--header内スライドショーfadein--*/
            jQuery('header').each(function () {
                let elemPos = jQuery(this).offset().top;
                let scroll = jQuery(window).scrollTop();
                let windowHeight = jQuery(window).height();
                if (scroll > elemPos - windowHeight + 500) {
                    setTimeout(function () {
                        jQuery("header").addClass('c2in');
                    }, 500);
                }
            })
            /*--ここまで--*/

            /*--content01をスライドイン--*/
            jQuery('#content01').each(function () {
                let elemPos = jQuery(this).offset().top;
                let scroll = jQuery(window).scrollTop();
                let windowHeight = jQuery(window).height();
                if (scroll > elemPos - windowHeight + 700) {
                    jQuery('#content01').addClass('c3sin');
                }
            })
            /*--ここまで--*/

            /*content2要素を時間差でfadein--*/
            jQuery('.fadein').each(function () {
                let elemPos = jQuery(this).offset().top;
                let scroll = jQuery(window).scrollTop();
                let windowHeight = jQuery(window).height();
                if (scroll > elemPos - windowHeight + 500) {
                    let c2list = jQuery("#content02 .c2fadein").length;
                    for (let i = 0; i <= c2list; i++) {
                        setTimeout(function () {
                            jQuery("#content02 .c2fadein").eq(i).addClass('c2in');
                        }, 500 * i);
                    }
                }
            })
            /*--ここまで--*/


            /*content03内のコンテンツはスライドインで表示--*/
            jQuery('#content03 .content').each(function () {
                let elemPos = jQuery(this).offset().top;
                let scroll = jQuery(window).scrollTop();
                let windowHeight = jQuery(window).height();
                if (scroll > elemPos - windowHeight + 500) {
                    jQuery('.content').addClass('c3sin');
                    setTimeout(function () {
                        jQuery('.content2').addClass('c3sin');
                    }, 1000);
                }
            })
            /*--ここまで--*/

            /*content04内のコンテンツはスライドインで表示--*/
            jQuery('#content04 .slideshow02').each(function () {
                let elemPos = jQuery(this).offset().top;
                let scroll = jQuery(window).scrollTop();
                let windowHeight = jQuery(window).height();
                if (scroll > elemPos - windowHeight + 750) {
                    jQuery('.slideshow02').addClass('c4sin');
                }
            })
            /*--ここまで--*/

            /*contact内のコンテンツはスライドインで表示--*/
            jQuery('#contact-in').each(function () {
                let elemPos = jQuery(this).offset().top;
                let scroll = jQuery(window).scrollTop();
                let windowHeight = jQuery(window).height();
                if (scroll > elemPos - windowHeight + 750) {
                    jQuery('#contact-in').addClass('c4sin');
                }
            })
            /*--ここまで--*/

            /*profileはスライドインで表示--*/
            jQuery('.profile-container').each(function () {
                let elemPos = jQuery(this).offset().top;
                let scroll = jQuery(window).scrollTop();
                let windowHeight = jQuery(window).height();
                if (scroll > elemPos - windowHeight + 750) {
                    jQuery('.profile-container').addClass('c4sin');
                }
            })
            /*--ここまで--*/

            jQuery("#slideshow").slick({
                autoplay: true,
                arrows: true,
                dots: true,
            })
            jQuery(".slideshow02").slick({
                autoplay: true,
                arrows: true,
                dots: true,
                slidesToShow: 1,
                rows: 2,
            });
        });
    }
    //ソースコード実態参照
    var arr = {
        "&lt;" : /</g,
        "&gt;" : />/g,
        "&" : /&amp;/g,
        "&quot;" : /"/g,
        "&copy;" : /©/g,
        "&nbsp;" : / /g
      };

    jQuery('pre').each(function(i){
        let elm = jQuery(this);
        jQuery.each(arr,function(key,value){
            let txt = elm.eq(i).html();
            elm.eq(i).html(
                txt.replace(value,key)
                );
        });
    });
});