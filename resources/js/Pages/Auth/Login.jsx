import {useEffect} from 'react';
import {Head, useForm} from '@inertiajs/react';
import {FcBusinessman} from "react-icons/fc";
import InputError from "@/Components/InputError.jsx";
import {toast, ToastContainer} from "react-toastify";

export default function Login({status, canResetPassword, flash}) {
    const {data, setData, post, processing, errors, reset} = useForm({
        email: '',
        password: '',
        remember: false,
    });

    useEffect(() => {
        if (flash) {
            Object.keys(flash).forEach((type) => {
                const message = flash[type];

                if (message) {
                    if (type === 'success') {
                        toast.success(message, {
                            position: "top-center"
                        });
                    } else if (type === 'error') {
                        toast.error(message, {
                            position: "top-center"
                        });
                    } else if (type === 'info') {
                        toast.info(message, {
                            position: "top-center"
                        })
                    } else if (type === 'warning') {
                        toast.warning(message, {
                            position: "top-center"
                        });
                    }
                }
            });
        }
        return () => {
            reset('password');
        };
    }, [flash]);

    const submit = (e) => {
        e.preventDefault();

        post(route('login'));
    };

    return (
        <section className="bg-gray-50">
            <Head title="Login"/>
            <ToastContainer/>

            <div className="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
                <div className="flex items-center mb-6 text-3xl font-bold text-gray-800">
                    <FcBusinessman className="mr-3 text-4xl"/>
                    <span className="tracking-wide">Customer Control</span>
                </div>
                <div
                    className="w-full bg-white rounded-lg shadow md:mt-0 sm:max-w-md xl:p-0">
                    <div className="p-6 space-y-4 md:space-y-6 sm:p-8">
                    <form className="space-y-4 md:space-y-6" onSubmit={submit}>
                            <div>
                                <label htmlFor="email"
                                       className="block mb-2 text-sm font-medium text-gray-900">Email</label>
                                <input type="email" name="email" id="email"
                                       value={data.email}
                                        onChange={(e) => setData('email', e.target.value)}
                                       className="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                                       placeholder="" required=""/>
                                <InputError message={errors.email} className="mt-2" />
                            </div>
                            <div>
                                <label htmlFor="password"
                                       className="block mb-2 text-sm font-medium text-gray-900">Senha</label>
                                <input type="password" name="password" id="password" placeholder=""
                                       value={data.password}
                                       onChange={(e) => setData('password', e.target.value)}
                                       className="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                                       required=""/>
                                <InputError message={errors.password} className="mt-2" />
                            </div>
                            <div className="flex items-center justify-between">
                                <div className="flex items-start">
                                    <div className="flex items-center h-5">
                                        <input id="remember" aria-describedby="remember" type="checkbox"
                                               className="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-primary-300"
                                               required=""/>
                                    </div>
                                    <div className="ml-3 text-sm">
                                        <label htmlFor="remember"
                                               className="text-gray-500">Lembrar</label>
                                    </div>
                                </div>
                            </div>
                            <button type="submit"
                                    className="w-full text-white bg-gray-600 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Logar
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    )
        ;
}
