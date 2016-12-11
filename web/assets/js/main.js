/**
 * Created by alex on 11/12/16.
 */
$(document).ready(function(){
   $('span').click(function(){
       $(this).nextAll().html('☆').css('color', 'transparent');
       $(this).html('☆').css('color', 'transparent');
       $(this).prevAll().html('☆').css('color', 'none');

       $(this).nextAll().html('★').css('color', 'none');
       $(this).html('★').css('color', 'gold');
   })
});
