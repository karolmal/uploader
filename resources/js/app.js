require('./bootstrap');


$(".my-dropzone").dropzone({ url: "/file/post",
    complete: (file, response) => {
        console.log(response, file); //put data into hidden input in form using jquery
         //On successful upload, add the file to the form - a hidden input for the filename after upload, and a corresponding hidden input with the original file name
                //This passes the uploaded files details along with the post when it is saved
                $('#form-id').append(
                    '<div id="' + response.name + '">' +
                        '<input type="hidden" name="file[]" value="' + response.name + '">' +
                        '<input type="hidden" name="file_original_name[]" value="' + response.original_name + '">' +
                    '</div>'
                );
                file.file_name = response.name;//set this so that removedFile function can find the element
            },
    }
 );
