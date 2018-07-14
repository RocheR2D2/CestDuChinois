$(document).ready(function(){
    $('span[rel=popover]').popover({
        html: true,
        trigger: 'hover',
        placement: 'right',
        content: function(){return '<img width="120" height="120" src="'+$(this).data('img') + '" />';}
    });
});

