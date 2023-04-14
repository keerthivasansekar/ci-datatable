$(document).ready(function () {
    $('#example').DataTable({
        serverSide: true,
        processing: true,
        ajax: $(location).attr('origin') + '/employees/list',
    });
});