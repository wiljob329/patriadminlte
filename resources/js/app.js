//import { document } from "postcss";
import "./bootstrap";
import { fillOptionSelect, isInViewport } from "./utils";
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
        dataTableActivoSet($(".yajra-datatable"), activoOpt, Uris);
    }
    if (isInViewport(createc)) {
        fillOptionSelect($("#adquisicion"), Uris.adquisicionurl);
        fillOptionSelect($("#condicion"), Uris.condicionurl);
        fillOptionSelect($("#color"), Uris.colorurl);
        fillOptionSelect($("#estado"), Uris.estadourl);
        fillOptionSelect($("#tipo"), Uris.tipourl);
        fillOptionSelect($("#moneda"), Uris.monedaurl);
        $("#myTab button").on("shown.bs.tab", (e) => {
            e.target.classList.add("bg-primary");
            e.relatedTarget.classList.remove("bg-primary");
            if (e.target.dataset.target === "#card-create-vehiculo") {
                fillOptionSelect($("#adquisicion-vehi"), Uris.adquisicionurl);
                fillOptionSelect($("#condicion-vehi"), Uris.condicionurl);
                fillOptionSelect($("#color-vehi"), Uris.colorurl);
                fillOptionSelect($("#estado-vehi"), Uris.estadourl);
                fillOptionSelect($("#tipo-vehi"), Uris.tipourl);
                fillOptionSelect($("#moneda-vehi"), Uris.monedaurl);
            }
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
