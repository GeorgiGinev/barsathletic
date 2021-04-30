import toastr from "toastr";

export function toastrInit() {
    /* Validation Events for changing response CSS classes */
    document.addEventListener('wpcf7invalid', function (event) {
        $('.wpcf7-response-output').hide();
        toastr.error(event.detail.apiResponse.message);
    }, false);
    document.addEventListener('wpcf7spam', function (event) {
        $('.wpcf7-response-output').hide();
        toastr.warning(event.detail.apiResponse.message);
    }, false);
    document.addEventListener('wpcf7mailfailed', function (event) {
        $('.wpcf7-response-output').hide();
        toastr.warning(event.detail.apiResponse.message);
    }, false);
    document.addEventListener('wpcf7mailsent', function (event) {
        $('.wpcf7-response-output').hide();
        toastr.success(event.detail.apiResponse.message);
    }, false);
}