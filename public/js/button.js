$('form :submit').on('click', function(event){

    var a = $(this);
    var form = $('form');
    var action = a.attr('id');

    form.attr('action', baseUrl + '/test/' + action);
    form.submit();
});