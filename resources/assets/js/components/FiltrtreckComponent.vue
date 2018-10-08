<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">


                    <p><input type="text" v-model="search" /></p>

                    <!--<span v-for="trek in filteredItems ">-->

                    <!--<p >{{ trek.name }} - {{ trek.location.name }} - {{ trek.podtreck.name }} </p>-->
                    <!--</span>-->


                    <ul>
                        <li v-for="user in filteredUsers">
                            {{ user.name }}
                        </li>
                    </ul>


                    <hr>
                    <span v-for="datest in datatrec">

                        --- <a href="#" v-on:click="podtrekf(datest.name)">{{datest.name  }}</a>  --

                    </span>
                    <p>
                    <!--<span v-for="datest in user2">-->

                         <!-- -&#45;&#45; <a href="#" v-on:click="podtrekf(datest.podtreck.name)">{{datest.podtreck.name  }}</a>  &#45;&#45;-->

                    <!--</span>-->
                    <p>

                    <p><input type="text" v-model="search2" v-on:click="nserch()"/></p>

                    <!--var mas1=["111","222","333","444","111"];-->
                    <!--var mas2= [];-->
                    <!--var num = mas1.indexOf("333")-->
                    <!--if(num > 0)-->
                    <!--{-->
                    <!--mas2.push(mas1[num])-->
                    <!--}-->

                    <!--<span v-for="dates in filtermas">-->

                            <!--<p >{{ dates.name }} &#45;&#45; {{ dates.location.name }} &#45;&#45; &#45;&#45; {{ dates.podtreck.name }}  </p>-->

                     <!--</span>-->

                    <p>  {{ stranic }} </p>
                    <p>  {{ filterdate }} </p>

                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')

            //   for (var key in this.TreckDate) {

            //  }

        },
        data() {
            return {
                company: '',
                podtrekkey: '',
                masmenu: '',
                TreckDate:{},
                search: 'Вика',
                search2: '',
                stranic: 10,
                users: [
                    { name: 'Вика', age: 19 },
                    { name: 'Сережа', age: 45 },
                    { name: 'Коля', age: 33 }
                ],
                user2:[],
                datatrec:'',
            }
        },

        created() {
            this.$http.get('/filtr')
                .then(response => {
                    return response.json();
                }).then(data => {
                // console.log(data);
                //   this.TreckDate = data;
                this.user2 = data;
            });

            this.$http.get('/filtrtrek')
                .then(response => {
                    return response.json();
                }).then(datas => {
                 console.log("0000 -" + datas);
                this.datatrec = datas;
            });
        },
        methods: {
            podtrekf: function (trek) {
                //     console.log("----------------------" + trek);
                this.podtrekkey = trek;

                // console.log("--------===--" + this.podtrekkey);

            },
            nserch: function (){
                //  console.log("poisk");
                this.podtrekkey = 'null'
                //
            }

        },
        computed:{

            // filtermas: function() {
            //
            //     for(var mas in this.filterdate)
            //     {
            //         console.log("++++++++++++++" + this.filterdate[mas].podtreck.name);
            //     }
            //
            //         // console.log("==============" + this.filterdate);
            //
            //
            // },

            filteredUsers: function () {
                return this.users.filter(function (a) {
                    var ser = String(this.search).toLowerCase()
                    return String(a.name).toLowerCase().indexOf(ser) !== -1
                    // return a.name.toLowerCase().search(this.search) != -1
                }.bind(this))
            },
            filterdate: function () {
                //console.log("1--------===--" + this.podtrekkey);
                // var my = JSON.stringify(this.TreckDate, 0, 4);
                if(this.podtrekkey && this.podtrekkey !== 'null')
                {
                    console.log("2--------===--");
                    return this.user2.filter(function (a) {
                        var ser = String(this.podtrekkey).toLowerCase()
                        return String(a.podtreck.name).toLowerCase().indexOf(ser) !== -1
                        // return a.name.toLowerCase().search(this.search) != -1

                    }.bind(this))

                }
                else {


                    return this.user2.filter(function (a) {
                        var ser = String(this.search2).toLowerCase()
                        console.log("3--------===--");
                        this.stranic = "11111";
                        return String(a.name).toLowerCase().indexOf(ser) !== -1
                        // return a.name.toLowerCase().search(this.search) != -1

                    }.bind(this))



                }

                // console.log(this.user2)
                // return this.user2.filter(function (a) {
                //     var ser = String(this.search2).toLowerCase()
                //     return String(a.name).toLowerCase().indexOf(ser) !== -1
                //     // return a.name.toLowerCase().search(this.search) != -1
                // }.bind(this))



            },

        }


        // this.getResults();

        // this.getStart();


    }



</script>