<template>
  <button
    class="btn btn-sm btn-danger mr-2"
    @click="eliminarVacante"
  >
  <i class="fas fa-trash-alt"></i>
  Eliminar
  </button>
</template>
<script>
export default {
  http: {
    root: '/root',
    headers: {
      'X-CSRF-TOKEN': document.querySelector('#token').getAttribute('value')
    }
  },
  props: ['id'],
  methods: {
    eliminarVacante() {
      this.$swal.fire({
        title: '¿Deseas eliminar esta vacante?',
        text: "¡Una vez eliminada no se puede recuperar!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: '¡Si!',
        cancelButtonText: '¡No!'
      }).then((result) => {
        if (result.value) {

          const params = {
            id: this.id,
            _method: 'delete',
          };
          axios.post(`/vacantes/destroy/${this.id}`, params)
            .then(respuesta => {
              this.$swal.fire(
                '¡Vacante Eliminada!',
                respuesta.data.mensaje,
                'success'
              );

              this.$el.parentNode.parentNode.parentNode.removeChild(this.$el.parentNode.parentNode);

            })
            .catch(err => {
              console.log(err);
            })
        }
      })
    }
  }
}
</script>
