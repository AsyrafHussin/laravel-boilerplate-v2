// Global Import
window.jQuery = window.$ = require('jquery');
import 'bootstrap';
import Swal from 'sweetalert2';
window.Swal = Swal;
import 'bootstrap-datepicker';

// import module
import Scroll from './modules/scroll.js';

$(document).ready(function() {
  Scroll.init();

  $('.datepicker').datepicker({
    format: "dd/mm/yyyy",
    autoclose: true,
    startDate: new Date()
  });
});
