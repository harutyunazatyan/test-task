$(document).ready(function () {

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $(document).on('click', '.numb', function () {

        const data_sort = $('.sorted').attr('data-sort');
        let sort_type = 'ASC';


        if ($('.sorted').hasClass('sort_desc')) {
            sort_type = 'DESC';
        }

        const page = $(this).attr('data-page');
        const _token = $('meta[name="csrf-token"]').attr('content');

        let data = {
            page,
            _token
        }

        if (data_sort) {
            data = {
                ...data, ...{
                    sort_type,
                    data_sort
                }
            }
        }

        $.ajax({
            url: "/paginate",
            type: "POST",
            data,
            success: function (response) {
                $('.tbody').html(response);
            },
        });
    })

    $(document).on('click', '.sort_asc', function () {
        $('.sort_asc').removeClass('sorted');
        $('.sort_desc').removeClass('sorted');
        $(this).addClass('sorted');
        const data_sort = $(this).attr('data-sort');
        const _token = $('meta[name="csrf-token"]').attr('content');
        $.ajax({
            url: "/paginate",
            type: "POST",
            data: {
                page: 1,
                data_sort,
                sort_type: 'ASC',
                _token
            },
            success: function (response) {
                $('.tbody').html(response);

            },
        });
    })

    $(document).on('click', '.sort_desc', function () {
        $('.sort_asc').removeClass('sorted');
        $('.sort_desc').removeClass('sorted');
        $(this).addClass('sorted');
        const data_sort = $(this).attr('data-sort');
        const _token = $('meta[name="csrf-token"]').attr('content');
        $.ajax({
            url: "/paginate",
            type: "POST",
            data: {
                page: 1,
                data_sort,
                sort_type: 'DESC',
                _token
            },
            success: function (response) {
                $('.tbody').html(response);

            },
        });
    })
});
