<template>
	<div class="container-fluid d-flex flex-column h-100">
		<div class="row">
	        <div class="col-md-12 text-center w-100">
                <h1 class="pagetitle d-inline px-5"> Is het bedrijf gevestigd op of in een: </h1>
                <p class="text-muted"><em>Meerdere antwoorden mogelijk</em></p>
	        </div>
		</div>
		<div class="row flex-grow-1">
			<div class="col-md-4 offset-md-2 h-50">
				<div class="p-2 h-100">
					<div
						class="answer position-relative h-100 bg-light border clickablem-2"
						@click="toggleAnswer('bedrijventerrein')"
						:class="{'selected-answer' : isSelectedAnswer('bedrijventerrein')}"
					>
						<img src="/img/quizbedrijventerrein.png" alt="" class="img-fluid">
						<div class="answer-title pt-1 text-center w-100 position-absolute">
								<h3 class=""> Bedrijventerrein </h3>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4 h-50">
				<div class="p-2 h-100">
					<div
						class="answer position-relative h-100 bg-light border clickablem-2"
						@click="toggleAnswer('centrum / winkelgebied')"
						:class="{'selected-answer' : isSelectedAnswer('centrum / winkelgebied')}"
					>
						<img src="/img/quizcentrumwinkelgebied.png" alt="" class="img-fluid">
						<div class="answer-title pt-1 text-center w-100 position-absolute">
							<h3 class=""> Centrum/winkelgebied </h3>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4 offset-md-2 h-50">
				<div class="p-2 h-100">
					<div
						class="answer position-relative h-100 bg-light border clickablem-2"
						@click="toggleAnswer('recreatiegebied')"
						:class="{'selected-answer' : isSelectedAnswer('recreatiegebied')}"
					>
						<img src="/img/quizrecreatiegebied.png" alt="" class="img-fluid">
						<div class="answer-title pt-1 text-center w-100 position-absolute">
								<h3 class=""> Recreatiegebied </h3>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row px-5 py-3">
			<div class="col-12 pb-3">
				<progress-bar
					:value = "1"
					:max = "7"
				>
				</progress-bar>
			</div>
			<div class="col-12 d-flex flex-row justify-content-between">

				<a href="#" @click="goBack()"><< Terug</a>

				<span>
					<span class="mx-4" v-if="noAnswerSelected"><em>Geef eerst antwoord en klik dan op ‘verder'</em></span>
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
            	selectedAnswers: [],
            }
        },

        mounted() {
        	this.selectedAnswers = this.session.locationtype ? this.session.locationtype : []
        },

        computed: {
        	noAnswerSelected() {
        		return this.selectedAnswers.length == 0
        	},
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
        		axios.post('/api/session/updatelocationtype', {
        			locationtype: home.selectedAnswers
        		})
        		.then( (response) => {
        			window.location.href = '/quiz/employeecount'
        		} )
        	},

        	goBack() {
        		window.location.href = '/quiz/location';
        	}
        }
    }
</script>
