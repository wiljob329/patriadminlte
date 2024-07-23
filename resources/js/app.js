//import { document } from "postcss";
import "./bootstrap";
import {
    fillSelect,
    fillSelect2,
    fillForm,
    isInViewport,
    fillSelectEstado,
} from "./utils";

//import Alpine from 'alpinejs';

const Uris = {
    adquisicionurl: "http://localhost:8000/api/adquisiciones",
    colorurl: "http://localhost:8000/api/color",
    marcaurl: "http://localhost:8000/api/marcas",
    tipourl: "http://localhost:8000/api/tipos",
    condicionurl: "http://localhost:8000/api/condicion",
    estadourl: "http://localhost:8000/api/estado",
};
const createMarcaInput = $("#marca");

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
                fillForm(data, true, "show", Uris);
                $("#modalShow").modal("show");
            });
        });
        $(".yajra-datatable tbody").on("click", "#editActivo", function () {
            let activoURL = $(this).data("url");
            $.get(activoURL, function (data) {
                fillForm(data, false, "", Uris);
                $("#modalEdit").modal("show");
            });
        });
    }
    if (isInViewport(createc)) {
        fillSelect($("#adquisicion"), Uris.adquisicionurl);
        fillSelect2($("#condicion"), Uris.condicionurl);
        fillSelect($("#color"), Uris.colorurl);
        fillSelect2($("#tipo"), Uris.tipourl);
        fillSelectEstado($("#estado"), Uris.estadourl);
        // fillSelect2($("#marca"), marcaurl);
        // $("#marca").replaceWith(
        //     "<input id='' class='form-control' name='marca' value='' type='text' placeholder='marca' >",
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
            columns: [{ data: "marca" }],
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
