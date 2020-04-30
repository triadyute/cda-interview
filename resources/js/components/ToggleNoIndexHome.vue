<template>
    <div>
        <toggle-button
        @change="onChangeEventHandler()">
        </toggle-button>
    </div>
</template>

<script>
    import { ToggleButton } from 'vue-js-toggle-button';
    Vue.use(ToggleButton);
    export default {
        components: {
            ToggleButton
        },
        methods: {
            onChangeEventHandler(){
                console.log('toggled');
            }
        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>