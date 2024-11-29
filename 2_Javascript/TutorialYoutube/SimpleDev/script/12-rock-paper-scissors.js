
      let score = JSON.parse(localStorage.getItem("score"));
      if (!score) {
        score = {
          wins: 0,
          losses: 0,
          ties: 0,
        };
      }

      updateScoreElement();

      function resetScore() {
        score.wins = 0;
        score.losses = 0;
        score.ties = 0;
        localStorage.removeItem("score");
      }
      document.querySelector('.js-rock-button')
        .addEventListener('click', () => {
          playGame('rock');
        });
        document.body.addEventListener('keydown', (event) =>{
          if(event.key === 'r'){
              playGame('rock');
          }
          if(event.key === 'p'){
              playGame('paper');
          }
          if(event.key === 's'){
              playGame('scissors');
          }
          
        });

      document.querySelector('.js-paper-button')
        .addEventListener('click', () => {
          playGame('paper');
        });
        
        document.querySelector('.js-scissors-button')
        .addEventListener('click', () => {
          playGame('scissors');
        });
        

      function playGame(playerMove) {
        const computerMove = pickComputerMove();

        let result = "";
        if (playerMove === "scissors") {
          if (computerMove === "rock") {
            result = "you lose";
            score.losses++;
          }
          if (computerMove === "paper") {
            result = "you win";
            score.wins++;
          }
          if (computerMove === "scissors") {
            result = "Tie";
            score.ties++;
          }
        }
        if (playerMove === "rock") {
          if (computerMove === "rock") {
            result = "Tie";
            score.ties++;
          }
          if (computerMove === "paper") {
            result = "you lose";
            score.losses++;
          }
          if (computerMove === "scissors") {
            result = "you win";
            score.wins++;
          }
        }
        if (playerMove === "paper") {
          if (computerMove === "rock") {
            result = "you win";
            score.wins++;
          }
          if (computerMove === "paper") {
            result = "Tie";
            score.ties++;
          }
          if (computerMove === "scissors") {
            result = "you lose";
            score.losses++;
          }
        }

        localStorage.setItem("score", JSON.stringify(score));

        updateScoreElement();

        document.querySelector(".js-result").innerHTML = result;
        document.querySelector(
          ".js-moves"
        ).innerHTML = `You <img src="images/${playerMove}-emoji.png" class="move-icon"> <img src="images/${computerMove}-emoji.png" class="move-icon"> Computer`;
      }

      function updateScoreElement() {
        document.querySelector(
          ".js-score"
        ).innerHTML = `wins:${score.wins} losses: ${score.losses} ties:${score.ties}`;
      }
      let computerMove = "";
      function pickComputerMove() {
        const randomNumber = Math.floor(Math.random() * 4);

        if (randomNumber >= 0 && randomNumber < 1) {
          computerMove = "rock";
        }
        if (randomNumber >= 1 && randomNumber < 2) {
          computerMove = "paper";
        }
        if (randomNumber >= 2 && randomNumber < 3) {
          computerMove = "scissors";
        }
        return computerMove;
      }

let isAutoPlaying = false;
let intervalId;



function autoPlay(){
if(!isAutoPlaying){
  intervalId = setInterval(() => {
        const playerMove = pickComputerMove();
        playGame(playerMove);
    },1000);
    isAutoPlaying = true;
}else{
    clearInterval(intervalId);
    isAutoPlaying = false;
}
   

};