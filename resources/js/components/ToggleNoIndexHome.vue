<template>
    <div>Search Engine Indexing
        <toggle-button
        @change="onChangeEventHandler()"
        :labels="{checked: 'On', unchecked: 'Off'}"
        v-model="noindex"
        >
        </toggle-button>
    </div>
</template>

<script>
    import { ToggleButton } from 'vue-js-toggle-button';
    Vue.use(ToggleButton);
    export default {
        props:['home_content'],
        components: {
            ToggleButton
        },
        data(){
            return{
                noindex: !!this.home_content.meta_noindex
            }
        },
        methods: {
            onChangeEventHandler(){
                axios.post('/homepage/' + this.home_content.id, this.home_content)
                .then(
                    this.home_content.meta_noindex = !this.home_content.meta_noindex,
                    console.log(this.home_content)
                    )
                .catch(function (error) {
                    // handle error
                    console.log(error);
                })
            }
        },
        mounted() {
            console.log(this.home_content.id)
        }
    }
</script>