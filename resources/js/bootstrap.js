import lodash from 'lodash'
window._ = lodash

import * as Popper from '@popperjs/core'
window.Popper = Popper

import 'bootstrap'

import axios from 'axios'
window.axios = axios

//window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
window.axios.defaults.withCredentials = true;