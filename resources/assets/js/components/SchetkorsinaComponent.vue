<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">




                    <div v-for="(dat,n) in dateblok">
                        <p>
                            <span class="blok">{{dat.num}} - {{dat.text}}</span>- <span type="number" v-model="summa">{{dat.cena}}</span>
                            <!--<button @click="remdatblok(n)">Remove</button>-->
                        </p>

                    </div>
                    Cумма - {{ summa }}
                    <!--</span>-->

                </div>


                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
               summa:0,
                dateblok:[],
                addDates:[],
            }
        },
        mounted() {

            if(localStorage.getItem('dateblok')) {
                try {
                    this.dateblok = JSON.parse(localStorage.getItem('dateblok'));
                } catch(e) {
                    localStorage.removeItem('dateblok');
                }
            }
        },
        methods: {
            addDate:function(){

   console.log("========" + this.addDates.num+ " === " +  this.addDates.text+ " === " +  this.addDates.cena)
    this.dateblok.push({num: this.addDates.num, text:this.addDates.text, cena:this.addDates.cena});

                let parsed = JSON.stringify(this.dateblok);

                localStorage.setItem('dateblok', parsed);
            },


            remdatblok:function(x) {
                this.dateblok.splice(x,1);
               let parsed = JSON.stringify(this.dateblok);
                localStorage.setItem('dateblok', parsed);
            },
        }

    }
</script>