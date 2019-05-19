import jquery from 'jquery';
window.jQuery = jquery;

/* Initialize library */
class Vendor {
  static init() {
    $('.datepicker').datepicker({
      format: "dd/mm/yyyy",
      autoclose: true,
      startDate: new Date()
    });
  }
}

export default Vendor;
