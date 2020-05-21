$(document).ready( function () {
    
    $(".btn-month").click(function() {
        var value = $(this).val().toLowerCase();
        if (value == 'all') {
            $("#fish-table tbody tr").filter(function() {
                $(this).show();
            });
        } else {
            $("#fish-table tbody tr").filter(function() {
                $(this).hide();
                if($(this).find('.month-' + value).hasClass('month-active')) {
                    $(this).show();
                }
            });
        }
    });

    $(".btn-month").click(function() {
        var value = $(this).val().toLowerCase();
        if (value == 'all') {
            $("#insect-table tbody tr").filter(function() {
                $(this).show();
            });
        } else {
            $("#insect-table tbody tr").filter(function() {
                $(this).hide();
                if($(this).find('.month-' + value).hasClass('month-active')) {
                    $(this).show();
                }
            });
        }
    });
    
    $("#fish-search").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("#fish-table tbody tr").filter(function() {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
    });

    $("#insect-search").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("#insect-table tbody tr").filter(function() {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
    });


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