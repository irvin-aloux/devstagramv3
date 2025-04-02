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
});