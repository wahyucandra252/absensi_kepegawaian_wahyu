
// ISI TANGGAPAN
function getUpdate(id) {
    var id = id;
    $.ajax({
        url: "pengaduan/tanggapan.php",
        type: "GET",
        data: { id: id, },
        success: function (ajaxData) {
            $("#tanggapan").html(ajaxData);
            $("#tanggapan").modal('show', { backdrop: 'true' });
        }
    });
}

$(document).ready(function () {
    /*$(".mapeledit").click(function (e){*/
    $("#dataTable").on("click", ".tanggapan", function () {
        var m = $(this).attr("id");
        $.ajax({
            url: "pengaduan/tanggapan.php",
            type: "GET",
            data: { id: m, },
            success: function (ajaxData) {
                $("#tanggapan").html(ajaxData);
                $("#tanggapan").modal('show', { backdrop: 'true' });
            }
        });
    });
});

function getUpdate(id) {
    var id = id;
    $.ajax({
        url: "pengaduan/lihat.php",
        type: "GET",
        data: { id: id, },
        success: function (ajaxData) {
            $("#lihat").html(ajaxData);
            $("#lihat").modal('show', { backdrop: 'true' });
        }
    });
}

$(document).ready(function () {
    /*$(".mapeledit").click(function (e){*/
    $("#dataTable").on("click", ".lihat", function () {
        var m = $(this).attr("id");
        $.ajax({
            url: "pengaduan/lihat.php",
            type: "GET",
            data: { id: m, },
            success: function (ajaxData) {
                $("#lihat").html(ajaxData);
                $("#lihat").modal('show', { backdrop: 'true' });
            }
        });
    });
});

function getUpdate(id) {
    var id = id;
    $.ajax({
        url: "pengaduan/rubah.php",
        type: "GET",
        data: { id: id, },
        success: function (ajaxData) {
            $("#rubah").html(ajaxData);
            $("#rubah").modal('show', { backdrop: 'true' });
        }
    });
}

$(document).ready(function () {
    /*$(".mapeledit").click(function (e){*/
    $("#dataTable").on("click", ".rubah", function () {
        var m = $(this).attr("id");
        $.ajax({
            url: "pengaduan/rubah.php",
            type: "GET",
            data: { id: m, },
            success: function (ajaxData) {
                $("#rubah").html(ajaxData);
                $("#rubah").modal('show', { backdrop: 'true' });
            }
        });
    });
});