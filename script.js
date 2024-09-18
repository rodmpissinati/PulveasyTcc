document.addEventListener('DOMContentLoaded', () => {
    const tds = document.querySelectorAll('.tdDetalhamento');

    tds.forEach(td => {
        td.addEventListener("click", selecionado);
    });

    document.querySelector('#salvarAlteracoes').addEventListener('click', async (e) => {
        e.preventDefault();
        const form = document.querySelector('#formDetalhamento');
        const formData = new FormData(form);

        try {
            const response = await fetch('processaDetalhamento.php', {
                method: 'POST',
                body: formData
            });

            const result = await response.json();
            if (result.status === 'success') {
                alert(result.message);
                window.location.reload();
            } else {
                throw new Error(result.message);
            }
        } catch (error) {
            console.error('Error:', error);
            alert('Ocorreu um erro ao enviar os dados.');
        }
    });

    document.querySelector('#adicionarRegistro').addEventListener('click', () => {
        adicionarRegistro();
    });
});

function selecionado(evento) {
    const td = evento.currentTarget;
    const texto = td.querySelector('.texto');
    const input = td.querySelector('.input');

    if (texto && input) {
        texto.style.display = "none";
        input.style.display = "flex";
    }
}

function adicionarRegistro() {
    fetch('adicionarRegistro.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded'
        },
        body: new URLSearchParams({
            'adicionar': '1'
        })
    })
    .then(response => response.json())
    .then(data => {
        if (data.id) {
            // Adiciona uma nova linha à tabela no front-end
            const tabela = document.querySelector('tbody');
            const novaLinha = document.createElement('tr');

            novaLinha.innerHTML = `
                <td class="tdDetalhamento"><span class="texto"></span><input class="input" type="text" style="display:none;"></td>
                <td class="tdDetalhamento"><span class="texto"></span><input class="input" type="text" style="display:none;"></td>
                <td class="tdDetalhamento"><span class="texto"></span><input class="input" type="text" style="display:none;"></td>
                <td class="tdDetalhamento"><span class="texto"></span><input class="input" type="text" style="display:none;"></td>
                <td class="tdDetalhamento"><span class="texto"></span><input class="input" type="text" style="display:none;"></td>
                <td class="tdDetalhamento"><span class="texto"></span><input class="input" type="text" style="display:none;"></td>
                <td class="tdDetalhamento"><span class="texto"></span><input class="input" type="time" style="display:none;"></td>
                <td class="tdDetalhamento"><span class="texto"></span><input class="input" type="date" style="display:none;"></td>
            `;
            
            // Associa o evento 'click' ao novo registro
            novaLinha.querySelectorAll('.tdDetalhamento').forEach(td => {
                td.addEventListener('click', selecionado);
            });

            tabela.appendChild(novaLinha);
            alert('Novo registro adicionado!');
        } else {
            // Verifica se há uma mensagem de erro e exibe
            alert(data.error || 'Erro ao adicionar registro!');
        }
    })
    .catch(error => {
        console.error('Erro:', error);
        alert('Erro ao adicionar registro!');
    });
}



