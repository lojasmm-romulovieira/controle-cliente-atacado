const A = 1
const B = 2
const C = 3
const EM_PROSPECCAO = 4

const getColorColumnPorClassificacao = (value) => {
  switch (value) {
    case A:
      return 'bg-green-600 text-white'
    case B:
      return 'bg-yellow-500 text-white'
    case C:
      return 'bg-red-600 text-white'
    case EM_PROSPECCAO:
      return 'bg-blue-600 text-white'
    default:
      return 'bg-gray-600 text-white'
  }
}

export { getColorColumnPorClassificacao }
