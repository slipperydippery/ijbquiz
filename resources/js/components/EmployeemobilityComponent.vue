<template>
	<div class="container-fluid d-flex flex-column h-100">
		<div class="row">
	        <div class="col-md-12 text-center w-100">
                <h1 class="pagetitle d-inline px-5"> Hoe komen de medewerkers naar het werk? </h1>
	        </div>
		</div>
		<div class="row flex-grow-1">
			<div class="col-8 offset-md-2 p-2 border">
				<label for="range-2"> <h4>Supergezond op de fiets</h4> </label>
			    <b-form-input id="range-2" v-model="percentages.fiets" type="range" min="0" max="100" step="10"></b-form-input>
			    <div class="mt-2 text-center"> <h5>{{ percentages.fiets }} %</h5></div>
			</div>
			<div class="col-8 offset-md-2 p-2 border">
				<label for="range-2"> <h4>Met het openbaar vervoer of met bedrijfsvervoer</h4> </label>
			    <b-form-input id="range-2" v-model="percentages.openbaarvervoer" type="range" min="0" max="100" step="10"></b-form-input>
			    <div class="mt-2 text-center"> <h5>{{ percentages.openbaarvervoer }} %</h5></div>
			</div>
			<div class="col-8 offset-md-2 p-2 border">
				<label for="range-2"><h4>Met de auto</h4></label>
			    <b-form-input id="range-2" v-model="percentages.auto" type="range" min="0" max="100" step="10"></b-form-input>
			    <div class="mt-2 text-center"> <h5>{{ percentages.auto }} %</h5></div>
			</div>
			<div class="col-8 offset-md-2">
				<br><br>
			</div>
			<div 
				class="col-8 offset-md-2 p-2 text-center"
			>
				<b-alert show
					variant="primary"
					v-if="totalPercentage < 100"
				>
					<h2>Totaal: {{ totalPercentage }}</h2>
				</b-alert>
				<b-alert show
					variant="success"
					v-if="totalPercentage == 100"
				>
					<h2>Totaal: {{ totalPercentage }}</h2>
				</b-alert>
				<b-alert show
					variant="danger"
					v-if="totalPercentage > 100"
				>
					<h2>Totaal: {{ totalPercentage }}</h2>
				</b-alert>
			</div>
		</div>
		<div class="row px-5 py-3">
			<div class="col-12 pb-3">
				<progress-bar
					:value = "4"
					:max = "7"
				>
				</progress-bar>
			</div>
			<div class="col-12 d-flex flex-row justify-content-between">

				<a href="#"><< Terug</a>
				<button 
					class="btn btn-primary"
					@click="submitAnswers"
				>
					Accoord en verder
				</button>
			</div>
		</div>

	</div>
</template>

<script>
    export default {
        props: [
        ],

        data() {
            return {
            	percentages: {
            		'fiets' : 0,
            		'openbaarvervoer' : 0,
            		'auto' : 0,
            	},
            }
        },

        mounted() {
        },

        computed: {
        	totalPercentage() {
        		return parseInt(this.percentages.fiets) + 
        				parseInt(this.percentages.openbaarvervoer) + 
        				parseInt(this.percentages.auto);
        	}
        },

        methods: {
        	toggleAnswer(answer) {
        		if (this.selectedAnswers.includes(answer)) {
        			this.selectedAnswers.splice(this.selectedAnswers.indexOf(answer), 1);
        		} else {
	        		this.selectedAnswers.push(answer);
        		}
        	},

        	isSelectedAnswer(answer) {
        		if(this.selectedAnswers.includes(answer)) {
        			return true;
        		}
        		return false;
        	},

        	submitAnswers() {
        		var home = this;
        		axios.post('/api/session/updateemployeemobility', {
        			employeemobility: home.percentages
        		})
        		.then( (response) => {
	        			window.location.href = '/quiz/inhousemobility'
        		} )
        	}
        }
    }
</script>