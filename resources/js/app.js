import Dropzone from 'dropzone';

Dropzone.autoDiscover = false; // Por defecto va a buscar el elemento con la clase dropzone pero no lo queremos por eso lo desactivamos y solo lo inicializamos en el script con el id dropzone

const dropzone = new Dropzone('#dropzone', {
  dictDefaultMessage: 'Arrastra tus archivos o haz click aquí para subirlos',
  acceptedFiles: '.png, .jpg, .jpeg, .gif',
  addRemoveLinks: true,
  dictRemoveFile: 'Eliminar archivo',
  maxFiles: 1,
  uploadMultiple: false,
  maxFilesize: 3, // MB

  init: function () {
    if (document.querySelector('[name= "imagen"]').value.trim()) {
      const imagenPublicada = {}
      imagenPublicada.size = 1234;
      imagenPublicada.name = document.querySelector('[name= "imagen"]').value;

      this.options.addedfile.call(this, imagenPublicada);
      this.options.thumbnail.call(
        this,
        imagenPublicada,
        `/uploads/${imagenPublicada.name}`
      );

      imagenPublicada.previewElement.classList.add(
        'dz-success',
        'dz-complete');
    }
  }
});

dropzone.on('success', function (file, response) {
  document.querySelector('[name="imagen"]').value = response.imagen;
});

dropzone.on('removedfile', function(){
  document.querySelector('[name="imagen"]').value = '';
})


dropzone.on("removedfile", function () { });