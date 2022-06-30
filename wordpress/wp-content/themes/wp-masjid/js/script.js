jQuery.noConflict();
(function($) {
    $(function() {
        var timeout = 200;
        var closetimer = 0;
        var ddmenuitem = 0;
        $('#larr, #rarr').show();
        $('.slideshow').hover(function() {
            $('#larr, #rarr').show()
        }, function() {
            $('#larr, #rarr').show()
        });


        $('#pagination a').live('click', function(e) {
            e.preventDefault();
            $(this).addClass('loading').text('LOADING...');
            $.ajax({
                type: "GET",
                url: $(this).attr('href') + '#loop',
                dataType: "html",
                success: function(out) {
                    result = $(out).find('#loop .post');
                    nextlink = $(out).find('#pagination a').attr('href');
                    $('#loop').append(result.fadeIn(300));
                    $('#pagination a').removeClass('loading').text('LOAD MORE');
                    if (nextlink != undefined) {
                        $('#pagination a').attr('href', nextlink)
                    } else {
                        $('#pagination').remove()
                    }
                    if ($.cookie('mode') == 'grid') {
                        grid_update()
                    } else {
                        list_update()
                    }
                }
            })
        });
        $('#comment, #author, #email, #url').focusin(function() {
            $(this).parent().css('border-color', '#888')
        }).focusout(function() {
            $(this).parent().removeAttr('style')
        });
        $('.rpthumb:last, .comment:last').css('border-bottom', 'none')
    })
})(jQuery)