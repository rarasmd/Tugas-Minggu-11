$(document).ready(function () {
    $("#btn-search").click(function () {
        $.ajax({
            url: baseurl + "Data_transaksi/data/pencarian",
            type: 'POST',
            data: { katakunci: $("#keyword").val() },
            dataType: "json",
            beforeSend: function (e) {
                if (e && e.overrideMimeType) {
                    e.overrideMimeType("application/json;charset=UTF-8");
                }
            },
            success: function (response) {
                $("#cek-hasil").show();
                $("#hasil").html(response.hasil);

            },
            error: function (xhr, ajaxOptions, thrownError) {
                alert(xhr.responseText);
            }
        });
    });
});

