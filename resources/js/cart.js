$(document).ready(function () {
    shoppingcart();
    $("#formqty").on('submit', function (e) {
        e.preventDefault();
        $.ajax({
            url: $("#formqty").attr('action'),
            type: 'POST',
            data: $("#formqty").serialize(),
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            dataType:'json',
            beforeSend:function(){},
            success:function(data){
                $("#notifcart").html(data);
            },
            error:function(xhr, status, error){},
            complete:function(){}
        });
    });

    $("body").on('click','.delete', function () {
        var selector = $(this);
        if (confirm('Yakin akan menghapus item ini dari keranjang belanja ??')) {
            $.ajax({
                url: selector.data('delete'),
                type: 'DELETE',
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                dataType:'json',
                beforeSend:function(){},
                success:function(data){
                    if (data == 'success') {
                        selector.closest('tr').remove();
                    }
                },
                error:function(xhr, status, error){},
                complete:function(){}
            });
        }
    });

    $("body").on('click','#checkout', function (e) {
        var selector = $(this);
        $.ajax({
            url: selector.data('url'),
            type: 'Get',
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            dataType:'json',
            beforeSend:function(){},
            success:function(data){
                if (data == 'success') {
                    location.href = selector.data('nextpage');
                }
            },
            error:function(xhr, status, error){},
            complete:function(){}
        });
    });
})

function shoppingcart() {
    $.ajax({
        url: $("#shopcart").data('url'),
        type: 'get',
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        dataType:'json',
        beforeSend:function(){},
        success:function(data){
            $("#notifcart").html(data);
        },
        error:function(xhr, status, error){},
        complete:function(){}
    });
}