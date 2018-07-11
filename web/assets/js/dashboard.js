$(document).ready(function(){


    // Toggle plus minus icon on show hide of collapse element
    $(".collapse").on('show.bs.collapse', function(){
        $(this).parent().find(".glyphicon").removeClass("glyphicon-plus").addClass("glyphicon-minus");
    }).on('hide.bs.collapse', function(){
        $(this).parent().find(".glyphicon").removeClass("glyphicon-minus").addClass("glyphicon-plus");
    });

    /*

    $('.add-one-step').click(function(){

        $('.dynamic-element').first().clone().appendTo('.dynamic-stuff').show();
        attach_delete();

        alert('lol');
    });
    */





    //Etape






















});


