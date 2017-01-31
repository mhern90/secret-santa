/* 


*/

/* replaceFormIndex finds the last form group and increased the
index number by 1
*/
function replaceFormIndex(formGroup) {
    var fieldNum = $(formGroup).html();
    var indexMatch = /-\d/gi;
    var fieldIndex = fieldNum.match(indexMatch);
        fieldIndex = fieldIndex[0].toString();
        fieldIndex = parseInt(fieldIndex.slice(-1)) + 1;
        fieldIndex = '-' + fieldIndex.toString();

    fieldNum = fieldNum.replace(indexMatch , fieldIndex);

    return fieldNum;
}

function createSubtractField(fieldGroupNum) {
    var removeField = '<a href="#" class="remove-field"><i class="fa fa-minus-circle" aria-hidden="true"></i> Remove Field</a>';
    if (fieldGroupNum >= 3 && $('.remove-field').length == 0) {
        $('.create-new').append(removeField);
    } 
}

$(document).ready( function() {
    'use strict';

    $('.create-new').on('click', '.add-more', function(e){
        e.preventDefault();
        var $formGroup = $('.form-group')
        var lastField = $formGroup.last();
        var newField = $(lastField).clone()[0];
        // create a copy of the last form group

        var dataIndex = parseInt($(newField).data('index'));
        dataIndex = (dataIndex + 1).toString();

        $(newField).appendTo($('.fields'));
        
        var newIndex = replaceFormIndex(newField);

        $formGroup.last().attr('data-index', dataIndex);
        $formGroup.last().html(newIndex);

        // counts number of current form groups
        var fieldGroupInstances = $($formGroup).length;

        createSubtractField(fieldGroupInstances);
        
    });

    $('.create-new').on('click', '.remove-field', function(e){
        e.preventDefault();

        var fieldGroupInstances = $('.form-group').length;
        $('.form-group').last().remove();

        if (fieldGroupInstances == 4 && $('.remove-field').length) {
            $('.remove-field').remove();
        }
    });

});