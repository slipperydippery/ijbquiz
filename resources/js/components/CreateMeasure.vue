<template>
    <div class="">
		<h3 class="text-center width-100 m-0 py-3 clickable bg-secondary text-white" @click="addLinkActive = ! addLinkActive">Voeg een link toe</h3>
        <form v-if="addLinkActive" class="mt-3">
            <div class="form-group">
                <label for="exampleFormControlInput1">Titel</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" v-model="measure.name">
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Omschrijving</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" v-model="measure.description">  </textarea>
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Link</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" v-model="measure.link">
            </div>
            <label for="">Van toepaassing op:</label>
            <div class="card-columns">
                <div class="card" v-for="question in questions">
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
                <div class="col-sm-10">
                    <a class="btn btn-primary" @click="submitMeasure">Voeg link toe</a>
                    <a class="btn btn-danger" @click="addLinkActive = false">Annuleer</a>
                </div>
            </div>
        </form>
    </div>

</template>

<script>
    export default {
        props: [
	        'questions'
        ],

        data() {
            return {
                addLinkActive: false,
            	measure: {
            		name: '',
            		description: '',
            		link: '',
            		answeroptions: []
            	}
            }
        },

        mounted() {
        },

        computed: {
        },

        methods: {
        	isChecked(answeroption) {
        		return this.measure.answeroptions.map( answeroption => answeroption.id ).includes( answeroption.id ) ? true : false
        	},

        	toggleAnsweroption(answeroption) {
        		if( this.isChecked(answeroption)  ){
        			this.measure.answeroptions.splice( this.measure.answeroptions.map( answeroption => answeroption.id ).indexOf( answeroption.id ), 1 )
        			return
        		}
        		this.measure.answeroptions.push(answeroption)
        	},

        	submitMeasure() {
        		var home = this
        		axios.post('/api/measure', {
        			measure: home.measure
        		})
        		.then( response => {
        			console.log(response)
        			window.location.href = '/measure';
        		} )
        	},

        }
    }
</script>
