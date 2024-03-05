import "./bootstrap";

//import Alpine from 'alpinejs';

//window.Alpine = Alpine;

//Alpine.start();

$(function () {
    var table = $(".yajra-datatable").DataTable({
        processing: true,
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
        serverSide: true,
        selected: true,
        responsive: true,
        ajax: "activos",
        // columnDefs: [
        //     {
        //         searchable: true,
        //         orderable: true,
        //         targets: 1,
        //     },
        // ],
        columns: [
            { data: "codigo", name: "codigo" },
            { data: "modelo", name: "modelo" },
            { data: "descripcion", name: "descripcion" },
            { data: "estado", name: "estado" },
            { data: "fecha_adquisicion", name: "fecha_adquisicion" },
            {
                data: "acciones",
                name: "acciones",
                orderable: false,
                searchable: false,
            },
        ],
    });
    $(".yajra-datatable tbody").on("click", "tr", function () {
        if ($(this).hasClass("selected")) {
            $(this).removeClass("selected");
            $(this).stopPropagation();
        } else {
            table.$("tr.selected").removeClass("selected");
            $(this).addClass("selected");
            $(this).stopPropagation();
        }
    });
    $(".yajra-datatable tbody").on("click", "#showActivo", function () {
        let activoURL = $(this).data("url");
        $.get(activoURL, function (data) {
            $("#codigo").val(data.codigo).attr("disabled", "disabled");
            $("#marca").val(data.marca_id).attr("disabled", "disabled");
            $("#modelo").val(data.modelo).attr("disabled", "disabled");
            $("#serial").val(data.serial).attr("disabled", "disabled");
            $("#descripcion")
                .val(data.descripcion)
                .attr("disabled", "disabled");
            $("#condicion").val(data.condicion_id).attr("disabled", "disabled");
            $("#color").val(data.color_id).attr("disabled", "disabled");
            $("#tipo").val(data.tipo_id).attr("disabled", "disabled");
            $("#observacion")
                .val(data.observacion)
                .attr("disabled", "disabled");
            $("#adquisicion")
                .val(data.adquisicion_id)
                .attr("disabled", "disabled");
            $("#fecha_adquisicion")
                .val(data.fecha_adquisicion)
                .attr("disabled", "disabled");
            $("#moneda").val(data.moneda).attr("disabled", "disabled");
            $("#proveedor").val(data.proveedor).attr("disabled", "disabled");
            $("#nro_factura")
                .val(data.nro_factura)
                .attr("disabled", "disabled");
            $("#costo").val(data.costo).attr("disabled", "disabled");
            $("#nro_orden").val(data.nro_orden).attr("disabled", "disabled");
            $("#inicio_garantia")
                .val(data.inicio_garantia)
                .attr("disabled", "disabled");
            $("#fin_garantia")
                .val(data.fin_garantia)
                .attr("disabled", "disabled");
            $("#categoriaesp")
                .val(data.categoriaesp_id)
                .attr("disabled", "disabled");
            $("#asignado").val(data.asignado).attr("disabled", "disabled");
            $("#estado").val(data.estado).attr("disabled", "disabled");
            $("#modalShow").modal("show");
        });
    });
    $(".yajra-datatable tbody").on("click", "#editActivo", function () {
        let activoURL = $(this).data("url");
        $.get(activoURL, function (data) {
            $("h1").text(data.descripcion);
            $("#modalEdit").modal("show");
        });
    });
});
