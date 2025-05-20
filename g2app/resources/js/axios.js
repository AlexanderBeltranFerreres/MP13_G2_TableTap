import axios from 'axios';

const baseURL = (import.meta.env.VITE_API_URL || 'https://localhost:8000') + '/api';

axios.defaults.baseURL = baseURL;
axios.defaults.withCredentials = true;  // si fas servir sessions/cookies

export default axios;
