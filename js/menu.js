$(document).ready(function() {
    var botao = $('.menu-drop1');
    var dropDown = $('.ul-drop1');    
   
       botao.on('click', function(event){
           dropDown.stop(true,true).slideToggle();
           event.stopPropagation();
       });
   });

   $(document).ready(function() {
    var botao = $('.menu-drop2');
    var dropDown = $('.ul-drop2');    
   
       botao.on('click', function(event){
           dropDown.stop(true,true).slideToggle();
           event.stopPropagation();
       });
   });

   $(document).ready(function() {
    var botao = $('.menu-drop3');
    var dropDown = $('.ul-drop3');    
   
       botao.on('click', function(event){
           dropDown.stop(true,true).slideToggle();
           event.stopPropagation();
       });
   });