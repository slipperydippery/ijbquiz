<template>
	<div class="container-fluid d-flex flex-column h-100">
		<div class="row">
	        <div class="col-md-12 text-center w-100">
                <h1 class="pagetitle d-inline px-5"> Hebben jullie bedrijfsauto’s? </h1>
                <p class="text-muted"><em> Je kunt meer dan 1 antwoord aanklikken. </em></p>
	        </div>
		</div>
		<div class="row flex-grow-1">
			<div class="col-md-4 offset-md-2 h-50">
				<div class="p-2 h-100">
					<div 
						class="answer position-relative h-100 bg-light border clickable d-flex m-2" 
						@click="toggleAnswer('poolautos')"
						:class="{'selected-answer' : isSelectedAnswer('poolautos')}"
					>
						<img src="/img/quizpoolautos.png" alt="" class="img-fluid align-self-start">
						<div class="answer-title pt-1 text-center w-100 align-self-end position-absolute">
								<h3 class=""> We hebben poolauto’s (personenauto’s) om naar afspraken te gaan </h3>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4 h-50">
				<div class="p-2 h-100">
					<div 
						class="answer position-relative h-100 bg-light border clickable d-flex m-2" 
						@click="toggleAnswer('bestelbusjes')"
						:class="{'selected-answer' : isSelectedAnswer('bestelbusjes')}"
					>
						<img src="/img/quizbestelbusjes.png" alt="" class="img-fluid align-self-start">
						<div class="answer-title pt-1 text-center w-100 align-self-end position-absolute">
							<h3 class=""> We hebben bestelbusjes om onze klanten te bezoeken of onze producten mee te bezorgen </h3>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4 offset-md-2 h-50">
				<div class="p-2 h-100">
					<div 
						class="answer position-relative h-100 bg-light border clickable d-flex m-2" 
						@click="toggleAnswer('vrachtwagens')"
						:class="{'selected-answer' : isSelectedAnswer('vrachtwagens')}"
					>
						<img src="/img/quizvrachtwagen.png" alt="" class="img-fluid align-self-start">
						<div class="answer-title pt-1 text-center w-100 align-self-end position-absolute">
								<h3 class=""> We rijden de regio in en uit met vrachtwagens </h3>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4 h-50">
				<div class="p-2 h-100">
					<div 
						class="answer position-relative h-100 bg-light border clickable d-flex m-2" 
						@click="toggleAnswerNone('nee')"
						:class="{'selected-answer' : isSelectedAnswer('nee')}"
					>
						<img src="/img/quizneenogniet.png" alt="" class="img-fluid align-self-start">
						<div class="answer-title pt-1 text-center w-100 align-self-end position-absolute">
								<h3 class=""> Nee, die hebben we nog niet </h3>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row px-5 py-3">
			<div class="col-12 pb-3">
				<progress-bar
					:value = "5"
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
        	this.selectedAnswers = this.session.inhousemobility ? this.session.inhousemobility : []
        },

        computed: {
        	noAnswerSelected() {
        		return this.selectedAnswers.length == 0 
        	},
        },

        methods: {
        	toggleAnswer(answer) {
        		if(this.selectedAnswers.includes('nee')){
        			this.selectedAnswers.splice(this.selectedAnswers.indexOf('nee'), 1);
        		}
        		if (this.selectedAnswers.includes(answer)) {
        			this.selectedAnswers.splice(this.selectedAnswers.indexOf(answer), 1);
        		} else {
	        		this.selectedAnswers.push(answer);
        		}
        	},

        	toggleAnswerNone(answer) {
        		if (! this.selectedAnswers.includes(answer)) {
	        		this.selectedAnswers = []
	        		this.selectedAnswers.push(answer);
        		} else {
	        		this.selectedAnswers = []
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
        		axios.post('/api/session/updateinhousemobility', {
        			inhousemobility: home.selectedAnswers
        		})
        		.then( (response) => {
        			window.location.href = '/quiz/electricmobility'
        		} )
        	},

        	goBack() {
        		window.location.href = '/quiz/employeemobility';
        	}
        }
    }
</script>