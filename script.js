new Vue ({
    el: "#root",
    data: {
        dataDisc: [

        ]
    },
    mounted(){
        axios.get("https://flynn.boolean.careers/exercises/api/array/music").then((resp) => {
            console.log(resp.data.response);
            this.dataDisc = resp.data.response;
            console.log(this.dataDisc);
        })
    }
})