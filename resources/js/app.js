//import { document } from "postcss";
import "./bootstrap";
import { fillOptionSelect, isInViewport } from "./utils";
import {
    activoOpt,
    categoriaEspecificaOptUrl,
    marcaOptUrl,
    responsablesActivosOptUrl,
    ubicacionOptUrl,
} from "./dataTablesOpt";
import { dataTableActivoSet } from "./dataTableActivoSet";
import { dataTableMarcaSet } from "./dataTableMarcaSet";
import { modalSet } from "./modalSet";
import { dataTableCategoriaSet } from "./dataTableCategoriaSet";
import { dataTableResponSet } from "./dataTableResponSet";
import { dataTableUbicacionSet } from "./dataTableUbicacionSet.js";
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
    responsables: "/responsables",
    ubicacion: "/api/ubicacion",
};
const createMarcaInput = $("#marca");
const createCategoriaEspInput = $("#categoriaesp");
const createResponsableInput = $("#responsable");
const createUbicacionInput = $("#ubicacion");

$(function () {
    const card = document.querySelector("#card-datatable");
    const createc = document.querySelector("#card-create");

    if (isInViewport(card)) {
        dataTableActivoSet($(".yajra-datatable"), activoOpt, Uris);
    }
    if (isInViewport(createc)) {
        // fillOptionSelect($("#adquisicion"), Uris.adquisicionurl);
        // fillOptionSelect($("#condicion"), Uris.condicionurl);
        fillOptionSelect($("#color"), Uris.colorurl);
        // fillOptionSelect($("#estado"), Uris.estadourl);
        fillOptionSelect($("#tipo"), Uris.tipourl);
        // fillOptionSelect($("#moneda"), Uris.monedaurl);
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
            $("#ubicacionModal"),
            Uris.ubicacion,
            $(".datatable-ubicacion"),
            ubicacionOptUrl,
            dataTableUbicacionSet,
            createUbicacionInput,
        );
        modalSet(
            $("#categoriaModal"),
            Uris.catespecifica,
            $(".yajra-datatable-cat"),
            categoriaEspecificaOptUrl,
            dataTableCategoriaSet,
            createCategoriaEspInput,
        );
        modalSet(
            $("#responsableModal"),
            Uris.responsables,
            $(".yajra-datatable-responsable"),
            responsablesActivosOptUrl,
            dataTableResponSet,
            createResponsableInput,
        );
    }
});
