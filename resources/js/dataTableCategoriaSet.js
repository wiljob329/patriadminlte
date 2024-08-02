export const dataTableCategoriaSet = (
    selector,
    opt,
    url,
    selectorInput,
    modal,
) => {
    const categoriaEspTable = selector.DataTable(opt(url));
    selector.children("tbody").on("click", "tr", function () {
        if ($(this).hasClass("selected")) {
            selectorInput.val($.trim($(this).text()));
            $(this).removeClass("selected");
            modal.modal("hide");
        } else {
            categoriaEspTable.$("tr.selected").removeClass("selected");
            $(this).addClass("selected");
        }
    });
};
