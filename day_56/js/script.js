// jQuery

// var text= document.getElementById('lorem');
// text.onclick= function(){
//     text.style.color='red'
// }

// $(selector).action();

// $('#lorem').click(function(){
// $(this).css('color','red');
// });


$('#lorem').click(function () {
    $(this).css({
        color: 'red',
        fontSize: '80px'
    });
});

// $('.add').click(function () {
    $(document).on('click','.add',function(){
     let firstName= $('#firstName').val();
     let lastName= $('#lastName').val();
     let fullName= firstName+ ' '+lastName;
    var tr = '';
    tr += '<tr>';
    tr += `<td>${firstName}</td>`;
    tr += `<td>${lastName}</td>`;
    tr += `<td>${fullName}</td>`;
    // tr += ' <td><button type="button" class="add btn btn-success">+</button></td>';
    tr += ' <td><button type="button" class="sub btn btn-success">Delete</button></td>';
    tr += '</tr>';

    $('#tbody').append(tr);

    $(document).on('click','.sub',function(){
         $(this).closest('tr').remove(); 
    });
});