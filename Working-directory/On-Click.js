/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


$(document).ready(function(){
  $("h4").click(function(){
    $(this).next("p").slideToggle();  
  });
});



