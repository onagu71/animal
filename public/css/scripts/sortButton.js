$(document).ready( function () {
    $('#fish-table').DataTable({
        lengthChange: false,
        searching: false,
        info: false,
        paging: false,
        responsive: true
    });
    $('th').click(function(){
        if($(this).hasClass("sorting_asc")) {
            $('.th-sort').children('span').attr('class', 'fa fa-sort')
            $(this).children('span').attr('class', 'fa fa-sort-down')
        } else {
            $('.th-sort').children('span').attr('class', 'fa fa-sort')
            $(this).children('span').attr('class', 'fa fa-sort-up')
        }
    })

    $('#insect-table').DataTable({
        lengthChange: false,
        searching: false,
        info: false,
        paging: false,
        responsive: true
    });
    $('th').click(function(){
        if($(this).hasClass("sorting_asc")) {
            $('.th-sort').children('span').attr('class', 'fa fa-sort')
            $(this).children('span').attr('class', 'fa fa-sort-down')
        } else {
            $('.th-sort').children('span').attr('class', 'fa fa-sort')
            $(this).children('span').attr('class', 'fa fa-sort-up')
        }
    })
  });