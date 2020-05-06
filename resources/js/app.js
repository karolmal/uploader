require('./bootstrap');


$(".my-dropzone").dropzone({ url: "/file/post",
    complete: (file, response) => {
        console.log(response, file); //put data into hidden input in form using jquery

        console.log('complete');
    }
} );
