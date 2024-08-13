import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout'
import { Head } from '@inertiajs/react'
import { Button, Card } from 'flowbite-react'
import { ClienteForm } from '@/Pages/Cliente/ClienteForm.jsx'
import { routeNames } from '@/Pages/Cliente/Utils.jsx'
import React from 'react'
import { IoReturnUpBack } from 'react-icons/io5'

export default function ClienteCreate(props) {
  const { filtersOptions, auth, flash } = props

  return (
    <AuthenticatedLayout user={auth.user} flashMessages={flash}>
      <Head title="Novo Cliente" />

      <Card>
        <div className="">
          <div className="mb-12 flex items-center justify-between">
            <nav className="flex" aria-label="Breadcrumb">
              <ol className="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
                <li className="inline-flex items-center">
                  <span className="text-2xl text-gray-600 md:text-3xl">
                    Novo Cliente
                  </span>
                </li>
              </ol>
            </nav>
            <Button
              className="ml-auto bg-gray-600"
              href={route(routeNames.clienteindex)}
            >
              <IoReturnUpBack className="me-2 h-4 w-4" />
              Voltar
            </Button>
          </div>

          <ClienteForm filtersOptions={filtersOptions} />
        </div>
      </Card>
    </AuthenticatedLayout>
  )
}
