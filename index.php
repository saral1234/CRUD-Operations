<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>PHP - AJAX - CRUD</title>
</head>
<body>


    <!--ADD  Modal -->
    <div class="modal fade" id="Student_AddModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Student Data using jQuery Ajax in php without page reload</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            <div class="row">
                <div class="col-md-12">
                    <div class="error-message">

                    </div>
                </div>
                <div class="col-md-6">
                    <label for="">Name</label>
                    <input type="text" class="form-control name">
                </div>
                <div class="col-md-6">
                    <label for="">Class</label>
                    <input type="text" class="form-control class">
                </div>
                <div class="col-md-6">
                    <label for="">Section</label>
                    <input type="text" class="form-control section">
                </div>
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary student_add_ajax">Save</button>
      </div>
    </div>
  </div>
</div>
    <!--View Modal -->
    <div class="modal fade" id="StudentViewModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title fs-5" id="exampleModalLabel">Student detail View</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <h6 class= "id_view "></h6>
            <h6 class="name_view"></h6>
            <h6 class="class_view"></h6>
            <h6 class="section_view"></h6>
            
            
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            
        </div>
        </div>
    </div>
    </div>

    <!--Edit Modal -->
    <div class="modal fade" id="StudentEditModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Student Data without page reload</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">

                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                        <div class="row">
                            <input type="hidden" id="id_edit">

                            <div class="col-md-12">
                                <div class="error-message-update">

                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="">Name</label>
                                <input type="text" id="edit_name" class="form-control">
                            </div>
                        
                            <div class="col-md-6">
                                <label for="">Class</label>
                                <input type="text" id="edit_class" class="form-control">
                            </div>
                            <div class="col-md-6">
                                <label for="">Section</label>
                                <input type="text" id="edit_section" class="form-control">
                            </div>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary student_update_ajax">Update</button>
                </div>
                </div>
            </div>
        </div>

    <!--Delete Modal -->
    <div class="modal fade" id="StudentDeleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Confirm and Delete Student Data without page reload</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">

                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                        <div class="row">
                            <input type="hidden" id="id_delete">

                            <div class="col-md-12">
                                <h6>Are you sure you want to delete data?</h6>
                        
                            </div>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-danger student_delete_ajax">Delete</button>
                </div>
                </div>
            </div>
        </div>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>
                            PHP - AJAX - CRUD | Store Data Without reloding the page in database.
                            <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#Student_AddModal">
                                Add
                            </button>
                        </h4>
                    </div>
                    <div class="card-body">
                        <div class="message-show">

                        </div>
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Class</th>
                                    <th>Section</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody class="studentdata">
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script>$(document).ready(function () {
        getdata();

        $('.student_delete_ajax').click(function (e) { 
            e.preventDefault();
            var stud_id = $('#id_delete').val();
            $.ajax({
                type: "Post",
                url: "ajax-crud/code.php",
                data: {
                    'checking_delete': true,
                    'stud_id' : stud_id,
                },
                
                success: function (response) {
                    $('#StudentDeleteModal').modal('hide');
                    $('.message-show').append(`<div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Hey!</strong> ${response}.\
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>`
                    );
                    $('.studentdata').html('');
                    getdata();
                    
                    
                }
            });
            
        });
    
        $(document).on("click", ".delete_btn", function () {
            
            var stud_id = $(this).closest('tr').find('.stud_id').text();
            $('#id_delete').val(stud_id);
            $('#StudentDeleteModal').modal('show');
            //alert(stud_id);
        });
        $('.student_update_ajax').click(function (e) { 
            e.preventDefault();
            var stud_id = $('#id_edit').val();
            var name = $('#edit_name').val();
            var stu_class = $('#edit_class').val();
            var section = $('#edit_section').val();
            //console.log(name);
            if(name != '' & stu_class != '' & section != ''){
                $.ajax({
                    type: "POST",
                    url: "ajax-crud/code.php",
                    data: {
                        'checking_update': true,
                        'stud_id': stud_id,
                        'name': name,
                        'class': stu_class,
                        'section': section,
                    },
                    success: function (response) {
                        $('#StudentEditModal').modal('hide');
                        $('.message-show').html('');

                        //console.log(response);
                        $('.message-show').append(`<div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Hey!</strong> ${response}.\
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>`
                    );
                    $('.studentdata').html('');
                    getdata();
                    
                        
                    }
                });
            }
            else{
                //console.log("Enter all fields");
                $('.error-message-update').html('');
                $('.error-message-update').append(`<div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>Hey!</strong> Enter all fields.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>`);
            }
        
        });
        $(document).on("click", ".edit_btn", function () {
            
            var stud_id = $(this).closest('tr').find('.stud_id').text();
            //alert(stud_id);
            $.ajax({
                type: "Post",
                url: "ajax-crud/code.php",
                data: {
                    'checking_edit': true,
                    'stud_id' : stud_id,
                },
                
                success: function (response) {
                    //console.log(response);
                    $.each(response, function (key, studedit) {
                        //console.log(studview['name']);
                        $('#id_edit').val(studedit['id']);
                        $('#edit_name').val(studedit['name']);
                        $('#edit_class').val(studedit['class']);
                        $('#edit_section').val(studedit['section']);
                    });
                    $('#StudentEditModal').modal('show');
                }
            });
            
        });
        $(document).on("click", ".viewbtn", function () {
            
            var stud_id = $(this).closest('tr').find('.stud_id').text();
            //alert(stud_id);
            $.ajax({
                type: "Post",
                url: "ajax-crud/code.php",
                data: {
                    'checking_view': true,
                    'stud_id' : stud_id,
                },
                
                success: function (response) {
                    //console.log(response);
                    $.each(response, function (key, studview) {
                        //console.log(studview['name']);
                        $('.id_view').text(studview['id']);
                        $('.name_view').text(studview['name']);
                        $('.class_view').text(studview['class']);
                        $('.section_view').text(studview['section']);
                    });
                    $('#StudentViewModal').modal('show');
                }
            });
            
        });


        $('.student_add_ajax').click(function (e) { 
            e.preventDefault();
            var name = $('.name').val();
            var stu_class = $('.class').val();
            var section = $('.section').val();
            //console.log(name);
            if(name != '' & stu_class != '' & section != ''){
                $.ajax({
                    type: "POST",
                    url: "ajax-crud/code.php",
                    data: {
                        'checking_add': true,
                        'name': name,
                        'class': stu_class,
                        'section': section,
                    },
                    success: function (response) {
                        $('#Student_AddModal').modal('hide');
                        $('.message-show').html('');

                        //console.log(response);
                        $('.message-show').append(`<div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Hey!</strong> ${response}.\
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>`
                    );
                    $('.studentdata').html('');
                    getdata();
                    $('.name').val();
                    $('.class').val();
                    $('.section').val();

                        
                    }
                });
            }
            else{
                //console.log("Enter all fields");
                $('.error-message').html('');
                $('.error-message').append(`<div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>Hey!</strong> Enter all fields.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>`);
            }
        
        });
        
    });
    function getdata(){
        $.ajax({
            type: "GET",
            url: "./ajax-crud/fetch.php",
            success: function (response) {
                //console.log(response);
                $.each(response, function (key, value) {
                    //console.log(value['name']);
                    //we can use instead of value[id] to key++ to getting the data in the serial order on the form because value[id] give the exact the same  way as data stored in trhe data
                    $('.studentdata').append('<tr>'+
                                '<td class="stud_id">'+value['id']+'</td>\
                                <td>'+value['name']+'</td>\
                                <td>'+value['class']+'</td>\
                                <td>'+value['section']+'</td>\
                                <td>\
                                    <a href="#" class="badge btn-info viewbtn">VIEW</a>\
                                    <a href="#" class="badge btn-primary edit_btn">EDIT</a>\
                                    <a href="#" class="badge btn-danger delete_btn">Delete</a>\
                                </td>\
                            </tr>');
                     
                });
                
            }
        });
    }
    </script>
</body>
 