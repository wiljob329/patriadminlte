export const dataTableCategoriaSet = (
    selector,
    opt,
    url,
    selectorInput,
    modal,
) => {
    const categoriaEspTable = selector.DataTable(
        opt(url, selectorInput.val().slice(-10, -1)),
    );
    selector.children("tbody").on("click", "tr", function () {
        // let codigoCat = $(this).text().substr(-9);
        // let nombreCat = $(this).text().slice(0, -9);
        let codigoCat = $(this).children()[3].innerText;
        let nombreCat = $(this).children()[2].innerText;
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
