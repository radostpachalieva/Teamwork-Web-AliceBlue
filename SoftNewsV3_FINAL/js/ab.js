            var showChar = 256;
            var ellipsestext = "...";
            var moretext = "Покажи";
            var lesstext = "Скрий";
            $('.comments-space').each(function() {
                var content = $(this).html();
                if (content.length > showChar) {
                    var show_content = content.substr(0, showChar);
                    var hide_content = content.substr(showChar, content.length - showChar);
                    var html = show_content + '<span class="moreelipses">' + ellipsestext + '</span><span class="remaining-content"><span>' + hide_content + '</span>&nbsp;&nbsp;<a href="" class="morelink">' + moretext + '</a></span>';
                    $(this).html(html);
                }
            });

            $(".morelink").click(function() {
                if ($(this).hasClass("less")) {
                    $(this).removeClass("less");
                    $(this).html(moretext);
                } else {
                    $(this).addClass("less");
                    $(this).html(lesstext);
                }
                $(this).parent().prev().toggle();
                $(this).prev().toggle();
                return false;
            });


            function showHide(shID) {
                if (document.getElementById(shID)) {
                    if (document.getElementById(shID + '-show').style.display != 'none') {
                        document.getElementById(shID + '-show').style.display = 'none';
                        document.getElementById(shID).style.display = 'block';
                    }
                    else {
                        document.getElementById(shID + '-show').style.display = 'inline';
                        document.getElementById(shID).style.display = 'none';
                    }
                }
            }


        $('a[href=#top]').click(function(){
            $('html, body').animate({scrollTop:0}, 'slow');
                });


			$(function() {
			  $('a[href*=#]:not([href=#])').click(function() {
			    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
			      var target = $(this.hash);
			      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
			      if (target.length) {
			        $('html,body').animate({
			          scrollTop: target.offset().top
			        }, 1000);
			        return false;
			      }
			    }
			  });
			});


        $("#menu-toggle").click(function(e) {
            e.preventDefault();
                $("#sidewrapper").toggleClass("toggled");
                    });


        $(window).scroll(function(){
            $("#theFixed").css("top",Math.max(0,150-$(this).scrollTop()));
                });


        $(function() {
    	$('nav-wrapper').height($("nav").height());
		$('nav').affix({
        offset: { top: $('nav').offset().top }
    		});
		});
