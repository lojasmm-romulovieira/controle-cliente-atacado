import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout';
import {Head} from "@inertiajs/react";
import {ClienteForm} from "@/Pages/Cliente/ClienteForm.jsx";
import React, {useMemo, useState} from "react";
import TableFlowbite from "@/Components/TableFlowbite.jsx";
import {IoAdd, IoHappyOutline, IoReturnUpBack, IoSadOutline} from "react-icons/io5";
import {MdDelete} from "react-icons/md";
import formatarDataHora from "@/Utils/FormatarDataHora.jsx";
import {FaPhoneSlash, FaPhoneVolume} from "react-icons/fa";
import {Cell, Pie, PieChart, Tooltip} from 'recharts';
import ModalHistoricoLigacaoForm from "@/Pages/Cliente/Components/ModalHistoricoLigacaoForm.jsx";
import {routeNames} from "@/Pages/Cliente/Utils.jsx";
import {Inertia} from "@inertiajs/inertia";
import {Button, Card} from "flowbite-react";

export default function ClienteCreate(props) {
    const {filtersOptions, auth, flash, cliente} = props;
    const [showModal, setShowModal] = useState(false);
    const COLORS = ['blue', 'red'];

    const dataDashboard = [{name: 'Aproveitamento', value: parseFloat(cliente?.aproveitamento)}, {
        name: 'Não fez Venda',
        value: parseFloat(cliente?.nao_aproveitamento)
    }];

    const handleShowModal = () => {
        setShowModal(true);

    }

    const handlerDelete = (idhistoricoligacao) => {
        if (confirm('Deseja realmente excluir este registro?')) {
            Inertia.delete(route(routeNames.historicoligacaodestroy, idhistoricoligacao));
        }
    }

    const columns = useMemo(() => [{
        label: 'Data e Hora da Ligação', accessor: 'datahora',
    }, {
        label: 'Atendeu Ligação', accessor: 'atendeuli',
    }, {
        label: 'Ação', accessor: 'acao',
    }]);


    const rows = useMemo(() => cliente?.historicoligacao.map(row => ({
        ...row,
        datahora: <div className="flex items-center">
            {row.fezpedido ? <IoHappyOutline className="text-2xl text-green-500 mr-2"/> :
                <IoSadOutline className="text-2xl text-red-500 mr-2"/>}
            <span>{formatarDataHora(row.created_at)} - {row.observacao} - {row.fezpedido ? 'Fez Pedido' : 'Não Fez Pedido'}</span>
        </div>,
        atendeuli: row.atendeuligacao ? <FaPhoneVolume className="text-2xl text-green-500"/> :
            <FaPhoneSlash className="text-2xl text-red-500"/>,
        acao: <div className="flex items-center">
            <button className="text-red-500">
                <MdDelete className="text-2xl" onClick={() => handlerDelete(row.idhistoricoligacao)}/>
            </button>
        </div>
    })), [cliente?.historicoligacao]);

    return (<AuthenticatedLayout
            user={auth.user}
            flashMessages={flash}
        >
            <Head title="Novo Cliente"/>
            <Card>

                <div className="flex justify-between items-center mb-12">
                    <nav className="flex" aria-label="Breadcrumb">
                        <ol className="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
                            <li className="inline-flex items-center">
                                <span className="text-4xl text-gray-600">Cliente</span>
                            </li>
                        </ol>
                    </nav>
                    <Button className="bg-gray-600 ml-auto" href={route(routeNames.clienteindex)}>
                        <IoReturnUpBack className="w-4 h-4 me-2"/>
                        Voltar
                    </Button>
                </div>

                <div className="grid grid-cols-2 gap-20">
                    <ClienteForm filtersOptions={filtersOptions} cliente={cliente}/>
                    <div>

                        <TableFlowbite columns={columns} rows={rows} title={<div className="flex items-center">
                            <h2 className="text-lg font-semibold text-gray-900">Histórico de Ligação</h2>
                            <button className="text-white ms-auto rounded-full bg-gray-600 p-2"
                                    onClick={handleShowModal}>
                                <IoAdd className="text-2xl"/>
                            </button>
                        </div>}
                                       subtitle={`Ultima Ligação: ${formatarDataHora(cliente?.ult_lig?.created_at)}`}
                        />

                        {cliente?.historicoligacao.length > 0 && (<>
                                <h2 className="text-lg font-semibold text-gray-900 mt-10">Aproveitamento de Ligação</h2>
                                <PieChart width={800} height={400}>
                                    <Pie
                                        data={dataDashboard}
                                        cx="50%"
                                        cy="50%"
                                        outerRadius={150}
                                        fill="#8884d8"
                                        dataKey="value"
                                        label={({name, percent}) => `${name} ${(percent * 100).toFixed(0)}%`}
                                    >
                                        {dataDashboard.map((entry, index) => (
                                            <Cell key={`cell-${index}`} fill={COLORS[index % COLORS.length]}/>))}
                                    </Pie>
                                    <Tooltip/>
                                </PieChart>
                            </>)}
                    </div>
                </div>

                <ModalHistoricoLigacaoForm show={showModal} onClose={() => setShowModal(false)} cliente={cliente}/>
            </Card>
        </AuthenticatedLayout>)
}
