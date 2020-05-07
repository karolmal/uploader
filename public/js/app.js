

    Dropzone.autoDiscover = false;
console.log('here we are');
$(document).ready(function () {
$(".my-dropzone").dropzone({
        url: '/test/1',
        autoProcessQueue: false,
        init: function(){
            console.log('Dropzone Initialized...');
        this.on("complete", function (file) {
            console.log('Dropzone Initialized... success');
            if (this.getUploadingFiles().length === 0 && this.getQueuedFiles().length === 0) {
                document.getElementById('submitForm').disabled = false;
                document.getElementById('submitForm').textContent = 'Submit';
            }
        });
        this.on("addedfile", function (file) {
            console.log('Dropzone Initialized... added');
            if (this.getUploadingFiles().length === 0 && this.getQueuedFiles().length === 0) {
                document.getElementById('submitForm').disabled = true;
                document.getElementById('submitForm').textContent = 'Please Wait For Upload';
            }
        });
    },
});
});
