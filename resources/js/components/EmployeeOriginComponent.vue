<template>
	<div class="container-fluid h-100">
		<div class="row">
	        <div class="col-md-12 text-center w-100">
                <h1 class="pagetitle d-inline"> Hoe ver wonen de medewerkers bij het bedrijf vandaan? </h1>
                <p class="text-muted"><em> Maak in totaal 100%. </em></p>
	        </div>
		</div>
		<div class="row flex-grow-1">
			<div class="col-12 col-md-8 offset-md-2 p-2">
				<label for="range-2"><h5 class="">Bijna om de hoek: 5-10km </h5></label>
				<div class="range-percentage">{{ percentages.uptofive }} %</div>
			    <b-form-input id="range-2" v-model="percentages.uptofive" type="range" min="0" max="100" step="10"></b-form-input>
			</div>
			<div class="col-12 col-md-8 offset-md-2 p-2">
				<label for="range-2"> <h5>Lekker dichtbij: 5-10km</h5> </label>
				<div class="range-percentage">{{ percentages.fivetoten }} %</div>
			    <b-form-input id="range-2" v-model="percentages.fivetoten" type="range" min="0" max="100" step="10"></b-form-input>
			</div>
			<div class="col-12 col-md-8 offset-md-2 p-2">
				<label for="range-2"><h5>Wel wat verder weg: 11-20km</h5></label>
				<div class="range-percentage">{{ percentages.eleventotwenty }} %</div>
			    <b-form-input id="range-2" v-model="percentages.eleventotwenty" type="range" min="0" max="100" step="10"></b-form-input>
			</div>
			<div class="col-12 col-md-8 offset-md-2 p-2">
				<label for="range-2"><h5>Een flink eind: >20km</h5></label>
				<div class="range-percentage">{{ percentages.morethantwenty }} %</div>
			    <b-form-input id="range-2" v-model="percentages.morethantwenty" type="range" min="0" max="100" step="10"></b-form-input>
			</div>
			<div
				class="col-12 col-md-8 offset-md-2 p-2 text-center"
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
					:value = "3"
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
            		'uptofive' : 0,
            		'fivetoten' : 0,
            		'eleventotwenty' : 0,
            		'morethantwenty' : 0,
            	},
            }
        },

        mounted() {
        	this.percentages = this.session.employeeorigin ? this.session.employeeorigin : {
            		'uptofive' : 0,
            		'fivetoten' : 0,
            		'eleventotwenty' : 0,
            		'morethantwenty' : 0,
            	}
        },

        computed: {
        	noAnswerSelected() {
        		return this.totalPercentage != 100;
        	},

        	totalPercentage() {
        		return parseInt(this.percentages.uptofive) +
        				parseInt(this.percentages.fivetoten) +
        				parseInt(this.percentages.eleventotwenty) +
        				parseInt(this.percentages.morethantwenty);
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
        		axios.post('/api/session/updateemployeeorigin', {
        			employeeorigin: home.percentages
        		})
        		.then( (response) => {
        			window.location.href = '/quiz/employeemobility'
        		} )
        	},

        	goBack() {
        		window.location.href = '/quiz/employeecount';
        	}
        }
    }
</script>
