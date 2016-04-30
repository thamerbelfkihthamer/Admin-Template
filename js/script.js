$(function(){

    $('[data-toggle="tooltip"]').tooltip();

    $('form.del-form').submit(function(e){
        if(!confirm("Do you really want to delete this item?")){
            e.preventDefault();
        }
    });

});