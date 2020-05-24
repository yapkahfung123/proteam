// $(document).ready(function() {
//
//     // 20170203 Hunge: Regenerate verification when lost connection.
//     window.addEventListener("online", function () {
//         // alert('Connection lost before, please re-enter verification code.');
//         // 20170322 Hunge: Changed alert msg.
//         alert('Disconnected from internet. Press OK to resume.');
//         $("#gdcode_img").attr("src", '/infradesign/common/plugins/captcha/draw_gd.php?'+new Date().getTime());
//         $('#fr_gdcode').val('');
//     }, false);
//
//     // Revalidate the fields after select the date.
//     $('#commencement_date')
//         .datepicker({
//             format: 'yyyy-mm-dd'
//         })
//         .on('change', function(e) {
//             // Revalidate the start date field
//             $('#contactForm').formValidation('revalidateField', 'delivery_date');
//     });
//
//     $('#delivery_date')
//         .datepicker({
//             format: 'yyyy-mm-dd'
//         })
//         .on('change', function(e) {
//             $('#contactForm').formValidation('revalidateField', 'commencement_date');
//     });
//
//     //Contact Form
//     $('#contactForm')
//         .formValidation({
//             framework: 'bootstrap',
//             icon: {
//                 valid: 'glyphicon glyphicon-ok',
//                 invalid: 'glyphicon glyphicon-remove',
//                 validating: 'glyphicon glyphicon-refresh'
//             },
//             fields: {
//                 "name": {
//                     validators: {
//                         notEmpty: {
//                             message: 'Name is required'
//                         },
//                         regexp: {
//                             regexp: /^[a-z\s]+$/i,
//                             message: 'The name can connsist of alphabetical characters and spaces only.'
//                         }
//                     }
//                 },
//                 "email": {
//                     validators: {
//                         notEmpty: {
//                             message: 'Email is required'
//                         }
//                     }
//                 },
//                 "company": {
//                     validators: {
//                         notEmpty: {
//                             message: 'Company name is required'
//                         }
//                     }
//                 },
//                 "phone": {
//                     validators: {
//                         notEmpty: {
//                             message: 'Contact number is required'
//                         },
//                         integer: {
//                             message: 'Only digits are allow.'
//                         }
//                     }
//                 },
//                 "services": {
//                     validators: {
//                         notEmpty: {
//                             message: 'Service is required'
//                         }
//                     }
//                 },
//                 "commencement_date": {
//                     validators: {
//                         // notEmpty: {
//                         //     message: 'Commencement date is required'
//                         // }
//                         date: {
//                             format: 'YYYY-MM-DD',
//                             max: 'delivery_date',
//                             message: 'The delivery date is not a valid date.'
//                         }
//                     }
//                 },
//                 "delivery_date": {
//                     validators: {
//                         // notEmpty: {
//                         //     message: 'Delivery date is required'
//                         // }
//                         date: {
//                             format: 'YYYY-MM-DD',
//                             min: 'commencement_date',
//                             message: 'The commencement date is not a valid date'
//                         }
//                     }
//                 },
//                 "description": {
//                     validators: {
//                         notEmpty: {
//                             message: 'Description is required'
//                         }
//                     }
//                 },
//                 "file": {
//                     validators: {
//                         file: {
//                             // extension: 'jpg,jpeg,png',
//                             // type: 'image/jpeg,image/png',
//                             maxSize: 1024*1024,// 1024*1000
//                             message: 'Maximum file size is 1mb.'
//                         }
//                     }
//                 },
//                 "fr_gdcode": {
//                     validators: {
//                         notEmpty: {
//                             message: 'Verification code is required'
//                         }
//                     }
//                 }
//             }
//         })
//         .on('err.form.fv', function(e) {
//
//         })
//         .on("success.form.fv", function(e) {
//
//              // Prevent form submission
//             e.preventDefault();
//             // You can get the form instance
//             var $form = $(e.target);
//             // and the FormValidation instance
//             var fv = $form.data('formValidation');
//
//
//
//             // 20170203 Hunge: Regenerate verification when lost connection.
//             $.ajax({
//                   url: '/verification',
//                   data: {fr_gdcode: $( "input[name='fr_gdcode']" ).val()},
//                   dataType: "json",
//                   type: 'GET',
//                   success: function(data) {
//                     if (data.valid == true) {
//                       connectCRM($form, fv);
//                       // return true;
//                     } else {
//                       alert('Verification code is not match.');
//                       e.preventDefault();
//                       return false;
//                     }
//                   },
//                   error: function (error) {
//                       alert('Error: '+error.responseJSON.Message+'. Verification code is not match.');
//                       // Prevent form submission
//                       e.preventDefault();
//                       return false;
//                     }
//             });
//
//
//         });
//
//
//         function connectCRM(form, fv) {
//             var loginData = {
//                 tenancyName: 'idsb',
//                 usernameOrEmailAddress: 'infraadmin',
//                 password: 'abc.1234'
//             };
//
//             $.ajax({
//                 type: 'POST',
//                 url: 'https://salesbooking.infradigital.com.my/api/account/authenticate',
//                 data: loginData
//             }).done(function (data) {
//                 // Keep the access token!!!
//                 // Form at front end need add <input type="hidden" id="token" name="token">
//
//                 var accessToken = data.result;
//                 document.getElementById('token').value = accessToken;
//
//                 var name = document.getElementById('name').value;
//                 var email = document.getElementById('email').value;
//                 var phone = document.getElementById('phone').value;
//                 var commencement_date = document.getElementById('commencement_date').value;
//                 var delivery_date = document.getElementById('delivery_date').value;
//                 var services = document.getElementById('services').value;
//                 var description = document.getElementById('description').value;
//                 var company = document.getElementById('company').value;
//                 var token =  document.getElementById('token').value;
//                 token = 'Bearer '+token;
//
//                 var sendapi = {
//                     'title': 'Mr.',
//                     'emailAddress' : email,
//                     'contactNumber' : phone,
//                     'fullName' : name,
//                     'tenancyName': 'idsb',
//                     'nationalId':phone,
//                     'nationalityCode':'MY',
//                     'acceptsNewsletters':true,
//                     'remarks':'CD='+commencement_date+','+'DD='+delivery_date+','+'services='+services+','+'desc='+description+','+'comp='+company
//
//
//
//                 }
//
//
//                 $.ajax({
//                     type: 'POST',
//                     url: 'https://salesbooking.infradigital.com.my/api/services/app/public/RegisterCustomer',
//                     headers: { "Authorization": token },
//                     data: sendapi,
//                     success: function (html) {
//                       console.log(html);
//                       console.log('success call api');
//                       fv.defaultSubmit();
//                       console.log('after default submit');
//                     },
//                     error: function (error) {
//                       console.log(error);
//                       console.log('fail call api');
//                       alert('Error: '+error.responseJSON.Message+'. It might be cause by email or contact number existed already.');
//                       return false;
//                     }
//                 });
//
//
//             });
//         }
//
//         // Once click re-check.
//         $('#resetButton, #submitButton').on('click', function() {
//             $('#contactForm')
//                 .formValidation('revalidateField', 'name')
//                 .formValidation('revalidateField', 'email')
//                 .formValidation('revalidateField', 'company')
//                 .formValidation('revalidateField', 'phone')
//                 .formValidation('revalidateField', 'services')
//                 .formValidation('revalidateField', 'description')
//                 .formValidation('revalidateField', 'fr_gdcode');
//         });
//
// });