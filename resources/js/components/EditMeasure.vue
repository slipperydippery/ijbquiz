<template>
	<form>
		<h2 class="text-center width-100 p-2" v-html="localmeasure.name"> </h2>
		<div class="form-group">
			<label for="exampleFormControlInput1">Titel</label>
			<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" v-model="localmeasure.name">
		</div>
		<div class="form-group">
			<label for="exampleFormControlTextarea1">Omschrijving</label>
		    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" v-model="localmeasure.description">  </textarea>
		</div>
		<div class="form-group">
			<label for="exampleFormControlInput1">Link</label>
			<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" v-model="localmeasure.link">
		</div>
		<label for="">Van toepaassing op:</label>
		<div class="card-columns">
			<div class="card" v-for="question in questions" index="question.id" v-if="localmeasure.answeroptions">
				<div class="card-body">
					<h5 class="card-title"> {{ question.name }} </h5>
					<span 
						class="border rounded-pill d-block px-3 mb-2 clickable" 
						:class="{ 'bg-primary text-white font-weight-light border-primary' : isChecked(answeroption) }"
						v-for="answeroption in question.answeroptions" 
						@click="toggleAnsweroption(answeroption)"
					> 
						{{ answeroption.name }} 
					</span>
				</div>
			</div>
		</div>
		<div class="form-group row">
			<div class="col-sm-12">
				<a class="btn btn-primary" @click="updateMeasure"> Sla wijzigingen op </a>
				<a class="btn btn-outline-danger float-right" @click="deleteMeasure">Verwijder link</a>
			</div>
		</div>
	</form>
</template>

<script>

    export default {
        props: [
	        'questions',
        	'measure'
        ],

        data() {
            return {
            	localmeasure: {}
            }
        },

        mounted() {
        	this.localmeasure = this.measure
        },

        computed: {
        },

        methods: {
        	isChecked(answeroption) {
        		return this.localmeasure.answeroptions.map( answeroption => answeroption.id ).includes( answeroption.id ) ? true : false
        	},

        	toggleAnsweroption(answeroption) {
        		if( this.isChecked( answeroption ) ){
        			this.localmeasure.answeroptions.splice( this.localmeasure.answeroptions.map( answeroption => answeroption.id ).indexOf( answeroption.id ), 1 )
        			this.$forceUpdate()
        			return
        		}
        		this.localmeasure.answeroptions.push(answeroption)
    			this.$forceUpdate()
        	},

        	updateMeasure() {
        		var home = this
        		axios.patch('/api/measure/' + this.localmeasure.id, {
        			measure: home.localmeasure
        		})
        		.then( response => {
        			window.location.href = '/measure';
        		} )
        	},

        	deleteMeasure() {
        		var home = this
        		axios.delete('/api/measure/' + this.localmeasure.id)
        		.then ( response => {
        			window.location.href = '/measure'
        		}) 
        	},
        }
    }
</script>