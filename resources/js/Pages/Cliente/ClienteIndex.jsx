import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout';
import {Head} from "@inertiajs/react";
import TableFlowbite from "@/Components/TableFlowbite.jsx";
import {useMemo} from "react";
import {getColorColumnPorClassificacao} from "@/Utils/GetColorColumn.jsx";
import formatarMoedaBR from "@/Utils/FormatarMoedaBR.jsx";
import formatarDataHora from "@/Utils/FormatarDataHora.jsx";
import {ClienteFilter} from "@/Pages/Cliente/ClienteFilter.jsx";

export default function ClienteIndex(props) {
    const {auth, filters} = props;
    const {clientes} = props;

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
            label: 'FONE',
            accessor: 'fone',
        },
        {
            label: 'STATUS',
            accessor: 'status',
        },
        {
            label: 'LIMITE',
            accessor: 'limite',
        },
        {
            label: 'Ult.Venda',
            accessor: 'venda',
        },
        {
            label: 'Ult.Lig',
            accessor: 'ultlig',
        }
    ], []);


    const rows = useMemo(() => clientes.data.map(row => ({
        ...row,
        cnpj: row.cnpj,
        razaosocial: row.razaosocial,
        cidade: row.cidade.nome + ' - ' + row.cidade.estado.uf,
        contato: row.nome,
        fone: row.fone1,
        status: row.classificacao.descricao,
        limite: formatarMoedaBR(row.limitecredito),
        venda: formatarDataHora(row?.ult_venda?.created_at),
        ultlig: formatarDataHora(row?.ult_lig?.created_at),
        colorColumn: getColorColumnPorClassificacao(row.classificacao.idclassificacao)
    })), [clientes.data]);

    return (
        <AuthenticatedLayout
            user={auth.user}
            header={<h2 className="font-semibold text-xl text-gray-800 leading-tight">Cliente</h2>}
        >
            <Head title="Cliente"/>

            <ClienteFilter filters={filters}/>
            <TableFlowbite columns={columns} pagination={clientes} rows={rows} filters={filters}/>

        </AuthenticatedLayout>
    )
}
