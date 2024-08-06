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
import { dataTableCategoriaSet } from "./dataTableCategoriaSet";
import { dataTableResponSet } from "./dataTableResponSet";

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
};
const createMarcaInput = $("#marca");
const createCategoriaEspInput = $("#categoriaesp");
const createResponsableInput = $("#responsable");

$(function () {
    const card = document.querySelector("#card-datatable");
    const createc = document.querySelector("#card-create");

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
        $("#myTab button").on("click", (e) => {
            e.preventDefault();
            console.log($(this));
        });
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
