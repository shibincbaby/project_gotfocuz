$('body').on('change', '#district_select', function () {

    $index = $('#district_select').val();
//alert($index);

//alert($index);
    $.ajax({
        type: 'post',
        url: '../ajax/data_get.php',
        data: {index: $index},
        success: function (response)

        {

            console.log(response);
            $ar = response.split(",");
            $str = '<option value="-1" selected disabled hidden ></option>';

            if (response.trim() != "")
            {
                $ar = response.split(",");

                for (var i = 0; i < $ar.length; i++)
                {
                    $ar1 = $ar[i].split(":");
                    $str += '<option value="' + $ar1[0] + '">' + $ar1[1] + "</option>";
                }

                $('#place_error').html("");
                $('#place_error').addClass("hide_error");
            } else {
                $('#place_error').html("*Select a valid place");
                $('#place_error').removeClass("hide_error");
            }


            $('#place_select').html($str);

        }
    });
});


/*
$('body').on('change', '#state_select', function () {

    $selected_state = $('#state_select').val();



    $.ajax({
        type: 'post',
        url: 'data_get.php',
        data: {index1: $selected_state},
        success: function (response)

        {

            console.log(response);
            $ar = response.split(",");
            $str = '<option value="-1" selected disabled hidden ></option>';

            if (response.trim() != "")
            {
                $ar = response.split(",");


                for (var i = 0; i < $ar.length; i++)
                {
                    $ar1 = $ar[i].split(":");
                    $str += '<option value="' + $ar1[0] + '">' + $ar1[1] + "</option>";
                }

             $('#place_error').html("");
                $('#place_error').addClass("hide_error");
            } else {
                $('#place_error').html("*Select a valid place");
                $('#place_error').removeClass("hide_error");
            }


            $('#district_select').html($str);

        }
    });
});





$('body').on('change', '#district_select', function () {

    $selected_district = $('#district_select').val();



    $.ajax({
        type: 'post',
        url: 'data_get.php',
        data: {index2: $selected_district},
        success: function (response)

        {

            console.log(response);
            $ar = response.split(",");
            $str = '<option value="-1" selected disabled hidden ></option>';

            if (response.trim() != "")
            {
                $ar = response.split(",");


                for (var i = 0; i < $ar.length; i++)
                {
                    $ar1 = $ar[i].split(":");
                    $str += '<option value="' + $ar1[0] + '">' + $ar1[1] + "</option>";
                }

             $('#place_error').html("");
                $('#place_error').addClass("hide_error");
            } else {
                $('#place_error').html("*Select a valid place");
                $('#place_error').removeClass("hide_error");
            }

            $('#place_select').html($str);

        }
    });
});


*/





$('body').on('change', '#place_select', function () {

    $selected_place = $('#place_select').val();
	//alert($selected_place);
	

    $.ajax({
        type: 'post',
        url: 'data_get.php',
        data: {index3: $selected_place},
        success: function (response)

        {

            console.log(response);
            $ar = response.split(",");
            $str = '<option value="-1" selected disabled hidden ></option>';

            if (response.trim() != "")
            {
                $ar = response.split(",");

                for (var i = 0; i < $ar.length; i++)
                {
                    $ar1 = $ar[i].split(":");
                    $str += '<option value="' + $ar1[0] + '">' + $ar1[1] + "</option>";
                }

             $('#place_error').html("");
                $('#place_error').addClass("hide_error");
            } else {
                $('#place_error').html("*Select a valid place");
                $('#place_error').removeClass("hide_error");
            }

            $('#find').html($str);

        }
    });
});

$('body').on('click', '#signup', function () {
    $district = $('#district_select').val();
    $city = $('#place_select').val();
alert($district);

    $.ajax({
        type: 'post',
        url: '../studio_signup.php',
        data: {district: $district,
        city: $city},
        success: function (response)

        {
            
            $('#find_studio').html(response);
        }
    });

});

