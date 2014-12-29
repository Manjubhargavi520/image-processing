/* Author: Shekhar Joshi-trendin.com
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


$(document).ready(function (e) {
    $('#imageUploadForm').on('submit', (function (e) {
        e.preventDefault();
        var formData = new FormData(this);

        $.ajax({
            type: 'POST',
            url: $(this).attr('action'),
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
            success: function (data) {
                if (IsJsonString(data)) {
                    var image = JSON.parse(data);
                    $("#uploadedImage").html("<img src='" + image["imageSrc"] + "' width=510px/>");
                }
            },
            error: function (data) {
                console.log("error");
                console.log(data);
            }
        });
        return false;
    }));

    $("#ImageBrowse").on("change", function () {
        $("#imageUploadForm").submit();
    });
});


function IsJsonString(str) {
    try {
        JSON.parse(str);
    } catch (e) {
        return false;
    }
    return true;
}

