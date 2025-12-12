import dayjs from 'dayjs'
// Importa el idioma español
import 'dayjs/locale/es'
// Importa el plugin de tiempo relativo
import relativeTime from 'dayjs/plugin/relativeTime'

dayjs.locale('es')
// Extiende dayjs con el plugin de tiempo relativo
dayjs.extend(relativeTime)
export default dayjs
