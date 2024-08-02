export const dataTableMarcaSet = (selector, opt, url, selectorInput, modal) => {
    const marcaTable = selector.DataTable(opt(url));
    selector.children("tbody").on("click", "tr", function () {
        if ($(this).hasClass("selected")) {
            selectorInput.val($.trim($(this).text()));
            $(this).removeClass("selected");
            modal.modal("hide");
        } else {
            marcaTable.$("tr.selected").removeClass("selected");
            $(this).addClass("selected");
        }
    });
};
