<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form-registerPage</title>

    <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="lib/Ionicons/css/ionicons.css" rel="stylesheet">
    <link href="lib/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet">
    <link href="lib/jquery-toggles/toggles-full.css" rel="stylesheet">
    <link href="lib/highlightjs/github.css" rel="stylesheet">
    <link href="lib/select2/css/select2.min.css" rel="stylesheet">
    <link href="lib/spectrum/spectrum.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
<div class="conainer">
    <div class="am-mainpanel" style="margin:30px;">
        <div class="row row-sm mg-t-20">
            <div class="col-xl-12">
                <div class="card pd-20 pd-sm-40 form-layout form-layout-4">
                    <h3 class="form-header" style="text-align:center; font-size: 26px;">Marriage Form</h3>
                    <form id="basic-form" method="post" enctype="multipart/form-data">

                    <div class="row">
                        <label class="col-sm-4 form-control-label">Date of Marriage: <span class="tx-danger">*</span></label>
                        <div class="col-sm-8 mg-t-10 mg-sm-t-0" style="padding-top:5px;">
                            <input type="text"  class="form-control fc-datepicker" placeholder="yyyy-mm-dd" data-date-format="yyyy-mm-dd" name="dom">
                        </div>
                    </div>
                    <h3  class="card-body-title" style="padding-top: 20px;font-size: 22px;">Husband Details</h3>
                    <hr />


                    <!-- Husband information Section -->
                    <div class="row">
			            <div class="col-xs-10 col-sm-4 col-md-4 col-lg-4">
                            <label class="col-md-6 form-control-label" style="font-size: 16px;">Name of Husband <span class="tx-danger">*</span></label>     
                            <input type="text" name="nofhusband" value="" style="margin-left: 275px; width:50%;padding: 1px; color:black; border:1px dashed" class="form-control" required='true'>
			            </div></br>
<!--
                        <div class="row mg-t-20">
                            <label class="col-sm-4 form-control-label" style="font-size: 16px;">Photo: <span class="tx-danger">*</span></label>
                            <input type="file" name="husbandimage" value="" style="margin-left: 348px; width:50%;padding: 1px; color:black; border:1px solid" class="form-control" required='true'>
                        </div></br>
-->
                        <div class="row mg-t-20">
                            <label class="col-sm-4 form-control-label">Name of Husband Father <span class="tx-danger">*</span></label> 
                            <input type="text" name="nohusbandfather" value="" style="margin-left: 228px; width:50%;padding: 1px; color:black; border:1px dashed" class="form-control" required='true'>
                        </div></br>

                        <div class="row mg-t-20">
                            <label class="col-sm-4 form-control-label">Name of Husband Mother <span class="tx-danger">*</span></label>
                            <input type="text" name="nohusbandmother" value="" style="margin-left: 220px; width:50%;padding: 1px; color:black; border:1px dashed" class="form-control" required='true'>
                        </div></br>

                        <div class="row mg-t-20">
                            <label class="col-sm-4 form-control-label">Date of Birth: <span class="tx-danger">*</span></label>
                            <input type="text" class="form-control fc-datepicker" style="margin-left: 300px; width:50%;padding: 1px; color:black; border:1px solid" placeholder=yyyy-mm-dd data-date-format="yyyy-mm-dd" id="hdob" name="hdob">                
                        </div></br>

                        <div class="row mg-t-20">
                            <label class="col-sm-4 form-control-label">Marital Status Before Marriage: <span class="tx-danger">*</span></label>
                            <select type="text" name="hsbmarriage" value="" style="margin-left: 182px; width:50%;padding: 1px; color:black; border:1px solid" class="form-control" required='true'>
                                <option value="">Select Status</option>
                                <option value="Bachelor">Bachelor</option>
                                <option value="Married">Married</option>
                                <option value="Divorsee">Divorsee</option>
                                <option value="Widower">Widower</option>
                            </select>
                        </div></br>

                        <div class="row mg-t-20">
                            <label class="col-sm-4 form-control-label">Address: <span class="tx-danger">*</span></label>
                            <textarea type="file" name="haddress" value="" style="margin-left: 330px; width:50%;padding: 1px; color:black; border:1px dashed" class="form-control" required='true' ></textarea>
                        </div></br>

                        <div class="row mg-t-20">
                            <label class="col-sm-4 form-control-label">Zipcode: <span class="tx-danger">*</span></label>
                            <input type="text" name="hzipcode" value="" style="margin-left: 328px; width:50%;padding: 1px; color:black; border:1px dashed"  class="form-control" required='true' maxlength="6">
                        </div></br>

                        <div class="row mg-t-20">
                            <label class="col-sm-4 form-control-label">State: <span class="tx-danger">*</span></label>
                            <input type="text" name="hstate" value="" style="margin-left: 350px; width:50%;padding: 1px; color:black; border:1px dashed" class="form-control" required='true'>
                        </div></br>

                    </div>
                    
                    <h3  class="card-body-title" style="padding-top: 20px;font-size: 22px; ">Wife Details</h3>
                    <hr /><br>

                    <!-- Wife Information Section -->

                    <div class="row">
                        <div class="col-xs-10 col-sm-4 col-md-4 col-lg-4">
                        <label class="col-sm-4 form-control-label">Name of Wife: <span class="tx-danger">*</span></label>
                        <input type="text" name="nofwife" value="" style="margin-left: 295px; width:50%;padding: 1px; color:black; border:1px dashed" class="form-control" required='true'>
                        </div></br>  
<!--
                        <div class="row mg-t-20">
                            <label class="col-sm-4 form-control-label">Photo: <span class="tx-danger">*</span></label>
                            <input type="file" name="wifeimage" value="" style="margin-left: 348px; width:50%;padding: 1px; color:black; border:1px solid" class="form-control" required='true'>
                        </div></br>
-->                    
                        <div class="row mg-t-20">
                            <label class="col-sm-4 form-control-label">Name of Wife Father <span class="tx-danger">*</span></label> 
                            <input type="text" name="wifefathername" value="" style="margin-left: 256px; width:50%;padding: 1px; color:black; border:1px dashed" class="form-control" required='true'>
                        </div></br>

                        <div class="row mg-t-20">
                            <label class="col-sm-4 form-control-label">Name of Wife Mother <span class="tx-danger">*</span></label>
                            <input type="text" name="wifemothername" value="" style="margin-left: 248px; width:50%;padding: 1px; color:black; border:1px dashed" class="form-control" required='true'>
                        </div><br>

                        <div class="row mg-t-20">
                            <label class="col-sm-4 form-control-label">Date of Birth: <span class="tx-danger">*</span></label>
                            <input type="text" class="form-control fc-datepicker" style="margin-left: 300px; width:50%;padding: 1px; color:black; border:1px solid" placeholder=yyyy-mm-dd data-date-format="yyyy-mm-dd" id="wdob" name="wdob">
                        </div></br>

                        <div class="row mg-t-20">
                            <label class="col-sm-4 form-control-label">Marital Status Before Marriage: <span class="tx-danger">*</span></label>
                            <select type="text" name="wifemaritalstatus" value="" style="margin-left: 182px; width:50%;padding: 1px; color:black; border:1px solid" class="form-control" required='true'>
                                <option value="">Select Status</option>
                                <option value="Bachelor">Bachelor</option>
                                <option value="Married">Married</option>
                                <option value="Divorsee">Divorsee</option>
                                <option value="Widower">Widower</option>
                            </select>
                        </div></br>

                        <div class="row mg-t-20">
                            <label class="col-sm-4 form-control-label">Address: <span class="tx-danger">*</span></label>
                            <textarea type="text" name="wifeaddress" value="" style="margin-left: 330px; width:50%;padding: 1px; color:black; border:1px dashed" required='true' class="form-control"></textarea>                
                        </div></br>
                    
                        <div class="row mg-t-20">
                            <label class="col-sm-4 form-control-label">Zipcode: <span class="tx-danger">*</span></label>
                            <input type="text" name="wzipcode" value="" style="margin-left: 328px; width:50%;padding: 1px; color:black; border:1px dashed" class="form-control" required='true' maxlength="6">              
                        </div></br>

                        <div class="row mg-t-20">
                            <label class="col-sm-4 form-control-label">State: <span class="tx-danger">*</span></label>
                            <input type="text" name="wifestate" value="" style="margin-left: 350px; width:50%;padding: 1px; color:black; border:1px dashed"  class="form-control" required='true'>
                        </div></br>
                    </div></br>

                    <h3  class="card-body-title" style="padding-top: 20px;font-size: 22px; ">Witness Details</h3>
                    <hr /></br>

                    <!-- Witness Information Section -->
                        
                    <div class="row">
                        <div class="col-xs-10 col-sm-4 col-md-4 col-lg-4">
                        <label class="col-sm-4 form-control-label">Full Name of Witness: <span class="tx-danger">*</span></label>
                        <input type="text" name="witnessname" value="" style="margin-left: 245px; width:50%;padding: 1px; color:black; border:1px dashed" class="form-control" required='true'>          
                        </div></br>
                    
                        <div class="row mg-t-20">
                            <label class="col-sm-4 form-control-label">Address: <span class="tx-danger">*</span></label>
                            <textarea type="text" name="witnessaddress" value="" style="margin-left: 330px; width:50%;padding: 1px; color:black; border:1px dashed" class="form-control" required='true'></textarea>            
                        </div></br>
                        <hr /></br>
                   

                        <div class="row mg-t-20">
                            <label class="col-sm-4 form-control-label">Full Name of Witness (Husband) <span class="tx-danger">*</span></label>
                            <input type="text" name="hwitnessnames" value="" style="margin-left: 175px; width:50%;padding: 1px; color:black; border:1px dashed" class="form-control" required='true'>              
                        </div></br>

                        <div class="row mg-t-20">
                            <label class="col-sm-4 form-control-label">Father Name of Witness <span class="tx-danger">*</span></label>
                            <input type="text" name="hwitnessfathername" value="" style="margin-left: 230px; width:50%;padding: 1px; color:black; border:1px dashed" class="form-control" required='true'>
                        </div></br>

                        <div class="row mg-t-20">
                            <label class="col-sm-4 form-control-label">Mother Name of Witness: <span class="tx-danger">*</span></label>
                            <input type="text" name="hwitnessmothername" value="" style="margin-left: 220px; width:50%;padding: 1px; color:black; border:1px dashed" class="form-control" required='true'>
                        </div></br>

                        <div class="row mg-t-20">
                            <label class="col-sm-4 form-control-label">Address: <span class="tx-danger">*</span></label>
                            <textarea type="text" name="husbandwitnessaddresss" value="" style="margin-left: 330px; width:50%;padding: 1px; color:black; border:1px dashed" class="form-control" required='true'></textarea>
                        </div><br>
                        <hr /></br>

                        <div class="row mg-t-20">
                            <label class="col-sm-4 form-control-label">Full Name of Witness (Wife) <span class="tx-danger">*</span></label>
                            <input type="text" name="wifewitnessname" value="" style="margin-left: 200px; width:50%;padding: 1px; color:black; border:1px dashed" class="form-control" required='true'>
                        </div></br>

                        <div class="row mg-t-20">
                            <label class="col-sm-4 form-control-label">Father Name of Witness: <span class="tx-danger">*</span></label>
                            <input type="text" name="wifewitnessfathername" value="" style="margin-left: 230px; width:50%;padding: 1px; color:black; border:1px dashed" class="form-control" required='true'>
                        </div></br>

                        <div class="row mg-t-20">
                            <label class="col-sm-4 form-control-label">Mother Name of Witness: <span class="tx-danger">*</span></label>
                            <input type="text" name="wifewitnessmothername" value="" style="margin-left: 220px; width:50%;padding: 1px; color:black; border:1px dashed" class="form-control" required='true'>
                        </div></br>

                        <div class="row mg-t-20">
                            <label class="col-sm-4 form-control-label">Address: <span class="tx-danger">*</span></label>
                            <textarea type="text" name="wifewitnessaddress" value="" style="margin-left: 330px; width:50%;padding: 1px; color:black; border:1px dashed" class="form-control" required='true'></textarea>
                        </div></br>
                    </div></br>

                    <h3  class="card-body-title" style="padding-top: 20px;font-size: 22px; ">Lawer Details</h3>
                    <hr /></br>

                    <!-- Lawer Information Section -->
                        
                    <div class="row">
                        <div class="col-xs-10 col-sm-4 col-md-4 col-lg-4">
                        <label class="col-sm-4 form-control-label">Full Name of Lawer: <span class="tx-danger">*</span></label>
                        <input type="text" name="lawername" value="" style="margin-left: 250px; width:50%;padding: 1px; color:black; border:1px dashed" class="form-control" required='true'>          
                        </div></br>
                    
                        <div class="row mg-t-20">
                            <label class="col-sm-4 form-control-label">Address: <span class="tx-danger">*</span></label>
                            <textarea type="text" name="laweraddress" value="" style="margin-left: 330px; width:50%;padding: 1px; color:black; border:1px dashed" class="form-control" required='true'></textarea>            
                        </div></br>
                        <hr /></br>
                   

                        <div class="row mg-t-20">
                            <label class="col-sm-4 form-control-label">Full Name of Lawer (Husband) <span class="tx-danger">*</span></label>
                            <input type="text" name="hlawername" value="" style="margin-left: 185px; width:50%;padding: 1px; color:black; border:1px dashed" class="form-control" required='true'>              
                        </div></br>

                        <div class="row mg-t-20">
                            <label class="col-sm-4 form-control-label">Father Name of Lawer <span class="tx-danger">*</span></label>
                            <input type="text" name="hlawerfathername" value="" style="margin-left: 240px; width:50%;padding: 1px; color:black; border:1px dashed" class="form-control" required='true'>
                        </div></br>

                        <div class="row mg-t-20">
                            <label class="col-sm-4 form-control-label">Mother Name of Lawer: <span class="tx-danger">*</span></label>
                            <input type="text" name="hlawermothername" value="" style="margin-left: 230px; width:50%;padding: 1px; color:black; border:1px dashed" class="form-control" required='true'>
                        </div></br>

                        <div class="row mg-t-20">
                            <label class="col-sm-4 form-control-label">Address: <span class="tx-danger">*</span></label>
                            <textarea type="text" name="hlaweraddress" value="" style="margin-left: 330px; width:50%;padding: 1px; color:black; border:1px dashed" class="form-control" required='true'></textarea>
                        </div><br>
                        <hr /></br>

                        <div class="row mg-t-20">
                            <label class="col-sm-4 form-control-label">Full Name of Lawer (Wife) <span class="tx-danger">*</span></label>
                            <input type="text" name="wifelawername" value="" style="margin-left: 215px; width:50%;padding: 1px; color:black; border:1px dashed" class="form-control" required='true'>
                        </div></br>

                        <div class="row mg-t-20">
                            <label class="col-sm-4 form-control-label">Father Name of Lawer: <span class="tx-danger">*</span></label>
                            <input type="text" name="wifelawerfathername" value="" style="margin-left: 240px; width:50%;padding: 1px; color:black; border:1px dashed" class="form-control" required='true'>
                        </div></br>

                        <div class="row mg-t-20">
                            <label class="col-sm-4 form-control-label">Mother Name of Lawer: <span class="tx-danger">*</span></label>
                            <input type="text" name="wifelawermothername" value="" style="margin-left: 230px; width:50%;padding: 1px; color:black; border:1px dashed" class="form-control" required='true'>
                        </div></br>

                        <div class="row mg-t-20">
                            <label class="col-sm-4 form-control-label">Address: <span class="tx-danger">*</span></label>
                            <textarea type="text" name="wifelaweraddress" value="" style="margin-left: 330px; width:50%;padding: 1px; color:black; border:1px dashed" class="form-control" required='true'></textarea>
                        </div></br>
                    </div></br>

                        <!-- Other Questions Section -->
                    <div class="row">
                        <h3>Custom Checkboxes</h3>
                        <label class="container">Yes<input type="checkbox" checked="checked"><span class="checkmark"></span></label>
                        <label class="container">No<input type="checkbox" checked="checked"><span class="checkmark"></span></label>
                        </br>
                        <h3>Custom Checkboxes</h3>
                        <label class="container">Yes<input type="checkbox" checked="checked"><span class="checkmark"></span></label>
                        <label class="container">No<input type="checkbox" checked="checked"><span class="checkmark"></span></label>
                        </br>
                        <h3>Custom Checkboxes</h3>
                        <label class="container">Yes<input type="checkbox" checked="checked"><span class="checkmark"></span></label>
                        <label class="container">No<input type="checkbox" checked="checked"><span class="checkmark"></span></label>
                        </br>
                        <h3>Custom Checkboxes</h3>
                        <label class="container">Yes<input type="checkbox" checked="checked"><span class="checkmark"></span></label>
                        <label class="container">No<input type="checkbox" checked="checked"><span class="checkmark"></span></label>
                        </br>
                        <h3>Custom Checkboxes</h3>
                        <label class="container">Yes<input type="checkbox" checked="checked"><span class="checkmark"></span></label>
                        <label class="container">No<input type="checkbox" checked="checked"><span class="checkmark"></span></label>
                        </br>
                    </div>

                    <div class="form-layout-footer mg-t-30">
                        <p style="text-align: center;font-style:bold;"><button class="btn btn-info mg-r-5"  style="margin-left: 200px;padding: 2px; width:50%;height:30px;" name="submit" id="submit">ADD</button></p>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>




    <script src="lib/jquery/jquery.js"></script>
    <script src="lib/jquery-ui/jquery-ui.js"></script>
    <script src="lib/popper.js/popper.js"></script>
    <script src="lib/bootstrap/bootstrap.js"></script>
    <script src="lib/perfect-scrollbar/js/perfect-scrollbar.jquery.js"></script>
    <script src="lib/jquery-toggles/toggles.min.js"></script>
    <script src="lib/highlightjs/highlight.pack.js"></script>
    <script src="lib/select2/js/select2.min.js"></script>
    <script src="lib/spectrum/spectrum.js"></script>
</body>
</html>