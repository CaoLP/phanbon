$(function () {
    $('#add-btn').on('click', function () {
        var key = new Date().getUTCMilliseconds();
        var template = '<div class="form-group">' +
            ' <div class="input textarea">' +
            '<label><input class="input-sm" name="data[Setting][data]['+key+'][key]" placeholder="key">' +
            '<select class="input-sm" name="data[Setting][data]['+key+'][type]" placeholder="input type">' +
            '<option value="text">TextField</option>' +
            '<option value="textarea">TextArea</option>' +
            '</select>' +
            '</label>' +
            '<textarea name="data[Setting][data]['+key+'][value]" class="form-control" placeholder="value" cols="30" rows="6" id="SettingData"></textarea>' +
            '</div>' +
            '</div>';
        $('#data').append(template);
    });
});