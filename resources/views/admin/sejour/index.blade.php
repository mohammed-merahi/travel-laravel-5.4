<?php
/**
 * Created by PhpStorm.
 * User: Moon
 * Date: 15/05/2018
 * Time: 15:29
 */

?>


@extends('admin.layouts.main')

@section('title','Tableau de bord')

@section('content')


<!-- BEGIN CONTENT -->
<div class="page-content-wrapper">
    <div class="page-content">
        <h3 class="page-title"> Liste des séjours </h3>
        <hr>

        <div class="row">
            <div class="col-md-12">


                <div class="portlet light bordered">
                    <div class="portlet-title">
                        <div class="caption font-dark">
                        </div>
                        <div class="tools"> </div>
                    </div>
                    <div class="portlet-body">
                        <table class="table table-striped table-bordered table-hover" id="sample_1">





                            <thead>
                            <tr>
                                <th>ID#</th>
                                <th>Nom</th>
                                <th>Description</th>
                                <th>Image</th>
                                <th>Action</th>
                            </tr>
                            </thead>

                            <tbody>
                            <tr>

                                <td>1</td>
                                <td>Sylhet Tour</td>
                                <td>Sylhet is a major city that lies on the banks of Surma River in north-east Bangladesh.</td>
                                <td> <img src="http://travo.thesoftking.com/frontend/images/albums/1468586973.jpg" alt="*" style="width:200px;"></td>
                                <td>
                                    <a href="http://travo.thesoftking.com/admin/editalbum/1" class="btn purple btn-sm"><i class="fa fa-edit"></i> </a>
                                    <a href="http://travo.thesoftking.com/admin/viewalbum/1" class="btn green btn-sm"><i class="fa fa-desktop"></i> </a>
                                    <button type="button" class="btn btn-danger btn-sm delete_button"
                                            data-toggle="modal" data-target="#DelModal"
                                            data-id="1">
                                        <i class='fa fa-times'></i>
                                    </button>
                                </td>

                            </tr>
                            <tr>

                                <td>2</td>
                                <td>Coxs Bazar Tour</td>
                                <td>Cox&#039;s Bazar is a town, a fishing port and district headquarters in Bangladesh.</td>
                                <td> <img src="http://travo.thesoftking.com/frontend/images/albums/1468587221.jpg" alt="*" style="width:200px;"></td>



                                <td>




                                    <a href="http://travo.thesoftking.com/admin/editalbum/2" class="btn purple btn-sm"><i class="fa fa-edit"></i> </a>
                                    <a href="http://travo.thesoftking.com/admin/viewalbum/2" class="btn green btn-sm"><i class="fa fa-desktop"></i> </a>


                                    <button type="button" class="btn btn-danger btn-sm delete_button"
                                            data-toggle="modal" data-target="#DelModal"
                                            data-id="2">
                                        <i class='fa fa-times'></i>
                                    </button>




                                </td>

                            </tr>




                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div><!-- ROW-->

        <div class="text-center">

        </div>

        <!-- Modal for DELETE -->
        <div class="modal fade" id="DelModal" tabindex="-1" role="dialog" aria-    labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="myModalLabel"> <i class='fa fa-trash'></i> Delete !</h4>
                    </div>

                    <div class="modal-body">
                        <strong>Are you sure you want to Delete ?</strong>
                    </div>

                    <div class="modal-footer">



                        <form method="post" action="http://travo.thesoftking.com/admin/deleteAlbum" class="form-inline">
                            <input type="hidden" name="_token" value="4Jx9HJdOFJjTEZcpemo9Iv08U0lB03swhXMJbmg1">
                            <input type="hidden" name="_method" value="DELETE">
                            <input type="hidden" name="id" class="abir_id" value="0">

                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-danger">DELETE</button>

                        </form>

                    </div>

                </div>
            </div>
        </div>


    </div>
</div>
<!-- END CONTENT -->
@endsection

<script type="text/javascript">
    $('#sample_1').DataTable()
</script>
