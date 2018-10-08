<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">



                       текст -  <input v-model="addDates.text">
                    cena -  <input v-model="addDates.cena">
                    кол - <input v-model="addDates.kol">

                       <button v-on:click="addDate">addDate</button>

                    <div v-for="(dat,n) in dateblok">
                        {{ deneg[n] = dat.cena * dat.kol}}
                        <p>
                            <span class="blok">объект - {{dat.text}}- cтоимость - {{dat.cena}} -  количество - <button @click="minuskol(n)"> - </button>  {{dat.kol}}  <button @click="addkol(n)"> + </button>

                                = <span>{{ dat.cena * dat.kol}}</span>

                            </span>
                            <button @click="remdatblok(n)">Remove</button>
                        </p>

                    </div>
                    Итого количество:  <span v-text="total"></span>
                    <!--Итого денег:  <span v-text="deneg"></span>-->
                    Итого денег:  <span v-text="schet"></span>
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
                deneg:[],
                dateblok:[],
                addDates:[],
                cart_items: [],
                test:[{num:1,kol: "1"}, {num:2}, {num:3}, {num:4}, {num:5}],
            }
        },
        computed: {
            schet: function() {

                console.log(parseInt(this.deneg[1]));

            },
            total: function() {
//-----------------------------
//                 for (let key in this.test) {
//                     //   console.log("key - " + salaries[key]);
//                     var object2 = this.test[key]
//                     for (let key2 in object2) {
//                         //console.log(object2[key2]);
//                         total += object2[key2];
//                     }
//                      console.log("total---" + total);
//                 }
 //-----------------------------
                var total=0;
                for (let key in this.dateblok) {

                    total += parseInt(this.dateblok[key].kol);
                }
                return total

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
            addkol:function(n){
                var star = parseInt(this.dateblok[n].kol);
                var now = parseInt(this.dateblok[n].kol) + 1;
             //   console.log("старое - " + star + " новое " + now);
                this.dateblok[n].kol = now;
                this.saveloc()
            },
            minuskol:function(n){
                var star = parseInt(this.dateblok[n].kol);
                var now = parseInt(this.dateblok[n].kol) - 1;
               // console.log("старое - " + star + " новое " + now);
                this.dateblok[n].kol = now;
                this.saveloc()
            },
            saveloc:function(){
                let parsed = JSON.stringify(this.dateblok);
                localStorage.setItem('dateblok', parsed);
                console.log("записали");
            },
            addDate:function(){

   console.log(" === " +  this.addDates.text+ " === " +  this.addDates.cena + "========" + this.addDates.kol)
    this.dateblok.push({text:this.addDates.text, cena:this.addDates.cena, kol: this.addDates.kol});

                let parsed = JSON.stringify(this.dateblok);

                localStorage.setItem('dateblok', parsed);
            },


            remdatblok:function(x) {
                this.dateblok.splice(x,1);
               let parsed = JSON.stringify(this.dateblok);
                localStorage.setItem('dateblok', parsed);
            },
        },
        watch:{



        }

    }
</script>