<template>

  <span
    class="badge"
    :class="claseEstadoVacante()"
    @click="cambiarEstado"
    :key="estadoVacanteData"
    style="cursor:pointer;"
  >
    {{ estadoVacante }}
  </span>
</template>

<script>
export default {
  props: ['estado', 'id'],
  mounted() {
    this.estadoVacanteData = Number(this.estado)
  },
  data: function () {
    return {
      estadoVacanteData: null
    }
  },
  methods: {
    claseEstadoVacante() {
      return this.estadoVacanteData === 1 ? 'badge-success' : 'badge-danger';
    },
    cambiarEstado() {
      if (this.estadoVacanteData === 1) {
        this.estadoVacanteData = 0;
      } else {
        this.estadoVacanteData = 1
      }

      const params = {
        estado: this.estadoVacanteData
      }
      axios.post('/vacantes/' + this.id, params)
        .then(respuesta => console.log(respuesta))
        .catch(err => console.log(err))
    }
  },
  computed: {
    estadoVacante() {
      return this.estadoVacanteData === 1 ? 'Activa ' : 'Inactiva';
    }
  }

}
</script>
