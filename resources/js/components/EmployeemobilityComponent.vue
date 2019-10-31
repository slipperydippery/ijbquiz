<template>
	<div class="container-fluid h-100">
		<div class="row">
	        <div class="col-md-12 text-center w-100">
                <h1 class="pagetitle d-inline"> Hoe komen de medewerkers naar het werk? </h1>
                <p class="text-muted"><em> Maak in totaal 100%. </em></p>
	        </div>
		</div>
		<div class="row flex-grow-1">
			<div class="col-12 col-md-8 offset-md-2 p-2">
				<label for="range-2"> <h5>Supergezond op de fiets</h5> </label>
				<div class="range-percentage">{{ percentages.fiets }} %</div>
			    <b-form-input id="range-2" v-model="percentages.fiets" type="range" min="0" max="100" step="10"></b-form-input>
			</div>
			<div class="col-8 offset-2 p-2">
				<label for="range-2"> <h5>Met het openbaar vervoer</h5> </label>
				<div class="range-percentage">{{ percentages.openbaarvervoer }} %</div>
			    <b-form-input id="range-2" v-model="percentages.openbaarvervoer" type="range" min="0" max="100" step="10"></b-form-input>
			</div>
			<div class="col-8 offset-2 p-2">
				<label for="range-2"> <h5>Met georganiseerd bedrijfsvervoer</h5> </label>
				<div class="range-percentage">{{ percentages.bedrijfsvervoer }} %</div>
			    <b-form-input id="range-2" v-model="percentages.bedrijfsvervoer" type="range" min="0" max="100" step="10"></b-form-input>
			</div>
			<div class="col-8 offset-2 p-2">
				<label for="range-2"><h5>Met de auto</h5></label>
				<div class="range-percentage">{{ percentages.auto }} %</div>
			    <b-form-input id="range-2" v-model="percentages.auto" type="range" min="0" max="100" step="10"></b-form-input>
			</div>
			<div
				class="col-8 offset-2 p-2 text-center"
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
					<h2>Totaal: {{ totalPercentage }}%</h2>
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
			<div class="col-12 pb-3">
				<span class="float-right" v-if="noAnswerSelected"><em>Geef eerst antwoord (totaal 100%) en klik dan op ‘verder'</em></span>
			</div>
			<div class="col-12 d-flex flex-row justify-content-between">

				<a href="#" @click="goBack()"><< Terug</a>

				<span>
					<button
						class="btn btn-primary"
						:disabled="noAnswerSelected"
						@click="submitAnswers"
					>
						Verder
					</button>
				</span>
			</div>
		</div>

	</div>
</template>

<script>
    export default {
        props: [
        	'session'
        ],

        data() {
            return {
            	percentages: {
            		'fiets' : 0,
            		'openbaarvervoer' : 0,
            		'bedrijfsvervoer': 0,
            		'auto' : 0,
            	},
            }
        },

        mounted() {
        	this.percentages = this.session.employeemobility ? this.session.employeemobility : {
            		'fiets' : 0,
            		'openbaarvervoer' : 0,
            		'bedrijfsvervoer': 0,
            		'auto' : 0,
            	}
        },

        computed: {
        	noAnswerSelected() {
        		return this.totalPercentage != 100;
        	},

        	totalPercentage() {
        		return parseInt(this.percentages.fiets) +
        				parseInt(this.percentages.openbaarvervoer) +
        				parseInt(this.percentages.bedrijfsvervoer) +
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
        	},

        	goBack() {
        		window.location.href = '/quiz/employeeorigin';
        	}
        }
    }
</script>
