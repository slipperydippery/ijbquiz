<template>
	<div class="container-fluid h-100">
		<div class="row">
	        <div class="col-md-12 text-center w-100">
                <h1 class="pagetitle d-inline"> Waar is je bedrijf gevestigd? </h1>
                <p class="text-muted"><em> Zijn er meerdere vestigingen in verschillende gemeenten, dan kun je dat ook aangeven. </em></p>
	        </div>
		</div>
		<div class="row ">
			<div class="col-md-4 offset-md-2 h-50">
				<div class="p-2 h-100">
					<div
						class="answer position-relative h-100 bg-light border clickable m-2"
						@click="toggleAnswer('beverwijk')"
						:class="{'selected-answer' : isSelectedAnswer('beverwijk')}"
					>
						<img src="/img/quizbeverwijk.png" alt="" class="img-fluid">
						<div class="answer-title pt-1 text-center w-100 position-absolute">
								<h5 class=""> Gemeente Beverwijk </h5>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4 h-50">
				<div class="p-2 h-100">
					<div
						class="answer position-relative h-100 bg-light border clickable m-2"
						@click="toggleAnswer('velsen')"
						:class="{'selected-answer' : isSelectedAnswer('velsen')}"
					>
						<img src="/img/quizvelsen.png" alt="" class="img-fluid">
						<div class="answer-title pt-1 text-center w-100 position-absolute">
							<h5 class=""> Gemeente Velsen </h5>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4 offset-md-2 h-50">
				<div class="p-2 h-100">
					<div
						class="answer position-relative h-100 bg-light border clickable m-2"
						@click="toggleAnswer('heemskerk')"
						:class="{'selected-answer' : isSelectedAnswer('heemskerk')}"
					>
						<img src="/img/quizheemskerk.png" alt="" class="img-fluid">
						<div class="answer-title pt-1 text-center w-100 position-absolute">
								<h5 class=""> Gemeente Heemskerk </h5>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4 h-50">
				<div class="p-2 h-100">
					<div
						class="answer position-relative h-100 bg-light border m-2"
						@click="toggleAnswer('buiten de regio')"
						:class="{'selected-answer' : isSelectedAnswer('buiten de regio'), 'clickable' : hasIJmond, 'faded' : ! hasIJmond}"
						id="popover-button-sync"
					>
						<img src="/img/quizbuitenderegio.png" alt="" class="img-fluid">
						<div class="answer-title pt-1 text-center w-100 position-absolute">
							<h5 class=""> Vestiging(en) buiten de regio </h5>
						</div>
					</div>
					<b-popover
						title="Alleen in de IJmond"
						:disabled.sync="hasIJmondGETSET"
						target="popover-button-sync"
						triggers="hover focus"
						placement="top"
					>
				        Helaas kunnen we alleen informatie bieden voor bedrijven die gevestigd zijn binnen de IJmond.
					</b-popover>
				</div>
			</div>
		</div>
		<div class="row px-5 py-3">
			<div class="col-12 pb-3">
				<progress-bar
					:value = "0"
					:max = "7"
				>
				</progress-bar>
			</div>
			<div class="col-12 pb-3">
				<span class="float-right" v-if="noAnswerSelected"><em>Geef eerst antwoord en klik dan op ‘verder'</em></span>
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
            	selectedAnswers: [],
            	hasIJmondGETSET: false,
            }
        },

        mounted() {
        	this.selectedAnswers = this.session.location ? this.session.location : []
        },

        computed: {
        	noAnswerSelected() {
        		return this.selectedAnswers.length == 0
        	},

        	hasIJmond() {
        		this.hasIJmondGETSET = this.selectedAnswers.length ? true : false;
        		return this.selectedAnswers.length ? true : false;
        	}
        },

        methods: {
        	toggleAnswer(answer) {
        		if (this.selectedAnswers.includes(answer)) {
        			this.selectedAnswers.splice(this.selectedAnswers.indexOf(answer), 1);
        		} else {
	        		this.selectedAnswers.push(answer);
	        		// this.hasIJmond = true;
        		}
        		if(this.selectedAnswers.includes('buiten de regio') && (this.selectedAnswers.length == 1)) {
        			this.selectedAnswers = []
        			// this.hasIJmond = false;
        			this.$forceUpdate();
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
        		axios.post('/api/session/updatelocation', {
        			location: home.selectedAnswers
        		})
        		.then( (response) => {
        			window.location.href = '/quiz/locationtype'
        		} )
        	},

        	goBack() {
        		window.location.href = '/';
        	}
        }
    }
</script>
