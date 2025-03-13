function uploadFile(x) {
    
    //console.log(x.value);
    // uploader.files = [x.value];
    
    //initUploader();


}

function initUploader() {
    var uploader = new plupload.Uploader({
        browse_button : 'fileInput', // you can pass an id...
        url : 'https://www.alliedipfirm.com/service/ups.php',
        
        filters : {
            max_file_size : '20mb',
            mime_types: [
                { title: 'Image files', extensions: 'jpg,jpeg,gif,png,JPG,JPEG,GIF,PNG'},
                // {title : "Document files", extensions : "pdf,PDF"}
            ]
        },

        init: {
            PostInit: function() {
            },

            FilesAdded: function(up, files) {
                uploader.start();
            },

            UploadProgress: function(up, file) {
                // document.getElementById(file.id).getElementsByTagName('b')[0].innerHTML = '<span>' + file.percent + "%</span>";
                $('.progress').css('display','block');
                document.querySelector(".progress").innerHTML = '<div class="progress-bar" style="width: '+file.percent+'%;">'+file.percent+'%</div>';
            },
            
            FileUploaded: function(up, file, result) {
                var responseData = result.response.replace('"{', '{').replace('}"', '}');
                var objResponse = JSON.parse(responseData);

                var data =  objResponse.data.replace('..','https://www.alliedipfirm.com');

                $('.pictures-uploading').prepend('<div class="uploaded-image"><img src="'+data+'"/></div>');
                $('.progress').html('');
                $('.progress').css('display','none');
                // console.log(objResponse);
                // document.getElementById('statusResponse').innerHTML = '<p style="color:#198754;">' + objResponse.message + '</p>';
            },

            Error: function(up, err) {
                document.getElementById('statusResponse').innerHTML = '<p style="color:#EA4335;">Error #' + err.code + ': ' + err.message + '</p>';
            }
        }
    });

    // Initialize Plupload uploader
    uploader.init();

}