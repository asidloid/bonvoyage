<template>
    <div class="container">

        <!--<button v-on:click="count++">Счётчик кликов — {{ count }} !!!</button>-->
        <div class="sorting">
            <label for="filtername">Find your hero:</label>
            <input v-model="findName" type="text" />
        </div>


        <ul>
            <li v-for="name in filteredNames">
                <transition name="fade">
                {{ name }}
                </transition>

            </li>
        </ul>

       <!--</transition>-->
    </div>
</template>

<script>
    export default {
        data() {
            return {
                findName: '',
                names: [
                    'Evan You',
                    'John Lindquist',
                    'Jen Looper',
                    'Miriam Suzanne',
                    'Chris Coyier',
                    'Geoff Graham',
                    'Divya Sasidharan',
                    'Lea Verou',
                    'Rachel Andrew',
                    'Vitaly Friedman',
                    'Ryan Florence',
                    'Dan Abramov',
                    'Jen Simmons',
                    'Robin Rendle',
                    'Nicole Sullivan'
                ]
            }
        },
        computed: {
            filteredNames() {
                let filter = new RegExp(this.findName, 'i')
                return this.names.filter(el => el.match(filter))
            }
        },
        watch: {
            findName() {
                console.log('-----------findName - ' + this.findName)
            }
        }
        // mounted() {
        //     console.log('SMENA mounted.')
        // },
        //
        // data() {
        //     return {
        //         count: 0 + 10
        //     }
        // }
    }
</script>





