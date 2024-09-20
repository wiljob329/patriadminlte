export function fillOptionSelect(select, afterUrl) {
    let beforeUrl = "/api";
    let url = beforeUrl + afterUrl;
    $(select).find("option").remove().end();
    select.append(
        "<option value='' selected disabled hidden >Seleccionar</option>",
    );
    if (afterUrl === "/adquisiciones") {
        $.get(url, function (data) {
            data.map((item) => {
                select.append(
                    "<option value=" +
                        item.id +
                        ">" +
                        item.adquisicion +
                        "</option>",
                );
            });
        });
    }
    if (afterUrl === "/condicion") {
        $.get(url, function (data) {
            data.map((item) => {
                select.append(
                    "<option value=" +
                        item.id +
                        ">" +
                        item.condicion +
                        "</option>",
                );
            });
        });
    }
    if (afterUrl === "/color") {
        $.get(url, function (data) {
            data.map((item) => {
                select.append(
                    "<option value=" + item.id + ">" + item.color + "</option>",
                );
            });
        });
    }
    if (afterUrl === "/estado") {
        $.get(url, function (data) {
            data.map((item) => {
                select.append(
                    "<option value=" +
                        item.id +
                        ">" +
                        item.estado +
                        "</option>",
                );
            });
        });
    }
    if (afterUrl === "/tipos") {
        $.get(url, function (data) {
            data.map((item) => {
                select.append(
                    "<option value=" + item.id + ">" + item.tipo + "</option>",
                );
            });
        });
    }
    if (afterUrl === "/monedas") {
        $.get(url, function (data) {
            data.map((item) => {
                select.append(
                    "<option value=" +
                        item.id +
                        ">" +
                        item.moneda +
                        "</option>",
                );
            });
        });
    }
}

//funcion para chequear y colocar datos en el formulario
export function fillForm(data, condicion, visual, uris) {
    $("#codigo" + (visual === "show" ? visual : ""))
        .val(data.codigo_interno)
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
            .val(data.forma_adquisicion.adquisicion)
            .attr("disabled", condicion);
        $("#tipo" + (visual === "show" ? visual : ""))
            .val(data.tipo_activo.tipo)
            .attr("disabled", condicion);
        $("#condicion" + (visual === "show" ? visual : ""))
            .val(data.condicion_fisica.condicion)
            .attr("disabled", condicion);
        $("#color" + (visual === "show" ? visual : ""))
            .val(data.color.color)
            .attr("disabled", condicion);
        $("#marca" + (visual === "show" ? visual : ""))
            .val(data.marca.marca)
            .attr("disabled", condicion);
    } else {
        fillOptionSelect(
            $("#adquisicion" + (visual === "show" ? visual : "")),
            uris.adquisicionurl,
        );
        fillOptionSelect(
            $("#color" + (visual === "show" ? visual : "")),
            uris.colorurl,
        );

        fillOptionSelect(
            $("#marca" + (visual === "show" ? visual : "")),
            uris.marcaurl,
        );
        fillOptionSelect(
            $("#tipo" + (visual === "show" ? visual : "")),
            uris.tipourl,
        );
        fillOptionSelect(
            $("#condicion" + (visual === "show" ? visual : "")),
            uris.condicionurl,
        );
    }
    $("#fecha_adquisicion" + (visual === "show" ? visual : ""))
        .val(data.fecha_adquisicion)
        .attr("disabled", condicion);
    $("#moneda" + (visual === "show" ? visual : ""))
        // .val(data.moneda)
        .val("BS")
        .attr("disabled", condicion);
    $("#proveedor" + (visual === "show" ? visual : ""))
        .val(data.proveedor)
        .attr("disabled", condicion);
    $("#nro_factura" + (visual === "show" ? visual : ""))
        .val(data.nro_documento_factura)
        .attr("disabled", condicion);
    $("#costo" + (visual === "show" ? visual : ""))
        // .val(data.costo)
        .val("2222")
        .attr("disabled", condicion);
    $("#nro_orden" + (visual === "show" ? visual : ""))
        .val(data.nro_orden_pago)
        .attr("disabled", condicion);
    $("#inicio_garantia" + (visual === "show" ? visual : ""))
        .val(data.inicio_garantia)
        .attr("disabled", condicion);
    $("#fin_garantia" + (visual === "show" ? visual : ""))
        .val(data.fin_garantia)
        .attr("disabled", condicion);
    $("#categoriaesp" + (visual === "show" ? visual : ""))
        .val(data.categoria_especifica.nombre)
        .attr("disabled", condicion);
    $("#asignado" + (visual === "show" ? visual : ""))
        .val("Si")
        .attr("disabled", condicion);
    $("#estado" + (visual === "show" ? visual : ""))
        .val(data.estado_activo.estado)
        .attr("disabled", condicion);
}

// funcion para revisar si el elemento existe o no en el viewport
export function isInViewport(elem) {
    if (elem) {
        var distance = elem.getBoundingClientRect();
        return (
            distance.top <
                (window.innerHeight || document.documentElement.clientHeight) &&
            distance.bottom > 0
        );
    }
}
