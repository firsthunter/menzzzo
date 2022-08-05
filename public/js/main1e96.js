$(function () {
    moment.locale('fr');

    $('#calendar label').each(function (e) {
        var d = moment($(this).text().trim());
        $(this).text(d.format('dddd, DD MMMM YYYY'));
    });

    $('#spinner-div').addClass('d-none');
    $('#dates-div').removeClass('d-none');

    $('.confirmdtate').click(function(e){
        var selected = $("#calendar input[type='radio']:checked").val();
        if (selected !== undefined){
            var day = moment(selected);
            selectedNewDay = selected;
            $('#day-confirm-msg').html('Voulez-vous confirmer la date du ' + day.format('DD/MM/YYYY') + ' pour le retrait de votre commande');
            $('.btn-primary').removeClass('d-none');
            $('.btn-success').addClass('d-none');

            $('#day-confirm').modal('show');

        }
    });

    $('.confirm-btn').click(function (e) {
        $.ajax({
            url: '/rdv/',
            method: 'post',
            data: {
                day: selectedNewDay,
                id: id,
                rdv: 1
            },
            dataType: 'json',
            success: function (data) {
                if (data.status == 'OK') {
                    $('#day-confirm-msg').html(data.msg);
                    $('.btn-primary').addClass('d-none');
                    $('.btn-success').removeClass('d-none');
                    location.reload();
                } else {
                    $('#day-confirm-msg').html(data.msg);
                }
            }
        });
    });

    $('.save-address').click(function (e) {
        $(this).addClass('btn-secondary spinner spinner-dark spinner-right');
        $(this).removeClass('btn-primary');
        var type = $(this).attr('id');
        var street = $('.'+type+' .street').val();
        var telephone = $('.'+type+' .telephone').val();
        var city = $('.'+type+' .city').val();
        var postcode = $('.'+type+' .postcode').val();
        var firstname = $('.'+type+' .firstname').val();
        var lastname = $('.'+type+' .lastname').val();
        $.ajax({
            url: siteUrl,
            method: 'post',
            data: {
                id: id,
                type: type,
                street: street,
                city: city,
                telephone: telephone,
                postcode: postcode,
                firstname: firstname,
                lastname: lastname
            },
            dataType: 'json',
            success: function (data) {
                if (data.status == 'OK') {
                    $('#'+type+'.save-address').removeClass('btn-secondary spinner spinner-dark spinner-right');
                    $('#'+type+'.save-address').addClass('btn-primary');
                    $('#alert-modal-address-'+type+' .alert-text').html(data.msg);
                    $('#alert-modal-address-'+type).addClass('alert alert-custom alert-light-primary');
                    setTimeout(function (){
                        location.reload();
                    }, 1000);
                } else {
                    $('#'+type+'.save-address').removeClass('btn-secondary spinner spinner-dark spinner-right');
                    $('#'+type+'.save-address').addClass('btn-primary');
                    $('#alert-modal-address-'+type+' .alert-text').html(data.msg);
                    $('#alert-modal-address-'+type).addClass('alert alert-custom alert-light-danger');
                }
            }
        });
    });


    $(document).on("click", ".see-more-steps", function() {
        var id = $(this).attr('id');
        $(this).addClass('hidden');
        $('#'+id+'.see-less-steps').removeClass('hidden');
        $('#collapseTwo7-'+id+' .timeline-item.hidden').each(function (e){
            $(this).addClass('show');
            $(this).removeClass('hidden');
        });
    });

    $(document).on("click", ".see-less-steps", function() {
        var id = $(this).attr('id');
        $(this).addClass('hidden');
        $('#'+id+'.see-more-steps').removeClass('hidden');
        $('#collapseTwo7-'+id+' .timeline-item.previous-step').each(function (e){
            $(this).addClass('hidden');
            $(this).removeClass('show');
        });
    });

    $(document).on("click", ".info-dispo", function() {
        var id = $(this).attr('id');
        if($('#collapseTwo7-'+id+' .timeline-item.previous-step').length){
            $('#collapseTwo7-'+id).find('.see-less-steps').removeClass('hidden');
        }
        $('#collapseTwo1'+id).removeClass('show');
    });

    $(":input.qty ").bind('keyup mouseup', function () {
            var value = $(this).val();
            var id = $(this).attr('data-product');
            $('#collapseTwo7-'+id).find('.qtytochange').html(value);
    });


        $("input.postcode").keyup(function(){
            var type = $(this).attr('data-type');
            var value = $(this).val();
            var oldvalue = $(this).attr('data-zip');
            if(value.substring(0, 2) !== oldvalue.substring(0, 2) ){
                $('.'+type+' .fv-plugins-message-container .postcode').html('vous ne pouvez pas changer le département');
                $("."+type+" input.postcode").val(oldvalue);
            }else {
                $('.'+type+' .fv-plugins-message-container .postcode').html('');
            }
        });

    $(".btn-confirmer-supprimer").click(function(){
        var saleProductId = $('.sale-product-id-to-remove').val();
        var $this = $(this);
        $this.addClass('btn-secondary spinner spinner-dark spinner-right');

        $.ajax({
            method: "POST",
            url: siteUrl,
            data: {
                cancelSale: 1,
                id: saleId,
                action: "product",
                idsp: saleProductId
            },
            dataType: 'json',
            success: function (data) {
                if (data.status == 'OK') {
                    $this.removeClass('btn-secondary spinner spinner-dark spinner-right');
                    $('#alert-modal-remove-product'+saleProductId+' .alert-text').html(data.msg);
                    $('#alert-modal-remove-product'+saleProductId).addClass('alert alert-custom alert-light-primary alert-success');
                     location.reload();
                } else {
                    $('#alert-modal-remove-product'+saleProductId+' .alert-text').html(data.msg);
                    $('#alert-modal-remove-product'+saleProductId).addClass('alert alert-custom alert-light-danger');
                     location.reload();

                }
            }
        })
    });

    $(document).on('click', '.delete-product-and-refund', function (){
       var spId = $(this).attr('data-sale-product-id');
       $('.sale-product-id-to-remove').val(spId);
       $('#SuppressionProductAndRefund'+spId).modal('show');
    });
});
