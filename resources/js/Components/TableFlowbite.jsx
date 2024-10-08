import PropTypes from 'prop-types'
import { useForm } from '@inertiajs/react'
import { useEffect } from 'react'

export default function TableFlowbite(props) {
  const { columns, pagination, rows, filters, hideSearch, title, subtitle } =
    props

  const { data, setData, get } = useForm({
    search: ''
  })

  useEffect(() => {
    if (filters) {
      const { search } = filters
      data.search = search ?? ''

      setData('search', search)
    }
  }, [filters])

  const handlerSearch = (event) => {
    event.preventDefault()
    get(route('web.cliente.index'), data)
  }

  const getColumnCustomStyles = (column) => ({
    style: {
      minWidth: column.minWidth ?? 'auto',
      textAlign: column.isNumeric ? 'right' : 'left'
    }
  })

  return (
    <div className="relative overflow-x-auto sm:rounded-lg">
      {!hideSearch && (
        <div className="pb-4">
          <form className="ml-auto max-w-lg" onSubmit={handlerSearch}>
            <div className="flex">
              <div className="relative w-full">
                <input
                  type="search"
                  id="search-dropdown"
                  className="z-20 block w-full rounded border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500"
                  placeholder="Contato, Razão Social, Cnpj, Cidade, Estado"
                  onChange={(e) => setData('search', e.target.value)}
                  value={data.search}
                />
                <button
                  type="submit"
                  className="absolute end-0 top-0 h-full rounded-e-lg border border-blue-700 bg-blue-700 p-2.5 text-sm font-medium text-white hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300"
                >
                  <svg
                    className="h-4 w-4"
                    aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 20 20"
                  >
                    <path
                      stroke="currentColor"
                      strokeLinecap="round"
                      strokeLinejoin="round"
                      strokeWidth="2"
                      d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"
                    />
                  </svg>
                  <span className="sr-only">Search</span>
                </button>
              </div>
            </div>
          </form>
        </div>
      )}

      <div className="">
        {title && (
          <h2 className="text-lg font-semibold text-gray-900">{title}</h2>
        )}
        {subtitle && <p className="text-md mb-4 text-gray-500">{subtitle}</p>}
        <table className="w-full text-left text-sm text-gray-500 rtl:text-right">
          <thead className="bg-gray-50 text-xs uppercase text-gray-700">
            <tr>
              {columns.map((column, index) => (
                <th
                  key={index}
                  scope="col"
                  className="px-6 py-3"
                  {...getColumnCustomStyles(column)}
                >
                  {column.label}
                </th>
              ))}
            </tr>
          </thead>
          <tbody>
            {rows.map((row, index) => (
              <tr key={index} className="border-b">
                {columns.map((column, index) => {
                  const isColored = column.isColored
                  const colorColumn = isColored ? row.colorColumn : 'bg-white'

                  return (
                    <td
                      key={index}
                      className={'px-6 py-2 ' + colorColumn}
                      {...getColumnCustomStyles(column)}
                    >
                      {row[column?.accessor]}
                    </td>
                  )
                })}
              </tr>
            ))}
          </tbody>
          <tfoot>
            {rows.length === 0 && (
              <tr>
                <td colSpan={columns.length} className="py-4 text-center">
                  Nenhum registro encontrado
                </td>
              </tr>
            )}
          </tfoot>
        </table>
      </div>
      {pagination !== undefined && (
        <nav
          className="flex-column flex flex-wrap items-center justify-between pt-4 md:flex-row"
          aria-label="Table navigation"
        >
          <span className="text-sm font-normal text-gray-500">
            Exibindo
            <span className="font-semibold text-gray-900">
              {' '}
              {pagination.from} a {pagination.to}
            </span>{' '}
            de{' '}
            <span className="font-semibold text-gray-900">
              {pagination.total} Entradas
            </span>
          </span>
          <ul className="inline-flex h-8 -space-x-px text-sm rtl:space-x-reverse">
            {pagination?.links?.map((link, index) => {
              const isFirst = index === 0
              const isLast = index === pagination.links.length - 1
              const isActive = link.active
              const isDisabled = link.url === null

              let linkClass =
                'flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700'

              if (isFirst) {
                linkClass =
                  'flex items-center justify-center px-3 h-8 ms-0 leading-tight text-gray-500 bg-white border border-gray-300 rounded-s-lg hover:bg-gray-100 hover:text-gray-700'
                link.label = 'Anterior'
              } else if (isLast) {
                linkClass =
                  'flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 rounded-e-lg hover:bg-gray-100 hover:text-gray-700'
                link.label = 'Próximo'
              } else if (isActive) {
                linkClass =
                  'flex items-center justify-center px-3 h-8 text-blue-600 border border-gray-300 bg-blue-50 hover:bg-blue-100 hover:text-blue-700'
              } else if (isDisabled) {
                linkClass += ' opacity-50 cursor-not-allowed'
              }

              return (
                <li key={index}>
                  <a href={link.url || '#'} className={linkClass}>
                    {link.label}
                  </a>
                </li>
              )
            })}
          </ul>
        </nav>
      )}
    </div>
  )
}

TableFlowbite.propTypes = {
  columns: PropTypes.array.isRequired,
  rows: PropTypes.array.isRequired
}

TableFlowbite.defaultProps = {
  hideSearch: true,
  title: 'Nome da Tabela',
  subtitle: 'Descrição da tabela'
}
