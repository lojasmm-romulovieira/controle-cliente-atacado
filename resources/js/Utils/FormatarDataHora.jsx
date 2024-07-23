const formatarDataHora = (dataHora) => {
    const data = new Date(dataHora);
    const dataFormatada = data.toLocaleDateString('pt-BR') + ' ' + data.toLocaleTimeString('pt-BR');

    if (dataFormatada === 'Invalid Date Invalid Date') {
        return '';
    }

    return dataFormatada;
}

export default formatarDataHora;
