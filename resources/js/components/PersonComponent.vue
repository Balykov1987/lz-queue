<template>
  <div>
      <div class="container">
          <div class="mb-3">
              <input type="text" class="form-control" v-model="name" id="name">
          </div>
          <div class="mb-3">
              <input type="text" class="form-control" v-model="surname" id="surname">
          </div>
          <div class="mb-3">
              <input @click.prevent="addPerson" type="submit" class="btn btn-primary" value="Добавить">
          </div>
      </div>

  </div>
</template>

<script>
export default {
    name: "PersonComponent",

    data() {
        return {
            name: null,
            surname: null,
        }
    },

    methods: {
        addPerson() {
            axios.post('/api/person', {name: this.name, surname: this.surname})
            .then( res => {
                this.name = null
                this.surname = null
                this.date = new Date().toLocaleString(),
                console.log(res);
            })
        }
    }
}
</script>

