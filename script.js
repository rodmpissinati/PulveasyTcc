

document.addEventListener('DOMContentLoaded', function() {
    const circle = document.querySelector('.circle');
    const radius = circle.r.baseVal.value;
    const circumference = 2 * Math.PI * radius;

    // Inicializar o círculo com 0%
    circle.style.strokeDasharray = `${circumference} ${circumference}`;
    circle.style.strokeDashoffset = circumference;
    document.querySelector('.percentage').textContent = `0%`;

    // Função para animar o progresso
    function animateProgress(percentage) {
        let start = 0; // Valor inicial
        let end = percentage; // Valor final

        // Função para animar a mudança do valor
        function progress(currentValue) {
            const offset = circumference - (currentValue / 100) * circumference;
            circle.style.strokeDashoffset = offset;
            document.querySelector('.percentage').textContent = `${currentValue}%`;

            // Se o valor atual não for o final, continue animando
                if (currentValue < end) {
                    requestAnimationFrame(() => progress(currentValue + 1));
                } else if (currentValue > end) {
                    requestAnimationFrame(() => progress(currentValue - 1));
                }
        }

        progress(start); // Inicia a animação
    }

    // Obter o valor do input e chamar a função de animação automaticamente
    const inputValue = parseInt(document.getElementById('progressInput').value);
    const percentage = Math.min(Math.max(inputValue, 0), 100); // Garantir que esteja entre 0 e 100
    animateProgress(percentage); // Chama a animação automaticamente ao carregar a página
});
