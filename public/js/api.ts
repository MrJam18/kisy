
// @ts-ignore
import axios from "axios";
export const api = axios;
api.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';