import PropTypes from 'prop-types'
import {useForm} from "@inertiajs/react";
import {useEffect} from "react";

export default function TableFlowbite(props) {
    const {columns, pagination, rows, filters} = props;

    const {data, setData, get} = useForm({
        search: ''
    });

    useEffect(() => {
        if (filters) {
            const {search} = filters;
            data.search = search ?? '';

            setData('search', search);
        }
    }, [filters]);

    const handlerSearch = (event) => {
        event.preventDefault();
        get(route('web.cliente.index'), data);
    }

    return (
        <div className="relative overflow-x-auto sm:rounded-lg">

            <div className="pb-4">
                <form className="max-w-lg ml-auto" onSubmit={handlerSearch}>
                    <div className="flex">
                        <div className="relative w-full">
                            <input
                                type="search"
                                id="search-dropdown"
                                className="block p-2.5 w-full z-20 text-sm text-gray-900 bg-gray-50 rounded border border-gray-300 focus:ring-blue-500 focus:border-blue-500"
                                placeholder="Contato, Razão Social, Cnpj, Cidade, Estado"
                                onChange={e => setData('search', e.target.value)}
                                value={data.search}
                            />
                            <button
                                type="submit"
                                className="absolute top-0 end-0 p-2.5 text-sm font-medium h-full text-white bg-blue-700 rounded-e-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300"
                            >
                                <svg
                                    className="w-4 h-4"
                                    aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg"
                                    fill="none"
                                    viewBox="0 0 20 20"
                                >
                                    <path
                                        stroke="currentColor"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="2"
                                        d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"
                                    />
                                </svg>
                                <span className="sr-only">Search</span>
                            </button>
                        </div>
                    </div>
                </form>
            </div>

            <table className="w-full text-sm text-left rtl:text-right text-gray-500">
                <thead
                    className="text-xs text-gray-700 uppercase bg-gray-50">
                <tr>
                    {columns.map((column, index) => (
                        <th key={index} scope="col" className="px-6 py-3">
                            {column.label}
                        </th>
                    ))}
                </tr>
                </thead>
                <tbody>
                {rows.map((row, index) => (
                    <tr key={index}
                        className="border-b">
                        {columns.map((column, index) => {
                            const isColored = column.isColored;
                            const colorColumn = isColored ? row.colorColumn : 'bg-white';

                            return (
                                <td key={index} className={"px-6 py-2 " + colorColumn}>
                                    {row[column?.accessor]}
                                </td>
                            )
                        })}

                    </tr>
                ))}
                </tbody>
            </table>
            <nav className="flex items-center flex-column flex-wrap md:flex-row justify-between pt-4"
                 aria-label="Table navigation">
                        <span
                            className="text-sm font-normal text-gray-500">Exibindo<span
                            className="font-semibold text-gray-900"> {pagination.from} a {pagination.to}</span> de <span
                            className="font-semibold text-gray-900">{pagination.total} Entradas</span>
                        </span>
                <ul className="inline-flex -space-x-px rtl:space-x-reverse text-sm h-8">

                    {pagination?.links?.map((link, index) => {
                        const isFirst = index === 0;
                        const isLast = index === pagination.links.length - 1;
                        const isActive = link.active;
                        const isDisabled = link.url === null;

                        let linkClass = "flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700";

                        if (isFirst) {
                            linkClass = "flex items-center justify-center px-3 h-8 ms-0 leading-tight text-gray-500 bg-white border border-gray-300 rounded-s-lg hover:bg-gray-100 hover:text-gray-700";
                            link.label = "Anterior";
                        } else if (isLast) {
                            linkClass = "flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 rounded-e-lg hover:bg-gray-100 hover:text-gray-700";
                            link.label = "Próximo";
                        } else if (isActive) {
                            linkClass = "flex items-center justify-center px-3 h-8 text-blue-600 border border-gray-300 bg-blue-50 hover:bg-blue-100 hover:text-blue-700";
                        } else if (isDisabled) {
                            linkClass += " opacity-50 cursor-not-allowed";
                        }

                        return (
                            <li key={index}>
                                <a
                                    href={link.url || '#'}
                                    className={linkClass}
                                >
                                    {link.label}
                                </a>
                            </li>
                        );
                    })}
                </ul>
            </nav>
        </div>
    )
}

TableFlowbite.propTypes = {
    columns: PropTypes.array.isRequired,
    pagination:
    PropTypes.object.isRequired,
    rows:
    PropTypes.array.isRequired,
}
