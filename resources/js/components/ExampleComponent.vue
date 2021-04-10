<template>
  <div id="app">
    <Header :app="this"></Header>

    <router-view></router-view>
    <Futter></Futter>
  </div>
</template>

<script>
import Header from "../components/nav.vue";
import Futter from "../components/futter.vue";
export default {
  name: "app",
  components: {
    Header,
    Futter,
  },
  data() {
    return {
      kk: null,
      card: null,
    };
  },


  methods: {
    auth() {
      axios.get(`/api/dd`).then(({ data }) => {
        // console.log(data);
        this.kk = data;
         this.$store.commit('SET_USER',data)
      });
    },
    cunt() {
      axios.get(`/api/card_count`).then(({ data }) => {
        // console.log(data)
        this.card = data;
      });
    },
    logout() {
      axios.post(`/logout`).then(({}) => {
        this.$router.push({ name: "home" });
         location.reload();
      });
    },
  },
       created() {
    message()
    {
        return this.$store.getters.getuser;
    }
},
  created() {
  	console.log('Component is created')
  },

  mounted() {


    this.cunt();
    this.auth();
  },
};
</script>

<style></style>
