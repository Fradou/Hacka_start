/**
 * Created by alex on 11/12/16.
 */
$(document).ready(function(){
   $('span').click(function(){
       $(this).prevAll().html('☆').css('color', 'black');

       $(this).nextAll().html('★').css('color', 'gold');
       $(this).html('★').css('color', 'gold');
   })
});
