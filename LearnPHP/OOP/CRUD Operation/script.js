$(document).ready(function(){
    display();
})

function display(){
    var displayData = "true";

    $.ajax({
        url:"display.php",
        type:'post',
        data:{
            displaySend: displayData
        },
        success:function(data,status){
            $('#displayTable').hmtl(data);
        }
    });
}
function addUser(){
var name = $('#inputName').val();
var email = $('#inputEmail').val();
var mobile = $('#inputMobile').val();
 
$.ajax({
    url:"insert.php",
    type:'post',
    data:{
        nameSend:name,
        emailSend:email,
        mobileSend:mobile
    },
    success:function(data,status){
        display(); 
    }
})

}
