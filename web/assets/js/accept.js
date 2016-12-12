/**
 * Created by alex on 12/12/16.
 */
$(document).ready(function(){
    $('.btn').click(function(){
        $(this).removeClass('btn-success').addClass('btn-warning').html('Pending');
    })
});