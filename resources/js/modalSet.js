export const modalSet = (
    selector,
    uri,
    selectorDatatable,
    opt,
    dataTableSet,
    input,
) => {
    selector
        .on("show.bs.modal", (e) => {
            let baseUrl = $("meta[name=app-url]").attr("content");
            let url = baseUrl + uri;
            dataTableSet(selectorDatatable, opt, url, input, selector);
        })
        .on("hide.bs.modal", (e) => {
            selectorDatatable.DataTable().destroy();
            selectorDatatable.children("tbody").unbind();
            // selectorDatatable.empty();
        });
};
