
    $(document).on('submit','.js-blogs-form',function (event){
        event.preventDefault();
        updateStore($(this));
    });

    $(document).on('click','.js-blogs-delete',function (event){
        event.preventDefault();
        remove($(this).data('route'));
    });

    const validationLables = {
        'title': 'A title is required',
        'text': 'The text must be at least 10 characters',
    };

    function updateStore(form){
        var erros = false;
        form.serializeArray().forEach(function (element){
            if (element.name == 'title'){
                if (element.value == ''){
                    $('#title_error').html(validationLables.title);
                    erros = true;
                }
            }
            if (element.name == 'text'){
                if (element.value.length < 10){
                    $('#text_error').html(validationLables.text);
                    erros = true;
                }
            }
        });

        if (!erros){
            $('.error').hide();
            $.ajax({
                url:  form.attr('action'),
                method: form.attr('method'),
                dataType: 'json',
                data: form.serialize(),
                headers: {'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')},
            }).done( function (response){
                if (response.status)
                    window.history.back();
            }).error(function (){
                //do something
            });
        }
    }

    function remove(route){
        $.ajax({
            url:  route,
            method: 'delete',
            dataType: 'json',
            contentType: 'application/json; charset=utf-8',
            headers: {'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')},
        }).done( function (response){
            if (response.status)
                window.history.back();
        }).error(function (){
            //do something
        });
    }

