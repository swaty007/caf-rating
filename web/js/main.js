$(document).ready( function () {
    $('#table_pm').DataTable({
        "searching": false,
        "lengthMenu": [ [10, 25, 50, -1], [10, 25, 50, "All"] ],
        "pagingType": "numbers",
    });
} );