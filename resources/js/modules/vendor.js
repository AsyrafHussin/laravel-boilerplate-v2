import jquery from 'jquery';
window.jQuery = jquery;
import 'bootstrap-datepicker';

/* Initialize library */
class Vendor {
  static init() {
    // init datepicker
    $('.datepicker-nopast').datepicker({
      format: "dd/mm/yyyy",
      autoclose: true,
      startDate: new Date()
    });
    $('.datepicker').datepicker({
      format: "dd/mm/yyyy",
      autoclose: true,
    });
  }
}

export default Vendor;
