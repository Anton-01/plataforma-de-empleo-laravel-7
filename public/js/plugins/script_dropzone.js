Dropzone.autoDiscover = false;
document.addEventListener('DOMContentLoaded', () => {
    const dropzoneDevJobs = new Dropzone('#dropzone-devjob', {
        url: '/vacantes/imagen',
        dictDefaultMessage: 'Sube aquí tus archivos',
        acceptedFiles: '.png,.jpg,.jpeg,.gif,.bmp',
        addRemoveLinks: true,
        dictRemoveFile: 'Borrar archivo',
        maxFiles: 1,
        headers: {
            'X-CSRF-TOKEN': document.querySelector('meta[name=csrf-token]').content
        },
        init: function () {
            if (document.querySelector('#imagen_devjob').value.trim()) {
                let imagenPublicada = {};
                imagenPublicada.size = 1234;
                imagenPublicada.name = document.querySelector('#imagen_devjob').value;

                this.options.addedfile.call(this, imagenPublicada);
                this.options.thumbnail.call(this, imagenPublicada, `/storage/vacantes/${imagenPublicada.name}`);

                imagenPublicada.previewElement.classList.add('dz-success');
                imagenPublicada.previewElement.classList.add('dz-complete');
            }
        },
        success: function (file, response) {
            //console.log(response);
            document.querySelector('#error-dropzone-jobs').textContent = '';
            document.querySelector('#imagen_devjob').value = response.imagen;
            file.nombreServidor = response.imagen;
        },
        maxfilesexceeded: function (file) {
            if (this.files[1] != null) {
                this.removeFile(this.files[0]);
                file.previewElement.parentNode.removeChild(file.previewElement);
                this.addFile(file)
            }
        },
        removedfile: function (file, response) {
            file.previewElement.parentNode.removeChild(file.previewElement);
            params = {
                imagen: file.nombreServidor || document.querySelector('#imagen_devjob').value
            }
            axios.post('/vacantes/borrar-imagen', params)
                .then(respuesta => console.log(respuesta))
        }
    });

});
