

var TestData = {
    data: data,
    columns: columns
}

var table = $('#root').tableSortable({
    data: TestData.data,
    columns: TestData.columns,
    dateParsing: true,
    processHtml: function(row, key) {
        if (key === 'avatar_url') {
            return '<a href="' + row[key] + '" target="_blank">View Avatar</a>'
        }
        if (key === 'url') {
            return '<a href="' + row[key] + '" target="_blank">Github Link</a>'
        }
        if (key === 'site_admin' && row[key]) {
            return '<span class="btn btn-warning btn-sm">Admin</span>'
        }
        return row[key]
    },
    columnsHtml: function(value, key) {
        return value;
    },
    pagination: 15,
    showPaginationLabel: true,
    prevText: 'Prev',
    nextText: 'Next',
    searchField: $('#search'),
    responsive: [
        {
            maxWidth: 992,
            minWidth: 769,
            columns: TestData.col,
            pagination: true,
            paginationLength: 3
        },
        {
            maxWidth: 768,
            minWidth: 0,
            columns: TestData.colXS,
            pagination: true,
            paginationLength: 2
        }
    ]
})
