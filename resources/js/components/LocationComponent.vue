<template>
	<div class="container-fluid d-flex flex-column h-100">
		<div class="row">
	        <div class="col-md-12 text-center w-100">
                <h1 class="pagetitle d-inline px-5"> Waar is uw bedrijf gevestigd? </h1>
	        </div>
		</div>
		<div class="row flex-grow-1 py-5">
			<div class="col-md-4 offset-md-2 h-50 py-2">
				<div 
					class="answer position-relative h-100 bg-light border clickable d-flex" 
					@click="toggleAnswer('beverwijk')"
					:class="{'selected-answer' : isSelectedAnswer('beverwijk')}"
				>
					<img src="/img/ijmondbeverwijk.svg" alt="" class="img-fluid">
					<div class="answer-title pt-1 text-center w-100 align-self-end position-absolute">
							<h3 class=""> Gemeente Beverwijk </h3>
					</div>
				</div>
			</div>
			<div class="col-md-4 h-50 py-2">
				<div 
					class="answer position-relative h-100 bg-light border clickable d-flex" 
					@click="toggleAnswer('velsen')"
					:class="{'selected-answer' : isSelectedAnswer('velsen')}"
				>
					<img src="/img/ijmondvelsen.svg" alt="" class="img-fluid">
					<div class="answer-title pt-1 text-center w-100 align-self-end position-absolute">
							<h3 class=""> Gemeente Velsen </h3>
					</div>
				</div>
			</div>
			<div class="col-md-4 offset-md-2 h-50 py-2">
				<div 
					class="answer position-relative h-100 bg-light border clickable d-flex" 
					@click="toggleAnswer('heemskerk')"
					:class="{'selected-answer' : isSelectedAnswer('heemskerk')}"
				>
					<img src="/img/ijmondheemskerk.svg" alt="" class="img-fluid">
					<div class="answer-title pt-1 text-center w-100 align-self-end position-absolute">
							<h3 class=""> Gemeente Heemskerk </h3>
					</div>
				</div>
			</div>
			<div class="col-md-4 h-50 py-2">
				<div 
					class="answer position-relative h-100 bg-light border clickable d-flex" 
					@click="toggleAnswer('buiten de regio')"
					:class="{'selected-answer' : isSelectedAnswer('buiten de regio')}"
				>
					<img src="/img/ijmondbuiten.svg" alt="" class="img-fluid">
					<div class="answer-title pt-1 text-center w-100 align-self-end position-absolute">
						<h3 class=""> Vestiging(en) buiten de regio </h3>
					</div>
				</div>
			</div>
		</div>
		<div class="row d-flex flex-row justify-content-between px-5 py-3">
			<a href="#"><< Terug</a>
			<button 
				class="btn btn-primary"
				@click="submitAnswers"
			>
				Accoord en verder
			</button>
		</div>

	</div>
</template>

<script>
    export default {
        props: [
        ],

        data() {
            return {
            	selectedAnswers: [],
            }
        },

        mounted() {
        },

        computed: {
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
        		axios.post('/api/session/updatelocation', {
        			location: home.selectedAnswers
        		})
        		.then( (response) => {
        			window.location.href = '/quiz/locationtype'
        		} )
        	}
        }
    }
</script>