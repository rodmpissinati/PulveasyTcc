

// document.getElementById('updateButton').addEventListener('click', function() {
//     const inputValue = parseInt(document.getElementById('progressInput').value);
//     const percentage = Math.min(Math.max(inputValue, 0), 100); // Garantir que esteja entre 0 e 100

//     const circle = document.querySelector('.circle');
//     const radius = circle.r.baseVal.value;
//     const circumference = 2 * Math.PI * radius;
//     const offset = (percentage / 100) * circumference; // Alterado para preencher corretamente

//     circle.style.strokeDasharray = `${circumference} ${circumference}`;
//     circle.style.strokeDashoffset = circumference - offset; // Mudança aqui para a animação correta

//     document.querySelector('.percentage').textContent = `${percentage}%`;
// });


document.addEventListener('DOMContentLoaded', function() {
    const circle = document.querySelector('.circle');
    const radius = circle.r.baseVal.value;
    const circumference = 2 * Math.PI * radius;

    // Inicializar o círculo com 0%
    circle.style.strokeDasharray = `${circumference} ${circumference}`;
    circle.style.strokeDashoffset = circumference;
    document.querySelector('.percentage').textContent = `0%`;

    document.getElementById('updateButton').addEventListener('click', function() {
        const inputValue = parseInt(document.getElementById('progressInput').value);
        const percentage = Math.min(Math.max(inputValue, 0), 100); // Garantir que esteja entre 0 e 100

        let start = 0; // Valor inicial
        let end = percentage; // Valor final

        // Função para animar a mudança do valor
        function animateProgress(currentValue) {
            const offset = circumference - (currentValue / 100) * circumference;
            circle.style.strokeDashoffset = offset;
            document.querySelector('.percentage').textContent = `${currentValue}%`;

            // Se o valor atual não for o final, continue animando
            if (currentValue < end) {
                requestAnimationFrame(() => animateProgress(currentValue + 1));
            } else if (currentValue > end) {
                requestAnimationFrame(() => animateProgress(currentValue - 1));
            }
        }

        animateProgress(start); // Inicia a animação
    });
});





// velocidade
const velocimetro = document.querySelector("#velocimetro")
const velocidade = document.querySelector("#velocidade")

let watchID = null
const option = {enableHighAccuracy:true}

velocimetro.addEventListener("click",()=>{
  	console.log(watchID)
	if(!watchID){
			watchID = navigator.geolocation.watchPosition(
 			 updatePosition, handleError, option)
	}
   else{
			navigator.geolocation.clearWatch(watchID)
  			watchID = null
  			velocidade.textContent = 0
	}
})

//navigator.geolocation.watchPosition(
 // updatePosition, handleError)

function updatePosition(position){ 
  //console.log(position.coords.speed * 3.6)
  	if(position.coords.speed === null)
    		return
  	velocidade.textContent = (position.coords.speed * 3.6 /1.609).toFixed(1)
}

function handleError(error){
		console.log(error.message)
}

// Chuva

// Simulação do dado de chuva (true ou false)
const chuva = true; // Mude para false para testar o sol

const iconElement = document.getElementById('icon');

// Função para atualizar o ícone com base no estado da chuva
function updateWeatherIcon() {
    if (chuva) {
        iconElement.src = 'imagens\chuva.svg'; // Substitua pela URL da imagem da nuvem
        iconElement.alt = 'Nuvem';
    } else {
        iconElement.src = 'imagens\sol.svg'; // Substitua pela URL da imagem do sol
        iconElement.alt = 'Sol';
    }
}

// Chama a função para atualizar o ícone
updateWeatherIcon();
