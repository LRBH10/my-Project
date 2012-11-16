/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
var indexOf = 0;
var indexMax= document.getElementById('indexMax').getAttribute('value');

function updateImage(id,lieu){
    indexOf++;
    if(indexOf>=indexMax) indexOf=0;
    var src=document.getElementById(lieu+indexOf).getAttribute('value');
    document.getElementById('IMG'+id).setAttribute('src', src);
}



