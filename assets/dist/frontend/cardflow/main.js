/*
 * jQuery File Upload Plugin JS Example 6.7
 * https://github.com/blueimp/jQuery-File-Upload
 *
 * Copyright 2010, Sebastian Tschan
 * https://blueimp.net
 *
 * Licensed under the MIT license:
 * http://www.opensource.org/licenses/MIT
 */

/*jslint nomen: true, unparam: true, regexp: true */
/*global $, window, document */

$(function () {
    'use strict';

    $.ajax({
        type: "POST",
        url: "newFlowImageUpload/getUploadSettings",
        data: null,
        contentType: "application/json; charset=utf-8",
        dataType: "json",
        error: function (jqXHR, textStatus) {
            //console.log("COOLCAT");
            //if error occured when getting the settings use the default config, Initialize the jQuery File Upload widget:
            //$('#fileupload').fileupload();
        },
        success: function (msg) {
            //var msg = JSON.parse(msg);
            console.log(msg);//alert(msg.IsS3DirectUpload);
            if (msg.d.IsS3DirectUpload) {
                //upload to s3 via cloud front, Initialize the jQuery File Upload widget:
                $('#fileupload').fileupload({
                    singleFileUploads: true,
                    xhrFields: { contentType: false },
                    paramName: 'file',
                    url: msg.d.Url
                });

                $('#fileupload').bind('fileuploadsubmit', function (e, data) {
                    var inputs = data.context.find(':input');
                    if (inputs.filter(function () {
                    return !this.value && $(this).prop('required');
                    }).first().focus().length) {
                        data.context.find('button').prop('disabled', false);
                        return false;
                        }
                    data.formData = inputs.serializeArray();
                });
            } else {
                //use direct upload to s3 via the server, Initialize the jQuery File Upload widget:
                $('#fileupload').fileupload();
            }
        }
    });
    
    // Enable iframe cross-domain access via redirect option:
    $('#fileupload').fileupload(
        'option',
        'redirect',
        window.location.href.replace(
            /\/[^\/]*$/,
            '/cors/result.html?%s'
        )
    );

    if (window.location.hostname === 'blueimp.github.com') {
        // Demo settings:
        $('#fileupload').fileupload('option', {
            url: '//jquery-file-upload.appspot.com/',
            maxFileSize: 5000000,
            acceptFileTypes: /(\.|\/)(gif|jpe?g|png)$/i,
            process: [
                {
                    action: 'load',
                    fileTypes: /^image\/(gif|jpeg|png)$/,
                    maxFileSize: 20000000 // 20MB
                },
                {
                    action: 'resize',
                    maxWidth: 1440,
                    maxHeight: 900
                },
                {
                    action: 'save'
                }
            ]
        });
        // Upload server status check for browsers with CORS support:
        if ($.support.cors) {
            $.ajax({
                url: '//jquery-file-upload.appspot.com/',
                type: 'HEAD'
            }).fail(function () {
                $('<span class="alert alert-error"/>')
                    .text('Upload server currently unavailable - ' +
                            new Date())
                    .appendTo('#fileupload');
            });
        }
    } else {
        // Load existing files:
        $('#fileupload').each(function () {
            var that = this;
            $.getJSON(this.action, function (result) {
                if (result && result.length) {
                    $(that).fileupload('option', 'done')
                        .call(that, null, {result: result});
                }
            });
        });
    }

});
