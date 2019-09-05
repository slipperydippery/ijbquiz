<template>
	<div>
		<b-progress :value="value" :max="max"></b-progress>
	</div>

</template>

<script>
    export default {
        props: [
        	'value',
        	'max'
        ],

        data() {
            return {
            }
        },

        mounted() {
        },

        computed: {
        },

        methods: {
        }
    }
</script>