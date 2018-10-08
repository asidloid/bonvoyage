<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Bloki vue </div>

                    <div v-for="(blok,n) in nameblok">
                        <p>
                            <span class="blok">{{blok}}</span> <button @click="removeblok(n)">Remove</button>
                        </p>
                    </div>


                    <input v-model="nevBlok">
                    <button v-on:click="addblok">Add addBlok</button>
                    <!--<button @click="removeCat(n)">Remove</button>-->

                    <!--<span v-for="date in dateblok" v-bind:key="date.num">-->

                       номер - <input v-model="addDates.num">
                       текст -  <input v-model="addDates.text">

                       <button v-on:click="addDate">addDate</button>

                    <div v-for="(dat,n) in dateblok">
                        <p>
                            <span class="blok">{{dat.num}} - {{dat.text}}</span>
                            <button @click="remdatblok(n)">Remove</button>
                        </p>
                    </div>

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
                nameblok:[],
                nevBlok:null,
                dateblok:[{num: 0, text:'по умолчанию'}],
                addDates:[],
            }
        },
        mounted() {

            if(localStorage.getItem('nameblok')) {
                try {
                    this.nameblok = JSON.parse(localStorage.getItem('nameblok'));
                } catch(e) {
                    localStorage.removeItem('nameblok');
                }
            }
        },
        methods: {
            addDate:function(){

                  console.log("========" + this.addDates.num+ " === " +  this.addDates.text)
                this.dateblok.push({num: this.addDates.num, text:this.addDates.text});
                //this.dateblok.push(this.addDate);
                // console.log(JSON.stringify(this.addDates))
                localStorage.setItem('name', this.dateblok);
            },
            addblok:function(){
       // console.log("77777777777777777777777777 " + this.nevBlok)
                if(!this.nevBlok) return;
                this.nameblok.push(this.nevBlok);
                this.nevBlok = '';
                this.saveBlok();
            },
            saveBlok:function() {
                let parsed = JSON.stringify(this.nameblok);
                console.log("77777777777777777777777777 " + this.nameblok)
                localStorage.setItem('nameblok', parsed);

            },
            removeblok:function(x) {
                this.nameblok.splice(x,1);
                this.saveBlok();
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