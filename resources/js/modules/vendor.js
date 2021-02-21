import jquery from "jquery";
window.jQuery = jquery;
import "bootstrap-datepicker";
import ClassicEditor from "@ckeditor/ckeditor5-build-classic";

/* Initialize library */
class Vendor {
    static init() {
        // init datepicker
        $(".datepicker-nopast").datepicker({
            format: "dd/mm/yyyy",
            autoclose: true,
            startDate: new Date(),
        });
        $(".datepicker").datepicker({
            format: "dd/mm/yyyy",
            autoclose: true,
        });

        // init ckeditor
        if (document.getElementsByClassName("editor").length > 0) {
            ClassicEditor.create(document.querySelector(".editor"), {
                removePlugins: [
                    "CKFinderUploadAdapter",
                    "CKFinder",
                    "EasyImage",
                    "Image",
                    "ImageCaption",
                    "ImageStyle",
                    "ImageToolbar",
                    "ImageUpload",
                    "MediaEmbed",
                ],
            })
                .then((editor) => {
                    console.log(editor);
                })
                .catch((error) => {
                    console.error(error);
                });
        }
    }
}

export default Vendor;
