export const activoOpt = {
    processing: true,
    headers: {
        "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
    },
    layout: {
        topStart: {
            buttons: [
                {
                    extend: "pdfHtml5",
                    orientation: "landscape",
                    pageSize: "LEGAL",
                    download: "open",
                    exportOptions: {
                        columns: [0, 1, 2, 3, 4, 6],
                    },
                },
                {
                    extend: "excelHtml5",
                    exportOptions: {
                        columns: [0, 1, 2, 3, 4, 6],
                    },
                },
            ],
        },
    },
    serverSide: true,
    selected: true,
    responsive: true,
    ajax: "activos",
    columns: [
        { data: "codigo_interno", name: "codigo_interno" },
        { data: "modelo", name: "modelo" },
        { data: "descripcion", name: "descripcion" },
        { data: "estado", name: "estado" },
        { data: "fecha_adquisicion", name: "fecha_adquisicion" },
        {
            data: "acciones",
            // name: "acciones",
            orderable: false,
        },
        { data: "serial", visible: false },
    ],
};

export const marcaOptUrl = (url) => {
    return {
        processing: true,
        layout: {
            topStart: "search",
            topEnd: "info",
            bottomStart: "paging",
            bottomEnd: {
                buttons: [
                    {
                        text: "Agregar Marca",
                        action: function (e, dt, node, config) {
                            $("#createModal").modal("show");
                            // dt.ajax.reload();
                        },
                    },
                ],
            },
        },
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
        responsive: true,
        selected: true,
        ajax: url,
        columns: [{ data: "marca" }],
    };
};

export const categoriaEspecificaOptUrl = (url) => {
    return {
        processing: true,
        layout: {
            topStart: "search",
            topEnd: "info",
            bottomStart: "paging",
            bottomEnd: null,
        },
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
        responsive: true,
        selected: true,
        ajax: url,
        columns: [{ data: "nombre" }, { data: "codigo" }],
    };
};

export const responsablesActivosOptUrl = (url, respon = "") => {
    return {
        processing: true,
        layout: {
            topStart: "search",
            topEnd: "info",
            bottomStart: "paging",
            bottomEnd: null,
        },
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
        responsive: true,
        selected: true,
        ajax: url,
        search: {
            search: respon,
        },
        columns: [
            { data: "responsable" },
            { data: "cargo" },
            { data: "division" },
            { data: "gerencia" },
        ],
    };
};
