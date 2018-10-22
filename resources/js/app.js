// Global Import
window.jQuery = window.$ = require('jquery');
import 'bootstrap';
import swal from 'sweetalert2';
window.swal = swal;

// import module
import Scroll from './modules/scroll.js';

$(document).ready(function() {
  Scroll.init();
});
