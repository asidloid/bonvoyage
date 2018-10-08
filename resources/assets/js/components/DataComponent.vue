<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Laravel vue pagination <!-- ItSolutionStuff.com--></div>

                    <transition name = "fade"  mode="out-in" :duration="1000">

                        <span v-for="text in laravelText" v-bind:key="text.id" class="animblok"> {{ text.text }} </span>

                    </transition>


                    <div class="card-body">


                          <ul>
                            <li v-for="tag in laravelData.data" v-bind:key="tag.id">

                                <a href="#" v-on:click="num(tag.id)">{{ tag.name }} - {{ tag.text }}</a>
                            </li>

                          </ul>


                        <pagination :data="laravelData" @pagination-change-page="getResults"></pagination>

                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        },
        data() {
            return {
                laravelData: {},
                  // laravelText: {},
                laravelText: [{id:0, text:'по умолчанию'}],

            }
        },
        created() {
            this.getResults();

            // this.getStart();

        },
        methods: {
            num: function(id){
                console.log('nummmmmmmm ' + id);
                this.$http.get('/categoriesid/' + id)
                    .then(response => {
                        return response.json();
                    }).then(data => {
                    this.laravelText = data;

                    // console.log(this.laravelText);

                });
            },
            // getStart(){
            //
            //     if (typeof this.laravelText.text === 'undefined') {
            //         // console.log("start" + this.laravelText.text);
            //         // this.laravelText="[0:{id:'0', text:'88888888888'}]";
            //     }
            //
            // },

            getResults(page) {
                if (typeof page === 'undefined') {
                    page = 1;
                }

                this.$http.get('/categories?page=' + page)
                    .then(response => {
                        return response.json();
                    }).then(data => {
                        console.log(data);
                    this.laravelData = data;

                });
            }
        },
        watch: {
            laravelData() {
                console.log('Изменения laravelData')
            },
            laravelText() {
                console.log('Изменения')
            }
        }
    }
</script>