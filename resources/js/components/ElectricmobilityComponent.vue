<template>
	<div class="container-fluid d-flex flex-column h-100">
		<div class="row">
	        <div class="col-md-12 text-center w-100">
            <h1 class="pagetitle d-inline px-5"> Rijden jullie al elektrisch? </h1>
	        </div>
		</div>
		<div class="row flex-grow-1">
			<div class="col-md-4 offset-md-2 h-50">
				<div class="p-2 h-100">
					<div 
						class="answer position-relative h-100 bg-light border clickable d-flex m-2" 
						@click="toggleAnswer('ebike')"
						:class="{'selected-answer' : isSelectedAnswer('ebike')}"
					>
						<img src="/img/quizebike.png" alt="" class="img-fluid align-self-start">
						<div class="answer-title pt-1 text-center w-100 align-self-end position-absolute">
								<h3 class=""> Er komen medewerkers op de e-bike, als je dat bedoelt </h3>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4 h-50">
				<div class="p-2 h-100">
					<div 
						class="answer position-relative h-100 bg-light border clickable d-flex m-2" 
						@click="toggleAnswer('electrischeauto')"
						:class="{'selected-answer' : isSelectedAnswer('electrischeauto')}"
					>
						<img src="/img/quizeauto.png" alt="" class="img-fluid align-self-start">
						<div class="answer-title pt-1 text-center w-100 align-self-end position-absolute">
							<h3 class=""> Een enkeling heeft een elektrische auto </h3>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4 offset-md-2 h-50">
				<div class="p-2 h-100">
					<div 
						class="answer position-relative h-100 bg-light border clickable d-flex m-2" 
						@click="toggleAnswer('poolautos')"
						:class="{'selected-answer' : isSelectedAnswer('poolautos')}"
					>
						<img src="/img/quizelectrischepoolautos.png" alt="" class="img-fluid align-self-start">
						<div class="answer-title pt-1 text-center w-100 align-self-end position-absolute">
								<h3 class=""> Jazeker, we stimuleren dat en ook onze poolauto’s zijn elektrisch </h3>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4 h-50">
				<div class="p-2 h-100">
					<div 
						class="answer position-relative h-100 bg-light border clickable d-flex m-2" 
						@click="toggleAnswer('nognietecht')"
						:class="{'selected-answer' : isSelectedAnswer('nognietecht')}"
					>
						<img src="/img/quizneenogniet.png" alt="" class="img-fluid align-self-start">
						<div class="answer-title pt-1 text-center w-100 align-self-end position-absolute">
								<h3 class=""> Nog niet echt, maar we willen dat wel meer gaan doen </h3>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row px-5 py-3">
			<div class="col-12 pb-3">
				<progress-bar
					:value = "6"
					:max = "7"
				>
				</progress-bar>
			</div>
			<div class="col-12 d-flex flex-row justify-content-between">

				<a href="#" @click="goBack()"><< Terug</a>
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
            	selectedAnswers: '',
            }
        },

        mounted() {
        },

        computed: {
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
        		axios.post('/api/session/updateelectricmobility', {
        			electricmobility: home.selectedAnswers
        		})
        		.then( (response) => {
        			window.location.href = '/quiz/electricmobility'
        		} )
        	},

        	goBack() {
        		window.location.href = '/quiz/inhousemobility';
        	}
        }
    }
</script>