$.ajaxSetup({
  headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  }
});

  
  $('#add').click(function(event){  
  event.preventDefault();
    var body = $('textarea[name=body]').val();

    var token =  $('input[name=_token]').val();

    $.ajax({
      url: 'createpost',
      type: "post",
    
      data: {'body':body, '_token': token, },
      success: function(data){
        content = data.body;
        user = data.user.username;
        date = data.created_at;
   
        console.log(data);
        $('#new-post').val('');
        $('#owl6').hide().append( '<h3>'+user+'</h3>'+'<p class="post-bod">'+content+'</p>'+'<div class="info">'+date+'</div>').fadeIn(500);
        

      }
    });      
  }); 






    var postId = 0; //get data-postid from dashboard article
    var postBodyElement = null; //for .done - update page without refresh

    $('.post').find('.interaction').find('.edit').on('click', function (event) {
        
        event.preventDefault();
 
        postBodyElement = document.getElementById("post-body");
        var postBody = postBodyElement.value.trim();
             
        postId = event.target.parentNode.parentNode.dataset['postid']; //get data-postid from dashboard article
        $('#post-body').val(postBody);
        $('#edit-modal').modal();
    });

    //urlEdit & token are set in the dashboard.blade.php
    $('#modal-save').on('click', function () {
        $.ajax({
                method: 'POST',
                url: urlEdit,
                data: {body: $('#post-body').val(),postId: postId, _token: token} //get data-postid from dashboard article
            })
            .done(function (msg) {
                //console.log(msg['message']);
                ///console.log(JSON.stringify(msg));
                $(postBodyElement).text(msg['new_body']); //update page without refresh
                $('#edit-modal').modal('hide'); //hide modal
            });
    });

