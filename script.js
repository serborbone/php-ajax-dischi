var app = new Vue({

  el: '#app',

  data: {

    albumsList: [],

  },

  mounted() {

      axios.get('http://localhost/php-ajax-dischi/server.php')
      .then((response) => {
        console.log(response);

        this.albumsList = response.data;
      })
      .catch(function (error) {

        console.log(error);
      })
      .then(function () {
      });

  }

})