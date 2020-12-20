// Global Import
window.jQuery = window.$ = require("jquery");
import "bootstrap";
import Swal from "sweetalert2";
window.Swal = Swal;

// import module
import { Scroll, Vendor } from "./modules";

jQuery(function () {
    Vendor.init();
    Scroll.init();
});
