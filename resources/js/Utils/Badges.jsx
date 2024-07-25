const getBadgeClassificacaoCliente = (idclassificacao) => {
    const label = {
        1: 'A',
        2: 'B',
        3: 'C',
        4: 'Em Prospecção'
    }[parseInt(idclassificacao)];

    const variant = {
        1: 'bg-green-600',
        2: 'bg-yellow-500',
        3: 'bg-red-600',
        4: 'bg-blue-600'
    }[parseInt(idclassificacao)];

    if (!label || !variant) {
        throw new Error('classificacao não mapeado. Verificar função getBadgeClassificacaoCliente.');
    }

    return <span className={`text-white font-medium me-2 px-2.5 py-0.5 rounded ${variant}`}>{label}</span>;
}

const getBadgeSituacaoCliente = (idsituacao) => {
    const label = {
        0: 'Inativo',
        1: 'Ativo',
    }[parseInt(idsituacao)];

    const variant = {
        0: 'bg-red-600',
        1: 'bg-green-600',
    }[parseInt(idsituacao)];

    if (!label || !variant) {
        throw new Error('idsituacao não mapeado. Verificar função getBadgeSituacaoCliente.');
    }

    return <span className={`text-white  me-2 px-2.5 py-0.5 rounded ${variant}`}>{label}</span>;
}

export {
    getBadgeClassificacaoCliente,
    getBadgeSituacaoCliente
};
