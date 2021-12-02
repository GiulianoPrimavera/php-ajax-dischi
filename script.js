new Vue ({
    el: "#root",
    data: {
        dataDisc: [

        ]
    },
    mounted(){
        axios.get("http://localhost/esercizi/php-ajax-dischi/api/api.php").then((resp) => {
            console.log(resp);
            /* this.dataDisc = resp.listaDischi;
            console.log(this.dataDisc); */
        })
    }
})