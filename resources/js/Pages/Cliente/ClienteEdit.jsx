import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout';
import {Head} from "@inertiajs/react";
import {ClienteForm} from "@/Pages/Cliente/ClienteForm.jsx";

export default function ClienteCreate(props) {
    const {filtersOptions, auth, flash, cliente} = props;

    return (
        <AuthenticatedLayout
            user={auth.user}
            flashMessages={flash}
        >
            <Head title="Novo Cliente"/>

            <div className="container">
                <div className="flex justify-between items-center mb-12">
                    <nav className="flex" aria-label="Breadcrumb">
                        <ol className="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
                            <li className="inline-flex items-center">
                                <span className="text-4xl text-gray-600">Editar Cliente</span>
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>

            <div className="grid grid-cols-2 gap-4">
                <ClienteForm filtersOptions={filtersOptions} cliente={cliente}/>
            </div>
        </AuthenticatedLayout>
    )
}
