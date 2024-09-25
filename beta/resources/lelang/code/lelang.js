$(document).ready(function() {

$( ".tgt" ).click(function() {


         var no = $(this).attr("data-id");
         var min = $(this).attr("data-min");
         var hrg = $(this).attr("data-prc");

         var tmin1 =  parseInt(hrg) +  parseInt(min) * 1 ;
         var tmin2 =  parseInt(hrg) +  parseInt(min) * 2 ;
         var tmin3 =  parseInt(hrg) +  parseInt(min) * 3 ;
         var tmin4 =  parseInt(hrg) +  parseInt(min) * 4 ;
         var tmin5 =  parseInt(hrg) +  parseInt(min) * 5 ;
         var tmin6 =  parseInt(hrg) +  parseInt(min) * 6 ;
         var tmin7 =  parseInt(hrg) +  parseInt(min) * 7 ;
         var tmin8 =  parseInt(hrg) +  parseInt(min) * 8 ;
         var tmin9 =  parseInt(hrg) +  parseInt(min) * 9 ;
         var tmin10 =  parseInt(hrg) +  parseInt(min) * 10 ;
         
     




        Swal.fire({
          title: 'Choose Bid',
          input: 'select',
          inputOptions: {
            '1': tmin1,
            '2':  tmin2,
            '3': tmin3,
            '4':  tmin4,
            '5': tmin5,
            '6': tmin6,
            '7':  tmin7,
            '8': tmin8,
            '9':  tmin9,
            '10': tmin10
          },
          inputPlaceholder: 'Price',
          showCancelButton: true,
          confirmButtonText: 'Submit',
          showLoaderOnConfirm: true,
          preConfirm: (login) => {
            return fetch(`//api.github.com/users/${login}`)
              .then(response => {
                if (!response.ok) {
                  throw new Error(response.statusText)
                }
                return response.json()
              })
              .catch(error => {
                Swal.showValidationMessage(
                  `Request failed: ${error}`
                )
              })
          },
          allowOutsideClick: () => !Swal.isLoading()
        }).then((result) => {
          if (result.isConfirmed) {




            $.ajax({
                url:   baseUrl +'action/ngebid',       
                async: false,
                type: 'POST',
                data: {
                    val : result.value.login ,
                    hrg : hrg,
                    min : min ,
                    id : no
                },
                dataType: 'html',
                success: function(data) {

                    if(data == 'TRUE')
                    {
                        Swal.fire({
                          position: 'top-end',
                          icon: 'success',
                          title: 'Your work has been saved',
                          showConfirmButton: false,
                          timer: 500
                        })
                    }
                    else
                    {
                        Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            text: 'Something went wrong!'
                          })
                    }
                    
                }
            })



                    //alert(result.value.login+'__'+no);

                     location.reload();
                    // Swal.fire({
                    //   title: `${result.value.login}'s avatar`,
                    //   imageUrl: result.value.avatar_url
                    // })
                  }
                })
       });
});



$( "#edit_phn" ).click(function() {
      Swal.fire({
        title: 'Edit Mobile Phone',
        input: 'number',
        showCancelButton: true,
        confirmButtonText: 'Submit',
        showLoaderOnConfirm: true,
        preConfirm: (login) => {
          return fetch(`//api.github.com/users/${login}`)
            .then(response => {


              if (!response.ok) {
               // throw new Error(response.statusText)
              }
              return response.json()
            })
            .catch(error => {
              Swal.showValidationMessage(
                `Request failed: ${error}`
              )
            })
        },
        allowOutsideClick: () => !Swal.isLoading()
      }).then((result) => {
        if (result.isConfirmed) {

            $.ajax({
                url:   baseUrl +'edit/phone_lelang',       
                async: false,
                type: 'POST',
                data: {
                    param :  String(result.value.login)
                },
                dataType: 'html',
                success: function(data) {

                    if(data == 'TRUE')
                    {
                        Swal.fire({
                          position: 'top-end',
                          icon: 'success',
                          title: 'Your work has been saved',
                          showConfirmButton: false,
                          timer: 500
                        })
                    }
                    else
                    {
                        Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            text: 'Something went wrong!'
                          })
                    }

                    location.reload();
                    
                }
            })
        }
      })

      



});


$( "#edit_ktp" ).click(function() {
     Swal.fire({
        title: 'Edit ID Card',
        input: 'number',
        showCancelButton: true,
        confirmButtonText: 'Submit',
        showLoaderOnConfirm: true,
        preConfirm: (login) => {
          return fetch(`//api.github.com/users/${login}`)
            .then(response => {


              if (!response.ok) {
               // throw new Error(response.statusText)
              }
              return response.json()
            })
            .catch(error => {
              Swal.showValidationMessage(
                `Request failed: ${error}`
              )
            })
        },
        allowOutsideClick: () => !Swal.isLoading()
      }).then((result) => {
        if (result.isConfirmed) {

            $.ajax({
                url:   baseUrl +'edit/ktp_lelang',       
                async: false,
                type: 'POST',
                data: {
                    param :  String(result.value.login)
                },
                dataType: 'html',
                success: function(data) {

                    if(data == 'TRUE')
                    {
                        Swal.fire({
                          position: 'top-end',
                          icon: 'success',
                          title: 'Your work has been saved',
                          showConfirmButton: false,
                          timer: 500
                        })
                    }
                    else
                    {
                        Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            text: 'Something went wrong!'
                          })
                    }

                    location.reload();
                    
                }
            })
        }
      })

      
});


$( "#edit_pwd" ).click(function() {


    Swal.fire({
        title: "Edit Password",
        input: 'password',
        confirmButtonText: 'Submit',
        showCancelButton: true      
    }).then((result) => {
        if (result.value) {
            $.ajax({
                url:   baseUrl +'edit/pass_lelang',       
                async: false,
                type: 'POST',
                data: {
                    param :  result.value
                },
                dataType: 'html',
                success: function(data) {


                    if(data == 'TRUE')
                    {
                        Swal.fire({
                          position: 'top-end',
                          icon: 'success',
                          title: 'Your work has been saved',
                          showConfirmButton: false,
                          timer: 500
                        })
                    }
                    else
                    {
                        Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            text: 'Something went wrong!'
                          })
                    }
                    

                }
            })
        }
        else
        {
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Something went wrong!'
              })
        }

        location.reload();
    });


    


});