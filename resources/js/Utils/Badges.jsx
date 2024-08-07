import {IoHappyOutline, IoSadOutline} from "react-icons/io5";
import React from "react";

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
    }[idsituacao ? 1 : 0];

    const variant = {
        0: 'bg-red-600',
        1: 'bg-green-600',
    }[idsituacao ? 1 : 0];

    if (!label || !variant) {
        throw new Error('idsituacao não mapeado. Verificar função getBadgeSituacaoCliente.');
    }

    return <span className={`text-white  me-2 px-2.5 py-0.5 rounded ${variant}`}>{label}</span>;
}

const getBadgeTrueOrFalse = (value, variantSuccess = 'bg-green-600', variantDanger = 'bg-red-600') => {
    const label = {
        0: 'Não',
        1: 'Sim',
    }[value ? 1 : 0];

    const variant = {
        0: variantDanger,
        1: variantSuccess,
    }[value ? 1 : 0];

    if (!label || !variant) {
        throw new Error('value não mapeado. Verificar função getBadgeTrueOrFalse.');
    }

    return (
        <div className="flex items-center">
            {value ? <IoSadOutline className="text-2xl text-red-500 mr-2"/> :
                <IoHappyOutline className="text-2xl text-green-500 mr-2"/>}
            <span className={`text-white me-2 px-2.5 py-0.5 rounded ${variant}`}>
            {label}
    </span>
        </div>
    );
}

export {
    getBadgeClassificacaoCliente,
    getBadgeSituacaoCliente,
    getBadgeTrueOrFalse
};
