document.addEventListener('DOMContentLoaded', () => {
    const editor = new MediumEditor('.editable', {
        toolbar: {
            buttons: ['bold', 'italic', 'underline', 'justifyLeft', 'justifyCenter', 'justifyRight', 'justifyFull',
                'indent', 'anchor', 'h2', 'h3', 'quote',
                'justifyFull', 'orderedlist', 'unorderedlist', 'indent'
            ],
            static: true,
            align: 'center',
            sticky: true,
            placeholder: {
                text: 'Descripción de la vacante',
                hideOnClick: true
            }
        }
    });

    editor.subscribe('editableInput', function (eventObj, editable) {
        const contenido = editor.getContent();
        document.querySelector('#descripcion').value = contenido;
    });

    editor.setContent(document.querySelector('#descripcion').value);
});
