    $(function() {
        if (!$.support.placeholder) {
            var active = document.activeElement;
            
            $(':text').focus(function() {
                if ($(this).attr('placeholder') != '' && $(this).val() == $(this).attr('placeholder')) {
                    $(this).val('').removeClass('hasPlaceholder');
                }
            }).blur(function() {
                if ($(this).attr('placeholder') != '' && ($(this).val() == '' || $(this).val() == $(this).attr('placeholder'))) {
                    $(this).val($(this).attr('placeholder')).addClass('hasPlaceholder');
                }
            });
            $(':text').blur();
            $(active).focus();
        }
    });
    
    $('.btnSubmit').live('click',function(){
        var email = $.trim($('#txtEmail').val());
        var comment = $.trim($('#txtComment').val());
        var rege    = /^([A-Za-z0-9_\-\.\+])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
        if(!rege.test(email)) {
            $('#txtEmail').focus();
            $('#txtEmail').addClass('error');
            return false;
        }else if(comment == '' || comment == 'Comments...') {
            $('#txtComment').focus();
            $('#txtComment').addClass('error');
            return false;
        }
        
        $.ajax({
            url: "send_mail.php",
            type: "POST",
            data: $('form').serialize(),
            success: function(data) {
                if(data == 'success') {
                    $('#message').addClass('success');
                    $('#message').text('Send mail is successful!');
                }else if(data == 'fail') {
                    $('#message').addClass('warn');
                    $('#message').text('Send mail is failed!');
                }
            }
        });
    })
    
    $('#txtEmail').keyup(function() {
        var email =  $.trim($(this).val()); 
        var rege    = /^([A-Za-z0-9_\-\.\+])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
        if(rege.test(email)) {
            $(this).removeClass('error');
        }
        
    });
    
    $('#txtComment').keyup(function() {
        var comment =  $.trim($(this).text()); 
        if(comment != '') {
            $(this).removeClass('error');
        }
    });    
    