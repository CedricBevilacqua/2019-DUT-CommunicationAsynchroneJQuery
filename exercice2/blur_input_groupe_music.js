$(function(){
    $("#input_groupmusic").blur(function(){
        $.getJSON('verif_group_exist.php',{groupe_music: $('#input_groupmusic').val().toLowerCase() }, function(data) {
            if(data){
                $('#info_groupe').text("Ce groupe existe. ✅");
            } else {
                $('#info_groupe').text("Ce groupe n'existe pas. ❌");
            }
        });
      });
})


