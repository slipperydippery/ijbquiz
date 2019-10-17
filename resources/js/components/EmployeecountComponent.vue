<template>
	<div class="container-fluid d-flex flex-column h-100">
		<div class="row">
	        <div class="col-md-12 text-center w-100">
            <h1 class="pagetitle d-inline px-5"> Hoeveel mensen werken er in dit bedrijf: </h1>
	        </div>
		</div>
		<div class="row flex-grow-1">
			<div class="col-md-4 offset-md-2 h-50">
				<div class="p-2 h-100">
					<div 
						class="answer position-relative h-100 bg-light border clickable d-flex m-2" 
						@click="toggleAnswer('1-10')"
						:class="{'selected-answer' : isSelectedAnswer('1-10')}"
					>
						<img src="/img/quiznet-een-familie.png" alt="" class="img-fluid align-self-start">
						<div class="answer-title pt-1 text-center w-100 align-self-end position-absolute">
								<h3 class=""> Wij zijn net een familie: 1-10 personen </h3>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4 h-50">
				<div class="p-2 h-100">
					<div 
						class="answer position-relative h-100 bg-light border clickable d-flex m-2" 
						@click="toggleAnswer('11-50')"
						:class="{'selected-answer' : isSelectedAnswer('11-50')}"
					>
						<img src="/img/quizkleinmaarfijn.png" alt="" class="img-fluid align-self-start">
						<div class="answer-title pt-1 text-center w-100 align-self-end position-absolute">
							<h3 class=""> We zijn klein, maar fijn: 11-50 personen </h3>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4 offset-md-2 h-50">
				<div class="p-2 h-100">
					<div 
						class="answer position-relative h-100 bg-light border clickable d-flex m-2" 
						@click="toggleAnswer('51-250')"
						:class="{'selected-answer' : isSelectedAnswer('51-250')}"
					>
						<img src="/img/quizmkb.png" alt="" class="img-fluid align-self-start">
						<div class="answer-title pt-1 text-center w-100 align-self-end position-absolute">
								<h3 class=""> Wij horen nog bij het MKB: 51-250 personen </h3>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4 h-50">
				<div class="p-2 h-100">
					<div 
						class="answer position-relative h-100 bg-light border clickable d-flex m-2" 
						@click="toggleAnswer('250+')"
						:class="{'selected-answer' : isSelectedAnswer('250+')}"
					>
						<img src="/img/quizveel.png" alt="" class="img-fluid align-self-start">
						<div class="answer-title pt-1 text-center w-100 align-self-end position-absolute">
								<h3 class=""> We zijn met veel: > 250 personen </h3>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row px-5 py-3">
			<div class="col-12 pb-3">
				<progress-bar
					:value = "2"
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
            	selectedAnswers: '',
            }
        },

        mounted() {
        	this.selectedAnswers = this.session.employeecount ? this.session.employeecount : ''
        },

        computed: {
        	noAnswerSelected() {
        		return this.selectedAnswers == '' 
        	},
        },

        methods: {
        	toggleAnswer(answer) {
        		if (this.selectedAnswers.includes(answer)) {
        			this.selectedAnswers = '';
        		} else {
	        		this.selectedAnswers = answer;
        		}
        	},

        	isSelectedAnswer(answer) {
        		if(this.selectedAnswers == answer) {
        			return true;
        		}
        		return false;
        	},

        	submitAnswers() {
        		var home = this;
        		axios.post('/api/session/updateemployeecount', {
        			employeecount: home.selectedAnswers
        		})
        		.then( (response) => {
        			window.location.href = '/quiz/employeeorigin'
        		} )
        	},

        	goBack() {
        		window.location.href = '/quiz/locationtype';
        	}
        }
    }
</script>