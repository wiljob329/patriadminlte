export const dataTableActivoSet = (selector, opt) => {
    const table = selector.DataTable(opt);
    selector.children("tbody").on("click", "tr", function () {
        if ($(this).hasClass("selected")) {
            $(this).removeClass("selected");
        } else {
            table.$("tr.selected").removeClass("selected");
            $(this).addClass("selected");
        }
    });
    selector.children("tbody").on("click", "#showActivo", function () {
        let activoURL = $(this).data("url");
        $.get(activoURL, function (data) {
            fillForm(data, true, "show", Uris);
            $("#modalShow").modal("show");
        });
    });
    selector.children("tbody").on("click", "#editActivo", function () {
        let activoURL = $(this).data("url");
        $.get(activoURL, function (data) {
            fillForm(data, false, "", Uris);
            $("#modalEdit").modal("show");
        });
    });
};
