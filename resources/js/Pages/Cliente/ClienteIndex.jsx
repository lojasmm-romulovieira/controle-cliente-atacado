import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout';
import {Head} from "@inertiajs/react";
import TableFlowbite from "@/Components/TableFlowbite.jsx";
import {useMemo} from "react";
import {getColorColumnPorClassificacao} from "@/Utils/GetColorColumn.jsx";
import formatarMoedaBR from "@/Utils/FormatarMoedaBR.jsx";
import formatarDataHora from "@/Utils/FormatarDataHora.jsx";
import {ClienteFilter} from "@/Pages/Cliente/ClienteFilter.jsx";
import {Button, Card} from "flowbite-react";
import {getBadgeClassificacaoCliente, getBadgeSituacaoCliente} from "@/Utils/Badges.jsx";
import {TiPlus} from "react-icons/ti";

export default function ClienteIndex(props) {
    const {auth, filters, filtersOptions} = props;
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
        },
        {
            label: 'Situação',
            accessor: 'situacao',
        }
    ], []);


    const rows = useMemo(() => clientes.data.map(row => ({
        ...row,
        cnpj: row.cnpj,
        razaosocial: row.razaosocial,
        cidade: row.cidade.nome + ' - ' + row.cidade.estado.uf,
        contato: row.nome,
        fone: row.fone1,
        status: getBadgeClassificacaoCliente(row.classificacao.idclassificacao),
        limite: formatarMoedaBR(row.limitecredito),
        venda: formatarDataHora(row?.ult_venda?.created_at),
        ultlig: formatarDataHora(row?.ult_lig?.created_at),
        colorColumn: getColorColumnPorClassificacao(row.classificacao.idclassificacao),
        situacao: getBadgeSituacaoCliente(row.ativo),
    })), [clientes.data]);

    return (
        <AuthenticatedLayout
            user={auth.user}
        >
            <Head title="Cliente"/>


            <div className="flex justify-between items-center mb-12">
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
            </div>


            <Card className="mb-4">
                <ClienteFilter filtersOptions={filtersOptions} filters={filters}/>
                <TableFlowbite columns={columns} pagination={clientes} rows={rows} filters={filters}/>
            </Card>
        </AuthenticatedLayout>
    )
}
