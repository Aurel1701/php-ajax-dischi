new Vue({
    el: '#app',
    data: {  
        discs: [],
    },
    created() {
        axios.get('http://localhost:8888/intro-PHP/php-ajax-dischi/Milestone-2/vue.html').then((response) => {
            this.discs = response.data;
        })
    }
});