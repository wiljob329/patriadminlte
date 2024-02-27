//import './bootstrap';

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
        //ajax: "{{ url('activos') }}",
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
            $("h1").text(data.descripcion);
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
