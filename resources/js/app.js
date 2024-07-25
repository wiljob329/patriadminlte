//import { document } from "postcss";
import "./bootstrap";
import { fillForm, fillOptionSelect, isInViewport } from "./utils";
import {
    activoOpt,
    categoriaEspecificaOptUrl,
    marcaOptUrl,
    responsablesActivosOptUrl,
} from "./dataTablesOpt";

//import Alpine from 'alpinejs';

const Uris = {
    adquisicionurl: "/adquisiciones",
    colorurl: "/color",
    condicionurl: "/condicion",
    marcaurl: "/marcas",
    tipourl: "/tipos",
    estadourl: "/estado",
    monedaurl: "/monedas",
};
const createMarcaInput = $("#marca");
const createCategoriaEspInput = $("#categoriaesp");

$(function () {
    const card = document.querySelector("#card-datatable");
    const createc = document.querySelector("#card-create");
    const catModal = document.querySelector("#categoriaModal");

    if (isInViewport(card)) {
        var table = $(".yajra-datatable").DataTable(activoOpt);
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
        fillOptionSelect($("#adquisicion"), Uris.adquisicionurl);
        fillOptionSelect($("#condicion"), Uris.condicionurl);
        fillOptionSelect($("#color"), Uris.colorurl);
        fillOptionSelect($("#estado"), Uris.estadourl);
        fillOptionSelect($("#tipo"), Uris.tipourl);
        fillOptionSelect($("#moneda"), Uris.monedaurl);
        // $("#marca").replaceWith(
        //     "<input id='' class='form-control' name='marca' value='' type='text' placeholder='marca' >",
        // );
        $("#marcaModal").on("show.bs.modal", (e) => {
            let baseUrl = $("meta[name=app-url]").attr("content");
            let url = baseUrl + "/marcas";
            let marcaTable = $(".yajra-datatable-marca").DataTable(
                marcaOptUrl(url),
            );
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
        $("#categoriaModal").on("show.bs.modal", (e) => {
            let baseUrl = $("meta[name=app-url]").attr("content");
            let url = baseUrl + "/categoriaespecificas";
            let categoriaEspecificaTable = $(".yajra-datatable-cat").DataTable(
                categoriaEspecificaOptUrl(url),
            );
            $(".yajra-datatable-cat tbody").on("click", "tr", function () {
                let codigoCat = $(this).text().substr(-9);
                let nombreCat = $(this).text().slice(0, -9);
                if ($(this).hasClass("selected")) {
                    createCategoriaEspInput.val(
                        nombreCat + " (" + codigoCat + ")",
                    );
                    $(this).removeClass("selected");
                    $("#categoriaModal").modal("hide");
                    // $(this).stopPropagation();
                } else {
                    categoriaEspecificaTable
                        .$("tr.selected")
                        .removeClass("selected");
                    $(this).addClass("selected");
                    // $(this).stopPropagation();
                }
            });
        });
        $("#categoriaModal").on("hide.bs.modal", (e) => {
            $(".yajra-datatable-cat").DataTable().destroy();
            $(".yajra-datatable-cat tbody").unbind();
        });
        $("#responsableModal").on("show.bs.modal", (e) => {
            let baseUrl = $("meta[name=app-url]").attr("content");
            let url = baseUrl + "/responsables";
            let categoriaEspecificaTable = $(
                ".yajra-datatable-responsable",
            ).DataTable(responsablesActivosOptUrl(url));
            $(".yajra-datatable-cat tbody").on("click", "tr", function () {
                let codigoCat = $(this).text().substr(-9);
                let nombreCat = $(this).text().slice(0, -9);
                if ($(this).hasClass("selected")) {
                    createCategoriaEspInput.val(
                        nombreCat + " (" + codigoCat + ")",
                    );
                    $(this).removeClass("selected");
                    $("#categoriaModal").modal("hide");
                    // $(this).stopPropagation();
                } else {
                    categoriaEspecificaTable
                        .$("tr.selected")
                        .removeClass("selected");
                    $(this).addClass("selected");
                    // $(this).stopPropagation();
                }
            });
        });
    }
});
