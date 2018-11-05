            <?php
            require_once'functions.php';
            if (isset($_POST['submit'])) {
                $agent = $_POST['agent'];
                $agentphone = $_POST['agentphone'];
                $passport = $_POST['passport'];
                $surname = $_POST['surname'];
                $gnames = $_POST['gnames'];
                $nationality = $_POST['nationality'];
                $dob = $_POST['dob'];
                $gender = $_POST['gender'];
                $pobirth = $_POST['pobirth'];
                $poissue = $_POST['poissue'];
                $isdate = $_POST['isdate'];
                $exdate = $_POST['exdate'];
                $phone = $_POST['phone'];
                $email = $_POST['email'];
                $cGroup = $_POST['cGroup'];
                $dependent = $_POST['dependent'];
                $drelation = $_POST['drelation'];
                $dphone = $_POST['dphone'];
                $serviceT = $_POST['serviceT'];
                $visa = $_POST['visa'];
                $ticket = $_POST['ticket'];
                $accomodation = $_POST['accomodation'];
                $destination = $_POST['destination'];
                $provider = $_POST['provider'];
                $ptravel = $_POST['ptravel'];
                $preturn = $_POST['preturn'];
                $atravel = $_POST['atravel'];
                $areturn = $_POST['areturn'];
                $paymentT = $_POST['paymentT'];
                $tcost = $_POST['tcost'];
                $pay = $_POST['pay'];
                $dop = $_POST['dop'];
                $id = $_POST['client'];

            $addClient = $db->query("UPDATE clients SET agent ='$agent', agentphone ='$agentphone', passport ='$passport', isdate ='$isdate', exdate ='$exdate', poissue ='$poissue', pobirth ='$pobirth', nationality ='$nationality', surname ='$surname', gnames ='$gnames', dob ='$dob', gender ='$gender', phone ='$phone', cGroup ='$cGroup', email ='$email', dependent ='$dependent', drelation ='$drelation', dphone ='$dphone', serviceT ='$serviceT', visa ='$visa', ticket ='$ticket', accomodation ='$accomodation', provider ='$provider', destination ='$destination', ptravel ='$ptravel', preturn ='$preturn', atravel ='$atravel', areturn ='$areturn', paymentT ='$paymentT', tcost ='$tcost', pay ='$pay', dop ='$dop'   WHERE id ='$id' ");
            if ($addClient) {
              echo "
              <div class='alert alert-success'>
                <strong>Client SuccessFully Updated </strong> Nice work Thank You
                <div><meta HTTP-EQUIV='Refresh' CONTENT='1; URL=cProfile?client=".trim($id)."'></div>
                </div>
                
              ";
            } else {
                echo "
                <div class='alert alert-danger'>
                  <strong>Failed!</strong> Try again.
                  </div>
                ";
            }
            }
            ?>