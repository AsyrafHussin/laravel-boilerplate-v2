// Global Import
import jquery from 'jquery';
window.jQuery = jquery;
window.$ = jquery;
window.jquery = jquery;
import 'bootstrap';
import swal from 'sweetalert2';
window.swal = swal;

// import module
import Scroll from './modules/scroll.js';

$(document).ready(function() {
  Scroll.init();
});
