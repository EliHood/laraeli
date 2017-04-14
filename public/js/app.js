$.ajaxSetup({
  headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  }
});

  

  $('#add').click(function(){            
    $.ajax({
      url: 'createpost',
      type: "post",
      data: {'body':$('textarea[name=body]').val(), '_token': $('input[name=_token]').val()},
      success: function(data){
        $('#new-post').val('');

      }
    });      
  }); 