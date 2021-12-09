$(document).ready(function() {
    $(".tRegistro").hide();
    
    function showPopup() {
        $('.pop-up').addClass('show');
        $('.pop-up-wrap').addClass('show');
    }

    $("#closepop").click(function(){
        $('.pop-up').removeClass('show');
        $('.pop-up-wrap').removeClass('show');
        $(".tRegistro").hide();
        $(".tlogin").show();
    });

    $("#btnRegistro").click(function () { 
        $(".tlogin").hide();
        $(".tRegistro").show();
        return false;
    });

    $(".btlogin").click(showPopup);
});

