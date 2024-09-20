import { fillForm } from "./utils.js";
export const dataTableActivoSet = (selector, opt, Uris) => {
    const table = selector.DataTable(opt);
    selector.children("tbody").on("click", "tr", function () {
        if ($(this).hasClass("selected")) {
            $(this).removeClass("selected");
        } else {
            table.$("tr.selected").removeClass("selected");
            $(this).addClass("selected");
            let data = table.row(".selected").data();
            delete data.acciones;
            fillForm(data, true, "show", Uris);
            $("#modalShow").modal("show");
            console.log(data);
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
    $("#deleteRow").on("click", () => {
        console.log(table.row(".selected").data());
        // table.row(".selected").remove().draw();
    });
    // console.log(table.column(2).visible(false));
};
