import axios from 'axios';

axios.defaults.baseURL = import.meta.env.VITE_API_URL || 'https://mp13-g2-tabletap.onrender.com';  // HTTPS
axios.defaults.withCredentials = true;  // Per enviar cookies en les peticions

export default axios;
