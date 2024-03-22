import "./bootstrap";

//import Alpine from 'alpinejs';

const adquisicionurl = "http://localhost:8000/api/adquisiciones";
//window.Alpine = Alpine;
function fillSelect(select, url) {
    $.get(url, function (data) {
        data.map((item) => {
            select.append(
                "<option value=" +
                    item.descripcion +
                    ">" +
                    item.descripcion +
                    "</option>",
            );
        });
    });
}

//Alpine.start();
function fillForm(data, condicion, visual) {
    $("#codigo" + (visual === "show" ? visual : ""))
        .val(data.codigo)
        .attr("disabled", condicion);
    $("#marca" + (visual === "show" ? visual : ""))
        .val(data.marca_id)
        .attr("disabled", condicion);
    $("#modelo" + (visual === "show" ? visual : ""))
        .val(data.modelo)
        .attr("disabled", condicion);
    $("#serial" + (visual === "show" ? visual : ""))
        .val(data.serial)
        .attr("disabled", condicion);
    $("#descripcion" + (visual === "show" ? visual : ""))
        .val(data.descripcion)
        .attr("disabled", condicion);
    $("#condicion" + (visual === "show" ? visual : ""))
        .val(data.condicion_id)
        .attr("disabled", condicion);
    $("#color" + (visual === "show" ? visual : ""))
        .val(data.color_id)
        .attr("disabled", condicion);
    $("#tipo" + (visual === "show" ? visual : ""))
        .val(data.tipo_id)
        .attr("disabled", condicion);
    $("#observacion" + (visual === "show" ? visual : ""))
        .val(data.observacion)
        .attr("disabled", condicion);
    if (condicion) {
        $("#adquisicion" + (visual === "show" ? visual : ""))
            .val(data.actadquisicione.descripcion)
            .attr("disabled", condicion);
    } else {
        fillSelect(
            $("#adquisicion" + (visual === "show" ? visual : "")),
            adquisicionurl,
        );
    }
    $("#fecha_adquisicion" + (visual === "show" ? visual : ""))
        .val(data.fecha_adquisicion)
        .attr("disabled", condicion);
    $("#moneda" + (visual === "show" ? visual : ""))
        .val(data.moneda)
        .attr("disabled", condicion);
    $("#proveedor" + (visual === "show" ? visual : ""))
        .val(data.proveedor)
        .attr("disabled", condicion);
    $("#nro_factura" + (visual === "show" ? visual : ""))
        .val(data.nro_factura)
        .attr("disabled", condicion);
    $("#costo" + (visual === "show" ? visual : ""))
        .val(data.costo)
        .attr("disabled", condicion);
    $("#nro_orden" + (visual === "show" ? visual : ""))
        .val(data.nro_orden)
        .attr("disabled", condicion);
    $("#inicio_garantia" + (visual === "show" ? visual : ""))
        .val(data.inicio_garantia)
        .attr("disabled", condicion);
    $("#fin_garantia" + (visual === "show" ? visual : ""))
        .val(data.fin_garantia)
        .attr("disabled", condicion);
    $("#categoriaesp" + (visual === "show" ? visual : ""))
        .val(data.categoriaesp_id)
        .attr("disabled", condicion);
    $("#asignado" + (visual === "show" ? visual : ""))
        .val(data.asignado)
        .attr("disabled", condicion);
    $("#estado" + (visual === "show" ? visual : ""))
        .val(data.estado)
        .attr("disabled", condicion);
}

$(function () {
    if ($("#card-datatable").length) {
        var table = $(".yajra-datatable").DataTable({
            processing: true,
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
            },
            serverSide: true,
            selected: true,
            responsive: true,
            ajax: "activos",
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
                fillForm(data, true, "show");
                $("#modalShow").modal("show");
            });
        });
        $(".yajra-datatable tbody").on("click", "#editActivo", function () {
            let activoURL = $(this).data("url");
            $.get(activoURL, function (data) {
                fillForm(data, false, "");
                $("#modalEdit").modal("show");
            });
        });
    }
    if ($("#activo_save").length) {
        fillSelect($("#adquisicion"), adquisicionurl);
    }
});
