<template>
  <div>
    <ul class="flex flex-wrap justify-center">
      <li
        class="border border-gray-500 px-10 py-3 mb-3 rounded mr-4"
        :class="verificarclaseActiva(skill)"
        v-for="(skill, i) in this.skills"
        v-bind:key="i"
        @click="activar($event)"
      >{{skill}}</li>
    </ul>
    <input
      type="hidden"
      name="skills"
      id="skills"
    >
  </div>
</template>

<script>
export default {
  props: ['skills', 'oldskills'],
  created: function () {
    if (this.oldskills) {
      const skillsArray = this.oldskills.split(',');
      skillsArray.forEach(element => this.habilidades.add(element));
    }
  },
  mounted: function () {
    document.querySelector('#skills').value = this.oldskills;
  },
  data: function () {
    return {
      habilidades: new Set()
    }
  },
  methods: {
    activar(e) {
      if (e.target.classList.contains('bg-teal-500')) {
        e.target.classList.remove('bg-teal-500');
        e.target.classList.remove('text-white');
        this.habilidades.delete(e.target.textContent);
      } else {
        e.target.classList.add('bg-teal-500');
        e.target.classList.add('text-white');
        this.habilidades.add(e.target.textContent);
      }

      const string_habilidades = [...this.habilidades];
      document.querySelector('#skills').value = string_habilidades;

    },
    verificarclaseActiva(skill) {
      return this.habilidades.has(skill) ? 'bg-teal-500 text-white' : '';
    }
  }
}
</script>