$(document).ready(function(){
    //agregando clase active al primer enlace
    $('.category_list .category_item[category="all"]').addClass('ct_item-active');

    
    $('.category_item').click(function(){
        var catProduct = $(this).attr('category');
        console.log(catProduct);

        //agregando clase active al enlace seleccionado
        $('.category_item').removeClass('ct_item-active');
        $(this).addClass('ct_item-active');

        //ocultando productos
        $('.product').hide();
        
        //mostrando productos
        $('.product[category="'+catProduct+'"]').show();
    });

    $('.category_item[category="all"]').click(function(){
        $('.product').show();
    });
});