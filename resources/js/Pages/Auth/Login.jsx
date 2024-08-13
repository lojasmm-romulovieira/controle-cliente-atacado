import { useEffect } from 'react'
import { Head, useForm } from '@inertiajs/react'
import { FcBusinessman } from 'react-icons/fc'
import InputError from '@/Components/InputError.jsx'
import { toast, ToastContainer } from 'react-toastify'

export default function Login({ flash }) {
  const { data, setData, post, errors, reset } = useForm({
    email: '',
    password: '',
    remember: false
  })

  useEffect(() => {
    if (flash) {
      Object.keys(flash).forEach((type) => {
        const message = flash[type]

        if (message) {
          if (type === 'success') {
            toast.success(message, {
              position: 'top-center'
            })
          } else if (type === 'error') {
            toast.error(message, {
              position: 'top-center'
            })
          } else if (type === 'info') {
            toast.info(message, {
              position: 'top-center'
            })
          } else if (type === 'warning') {
            toast.warning(message, {
              position: 'top-center'
            })
          }
        }
      })
    }
    return () => {
      reset('password')
    }
  }, [flash])

  const submit = (e) => {
    e.preventDefault()

    post(route('login'))
  }

  return (
    <section className="bg-gray-50">
      <Head title="Login" />
      <ToastContainer />

      <div className="mx-auto flex flex-col items-center justify-center px-6 py-8 md:h-screen lg:py-0">
        <div className="mb-6 flex items-center text-3xl font-bold text-gray-800">
          <FcBusinessman className="mr-3 text-4xl" />
          <span className="tracking-wide">Customer Control</span>
        </div>
        <div className="w-full rounded-lg bg-white shadow sm:max-w-md md:mt-0 xl:p-0">
          <div className="space-y-4 p-6 sm:p-8 md:space-y-6">
            <form className="space-y-4 md:space-y-6" onSubmit={submit}>
              <div>
                <label
                  htmlFor="email"
                  className="mb-2 block text-sm font-medium text-gray-900"
                >
                  Email
                </label>
                <input
                  type="email"
                  name="email"
                  id="email"
                  value={data.email}
                  onChange={(e) => setData('email', e.target.value)}
                  className="focus:ring-primary-600 focus:border-primary-600 block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-gray-900"
                  placeholder=""
                  required=""
                />
                <InputError message={errors.email} className="mt-2" />
              </div>
              <div>
                <label
                  htmlFor="password"
                  className="mb-2 block text-sm font-medium text-gray-900"
                >
                  Senha
                </label>
                <input
                  type="password"
                  name="password"
                  id="password"
                  placeholder=""
                  value={data.password}
                  onChange={(e) => setData('password', e.target.value)}
                  className="focus:ring-primary-600 focus:border-primary-600 block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-gray-900"
                  required=""
                />
                <InputError message={errors.password} className="mt-2" />
              </div>
              <div className="flex items-center justify-between">
                <div className="flex items-start">
                  <div className="flex h-5 items-center">
                    <input
                      id="remember"
                      aria-describedby="remember"
                      type="checkbox"
                      className="focus:ring-3 focus:ring-primary-300 h-4 w-4 rounded border border-gray-300 bg-gray-50"
                      required=""
                    />
                  </div>
                  <div className="ml-3 text-sm">
                    <label htmlFor="remember" className="text-gray-500">
                      Lembrar
                    </label>
                  </div>
                </div>
              </div>
              <button
                type="submit"
                className="hover:bg-primary-700 focus:ring-primary-300 w-full rounded-lg bg-gray-600 px-5 py-2.5 text-center text-sm font-medium text-white focus:outline-none focus:ring-4"
              >
                Logar
              </button>
            </form>
          </div>
        </div>
      </div>
    </section>
  )
}
