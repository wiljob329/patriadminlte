export const dataTableResponSet = (
    selector,
    opt,
    url,
    selectorInput,
    modal,
) => {
    const responsableTable = selector.DataTable(opt(url, selectorInput.val()));
    selector.children("tbody").on("click", "tr", function () {
        let nombre = $(this.cells)[0].textContent;
        let cargo = $(this.cells)[1].textContent;
        let respon = nombre + "-" + cargo;

        if ($(this).hasClass("selected")) {
            selectorInput.val(nombre);
            $(this).removeClass("selected");
            modal.modal("hide");
        } else {
            responsableTable.$("tr.selected").removeClass("selected");
            $(this).addClass("selected");
        }
    });
};
