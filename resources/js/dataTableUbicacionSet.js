export const dataTableUbicacionSet = (
    selector,
    opt,
    url,
    selectorInput,
    modal,
) => {
    const ubicacionTable = selector.DataTable(opt(url, selectorInput.val()));
    selector.children("tbody").on("click", "tr", function () {
        if ($(this).hasClass("selected")) {
            selectorInput.val($.trim($(this).text()));
            $(this).removeClass("selected");
            modal.modal("hide");
        } else {
            ubicacionTable.$("tr.selected").removeClass("selected");
            $(this).addClass("selected");
        }
    });
};
