Dropzone.autoDiscover = false;
console.log('here we are');
$(document).ready(function () {
$(".my-dropzone").dropzone({
        url: '/files/create',
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        autoProcessQueue: true,
        init: function(){
            console.log('Dropzone Initialized...');
        // this.on("complete", function (file, response) {
        //     //on complete if file variable is an int save into a hidden field on the form. 
        //     //on submit of form, send file_id. Your usercontroller can then associate that id with the new user you're creating
        //     console.log('Dropzone Initialized... success',response,  file);
        //     if (this.getUploadingFiles().length === 0 && this.getQueuedFiles().length === 0) {
        //         document.getElementById('submitForm').disabled = false;
        //         document.getElementById('submitForm').textContent = 'Submit';
        //     }
        // });
        this.on("success", function (file, response) {
            //on complete if file variable is an int save into a hidden field on the form. 
            //on submit of form, send file_id. Your usercontroller can then associate that id with the new user you're creating
            console.log('Dropzone Initialized... success',response,  file);
            if (this.getUploadingFiles().length === 0 && this.getQueuedFiles().length === 0) {
                document.getElementById('submitForm').disabled = false;
                document.getElementById('submitForm').textContent = 'Submit';
                $('#file_id').val(response);
            }
        });
        this.on("error", function (file, response, xhr) {
            console.log('Dropzone Initialized... error',file, response, xhr);
            
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
