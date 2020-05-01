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
        props:['contact_content'],
        components: {
            ToggleButton
        },
        data(){
            return{
                noindex: this.contact_content.meta_noindex
            }
        },
        methods: {
            onChangeEventHandler(){
                axios.post('/contact/' + this.contact_content.id, this.contact_content)
                .then(
                    this.contact_content.meta_noindex = !this.noindex,
                    console.log(this.contact_content)
                    )
                .catch(function (error) {
                    // handle error
                    console.log(error);
                })
            }
        },
        mounted() {
            console.log(this.contact_content.id)
        }
    }
</script>