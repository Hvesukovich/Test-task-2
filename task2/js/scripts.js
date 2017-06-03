$(document).ready(function() {
    console.log('rkfberlgnreunrgp;renug;regeg');
    var arr_list_category,
        list_category = document.getElementById('list-category'),
        alert_danger = document.getElementById('alert-danger');

//  Modal window "Category editing"
    
    $("select[name = 'act']").bind("change", function()
    {
        if ($(".act")[0].selectedIndex == 0){
            list_category.classList.remove('list-category-true');
            list_category.classList.add('list-category-false');
            $('.btn-save-category').val('Создать категорию');

            clear_modal_category();

        }
        else if ($(".act")[0].selectedIndex == 1){
            clear_modal_category();
            list_category.classList.remove('list-category-false');
            list_category.classList.add('list-category-true');
            $('.btn-save-category').val('Сохранить изменения');

            $("select[name = 'list-category']").empty();
            if(arr_list_category){
                building_list_category();
            }
            else {
                $.get("list-category.php",
                    function(data)
                    {
                        console.log(data);
                        arr_list_category = data;
                        building_list_category();
                    } , 'json');
            }
        }

    });

    $("#close-modal-category").click(function () {
        $(".act")[0].selectedIndex = 0;
        list_category.classList.remove('list-category-true');
        list_category.classList.add('list-category-false');
        $('.btn-save-category').val('Создать категорию');
        clear_modal_category();
    });

    function clear_modal_category() {
        $('.name-category').val('');
        alert_danger.classList.add('alert-danger-false');
        alert_danger.classList.remove('alert-danger-true');
    }

    $("select[name = 'list-category']").bind("change", function()
    {
        // console.log();
        $('.name-category').val($(".list-category")[0].value);
    });

    $("#btn-save-category").click(function () {
        var name_category = document.getElementById("name-category").value;
        if(name_category != ''){
            if(document.getElementById("btn-save-category").value == 'Создать категорию'){

                $.post('create_category.php', {name_category: name_category},function(data) {
                        if (data != 0){
                            $('#category').modal('toggle');
                            var q = data;
                            console.log(q);
                            console.log('Длинна массива q равна: ' + q.length);
                            console.log(q[0].id);
                            console.log(q[0].name);


                        }
                        else{
                            console.log('ошибка');
                        }
                    }, 'json'
                );

                
            }else {
                alert("Не будем создавать категорию" + document.getElementById("btn-save-category").value);
            }
        }else {
            alert_danger.classList.add('alert-danger-true');
            alert_danger.classList.remove('alert-danger-false');
        }
    });

//  END Modal window "Category editing"

    
});

function building_list_category() {
    var id = 0;
    for(var value in arr_list_category){
        $("select[name = 'list-category']").append($("<option value='" + arr_list_category[id].name + "'>" + arr_list_category[id].name + "</option>"));
        id++;
    }
    $('.name-category').val(arr_list_category[0].name);
}