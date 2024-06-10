//import { document } from "postcss";
import "./bootstrap";

//import Alpine from 'alpinejs';

const adquisicionurl = "http://localhost:8000/api/adquisiciones";
const tipourl = "http://localhost:8000/api/tipos";
const condicionurl = "http://localhost:8000/api/condicion";
const colorurl = "http://localhost:8000/api/color";
const marcaurl = "http://localhost:8000/api/marcas";
const createMarcaInput = $("#marca");

//window.Alpine = Alpine;
function fillSelect(select, url) {
    $(select).find("option").remove().end();
    $.get(url, function (data) {
        data.map((item) => {
            select.append(
                "<option value=" +
                    item.id +
                    ">" +
                    item.descripcion +
                    "</option>",
            );
        });
    });
}
function fillSelect2(select, url) {
    $(select).find("option").remove().end();
    $.get(url, function (data) {
        data.map((item) => {
            select.append(
                "<option value=" + item.id + ">" + item.nombre + "</option>",
            );
        });
    });
}

//Alpine.start();
function fillForm(data, condicion, visual) {
    $("#codigo" + (visual === "show" ? visual : ""))
        .val(data.codigo)
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
    $("#observacion" + (visual === "show" ? visual : ""))
        .val(data.observacion)
        .attr("disabled", condicion);
    if (condicion) {
        $("#adquisicion" + (visual === "show" ? visual : ""))
            .val(data.actadquisicione.descripcion)
            .attr("disabled", condicion);
        $("#tipo" + (visual === "show" ? visual : ""))
            .val(data.act_tipo.nombre)
            .attr("disabled", condicion);
        $("#condicion" + (visual === "show" ? visual : ""))
            .val(data.act_condicion.nombre)
            .attr("disabled", condicion);
        $("#color" + (visual === "show" ? visual : ""))
            .val(data.act_color.descripcion)
            .attr("disabled", condicion);
        $("#marca" + (visual === "show" ? visual : ""))
            .val(data.act_marca.nombre)
            .attr("disabled", condicion);
    } else {
        fillSelect(
            $("#adquisicion" + (visual === "show" ? visual : "")),
            adquisicionurl,
        );
        fillSelect($("#color" + (visual === "show" ? visual : "")), colorurl);

        fillSelect2($("#marca" + (visual === "show" ? visual : "")), marcaurl);
        fillSelect2($("#tipo" + (visual === "show" ? visual : "")), tipourl);
        fillSelect2(
            $("#condicion" + (visual === "show" ? visual : "")),
            condicionurl,
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

function isInViewport(elem) {
    if (elem) {
        var distance = elem.getBoundingClientRect();
        return (
            distance.top <
                (window.innerHeight || document.documentElement.clientHeight) &&
            distance.bottom > 0
        );
    }
}

$(function () {
    const card = document.querySelector("#card-datatable");
    const createc = document.querySelector("#card-create");
    const catModal = document.querySelector("#categoriaModal");

    if (isInViewport(card)) {
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
                // $(this).stopPropagation();
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
    if (isInViewport(createc)) {
        fillSelect($("#adquisicion"), adquisicionurl);
        fillSelect2($("#condicion"), condicionurl);
        fillSelect($("#color"), colorurl);
        fillSelect2($("#tipo"), tipourl);
        // fillSelect2($("#marca"), marcaurl);
        // $("#marca").replaceWith(
        //     "<input id='marcai' class='form-control' name='marca' value='' type='text' placeholder='marca' >",
        // );
    }
    $("#categoriaModal").on("show.bs.modal", (e) => {
        console.log("Modal abierto");
    });
    $("#marcaModal").on("show.bs.modal", (e) => {
        let baseUrl = $("meta[name=app-url]").attr("content");
        let url = baseUrl + "/marcas";
        let marcaTable = $(".yajra-datatable-marca").DataTable({
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
            columns: [{ data: "nombre" }],
        });
        $(".yajra-datatable-marca tbody").on("click", "tr", function () {
            if ($(this).hasClass("selected")) {
                createMarcaInput.val($.trim($(this).text()));
                $(this).removeClass("selected");
                $("#marcaModal").modal("hide");
                // $(this).stopPropagation();
            } else {
                marcaTable.$("tr.selected").removeClass("selected");
                $(this).addClass("selected");
                // $(this).stopPropagation();
            }
        });
    });
    $("#marcaModal").on("hide.bs.modal", (e) => {
        $(".yajra-datatable-marca").DataTable().destroy();
        $(".yajra-datatable-marca tbody").unbind();
    });
});
