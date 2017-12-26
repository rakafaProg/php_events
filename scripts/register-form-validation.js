$(document)
  .ready(function() {
    $('.ui.form')
      .form({
        fields: {
          username: {
            identifier  : 'username',
            rules: [
              {
                type   : 'empty',
                prompt : 'Please enter a user name'
              }
            ]
          },
          email: {
            identifier  : 'email',
            rules: [
              {
                type   : 'empty',
                prompt : 'Please enter your e-mail'
              },
              {
                type   : 'email',
                prompt : 'Please enter a valid e-mail'
              }
            ]
          },
          password: {
            identifier  : 'password',
            rules: [
              {
                type   : 'empty',
                prompt : 'Please enter your password'
              },
              {
                type   : 'length[6]',
                prompt : 'Your password must be at least 6 characters'
              }
            ]
          },
          passwordrepeat: {
            identifier  : 'passwordrepeat',
            rules: [
              {
                type   : 'empty',
                prompt : 'Please repeat your password'
              },
              {
                type   : 'length[6]',
                prompt : 'Repeated password is too short',
                equalTo: '#password'
              }
            ]
          }
        }
      })
    ;
  })
;
