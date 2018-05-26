<?php
     require_once("add.php");
     session_start();
     date_default_timezone_set("Asia/Kolkata");
     $friendobject = new FriendActivites();
     $type = $_POST['type'];
     $id = base64_decode($_POST['id']);
     $userid = $_SESSION['userData']['id'];
     
     switch($type)
     {
     case "friendRequest":
                          $result = $friendobject->addFriends($userid,$id);
                          echo $result;
                          break;
     case "friendlist":
                       $result = $friendobject->listofFriends($userid);
                        $size =  sizeof($result);
                        if(!$size)
                        {
                        echo "NO Friends found...";
                        }
                       foreach($result as $key)
                       {
                       if($key['userid'] != $userid)
                       {
                        ?>
                        <div class="container1" id="<?php echo $key['userid']; ?>">
  <img src="<?php echo $key['photo'];?>" alt="Avatar" style="width:100%;">
  <p><?php echo $key['username']." ".$key['lastname']; ?>&nbsp<small style='<?php $userstate = $friendobject->activeuser($key['userid']); $userst=""; $date=""; foreach($userstate as $keys){$userst = $keys['status']; $date = $keys['date'];if($userst){ echo"background: rgb(66, 183, 1); border-radius: 50%; display: inline-block; height: 6px; margin-left: 4px; width: 6px"; }else{echo "color:red; margin-left:30%";}} ?>' id="msgnotif<?php echo $key['userid']; ?>"><?php if(!$userst){ $end = $date;
    $start  = date('Y-m-d H:i:s');   
    $d_start    = new DateTime($start); 
    $d_end      = new DateTime($end); 
    $diff = $d_start->diff($d_end); 
    // return all data  
    $day      = $diff->format('%d'); 
    $hour     = $diff->format('%h'); 
    $min      = $diff->format('%i'); 
    $sec      = $diff->format('%s');
     if($day !=0)
    {
    $myFormatForView = $day."d";
     
    }
    elseif($hour !=0)
    {
    $myFormatForView = $hour."h";
   
    }
    elseif($min !=0)
    {
      $myFormatForView = $min."m";
    }
    else
    {
      $myFormatForView ="";
      } echo $myFormatForView; } ?></small></p>
</div>
                        <?php 
                        }
                       }
                       break;
     
     case "displaytextobx":
                           $leng = $_POST['leng'];
                           $useid = $_POST['id'];
                           $name = $_POST['name'];
                           ?>
                           <div style="border:solid 1px;width:265px;height:auto;z-index:100;position: fixed; display:flex;flex-direction: column;flex-direction:column;transform: translateY(0); background: white;bottom:0;left:<?php echo $leng*20; ?>%;" class="chat-boxing" id="chat<?php echo $useid;?>"><div class="box-head" style="margin:4%;cursor: pointer;"><i><?php echo $name; ?></i><i style="font-size:24px;float:right;cursor: pointer;" class="fa remchat" id="rm<?php echo $useid; ?>">&#xf00d;</i></div><hr style="margin:2px"><div style="width:100%;height:280px; overflow-y: scroll;" class="mas-contanar" id="display<?php echo $useid; ?>"><div style="display: inline-flex;"><center>loading.....</center>
</div></div><hr style="margin:2px;border-color:#55a4d6;"><div><input type="text" class="chat-box" id="n<?php echo $useid; ?>" style="border:none;"></div></div>
                           <?php 
                           break;
     case "friendrequerstlist":
                               $userid =$_SESSION['userData']['id'];
                               $result = $friendobject->listoffriendreq();
                               $size = sizeof($result);
                               if(!$size)
                               {
                               echo "No Request is present..";
                               }
                               foreach($result as $key)
                               {
                               if($key['userid'] != $userid)
                       {?>
                               <div class="container2" >
  <img src="<?php echo $key['photo'];?>" alt="Avatar" style="width:100%;">
  
  <p><?php echo $key['username']." ".$key['lastname']; ?></p>
  <button class="btn btn-success frequst" style="float: right;" id="<?php echo $key['id']; ?>">adds</button>
 
</div>
                              <?php }}
                               break;
                               
     case "accept":
                   $id = $_POST['id'];
                   $result = $friendobject->acceptFriend($id);
                   if($result)
                   {
                   echo $result;
                   }
                   break;
     case "pendingmsg":
            $id = $_POST['id'];
            $userid = $_SESSION['userData']['id'];
            $result = $friendobject->NotificationMsg($id);
            foreach($result as $key)
            {
               if($key['userid'] != $userid)
               {
                 echo "yes";
               }
            }
            break;
    case "fullviewchat":
                        $id = $_POST['id'];
                        $userid = $_SESSION['userData']['id'];
						$pre_date=NULL;
						$curr_date;
                        $result = $friendobject->fullviewchat($id,$userid);
                        foreach($result as $key)
                        {
                          if($key['userid'] == $userid)
                          {
							 $date= $key['date'];
							 $curr_date=date("Y-M-d",strtotime($date));
							 
							 if($curr_date!= $pre_date){
								 $d=date("M-d",strtotime($date));
								 echo '<p style="text-align: center;padding:2px;font-weight:600"><span>'.$d.'</span></p>';							
							 }
							 $pre_date=$curr_date;
							 $time=date("H:i",strtotime($date));
							 
                          ?>  
							
							<p style="padding:20px"><span class="me"><?= $key['message']; ?> <span style="margin-left: 15px;font-size: 11px;color: #367371;"><?= $time; ?></span></span></p>
			
                          <?php 
                          } 
                          else
                          {
							   $date= $key['date'];
							   $time=date("H:i",strtotime($date));
                          ?>
                          <p style="padding: 10px;"><span class="you"><span style="margin-right: 15px;font-size: 11px;color: #367371;"><?= $time; ?></span><?= $key['message']; ?></span></p>
                          <?php 
                          }
                        }
                        break;




	case "allchats":
                        
                        $userid = $_SESSION['userData']['id'];
                        $result = $friendobject->allchats($userid);
                        foreach($result as $key)
                        {
                          if($key['userid'] == $userid)
                          {
                          ?>  
							<p style="padding: 10px;text-align: center;"><span>Date of message</span></p>							
							<p style="padding: 10px;"><span class="me"><?= $key['message']; ?></span></p>
			
                          <?php 
                          }
                          else
                          {
                          ?>
                          <p style="padding: 10px;"><span class="you"><?= $key['message']; ?></span></p>
                          <?php 
                          }
                        }
                        break;
						
						
						
						
     default:
        echo "no";
     }    
 ?>