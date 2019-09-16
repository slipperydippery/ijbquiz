<template>
	<div class="">
		here the list:
		<div class="border" v-for="measure in measures">
			<strong> {{ measure.name }} </strong> <em> {{ measure.description }} </em>
		</div>
	</div>

</template>

<script>
    export default {
        props: [
        	'answeroption_id'
        ],

        data() {
            return {
            	measures: [],	
            }
        },

        mounted() {
        	this.getMeasures()
        },

        computed: {
        },

        methods: {
        	getMeasures() {
        		var home = this
        		axios.get('/api/answeroption/' + this.answeroption_id + '/measure')
	        		.then( response => {
	        			home.measures = response.data;
	        		} )
        	}
        }
    }
</script>