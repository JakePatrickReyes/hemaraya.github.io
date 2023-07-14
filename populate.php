<?php
    $pdo = require 'connect.php'; 

//Displaying User
function populateUser($pdo){
    try{
        $sql = 'SELECT * FROM tbl_user';
        $statement = $pdo->query($sql);
        $row = $statement->fetchAll(PDO::FETCH_ASSOC);
        foreach ($row as $r){
            $user_id = $r['user_id'];
            if ($r['status'] == "Active"){
                echo '
                    <tr style="color: black;">
                        <td>'.$r['user_id'].'</td>
                        <td>'.$r['email'].'</td>
                        <td>'.$r['username'].'</td>
                        <td>'.$r['phone'].'</td>
                        <td>'.$r['password'].'</td>
                        <td>'.$r['fullname'].'</td>
                        <td>'.$r['gender'].'</td>
                        <td>'.$r['birthdate'].'</td>
                        <td>'.$r['blood_type'].'</td>
                        <td>'.$r['marital'].'</td>
                        <td>'.$r['nationality'].'</td>
                        <td>'.$r['passport'].'</td>
                        <td>'.$r['office_number'].'</td>
                        <td>'.$r['occupation'].'</td>
                        <td>'.$r['address'].'</td>
                        <td>'.$r['district'].'</td>
                        <td>'.$r['total_donations'].'</td>
                        <td><span class="label label-success">'.$r['status'].'</span></td>
                        <td> 
                            <a href="javascript:ChangeStat('."'$user_id'".')" data-toggle="tooltip" title="Change Status">
                                <button type="button" class="btn btn-default btn-sm">
                                    <span class="glyphicon glyphicon-refresh"></span>
                                </button>
                            </a>
                        </td>
                    </tr>
                ';
            }else{
                echo '
                    <tr style="color: red;">
                        <td>'.$r['user_id'].'</td>
                        <td>'.$r['email'].'</td>
                        <td>'.$r['username'].'</td>
                        <td>'.$r['phone'].'</td>
                        <td>'.$r['password'].'</td>
                        <td>'.$r['fullname'].'</td>
                        <td>'.$r['gender'].'</td>
                        <td>'.$r['birthdate'].'</td>
                        <td>'.$r['blood_type'].'</td>
                        <td>'.$r['marital'].'</td>
                        <td>'.$r['nationality'].'</td>
                        <td>'.$r['passport'].'</td>
                        <td>'.$r['office_number'].'</td>
                        <td>'.$r['occupation'].'</td>
                        <td>'.$r['address'].'</td>
                        <td>'.$r['district'].'</td>
                        <td>'.$r['total_donations'].'</td>
                        <td><span class="label label-success" style="background-color:red">'.$r['status'].'</span></td>
                        <td> 
                            <a href="javascript:ChangeStat('."'$user_id'".')" data-toggle="tooltip" title="Change Status">
                                <button type="button" class="btn btn-default btn-sm">
                                    <span class="glyphicon glyphicon-refresh"></span>
                                </button>
                            </a>
                        </td>
                    </tr>
                ';
            }
        }
        
    }    catch(PDOException $e){
        echo $sql . '<br>'. $e->getMessage();
    }
    $pdo=null;
    $sql=null;
}

function populateDonor($pdo){
    try{
        $sql = 'SELECT * FROM tbl_donors INNER JOIN tbl_user on tbl_donors.user_id = tbl_user.user_id';
        $statement = $pdo->query($sql);
        $row = $statement->fetchAll(PDO::FETCH_ASSOC);
        foreach ($row as $r){
            $donor_id = $r['donor_id'];

            if ($r['donor_status'] == "Pending"){
                echo '
                    <tr style="color: black;">
                        <td>'.$r['donor_id'].'</td>
                        <td>'.$r['fullname'].'</td>
                        <td>'.$r['blood_type'].'</td>
                        <td>'.$r['q1'].'</td>
                        <td>'.$r['q2'].'</td>
                        <td>'.$r['q3'].'</td>
                        <td>'.$r['q4'].'</td>
                        <td>'.$r['q5'].'</td>
                        <td>'.$r['q6'].'</td>
                        <td>'.$r['q7'].'</td>
                        <td>'.$r['q8'].'</td>
                        <td>'.$r['q9'].'</td>
                        <td>'.$r['q10'].'</td>
                        <td>'.$r['q11'].'</td>
                        <td>'.$r['q12'].'</td>
                        <td>'.$r['q13'].'</td>
                        <td>'.$r['q14'].'</td>
                        <td>'.$r['q15'].'</td>
                        <td>'.$r['q16'].'</td>
                        <td>'.$r['q17'].'</td>
                        <td>'.$r['q18'].'</td>
                        <td>'.$r['q19'].'</td>
                        <td>'.$r['q20'].'</td>
                        <td>'.$r['q21'].'</td>
                        <td>'.$r['q22'].'</td>
                        <td>'.$r['q23'].'</td>
                        <td>'.$r['q24'].'</td>
                        <td>'.$r['q25'].'</td>
                        <td>'.$r['q26'].'</td>
                        <td>'.$r['q27'].'</td>
                        <td>'.$r['q28'].'</td>
                        <td>'.$r['q29'].'</td>
                        <td>'.$r['q30'].'</td>
                        <td>'.$r['q31'].'</td>
                        <td>'.$r['q32'].'</td>
                        <td>'.$r['q33'].'</td>
                        <td>'.$r['q34'].'</td>
                        <td>'.$r['q35'].'</td>
                        <td>'.$r['date_approved'].'</td>
                        <td><span class="label label-success" style="background-color:Red">'.$r['donor_status'].'</span></td>
                        <td> 
                            <a href="javascript:ToPending('."'$donor_id'".')" data-toggle="tooltip" title="Set to Pending">
                                <button type="button" class="btn btn-default btn-sm">
                                    <span class="glyphicon glyphicon-time"></span>
                                </button>
                            </a>
                            <a href="javascript:ToApproved('."'$donor_id'".')" data-toggle="tooltip" title="Set to Approved">
                                <button type="button" class="btn btn-default btn-sm">
                                    <span class="glyphicon glyphicon-thumbs-up"></span>
                                </button>
                            </a>
                            <a href="javascript:ToCompleted('."'$donor_id'".')" data-toggle="tooltip" title="Set to Completed">
                                <button type="button" class="btn btn-default btn-sm">
                                    <span class="glyphicon glyphicon-saved"></span>
                                </button>
                            </a>
                        </td>
                    </tr>
                ';
            }

            else if ($r['donor_status'] == "Approved"){
                echo '
                    <tr style="color: black;">
                        <td>'.$r['donor_id'].'</td>
                        <td>'.$r['fullname'].'</td>
                        <td>'.$r['blood_type'].'</td>
                        <td>'.$r['q1'].'</td>
                        <td>'.$r['q2'].'</td>
                        <td>'.$r['q3'].'</td>
                        <td>'.$r['q4'].'</td>
                        <td>'.$r['q5'].'</td>
                        <td>'.$r['q6'].'</td>
                        <td>'.$r['q7'].'</td>
                        <td>'.$r['q8'].'</td>
                        <td>'.$r['q9'].'</td>
                        <td>'.$r['q10'].'</td>
                        <td>'.$r['q11'].'</td>
                        <td>'.$r['q12'].'</td>
                        <td>'.$r['q13'].'</td>
                        <td>'.$r['q14'].'</td>
                        <td>'.$r['q15'].'</td>
                        <td>'.$r['q16'].'</td>
                        <td>'.$r['q17'].'</td>
                        <td>'.$r['q18'].'</td>
                        <td>'.$r['q19'].'</td>
                        <td>'.$r['q20'].'</td>
                        <td>'.$r['q21'].'</td>
                        <td>'.$r['q22'].'</td>
                        <td>'.$r['q23'].'</td>
                        <td>'.$r['q24'].'</td>
                        <td>'.$r['q25'].'</td>
                        <td>'.$r['q26'].'</td>
                        <td>'.$r['q27'].'</td>
                        <td>'.$r['q28'].'</td>
                        <td>'.$r['q29'].'</td>
                        <td>'.$r['q30'].'</td>
                        <td>'.$r['q31'].'</td>
                        <td>'.$r['q32'].'</td>
                        <td>'.$r['q33'].'</td>
                        <td>'.$r['q34'].'</td>
                        <td>'.$r['q35'].'</td>
                        <td>'.$r['date_approved'].'</td>
                        <td><span class="label label-success" style="background-color:Orange">'.$r['donor_status'].'</span></td>
                        <td> 
                            <a href="javascript:ToPending('."'$donor_id'".')" data-toggle="tooltip" title="Set to Pending">
                                <button type="button" class="btn btn-default btn-sm">
                                    <span class="glyphicon glyphicon-time"></span>
                                </button>
                            </a>
                            <a href="javascript:ToApproved('."'$donor_id'".')" data-toggle="tooltip" title="Set to Approved">
                                <button type="button" class="btn btn-default btn-sm">
                                    <span class="glyphicon glyphicon-thumbs-up"></span>
                                </button>
                            </a>
                            <a href="javascript:ToCompleted('."'$donor_id'".')" data-toggle="tooltip" title="Set to Completed">
                                <button type="button" class="btn btn-default btn-sm">
                                    <span class="glyphicon glyphicon-saved"></span>
                                </button>
                            </a>
                        </td>
                    </tr>
                ';
            }
            
            else{
                echo '
                    <tr style="color: black;">
                        <td>'.$r['donor_id'].'</td>
                        <td>'.$r['fullname'].'</td>
                        <td>'.$r['blood_type'].'</td>
                        <td>'.$r['q1'].'</td>
                        <td>'.$r['q2'].'</td>
                        <td>'.$r['q3'].'</td>
                        <td>'.$r['q4'].'</td>
                        <td>'.$r['q5'].'</td>
                        <td>'.$r['q6'].'</td>
                        <td>'.$r['q7'].'</td>
                        <td>'.$r['q8'].'</td>
                        <td>'.$r['q9'].'</td>
                        <td>'.$r['q10'].'</td>
                        <td>'.$r['q11'].'</td>
                        <td>'.$r['q12'].'</td>
                        <td>'.$r['q13'].'</td>
                        <td>'.$r['q14'].'</td>
                        <td>'.$r['q15'].'</td>
                        <td>'.$r['q16'].'</td>
                        <td>'.$r['q17'].'</td>
                        <td>'.$r['q18'].'</td>
                        <td>'.$r['q19'].'</td>
                        <td>'.$r['q20'].'</td>
                        <td>'.$r['q21'].'</td>
                        <td>'.$r['q22'].'</td>
                        <td>'.$r['q23'].'</td>
                        <td>'.$r['q24'].'</td>
                        <td>'.$r['q25'].'</td>
                        <td>'.$r['q26'].'</td>
                        <td>'.$r['q27'].'</td>
                        <td>'.$r['q28'].'</td>
                        <td>'.$r['q29'].'</td>
                        <td>'.$r['q30'].'</td>
                        <td>'.$r['q31'].'</td>
                        <td>'.$r['q32'].'</td>
                        <td>'.$r['q33'].'</td>
                        <td>'.$r['q34'].'</td>
                        <td>'.$r['q35'].'</td>
                        <td>'.$r['date_approved'].'</td>
                        <td><span class="label label-success">'.$r['donor_status'].'</span></td>
                        <td> 
                            <a href="javascript:ToPending('."'$donor_id'".')" data-toggle="tooltip" title="Set to Pending">
                                <button type="button" class="btn btn-default btn-sm">
                                    <span class="glyphicon glyphicon-time"></span>
                                </button>
                            </a>
                            <a href="javascript:ToApproved('."'$donor_id'".')" data-toggle="tooltip" title="Set to Approved">
                                <button type="button" class="btn btn-default btn-sm">
                                    <span class="glyphicon glyphicon-thumbs-up"></span>
                                </button>
                            </a>
                            <a href="javascript:ToCompleted('."'$donor_id'".')" data-toggle="tooltip" title="Set to Completed">
                                <button type="button" class="btn btn-default btn-sm">
                                    <span class="glyphicon glyphicon-saved"></span>
                                </button>
                            </a>
                        </td>

                    </tr>
                ';
            }
        }
        
    }
    catch(PDOException $e){
        echo $sql . '<br>'. $e->getMessage();
    }
    $pdo=null;
    $sql=null;
}

function populateRequestor($pdo){
    try{
        $sql = 'SELECT * FROM tbl_requestors INNER JOIN tbl_user on tbl_requestors.user_id = tbl_user.user_id ORDER BY requestor_id ASC';
        $statement = $pdo->query($sql);
        $row = $statement->fetchAll(PDO::FETCH_ASSOC);
        foreach ($row as $r){
            $requestor_id = $r['requestor_id'];

            if ($r['requestor_status'] == "Pending"){
                echo '
                    <tr style="color: black;">
                        <td>'.$r['requestor_id'].'</td>
                        <td>'.$r['fullname'].'</td>
                        <td>'.$r['blood_type'].'</td>
                        <td>'.$r['reason'].'</td>
                        <td>'.$r['date_requested'].'</td>
                        <td>'.$r['date_approved'].'</td>
                        <td><span class="label label-success" style="background-color:Red">'.$r['requestor_status'].'</span></td>
                        <td> 
                            <a href="javascript:ToPending('."'$requestor_id'".')" data-toggle="tooltip" title="Set to Pending">
                                <button type="button" class="btn btn-default btn-sm">
                                    <span class="glyphicon glyphicon-time"></span>
                                </button>
                            </a>
                            <a href="javascript:ToApproved('."'$requestor_id'".')" data-toggle="tooltip" title="Set to Approved">
                                <button type="button" class="btn btn-default btn-sm">
                                    <span class="glyphicon glyphicon-thumbs-up"></span>
                                </button>
                            </a>
                            <a href="javascript:ToCompleted('."'$requestor_id'".')" data-toggle="tooltip" title="Set to Completed">
                                <button type="button" class="btn btn-default btn-sm">
                                    <span class="glyphicon glyphicon-saved"></span>
                                </button>
                            </a>
                        </td>
                    </tr>
                ';
            }

            else if ($r['requestor_status'] == "Approved"){
                echo '
                    <tr style="color: black;">
                        <td>'.$r['requestor_id'].'</td>
                        <td>'.$r['fullname'].'</td>
                        <td>'.$r['blood_type'].'</td>
                        <td>'.$r['reason'].'</td>
                        <td>'.$r['date_requested'].'</td>
                        <td>'.$r['date_approved'].'</td>
                        <td><span class="label label-success" style="background-color:Orange">'.$r['requestor_status'].'</span></td>
                        <td> 
                            <a href="javascript:ToPending('."'$requestor_id'".')" data-toggle="tooltip" title="Set to Pending">
                                <button type="button" class="btn btn-default btn-sm">
                                    <span class="glyphicon glyphicon-time"></span>
                                </button>
                            </a>
                            <a href="javascript:ToApproved('."'$requestor_id'".')" data-toggle="tooltip" title="Set to Approved">
                                <button type="button" class="btn btn-default btn-sm">
                                    <span class="glyphicon glyphicon-thumbs-up"></span>
                                </button>
                            </a>
                            <a href="javascript:ToCompleted('."'$requestor_id'".')" data-toggle="tooltip" title="Set to Completed">
                                <button type="button" class="btn btn-default btn-sm">
                                    <span class="glyphicon glyphicon-saved"></span>
                                </button>
                            </a>
                        </td>
                    </tr>
                ';
            }
            else{
                echo '
                    <tr style="color: black;">
                        <td>'.$r['requestor_id'].'</td>
                        <td>'.$r['fullname'].'</td>
                        <td>'.$r['blood_type'].'</td>
                        <td>'.$r['reason'].'</td>
                        <td>'.$r['date_requested'].'</td>
                        <td>'.$r['date_approved'].'</td>
                        <td><span class="label label-success">'.$r['requestor_status'].'</span></td>
                        <td> 
                            <a href="javascript:ToPending('."'$requestor_id'".')" data-toggle="tooltip" title="Set to Pending">
                                <button type="button" class="btn btn-default btn-sm">
                                    <span class="glyphicon glyphicon-time"></span>
                                </button>
                            </a>
                            <a href="javascript:ToApproved('."'$requestor_id'".')" data-toggle="tooltip" title="Set to Approved">
                                <button type="button" class="btn btn-default btn-sm">
                                    <span class="glyphicon glyphicon-thumbs-up"></span>
                                </button>
                            </a>
                            <a href="javascript:ToCompleted('."'$requestor_id'".')" data-toggle="tooltip" title="Set to Completed">
                                <button type="button" class="btn btn-default btn-sm">
                                    <span class="glyphicon glyphicon-saved"></span>
                                </button>
                            </a>
                        </td>
                    </tr>
                ';
            }
        }
        
    }
    catch(PDOException $e){
        echo $sql . '<br>'. $e->getMessage();
    }
    $pdo=null;
    $sql=null;
}


function populateEvent($pdo){
    try{
        $sql = 'SELECT * FROM tbl_events INNER JOIN tbl_user on tbl_events.user_id = tbl_user.user_id';
        $statement = $pdo->query($sql);
        $row = $statement->fetchAll(PDO::FETCH_ASSOC);
        foreach ($row as $r){
            $event_id = $r['event_id'];

            if ($r['event_status'] == "Pending"){
                echo '
                    <tr style="color: black;">
                        <td>'.$r['event_id'].'</td>
                        <td>'.$r['fullname'].'</td>
                        <td>'.$r['contact_email'].'</td>
                        <td>'.$r['event_title'].'</td>
                        <td>'.$r['event_organizer'].'</td>
                        <td>'.$r['event_location'].'</td>
                        <td>'.$r['event_time'].'</td>
                        <td>'.$r['event_date'].'</td>
                        <td>'.$r['date_approved'].'</td>
                        <td><span class="label label-success" style="background-color:red">'.$r['event_status'].'</span></td>
                        <td> 
                            <a href="javascript:ToPending('."'$event_id'".')" data-toggle="tooltip" title="Set to Pending">
                                <button type="button" class="btn btn-default btn-sm">
                                    <span class="glyphicon glyphicon-time"></span>
                                </button>
                            </a>
                            <a href="javascript:ToApproved('."'$event_id'".')" data-toggle="tooltip" title="Set to Approved">
                                <button type="button" class="btn btn-default btn-sm">
                                    <span class="glyphicon glyphicon-thumbs-up"></span>
                                </button>
                            </a>
                            <a href="javascript:ToCompleted('."'$event_id'".')" data-toggle="tooltip" title="Set to Completed">
                                <button type="button" class="btn btn-default btn-sm">
                                    <span class="glyphicon glyphicon-saved"></span>
                                </button>
                            </a>
                        </td>
                    </tr>
                ';
            }

            else if ($r['event_status'] == "Approved"){
                echo '
                    <tr style="color: black;">
                        <td>'.$r['event_id'].'</td>
                        <td>'.$r['fullname'].'</td>
                        <td>'.$r['contact_email'].'</td>
                        <td>'.$r['event_title'].'</td>
                        <td>'.$r['event_organizer'].'</td>
                        <td>'.$r['event_location'].'</td>
                        <td>'.$r['event_time'].'</td>
                        <td>'.$r['event_date'].'</td>
                        <td>'.$r['date_approved'].'</td>
                        <td><span class="label label-success" style="background-color:Orange">'.$r['event_status'].'</span></td>
                        <td> 
                            <a href="javascript:ToPending('."'$event_id'".')" data-toggle="tooltip" title="Set to Pending">
                                <button type="button" class="btn btn-default btn-sm">
                                    <span class="glyphicon glyphicon-time"></span>
                                </button>
                            </a>
                            <a href="javascript:ToApproved('."'$event_id'".')" data-toggle="tooltip" title="Set to Approved">
                                <button type="button" class="btn btn-default btn-sm">
                                    <span class="glyphicon glyphicon-thumbs-up"></span>
                                </button>
                            </a>
                            <a href="javascript:ToCompleted('."'$event_id'".')" data-toggle="tooltip" title="Set to Completed">
                                <button type="button" class="btn btn-default btn-sm">
                                    <span class="glyphicon glyphicon-saved"></span>
                                </button>
                            </a>
                        </td>
                    </tr>
                ';
            }

            else{
                echo '
                    <tr style="color: black;">
                        <td>'.$r['event_id'].'</td>
                        <td>'.$r['fullname'].'</td>
                        <td>'.$r['contact_email'].'</td>
                        <td>'.$r['event_title'].'</td>
                        <td>'.$r['event_organizer'].'</td>
                        <td>'.$r['event_location'].'</td>
                        <td>'.$r['event_time'].'</td>
                        <td>'.$r['event_date'].'</td>
                        <td>'.$r['date_approved'].'</td>
                        <td><span class="label label-success">'.$r['event_status'].'</span></td>
                        <td> 
                            <a href="javascript:ToPending('."'$event_id'".')" data-toggle="tooltip" title="Set to Pending">
                                <button type="button" class="btn btn-default btn-sm">
                                    <span class="glyphicon glyphicon-time"></span>
                                </button>
                            </a>
                            <a href="javascript:ToApproved('."'$event_id'".')" data-toggle="tooltip" title="Set to Approved">
                                <button type="button" class="btn btn-default btn-sm">
                                    <span class="glyphicon glyphicon-thumbs-up"></span>
                                </button>
                            </a>
                            <a href="javascript:ToCompleted('."'$event_id'".')" data-toggle="tooltip" title="Set to Completed">
                                <button type="button" class="btn btn-default btn-sm">
                                    <span class="glyphicon glyphicon-saved"></span>
                                </button>
                            </a>
                        </td>
                    </tr>
                ';
            }
            
        }
        
    }
    catch(PDOException $e){
        echo $sql . '<br>'. $e->getMessage();
    }
    $pdo=null;
    $sql=null;
}


function populateAppointment($pdo){
    try{
        $sql = 'SELECT * FROM tbl_appointment INNER JOIN tbl_user on tbl_appointment.user_id = tbl_user.user_id';
        $statement = $pdo->query($sql);
        $row = $statement->fetchAll(PDO::FETCH_ASSOC);
        foreach ($row as $r){
            $appointment_id = $r['appointment_id'];

            if ($r['appointment_status'] == "Pending"){
                echo '
                    <tr style="color: black;">
                        <td>'.$r['appointment_id'].'</td>
                        <td>'.$r['fullname'].'</td>
                        <td>'.$r['requestedAppt'].'</td>
                        <td>'.$r['date_approved'].'</td>
                        <td><span class="label label-success" style="background-color:Red">'.$r['appointment_status'].'</span></td>
                        <td> 
                            <a href="javascript:ToPending('."'$appointment_id'".')" data-toggle="tooltip" title="Set to Pending">
                                <button type="button" class="btn btn-default btn-sm">
                                    <span class="glyphicon glyphicon-time"></span>
                                </button>
                            </a>
                            <a href="javascript:ToApproved('."'$appointment_id'".')" data-toggle="tooltip" title="Set to Approved">
                                <button type="button" class="btn btn-default btn-sm">
                                    <span class="glyphicon glyphicon-thumbs-up"></span>
                                </button>
                            </a>
                            <a href="javascript:ToCompleted('."'$appointment_id'".')" data-toggle="tooltip" title="Set to Completed">
                                <button type="button" class="btn btn-default btn-sm">
                                    <span class="glyphicon glyphicon-saved"></span>
                                </button>
                            </a>
                        </td>
                    </tr>
                ';
            }

            else if ($r['appointment_status'] == "Approved"){
                echo '
                    <tr style="color: black;">
                        <td>'.$r['appointment_id'].'</td>
                        <td>'.$r['fullname'].'</td>
                        <td>'.$r['requestedAppt'].'</td>
                        <td>'.$r['date_approved'].'</td>
                        <td><span class="label label-success" style="background-color:Orange">'.$r['appointment_status'].'</span></td>
                        <td> 
                            <a href="javascript:ToPending('."'$appointment_id'".')" data-toggle="tooltip" title="Set to Pending">
                                <button type="button" class="btn btn-default btn-sm">
                                    <span class="glyphicon glyphicon-time"></span>
                                </button>
                            </a>
                            <a href="javascript:ToApproved('."'$appointment_id'".')" data-toggle="tooltip" title="Set to Approved">
                                <button type="button" class="btn btn-default btn-sm">
                                    <span class="glyphicon glyphicon-thumbs-up"></span>
                                </button>
                            </a>
                            <a href="javascript:ToCompleted('."'$appointment_id'".')" data-toggle="tooltip" title="Set to Completed">
                                <button type="button" class="btn btn-default btn-sm">
                                    <span class="glyphicon glyphicon-saved"></span>
                                </button>
                            </a>
                        </td>
                    </tr>
                ';
            }

            else{
                echo '
                    <tr style="color: black;">
                        <td>'.$r['appointment_id'].'</td>
                        <td>'.$r['fullname'].'</td>
                        <td>'.$r['requestedAppt'].'</td>
                        <td>'.$r['date_approved'].'</td>
                        <td><span class="label label-success">'.$r['appointment_status'].'</span></td>
                        <td> 
                            <a href="javascript:ToPending('."'$appointment_id'".')" data-toggle="tooltip" title="Set to Pending">
                                <button type="button" class="btn btn-default btn-sm">
                                    <span class="glyphicon glyphicon-time"></span>
                                </button>
                            </a>
                            <a href="javascript:ToApproved('."'$appointment_id'".')" data-toggle="tooltip" title="Set to Approved">
                                <button type="button" class="btn btn-default btn-sm">
                                    <span class="glyphicon glyphicon-thumbs-up"></span>
                                </button>
                            </a>
                            <a href="javascript:ToCompleted('."'$appointment_id'".')" data-toggle="tooltip" title="Set to Completed">
                                <button type="button" class="btn btn-default btn-sm">
                                    <span class="glyphicon glyphicon-saved"></span>
                                </button>
                            </a>
                        </td>
                    </tr>
                ';
            }
        }
        
    }
    catch(PDOException $e){
        echo $sql . '<br>'. $e->getMessage();
    }
    $pdo=null;
    $sql=null;
}


function populateHospital($pdo){
    try{
        $sql = 'SELECT * FROM tbl_hospital';
        $statement = $pdo->query($sql);
        $row = $statement->fetchAll(PDO::FETCH_ASSOC);
        foreach ($row as $r){
            $hospital_id = $r['hospital_id'];

                echo '
                    <tr style="color: black;">
                        <td>'.$r['hospital_id'].'</td>
                        <td>'.$r['hospital_name'].'</td>
                        <td>'.$r['bloodstock_o_plus'].'</td>
                        <td>'.$r['bloodstock_o_minus'].'</td>
                        <td>'.$r['bloodstock_a_plus'].'</td>
                        <td>'.$r['bloodstock_a_minus'].'</td>
                        <td>'.$r['bloodstock_b_plus'].'</td>
                        <td>'.$r['bloodstock_b_minus'].'</td>
                        <td>'.$r['bloodstock_ab_plus'].'</td>
                        <td>'.$r['bloodstock_ab_minus'].'</td>
                        <td> 
                        <a href="javascript:changeStock('."'$hospital_id'".')" data-toggle="tooltip" title="Edit Stocks">
                            <button type="button" class="btn btn-default btn-sm">
                                <span class="glyphicon glyphicon-edit"></span>
                            </button>
                        </a>
                    </td>
                    </tr>
                ';
            
        }
        
    }
    catch(PDOException $e){
        echo $sql . '<br>'. $e->getMessage();
    }
    $pdo=null;
    $sql=null;
}
?>