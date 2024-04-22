$(document).ready(function () {
    $.ajax({
        type: "get",
        url: "region_action.php",
        data: {"parent_id": "1", "type": "1"},
        dataType: "json",
        success: function (data) {
            $("#provinces").html("<option value=''>请选择省份</option>");
            $.each(data, function (i, item) {
                $("#provinces").append("<option value='" + item.region_id + "'>" + item.region_name + "</option>")
            })
        }
    })
})

$('#provinces').change(function () {
    $.ajax({
        type: "get",
        url: "region_action.php",
        data: {"parent_id": $(this).val(), "type": "2"},
        dataType: "json",
        success: function (data) {
            $("#citys").html("<option value=''>请选择城市</option>");
            $.each(data, function (i, item){
              $("#citys").append("<option value='" + item.region_id + "'>" + item.region_name + "</option>")
            })
        }
    })
})

$('#citys').change(function () {
    $.ajax({
        type: "get",
        url: "region_action.php",
        data: {"parent_id": $(this).val(), "type": 3},
        dataType: "json",
        success: function (data) {
            $("#countrys").html("<option value=''>请选择县</option>");
            $.each(data, function (i, item){
                $("#countrys").append("<option value='" + item.region_id + "'>" + item.region_name + "</option>")
            })
        }
    })
})

$('#countrys').change(function () {
    var address = $('#provinces').find('option:selected').text() +
        $('#citys').find('option:selected').text() +
        $('#countrys').find('option:selected').text()
    $('#region').append('你选择的地址是：' + '<input value="' + address + '">')
})