$(document)
  .ready(function() {
    $('.ui.form')
      .form({
        fields: {
          name: {
            identifier  : 'name',
            rules: [
              {
                type   : 'empty',
                prompt : 'Please enter event name'
              }
            ]
          },
          details: {
            identifier  : 'details',
            rules: [
              {
                type   : 'empty',
                prompt : 'Please enter details'
              }
            ]
          },
          date: {
            identifier  : 'date',
            rules: [
              {
                type   : 'empty',
                prompt : 'Please enter date'
              }
            ]
          }
        }
      })
    ;
  })
;

$('.ui.checkbox')
 .checkbox()
;
