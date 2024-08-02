//import { document } from "postcss";
import "./bootstrap";
import { fillForm, fillOptionSelect, isInViewport } from "./utils";
import {
    activoOpt,
    categoriaEspecificaOptUrl,
    marcaOptUrl,
    responsablesActivosOptUrl,
} from "./dataTablesOpt";
import { dataTableActivoSet } from "./dataTableActivoSet";
import { dataTableMarcaSet } from "./dataTableMarcaSet";
import { modalSet } from "./modalSet";

//import Alpine from 'alpinejs';

const Uris = {
    adquisicionurl: "/adquisiciones",
    colorurl: "/color",
    condicionurl: "/condicion",
    marcaurl: "/marcas",
    tipourl: "/tipos",
    estadourl: "/estado",
    monedaurl: "/monedas",
    catespecifica: "/categoriaespecificas",
};
const createMarcaInput = $("#marca");
const createCategoriaEspInput = $("#categoriaesp");
const createResponsableInput = $("#responsable");

$(function () {
    const card = document.querySelector("#card-datatable");
    const createc = document.querySelector("#card-create");
    const catModal = document.querySelector("#categoriaModal");

    if (isInViewport(card)) {
        dataTableActivoSet($(".yajra-datatable"), activoOpt);
    }
    if (isInViewport(createc)) {
        fillOptionSelect($("#adquisicion"), Uris.adquisicionurl);
        fillOptionSelect($("#condicion"), Uris.condicionurl);
        fillOptionSelect($("#color"), Uris.colorurl);
        fillOptionSelect($("#estado"), Uris.estadourl);
        fillOptionSelect($("#tipo"), Uris.tipourl);
        fillOptionSelect($("#moneda"), Uris.monedaurl);
        modalSet(
            $("#marcaModal"),
            Uris.marcaurl,
            $(".yajra-datatable-marca"),
            marcaOptUrl,
            dataTableMarcaSet,
            createMarcaInput,
        );
        // $("#marca").replaceWith(
        //     "<input id='' class='form-control' name='marca' value='' type='text' placeholder='marca' >",
        // );
        modalSet(
            $("#categoriaModal"),
            Uris.catespecifica,
            $(".yajra-datatable-cat"),
            categoriaEspecificaOptUrl,
        );
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
                } else {
                    categoriaEspecificaTable
                        .$("tr.selected")
                        .removeClass("selected");
                    $(this).addClass("selected");
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
            let responsableTable = $(".yajra-datatable-responsable").DataTable(
                responsablesActivosOptUrl(url, createResponsableInput.val()),
            );
            $(".yajra-datatable-responsable tbody").on(
                "click",
                "tr",
                function () {
                    let nombre = $(this.cells)[0].textContent;
                    let cargo = $(this.cells)[1].textContent;
                    let respon = nombre + "-" + cargo;

                    if ($(this).hasClass("selected")) {
                        createResponsableInput.val(nombre);
                        $(this).removeClass("selected");
                        $("#responsableModal").modal("hide");
                    } else {
                        responsableTable
                            .$("tr.selected")
                            .removeClass("selected");
                        $(this).addClass("selected");
                    }
                },
            );
        });
        $("#responsableModal").on("hide.bs.modal", (e) => {
            $(".yajra-datatable-responsable").DataTable().destroy();
            $(".yajra-datatable-responsable tbody").unbind();
        });
    }
});
