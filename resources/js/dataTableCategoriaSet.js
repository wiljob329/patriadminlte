export const dataTableCategoriaSet = (
    selector,
    opt,
    url,
    selectorInput,
    modal,
) => {
    const categoriaEspTable = selector.DataTable(opt(url));
    selector.children("tbody").on("click", "tr", function () {
        let codigoCat = $(this).text().substr(-9);
        let nombreCat = $(this).text().slice(0, -9);
        if ($(this).hasClass("selected")) {
            selectorInput.val(nombreCat + " (" + codigoCat + ")");
            $(this).removeClass("selected");
            modal.modal("hide");
        } else {
            categoriaEspTable.$("tr.selected").removeClass("selected");
            $(this).addClass("selected");
        }
    });
};
