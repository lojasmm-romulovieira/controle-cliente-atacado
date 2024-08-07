import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout';
import {Head, Link} from "@inertiajs/react";
import TableFlowbite from "@/Components/TableFlowbite.jsx";
import React, {useMemo, useState} from "react";
import {getColorColumnPorClassificacao} from "@/Utils/GetColorColumn.jsx";
import formatarMoedaBR from "@/Utils/FormatarMoedaBR.jsx";
import formatarDataHora from "@/Utils/FormatarDataHora.jsx";
import {ClienteFilter} from "@/Pages/Cliente/Components/Filters/ClienteFilter.jsx";
import {Button, Card} from "flowbite-react";
import {getBadgeClassificacaoCliente, getBadgeSituacaoCliente} from "@/Utils/Badges.jsx";
import {TiPlus} from "react-icons/ti";
import {MdDelete, MdEdit} from "react-icons/md";
import {formatCelular} from "@/Utils/Format.jsx";
import TableRecados from "@/Pages/Cliente/Components/TableRecados.jsx";
import ModalRecadoForm from "@/Pages/Cliente/Components/ModalRecadoForm.jsx";
import {Inertia} from "@inertiajs/inertia";
import {routeNames} from "@/Pages/Cliente/Utils.jsx";

export default function ClienteIndex(props) {
    const {auth, filters, filtersOptions, flash} = props;
    const {clientes, recados} = props;
    const [showModal, setShowModal] = useState(false);

    const handleShowModal = () => {
        setShowModal(true);
    }

    const handlerDelete = (cliente) => {
        if (confirm(`Deseja realmente excluir o cliente ${cliente.razaosocial}? isso excluirá todos os recados, ligacoes e vendas relacionadas a este cliente!`)) {
            Inertia.delete(route(routeNames.clientedestroy, cliente.idcliente));
        }
    }

    const columns = useMemo(() => [
        {
            label: 'CNPJ',
            accessor: 'cnpj',
            isColored: true,
        },
        {
            label: 'RAZAO SOCIAL',
            accessor: 'razaosocial',
        },
        {
            label: 'CIDADE',
            accessor: 'cidade',
        },
        {
            label: 'CONTATO',
            accessor: 'contato',
        },
        {
            label: 'CELULAR',
            accessor: 'celular',
            minWidth: 200,
        },
        {
            label: 'CONDIÇÃO',
            accessor: 'condicao',
            minWidth: 200,
        },
        {
            label: 'LIMITE',
            accessor: 'limite',
            isNumeric: true,
        },
        {
            label: 'Aproveitamento',
            accessor: 'aproveitamento',
            isNumeric: true,
        },
        {
            label: 'Ult.Venda',
            accessor: 'venda',
        },
        {
            label: 'Ult.Lig',
            accessor: 'ultlig',
        },
        {
            label: 'Situação',
            accessor: 'situacao',
        },
        {
            label: '',
            accessor: 'acao',
        }
    ], []);

    const rows = useMemo(() => clientes.data.map(row => ({
        ...row,
        cnpj: row.cnpj,
        razaosocial: <Link className="flex items-center hover:underline"
                           href={route('web.cliente.edit', row.idcliente)}>
            <span className="text-gray-900 font-bold">{row.razaosocial}</span>
            <MdEdit className="w-4 h-4 ms-2"/>
        </Link>,
        cidade: row.cidade ? row.cidade.nome + ' - ' + row.cidade.estado.uf : 'N/A',
        contato: row.nome,
        celular: formatCelular(row.celular),
        condicao: getBadgeClassificacaoCliente(row.classificacao.idclassificacao),
        limite: formatarMoedaBR(row.limitecredito),
        aproveitamento: row.aproveitamento ? row.aproveitamento.toFixed(2) + '%' : 'N/A',
        venda: formatarDataHora(row?.ult_venda?.created_at),
        ultlig: formatarDataHora(row?.ult_lig?.created_at),
        colorColumn: getColorColumnPorClassificacao(row.classificacao.idclassificacao),
        situacao: getBadgeSituacaoCliente(row.ativo),
        acao: <div className="flex items-center">
            <button className="text-red-500">
                <MdDelete className="text-2xl" onClick={() => handlerDelete(row)}/>
            </button>
        </div>
    })), [clientes.data]);

    return (
        <AuthenticatedLayout
            user={auth.user}
            flashMessages={flash}
        >
            <Head title="Cliente"/>

            <Card>
                <div className="flex justify-between items-center ">
                    <nav className="flex" aria-label="Breadcrumb">
                        <ol className="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
                            <li className="inline-flex items-center">
                                <span className="text-4xl text-gray-600">Cliente</span>
                            </li>
                        </ol>
                    </nav>
                    <Button className="bg-gray-600 ml-auto" href={route('web.cliente.create')}>
                        <TiPlus className="w-4 h-4 me-2"/>
                        Novo Cliente
                    </Button>
                    <Button className="bg-gray-600 ml-2" onClick={handleShowModal}>
                        <TiPlus className="w-4 h-4 me-2"/>
                        Novo Recado
                    </Button>
                </div>
                <Card>
                    <p className="text-md text-gray-600 mb-4">
                        Bem-vindo, Vendedor <span className="font-bold">{auth.user.name}</span>, que ótimo ter você
                        aqui! Ao Sistema de Gerenciamento de Clientes.
                    </p>

                    <p className="text-md text-gray-600 mb-4">
                        Bem-vindo ao Sistema de Gerenciamento de Clientes, uma plataforma eficiente e
                        intuitiva para a gestão de clientes e recados, oferecendo funcionalidades robustas para
                        controlar e monitorar suas interações e atividades comerciais. O sistema proporciona uma visão
                        centralizada de todas as mensagens e lembretes relacionados aos clientes, permitindo o
                        acompanhamento do status de cada recado. Além disso, controla o histórico de ligações e o
                        acompanhamento de vendas para cada cliente, garantindo um controle eficiente e organizado das
                        interações comerciais e das atividades de vendas.
                    </p>

                    <p className="text-md text-gray-600">
                        Tem uma ideia para melhorar o sistema? Entre em contato conosco! Estamos sempre em busca de
                        novas ideias e sugestões para aprimorar a experiência do usuário.
                        Contato: <span className="font-bold">whatsapp: (44) 99900-0507 Email: romulo.vieira.dev@gmail.com</span>
                    </p>
                </Card>


                {recados.length > 0 && (
                    <Card className="mb-4">
                        <TableRecados recados={recados}/>
                    </Card>
                )}
                <Card className="mb-4">
                    <ClienteFilter filtersOptions={filtersOptions} filters={filters}/>
                    <TableFlowbite columns={columns} pagination={clientes} rows={rows} filters={filters}
                                   title="Clientes" subtitle="Lista de Clientes"/>
                </Card>
            </Card>
            <ModalRecadoForm show={showModal} onClose={() => setShowModal(false)} filtersOptions={filtersOptions}/>
        </AuthenticatedLayout>
    )
}
