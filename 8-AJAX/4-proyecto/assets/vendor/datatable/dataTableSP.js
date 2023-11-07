$(document).ready(function () {
  $("#dt-tbl").DataTable();
});

$.extend(true, $.fn.dataTable.defaults, {
  language: {
    lengthMenu: "Mostrar _MENU_ registros por página",
    zeroRecords: "No se encontraron resultados",
    info: "Mostrado la página _PAGE_ de _PAGES_",
    infoEmpty: "No hay registros disponibles",
    infoFiltered: "(filtrado de _MAX_ registros totales)",
    search: "Buscar:",
    searchPlaceholder: "Ingrese su búsqueda",
    paginate: {
      first: "Primero",
      last: "Último",
      next: "Siguiente",
      previous: "Anterior",
    },
    decimal: ",",
    thousands: ".",
    infoPostFix: "",
    loadingRecords: "Cargando...",
    processing: "Procesando...",
    emptyTable: "Ningún dato disponible en esta tabla",
    aria: {
      sortAscending: ": Activar para ordenar la columna de manera ascendente",
      sortDescending: ": Activar para ordenar la columna de manera descendente",
    },

    //only works for built-in buttons, not for custom buttons
    buttons: {
      create: "Nuevo",
      edit: "Cambiar",
      remove: "Borrar",
      copy: "Copiar",
      csv: "fichero CSV",
      excel: "tabla Excel",
      pdf: "documento PDF",
      print: "Imprimir",
      colvis: "Visibilidad columnas",
      collection: "Colección",
      upload: "Seleccione fichero....",
    },
    select: {
      rows: {
        _: "%d filas seleccionadas",
        0: "clic fila para seleccionar",
        1: "una fila seleccionada",
      },
    },
  },
});
